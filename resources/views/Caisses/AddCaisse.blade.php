@extends('Layouts/appLayout')

@section('style')
<link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css" />
<style>
    table td,
    table th {
        text-align: center;
    }

</style>
@endsection

@section('content')

<div class="content-page">
    <!-- <form action="{{route('Caisse.store') }}" method="POST"> -->
    @csrf
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h5 class="font-size-16 mb-1 mt-0">Fiche des paiements.</h5>
                        <p class="sub-header">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos maxime,
                            voluptatibus laudantium assumenda praesentium nam.
                        </p>
                        <div class="row">
                            <div class="col-3">
                                <label class="sr-only" for="cinLocataire">F0000</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">CIN</div>
                                    </div>
                                    <input type="text" class="form-control" id="cinLocataire" name="cinLocataire"
                                        placeholder="F0000">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nomPrenomLocataire"
                                        name="nomPrenomLocataire" placeholder="Nom & Prénom du Locataire">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-inline">
                                    <div class="form-group mb-2">
                                        Confirmation d'email :
                                        <span id="confirmationEmail">

                                            <img src="https://img.icons8.com/color/48/000000/id-not-verified.png"
                                                style="width: 35px;" />
                                            -
                                            <img src="https://img.icons8.com/color/48/000000/id-verified.png"
                                                style="width: 35px;" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <select class="custom-select" name="appartementLocataire" id="appartementLocataire">
                                    <option value disabled selected>Appartement (s)</option>
                                    <option value="1">Appartement 1</option>
                                    <option value="2">Appartement 2</option>
                                    <option value="3">Appartement 3</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Janvier</th>
                                                <th scope="col">Février</th>
                                                <th scope="col">Mars</th>
                                                <th scope="col">Avril</th>
                                                <th scope="col">Mai</th>
                                                <th scope="col">Juin</th>
                                                <th scope="col">Juillet</th>
                                                <th scope="col">Ao&ucirc;t</th>
                                                <th scope="col">Septembre</th>
                                                <th scope="col">Octobre</th>
                                                <th scope="col">Novembre</th>
                                                <th scope="col">Décembre</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">2018</th>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2019</th>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2020</th>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-account.png"
                                                        style="width: 20px;cursor:pointer;" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/cancel--v1.png"
                                                        style="width: 20px;cursor:pointer;" data-toggle="modal"
                                                        data-target="#modalPaiement" />
                                                </td>
                                                <td class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/cancel--v1.png"
                                                        style="width: 20px;cursor:pointer;" data-toggle="modal"
                                                        data-target="#modalPaiement" />
                                                </td>
                                            </tr>
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
    <!-- </form> -->
</div>

<div id="modalPaiement" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalPaiementLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPaiementLabel">Paiement de : {Mois} {Année} </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Lorem, ipsum dolor.</h6>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                <hr>
                <h6>Overflowing text to show scroll behavior</h6>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-success">Confirmer</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

@endsection

@section('script-bottom')
<!-- Validation init js-->
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>

@endsection
@section('script')
<script src="{{ URL::asset('assets/js/addlocataire.js') }}"></script>
@endsection
@section('script')
<script src="{{ URL::asset('assets/js/AddAppartement.js') }}"></script>
@endsection
