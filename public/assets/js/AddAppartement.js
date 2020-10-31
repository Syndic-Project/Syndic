$(document).change(function () {
    $('.nomimmeuble').html($("#immeuble").find("option:selected").text());
});
