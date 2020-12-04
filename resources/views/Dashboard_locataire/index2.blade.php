


@extends('Layouts/appLayout')

@section('content')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title align-items-center">
                <div class="col-sm-4 col-xl-6">
                    <h4 class="mb-1 mt-0">
                        <span style="text-decoration: underline">
                            Dashboard de Statistiques
                        </span>
                    </h4>
                </div>
                <div class="col-sm-8 col-xl-6">
                    <form class="form-inline float-sm-right mt-3 mt-sm-0">
                        {{-- <div class="form-group mb-sm-0 mr-2">
                            <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
                        </div> --}}
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class='uil uil-file-alt mr-1'></i>
                                Exporter
                                <i class="icon"><span data-feather="chevron-down"></span></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                               
                                <a href="#" class="dropdown-item notify-item">
                                    <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                                    <span>Imprimer</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@if ($nbrapp>1)
<select name="" class="form-control" id="">
    @foreach ($appartements as $app )
<option value="{{$app->id}}">{{$app->nom}}</option>
    @endforeach
   
    </select>  

    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            <span class="text-muted text-uppercase font-size-12 font-weight-bold">
                                DERNIER MOIS PAYÉ Pour l'Appartement :
                            </span>
                            <h2 class="mb-0">{{ $derniermois }}</h2>
                        </div>
                        <div class="align-self-center">
                            <div id="today-revenue-chart" class="apex-charts"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     
    </div>
@else
        
         
            <!-- content -->
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">
                                        DERNIER MOIS PAYÉ
                                    </span>
                                    <h2 class="mb-0">{{ $derniermois }}</h2>
                                </div>
                                <div class="align-self-center">
                                    <div id="today-revenue-chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Locataire en
                                        Retard</span>
                                    <h2 class="mb-0">{{$nbrapp}}</h2>
                                </div>
                                <div class="align-self-center">
                                    <div> <i class="far fa-smile-beam fa-2x"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif


            <div class="col-12">
                <div class="card">
                    <div class="card-body">
              
<div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h5 class="card-title mt-0 mb-0">Dépenses & Factures</h5>
                            <div id="targets-chart" class="apex-charts pb-3" dir="ltr"></div>
                        </div>
                    </div>
                </div>

             
            </div>


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
                                    <td class="text-center">{{ $facture->libelle }}</td>
                                    <td class="text-center">{{ $facture->date_de_paiment_facture }}</td>
                                    <td class="text-center">{{ $facture->designation }}</td>
                                    <td class="text-center">{{ $facture->Montant }}</td>
                                    <td class="text-center">


                                        @if (explode('.', $facture->img)[1] == 'png' || explode('.', $facture->img)[1] == 'jpg' || explode('.', $facture->img)[1] == 'jpeg' || explode('.', $facture->img)[1] == 'PNG')
                                            <a href="#modalModiFactureImage" data-toggle="modal"
                                                data-target="#modalModiFactureImage{{ $facture->id }}">

                                                <img alt="img"
                                                    src="{{ url('assets/uploads/' . $facture->img) }}"
                                                    style="width: 50px" />
                                            </a>
                                        @else
                                            <a href="#modalModiFacturePDF" data-toggle="modal"
                                                data-target="#modalModiFacturePDF{{ $facture->id }}">
                                                Voir PDF
                                            </a>
                                        @endif

                                    </td>
                                    <td class="text-center">

                                        <div class="btn-group" role="group">

                                            <a href="#modalModiFacture{{ $facture->id }}"
                                                class="btn btn-success btn-xs " data-toggle="modal"
                                                data-target="#modalModiFacture{{ $facture->id }}">
                                                <i class="fas fa-user-edit"></i>modifier</a>

                                            <form class="needs-validation" novalidate method="POST"
                                                action="{{ route('Facture.destroy', ['Facture' => $facture->id]) }}">
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


            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                           Copyright Beekom&copy;. 2019-2020
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>


@endsection

@section('script')
<script src="{{ url('assets/js/utilDate.js') }}"></script>
<script src="{{ url('assets/js/pages/dashboard.init.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha256-t9UJPrESBeG2ojKTIcFLPGF7nHi2vEc7f5A2KpH/UBU=" crossorigin="anonymous"></script>


<script>
    r = {
        chart: {
            height: 296,
            type: "bar",
            toolbar: {
                show: !1
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                endingShape: "rounded",
                columnWidth: "55%"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 2,
            colors: ["transparent"]
        },
        series: [{
                name: "Jardinage",
                data: [ @foreach ($depensesJardinnage as $item) {{ $item->somme_jardinnage }}, @endforeach ]
            }, {
                name: "Nettoyage",
                data: [ @foreach ($depensesNettoyage as $item) {{ $item->somme_nettoyage }}, @endforeach ]
            }, {
                name: "Securite",
                data: [ @foreach ($depensesSecurite as $item) {{ $item->somme_securite }}, @endforeach ]
            },
            {
                name: "Divers",
                data: [ @foreach ($depensesDivers as $item) {{ $item->somme_divers }}, @endforeach ]
            }
        ],
        xaxis: {
            categories: [@foreach ($depensesJardinnage as $item) getMoisById(parseInt(`{{ $item->mois_concerne }}`)), @endforeach]
        },
        legend: {
            offsetY: -10
        },
        yaxis: {
            title: {
                text: "Motants : en (Dhs)"
            }
        },
        grid: {
            row: {
                colors: ["transparent", "transparent"],
                opacity: .2
            },
            borderColor: "#f1f3fa"
        },
        tooltip: {
            y: {
                formatter: function (t) {
                    return t + " Dhs"
                }
            }
        }
    };
    var chart = new ApexCharts(document.querySelector("#targets-chart"), r).render();

</script>


<script>
    $("#facture-datatable").DataTable({
        lengthMenu: [
            [10, 25, 50, -1],
            ['10 lignes', '25 lignes', '50 lignes', 'afficher tous']
        ],

        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
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
        
        
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
        }
    }
    );


    


</script>
@endsection
