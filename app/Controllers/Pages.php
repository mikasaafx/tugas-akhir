<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home | Lovestreet'
        ];

        return view('/pages/home', $data);
    }


    public function about()
    {
    	$data = [
            'title' => 'About Us | Lovestreet'
        ];

    	return view('/pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us | Lovestreet'
        ];

        return view('/pages/contact', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Masuk | Lovestreet'
        ];

        return view('/pages/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Daftar | Lovestreet'
        ];

        return view('/pages/register', $data);
    }

    public function users()
    {
        $data = [
            'title' => 'Beranda'
        ];

        return view('/pages/users', $data);
    }
}
