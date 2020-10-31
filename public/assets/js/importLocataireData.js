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
    locataire.email_verified_at !== null ?
        $("#confirmationEmail").html(
            '<img src="https://img.icons8.com/color/48/000000/id-verified.png" style="height: 35px;">'
        ) :
        $("#confirmationEmail").html(
            '<img src="https://img.icons8.com/color/48/000000/id-not-verified.png" style="height: 35px;">'
        );
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
            var appartements = JSON.parse(appartementsData);
            for (let i = 0; i < appartements.length; i++)
                $("#appartementLocataire").append(`
                    <option value="${appartements[i].id}" data-montant="${appartements[i].montant_cotisation_mensuelle}">${appartements[i].nom}</option>
                `);
        },
    });
}

function reInitAll(initCin) {
    initCin ? $("#cinLocataire").val('') : $("#nomPrenomLocataire").val('');
    $("#confirmationEmail").html('<img style="height: 35px;">');
}
