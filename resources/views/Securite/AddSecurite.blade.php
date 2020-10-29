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
                                            <th class="text-center">Bloc</th>
                                            <th class="text-center">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{-- @foreach ($locataires as $locataire) --}}
                                        @foreach($securite as $secu)

                                            <tr>

                                                <td class="text-center">{{$secu->id}}</td>
                                                <td class="text-center">{{$secu->nometprenom}}</td>
                                                <td class="text-center">{{$secu->email}}</td>
                                                <td class="text-center">Bloc 1</td>
                                                <td class="text-center">
                                                    <div class="btn-group" role="group">
                                                        <a href=""
                                                           class="btn btn-info btn-xs"><i class="fa fa-eye"></i> détails</a>&nbsp;
                                                        <a href="{{route('Securite.edit',['securite'=>$secu->id])}}"
                                                           class="btn btn-success btn-xs editajax"
                                                           data-toggle="modal"
                                                           data-target="#modalEditSecurite">
                                                            <i class="fas fa-user-edit"></i></i> modifier</a>
                                                    </div>
                                                    &nbsp;<a href="#" id="1715" class="btn btn-danger btn-xs supprimer"><i
                                                            class="fa fa-times-circle"></i></a>
                                                </td>

                                            </tr>
                                        @endforeach


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
                                <form class="needs-validation" novalidate method="POST" action="{{ route('Securite.store') }}">
                                    @csrf
                                    <div class="container">
                                        <br/>
                                        <div class="row justify-content-start">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Nom et Prenom</label>
                                                    <input type="text" class="form-control" id="name" name="nom" required/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" required/>
                                                </div>
                                            </div>

                                            <div class="col-md-6">



                                                <div class="form-group">
                                                    <label for="pass">Mot de Passe</label>
                                                    <input type="password" class="form-control" id="pass" name="mdp" required/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bloc">Bloc</label>
                                                    <select name="bloc" id="" class="form-control" required>
                                                        @foreach($blocs as $bloc)
                                                            <option value="{{$bloc->id}}">
                                                                {{$bloc->nom_bloc}}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                    </div>
                                </form>

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
                                <form class="needs-validation" novalidate method="POST"
                                      action="{{route('Securite.update',['securite'=>$securite->id])}}">
                                    @method('PUT')
                                    @csrf
                                    <div class="container">
                                        <br/>
                                        <div class="row justify-content-start">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Nom et Prenom</label>
                                                    <input type="text" class="form-control" id="name" name="nom"
                                                           value="{{$securite->nometprenom}}"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                           value="{{$securite->email}}"/>
                                                </div>
                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="bloc">Bloc</label>
                                                    <select name="bloc" id="" class="form-control">
                                                        @foreach($blocs as $bloc)
                                                            <option value="">
                                                                {{$bloc->nom_bloc}}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                <div class="form-group">
                                                    <label for="pass">Mot de Passe</label>
                                                    <input type="password" class="form-control" id="pass" name="mdp"
                                                           value="{{$securite->password}}"/>
                                                </div>

                                            </div>


                                            </div>


                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </form>
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
