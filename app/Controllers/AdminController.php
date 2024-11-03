<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\PpdbSiswaModel;

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
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $admin = $this->adminModel->getAdminByEmail($username);

        // Cek apakah admin ditemukan dan password valid
        if ($admin && password_verify($password, $admin['password'])) {
            // Set session data
            session()->set('admin_id', $admin['id']);
            session()->set('admin_name', $admin['nama']);

            return redirect()->to('/admin/dashboard')->with('success', 'Selamat datang, ' . $admin['nama']);
        } else {
            // Jika login gagal
            return redirect()->back()->with('error', 'Username atau password salah.')->withInput();
        }
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
        // Cek jika user belum login
        if (!$this->session->get('logged_in')) {
            return redirect()->to('/admin/login');
        }

        $data = [
            'title' => 'Dashboard Admin',
            'currentPage' => 'dashboard',
            'siswa' => $this->ppdbSiswaModel->findAll()
        ];
        return view('admin/dashboard', $data);
    }

    public function index()
    {
        $data = [
            'title' => 'List Admin',
            'currentPage' => 'list_admin',
            'admins' => $this->adminModel->findAll()
        ];

        return view('admin/index', $data);
    }

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

        return redirect()->to('/admin')->with('success', 'Admin berhasil ditambahkan');
    }
}
