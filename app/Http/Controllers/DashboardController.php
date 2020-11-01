<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\confirm_logment;
use App\Models\Locateur;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Generator;

class DashboardController extends Controller
{
    public function index()
    {
        return view('index');
            // ->with("", "");
    }
}
