<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $article = Blog::all();
        return view('admin.blog.main', compact('article'));

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


    public function destroy(Blog $id)
    {
        $id->delete();
        return Redirect()->back();
    }

    public function show(Blog $id)
    {
        return view('show', compact('id'));
    }
}
