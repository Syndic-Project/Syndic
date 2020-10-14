<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImmeuble;
use App\Models\Immeuble;
use App\Models\Bloc;
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

        return view('Immeubles/Addimeuble')
            ->with("blocs", Bloc::all());
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
        $immeuble->id_bloc                      = $request->input('bloc');
        $immeuble->Nom_Immeuble                 = $request->input('nom');
        $immeuble->Montant_Cotisation_Mensuelle = $request->input('cotisation');
        $immeuble->Montant_Disponible_En_Caisse = $request->input('caisse');
        $immeuble->save();

        return redirect('/syndic/Appartements');


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
