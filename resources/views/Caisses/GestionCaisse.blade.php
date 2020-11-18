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
                        <h5 class="font-size-16 mb-1 mt-0">Fiche des paiements. </h5>
                        <p class="sub-header">
                        </p>
                        <div class="row">
                            <div class="rechercheUser col-3">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">CIN</div>
                                    </div>
                                    <input type="text" class="form-control" id="cinLocataire" name="cinLocataire"
                                        placeholder="F0000">
                                </div>
                            </div>
                            <div class="rechercheUser col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nomPrenomLocataire"
                                        name="nomPrenomLocataire" placeholder="Nom & Prénom du Locataire">
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
@if (AuthentificationController::getCurrentUser()->getTable() == 'syndics')
    @include("Caisses._modalPaiement")
@endif

@endsection
@section('script')
<script src="{{ url('assets/js/utilDate.js') }}"></script>
<script src="{{ url('assets/js/importLocataireData.js') }}"></script>
<script src="{{ url('assets/js/gestionPaiement.js') }}"></script>

@if (AuthentificationController::getCurrentUser()->getTable() != 'syndics')
<style>
    .icnPaiement {
        cursor:unset !important;
    }
</style>
@endif
<script>
    $('#modalPaiement').on('show.bs.modal', function (event) {
        var sender = $(event.relatedTarget);
        var modal = $(this);
        modal.find('#moisSpan').text(getMoisById(sender.data('mois')));
        modal.find('#moisConcerneSpan').text(getMoisById(sender.data('mois')));
        modal.find('#appartementSpan').text($("#appartementLocataire option:selected").text());
        modal.find('#anneeSpan').text(sender.data('annee'));
        modal.find('#montantSpan').text(sender.data('montant'));
        modal.find('#identiteSpan').text($("#nomPrenomLocataire").val());
        modal.find('#caisseHidden').val(sender.data('caisse'));
    })

</script>
<script>
        if({{AuthentificationController::getCurrentUser()->getTable() != 'syndics'}})
        {
            $('.rechercheUser').addClass('d-none');
            $('#cinLocataire').val('{{AuthentificationController::getCurrentUser()->CIN}}');
            $('#cinLocataire').keyup();
        }
</script>
@endsection
