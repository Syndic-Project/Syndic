@foreach ($locataires as $locataire)
<div id="modalModifLocataire{{$locataire->id}}" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="modalModifLocataire{{$locataire->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalModifLocataire{{$locataire->id}}">Nouveau Locataire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('Locataire.update',$locataire->id) }}">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <br />
                        <div class="row justify-content-start">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nomModif">Nom</label>
                                    <input type="text" required class="form-control" id="nomModif{{$locataire->id}}" name="nomModif"
                                        value="{{$locataire->nom}}" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="prenomModif">Prénom</label>
                                    <input type="text" required class="form-control" id="prenomModif{{$locataire->id}}" name="prenomModif"
                                        value="{{$locataire->prenom}}" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cinModif">CIN</label>
                                    <input type="text" required class="form-control" id="cinModif{{$locataire->id}}" name="cinModif"
                                        value="{{$locataire->CIN}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailModif">Email</label>
                                    <input type="email" required class="form-control" id="emailModif{{$locataire->id}}" name="emailModif"
                                        value="{{$locataire->email}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telModif">Téléphone</label>
                                    <input type="text" required class="form-control" id="telModif{{$locataire->id}}" name="telModif"
                                        value="{{$locataire->Tel}}" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mdpModif">Mot de Passe</label>
                                    <input style="font-style: oblique;" type="text" class="form-control" id="mdpModif{{$locataire->id}}"
                                        name="mdpModif" value="************" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mdpConfirmModif">Confirmez le Mot de Passe</label>
                                    <input style="font-style: oblique;" type="text" class="form-control"
                                        id="mdpConfirmModif{{$locataire->id}}" name="mdpConfirmModif" value="************" />
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-center">
                                            <div class="autocomplete">
                                                <div class="form-group">
                                                    <label for="appartementsAutocompleteModif{{$locataire->id}}">Appartement (s)</label>
                                                    <input id="appartementsAutocompleteModif{{$locataire->id}}" type="text"
                                                        placeholder="B05-i01-a18"
                                                        class="form-control form-control-sm" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2" id="badgeContainerModif{{$locataire->id}}" >


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Confirmer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
