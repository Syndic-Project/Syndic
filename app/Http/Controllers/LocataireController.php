<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Caisse;
use App\Models\Locataire;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        return view('Locataires/GestionLocataire')
            ->with("appartements", Appartement::doesntHave('caisses')->get())
            ->with("locataires", Locataire::all());
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
        $locataire->nom = $request->nom;
        $locataire->prenom = $request->prenom;
        $locataire->Tel = $request->tel;
        $locataire->CIN = $request->cin;
        $locataire->email = $request->email;
        $locataire->password = Hash::make($request->mdp);
        $locataire->save();

        foreach ($request->appartements as $appartement_nom) {
            $appartement = Appartement::where("nom", $appartement_nom)->first();
            $caisse = new Caisse();
            $caisse->id_Appartement = $appartement->id;
            $caisse->id_Locataire = $locataire->id;
            $caisse->montant = $appartement->immeuble->Montant_Cotisation_Mensuelle;
            $caisse->mois_concerne = Carbon::now()->addMonths(1);
            $caisse->save();
        }

        return redirect(url()->previous());
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
        $locataire = Locataire::find($id)->first();

        if ($locataire
            ->update([
                "nom" => $request->nomModif,
                "prenom" => $request->prenomModif,
                "CIN" => $request->cinModif,
                "email" => $request->emailModif,
                "Tel" => $request->telModif,
                "password" => $request->mdpModif == "************" ? Hash::make($locataire->password) : Hash::make($locataire->mdpModif),
            ])
        ) {
            Session::flash('message', "Les données de - Mr/Mme $locataire->nom $locataire->prenom -  ont été mise à jour avec succées");
            Session::flash('alert-class', 'alert-success');
        } else {
            Session::flash('message', "Erreur lors de la mise à jour des données de - Mr/Mme $locataire->nom $locataire->prenom -");
            Session::flash('alert-class', 'alert-danger');
        }

        return redirect(url()->previous());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $locataire_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($locataire_id)
    {
        Caisse::where('id_Locataire', '=', $locataire_id)
            ->update(['id_Locataire' => NULL]);
        Locataire::find($locataire_id)->delete();
        return redirect(url()->previous());
    }
}
