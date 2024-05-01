<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEtapeRequest;
use App\Http\Requests\UpdateEtapeRequest;
use App\Models\Etape;
use App\Models\Recette;

class EtapeController extends Controller
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
        $recettes = Recette::all();
        return view('etape.create', compact('recettes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEtapeRequest $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validated();
        
        // Créer une nouvelle étape avec la description fournie
        $etape = new Etape();
        $etape->description = $request->input('description');
        $etape->recette_id = $request->input('recette_id'); // Assurez-vous que recette_id est bien dans le formulaire
        $etape->save();
        
        // Redirection vers la recette avec l'ID de la recette
        return redirect()->route('recette.show', $etape->recette_id)->with('success', 'Étape créée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etape $etape)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etape $etape)
    {
        return view('etape.edit', compact('etape'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEtapeRequest $request, Etape $etape)
    {
        // Récupérer les données du formulaire
        $data = $request->validated();
        
        // Vérifier si la clé 'description' existe dans les données récupérées
        // Mettre à jour la description de l'étape
        $etape->description = $data['description'];
        $etape->save();
        
        // Redirection avec un message de succès
        return redirect()->route('recette.show', $etape->recette_id)->with('success', 'Étape mise à jour avec succès');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etape $etape)
    {
        //
    }
}
