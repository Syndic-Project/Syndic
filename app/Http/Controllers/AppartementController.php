<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Caisse;
use App\Models\Immeuble;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AppartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static function credit($idap,$idl)
    {
        dd($idl);
        $derniermoispaye = DB::table('caisses')->where('id_Appartement', '=', $idap)
            ->where('id_Locataire', '=', $idl)
            ->orderBy('mois_concerne', 'desc')->first()->mois_concerne;
        $derniermoispaye = Carbon::parse($derniermoispaye)->floorMonth();

        $now = Carbon::now();
        $now = Carbon::parse($now)->floorMonth();

        return $res = $derniermoispaye->diffInMonths($now);


    }

    public function index()
    {

$appartementhaslocataire=Appartement::has('caisses')->get();
$appartementhasnotlocataire=Appartement::doesntHave('caisses')->get();

        return view('Appartements/AddAppartement')
            ->with('immeubles', Immeuble::all())
            ->with('appartements', Appartement::all());



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
        $appartement->Dernier_Mois_Pays = $request->input('last_cotisation');
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
