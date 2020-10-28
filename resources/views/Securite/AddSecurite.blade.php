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
                                            data-target="#modalAjoutSecurite">
                                        <i class="fas fa-plus-square"></i>
                                      Ajoute un Securite
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="mybox" id="box_appartliste">
                                    <table id="securite-datatable" class="table table-hover table-condensed">
                                        <thead>
                                        <tr>

                                            <th class="text-center">ID</th>
                                            <th class="text-center">Nom et Prenom</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Action</th>

                                        </tr>
                                        </thead>
                            <tbody>
                            {{-- @foreach ($locataires as $locataire) --}}
                            @for ($i = 0; $i < 100; $i++)
                                <tr>

                                    <td class="text-center">1</td>
                                    <td class="text-center">sohaib el mediouni</td>
                                    <td class="text-center">Sohaib.e.mdn@gmail.com</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href=""
                                               class="btn btn-info btn-xs"><i class="fa fa-eye"></i> détails</a>&nbsp;
                                            <a href="#modalEditSecurite"  class="btn btn-success btn-xs editajax"
                                               data-toggle="modal"
                                               data-target="#modalEditSecurite">
                                            <i class="fas fa-user-edit"></i></i> modifier</a>
                                        </div>
                                        &nbsp;<a href="#" id="1715" class="btn btn-danger btn-xs supprimer"><i
                                                class="fa fa-times-circle"></i></a>
                                    </td>

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

    <div id="modalAjoutSecurite" class="modal fade" tabindex="-1" role="dialog"
         aria-labelledby="modalAjoutSecuriteLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAjoutSecuriteLabel">Nouveau Securite</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" action="" method="post">
                        @csrf
                        <div class="container">
                            <br/>
                            <div class="row justify-content-start">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nom et Prenom</label>
                                        <input type="text" class="form-control" id="name" name="nom"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="prenom">Prenom</label>
                                        <input type="text" class="form-control" id="prenom" name="prenom"/>
                                    </div>


                                    <div class="form-group">
                                        <label for="pass">Mot de Passe</label>
                                        <input type="password" class="form-control" id="pass" name="mdp"/>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </div>
    </div>


{{--///////////////////////////////Model for edit /////////////////////////////////////:--}}
                <div id="modalEditSecurite" class="modal fade" tabindex="-1" role="dialog"
                     aria-labelledby="modalEditSecuriteLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalEditSecuriteLabel">Edit Securite</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" action="" method="post">
                                    @csrf
                                    <div class="container">
                                        <br/>
                                        <div class="row justify-content-start">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Nom et Prenom</label>
                                                    <input type="text" class="form-control" id="name" name="nom"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email"/>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="prenom">Prenom</label>
                                                    <input type="text" class="form-control" id="prenom" name="prenom"/>
                                                </div>


                                                <div class="form-group">
                                                    <label for="pass">Mot de Passe</label>
                                                    <input type="password" class="form-control" id="pass" name="mdp"/>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>


@endsection

@section('script')
    <script src="{{ url('assets/js/addlocataire.js') }}"></script>
    <script src="{{ url('assets/libs/parsleyjs/parsley.min.js') }}"></script>
    <script>
        $("#securite-datatable").DataTable({
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
