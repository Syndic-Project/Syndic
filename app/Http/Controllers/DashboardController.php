<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Bloc;
use App\Models\Caisse;
use App\Models\Facture;
use App\Models\Immeuble;
use App\Models\Locataire;
use App\Models\Securite;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $derniermoispaye = DB::table('caisses')->where('id_Appartement', '=', 1)
//            ->where('id_Locataire', '=', $idl)
            ->orderBy('mois_concerne', 'desc')->first()->mois_concerne;
        $derniermoispaye = Carbon::parse($derniermoispaye)->floorMonth();

        $mantant = DB::table('caisses')->where('id_Appartement', '=', 1)
            ->orderBy('mois_concerne', 'desc')->first()->montant;

        $now = Carbon::now();
        $now = Carbon::parse($now)->floorMonth();
        $res = $derniermoispaye->diffInMonths($now);
        $moisenretard = $res;
        $retard_du_tatal_a_paye = $moisenretard * $mantant;

        $Totaldeslocataireretard = DB::table('locataires')
            ->join('caisses', 'caisses.id_locataire', '=', 'locataires.id')
            ->where('mois_concerne', '<', $now)
            ->orderBy('mois_concerne', 'desc')
            ->groupBy('id_locataire')
            ->count('locataires.id');


        $Totaldeslocataire_en_Avance = DB::table('locataires')
            ->join('caisses', 'caisses.id_locataire', '=', 'locataires.id')
            ->where('mois_concerne', '>', $now)
            ->orderBy('mois_concerne', 'desc')
            ->groupBy('mois_concerne')
            ->count('locataires.id');


        $blocimapp = DB::table('blocs')
            ->join('immeubles', 'immeubles.id_bloc', '=', 'blocs.id')
            ->join('appartements', 'appartements.id_Immeuble', '=', 'immeubles.id')
            ->get();

//
//        $sommetotalcaisse=DB::table('caisses')
//            ->orderBy('mois_concerne', 'desc')
//            ->sum('montant');


//        dd($Totaldeslocataire_en_Avance);
//        dd(Bloc::count('id'));
//        dd(Bloc::count('id'), Immeuble::count('id'), Appartement::count('id'), Locataire::count('id'), Securite::count('id'));
//        dd(Appartement::count('id'));
//        dd(Locataire::count('id'));
//        dd(Securite::count('id'));


        return view('index')
            ->with("totalcaisse", Caisse::sum('montant'))
            ->with("totalbloc", Bloc::count('id'))
            ->with("totalappar", Appartement::count('id'))
            ->with("totalLocataire", Locataire::count('id'))
            ->with("totalImmeuble", Immeuble::count('id'))
            ->with("appartements", Appartement::all())
            ->with("nbrmoisretard", $moisenretard)
            ->with("montantpayeretard", $retard_du_tatal_a_paye)
            ->with("totalLocataireenRetard", $Totaldeslocataireretard)
            ->with("totalLocataireenAvance", $Totaldeslocataire_en_Avance)
            ->with("totaldepence", Facture::count('id'))
            ->with("totalSecurite", Securite::count('id'));
    }

   public  function pourcentage_appartement_non_paye($id)
    {



    }
}
