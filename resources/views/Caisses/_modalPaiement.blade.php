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
                    <span id="montantSpan" style="font-weight: bold;text-decoration: underline;">{prix}</span>
                    Dhs pour le mois de
                    <span id="moisConcerneSpan" style="text-decoration: underline;">{mois_concerné}</span>,
                    pour son appartement
                    <span id="appartementSpan" style="text-decoration: underline;">{identifiant/nom appartement}</span> .
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                <form action="{{route('Caisse.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="caisseHidden" id="caisseHidden">
                    <button type="submit" class="btn btn-success">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>