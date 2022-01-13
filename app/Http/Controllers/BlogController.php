<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        
        return view('admin.blog.main');

    }

    public function create() 
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog -> img = $request->img;
        $blog -> titre = $request->titre;
        $blog -> descri = $request->descri;
        $blog -> save();
        return Redirect()->route('blog');
    }
}
