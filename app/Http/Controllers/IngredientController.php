<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ingredient.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ingredient_en' => 'required|max:30',
            'ingredient_fr' => 'required|max:30',
        ]);
        $ingredient = [
            'en' => $request->ingredient_en,
/*             'fr' => $request->ingredient_fr, */
        ];
        if($request->ingredient_fr != null) { $ingredient = $ingredient + ['fr' => $request->ingredient_fr];};
        // dd($ingredient);
        Ingredient::create([
            'nom' => $ingredient
        ]);
        return back()->withSuccess('Ingredient created successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingredient $ingredient)
    {   
        return view('ingredient.edit', ['ingredient' => $ingredient]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        
        $request->validate([
            'ingredient_en' => 'required|max:30',
            'ingredient_fr' => 'required|max:30',
        ]);

        $laIngredient = [
            'en' => $request->ingredient_en,
            'fr' => $request->ingredient_fr,
        ];
        
        
        $ingredient->update([
            'nom' => $laIngredient
        ]);

        return redirect()->route('ingredient.edit', $ingredient->id)->with('success', 'Ingredient updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredient $ingredient)
    {
        //
    }
}
