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
                        <h5 class="col-md-8 font-size-16 mb-3">Gérer la Résidence.</h5>
                        <div class="col-md-4">
                            <div class="d-flex justify-content-end">
                                @if($residence)
                                <button class="btn btn-soft-primary" data-toggle="modal" data-target="#modalAjoutBloc">
                                    <i class="fas fa-plus-square"></i>
                                    Nouveaux Bloc
                                </button>
                                @else
                                <button class="btn btn-outline-success" data-toggle="modal"
                                    data-target="#modalAjoutResidence">
                                    <i class="fas fa-plus-square"></i>
                                    Ajouter la Résidence
                                </button>
                                @endif
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
                                            <th class="text-center">Action</th>
                                            <th class="text-center">Nom du bloc</th>
                                            <th class="text-center">Nombres d'immeubles</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($blocs as $bloc)
                                            <tr>
                                                <td class="text-center">
                                                    <a href="#modalModifBloc-{{$bloc->id}}" data-toggle="modal"
                                                        data-target="#modalModifBloc-{{$bloc->id}}">
                                                        <i class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                            title="Modifier"></i>
                                                    </a>
                                                    @if(count($bloc->immeubles) == 0)
                                                        |
                                                        <a href="#modalSupprBloc-{{$bloc->id}}" class="text-danger" data-toggle="modal" data-target="#modalSupprBloc-{{$bloc->id}}">
                                                            <i class="far fa-trash-alt" data-toggle="tooltip"
                                                                data-placement="top" title="Supprimer"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                                <td class="text-center">{{$bloc->nom_bloc}}</td>
                                                <td class="text-center">
                                                    <i class="far fa-building"></i>
                                                    {{ count($bloc->immeubles) }}
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
    </div>
</div>
@include('Residences._modalAjoutResidence')
@include('Blocs._modalModifBloc')
@include('Blocs._modalSupprBloc')
@if($residence)
    @include('Blocs._modalAjoutBloc')
@endif

@endsection

@section('script')
<script src="{{ url('assets/js/addlocataire.js') }}"></script>
@endsection
