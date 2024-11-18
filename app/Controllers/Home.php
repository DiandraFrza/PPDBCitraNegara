<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'PPDBP Citra Negara'
        ];
        return view('user/dashboard', $data);
    }
}
