@foreach($residence as $res)
    <div id="modalModifResidence{{$res->id}}" class="modal fade" tabindex="-1" role="dialog"
         aria-labelledby="modalModifResidence{{$res->id}}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalModifResidence{{$res->id}}">Nouveau Locataire</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{route('residence.update',$res->id) }}" >
                    <div class="modal-body">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <br />
                            <div class="row mybox">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @csrf
                                        <label for="nom">NOM de Résidence</label>
                                        <input type="text" name="nom" id="nom" class="form-control input-lg" required=""
                                              value="{{$res->nom_residence}}">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ville">VILLE ou se trouve cet immeuble</label>

                                                <select name="ville" id="ville" class="form-control input-lg">
                                                    <option value="">la ville où se trouve La Résidence</option>


                                                        <option value="{{$res->id_ville}}">{{$res->nom_ville}}</option>


                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="syndic">Syndic</label>

                                                <select name="syndic" id="syndic" class="form-control input-lg">

                                                    @foreach ($syndics as $syndic )
                                                        <option value="{{$syndic->id}}">{{$syndic->nom}}</option>
                                                    @endforeach


                                                    <option value="8">new</option>


                                                </select>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="form-group">
                                        <label for="adresse">ADRESSE</label>
                                        <textarea name="adresse" id="adresse" class="form-control input-lg" rows="2"
                                                value="{{$res->adresse}}"></textarea>
                                    </div>


                                    <div class="row">



                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nom_bloc">Nom du Bloc</label>
                                                <input type="text" name="nom_bloc" id="nom_bloc" class="form-control input-lg"
                                                value="{{$res->nom_bloc}}"/>
                                            </div>

                                        </div>

                                    </div>


                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">ENREGISTRER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
