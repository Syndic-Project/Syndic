<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use Illuminate\Http\Request;

class BlocController extends Controller
{
    public function update(Request $request, $id)
    {
        if (Bloc::find($id)->exists()) {
            $bloc = Bloc::find($id)->first();
            $bloc->nom_bloc = $request->nomBloc;
            $bloc->save();
        }
        return redirect(url()->previous());
    }
}
