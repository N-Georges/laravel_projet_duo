<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        $article = Blog::all();
        return view('blog', compact('article'));
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
