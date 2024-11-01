<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePokemonRequest;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemon = Pokemon::all();
        $links_pages = config('links_pages');
        return view('layouts.table', compact('pokemon', 'links_pages'));
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
    public function store(StorePokemonRequest $request)
    {
        $dataForm = $request->validate();

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
    public function update(StorePokemonRequest $request, string $id)
    {
        $dataForm = $request->validate();

        $updatedPokemon = Pokemon::findorFail($id);
        $updatedPokemon->update($dataForm);

        return redirect()->route('pokemon.show', $updatedPokemon->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $p = Pokemon::findorFail($id);
        $p->delete();

        return redirect()->route('pokemon.index');
    }

    public function restore(string $id)
    {
        $restoredPokemon = Pokemon::onlyTrashed()->findorFail($id);
        $restoredPokemon->restore();

        return redirect()->route('pokemon.bin');
    }

    public function permanentDestroy(string $id)
    {
        $permanentDestroyedPokemon = Pokemon::onlyTrashed()->findorFail($id);
        $permanentDestroyedPokemon->forceDelete();

        return redirect()->route('pokemon.bin');
    }

    public function bin()
    {
        // if we are in front of a query builder we must use get() method
        $pokemon = Pokemon::onlyTrashed()->get();
        $links_pages = config('links_pages');
        return view('layouts.table', compact('pokemon', 'links_pages'));
    }
}
