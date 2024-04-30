<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorerecetteRequest;
use App\Http\Requests\UpdaterecetteRequest;
use App\Models\recette;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\User;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->categories = Category::all();
        $this->recettes = Recette::all();
        $this->users = User::all();

        return view('recette.index', $this->data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->categories = Category::all();
        $this->ingredients = Ingredient::all();
        

        return view('recette.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorerecetteRequest $request)
    {
        $categories = 
        $recette = new Recette();
        $recette->titre = $request->titre;
        $recette->description = $request->description;
        $recette->temps_cuisson = $request->temps_cuisson;
        $recette->temps_preparation = $request->temps_preparation;
        $recette->difficulte = $request->difficulte;
        $recette->prix = $request->prix;
        $recette->save();

        $recette->categories()->attach($categories);

        return view('recette.show', compact('recette'));
    }

    /**
     * Display the specified resource.
     */
    public function show(recette $recette)
    {
        $this->recette = Recette::find($recette->id);
        $this->category = Category::find($recette->category_id);
        $this->auteur = User::find($recette->user_id)->name;

        return view('recette.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(recette $recette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdaterecetteRequest $request, recette $recette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(recette $recette)
    {
        //
    }
}
