<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use App\Models\Residence;
use App\Models\Syndic;

use App\Models\Ville;
use Illuminate\Http\Request;

class ResidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {






        $d = Syndic::all()->last();

dd($syndics=Syndic::with('residence')->get());

        return view('Residences/residence',[

            'villes'=>Ville::all(),
            'syndics'=>$d,

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

        $residence = new Residence();
        $residence-> nom_residence = $request->input('nom');
        $residence->id_ville = $request->input('ville');
        $residence->id_syndic = $request->input('syndic');
        $residence->adresse = $request->input('adresse');
        $residence->save();

        $bloc = new Bloc();
        $bloc->nom_bloc=$request->input('nom_bloc');
        $bloc->id_residence=$residence->id;

        $bloc->save();

        return redirect('/Appartements/AddAppartement');
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
