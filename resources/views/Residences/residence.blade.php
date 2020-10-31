@extends('Layouts/appLayout')

@section('style')
    <link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="content-page">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-0">
                            <h5 class="col-8 font-size-16 mb-3">Liste des Securite.</h5>
                            <div class="col-4">
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-outline-success btn-lg" style="font-weight: bolder;"
                                            data-toggle="modal"
                                            data-target="#modalAjoutResidence">
                                        <i class="fas fa-plus-square"></i>
                                        Ajoute une Residence
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="mybox" id="box_appartliste">
                                    <table id="residence-datatable" class="table table-hover table-condensed nowrap">
                                        <thead>
                                        <tr>

                                            <th class="text-center">ID</th>
                                            <th class="text-center">Nom de Residencce</th>
                                            <th class="text-center">Ville</th>

                                            <th class="text-center">Nom du bloc</th>
                                            <th class="text-center">Action</th>
                                            <th class="text-center">Adresse</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{-- @foreach ($locataires as $locataire) --}}

                                        @foreach($residence as $res)

                                            <tr>

                                                <td class="text-center">{{$res->id}}</td>
                                                <td class="text-center">{{$res->nom_residence}}</td>
                                                <td class="text-center">{{$res->nom_ville}}</td>

                                                <td class="text-center">{{$res->nom_bloc}}</td>
                                                <td class="text-center">

                                                    <div class="btn-group" role="group">
                                                        <a href="#"
                                                           class="btn btn-info btn-xs"><i class="fa fa-eye"></i> détails</a>&nbsp;

                                                        <a href="#modalModifResidence{{$res->id}}"
                                                           data-toggle="modal"
                                                           data-target="#modalModifResidence{{$res->id}}"
                                                           class="btn btn-success btn-xs ">
                                                            <i class="fas fa-user-edit"></i>modifier
                                                        </a>


                                                    </div>

                                                </td>
                                                <td class="text-center">{{$res->adresse}}</td>


                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="modalAjoutResidence" class="modal fade" tabindex="-1" role="dialog"
                     aria-labelledby="modalAjoutResidenceLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalAjoutResidenceLabel">Nouvelle Residence</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="{{route('residences.store') }}"
                                      method="post" accept-charset="utf-8">
                                    <div class="row mybox">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                @csrf
                                                <label for="nom">NOM de Résidence</label>
                                                <input type="text" name="nom" id="nom" class="form-control input-lg"
                                                       required=""
                                                       placeholder="NOM DE Résidence">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="ville">VILLE ou se trouve cet immeuble</label>

                                                        <select name="ville" id="ville" class="form-control input-lg">
                                                            <option value="">la ville où se trouve La Résidence</option>

                                                            @foreach ($villes as $ville )
                                                                <option
                                                                    value="{{$ville->id}}">{{$ville->nom_ville}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="syndic">Syndic</label>

                                                        <select name="syndic" id="syndic" class="form-control input-lg">

                                                            @foreach ($syndics as $syndic )
                                                                <option
                                                                    value="{{$syndic->id}}">{{$syndic->nom}}</option>
                                                            @endforeach


                                                            <option value="8">new</option>


                                                        </select>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="form-group">
                                                <label for="adresse">ADRESSE</label>
                                                <textarea name="adresse" id="adresse" class="form-control input-lg"
                                                          rows="2"
                                                          placeholder="ADRESSE DE L'IMMEUBLE"></textarea>
                                            </div>


                                            <div class="row">


                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="nom_bloc">Nom du Bloc</label>
                                                        <input type="text" name="nom_bloc" id="nom_bloc"
                                                               class="form-control input-lg"/>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>


                                        <p>&nbsp;</p>
                                        <button type="submit" class="btn btn-block btn-purple btn-lg ">ENREGISTRER et
                                            Passer aux Immeubles <i
                                                class="fa fa-arrow-right"></i></button>

                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                @include('Residences._modalModifResidence')

                @endsection

                @section('script')
                    <script src="{{ url('assets/js/addlocataire.js') }}"></script>
                    <script src="{{ url('assets/libs/parsleyjs/parsley.min.js') }}"></script>
                    <script>
                        $("#residence-datatable").DataTable({
                            responsive: true,
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

                    <script>
                        autocomplete(
                            document.getElementById("badgeContainer"),
                            document.getElementById("blocAutocomplete"),
                            appartements
                        );

                    </script>

            @endsection

            @section('script-bottom')
                <!-- Validation init js-->
                    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection
