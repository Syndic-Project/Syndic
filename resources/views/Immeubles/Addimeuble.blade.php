@extends('Layouts/appLayout')

@section('style')
    <link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('css')

@endsection

@section('content')

    <div class="content-page">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">


                        <form class="needs-validation" novalidate method="POST" action="{{ route('immeubles.store') }}">
                            @csrf

                            @include('Immeubles.layout')
                            <button type="submit" class="btn btn-block btn-purple btn-lg ">ENREGISTRER et Passer aux
                                Appartements <i class="fa fa-arrow-right"></i></button>

                        </form>

                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h5 class="font-size-16 mb-1 mt-0">Fiche des paiements.</h5>
                                        <table id="immeubles-datatable" class="table nowrap">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Immeuble</th>
                                                <th class="text-center">Bloc</th>
                                                <th class="text-center">Caissa</th>
                                                <th class="text-center">Cotisation</th>
                                                <th class="text-center"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($bloc_immeuble as $imm)
                                                {{-- @for ($i = 0; $i < 100; $i++) --}}
                                                <tr>
                                                    <td class="text-center"> {{ $imm->Nom_Immeuble }}</td>
                                                    <td class="text-center">{{ $imm->nom_bloc }}</td>

                                                    <td class="text-center">{{ $imm->Montant_Disponible_En_Caisse }}
                                                    </td>
                                                    <td class="text-center">{{ $imm->Montant_Cotisation_Mensuelle }}
                                                    </td>

                                                    <td><a href="{{route('immeubles.edit',['immeuble'=>$imm->id])}}"
                                                           class="edit btn btn-success btn-sm">Edit</a> <a
                                                            href="{{route('immeubles.edit',['immeuble'=>$imm->id])}}"
                                                            class="delete btn btn-danger btn-sm">Delete</a></td>
                                                </tr>

                                                {{--
                                            @endfor --}}
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        $("#immeubles-datatable").DataTable({
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
