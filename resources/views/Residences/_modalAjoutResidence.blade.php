<div id="modalAjoutResidence" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalAjoutResidenceLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAjoutResidenceLabel">Nouvelle Residence</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('residences.store') }}" method="post" accept-charset="utf-8">
                    @csrf
                    <div class="row mybox">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nom">Libellé de la Résidence :</label>
                                <input type="text" name="nom" id="nom" class="form-control input-lg" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ville">Ville :</label>
                                        <select name="ville" id="ville" class="form-control input-lg" required>
                                            <option value="" disabled selected>-Sélectionner-</option>
                                            @foreach ($villes as $ville )
                                            <option value="{{$ville->id}}">{{$ville->nom_ville}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="syndic">Syndic :</label>
                                        <input type="text" id="syndic" class="form-control input-lg"
                                            value="{{ AuthentificationController::getCurrentUser()->nom . ' '.  AuthentificationController::getCurrentUser()->prenom }}"
                                            disabled>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="adresse">Adresse :</label>
                                <textarea name="adresse" id="adresse" class="form-control input-lg" rows="2"
                                    required></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <span class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-soft-success pull-right">
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
</div>
