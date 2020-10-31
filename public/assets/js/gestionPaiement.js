$("#appartementLocataire").change(function () {
    $("#appartementHidden").val($(this).val());
    $.ajax({
        url: '/getCaisseByAppartement',
        method: 'POST',
        data: {
            id_appartement: $(this).val()
        },
        success: function (CaisseData) {
            organisationTableau(JSON.parse(CaisseData));
        }
    });
});

function organisationTableau(Caisse) {
    $("#tbodyPaiements").empty();
    fillYears(Caisse);
    fillEmptyMonth(new Date(Caisse[0].mois_concerne).getMonth() + 1);
    for (let i = 0; i < Caisse.length; i++) {
        Caisse[i].Date_Paiment != null ?
            $(`#annee-${new Date(Caisse[i].mois_concerne).getFullYear()}`)
            .append(`
                    <td class="text-center">
                        <img src="https://img.icons8.com/color/48/000000/verified-account.png" style="width: 20px;cursor:pointer;" data-toggle="tooltip" data-placement="top" title="Montant: ${Caisse[i].montant}(Dhs), D.Paiement: ${Caisse[i].Date_Paiment}" />
                    </td>
            `) :
            (
                Caisse[i].mois_concerne.split('-')[1] != (new Date().getMonth() + 1) ?
                $(`#annee-${new Date(Caisse[i].mois_concerne).getFullYear()}`)
                .append(`
                        <td class="text-center">
                            <img src="https://img.icons8.com/color/48/000000/cancel--v1.png" style="width: 20px;cursor:pointer;" data-toggle="modal" data-target="#modalPaiement" data-montant="${Caisse[i].montant}"
                              data-mois="${new Date(Caisse[i].mois_concerne).getMonth() + 1}" data-annee="${new Date(Caisse[i].mois_concerne).getFullYear()}" data-caisse="${Caisse[i].id}"/>
                        </td>
                        `) :
                $(`#annee-${new Date(Caisse[i].mois_concerne).getFullYear()}`)
                .append(`
                        <td class="text-center">
                            <span class="badge badge-info" style="cursor:pointer;" data-toggle="modal" data-target="#modalPaiement" data-montant="${Caisse[i].montant}"
                              data-mois="${new Date(Caisse[i].mois_concerne).getMonth() + 1}" data-annee="${new Date(Caisse[i].mois_concerne).getFullYear()}" data-caisse="${Caisse[i].id}">
                              Mois Actuel
                            </span>
                        </td>
                        `)
            );
    }
}

function fillYears(Caisse) {
    var year;
    for (let j = 0; j < Caisse.length; j++)
        if (new Date(Caisse[j].mois_concerne).getFullYear() != year) {
            year = new Date(Caisse[j].mois_concerne).getFullYear();
            $("#tbodyPaiements").append(`<tr id='annee-${year}' ><th scope="row">${year}</th></tr>`);
        }
}

function fillEmptyMonth(currentMonth) {
    for (let i = 0; i < currentMonth - 1; i++) {
        $("#tbodyPaiements").children().first()
            .append('<td>-</td>');
    }
}
