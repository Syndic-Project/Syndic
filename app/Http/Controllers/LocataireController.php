<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Caisse;
use App\Models\Locataire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocataireController extends Controller
{

    public static function getLocataireByCin(Request $request)
    {
        return Locataire::where('cin', $request->cin)->first() ?
            Locataire::where('cin', $request->cin)
            ->first()->toJson(JSON_PRETTY_PRINT) :
            'not_found';
    }

    public static function getLocataireByNomPrenom(Request $request)
    {
        return Locataire::where('nom', $request->nom)->where('prenom', $request->prenom)->first() ?
            Locataire::where('nom', $request->nom)
            ->where('prenom', $request->prenom)
            ->first()->toJson(JSON_PRETTY_PRINT) :
            'not_found';
    }

    public static function getAppartementsDuLocataire(Request $request)
    {
        $id_locataire = $request->id_locataire;
        return json_encode(DB::select("select a.*, i.montant_cotisation_mensuelle
                                       from appartements a inner join immeubles i on a.id_immeuble = i.id
                                       where a.id in (select id_appartement
                                                        from caisses
                                                        where id_locataire = $id_locataire)"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Locataires/AddLocataire')
            ->with("appartements", Appartement::all())
            ->with("locataires", Locataire::all());
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $locataire = new Locataire();
        $locataire->nom = $request->input('nom');
        $locataire->prenom = $request->input('prenom');
        $locataire->CIN = $request->input('cin');
        $locataire->email = $request->input('email');
        $locataire->password = $request->input('mdp');
        $locataire->Tel = $request->input('tel');
        $locataire->save();

        foreach ($request->Affecter as $appartement_id) {
            $caisse = new Caisse();
            $caisse->id_Appartement = $appartement_id;
            $caisse->id_Locataire = $locataire->id;
            $caisse->save();
        }

        dd("ok");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
