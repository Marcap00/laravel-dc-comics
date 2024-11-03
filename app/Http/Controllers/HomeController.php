<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $pokemon = Pokemon::all();
        return view('pages.home', compact('pokemon'));
    }

    public function filterStage(string $stage)
    {
        $pokemon = Pokemon::where('stage_of_evolution', $stage)->get();
        /* @dd($pokemon); */
        return view('pages.home', compact('pokemon'));
    }
}