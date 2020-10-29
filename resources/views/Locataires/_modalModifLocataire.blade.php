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
                <form class="needs-validation" action="{{route('Locataire.edit',[$locataire]) }}" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="container">
                            <br />
                            <div class="row justify-content-start">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Nom</label>
                                        <input type="text" class="form-control" id="name" name="nom" value="{{$locataire->nom}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="first_name">Prénom</label>
                                        <input type="text" class="form-control" id="first_name" name="prenom" value="{{$locataire->prenom}}" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cin">CIN</label>
                                        <input type="text" class="form-control" id="cin" name="cin" value="{{$locataire->CIN}}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"  value="{{$locataire->email}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Téléphone</label>
                                        <input type="text" class="form-control" id="phone" name="tel" value="{{$locataire->Tel}}"  />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pass">Mot de Passe</label>
                                        <input style="font-style: oblique;" type="text" class="form-control" id="pass"
                                            name="mdp" value="************" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="passConfirm">Confirmez le Mot de Passe</label>
                                        <input style="font-style: oblique;" type="text" class="form-control"
                                            id="passConfirm" name="mdpConfirm"  value="************"/>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-1 font-weight-bold text-muted">Les locaux affectés</p>
                                            <div class="form-group">
                                                <select id="liste1" class="form-control" name="non_affecter[]" multiple="">
                                                    @foreach($appartements as $app )
                                                    <option class="items" value="{{$app->id}}">{{$app->nom}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="selected">
                                            <div class="form-group">
                                                <p class="mb-1 font-weight-bold text-muted mt-3 mt-md-0">Les locaux
                                                    affectés</p>
                                                <div class="form-group">
                                                    <select id="liste2" class="form-control" name="Affecter[]" multiple="">
                                                        <option class="items" value=""></option>
                                                    </select>
                                                </div>
                                            </div>
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
