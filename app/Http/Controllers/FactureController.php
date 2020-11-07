<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use App\Models\Facture;
use App\Models\Recu;
use App\Models\Type_facture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facture = DB::table('factures')
            ->join('type_factures', 'type_factures.id', '=', 'factures.id_Type_facture')
            ->join('recus', 'recus.id', '=', 'factures.id_Recu')
            ->get();
        //dd($facture);

        return view('Factures/AddFacture')
            ->with("blocs", Bloc::all())
            ->with("typeFactures", Type_facture::all())
            ->with("factures", $facture);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recu = new Recu();
        $image = $request->file('preuve');
        $image->move(public_path() . '/assets/uploads/', $image->getClientOriginalName());
        $recu->img = $image->getClientOriginalName();
        $recu->save();

        $factures = new Facture();
        $factures->date_de_paiment_facture = $request->input('datep');
        $factures->designation = $request->input('designation');
        $factures->id_Type_facture = $request->input('type_facture');
        $factures->Montant = $request->input('Montant');
        $factures->id_Recu = $recu->id;
        $factures->id_bloc = $request->bloc;
        $factures->save();

        return redirect(url()->previous());
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
        if (Facture::find($id)->exists()) {
            $facture = Facture::find($id);

            if ($request->hasFile('preuve')) {
                $recu = $facture->id_Recu != null ? Recu::find($facture->id_Recu) : (new Recu());
                $image = $request->file('preuve');
                $image->move(public_path() . '/assets/uploads/', $image->getClientOriginalName());
                $recu->img = $image->getClientOriginalName();
                $recu->save();
                $facture->id_Recu = $recu->id;
            }

            $facture->date_de_paiment_facture = $request->input('datep');
            $facture->designation = $request->input('designation');
            $facture->id_Type_facture = $request->input('type_facture');
            $facture->Montant = $request->input('Montant');
            $facture->id_bloc = $request->bloc;
            $facture->save();
        }

        return redirect(url()->previous());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) // Erreur
    {
        //supprimer la facture 3ad reçu
        // sinon at3tik erreur
        // ila supprimit le reçu ghadi ygolk : had reçu rah 5damin f wa7ed la facture dayra 3leh référence
        Recu::destroy($id);
        return redirect('/syndic/Facture');
    }
}
