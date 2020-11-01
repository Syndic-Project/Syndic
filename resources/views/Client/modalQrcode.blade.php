{{-- @foreach($locateurs as $loc) --}}
<div id="modalAfficherQr" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalAfficherQrLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAfficherQrLabel">QR Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="GET">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <div id="divQrCode" style="width: 200px">
                                    {{-- {{\App\Http\Controllers\LocateurController::genrateQR($loc->id)}} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-md btn-block mt-4">
                        Imprimer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- @endforeach --}}
