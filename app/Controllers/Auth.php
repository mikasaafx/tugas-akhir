<?php

namespace App\Controllers;

class Auth extends BaseController
{

    public function login()
    {
        $data = [
            'title' => 'Masuk | Lovestreet'
        ];

        // $data['title'] => "login";
        return view('/auth/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Daftar | Lovestreet'
        ];

        // $data['title'] => "Register";
        return view('/auth/register', $data);
    }

}
