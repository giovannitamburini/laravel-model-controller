<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // creo le funzioni che richiamiamo dalle rotte

    public function home()
    {

        return view('home');
    }

    public function index()
    {
        // controllo di aver ottenuto il database nel modo corretto
        // dd(Movie::all());
        $movies = Movie::all();

        return view('movies/index', compact('movies'));
    }
}
