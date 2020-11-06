@foreach($blocs as $bloc)
<div id="modalSupprBloc-{{ $bloc->id }}" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="modalSupprBlocLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSupprBlocLabel">Confirmation de Supression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <br>
                    <div class="row justify-content-start">
                        <span class="col-12">
                            <div class="alert alert-danger fade show" role="alert">
                                <i class="fas fa-exclamation-triangle"></i>
                                Voulez vous vraiment supprimer ce Bloc :
                                <strong style="text-decoration: underline">{{ $bloc->nom_bloc }}</strong>.
                                <br>
                                Il ne contient aucun immeuble.
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                <form action="{{ route('Suppr-Bloc',$bloc) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
