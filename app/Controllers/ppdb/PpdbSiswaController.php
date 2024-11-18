<?php

namespace App\Controllers\ppdb;

use App\Models\PpdbSiswaModel;
use CodeIgniter\Controller;
use Hermawan\DataTables\DataTable;

class PpdbSiswaController extends Controller
{
    protected $ppdbSiswaModel;

    public function __construct()
    {
        $this->ppdbSiswaModel = new PpdbSiswaModel();
    }

    public function export_pdf()
    {
        // Logic untuk export ke PDF
    }

    public function export_excel()
    {
        // Logic untuk export ke Excel
    }

    public function create()
    {
        return view('ppdb_siswa/create'); // View form pendaftaran
    }

    // Tampilkan form pendaftaran
    public function daftar()
    {
        $data = [
            'title' => 'Pendaftaran'
        ];
        return view('ppdb_siswa/daftar'); // View form pendaftaran
    }

    // Simpan data siswa baru
    public function store()
    {
        // Validasi data
        $validation = $this->validate([
            'nama_lengkap' => 'required|max_length[100]',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|valid_date',
            'alamat' => 'required',
            'telepon' => 'required|max_length[15]',
            'email' => 'required|valid_email|is_unique[ppdb_siswa.email]',
            'pilihan_jurusan' => 'required|max_length[50]',
            'nilai_ijazah' => 'required|decimal',
            'foto_siswa' => 'is_image[foto_siswa]|max_size[foto_siswa,2048]',
            'dokumen_pendukung' => 'max_size[dokumen_pendukung,2048]',
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Upload foto siswa & dokumen pendukung
        $fotoSiswa = $this->request->getFile('foto_siswa');
        $dokumenPendukung = $this->request->getFile('dokumen_pendukung');

        $fotoSiswaPath = $fotoSiswa && $fotoSiswa->isValid() ? $fotoSiswa->store('public/uploads/foto_siswa') : null;
        $dokumenPendukungPath = $dokumenPendukung && $dokumenPendukung->isValid() ? $dokumenPendukung->store('public/uploads/dokumen_pendukung') : null;

        // $tanggalLahir = $this->request->getPost('tanggal_lahir');
        // if (strpos($tanggalLahir, '/') !== false) {
        //     // Convert dd/mm/yyyy to yyyy-mm-dd
        //     $tanggalParts = explode('/', $tanggalLahir);
        //     $tanggalLahir = $tanggalParts[2] . '-' . $tanggalParts[1] . '-' . $tanggalParts[0];
        // }

        // Simpan data siswa ke database
        $this->ppdbSiswaModel->insert([
            'nama_lengkap' => esc($this->request->getPost('nama_lengkap')),
            'jenis_kelamin' => esc($this->request->getPost('jenis_kelamin')),
            'tanggal_lahir' => esc($this->request->getPost('tanggal_lahir')),
            'alamat' => esc($this->request->getPost('alamat')),
            'telepon' => esc($this->request->getPost('telepon')),
            'email' => esc($this->request->getPost('email')),
            'pilihan_jurusan' => esc($this->request->getPost('pilihan_jurusan')),
            'nilai_ijazah' => esc($this->request->getPost('nilai_ijazah')),
            'foto_siswa' => $fotoSiswaPath,
            'dokumen_pendukung' => $dokumenPendukungPath,
        ]);

        session()->setFlashdata('success', 'Selamat, pendaftaran berhasil! Silahkan tunggu informasi selanjutnya.');
        return redirect()->to('/');
    }


    public function list_siswa()
    {
        return DataTable::of($this->ppdbSiswaModel)
            ->add(null, function ($row) {
                return '<a href="' . site_url('ppdb_siswa/edit/' . $row->id_siswa) . '" class="btn btn-warning btn-sm">Edit</a>
                        <form action="' . site_url('ppdb_siswa/delete/' . $row->id_siswa) . '" method="post" style="display:inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\');">Delete</button>
                        </form>';
            })
            ->hide('id_siswa') // hide id siswa
            ->toJson();
    }


    // Tampilkan daftar siswa terdaftar
    public function index()
    {
        $data['siswa'] = $this->ppdbSiswaModel->findAll();
        return view('ppdb_siswa/index', $data);
    }

    public function edit($id)
    {
        $data['siswa'] = $this->ppdbSiswaModel->find($id);
        return view('ppdb_siswa/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->ppdbSiswaModel->update($id, $data);
        return redirect()->to('/ppdb_siswa')->with('message', 'Data siswa berhasil diperbarui');
    }

    public function delete($id)
    {
        $this->ppdbSiswaModel->delete($id);
        return redirect()->to('/ppdb_siswa')->with('message', 'Data siswa berhasil dihapus');
    }
}
