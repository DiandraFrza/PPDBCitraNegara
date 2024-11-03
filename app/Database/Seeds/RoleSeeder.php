<?php

// app/Database/Seeds/RoleSeeder.php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Myth\Auth\Models\GroupModel;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $groupModel = new GroupModel();

        // Menambahkan roles dengan skip validation
        $groupModel->skipValidation(true)->insert([
            'name' => 'admin',
            'description' => 'Administrator'
        ]);

        $groupModel->skipValidation(true)->insert([
            'name' => 'guru',
            'description' => 'Guru'
        ]);

        $groupModel->skipValidation(true)->insert([
            'name' => 'staff',
            'description' => 'Staff'
        ]);
    }
}
