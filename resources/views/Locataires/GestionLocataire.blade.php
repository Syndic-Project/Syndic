@extends('Layouts/appLayout')

@section('style')
<link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/autocomplete.css') }}" rel="stylesheet" type="text/css" />
<style>
    label {
        font-size: 13px;
    }

</style>
@endsection

@section('content')
<div class="content-page">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-0">
                        <h5 class="col-8 font-size-16 mb-3">Liste des Locataires.</h5>
                        <div class="col-4">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-outline-success" style="font-weight: bolder;" data-toggle="modal"
                                    data-target="#modalAjoutLocataire">
                                    <i class="fas fa-plus-square"></i>
                                    Locataire
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @if(Session::has('message'))
                    <div class="alert {{ Session::get('alert-class') }}">
                        @if (Session::get('alert-class') == 'alert-success')
                        <i class="fas fa-check-double"></i>
                        @else
                        <i class="fas fa-exclamation-circle"></i>
                        @endif
                        {{ Session::get('message') }}
                    </div>
                    @endif
                    <table id="locataires-datatable" class="table table-striped table-hover nowrap">
                        <thead>
                            <tr>
                                <th class="text-center">Actions</th>
                                <th class="text-center">Nom Complet</th>
                                <th class="text-center">Cin</th>
                                <th class="text-center">E-mail</th>
                                <th class="text-center">Validité de l'email</th>
                                <th class="text-center">Numéro de Tel</th>
                                <th class="text-center">Paiements Effectués</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($locataires as $locataire)
                            <tr>
                                <td class="text-center">
                                    <a href="#modalModifLocataire{{$locataire->id}}" data-toggle="modal"
                                        data-target="#modalModifLocataire{{$locataire->id}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                            data-toggle="tooltip" data-placement="top" title="Modifier"
                                            viewBox="0 0 172 172" style=" fill:#000000;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                                <g fill="#2e49f7">
                                                    <path
                                                        d="M85.58344,14.79469c-12.6764,0.28552 -21.94327,4.15778 -27.54015,11.51594c-6.62544,8.71696 -7.86787,22.07405 -3.70203,39.72125c-1.42072,1.82664 -2.69868,4.7507 -2.365,8.7411c1.01824,7.42696 3.83958,10.48878 6.14094,11.74438c1.05952,6.02 3.97272,12.64098 6.90016,15.80922v12.255c-2.10184,4.73 -8.94271,7.46786 -16.82375,10.62234c-13.29216,5.31824 -29.83792,11.93621 -30.98688,32.84797l-0.20156,3.62813h73.81891l1.95515,-6.88h-68.28266c2.50776,-13.7084 14.5576,-18.5316 26.25016,-23.20656c6.92397,-2.77112 13.55305,-5.43975 17.67703,-9.90344c1.09458,1.01595 2.40109,1.8733 3.78938,2.58672c3.70983,1.90644 8.47945,3.00328 13.78687,3.00328c5.34838,0 10.13449,-1.20572 13.82047,-3.1511c1.29658,-0.68431 2.51341,-1.47745 3.56094,-2.39187c2.15636,2.2674 4.94529,4.07513 8.0961,5.6639l5.13313,-5.17344c-4.72312,-2.14312 -8.45343,-4.44233 -9.97735,-7.68625v-12.21469c2.91024,-3.15104 5.81688,-9.7294 6.88672,-15.72188c2.44928,-1.204 5.46933,-4.2628 6.17453,-12.01312c0.3268,-3.87344 -0.73831,-6.72273 -2.20375,-8.55969c2.92056,-9.38432 5.48293,-25.46304 -0.69875,-35.68328c-2.92744,-4.84352 -7.40337,-7.89039 -13.30985,-9.07031c-3.32304,-4.1968 -9.56707,-6.48359 -17.89875,-6.48359zM85.66406,21.66797c6.50504,0 11.18801,1.6398 12.85297,4.48813l0.83984,1.43781l1.63938,0.23516c4.58208,0.64672 7.82207,2.63359 9.91015,6.08047c4.98112,8.2388 2.36108,23.6558 -0.62484,32.00812l-1.08844,2.83531l2.72781,1.3639c0.30616,0.21672 1.13359,1.40352 0.92719,3.87c-0.4644,5.0912 -2.08147,6.44855 -2.42547,6.51047h-3.13094l-0.29562,3.1175c-0.62264,6.52224 -4.25738,13.25432 -5.50266,14.19l-1.73344,0.98765v16.4475c0,-0.03822 -0.64507,1.48581 -3.1511,2.80844c-2.50603,1.32262 -6.32529,2.35156 -10.6089,2.35156c-4.32457,0 -8.16033,-0.9685 -10.6425,-2.24406c-2.48217,-1.27556 -3.1175,-2.62045 -3.1175,-2.91594c0.00536,-0.53021 -0.11191,-1.05448 -0.34265,-1.53187v-12.91344l0.0739,-1.95515l-1.73344,-0.99438c-1.31064,-0.97696 -4.95392,-7.71479 -5.57656,-14.23703l-0.04703,-3.08391h-3.13094c-0.48848,-0.1892 -2.02063,-1.81847 -2.66735,-6.50375c-0.23736,-2.88616 1.23297,-4.07828 1.22953,-4.07828l2.02906,-1.35047l-0.59797,-2.35828c-4.17272,-16.45352 -3.4823,-28.48503 2.04922,-35.75719c4.26216,-5.6072 11.73916,-8.57436 22.13828,-8.80828zM157.89735,96.32c-3.44,0 -6.54003,1.37465 -9.29203,3.78265l-0.68531,0.34266l-0.34265,0.34937l-1.03469,1.02797l-2.40531,2.41203l-0.69203,0.68531l-40.24531,40.59469c-0.344,0.344 -0.69069,1.02663 -1.03469,1.37063l-5.84531,20.64c-0.688,1.72 0.34131,3.78803 2.40531,4.13203c0.688,0.344 1.376,0.344 1.72,0l20.64,-5.50266c0.688,0 1.032,-0.34669 1.72,-1.03469l44.03469,-44.03469l1.03469,-0.68531c5.504,-5.504 5.504,-14.45069 0,-19.95469c-2.752,-3.096 -6.53734,-4.12531 -9.97734,-4.12531zM157.89735,103.2c1.72,0 3.784,0.68665 5.16,2.06265c2.752,2.752 2.75065,6.88269 0.34265,9.63469l-9.97735,-9.97735c1.376,-1.032 2.75469,-1.72 4.47469,-1.72zM148.26265,109.73735l10.32,10.32l-37.49734,37.49734l-10.32,-9.97734zM107.32531,154.11469l7.22937,7.22266l-9.97734,2.74797z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    |
                                    <a href="#modalSupprLocataire{{$locataire->id}}" data-toggle="modal"
                                        data-target="#modalSupprLocataire{{$locataire->id}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                            data-toggle="tooltip" data-placement="top" title="Supprimer"
                                            viewBox="0 0 172 172" style=" fill:#000000;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                                <g fill="#ff5c75">
                                                    <path
                                                        d="M71.66667,14.33333l-7.16667,7.16667h-28.66667c-4.3,0 -7.16667,2.86667 -7.16667,7.16667c0,4.3 2.86667,7.16667 7.16667,7.16667h14.33333h71.66667h14.33333c4.3,0 7.16667,-2.86667 7.16667,-7.16667c0,-4.3 -2.86667,-7.16667 -7.16667,-7.16667h-28.66667l-7.16667,-7.16667zM35.83333,50.16667v93.16667c0,7.88333 6.45,14.33333 14.33333,14.33333h71.66667c7.88333,0 14.33333,-6.45 14.33333,-14.33333v-93.16667zM64.5,64.5c4.3,0 7.16667,2.86667 7.16667,7.16667v64.5c0,4.3 -2.86667,7.16667 -7.16667,7.16667c-4.3,0 -7.16667,-2.86667 -7.16667,-7.16667v-64.5c0,-4.3 2.86667,-7.16667 7.16667,-7.16667zM107.5,64.5c4.3,0 7.16667,2.86667 7.16667,7.16667v64.5c0,4.3 -2.86667,7.16667 -7.16667,7.16667c-4.3,0 -7.16667,-2.86667 -7.16667,-7.16667v-64.5c0,-4.3 2.86667,-7.16667 7.16667,-7.16667z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </td>
                                <td class="text-center">{{ $locataire->nom . ' ' . $locataire->prenom }}</td>
                                <td class="text-center">{{$locataire->CIN }}</td>
                                <td class="text-center">{{ $locataire->email }}</td>
                                <td class="text-center">
                                    @if($locataire->email_verified_at != NULL)
                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                        style="width: 20px;cursor:pointer;" data-toggle="tooltip" data-placement="top"
                                        title="Validé le 22/10/2020" />
                                    @else
                                    <img src="https://img.icons8.com/color/48/000000/cancel--v1.png"
                                        style="width: 20px;cursor:pointer;" data-toggle="tooltip" data-placement="top"
                                        title="non validé" />
                                    @endif
                                </td>
                                <td class="text-center">{{ $locataire->Tel }}</td>
                                <td class="text-center">
                                    {{ count($locataire->caisses->whereNotNull('Date_Paiment')->toArray()) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('Locataires._modalAjoutLocataire')
@include('Locataires._modalSupprLocataire')
@include('Locataires._modalModifLocataire')
<span class="d-none" id="arrayAppartements">
    @foreach($appartements as $appartement )
    <i>{{$appartement->nom}}</i>
    @endforeach
</span>

@endsection

@section('script')
<script src="{{ url('assets/js/addlocataire.js') }}"></script>
<script src="{{ url('assets/js/pages/autocomplete.js') }}"></script>
<script src="{{ url('assets/libs/parsleyjs/parsley.min.js') }}"></script>
<script>
    let appartements = [];
    Array.from($("#arrayAppartements").children()).forEach(element => {
        appartements.push(element.innerText);
    });
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
<script>
    autocomplete(
        document.getElementById("badgeContainer"),
        document.getElementById("appartementsAutocomplete"),
        appartements
    );

</script>

@endsection

@section('script-bottom')
<!-- Validation init js-->
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection
