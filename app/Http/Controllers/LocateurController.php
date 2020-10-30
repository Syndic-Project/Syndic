<?php

namespace App\Http\Controllers;

use App\Models\confirm_logment;
use App\Models\Locataire;
use App\Models\Locateur;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Generator;

class LocateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $QrCode = new Generator();

        $data = $QrCode->size(250)->generate(confirm_logment::all());

//        compact($QrCode);
//        dd( compact($QrCode));
        return view('Client/AddLocateur', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $locateur = new Locateur();
            $locateur->nom = $request->input('nom');
            $locateur->prenom = $request->input('prenom');
            $locateur->CIN = $request->input('cin');
            $locateur->Tel = $request->input('Tel');
            $locateur->Nbr_Invite = $request->input('nbr');
            $locateur->email = $request->input('email');
            $locateur->save();
            $locateur = new Locateur();
            $locateur->DateD = $request->input('dated');
            $locateur->DateF = $request->input('datef');

            $locateur->save();
        } catch (\Exception $e) {
            throw new \App\Exceptions\LogData($e);
        }
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
