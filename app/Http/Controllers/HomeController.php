<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $pokemon = Pokemon::all();
        $links_pages = config('links_pages');
        return view('pages.home', compact('links_pages', 'pokemon'));
    }
}