<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $article = Portfolio::all();
        return view('admin.portfolio.main', compact('article'));
    }
    public function create() 
    {
        return view('admin.Portfolio.create');
    }

    public function store(Request $request)
    {
        $Portfolio = new Portfolio();
        $Portfolio -> img = $request->img;
        $Portfolio -> titre = $request->titre;
        $Portfolio -> descri = $request->descri;
        $Portfolio -> save();
        return Redirect()->route('portfolio');
    }


    public function destroy(Portfolio $id)
    {
        $id->delete();
        return Redirect()->back();
    }
}
