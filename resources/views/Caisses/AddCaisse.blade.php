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
                            <div class="col-12 mt-3">
                                <div class="table-responsive">
                                    <table class="table table-hover">
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
                                        <tbody id="tbodyPaiements">

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

<div id="modalPaiement" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalPaiementLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPaiementLabel">
                    Paiement du
                    Mois :
                    <span id="moisSpan" style="text-decoration: underline;color: mediumseagreen;">{Mois}</span> ,
                    Année :
                    <span id="anneeSpan" style="text-decoration: underline;color: mediumseagreen;">{Année}</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Confirmez que Mr/Mme
                    <span id="identiteSpan" style="text-decoration: underline;">{Nom-Prénom}</span>
                    a bel et bien payé la somme de cotisation :
                    <span id="montantSpan">{prix}</span>
                    Dhs pour le mois de
                    <span id="moisConcerneSpan">{mois_concerné}</span>,
                    pour son appartement
                    <span id="appartementSpan">{identifiant/nom appartement}</span>
                    dont le numéro de la porte est
                    <span id="porteSpan">{num_porte}</span>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                <form action="{{route('Caisse.store')}}" method="post">
                    @csrf
                    <!-- <input type="hidden" name="montantHidden" id="montantHidden">
                    <input type="hidden" name="locataireHidden" id="locataireHidden">
                    <input type="hidden" name="appartementHidden" id="appartementHidden"> -->
                    <input type="hidden" name="caisseHidden" id="caisseHidden">
                    <button type="submit" class="btn btn-success">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script>
    $(document).ready(function () {
        console.clear();
    });

</script>
<script src="{{ url('assets/js/utilDate.js') }}"></script>
<script src="{{ url('assets/js/importLocataireData.js') }}"></script>
<script>
    $("#appartementLocataire").change(function () {
        // $("#montantHidden").val($(this).children("option:selected").data('montant'));
        $("#appartementHidden").val($(this).val());
        $.ajax({
            url: '/getCaisseByAppartement',
            method: 'POST',
            data: {
                id_appartement: $(this).val()
            },
            success: function (CaisseData) {
                organisationTableau(JSON.parse(CaisseData));
            }
        });
    });

    function organisationTableau(Caisse) {
        $("#tbodyPaiements").empty();
        fillYears(Caisse);
        fillEmptyMonth(new Date(Caisse[0].mois_concerne).getMonth() + 1);
        // console.log(Caisse);
        for (let i = 0; i < Caisse.length; i++) {
            Caisse[i].Date_Paiment != null ?
                $(`#annee-${new Date(Caisse[i].mois_concerne).getFullYear()}`)
                .append(`
                        <td class="text-center">
                            <img src="https://img.icons8.com/color/48/000000/verified-account.png" style="width: 20px;cursor:pointer;" />
                        </td>
                `) :
                $(`#annee-${new Date(Caisse[i].mois_concerne).getFullYear()}`)
                .append(`
                        <td class="text-center">
                            <img src="https://img.icons8.com/color/48/000000/cancel--v1.png" style="width: 20px;cursor:pointer;" data-toggle="modal" data-target="#modalPaiement"
                              data-mois="${new Date(Caisse[i].mois_concerne).getMonth() + 1}" data-annee="${new Date(Caisse[i].mois_concerne).getFullYear()}" data-caisse="${Caisse[i].id}"/>
                        </td>
                        `);
        }
    }
    // <span class="badge badge-soft-info">Mois actuel</span> todo : à tester pour mois actuel
    function fillYears(Caisse) {
        var year;
        for (let j = 0; j < Caisse.length; j++)
            if (new Date(Caisse[j].mois_concerne).getFullYear() != year) {
                year = new Date(Caisse[j].mois_concerne).getFullYear();
                $("#tbodyPaiements").append(`<tr id='annee-${year}' ><th scope="row">${year}</th></tr>`);
            }
    }

    function fillEmptyMonth(currentMonth) {
        for (let i = 0; i < currentMonth - 1; i++) {
            $("#tbodyPaiements").children().first()
                .append('<td>-</td>');
        }
    }

</script>

<script>
    $('#modalPaiement').on('show.bs.modal', function (event) {
        var sender = $(event.relatedTarget);
        var modal = $(this);
        modal.find('#moisSpan').text(getMoisById(sender.data('mois')));
        modal.find('#moisConcerneSpan').text(getMoisById(sender.data('mois')));
        modal.find('#appartementSpan').text($("#appartementLocataire option:selected").text());
        modal.find('#anneeSpan').text(sender.data('annee'));
        modal.find('#identiteSpan').text($("#nomPrenomLocataire").val());
        // modal.find('#montantSpan').text($("#montantHidden").val());
        modal.find('#caisseHidden').val(sender.data('caisse'));
    })

</script>
<!-- Validation init js-->
<!-- <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/addlocataire.js') }}"></script>
<script src="{{ URL::asset('assets/js/AddAppartement.js') }}"></script> -->
@endsection
