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
                    <div class="row mt-0">
                        <h5 class="col-8 font-size-16 mb-3">Liste des Factures.</h5>
                        <div class="col-4">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-outline-success" data-toggle="modal"
                                    data-target="#modalAjoutFacture">
                                    <i class="fas fa-plus-square"></i>
                                    Nouvelle Facture
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="facture-datatable" class="table table-striped table-hover nowrap">
                                <thead>
                                    <tr>
                                        <th class="text-center">Type</th>
                                        <th class="text-center">Payée Le</th>
                                        <th class="text-center">Designation</th>
                                        <th class="text-center">Montant</th>
                                        <th class="text-center">Reçu</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($factures as $facture)
                                    <tr>
                                        <td class="text-center">{{$facture->libelle}}</td>
                                        <td class="text-center">{{$facture->date_de_paiment_facture}}</td>
                                        <td class="text-center">{{$facture->designation}}</td>
                                        <td class="text-center">{{$facture->Montant}}</td>
                                        <td class="text-center">


                                            @if (explode( '.',$facture->img)[1]=="png")

                                            <a href="#modalModiFactureImage" data-toggle="modal"
                                                data-target="#modalModiFactureImage{{$facture->id}}">

                                                <img alt="img" src="{{ url('assets/uploads/'.$facture->img ) }}"
                                                    style="width: 50px" />
                                            </a>

                                            @else
                                            <a href="#modalModiFacturePDF" data-toggle="modal"
                                                data-target="#modalModiFacturePDF{{$facture->id}}">
                                                Voir PDF
                                            </a>


                                            @endif

                                        </td>
                                        <td class="text-center">

                                            <div class="btn-group" role="group">

                                                <a href="#modalModiFacture{{$facture->id}}"
                                                    class="btn btn-success btn-xs " data-toggle="modal"
                                                    data-target="#modalModiFacture{{$facture->id}}">
                                                    <i class="fas fa-user-edit"></i>modifier</a>

                                                <form class="needs-validation" novalidate method="POST"
                                                    action="{{ route('Facture.destroy',['Facture'=>$facture->id])}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="delete btn btn-danger btn-sm" type="submit"><i
                                                            class="fa fa-times-circle"></i>Delete
                                                    </button>
                                                </form>
                                            </div>


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
    </div>


    <div id="modalAjoutFacture" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalAjoutFactureLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAjoutFactureLabel">Nouvelle Facture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" novalidate action="{{route('Facture.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bloc">Blocs</label>
                                    <select name="bloc" id="bloc" class="form-control ">
                                        @foreach($blocs as $bloc)
                                        <option value="{{$bloc->id}}" selected="">{{$bloc->nom_bloc}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="type_facture">Type de Depense</label>
                                    <select name="type_facture" id="type_facture" class="form-control">
                                        <option value="1">Jardiange</option>
                                        <option value="2">Nettoyage</option>
                                        <option value="3">Divers</option>
                                        <option value="4">Securite</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="datep">Date de Paiment</label>
                                    <input type="date" required="" name="datep" id="datep" class="form-control " />
                                </div>
                                <div class="form-group">
                                    <label for="Montant">Montant</label>
                                    <input type="text" required="" name="Montant" id="Montant" class="form-control " />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="designation">Désignation</label>
                                    <textarea type="text" name="designation" id="designation" class="form-control"
                                        rows="2" required>
                                        </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-center">
                                    <div class="form-group">
                                        <label for="inputFileid" id="labelFile"
                                            class="labelFile p-2 text-capitalize form-control"
                                            style="height: fit-content;" data-toggle="tooltip" data-placement="top"
                                            title="Fichier/piéce jointe">
                                            <i class="far fa-file-alt"></i>
                                            Reçu
                                        </label>
                                        <input class="inputFile form-control"
                                            onchange="AffectFichier('labelFile',this.value)" type="file" name="preuve"
                                            id="inputFileid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" id="ajouter" name="ajouter" class="btn btn-soft-success"><i
                                            class="fa fa-plus"></i>
                                        Ajouter
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($factures as $facture)
<div id="modalModiFactureImage{{$facture->id}}" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="modalModiFactureImageLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalModiFactureImageLabel">Reçu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img alt="image" style="width:100%" src="{{ url('assets/uploads/'.$facture->img ) }}">

                >
            </div>
        </div>
    </div>
</div>
@endforeach


@foreach($factures as $facture)
<div id="modalModiFacturePDF{{$facture->id}}" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="modalModiFacturePDFLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalModiFacturePDFLabel">Reçu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <embed width="100%" height="300px" type="application/pdf"
                    src="{{ url('assets/uploads/'.$facture->img )}}">
            </div>
        </div>
    </div>
</div>
@endforeach



@foreach($factures as $facture)

<div id="modalModiFacture{{$facture->id}}" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="modalModiFactureLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAjoutFactureLabel">Modifier une Facture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate action="{{route('Facture.update',['Facture'=>$facture->id])}}"
                    method="POST">
                    @method('PUT')
                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Blocs</label>
                                <select name="bloc" id="bloc" class="form-control ">
                                    @foreach($blocs as $bloc)
                                    <option value="{{$bloc->id}}" selected="">{{$bloc->nom_bloc}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Type de Depense</label>
                                <select name="type_facture" id="type_facture" class="form-control">
                                    <option value="1">Jardiange</option>
                                    <option value="2">Nettoyage</option>
                                    <option value="3">Securite</option>
                                    <option value="4">Divers</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="datep">Date de Paiment</label>
                                <input type="date" required="" name="datep" id="datep" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="Montant">Montant</label>
                                <input type="text" required="" name="Montant" id="Montant" class="form-control "
                                    value="{{$facture->Montant}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" required="" name="designation" id="designation" class="form-control "
                                    value="{{$facture->designation}}" />
                            </div>

                            <div class="form-group ">
                                <label style="visibility: hidden ;margin-top: 14px"></label>
                                <label class="labelFile2 p-2 text-capitalize form-control" for="inputFileid2"
                                    id="labelFile2" data-toggle="tooltip" data-placement="top"
                                    title="Fichier/piéce jointe">
                                    <i class="far fa-file-alt"></i>
                                    Reçu
                                </label>
                                <input class="inputFile form-control" onchange="AffectFichier('labelFile2',this.value)"
                                    type="file" name="preuve" id="inputFileid2" />
                            </div>

                        </div>
                        <button type="submit" id="ajouter" name="ajouter" class="btn btn-block btn-purple "><i
                                class="fa fa-plus"></i> Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endforeach



@endsection
@section('script')
<script src="{{ url('assets/js/addlocataire.js') }}"></script>
<script src="{{ url('assets/libs/parsleyjs/parsley.min.js') }}"></script>
<script>
    $("#facture-datatable").DataTable({
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
            "info": "Total : _TOTAL_ Factures",
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
    function AffectFichier(labelFile2, fileName) {
        document.getElementById(labelFile2).innerHTML =
            `<i class='fas fa-check'></i>${fileName.split(/(\\|\/)/g).pop()}`;
    }

</script>
<script>
    function AffectFichier(labelID, fileName) {
        document.getElementById(labelID).innerHTML =
            `<i class='fas fa-check'></i>${fileName.split(/(\\|\/)/g).pop()}`;
    }

</script>
@endsection
