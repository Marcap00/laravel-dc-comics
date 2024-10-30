<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemon = Pokemon::all();
        $links_pages = config('links_pages');
        return view('pokemon.index', compact('pokemon', 'links_pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $links_pages = config('links_pages');
        return view('pokemon.create', compact('links_pages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataForm = $request->all();

        $newPokemon = Pokemon::create($dataForm);

        return redirect()->route('pokemon.show', $newPokemon->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $p = Pokemon::findorFail($id);
        $links_pages = config('links_pages');
        return view('pokemon.show', compact('p', 'links_pages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $p = Pokemon::findorFail($id);
        $links_pages = config('links_pages');
        return view('pokemon.edit', compact('p', 'links_pages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataForm = $request->all();

        $updatedPokemon = Pokemon::findorFail($id);
        $updatedPokemon->update($dataForm);

        return redirect()->route('pokemon.show', ["id" => $updatedPokemon->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}