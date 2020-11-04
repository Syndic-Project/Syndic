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
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;


class DashboardController extends Controller
{
    public function index()
    {


        //alkhir appartement 1 fo9ach khelset
        $derniermoispaye = DB::table('caisses')
            ->where('id_Appartement', '=', 1)
            ->orderBy('mois_concerne', 'desc')->first()->mois_concerne;
        //ch7al raha menchher retard
        $derniermoispaye = Carbon::parse($derniermoispaye)->floorMonth();
        $now = Carbon::now();
        $nbr_de_mois_en_retard = $derniermoispaye->diffInMonths($now);

        //cotisation mensuelle pour une immeuble 1

        $cotisation_mensuelle = DB::table('immeubles')
            ->where('id', '=', 1)
            ->first()->Montant_Cotisation_Mensuelle;

        //credit a paye

        $creadit = $nbr_de_mois_en_retard * $cotisation_mensuelle;



        //total des locataire en retard
        $Totaldeslocataireretard = DB::table('locataires')
            ->join('caisses', 'caisses.id_locataire', '=', 'locataires.id')
            ->where('mois_concerne', '<', $now)
            ->orderBy('mois_concerne', 'desc')
            ->groupBy('mois_concerne')
            ->distinct()
            ->count('locataires.id');

        //total des locataire en avance
        $Totaldeslocataire_en_Avance = DB::table('locataires')
            ->join('caisses', 'caisses.id_locataire', '=', 'locataires.id')
            ->where('mois_concerne', '>', $now)
            ->orderBy('mois_concerne', 'desc')
            ->groupBy('mois_concerne')
            ->distinct()
            ->count('locataires.id');


        //        $blocimapp = DB::table('blocs')
        //            ->join('immeubles', 'immeubles.id_bloc', '=', 'blocs.id')
        //            ->join('appartements', 'appartements.id_Immeuble', '=', 'immeubles.id')
        //            ->get();




        return view('index')
            ->with("totalcaisse", Caisse::sum('montant'))
            ->with("totalbloc", Bloc::count('id'))
            ->with("totalappar", Appartement::count('id'))
            ->with("totalLocataire", Locataire::count('id'))
            ->with("totalImmeuble", Immeuble::count('id'))
            ->with("immeubles", Immeuble::all())
            ->with("nbrmoisretard", $nbr_de_mois_en_retard)
            ->with("montantpayeretard", $creadit)
            ->with("totalLocataireenRetard", $Totaldeslocataireretard)
            ->with("totalLocataireenAvance", $Totaldeslocataire_en_Avance)
            ->with("totaldepence", Facture::count('id'))
            ->with("totalSecurite", Securite::count('id'));
    }

    public function pourcentage_appartement_non_paye()
    {
        $now = Carbon::now();
        $Totaldeslocatairejretard = DB::table('locataires')
            ->join('caisses', 'caisses.id_locataire', '=', 'locataires.id')
            ->join('appartements', 'appartements.id', '=', 'caisses.id_Appartement')
            ->where('mois_concerne', '<', $now)
            ->orderBy('mois_concerne', 'desc')
            ->groupBy('mois_concerne')
            ->count('appartements.id');
        $totaldeslocataires = Locataire::count('id');

        $PosurcentagedeAppartementNonPaye = $Totaldeslocatairejretard / $totaldeslocataires * 100;
        return json_encode($PosurcentagedeAppartementNonPaye);
    }
}
