<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PpdbSiswaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_siswa'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_lengkap'   => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'jenis_kelamin'  => [
                'type'       => 'ENUM',
                'constraint' => ['Laki-Laki', 'Perempuan'],
            ],
            'tanggal_lahir'  => [
                'type' => 'DATE',
            ],
            'alamat'         => [
                'type' => 'TEXT',
            ],
            'telepon'        => [
                'type'       => 'VARCHAR',
                'constraint' => 15,
            ],
            'email'          => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'unique'     => true,
            ],
            'pilihan_jurusan' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'nilai_ijazah'   => [
                'type'       => 'FLOAT',
                'null'       => true,
            ],
            'foto_siswa'     => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'dokumen_pendukung' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'created_at'     => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at'     => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at'     => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_siswa', true);
        $this->forge->createTable('ppdb_siswa');
    }

    public function down()
    {
        $this->forge->dropTable('ppdb_siswa', true);
    }
}
