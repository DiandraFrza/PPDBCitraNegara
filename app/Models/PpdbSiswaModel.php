<?php

namespace App\Models;

use CodeIgniter\Model;

class PpdbSiswaModel extends Model
{
    protected $table = 'ppdb_siswa';
    protected $primaryKey = 'id_siswa';
    protected $allowedFields = [
        'nama_lengkap',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'telepon',
        'email',
        'pilihan_jurusan',  // Pastikan ini ada
        'nilai_ijazah',
        'foto_siswa',
        'dokumen_pendukung'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
