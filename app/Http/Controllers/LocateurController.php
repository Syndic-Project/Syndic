<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\confirm_logment;
use App\Models\Locateur;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Generator;

class LocateurController extends Controller
{


    public static function genrateQR($id)
    {
//        dd("Qr code");
        $locateurQR = confirm_logment::findOrFail($id);
        $QrCode = new Generator();

        $data = $QrCode->size(250)->generate($locateurQR);

        return view('Client/AddLocateur', [
            'appartements' => Appartement::doesnthave('confirmLogments')->get(),
            'data' => $data
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('Client/AddLocateur', [
            'appartements' => Appartement::doesnthave('confirmLogments')->get(),

        ]);
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
        $locateur = new Locateur();
        $locateur->nom = $request->input('nom');
        $locateur->prenom = $request->input('prenom');
        $locateur->CIN = $request->input('cin');
        $locateur->Tel = $request->input('Tel');
        $locateur->Nbr_Invite = $request->input('nbr');
        $locateur->email = $request->input('email');
//        $locateur->save();
        $confirm = new confirm_logment();
        $confirm->Accorder = 1;
        $confirm->id_Locateur = $locateur->id;
        $confirm->id_Appartement = $request->input('id_appartement');
        $confirm->DateD = $request->input('dated');
        $confirm->DateF = $request->input('datef');
//        $confirm->save();
        LocateurController::genrateQR($confirm->id);
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
