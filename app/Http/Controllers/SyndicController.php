<?php

namespace App\Http\Controllers;

use App\Models\Syndic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SyndicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Profile_Syndic/ProfileS')
            ->with('syndics', Syndic::all());
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
        //
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
        $syndic = Syndic::find($id)->first();

        if ($syndic
            ->update([
                "nom" => $request->nom,
                "prenom" => $request->prenom,
                "email" => $request->email,
                "password" => $request->mdpModif == "************" ? Hash::make($syndic->password) : Hash::make($syndic->mdpModif),
            ])
        ) {
            Session::flash('message', "Les données ont été mise à jour avec succées");
            Session::flash('alert-class', 'alert-success');
        } else {
            Session::flash('message', "Erreur lors de la mise à jour des données");
            Session::flash('alert-class', 'alert-danger');
        }

        return redirect(url()->previous());
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
