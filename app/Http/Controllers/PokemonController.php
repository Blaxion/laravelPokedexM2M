<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        $pokemons = Pokemon::all();
        return view('pokemon',compact('types','pokemons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pokemon = new Pokemon();
        $pokemon->nom = $request->nom;
        $pokemon->img = $request->img;
        $pokemon->lvl = $request->lvl;
        $pokemon->types()->sync([$request->t1, $request->t1]);
        $pokemon->push();
        return redirect('/pokemon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        
        return view('showpokemon',compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        return view('editpokemon',compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        $pokemon->nom = $request->nom;
        $pokemon->img = $request->img;
        $pokemon->lvl = $request->lvl;
        $pokemon->types()->sync([$request->t1, $request->t1]);
        $pokemon->push();
        return redirect('/pokemon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
        return redirect()->back();
    }
}
