<div id="modalAjoutLocateur" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalAjoutLocateurLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAjoutLocateurLabel">Ajouter un Locateur.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('Locateur.store') }}" method="POST" id="formAjoutLocateur">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <!-- <h5 class="font-size-16 mb-1 mt-0">Ajouter un Locateur.</h5>  -->
                            <!-- <p class="sub-header">

                            </p> -->
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="nom">Nom :</label>
                                        <input type="text" required="" name="nom" id="nom" class="form-control " />
                                    </div>

                                    <div class="form-group">
                                        <label for="nom">Télephone :</label>
                                        <input type="text" required="" name="Tel" id="Tel" class="form-control " />
                                    </div>


                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="prenom">Prenom :</label>
                                        <input type="text" required="" name="prenom" id="prenom"
                                            class="form-control " />
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email :</label>
                                        <input type="email" required="" name="email" id="email" class="form-control " />
                                    </div>

                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cin">CIN :</label>
                                        <input type="text" required="" name="cin" id="cin" class="form-control " />
                                    </div>


                                    <div class="form-group">
                                        <label for="nbr">Nbr d'invite :</label>
                                        <input type="number" required="" name="nbr" id="nbr" class="form-control " />
                                    </div>


                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dated">Date Debut :</label>
                                        <input type="date" required="" name="dated" id="dated" class="form-control " />
                                    </div>


                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="datef">Date Fin :</label>
                                        <input type="date" required="" name="datef" id="datef" class="form-control " />
                                    </div>


                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="id_app">Appartement :</label>

                                        <select name="id_appartement" id="id_app" class="form-control" required>
                                            <option value disabled selected>-Selectionnez-</option>
                                            @foreach($appartements as $app)
                                            <option value="{{$app->id}}">{{$app->nom}}</option>
                                            @endforeach
                                        </select>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="qrcode" class="d-none" name="qrcode" style="text-align: center;">

                    </div>
                </div>
                <div class="modal-footer">
                    <div id="chargementDiv">
                        <button type="button" id="ajouterBtn" name="ajouterBtn" class="btn btn-block btn-purple"><i
                                class="fa fa-plus"></i>
                            Ajouter
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
