<?php

namespace App\Http\Controllers;

use App\Models\Syndic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthentificationController extends Controller
{
    public function VerifyCredentials(Request $request)
    {
        //uniquement pour syndic
        $email = $request->emailInput;
        $password = $request->passwordInput;
        $user = Syndic::where("email", $email)->first();
        return isset($user) ? (Hash::check($password, $user->password) ? session()->put('userObject', $user)  :  'non auth') : 'non auth';
    }

    public static function ManualVerifyCredentials($username, $mdp)
    {
        $user = collect(DB::select("select * from personne where personne.username = '$username' and  personne.mot_de_passe = '$mdp'"))
            ->first();
        if (isset($user) == true) {
            session()->put('userObject', $user);
            return true;
        }
        return false;
    }

    public function AuthentificatedGoingToPage(Request $request)
    {
        $this->VerifyCredentials($request);
        // if (AuthController::IsAuthentificated())
        //     if ($page != " ")
        //         return \redirect($page);
        //     else
        //         return \redirect("/");
        // else
        //     return \redirect("/");

        // if ($page == "home")
        //     return \redirect("/");
        // else
        //     return \redirect($page);
        return redirect(url()->previous());
    }

    public static function IsAuthentificated()
    {
        return session()->has('userObject');
    }

    public function LogOut()
    {
        \Auth::logout();
        \Session::flush();
        return \redirect("/");
    }
}
