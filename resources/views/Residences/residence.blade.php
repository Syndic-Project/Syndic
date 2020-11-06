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
                        <h5 class="col-8 font-size-16 mb-3">Gérer la Résidence.</h5>
                        <div class="col-4">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-outline-success" data-toggle="modal"
                                    data-target="#modalAjoutResidence">
                                    <i class="fas fa-plus-square"></i>
                                    Ajouter la Résidence
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
                                            </td>
                                            <td class="text-center">{{$bloc->nom_bloc}}</td>
                                            <td class="text-center">
                                                <i class="far fa-building"></i>
                                                {{-- {{ count($bloc->immeuble->get()->where("id_bloc",$bloc->id)->toArray()) }} --}}
                                                 {{ dd($bloc) }}

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

            <div id="modalAjoutResidence" class="modal fade" tabindex="-1" role="dialog"
                aria-labelledby="modalAjoutResidenceLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalAjoutResidenceLabel">Nouvelle Residence</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('residences.store') }}" method="post" accept-charset="utf-8">
                                @csrf
                                <div class="row mybox">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nom">Libellé de la Résidence :</label>
                                            <input type="text" name="nom" id="nom" class="form-control input-lg"
                                                required>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ville">Ville :</label>
                                                    <select name="ville" id="ville" class="form-control input-lg"
                                                        required>
                                                        <option value="" disabled selected>-Sélectionner-</option>
                                                        @foreach ($villes as $ville )
                                                        <option value="{{$ville->id}}">{{$ville->nom_ville}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="syndic">Syndic :</label>
                                                    <input type="text" id="syndic" class="form-control input-lg"
                                                        value="{{ AuthentificationController::getCurrentUser()->nom . ' '.  AuthentificationController::getCurrentUser()->prenom }}"
                                                        disabled>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="adresse">Adresse :</label>
                                            <textarea name="adresse" id="adresse" class="form-control input-lg" rows="2"
                                                required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <span class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-soft-success pull-right">
                                                Confirmer
                                                <i class="fa fa-arrow-right"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('Blocs._modelModifBloc')

@endsection

@section('script')
<script src="{{ url('assets/js/addlocataire.js') }}"></script>
@endsection
