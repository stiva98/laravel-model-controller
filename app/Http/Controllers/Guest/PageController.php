<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
//Models
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() 
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function contatti() 
    {
        return view('contatti');
    }

    public function chi_siamo() 
    {
        return view('chi_siamo');
    }

    public function documentazione() 
    {
        return view('documentazione');
    }
}
