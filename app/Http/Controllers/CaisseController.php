<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Immeuble;
use Illuminate\Http\Request;
use App\Models\Caisse;
use Illuminate\Support\Facades\Date;

class CaisseController extends Controller
{
    public static function getCaisseByAppartement(Request $request)
    {
        $id_appartement = $request->id_appartement;
        return Caisse::where('id_appartement', $id_appartement)->get()->toJson();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Caisses/AddCaisse', [
            'immeubles' => Immeuble::all(),
            'appartements' => Appartement::all(),
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paiement = Caisse::where('id', $request->caisseHidden)->first();
        $paiement->Date_Paiment = new Date();
        $paiement->save();

        // $paiement_prochain = new Caisse();
        // $paiement_prochain->id_Appartement = $request->appartementHidden;
        // $paiement_prochain->id_Locataire = $request->locataireHidden;
        // $paiement_prochain->mois_concerne = $request->moisHidden;
        // $paiement_prochain->save();

        dd($request);
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
