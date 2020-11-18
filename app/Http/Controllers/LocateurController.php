<?php

namespace App\Http\Controllers;

use App\Mail\QR;
use Carbon\Carbon;
use App\Models\Locateur;
use App\Models\Appartement;
use Illuminate\Http\Request;
use App\Models\confirm_logment;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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


        $info_loc = DB::table('locateurs')
            ->join('confirm_logments', 'confirm_logments.id_Locateur', '=', 'locateurs.id')
            ->get();
        return view('Client/AddLocateur', [
            'appartements' => Appartement::doesnthave('confirmLogments')->get(),
            'locateurs' => $info_loc,
            'Confirmid' =>  Confirm_logment::all(),
        ]);
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
        $locateur->save();
        $confirm = new confirm_logment();
        $confirm->Accorder = 1;
        $confirm->id_Locateur = $locateur->id;
        $confirm->id_Appartement = $request->input('id_appartement');
        $confirm->DateD = $request->input('dated');
        $confirm->DateF = $request->input('datef');
        $confirm->save();

        return redirect("/Locateur");
    }

    public static function generateQR($id_locateur)
    {
        $info_loc = DB::table('locateurs')
            ->join('confirm_logments', 'confirm_logments.id_Locateur', '=', 'locateurs.id')
            ->join('appartements', 'appartements.id', '=', 'confirm_logments.id_Appartement')
            ->where("locateurs.id", "=", $id_locateur)
            ->get(["locateurs.nom", "locateurs.prenom", "locateurs.Nbr_Invite", "confirm_logments.DateD", "confirm_logments.DateF", "appartements.nom as nomAppartement"])
            ->first();
        setlocale(LC_TIME, 'French');
        $datedebut = Carbon::parse($info_loc->DateD)->formatLocalized('%d %B %Y');
        $datefin = Carbon::parse($info_loc->DateF)->formatLocalized('%d %B %Y');

        echo (new Generator())->size(200)->email('sohaib.elmediouni23@gmail.com', 'Welcome to Coding driver!.')->generate("Le locateur $info_loc->nom $info_loc->prenom \n(accompagné de ses $info_loc->Nbr_Invite compagnons) \na effectivement loué l'appartement : $info_loc->nomAppartement \nentre le " . $datedebut . " et le " . utf8_encode($datefin));
    }







    public static function EmailInfo(Request $request, $id)
    {
        // $locateur = Securite::findOrFail($id);
        $locateur = new Locateur();
        $locateur->nom = $request->input('nom');
        $locateur->prenom = $request->input('prenom');
        $locateur->CIN = $request->input('cin');
        $locateur->Tel = $request->input('Tel');
        $locateur->Nbr_Invite = $request->input('nbr');
        $locateur->email = $request->input('email');
        $locateur->save();
        $confirm = new confirm_logment();
        $confirm->Accorder = 1;
        $confirm->id_Locateur = $locateur->id;
        $confirm->id_Appartement = $request->input('id_appartement');
        $confirm->DateD = $request->input('dated');
        $confirm->DateF = $request->input('datef');
        $confirm->save();
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
