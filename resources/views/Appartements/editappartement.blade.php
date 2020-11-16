@foreach ($appartements as $app)
    <div id="modalupdate{{ $app->id }}" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="modalupdate{{ $app->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalupdate{{ $app->id }}">Modifier l'Appartement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('Appartements.update', $app->id) }}">
                    <div class="modal-body">
                        @csrf
                        @method('PUT')
                        <div class="row mrgb10">
                            <div class="col-md-12">
                                <select name="immeuble" id="immeuble" required="" class="form-control ">

                                    @foreach ($immeubles as $imb)

                                        <option value="{{ $imb->id }}" selected="">{{ $imb->Nom_Immeuble }}
                                        </option>
                                    @endforeach


                                </select>
                                <ul class="parsley-errors-list" id="parsley-id-2295"></ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="type">Type du bien</label>
                                    <select name="type" id="type" class="form-control" required="">
                                        <option value="Appartement">Appartement</option>
                                        <option value="Bureau">Bureau</option>
                                        <option value="Local commercial">Local commercial</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="porte">N° de porte</label>
                                    <input type="text" required="" name="porte" id="porte" class="form-control "
                                        placeholder="N° de porte" value="{{ $app->Num_Porte }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nbr">Chambre Max</label>
                                    <input type="number" required="" name="nbr" min=0 id="nbr" class="form-control "
                                        placeholder="Nbr Max chambre" value="{{ $app->Nbr_Max_chambre }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
