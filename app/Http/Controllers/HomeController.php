<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('pages.home');
    }

    public function pengumuman()
    {
        return view('pages.pengumuman');
    }
}
