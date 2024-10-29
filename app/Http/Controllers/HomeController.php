<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $links_pages = config('links_pages');
        return view('pages.home', compact('links_pages'));
    }
}
