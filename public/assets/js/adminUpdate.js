$(document).ready(function() {

    $("#envoyer").find(this).click(function() {

        $.ajax({
            url: 'send_mail.php', // Le nom du script a changé, c'est send_mail.php maintenant !
            type: 'POST', // Le type de la requête HTTP, ici devenu POST
            dataType: 'html'
        });

    });

});