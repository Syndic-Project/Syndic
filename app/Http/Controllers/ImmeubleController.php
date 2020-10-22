<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImmeuble;
use App\Models\Bloc;
use App\Models\Immeuble;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ImmeubleController extends Controller
{


     public static function getAppartementBloc(Request $request)
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
//        Bloc::with('immeuble')->get()

        DB::connection()->enableQueryLog();

        $bloc_immeuble = DB::table('immeubles')
            ->join('blocs', 'blocs.id', '=', 'immeubles.id_bloc')->get();

        return view('Immeubles/Addimeuble')
            ->with('bloc_immeuble',$bloc_immeuble)
          ->with("blocs", Bloc::all());
//            ->with("immeubles", Immeuble::all());


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
    public function store(StoreImmeuble $request)
    {
        //validateur = voir store immeuble


        //premiere methode pour ajouter dans la db
        $immeuble = new Immeuble();
        $immeuble->id_bloc = $request->input('bloc');
        $immeuble->Nom_Immeuble = $request->input('nom');
        $immeuble->Montant_Cotisation_Mensuelle = $request->input('cotisation');
        $immeuble->Montant_Disponible_En_Caisse = $request->input('caisse');
        $immeuble->save();

        return redirect('/syndic/Appartements');
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
