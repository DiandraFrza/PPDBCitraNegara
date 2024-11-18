<?php

namespace App\Controllers\Admin;

use App\Models\AdminModel;
use App\Models\PpdbSiswaModel;
use App\Controllers\BaseController;

class AdminController extends BaseController
{
    protected $adminModel;
    protected $ppdbSiswaModel;
    protected $session;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->ppdbSiswaModel = new PpdbSiswaModel();
        $this->session = session();
    }

    public function login()
    {
        $data = [
            'title' => 'Login SMK Citra Negara'
        ];
        return view('admin/login', $data);
    }

    public function attemptLogin()
    {
        $data = [
            'title' => 'Login SMK Citra Negara',
            'currentPage' => 'dashboard'
        ];
        return view('admin/dashboard', $data);
    }

    // public function dashboard()
    // {
    //     $data = [
    //         'title' => 'Dashboard Admin',
    //         'siswa' => $this->ppdbSiswaModel->findAll()
    //     ];
    //     return view('admin/dashboard', $data);
    // }

    public function dashboard()
    {
        session()->set('logged_in', true);

        $data = [
            'title' => 'Dashboard Admin',
            'currentPage' => 'dashboard',
            'siswa' => $this->ppdbSiswaModel->findAll()
        ];
        return view('admin/dashboard', $data);
    }

    public function data_pndftaran()
    {
        session()->set('logged_in', true);

        $data = [
            'title' => 'Data PPDB',
            'currentPage' => 'data_pndftaran',
            'siswa' => $this->ppdbSiswaModel->findAll()
        ];
        return view('admin/data_pndftaran', $data);
    }

    public function list_admin()
    {
        $data = [
            'title' => 'List Admin',
            'currentPage' => 'list_admin',
            'admins' => $this->adminModel->findAll()
        ];

        return view('admin/list_admin', $data);
    }

    // CRUD
    public function create()
    {
        $data = ['title' => 'Tambah Admin'];
        return view('admin/create', $data);
    }

    public function store()
    {
        $this->adminModel->save([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            // Hash password sebelum disimpan
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getPost('role'),
        ]);

        return redirect()->to('/admin/dashboard')->with('success', 'Admin berhasil ditambahkan');
    }

    public function tambahSiswa()
    {
        $data = [
            'title' => 'Tambah Data Siswa',
            'currentPage' => 'data_pndftaran'
        ];

        return view('admin/tambah_siswa', $data); // Pastikan view-nya sesuai
    }

    public function simpanSiswa()
    {
        // Validasi input
        if (!$this->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|valid_date',
            'alamat' => 'required',
            'telepon' => 'required|numeric',
            'email' => 'required|valid_email',
            'pilihan_jurusan' => 'required',
            'nilai_ijazah' => 'required|numeric',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->ppdbSiswaModel->save([
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'email' => $this->request->getPost('email'),
            'pilihan_jurusan' => $this->request->getPost('pilihan_jurusan'),
            'nilai_ijazah' => $this->request->getPost('nilai_ijazah'),
        ]);

        return redirect()->to('/admin/data_pndftaran')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function editSiswa($id)
    {
        $siswa = $this->ppdbSiswaModel->find($id);

        if (!$siswa) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data siswa dengan ID $id tidak ditemukan.");
        }

        $data = [
            'title' => 'Edit Data Siswa',
            'currentPage' => 'data_pndftaran',
            'siswa' => $siswa
        ];

        return view('admin/edit_siswa', $data);
    }

    public function updateSiswa($id)
    {
        // Validasi input
        if (!$this->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|valid_date',
            'alamat' => 'required',
            'telepon' => 'required|numeric',
            'email' => 'required|valid_email',
            'pilihan_jurusan' => 'required',
            'nilai_ijazah' => 'required|numeric',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->ppdbSiswaModel->update($id, [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'email' => $this->request->getPost('email'),
            'pilihan_jurusan' => $this->request->getPost('pilihan_jurusan'),
            'nilai_ijazah' => $this->request->getPost('nilai_ijazah'),
        ]);

        return redirect()->to('/admin/data_pndftaran')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function hapusSiswa($id)
    {
        $this->ppdbSiswaModel->delete($id);
        return redirect()->to('/admin/data_pndftaran')->with('success', 'Data siswa berhasil dihapus.');
    }
}
