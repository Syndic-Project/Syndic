"use strict";

$("#cinLocataire").keyup(function () {
    $.ajax({
        url: "/getLocataireByCin",
        type: "POST",
        data: {
            cin: $(this).val()
        },
        success: function (locataireData) {
            if (locataireData == 'not_found')
                reInitAll(false);
            else {
                var locataire = JSON.parse(locataireData);
                $("#nomPrenomLocataire").val(locataire.nom + ' ' + locataire.prenom);
                locataireFounded(locataire);
            }
        },
    })
});

$("#nomPrenomLocataire").keyup(function () {
    $.ajax({
        url: "/getLocataireByNomPrenom",
        type: "POST",
        data: {
            nom: $(this).val().split(' ')[0],
            prenom: $(this).val().split(' ')[1],
        },
        success: function (locataireData) {
            if (locataireData == 'not_found')
                reInitAll(true);
            else {
                var locataire = JSON.parse(locataireData);
                $("#cinLocataire").val(locataire.CIN);
                locataireFounded(locataire);
            }
        },
    });
});

function locataireFounded(locataire) {
    $("#locataireHidden").val(locataire.id);
    $.ajax({
        url: "/getAppartementsDuLocataire",
        type: "POST",
        data: {
            id_locataire: locataire.id
        },
        success: function (appartementsData) {
            $("#appartementLocataire").empty();
            $("#appartementLocataire").append('<option value disabled selected>Appartement (s)</option>');
            if (appartementsData != 'not_found') {
                var appartements = JSON.parse(appartementsData);
                for (let i = 0; i < appartements.length; i++)
                    $("#appartementLocataire").append(`
                    <option value="${appartements[i].id}" data-montant="${appartements[i].montant_cotisation_mensuelle}" selected> ${appartements[i].nom} </option>
                `);
                $('#appartementLocataire').change()
            }
        },
    });
}

function reInitAll(initCin) {
    initCin ? $("#cinLocataire").val('') : $("#nomPrenomLocataire").val('');
    $('#appartementLocataire').html('<option value disabled selected>Appartement (s)</option>');
    $("#tbodyPaiements").empty();
}
