<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Appartement;
use App\Models\Caisse;
use App\Models\Locataire;
use App\Notifications\RegisterNotify;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class LocataireController extends Controller
{
    public static function getLocataireByCin(Request $request)
    {
        $locataire = Locataire::where('cin', $request->cin)->where('isVisible', true)->first();
        return  $locataire ?
            $locataire->toJson(JSON_PRETTY_PRINT) :
            'not_found';
    }

    public static function getLocataireByNomPrenom(Request $request)
    {
        $locataire = Locataire::where('nom', $request->nom)->where('prenom', $request->prenom)->where('isVisible', true)->first();
        return $locataire ?
            $locataire->toJson(JSON_PRETTY_PRINT) :
            'not_found';
    }

    public static function getAppartementsDuLocataire(Request $request)
    {
        $id_locataire = $request->id_locataire;
        $appartements = DB::select("select a.*, i.montant_cotisation_mensuelle
                                    from appartements a inner join immeubles i on a.id_immeuble = i.id
                                    where a.isVisible = 1
                                    and a.id in (select id_appartement
                                                    from caisses
                                                    where id_locataire = $id_locataire)");
        return $appartements ? json_encode($appartements) : 'not_found';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Locataires/GestionLocataire')
            ->with("appartements", Appartement::doesntHave('caisses')->where('isVisible', true)->get())
            ->with("locataires", Locataire::where('isVisible', true)->get());
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
        $locataire->isVisible = true;
        $locataire->password = Hash::make($request->mdp);
        $locataire->save();
        $mdpvar = $request->mdp;

        if ($request->appartements)
            foreach ($request->appartements as $appartement_nom) {
                $appartement = Appartement::where("nom", $appartement_nom)->first();
                $caisse = new Caisse();
                $caisse->id_Appartement = $appartement->id;
                $caisse->id_Locataire = $locataire->id;
                $caisse->montant = $appartement->immeuble->Montant_Cotisation_Mensuelle;
                $caisse->mois_concerne = Carbon::now()->addMonths(1);
                $caisse->save();
            }


        session::put('email', $locataire->email);
        session::put('mdp', $mdpvar);
        // session::put('verification', $locataire->sendEmailVerificationNotification());
        // $locataire->email_verified_at = Carbon::now();
        Mail::to($locataire->email)->send(new WelcomeMail());


        // $locataire->notify(new RegisterNotify());

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
        Locataire::where('id', '=', $locataire_id)->update(['isVisible' => false]);
        return redirect(url()->previous());
    }
}
