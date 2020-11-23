@extends('Layouts/appLayout')

@section('style')
    <link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('content')
    <div class="content-page">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-0">
                            <h5 class="col-8 font-size-16 mb-3">Liste des Locateurs.</h5>
                            <div class="col-4">
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-outline-success btn-lg" style="font-weight: bolder;"
                                        data-toggle="modal" data-target="#modalAjoutLocateur">
                                        <i class="fas fa-plus-square"></i>
                                        Nouveau Locateur
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="mybox" id="box_locateur">
                                    <table id="Locateur-datatable" class="table table-hover table-condensed display">
                                        <thead>
                                            <tr>

                                                {{-- <th class="text-center">ID</th>
                                                --}}
                                                <th class="text-center">Nom</th>
                                                <th class="text-center">Prenom</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Appartement</th>
                                                <th class="text-center">Qr code</th>
                                                <th class="text-center">Valider le Logement</th>


                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($locateurs as $loc)
                                                <tr>
                                                    {{-- <td class="text-center">
                                                        {{ $loc->id }}</td> --}}
                                                    <td class="text-center">{{ $loc->nom }}</td>
                                                    <td class="text-center">{{ $loc->prenom }}</td>
                                                    <td class="text-center">{{ $loc->email }}</td>
                                                    <td class="text-center">{{ $loc->email }}</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                            data-target="#modalAfficherQr"
                                                            data-id-locateur="{{ $loc->locId }}">
                                                            <i class="fas fa-qrcode"></i>
                                                            Afficher
                                                        </button>
                                                    </td>
                                                    <td class="text-center">

                                                        <a href="/QR/{{ $loc->locId }}" id=""
                                                            class="delete btn btn-danger btn-sm">
                                                            <i class="fas fa-clipboard-check"></i>
                                                            Envoyer Le Qr code au Locateur
                                                        </a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('Client.modalQrcode')
                @include('Client._modalAjoutLocateur')

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    <script src="{{ url('assets/js/addlocataire.js') }}"></script>
    <script src="{{ url('assets/js/notify.min.js') }}"></script>
    <script src="{{ url('assets/js/qrCode.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" type="text/javascript"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="{{ url('assets/js/printThis.js') }}"></script>
    <script>
        let j = jQuery.noConflict(true);
        $("#printBtn").click(function() {
            j("#ContainerQrCode").printThis({
                header: `<h3 style="font-family: 'Comic Sans MS', cursive, sans-serif;text-align: center;">Résidence -{{ $residenceNom }}-</h3>`
            });
        });

    </script>
    <script>
        $("#Locateur-datatable").DataTable({
            responsive: true,
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 lignes', '25 lignes', '50 lignes', 'afficher tous']
            ],

            "language": {
                buttons: {
                    pageLength: {
                        _: "Afficher %d éléments",
                        '-1': "Tout afficher"
                    }
                },
                paginate: {
                    previous: "<i class='uil uil-angle-left'>",
                    next: "<i class='uil uil-angle-right'>"
                },
                "lengthMenu": "Afficher _MENU_ par Pages",
                "zeroRecords": "Aucune données disponibles ...",
                "info": "Total : _TOTAL_ Locataires",
                "infoEmpty": "Pas de données disponibles ...",
                "infoFiltered": "(filtré depuis _MAX_ lignes)",
                "sSearch": "Rechercher"
            },
            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
        });

    </script>
    <script>
        $('#modalAfficherQr').on('show.bs.modal', function(event) {
            var sender = $(event.relatedTarget);
            var modal = $(this);
            $.ajax({
                url: "/getQrCode/" + sender.data("id-locateur"),
                type: "POST",
                success: function(QrCode) {
                    var pathQrCode = "{{ url('storage/') }}/" + QrCode;
                    modal.find("#divQrCode").html(`<img src="${pathQrCode}" alt="erreur" />`);
                }
            });
        })

    </script>
    <script>
        "use strict";
        $.validator.messages.required = '<small>Champs Obligatoir !</small>';
        $.validator.messages.email = '<small>Email invalid !</small>';

        function submitForm() {
            var nom = $("#nom").val();
            var prenom = $("#prenom").val();
            var nbrCompagnon = $("#nbr").val();
            var id_appartement = $("#id_app").val();
            var appartement = $("#id_app").text();
            var dateDebut = $("#dated").val();
            var dateFin = $("#datef").val();
            var cin = $("#cin").val();
            var telephone = $("#Tel").val();
            var email = $("#email").val();

            $.post("{{ route('Locateur.store') }}", {
                nom: nom,
                prenom: prenom,
                nbrCompagnon: nbrCompagnon,
                id_appartement: id_appartement,
                dateDebut: dateDebut,
                dateFin: dateFin,
                cin: cin,
                telephone: telephone,
                email: email,
                codeQr: function() {
                    var nomComplet = nom + ' ' + prenom;
                    $('#qrcode').empty().qrcode({
                        width: 200,
                        height: 200,
                        text: `Le locateur ${nomComplet}, dont le cin est [${cin}] (accompagné de ses ${nbrCompagnon} compagnons) a effectivement loué l'appartement : ${appartement} entre 
                            le ${dateDebut} 
                            jusqu'à
                            le ${dateFin}`
                    });
                    return $('#qrcode').children().get(0).toDataURL();
                },
            }).done(function() {
                $("#modalAjoutLocateurLabel").notify("Ajouté avec succées", "success");
            });
        }

        $('#ajouterBtn').click(function() {
            var valid = $("#formAjoutLocateur").validate().form();
            if (valid) {
                $("#chargementDiv").html(`
            <button class="btn btn-primary" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                En cours ...
            </button>
            `);
                submitForm();
                setTimeout(() => {
                    location.reload();
                }, 3000);
            }
        });

    </script>

@endsection
