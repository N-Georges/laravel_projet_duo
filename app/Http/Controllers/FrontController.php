<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        return view('blog');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function contact()
    {
        return view('contact');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
