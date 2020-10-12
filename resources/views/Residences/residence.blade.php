@extends('Layouts/appLayout')

@section('style')
<link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('css')

@endsection

@section('content')
<div class="content-page">

<div class="row m-3">
    <div class="col-md-12">
        <a routerLink="/clientpar">
            <i class="fa fa-arrow-circle-left" aria-hidden="true">
            </i>
            Retour au Dashboard
        </a>
    </div>
</div>

<div class="container">
    <br />
    <h2>Ajouter un Client</h2>
    <form #AgentForm="ngForm" (ngSubmit)="onSubmit()">
        <div class="row justify-content-start">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name"
                       name="nom" />
                </div>

                <div class="form-group">
                    <label for="address">Addresse</label>
                    <input type="text" class="form-control" id="address"
                         name="adresse" />
                </div>


                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"
                        name="email" />
                </div>


                <div class="form-group">
                    <label for="">Agence</label>
                    <select>
                        <option></option>
                       

                    </select>
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="first_name">Prénom</label>
                    <input type="text" class="form-control" id="first_name"
                        name="prenom" />
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone (Mobile)</label>
                    <input type="text" class="form-control" id="phone"
                       name="tel" />
                </div>
                <div class="form-group">
                    <label>Mot de Passe</label>

                    <input type="password" id="pass2"
                        class="form-control" required=""
                        placeholder="Password"
                       name="mdp">
                </div>


            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Date de Naissance</label>
                    <input class="form-control"
                        type="date" name="date" id="date"
                      >
                </div>

                <div class="form-group">
                    <label for="">Region</label>
                    <select>
                        <option></option>
                      

                    </select>

                </div>
                <div class="form-group">
                    <label for="">Ville</label>
                    <select >
                        <option></option>
                    
                        </option>

                    </select>
                </div>




            </div>
            <div class="submit-button d-none d-md-block">
                <button type="submit" class="btn btn-purple btn-more-padding">
                    Ajouter
                </button>

            </div>
          

        </div>
    </form>
</div>
</div>
  

@endsection
