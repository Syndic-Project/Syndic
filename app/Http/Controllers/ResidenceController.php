<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use App\Models\Residence;
use App\Models\Syndic;
use App\Models\Ville;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResidenceController extends Controller
{
    public function index()
    {
        return view('Residences/residence', [
            'residence' => Residence::first(),
            'blocs' => Bloc::where('id_residence', Residence::first()->id)->get(),
            'villes' => Ville::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        $residence = new Residence();
        $residence->nom_residence = $request->input('nom');
        $residence->id_ville = $request->input('ville');
        $residence->id_syndic = Syndic::first()->id;
        $residence->adresse = $request->input('adresse');
        $residence->save();

        return redirect(url()->previous());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        $residence = Residence::find($id);
        $residence->nom_residence = $request->input('nom');
        $residence->id_ville = $request->input('ville');
        $residence->id_syndic = $request->input('syndic');
        $residence->adresse = $request->input('adresse');
        $residence->save();

        return redirect(url()->previous());
    }
}
