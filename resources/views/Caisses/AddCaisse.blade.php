@extends('Layouts/appLayout')

@section('style')
    <link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div class="content-page">
        <form class="needs-validation" novalidate action="{{route('residences.store') }}" method="post" accept-charset="utf-8">
            @csrf
            <div class="row mybox">
                <div class="col-md-12">
                    <h2 class="padb20"><span class="nomimmeuble">EL MEDIOUNI</span> : NOUVELLE COTISATIONS</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">


                                <select name="immeuble" id="immeuble" class="form-control input-lg">
                                    <option value="">Immeubles</option>

                                    @foreach ($immeubles as $immeuble )
                                        <option value="{{$immeuble->id}}">{{$immeuble->Nom_Immeuble}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">


                                <select disabled="true" name="appartement" id="appartement" class="form-control input-lg">
                                    <option value="">Appartement</option>
                                    @foreach ($appartements as $appartement )
                                        <option value="{{$appartement->id}}">{{$appartement->nom}}</option>
                                    @endforeach


                                    <option value="8">new</option>


                                </select>
                            </div>
                        </div>


                    </div>

                    <div class="form-group">
                        <label for="date_paiment">DATE DE PAIEMENT</label>
                        <input type="date" name="date_paiment" id="date_paiment" class="form-control input-lg" r
                              value="{{Carbon\Carbon::now()}}"  />
                    </div>






                            <div class="form-group">
                                <label for="dernier_mois_paye">DERNIER MOIS PAYE</label>
                                <input type="date" name="dernier_mois_paye" id="dernier_mois_paye" class="form-control input-lg"/>
                            </div>



                    <div class="form-group">
                        <label for="nbr_mois_paye">NOMBRE DE MOIS PAYÉ(S)</label>
                        <select name="nbr_mois_paye" id="nbr_mois_paye" class="form-control">


                                <option value="1">1 mois</option>
                                <option value="2">2 mois</option>
                                <option value="3">3 mois</option>
                                <option value="4">4 mois</option>
                                <option value="5">5 mois</option>
                                <option value="6">6 mois</option>
                                <option value="7">7 mois</option>
                                <option value="8">8 mois</option>
                                <option value="9">9 mois</option>
                                <option value="10">10 mois</option>
                                <option value="11">11 mois</option>
                                <option value="12">12 mois</option>
                                <option value="13">13 mois</option>
                                <option value="14">14 mois</option>
                                <option value="15">15 mois</option>
                                <option value="16">16 mois</option>
                                <option value="17">17 mois</option>
                                <option value="18">18 mois</option>
                                <option value="19">19 mois</option>
                                <option value="20">20 mois</option>
                                <option value="21">21 mois</option>
                                <option value="22">22 mois</option>
                                <option value="23">23 mois</option>
                                <option value="24">24 mois</option>


                        </select>

                    </div>




                </div>


                <p>&nbsp;</p>
                <button type="submit" class="btn btn-block btn-purple btn-lg ">ENREGISTRER et Passer aux Immeubles <i
                        class="fa fa-arrow-right"></i></button>

            </div>

        </form>
    </div>





@endsection
@section('script-bottom')
    <!-- Validation init js-->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/addlocataire.js') }}"></script>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/AddAppartement.js') }}"></script>
@endsection

