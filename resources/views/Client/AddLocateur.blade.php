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
                            <h5 class="col-8 font-size-16 mb-3">Liste des Locateurs.</h5>
                            <div class="col-4">
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-outline-success btn-lg" style="font-weight: bolder;"
                                            data-toggle="modal"
                                            data-target="#modalAjoutLocateur">
                                        <i class="fas fa-plus-square"></i>
                                        Ajoute un Locateur
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>


                        <div class="row">
                            <div class="col-md-12">

                                <div class="mybox" id="box_locateur">
                                    <table id="Locateur-datatable" class="table table-hover table-condensed">
                                        <thead>
                                        <tr>

                                            <th class="text-center">ID</th>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Prenom</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Appartement</th>
                                            <th class="text-center">Qr code</th>
                                            <th class="text-center">Valider le Logement</th>


                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach($locateurs as $loc)

                                            <tr>

                                                <td class="text-center">{{$loc->id}}</td>
                                                <td class="text-center">{{$loc->nom}}</td>
                                                <td class="text-center">{{$loc->prenom}}</td>
                                                <td class="text-center">{{$loc->email}}</td>
                                                <td class="text-center">APP1</td>
                                                <td class="text-center">
                                                    <button
                                                        class="delete btn btn-success btn-sm" type="submit"
                                                        data-toggle="modal"
                                                        data-target="#modalAfficherQr{{$loc->id}}">
                                                        <i class="fas fa-print"></i>
                                                        Afficher
                                                    </button>
                                                </td>
                                                <td class="text-center">

                                                    <button
                                                        class="delete btn btn-danger btn-sm" type="submit">
                                                        <i class="fas fa-clipboard-check"></i>
                                                        Envoyer Le Qr code au Locateur
                                                    </button>
                                                </td>


                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h1>{{$data}}</h1>

                <div id="modalAjoutLocateur" class="modal fade" tabindex="-1" role="dialog"
                     aria-labelledby="modalAjoutLocateurLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalAjoutLocateurLabel">Nouveau Locateur</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{route('Locateur.store') }}" method="POST">
                                    @csrf
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <h5 class="font-size-16 mb-1 mt-0">Ajouter un Locateur.</h5>
                                                    <p class="sub-header">

                                                    </p>
                                                    <div class="row">
                                                        <div class="col-md-4">

                                                            <div class="form-group">
                                                                <label for="nom">Nom</label>
                                                                <input type="text" required="" name="nom" id="nom"
                                                                       class="form-control "/>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nom">Tel</label>
                                                                <input type="Tel" required="" name="Tel" id="Tel"
                                                                       class="form-control "/>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-4">

                                                            <div class="form-group">
                                                                <label for="prenom">Prenom</label>
                                                                <input type="text" required="" name="prenom"
                                                                       id="prenom"
                                                                       class="form-control "/>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" required="" name="email"
                                                                       id="email"
                                                                       class="form-control "/>
                                                            </div>

                                                        </div>


                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="cin">CIN</label>
                                                                <input type="text" required="" name="cin" id="cin"
                                                                       class="form-control "/>
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="nbr">Nbr d'invite</label>
                                                                <input type="text" required="" name="nbr" id="nbr"
                                                                       class="form-control "/>
                                                            </div>


                                                        </div>


                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="dated">Date Debut</label>
                                                                <input type="date" required="" name="dated"
                                                                       id="dated"
                                                                       class="form-control "/>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="datef">Date Fin</label>
                                                                <input type="date" required="" name="datef"
                                                                       id="datef"
                                                                       class="form-control "/>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="id_app">Appartement</label>

                                                                <select name="id_appartement" id="id_app"
                                                                        class="form-control">
                                                                    @foreach($appartements as $app)
                                                                        <option
                                                                            value="{{$app->id}}">{{$app->nom}}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>


                                                        </div>


                                                        <button type="submit" id="ajouter" name="ajouter"
                                                                class="btn btn-block btn-purple "><i
                                                                class="fa fa-plus"></i> AJOUTER
                                                        </button>
                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
@include('Client.modalQrcode')

            </div>

            @endsection

            @section('script')


                <script src="{{ url('assets/js/addlocataire.js') }}"></script>
                <script src="{{ url('assets/libs/parsleyjs/parsley.min.js') }}"></script>
                <script>
                    $("#Locateur-datatable").DataTable({
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
