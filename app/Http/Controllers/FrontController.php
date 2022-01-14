<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portfolio;
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
        $article = Portfolio::all();
        return view('portfolio', compact('article'));
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
