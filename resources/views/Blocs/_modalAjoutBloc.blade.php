<div class="modal fade" id="modalAjoutBloc" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel">
                    Affectation
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('Ajout-Bloc') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-end">
                                    <button id="btnAddBloc" type="button" class="btn btn-sm btn-primary">
                                        <i class="far fa-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="BlocsContainer">
                            <div class="bloc-row row mt-2">
                                <div class="mt-1 col-1">
                                    <i class="far fa-trash-alt" title="Supprimer la ligne" style="cursor: pointer;"
                                        onclick="this.parentNode.parentNode.remove();verifyChilds();"></i>
                                </div>
                                <div class="col-11">
                                    <div class="input-group input-group-sm mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Bloc</div>
                                        </div>
                                        <input type="text" class="form-control form-control-sm" name="blocs[]"
                                            placeholder="Nom-du-Bloc" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="residenceID" value="{{ $residence->id }}">
                    </div>
                    <div class="col-md-12 mt-2">
                        <span class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-soft-primary pull-right" id="submitBtn">
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
<script>
    function verifyChilds() {
        document.getElementById('submitBtn').disabled = (document.getElementsByClassName('bloc-row').length == 0);
    }
    document.getElementById('btnAddBloc').addEventListener("click",
        function () {
            document.getElementById('BlocsContainer').insertAdjacentHTML('beforeend', `
                            <div class="bloc-row row mt-2">
                                <div class="mt-1 col-1">
                                    <i class="far fa-trash-alt" title="Supprimer la ligne" style="cursor: pointer;"
                                        onclick="this.parentNode.parentNode.remove();verifyChilds()"></i>
                                </div>
                                <div class="col-11">
                                    <div class="input-group input-group-sm mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Bloc</div>
                                        </div>
                                        <input type="text" class="form-control form-control-sm" name="blocs[]"
                                            placeholder="Nom-du-Bloc" required>
                                    </div>
                                </div>
                            </div>
                    `);
            verifyChilds();
        });

</script>
