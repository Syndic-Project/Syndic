@extends('Layouts/appLayout')

@section('style')
    <link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/autocomplete.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
    <div class="content-page">


        @if (Session::has('message'))
            <div class="alert {{ Session::get('alert-class') }}">
                @if (Session::get('alert-class') == 'alert-success')
                    <i class="fas fa-check-double"></i>
                @else
                    <i class="fas fa-exclamation-circle"></i>
                @endif
                {{ Session::get('message') }}
            </div>
        @endif


        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row mt-0">
                            <h5 class="col-8 font-size-16 mb-3">Modifier Votre Profile.</h5>

                        </div>
                        <hr>



                        <form method="post"
                            action="{{ route('Syndics.update', [AuthentificationController::getCurrentUser()->id]) }}">
                            @method('PUT')
                            @csrf
                            <div class="container">
                                <br />
                                <div class="row justify-content-start">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nom</label>
                                            <input type="text" required class="form-control" id="name" name="nom"
                                                value="{{ AuthentificationController::getCurrentUser()->nom }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" required
                                                value="{{ AuthentificationController::getCurrentUser()->email }}" />
                                        </div>

                                    </div>

                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <label for="first_name">Prénom</label>
                                            <input type="text" required class="form-control" id="first_name" name="prenom"
                                                value="{{ AuthentificationController::getCurrentUser()->prenom }}" />
                                        </div>





                                        <div class="form-group">
                                            <label for="pass">Mot de Passe</label>
                                            <input style="font-style: oblique;" type="text" class="form-control" id="pass"
                                                name="mdpModif" required />
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

    </div>


@endsection
