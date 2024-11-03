<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel = new UserModel();

        $user = new User([
            'email'    => 'admin@example.com',
            'username' => 'admin',
            'password' => 'admin123',
            'active'   => 1
        ]);

        // Simpan user dengan peran admin
        $userModel->save($user);
        $userModel->addGroup($userModel->getInsertID(), 'admin');
    }
}
