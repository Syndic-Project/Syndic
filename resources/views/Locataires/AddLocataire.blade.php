@extends('Layouts/appLayout')

@section('style')
<link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="content-page">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- <form class="needs-validation" action="{{route('Locataire.store') }}" method="post">
                        @csrf
                        <div class="container">
                            <br />
                            <h2>Ajouter un Locataire</h2>
                            <div class="row justify-content-start">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Nom</label>
                                        <input type="text" class="form-control" id="name" name="nom" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="first_name">Prénom</label>
                                        <input type="text" class="form-control" id="first_name" name="prenom" />
                                    </div>
                                    <div class="form-group">
                                        <label for="pass">Mot de Passe</label>
                                        <input type="password" class="form-control" id="pass" name="mdp" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cin">CIN</label>
                                        <input type="text" class="form-control" id="cin" name="cin">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Téléphone (Mobile)</label>
                                        <input type="text" class="form-control" id="phone" name="tel" />
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-1 font-weight-bold text-muted">Les locaux affectés</p>
                                            <div class="form-group">
                                                <select id="liste1" class="form-control" name="non_affecter[]"
                                                    multiple="">
                                                    @foreach($appartements as $app )
                                                    <option class="items" value="{{$app->id}}">{{$app->nom}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="selected">
                                            <div class="form-group">
                                                <p class="mb-1 font-weight-bold text-muted mt-3 mt-md-0">Les locaux
                                                    affectés</p>
                                                <div class="form-group">
                                                    <select id="liste2" class="form-control" name="Affecter[]"
                                                        multiple="">
                                                        <option class="items" value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="submit-button d-none d-md-block	">
                                            <button type="submit" class="btn btn-purple btn-more-padding">
                                                Enregistrer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> -->
                    <h5 class="font-size-16 mb-1 mt-0">Fiche des paiements.</h5>
                    <table id="locataires-datatable" class="table nowrap">
                        <thead>
                            <tr>
                                <th class="text-center">Nom Complet</th>
                                <th class="text-center">E-mail</th>
                                <th class="text-center">Validité de l'email</th>
                                <th class="text-center">Numéro de Tel</th>
                                <th class="text-center">Paiements Effectués</th>
                                <th class="text-center">Bloc</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($locataires as $locataire) --}}
                                @for ($i = 0; $i < 100; $i++) 
                                  <tr>
                                    <td class="text-center">Hicham & Sohaib [F121212]</td>
                                    <td class="text-center">Sohaib.e.mdn@gmail.com</td>
                                    <td class="text-center">
                                        <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                            style="width: 20px;cursor:pointer;" data-toggle="tooltip" data-placement="top"
                                            title="Validé le 22/10/2020" />
                                    </td>
                                    <td class="text-center">0 666 2017 40</td>
                                    <td class="text-center">15</td>
                                    <td class="text-center">Bloc-5</td>
                                  </tr>
                                @endfor
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{ url('assets/js/addlocataire.js') }}"></script>
<script src="{{ url('assets/libs/parsleyjs/parsley.min.js') }}"></script>
<script>
    $("#locataires-datatable").DataTable({
        lengthMenu: [
            [10, 25, 50, -1],
            ['10 lignes', '25 lignes', '50 lignes', 'afficher tous']
        ],
        "language": {
            buttons: {
                pageLength: {
                    _: "Afficher %d éléments",
                    '-1': "Tout afficher"
                }
            },
            paginate: {
                previous: "<i class='uil uil-angle-left'>",
                next: "<i class='uil uil-angle-right'>"
            },
            "lengthMenu": "Afficher _MENU_ par Pages",
            "zeroRecords": "Aucune données disponibles ...",
            "info": "Total : _TOTAL_ Locataires",
            "infoEmpty": "Pas de données disponibles ...",
            "infoFiltered": "(filtré depuis _MAX_ lignes)",
            "sSearch": "Rechercher"
        },
        drawCallback: function () {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
        }
    });

</script>
@endsection

@section('script-bottom')
<!-- Validation init js-->
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection
