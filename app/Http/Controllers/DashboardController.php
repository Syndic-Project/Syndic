<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Bloc;
use App\Models\Caisse;
use App\Models\Facture;
use App\Models\Immeuble;
use App\Models\Locataire;
use App\Models\Securite;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $now = Carbon::now();

        $TotalAppartementretard = DB::table('locataires')
            ->join('caisses', 'caisses.id_locataire', '=', 'locataires.id')
            ->join('appartements', 'appartements.id', '=', 'caisses.id_Appartement')
            ->where('mois_concerne', '<', $now)
            ->orderBy('mois_concerne', 'desc')
            ->groupBy('mois_concerne')
            ->count('appartements.id');
      
        $totaldesAppartement = Appartement::count('id');

        $PosurcentagedeAppartementNonPaye = $TotalAppartementretard / $totaldesAppartement * 100;
        $chart = (new LarapexChart)
            ->setType('pie')
            ->setTitle('Appartement en retard')
            ->setXAxis(['en retard'])
            ->setLabels(['en retard','Payes'])
            ->setColors(['#ff6384', '#B8B8B8'])
            ->setDataset([$PosurcentagedeAppartementNonPaye,100-$PosurcentagedeAppartementNonPaye]);
//        $chart = (new LarapexChart)->setTitle('Net Profit')
//            ->setSubtitle('From January To March')
//            ->setType('bar')
//            ->setXAxis(['janvier', 'février', 'mars',
//                'avril',
//                'mai ',
//                'juin',
//                'juillet',
//                'aout',
//                'septembre ',
//                'octobre',
//                'novembre ',
//                'décembre'])
//            ->setGrid(true)
//            ->setDataset([
//                [
//                    'name' => 'Company A',
//                    'data' => [1000, 10, 1900, 1000, 10, 1900, 1000, 10, 1900, 1000, 10, 1900]
//                ],
//                [
//                    'name' => 'Company B',
//                    'data' => [300, 900, 1400, 1000, 10, 1900, 1000, 10, 1900, 1000, 10, 1900]
//                ],
//                [
//                    'name' => 'Company C',
//                    'data' => [430, 245, 500, 1000, 10, 1900, 1000, 10, 1900, 1000, 10, 1900]
//                ]
//            ])
//            ->setStroke(1);


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
            ->with("chart", $chart)
            ->with("totalSecurite", Securite::count('id'));
    }

    public function pourcentage_appartement_non_paye()
    {
        $now = Carbon::now();
        $TotalAppartementretard = DB::table('locataires')
            ->join('caisses', 'caisses.id_locataire', '=', 'locataires.id')
            ->join('appartements', 'appartements.id', '=', 'caisses.id_Appartement')
            ->where('mois_concerne', '<', $now)
            ->orderBy('mois_concerne', 'desc')
            ->groupBy('mois_concerne')
            ->count('appartements.id');
        $totaldeslocataires = Locataire::count('id');

        $PosurcentagedeAppartementNonPaye = $TotalAppartementretard / $totaldeslocataires * 100;
        return json_encode($PosurcentagedeAppartementNonPaye);

    }
}
