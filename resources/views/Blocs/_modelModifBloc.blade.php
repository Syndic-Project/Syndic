@foreach ($blocs as $bloc)
    <div class="modal fade" id="modalModifBloc-{{$bloc->id}}" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel-{{$bloc->id}}" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mySmallModalLabel-{{$bloc->id}}">
                        Modification
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('Modif-Bloc', $bloc->id) }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="nomBloc">Nom du Bloc :</label>
                                <input type="text" name="nomBloc" class="form-control input-lg" value="{{$bloc->nom_bloc}}" required>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <span class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-soft-primary pull-right">
                                    Confirmer
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
