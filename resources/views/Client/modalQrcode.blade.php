@foreach($locateurs as $loc)
    <div id="modalAfficherQr{{$loc->id}}" class="modal fade" tabindex="-1" role="dialog"
         aria-labelledby="modalAfficherQrLabel"
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

                        <h1>{{\App\Http\Controllers\LocateurController::genrateQR($loc->id)}}</h1>
                        <button type="submit" class="btn btn-primary btn-md btn-block">Imprimer
                        </button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endforeach
