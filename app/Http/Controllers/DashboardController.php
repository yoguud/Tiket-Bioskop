<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $films = Film::all();
        $moviesByGenre = Film::all()->groupBy('genre');
        return view('dashboard',[
            'films' => $films,
            'moviesByGenre' => $moviesByGenre,
        ]);
    }
}
