@extends('Layouts/appLayout')

@section('content')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title align-items-center">
                <div class="col-sm-4 col-xl-6">
                    <h4 class="mb-1 mt-0">Dashboard</h4>
                </div>
                <div class="col-sm-8 col-xl-6">
                    <form class="form-inline float-sm-right mt-3 mt-sm-0">
                        <div class="form-group mb-sm-0 mr-2">
                            <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class='uil uil-file-alt mr-1'></i>Download
                                <i class="icon"><span data-feather="chevron-down"></span></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item notify-item">
                                    <i data-feather="mail" class="icon-dual icon-xs mr-2"></i>
                                    <span>Email</span>
                                </a>
                                <a href="#" class="dropdown-item notify-item">
                                    <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                                    <span>Print</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item notify-item">
                                    <i data-feather="file" class="icon-dual icon-xs mr-2"></i>
                                    <span>Re-Generate</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- content -->
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Total en
                                        Caisse</span>
                                    <h2 class="mb-0">{{ $totalcaisse }} DH</h2>
                                </div>
                                <div class="align-self-center">
                                    <div id="today-revenue-chart" class="apex-charts"></div>
                                    <span class="text-success font-weight-bold font-size-13"><i
                                            class='uil uil-arrow-up'></i> 10.21%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Locataire en
                                        Retard</span>
                                    <h2 class="mb-0">{{ $totalLocataireenRetard }}/{{ $totalLocataire }}</h2>
                                </div>
                                <div class="align-self-center">
                                    <div id="today-product-sold-chart" class="apex-charts"></div>
                                    <span class="text-danger font-weight-bold font-size-13"><i
                                            class='uil uil-arrow-down'></i> 5.05%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Locataire en
                                        Avance</span>
                                    <h2 class="mb-0">{{ $totalLocataireenAvance }}/{{ $totalLocataire }}</h2>
                                </div>
                                <div class="align-self-center">
                                    <div id="today-new-customer-chart" class="apex-charts"></div>
                                    <span class="text-success font-weight-bold font-size-13"><i
                                            class='uil uil-arrow-up'></i> 25.16%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Total des
                                        Factures</span>
                                    <h2 class="mb-0">{{ $totaldepence }}</h2>
                                </div>
                                <div class="align-self-center">
                                    <div id="today-new-visitors-chart" class="apex-charts"></div>
                                    <span class="text-danger font-weight-bold font-size-13"><i
                                            class='uil uil-arrow-down'></i> 5.05%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- stats + charts -->
            <div class="row">
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <h5 class="card-title border-bottom p-3 mb-0">Général</h5>
                            <!-- stat 1 -->
                            <div class="media px-3 py-4 border-bottom">
                                <div class="media-body">
                                    <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">{{ $totalbloc }}</h4>
                                    <span class="text-muted">Total des Blocs</span>
                                </div>
                                <i data-feather="users" class="align-self-center icon-dual icon-lg"></i>
                            </div>

                            <!-- stat 2 -->
                            <div class="media px-3 py-4 border-bottom">
                                <div class="media-body">
                                    <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">{{ $totalImmeuble }}</h4>
                                    <span class="text-muted">Total des Immeubles</span>
                                </div>

                                <i class="far fa-building fa-2x"></i>

                            </div>

                            <!-- stat 3 -->
                            <div class="media px-3 py-4">
                                <div class="media-body">
                                    <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">{{ $totalappar }}</h4>
                                    <span class="text-muted">Total des Appartements</span>
                                </div>
                                <i class="fa fa-sitemap fa-2x"></i>
                                {{-- <i data-feather="shopping-bag"
                                        class="align-self-center icon-dual icon-lg"></i>--}}
                            </div>


                            <div class="media px-3 py-4 border-bottom">
                                <div class="media-body">
                                    <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">{{ $totalLocataire }}</h4>
                                    <span class="text-muted">Total des Locataire</span>
                                </div>
                                <i class="fa fa-users fa-fw    fa-2x"></i>
                            </div>


                        </div>


                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body pb-0">
                            <!-- <ul class="nav card-nav float-right">
                                                <li class="nav-item">
                                                    <a class="nav-link text-muted" href="#">Today</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-muted" href="#">7d</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#">15d</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-muted" href="#">1m</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-muted" href="#">1y</a>
                                                </li>
                                            </ul> -->
                            <h5 class="card-title mb-0">Revenue</h5>
                            <canvas id="line-chart" width="800" height="450"></canvas>
                            <!-- <div id="revenue-chart" class="apex-charts mt-3" dir="ltr"></div> -->
                        </div>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h5 class="card-title mt-0 mb-0">Targets</h5>
                            <div id="targets-chart" class="apex-charts pb-3" dir="ltr"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->

            <!-- products -->
            <div class="row">
                <div class="col-xl-12">
                    <select name="" id="slct" class="form-control">
                        @foreach ($immeubles as $imm)
                        <option value="{{ $imm->id }}">{{ $imm->Nom_Immeuble }}</option>
                        @endforeach
                    </select>
                    <div class="card">
                        <div class="card-body">


                            <h4 class="card-title mt-0 mb-0 text-center">
                                HICAHM
                            </h4>
                            <h5 class="card-title mt-0 mb-0 text-center">
                                SITUATION DES NON PAYÉS
                            </h5>
                            <div id="" class="apex-charts mb-0 mt-4" dir="ltr">

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
                            2020 &copy; Nom-Entreprise. 
                            <i class='uil uil-heart text-danger font-size-12'></i>
                                <a href="" target="_blank"></a>
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
{{-- <script src="{{ url('assets/js/pages/dashboard.init.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha256-t9UJPrESBeG2ojKTIcFLPGF7nHi2vEc7f5A2KpH/UBU=" crossorigin="anonymous"></script>
<script>
    new Chart(document.getElementById("line-chart"), {
        type: 'line',
        data: {
            labels: [@foreach ($revenueMois as $item) getMoisById(parseInt(`{{Carbon\Carbon::parse($item->mois_concerne)->format('m')}}`)), @endforeach],
            datasets: [{
                data: [ @foreach ($revenueMois as $item) {{ $item->total_mois }}, @endforeach ],
                label: "Montant (Dhs) ",
                borderColor: "#3e95cd",
                fill: true
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: ''
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

</script>
@endsection
