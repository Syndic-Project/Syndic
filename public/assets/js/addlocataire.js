$(document).ready(function () {
    $(".items").click(function () {

        var curentlist = $(this).parent().attr('id');

        if (curentlist == "liste1") {

            $(this).detach().appendTo($("#liste2"));


        }
        if (curentlist == "liste2") {

            $(this).detach().appendTo($("#liste1"));


        }
    });


});
