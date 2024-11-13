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
