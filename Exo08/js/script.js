$(document).ready(function () {

    $('#showTextLink').click(function () {

        $.get("http://localhost/formationNantes/Exo07/", function (result) {
            $('#texte').html(result);
        });
        
    });

});