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
                        <h2 class="padb20"><span class="nomimmeuble"></span> : GESTION DES APPARTEMENTS</h2>
                        <form class="needs-validation" novalidate method="post" action="{{ route('Appartements.store') }}">
                            @csrf
                            <div class="row mybox mrgb20">
                                <div class="col-md-12">
                                    <div class="text-center yellow pad10"><strong><i class="fa fa-arrow-down"></i>
                                            Formulaire d'enregistrement des Appartements <i
                                                class="fa fa-arrow-down"></i></strong></div>

                                    <div class="row mrgb10">
                                        <div class="col-md-12">
                                            <select name="immeuble" id="immeuble" required="" class="form-control ">

                                                @foreach ($immeubles as $imb)

                                                    <option selected value="">IMMEUBLE</option>
                                                    <option value="{{ $imb->id }}" selected="">{{ $imb->Nom_Immeuble }}
                                                    </option>
                                                @endforeach


                                            </select>
                                            <ul class="parsley-errors-list" id="parsley-id-2295"></ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="type">Type du bien</label>
                                                <select name="type" id="type" class="form-control" required="">
                                                    <option value="Appartement">Appartement</option>
                                                    <option value="Bureau">Bureau</option>
                                                    <option value="Local commercial">Local commercial</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="porte">N° de porte</label>
                                                <input type="text" required="" name="porte" id="porte" class="form-control "
                                                    placeholder="N° de porte">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nbr">Nombre de chambre Max</label>
                                                <input type="text" required="" name="nbr" id="nbr" class="form-control "
                                                    placeholder="Nbr Max chambre">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mrgb20">
                                        <div class="col-md-12">
                                            <button type="submit" id="ajouter" name="ajouter"
                                                class="btn btn-block btn-purple "><i class="fa fa-plus"></i> AJOUTER
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div> <!-- .row -->
                        </form>
                        <p></p>
                        <div class="row mrgb10">
                            <div class="col-md-12 text-right" id="rowfiltre">
                                <form class="form-inline" id="frmfiltre" method="post" action="" accept-charset="UTF-8">
                                    <input type="hidden" name="imm_fltr" id="imm_fltr" value="279">
                                    <div class="form-group">
                                        <select name="s_filtre" id="s_filtre" class="form-control input-sm">
                                            <option disabled selected value="">tous les appartements</option>
                                            <option value="retard">en retard de paiement</option>
                                            <option value="avance">paiement en avance</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>

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
                        <div class="row">
                            <div class="col-md-12">

                                <div class="mybox" id="box_appartliste">
                                    <table id="appartement_datatable" class="table table-hover table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center">PROPRIETE</th>
                                                <th class="text-center">SITUATION</th>
                                                <th class="text-center">COMPTE</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($appartementhaslocataire as $app)
                                                <tr id="app">
                                                    <td class="text-center">{{ $app->appname }}</td>
                                                    <td class="text-center">
                                                        <span
                                                            class="text-success">{{ \App\Http\Controllers\AppartementController::credit($app->id) }}
                                                            mois</span>
                                                    </td>
                                                    {{-- <span class="text-danger">-6
                                                        mois</span>--}}
                                                    <td class="text-center">
                                                        <a href=""><i class=""></i> {{ $app->nomloc }}</a>
                                                    </td>

                                                    <td class="text-center">
                                                        <div class="btn-group" role="group">

                                                            <a href="#modalupdate{{ $app->id }}"
                                                                class="btn btn-success btn-xs " data-toggle="modal"
                                                                data-target="#modalupdate{{ $app->id }}" id="1715"><i
                                                                    class="fa fa-pencil"></i> modifier</a>
                                                        </div>
                                                        &nbsp;<a href="#modalSupprAppartement{{ $app->id }}"
                                                            data-toggle="modal"
                                                            data-target="#modalSupprAppartement{{ $app->id }}"
                                                            class="btn btn-danger btn-xs supprimer"><i
                                                                class="fa fa-times-circle"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            @foreach ($appartementhasnotlocataire as $app)
                                                <tr>
                                                    <td class="text-center">{{ $app->nom }}</td>
                                                    <td class="text-center">
                                                        <span class=" text-center text-warning">Pas Encore</span>
                                                    </td>
                                                    {{-- <span class="text-danger">-6
                                                        mois</span>--}}
                                                    <td class="text-center">
                                                        <a href="/syndic/Locataire"><i class="fa fa-plus"></i> créer</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="btn-group" role="group">

                                                            <a href="#modalupdate{{ $app->id }}"
                                                                class="btn btn-info btn-xs " data-toggle="modal"
                                                                data-target="#modalupdate{{ $app->id }}"><i
                                                                    class="fa fa-pencil"></i> modifier</a>
                                                        </div>
                                                        &nbsp;<a href="#modalSupprAppartement{{ $app->id }}"
                                                            data-toggle="modal"
                                                            data-target="#modalSupprAppartement{{ $app->id }}"
                                                            class="btn btn-danger btn-xs supprimer"><i
                                                                class="fa fa-times-circle"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        <!-- modal debut -->

                        @include('Appartements.editappartement')
                        @include('Appartements.DeleteApp')
                        <!-- modal fin -->

                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection

@section('script')
    <script src="{{ URL::asset('assets/js/AddAppartement.js') }}"></script>
    <script src="{{ url('assets/js/addlocataire.js') }}"></script>
    <script src="{{ url('assets/libs/parsleyjs/parsley.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("span:contains(-)").attr('class', 'text-danger');
        });
        // $("#td_id").attr('class', 'newClass');

    </script>
    <script>
        $("#appartement_datatable").DataTable({
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
            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")

            }
        });

    </script>


@endsection
