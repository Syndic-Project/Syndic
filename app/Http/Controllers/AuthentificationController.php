<?php

namespace App\Http\Controllers;

use App\Models\Locataire;
use App\Models\Syndic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthentificationController extends Controller
{
    function loginView()
    {
        return view('login');
    }


    public function loginSecurity(Request $request)
    {
        $email = $request->emailInput;
        $password = $request->passwordInput;
        if (Hash::check($password, (Syndic::where("email", $email)->first() != null) ? Syndic::where("email", $email)->first()->password : '')) {
            session()->put('userObject', Syndic::where("email", $email)->first());
            return redirect("/");
        } elseif (Hash::check($password, (Locataire::where("email", $email)->first() != null) ? Locataire::where("email", $email)->first()->password : '')) {
            session()->put('userObject', Syndic::where("email", $email)->first());
            return redirect("/");
        } else
            return redirect("/Auth-Login");
    }

    public static function registerSecurity($username, $mdp)
    {
        echo "à realiser : ajout des locataires";
        //hash make aprés confirmation du password dans l'interface d'ajout
    }

    public static function getCurrentUser()
    {
        return session()->get('userObject');
    }

    public static function IsAuthentificated()
    {
        return session()->has('userObject');
    }

    public static function LogOut()
    {
        \Auth::logout();
        \Session::flush();
        return redirect("/Auth-Login");
    }
}
