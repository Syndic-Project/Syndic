<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use App\Models\Securite;
use Illuminate\Http\Request;


class SecuriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Securite/AddSecurite')
            ->with('blocs', Bloc::all())
        ->with('securite', Securite::all());

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
        try {

            $securite = new Securite();
            $securite->nometprenom = $request->input('nom');
            $securite->id_bloc = $request->input('bloc');
            $securite->email = $request->input('email');
            $securite->password = $request->input('mdp');
            $securite->save();
        }
        catch (\Exception $e) {
            throw new \App\Exceptions\LogData($e);
        }
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
        $bloc=Bloc::all();

        return view('Securite/AddSecurite', [
            'securite'=> $securite,
            "blocs"=>$bloc
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
        return redirect('/syndic/Immeuble');
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
