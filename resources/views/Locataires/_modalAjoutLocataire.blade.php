<div id="modalAjoutLocataire" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalAjoutLocataireLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAjoutLocataireLabel">Nouveau Locataire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('Locataire.store') }}" method="post">
            <div class="modal-body">
                    @csrf
                    <div class="container">
                        <br />
                        <div class="row justify-content-start">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" required class="form-control" id="name" name="nom" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="first_name">Prénom</label>
                                    <input type="text" required class="form-control" id="first_name" name="prenom" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cin">CIN</label>
                                    <input type="text" required class="form-control" id="cin" name="cin">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Téléphone</label>
                                    <input type="text" required class="form-control" id="phone" name="tel" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pass">Mot de Passe</label>
                                    <input style="font-style: oblique;" type="text" class="form-control" id="pass" name="mdp" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="passConfirm">Confirmez le Mot de Passe</label>
                                    <input style="font-style: oblique;" type="text" class="form-control" id="passConfirm" name="mdpConfirm" required />
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-center">
                                            <div class="autocomplete w-50">
                                                <div class="form-group">
                                                    <label for="appartementsAutocomplete">Appartement (s)</label>
                                                    <input id="appartementsAutocomplete" type="text" autocomplete="off"
                                                        placeholder="bloc01-Immeuble01-appart01"
                                                        class="form-control form-control-sm" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2" id="badgeContainer">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success">Confirmer</button>
                </div>
            </form>
        </div>
    </div>
</div>