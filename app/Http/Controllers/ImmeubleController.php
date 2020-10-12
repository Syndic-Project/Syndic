<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImmeuble;
use App\Immeuble;
use App\Ville;
use Illuminate\Http\Request;


class ImmeubleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(Ville::all());
        // return view('Addimeuble')
        //     ->with("villes", Ville::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImmeuble $request)
    {
        //validateur = voir store immeuble


        //premiere methode pour ajouter dans la db 
        $immeuble = new Immeuble();
        $immeuble->Nom_Immeuble = $request->input('nom');
        $immeuble->id_ville = $request->input('ville');
        $immeuble->code_postal = $request->input('code_postal');
        $immeuble->Adresse = $request->input('adresse');
        $immeuble->Montant_Cotisation_Mensuelle = $request->input('cotisation');
        $immeuble->Montant_Disponible_En_Caisse = $request->input('caisse');
        $immeuble->save();
        return redirect('/immeubles');

        // dd("ok");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
