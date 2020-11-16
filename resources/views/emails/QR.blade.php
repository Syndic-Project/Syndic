@component('mail::message')
    # Bienvenue!

    Nous vous remercions d'avoir choisi Syndik pour gérer votre/vos résidences.
    Veuillez trouver ci-dessous votre login et mot de passe que nous vous conseillons de garder en sécurité.
    N'oubliez pas de nous contacter via l'adresse suivante contact@syndic.com pour toute suggéstion ou amélioration à
    ajouter dans syndik.ma Nous vous répondrons c'est sûr ;)

    {{--
    @foreach ($locateurs as $loc)

        <button class="delete btn btn-success btn-sm" type="submit" data-toggle="modal" data-target="#modalQr"
            data-id-locateur="{{ $loc->id }}">
            <i class="fas fa-print"></i>
            Afficher
        </button>

    @endforeach
    @section('script')
    <script>
        $('#modalQr').on('show.bs.modal', function(event) {
            var sender = $(event.relatedTarget);
            var modal = $(this);
            $.ajax({
                url: "/getQrCode/" + sender.data("id-locateur"),
                type: "POST",
                success: function(responseData) {
                    modal.find("#divQrCode").html(responseData);
                }
            });
        })

    </script>
    @endsection --}}
@endcomponent
