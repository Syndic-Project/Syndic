@foreach ($locataires as $locataire)
    <div id="modalSupprLocataire{{$locataire->id}}" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="modalSupprLocataireLabel{{$locataire->id}}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSupprLocataireLabel{{$locataire->id}}">Confirmation de Supression</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <br />
                        <div class="row justify-content-start">
                            <span class="col-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    Voulez vous vraiment supprimer ce locataire : <strong
                                        style="text-decoration: underline">{{ $locataire->nom . ' ' . $locataire->prenom }}</strong>
                                    (ses paiements de cotisations seront bel et bien contabilisée malgré sa supression...).
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                    <form action="{{ route('Locataire.destroy', [$locataire]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Confirmer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
