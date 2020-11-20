<?php

namespace App\Http\Controllers;

use App\Mail\QR;
use Carbon\Carbon;
use App\Models\Locateur;
use App\Models\Appartement;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use App\Models\confirm_logment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Generator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Html\HtmlServiceProvider;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class QrcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




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
        $text =  QrCode::format('png')->merge('https://www.w3adda.com/wp-content/uploads/2019/07/laravel.png', 0.3, true)->size(200)->generate("Le locateur $info_loc->nom $info_loc->prenom \n(accompagné de ses $info_loc->Nbr_Invite compagnons) \na effectivement loué l'appartement : $info_loc->nomAppartement \nentre le " . $datedebut . " et le " . utf8_encode($datefin));



        // $image = QrCode::format('png')->merge('https://www.w3adda.com/wp-content/uploads/2019/07/laravel.png', 0.3, true)
        //     ->size(200)->errorCorrection('H')
        //     ->generate('W3Adda Laravel Tutorial');
        // return response($image)->header('Content-type', 'image/png');

        // <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge('https://www.w3adda.com/wp-content/uploads/2019/07/laravel.png', 0.3, true)
        //     ->size(200)->errorCorrection('H')
        //     ->generate('W3Adda Laravel Tutorial')) !!} ">



        Mail::to($locateur->email)->send(new QR($text));
        return view("emails/QR")
            ->with('text', $text);
    }
}
