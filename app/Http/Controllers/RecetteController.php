<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorerecetteRequest;
use App\Http\Requests\UpdaterecetteRequest;
use App\Models\Recette;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\User;
use Illuminate\Http\Request;

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
        
        /* dd($user) */
        $this->categories = Category::all();
        $this->ingredients = Ingredient::all();
        

        return view('recette.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorerecetteRequest $request)
    {
        $ingredients  = $request->ingredient_id;
        $auteur = 1;

        $category = $request->category;
        $recette = new Recette();
        $recette->titre = $request->titre;
        $recette->description = $request->description;
        $recette->category_id = $request->category_id;
        $recette->temps_cuisson = $request->temps_cuisson;
        $recette->temps_preparation = $request->temps_preparation;
        $recette->user_id = 1;
        $recette->save();

        $recette->ingredients()->attach($ingredients);

        return view('recette.show', compact('recette'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Recette $recette)
    {
        $this->recette = Recette::find($recette->id);
        $this->category = Category::find($recette->category_id);
        $this->auteur = User::find($recette->user_id)->name;

        return view('recette.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recette $recette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdaterecetteRequest $request, Recette $recette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recette $recette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function createAddIngredient(Recette $recette)
    {
        $this->recette = $recette;
        $this->ingredients = Ingredient::all();
        

        return view('recette.add-ingredient', $this->data);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function storeAddIngredient(Request $request, Recette $recette)
    {
        $ingredients  = [1, 2, 4];

        $recette->ingredients()->attach($ingredients);
  
        return view('recette'. $recette->id, compact('recette'));
    }


}
