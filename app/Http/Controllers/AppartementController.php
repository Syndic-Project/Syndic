<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Caisse;
use App\Models\Immeuble;
use App\Models\Appartement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class AppartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static function credit($idap)
    {

        $derniermoispaye = DB::table('caisses')->where('id_Appartement', '=', 1)
            //            ->where('id_Locataire', '=', $idl)
            ->orderBy('mois_concerne', 'desc')->first()->mois_concerne;
        $derniermoispaye = Carbon::parse($derniermoispaye)->floorMonth();

        $now = Carbon::now();
        $now = Carbon::parse($now)->floorMonth();

        return $res = $derniermoispaye->diffInMonths($now);
    }

    public function index()
    {

        // Appartement::has('caisses')->get()
        $appartementhaslocataire = DB::table('locataires')
            ->join('caisses', 'caisses.id_Locataire', '=', 'locataires.id')
            ->join('appartements', 'appartements.id', '=', 'caisses.id_Appartement')
            ->get(['appartements.id', 'appartements.nom as appname', 'locataires.nom as nomloc']);


        //
        //$appartementhaslocataire=
        //dd(Appartement::has('caisses')->get());
        //$appartementhasnotlocataire=Appartement::doesntHave('caisses')->get();

        return view('Appartements/AddAppartement')
            ->with('immeubles', Immeuble::all())
            ->with('appartements', Appartement::all())
            ->with('appartementhaslocataire', $appartementhaslocataire)
            ->with('appartementhasnotlocataire', Appartement::doesntHave('caisses')->get());
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


        $appartement = new Appartement();
        $var1 = $request->input('type');
        $var2 = $request->input('porte');

        $res = $var1 . ' ' . 'N°' . $var2;
        $appartement->nom = $res;
        $appartement->id_Immeuble = $request->input('immeuble');
        $appartement->Type_du_bien = $request->input('type');
        $appartement->Num_Porte = $request->input('porte');

        $appartement->Nbr_Max_chambre = $request->input('nbr');
        $appartement->save();
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
        $appartement = Appartement::find($id)->first();


        $appartement = new Appartement();
        $var1 = $request->input('type');
        $var2 = $request->input('porte');

        $res = $var1 . ' ' . 'N°' . $var2;
        $appartement->nom = $res;
        $appartement->id_Immeuble = $request->input('immeuble');
        $appartement->Type_du_bien = $request->input('type');
        $appartement->Num_Porte = $request->input('porte');

        $appartement->Nbr_Max_chambre = $request->input('nbr');
        $appartement->save();
        return redirect(url()->previous());

        Session::flash('message', "Les données ont été mise à jour avec succées");
        Session::flash('alert-class', 'alert-success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Caisse::where('id_Appartement', '=', $id)
            ->update(['id_Appartement' => NULL]);
        Appartement::find($id)->delete();
        return redirect(url()->previous());
        Session::flash('message', "Appartements Suuprimer avec success ");
        Session::flash('alert-class', 'alert-success');
    }
}
