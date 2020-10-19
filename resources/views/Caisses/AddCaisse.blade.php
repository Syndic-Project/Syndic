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
                    <!-- <button>test</button> -->
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
                                            <img style="height: 35px;">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <select class="custom-select" name="appartementLocataire" id="appartementLocataire">
                                    <option value disabled selected>Appartement (s)</option>
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
                <p>
                    Confirmez que Mr/Mme {Nom-Prénom} a payé la somme de cotisation : {prix} Dhs pour le mois de
                    {mois_concerné} , pour son appartement {identifiant/nom appartement} dont le numéro de la porte est
                    {num_porte}.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-success">Confirmer</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $("#cinLocataire").keyup(function () {
        $.ajax({
            url: "{{ route('getLocataireByCin') }}",
            type: "POST",
            data: {
                cin: $(this).val()
            },
            success: function (locataireData) {
                if (locataireData == 'not_found')
                    reInitAll(false);
                else {
                    var locataire = JSON.parse(locataireData);
                    $("#nomPrenomLocataire").val(locataire.nom + ' ' + locataire.prenom);
                    locataireFounded(locataire);
                }
            },
        })
    });

    $("#nomPrenomLocataire").keyup(function () {
        $.ajax({
            url: "{{ route('getLocataireByNomPrenom') }}",
            type: "POST",
            data: {
                nom: $(this).val().split(' ')[0],
                prenom: $(this).val().split(' ')[1],
            },
            success: function (locataireData) {
                if (locataireData == 'not_found')
                    reInitAll(true);
                else {
                    var locataire = JSON.parse(locataireData);
                    $("#cinLocataire").val(locataire.CIN);
                    locataireFounded(locataire);
                }
            },
        });
    });

    function locataireFounded(locataire) {
        // console.log(locataire);
        locataire.email_verified_at !== null ?
            $("#confirmationEmail").html(
                '<img src="https://img.icons8.com/color/48/000000/id-verified.png" style="height: 35px;">'
            ) :
            $("#confirmationEmail").html(
                '<img src="https://img.icons8.com/color/48/000000/id-not-verified.png" style="height: 35px;">'
            );
        $.ajax({
            url: "{{ route('getAppartementsDuLocataire') }}",
            type: "POST",
            data: {
                id_locataire: locataire.id
            },
            success: function (appartementsData) {
                var appartements = JSON.parse(appartementsData);
                console.log(appartements[0]);
                for (let i = 0; i < appartements.length; i++)
                    $("#appartementLocataire").append(`
                        <option value="${appartements[i].id}">${appartements[i].nom}</option>
                    `);
            },
        });
    }

    function reInitAll(initCin) {
        initCin ? $("#cinLocataire").val('') : $("#nomPrenomLocataire").val('');
        $("#confirmationEmail").html('<img style="height: 35px;">');
    }

</script>
<!-- <script>
    $('#modalPaiement').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script> -->
<!-- Validation init js-->
<!-- <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/addlocataire.js') }}"></script>
<script src="{{ URL::asset('assets/js/AddAppartement.js') }}"></script> -->
@endsection
