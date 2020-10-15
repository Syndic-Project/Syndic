<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Immeuble;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AppartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Appartements/AddAppartement',[
            'immeubles'=>Immeuble::all(),

        ]);


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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $appartement=new Appartement();
        $var1=$request->input('type');
        $var2=$request->input('porte');

    $res=$var1.'N°'.$var2;
        $appartement->nom=$res;
        $appartement->id_Immeuble=$request->input('immeuble');
        $appartement->id_Locataire=null;
        $appartement->Type_du_bien=$request->input('type');
        $appartement->Num_Porte=$request->input('porte');
        $appartement->Dernier_Mois_Pays=$request->input('last_cotisation');
        $appartement->Nbr_Max_chambre=$request->input('nbr');
        $appartement->save();
        dd("ok");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
