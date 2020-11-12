@extends('Layouts/appLayout')

@section('style')
    <link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/autocomplete.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
    <div class="content-page">


        @foreach ($syndics as $syndic)



            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row mt-0">
                                <h5 class="col-8 font-size-16 mb-3">Profile.</h5>

                            </div>
                            <hr>



                            <form action="{{ route('Locataire.store') }}" method="post">

                                @csrf
                                <div class="container">
                                    <br />
                                    <div class="row justify-content-start">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Nom</label>
                                                <input type="text" required class="form-control" id="name" name="nom"
                                                    value="{{ $syndic->nom }}" />
                                            </div>


                                            <div class="form-group">
                                                <label for="first_name">Prénom</label>
                                                <input type="text" required class="form-control" id="first_name"
                                                    name="prenom" value="{{ $syndic->prenom }}" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" required
                                                    value="{{ $syndic->email }}" />
                                            </div>




                                            <div class="form-group">
                                                <label for="pass">Mot de Passe</label>
                                                <input style="font-style: oblique;" type="text" class="form-control"
                                                    id="pass" name="mdp" required />
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>

        @endforeach
    </div>


@endsection
