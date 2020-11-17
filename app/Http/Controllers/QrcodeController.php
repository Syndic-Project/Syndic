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
            'appartements' => Appartement::doesnthave('confirmLogments')->get(),
            'locateurs' => $info_loc,
            'Confirmid' =>  Confirm_logment::all(),
        ]);
    }
}
