<?php

namespace App\Controllers;

class Landingpage extends BaseController
{
    public function index()
    {
        return view('landingpage/home');
    }

    public function login()
    {
        return view('login');
    }
}
