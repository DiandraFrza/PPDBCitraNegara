<?php

namespace App\Controllers;

use App\Models\PpdbSiswaModel;
use CodeIgniter\Controller;

class PpdbSiswaController extends Controller
{
    protected $ppdbSiswaModel;

    public function __construct()
    {
        $this->ppdbSiswaModel = new PpdbSiswaModel();
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
            'tempat_lahir' => 'required|max_length[50]',
            'tanggal_lahir' => 'required|valid_date',
            'alamat' => 'required',
            'telepon' => 'required|max_length[15]',
            'email' => 'required|valid_email|is_unique[ppdb_siswa.email]',
            'pilihan_jurusan' => 'required|max_length[50]',
            'nilai_ijazah' => 'required|decimal',
            'foto_siswa' => 'uploaded[foto_siswa]|is_image[foto_siswa]|max_size[foto_siswa,2048]',
            'dokumen_pendukung' => 'uploaded[dokumen_pendukung]|max_size[dokumen_pendukung,2048]',
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Simpan data ke database
        $this->ppdbSiswaModel->insert([
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'email' => $this->request->getPost('email'),
            'pilihan_jurusan' => $this->request->getPost('pilihan_jurusan'),
            'nilai_ijazah' => $this->request->getPost('nilai_ijazah'),
            'foto_siswa' => $this->request->getFile('foto_siswa')->store(),
            'dokumen_pendukung' => $this->request->getFile('dokumen_pendukung')->store(),
        ]);

        return redirect()->to('/ppdb_siswa')->with('message', 'Data siswa berhasil disimpan!');
    }

    // Tampilkan daftar siswa terdaftar
    public function index()
    {
        $data['siswa'] = $this->ppdbSiswaModel->findAll();
        return view('ppdb_siswa/index', $data);
    }
}
