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


class QrcodeController extends Controller
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

        return view('emails/QR', [

            'locateurs' => $info_loc,

        ]);
    }


    public static function sendQrcode($id_locateur)
    {
        $locateur = Locateur::findOrFail($id_locateur);
        $info_loc = DB::table('locateurs')
            ->join('confirm_logments', 'confirm_logments.id_Locateur', '=', 'locateurs.id')
            ->join('appartements', 'appartements.id', '=', 'confirm_logments.id_Appartement')
            ->where("locateurs.id", "=", $id_locateur)
            ->get(["locateurs.nom", "locateurs.prenom", "locateurs.Nbr_Invite", "confirm_logments.DateD", "confirm_logments.DateF", "appartements.nom as nomAppartement"])
            ->first();
        setlocale(LC_TIME, 'French');
        $datedebut = Carbon::parse($info_loc->DateD)->formatLocalized('%d %B %Y');
        $datefin = Carbon::parse($info_loc->DateF)->formatLocalized('%d %B %Y');

        $text = (new Generator())->size(200)->generate("Le locateur $info_loc->nom $info_loc->prenom \n(accompagné de ses $info_loc->Nbr_Invite compagnons) \na effectivement loué l'appartement : $info_loc->nomAppartement \nentre le " . $datedebut . " et le " . utf8_encode($datefin));
        return view("emails/QR", compact($text));
        Mail::to($locateur->email)->send(new QR());
    }
}
