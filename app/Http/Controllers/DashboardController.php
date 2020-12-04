<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bloc;
use App\Models\Caisse;
use App\Models\Facture;
use App\Models\Immeuble;
use App\Models\Securite;
use App\Models\Locataire;
use App\Models\Appartement;
// use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Type_facture;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\Authenticate;

class DashboardController extends Controller
{
    public function index()
    {


        $now = Carbon::now();

        $TotalAppartementretard = DB::table('locataires')
            ->join('caisses', 'caisses.id_locataire', '=', 'locataires.id')
            ->join('appartements', 'appartements.id', '=', 'caisses.id_Appartement')
            ->where('mois_concerne', '<', $now)->orderBy('mois_concerne', 'desc')
            ->groupBy('mois_concerne')
            ->count('appartements.id');
        $totaldesAppartement = Appartement::count('id');
        // dd($TotalAppartementretard);

        $PosurcentagedeAppartementNonPaye = ($TotalAppartementretard / $totaldesAppartement) * 100;
        //alkhir appartement 1 fo9ach khelset
        $derniermoispaye = DB::table('caisses')

            ->orderBy('mois_concerne', 'desc')
            ->first()->mois_concerne;
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
            ->where('mois_concerne', '<', $now)->orderBy('mois_concerne', 'desc')
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

        // $blocimapp = DB::table('blocs')
        // ->join('immeubles', 'immeubles.id_bloc', '=', 'blocs.id')
        // ->join('appartements', 'appartements.id_Immeuble', '=', 'immeubles.id')
        // ->get();

        return view('index')
            ->with('totalcaisse', Caisse::sum('montant'))
            ->with('totalbloc', Bloc::count('id'))
            ->with('totalappar', Appartement::count('id'))
            ->with('totalLocataire', Locataire::count('id'))
            ->with('totalImmeuble', Immeuble::count('id'))
            ->with('immeubles', Immeuble::all())
            ->with('nbrmoisretard', $nbr_de_mois_en_retard)
            ->with('montantpayeretard', $creadit)
            ->with('totalLocataireenRetard', $Totaldeslocataireretard)
            ->with('totalLocataireenAvance', $Totaldeslocataire_en_Avance)
            ->with('totaldepence', Facture::count('id'))
            ->with('revenueMois', $this->revenue_mois(null)) // opérationnelle mais pas 100%
            ->with('depensesJardinnage', $this->depenses_jardinnage(null)) // opérationnelle mais pas 100%
            ->with('depensesNettoyage', $this->depenses_nettoyage(null)) // opérationnelle mais pas 100%
            ->with('depensesSecurite', $this->depenses_securite(null)) // opérationnelle mais pas 100%
            ->with('depensesDivers', $this->depenses_divers(null)) // opérationnelle mais pas 100%
            ->with('totalSecurite', Securite::count('id'));
    }

    public function revenue_mois($annee)
    {
        // possiblité de recevoir revenue_mois avec annéee personnalisé : todo
        $annee = $annee ?? Carbon::now()->format('Y');
        return DB::select("
        select sum(c.montant) as total_mois , c.mois_concerne
        from caisses c
        where SUBSTRING_INDEX(c.mois_concerne,'-',1) = '$annee'
        group by c.mois_concerne
        order by DATE(STR_TO_DATE(CONCAT( SUBSTRING_INDEX(c.mois_concerne,'-',1) , '-' ,
        SUBSTRING_INDEX(c.mois_concerne,'-',-1),'-','1' ),'%Y-%m-%d')) asc,
        STR_TO_DATE(CONCAT( SUBSTRING_INDEX(c.mois_concerne,'-',1) , '-' ,
        SUBSTRING_INDEX(c.mois_concerne,'-',-1),'-','1' ),'%Y-%m-%d') asc
        ");
    }

    public function depenses_jardinnage($annee)
    {
        $annee = $annee ?? Carbon::now()->format('Y');

        return DB::select("
        select sum(f.Montant) as 'somme_jardinnage' , MONTH(f.date_de_paiment_facture) as 'mois_concerne'
        from factures f
        where f.id_Type_facture = 1
        and YEAR(f.date_de_paiment_facture) = $annee
        group by MONTH(f.date_de_paiment_facture)
        order by f.date_de_paiment_facture asc");
    }

    public function depenses_nettoyage($annee)
    {
        $annee = $annee ?? Carbon::now()->format('Y');

        return DB::select("
        select sum(f.Montant) as 'somme_nettoyage' , MONTH(f.date_de_paiment_facture) as 'mois_concerne'
        from factures f
        where f.id_Type_facture = 2
        and YEAR(f.date_de_paiment_facture) = $annee
        group by MONTH(f.date_de_paiment_facture)
        order by f.date_de_paiment_facture asc");
    }

    public function depenses_securite($annee)
    {
        $annee = $annee ?? Carbon::now()->format('Y');

        return DB::select("
        select sum(f.Montant) as 'somme_securite' , MONTH(f.date_de_paiment_facture) as 'mois_concerne'
        from factures f
        where f.id_Type_facture = 3
        and YEAR(f.date_de_paiment_facture) = $annee
        group by MONTH(f.date_de_paiment_facture)
        order by f.date_de_paiment_facture asc");
    }

    public function depenses_divers($annee)
    {
        $annee = $annee ?? Carbon::now()->format('Y');

        return DB::select("
        select sum(f.Montant) as 'somme_divers' , MONTH(f.date_de_paiment_facture) as 'mois_concerne'
        from factures f
        where f.id_Type_facture = 4
        and YEAR(f.date_de_paiment_facture) = $annee
        group by MONTH(f.date_de_paiment_facture)
        order by f.date_de_paiment_facture asc");
    }

    public function pourcentage_appartement_non_paye()
    {
        $now = Carbon::now();
        $TotalAppartementretard = DB::table('locataires')
            ->join('caisses', 'caisses.id_locataire', '=', 'locataires.id')
            ->join('appartements', 'appartements.id', '=', 'caisses.id_Appartement')
            ->where('mois_concerne', '<', $now)->orderBy('mois_concerne', 'desc')
            ->groupBy('mois_concerne')
            ->count('appartements.id');
        $totaldeslocataires = Locataire::count('id');

        $PosurcentagedeAppartementNonPaye = ($TotalAppartementretard / $totaldeslocataires) * 100;
        return json_encode($PosurcentagedeAppartementNonPaye);
    }
    public function dernier_mois_paye($id)
    {
        //todo
        $derniermoispaye = DB::table('caisses')
            ->where('id_Locataire', $id)
            ->orderBy('mois_concerne', 'desc')
            ->first()->mois_concerne;
        setlocale(LC_TIME, 'French');
        $derniermoispaye = Carbon::parse($derniermoispaye)->formatLocalized('%d %B %Y');
        return utf8_encode($derniermoispaye);

        //ch7al raha menchher retard
        // $derniermoispaye = Carbon::parse($derniermoispaye)->floorMonth();
        // $now = Carbon::now();
        // $nbr_de_mois_en_retard = $derniermoispaye->diffInMonths($now);
    }

    public function nbrapploc($id)
    {
        $nbr_app_du_loc = DB::table('locataires')
            ->join('caisses', 'caisses.id_locataire', '=', 'locataires.id')
            ->join('appartements', 'appartements.id', '=', 'caisses.id_Appartement')
            ->where('caisses.id_locataire', '=', $id)
            ->groupBy('caisses.id_locataire')
            ->distinct()
            ->count('caisses.id_Appartement');

        return $nbr_app_du_loc;
    }

    public function apploc($id)
    {
        $apploc = DB::table('locataires')
            ->join('caisses', 'caisses.id_locataire', '=', 'locataires.id')
            ->join('appartements', 'appartements.id', '=', 'caisses.id_Appartement')
            ->where('caisses.id_locataire', '=', $id)
            ->distinct()
            ->get(['appartements.id', 'appartements.nom']);

        return $apploc;
    }

    public function Afficher_Apppartement_Locataire($id, $idApp)
    {
        $Morederniermoispaye = DB::table('caisses')
            ->where('id_Locataire', $id)
            ->where('id_Appartement', $idApp)
            ->orderBy('mois_concerne', 'desc')
            ->first()->mois_concerne;


        setlocale(LC_TIME, 'French');
        $Morederniermoispaye = Carbon::parse($Morederniermoispaye)->formatLocalized('%d %B %Y');
        return utf8_encode($Morederniermoispaye);
    }

    public function indexLocateur()
    {
        //hnaya khasni nejbed lbloc litabe3lou locateur conecte

        $bloc_facture = DB::table('blocs')
            ->join('immeubles', 'immeubles.id_bloc', '=', 'blocs.id')
            ->join('appartements', 'appartements.id_Immeuble', '=', 'immeubles.id')
            ->join('caisses', 'caisses.id_Appartement', '=', 'appartements.id')
            ->where('', '', '')
            ->where('caisses.id_Locataire', '=', AuthentificationController::getCurrentUser()->id)
            ->get(['blocs.id', 'blocs.nom_bloc']);
        dd($bloc_facture);

        // $id_bloc_loc
        $facture = DB::table('factures')
            ->join('type_factures', 'type_factures.id', '=', 'factures.id_Type_facture')
            ->join('recus', 'recus.id', '=', 'factures.id_Recu')
            ->get([
                'factures.id',
                'date_de_paiment_facture',
                "designation",
                "Montant",
                "id_Recu",
                "id_Type_facture",
                "id_bloc",
                "libelle",
                "img", 'recus.id as idrecu',
                'type_factures.id  as idtype'
            ]);
        return view('Dashboard_locataire/index2')
            ->with("blocs", Bloc::all())
            ->with("typeFactures", Type_facture::all())
            ->with("factures", $facture)
            ->with('appartements', $this->apploc(AuthentificationController::getCurrentUser()->id))
            ->with('derniermois', $this->dernier_mois_paye(AuthentificationController::getCurrentUser()->id))
            ->with('depensesJardinnage', $this->depenses_jardinnage(null)) // opérationnelle mais pas 100%
            ->with('depensesNettoyage', $this->depenses_nettoyage(null)) // opérationnelle mais pas 100%
            ->with('depensesSecurite', $this->depenses_securite(null)) // opérationnelle mais pas 100%
            ->with('depensesDivers', $this->depenses_divers(null)) // opérationnelle mais pas 100%
            ->with('totalSecurite', Securite::count('id'))
            ->with('Morederniersmois', $this->Afficher_Apppartement_Locataire(AuthentificationController::getCurrentUser()->id, 21))
            ->with('nbrapp', $this->nbrapploc(AuthentificationController::getCurrentUser()->id));
    }
}
