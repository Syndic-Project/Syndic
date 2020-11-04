<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use App\Models\Facture;
use App\Models\Recu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $facture = DB::table('factures')
            ->join('type_factures', 'type_factures.id', '=', 'factures.id_Type_facture')
            ->join('recus', 'recus.id', '=', 'factures.id_Recu')
            ->get();
//dd($facture);


        return view('Factures/AddFacture')
            ->with("blocs", Bloc::all())
            ->with("factures", $facture);

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
        $recu = new Recu();
        $image = $request->file('preuve');
        $image->move(public_path() . '/assets/uploads/', $image->getClientOriginalName());
        $recu->img = $image->getClientOriginalName();
        $recu->save();

        $factures = new Facture();
        $factures->date_de_paiment_facture = $request->input('datep');
        $factures->designation = $request->input('designation');
        $factures->id_Type_facture = $request->input('type_facture');
        $factures->Montant = $request->input('Montant');
        $factures->id_Recu = $recu->id;
        $factures->id_bloc = $request->bloc;
        $factures->save();

        echo "marche";
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
