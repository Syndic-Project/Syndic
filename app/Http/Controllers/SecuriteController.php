<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use App\Models\Securite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SecuriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        dd(Securite::has('bloc')->get());
        $securite_bloc = DB::table('securites')
            ->join('blocs', 'securites.id_bloc', '=', 'blocs.id')->get(['securites.*', 'blocs.nom_bloc']);

        return view('Securite/AddSecurite')
            ->with('securite_bloc', $securite_bloc)
            ->with('blocs', Bloc::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $securite = new Securite();
        $securite->nometprenom = $request->input('nom');
        $securite->id_bloc = $request->input('bloc');
        $securite->email = $request->input('email');
        $securite->password = $request->input('mdp');
        $securite->save();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $securite = Securite::findOrFail($id);
        $bloc = Bloc::all();

        return view('Securite/EditSecurite', [
            'securite' => $securite,
            "blocs" => $bloc
        ]);
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
        $securite = Securite::findOrFail($id);
        $securite->nometprenom = $request->input('nom');
        $securite->id_bloc = $request->input('bloc');
        $securite->email = $request->input('email');
        $securite->password = $request->input('mdp');
        $securite->save();
        return redirect('/Securite/AddSecurite');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Securite::destroy($id);

        return redirect('/Securite/AddSecurite');
    }
}
