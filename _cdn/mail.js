jQuery(document).ready(function () {
    jQuery('.main_contato-form').submit(function () {
        $("#modal").modal();
        var dados = jQuery(this).serialize();
        jQuery.ajax({
            type: "POST",
            url: "./themes/multiserv/mail/enviar.php",
            data: dados,
            success: function (retorno) {
                $("#modal button").removeAttr('disabled');
                $("#modal button").removeClass('disabled');
                $("form input").val("");
                $("form textarea").val("");

                $('#titulo-modal').html('Enviando seu E-mail...');
                $('#retorno-email').html('<strong>' + retorno + '</strong> <br>');
                $("#modal").modal();
            },
            error: function (retorno) {
                $("#modal button").removeAttr('disabled');
                $("#modal button").removeClass('disabled');
                $('#retorno-email').html('Houve um erro ao enviar o e-mail! Erro:' + retorno + '<br>' +
                        'Mas não saia ainda, faça-nos uma visita em nosso endereço disponível no mapa abaixo.');
                $("#modal").modal();
            }
        });
        $("#modal button").addClass('disabled');
        return false;
    });
});