@extends('Layouts/appLayout')

@section('style')
    <link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('css')

@endsection

@section('content')

    <div class="content-page">
        <form class="needs-validation" novalidate action="{{route('residences.store') }}" method="post"
              accept-charset="utf-8">
            <div class="row mybox">
                <div class="col-md-12">

                    <form class="needs-validation" novalidate action="{{route('immeubles.store') }}" method="post"
                          accept-charset="utf-8">
                        <div class="form-group">
                            @csrf
                            <label for="nom">NOM de Résidence</label>
                            <input type="text" name="nom" id="nom" class="form-control input-lg" required=""
                                   placeholder="NOM DE Résidence">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ville">VILLE ou se trouve cet immeuble</label>

                                    <select name="ville" id="ville" class="form-control input-lg">
                                        <option value="">la ville où se trouve l'immeuble</option>

{{--                                        @foreach ($villes as $ville )--}}
{{--                                            <option value="{{$ville->id}}">{{$ville->nom_ville}}</option>--}}
{{--                                        @endforeach--}}

                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="syndic">Syndic</label>

                                    <select name="syndic" id="syndic" class="form-control input-lg">

                                        @foreach ($syndics as $syndic )
                                            <option value="">{{$syndic->nom}}</option>
                                        @endforeach
                                        <option value="8">new</option>


                                    </select>
                                </div>
                            </div>


                        </div>

                        <div class="form-group">
                            <label for="adresse">ADRESSE</label>
                            <textarea name="adresse" id="adresse" class="form-control input-lg" rows="2"
                                      placeholder="ADRESSE DE L'IMMEUBLE"></textarea>
                        </div>


                        <div class="row">



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nom_bloc">Nom du Bloc</label>
                                    <input type="text" name="nom_bloc" id="nom_bloc" class="form-control input-lg"/>
                                </div>

                            </div>

                        </div>


                </div>


                <p>&nbsp;</p>
                <button type="submit" class="btn btn-block btn-purple btn-lg ">ENREGISTRER et Passer aux Appartements <i
                        class="fa fa-arrow-right"></i></button>

        </form>

    </div>
    </div>
    </div>
    </div>

@endsection

@section('script')
    <script src="{{ URL::asset('assets/js/addlocataire.js') }}"></script>
@endsection
@section('script')
    <!-- Plugin js-->
    <script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
@endsection

@section('script-bottom')
    <!-- Validation init js-->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection
