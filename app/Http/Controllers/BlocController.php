<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use Illuminate\Http\Request;

class BlocController extends Controller
{
    public function update(Request $request, $id)
    {
        if (Bloc::find($id)->exists()) {
            $bloc = Bloc::find($id);
            $bloc->nom_bloc = $request->nomBloc;
            $bloc->save();
        }
        return redirect(url()->previous());
    }

    public function destroy($id)
    {
        if (Bloc::find($id)->exists())
            Bloc::find($id)->delete();
        return redirect(url()->previous());
    }

    public function store(Request $request)
    {
        foreach ($request->blocs as $bloc) {
            $nouveauBloc = new Bloc();
            $nouveauBloc->nom_bloc = $bloc;
            $nouveauBloc->id_residence = $request->residenceID;
            $nouveauBloc->save();
        }
        return redirect(url()->previous());
    }
}
