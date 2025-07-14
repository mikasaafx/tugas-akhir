<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "Hello World!";
        // return view('/pages/home');
    }

    public function nama()
    {
        echo "$this->nama";
    }
}
