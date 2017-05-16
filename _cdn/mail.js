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

                $('#titulo-modal').html('E-mail enviado com Sucesso!');
                $('#retorno-email').html('<strong>' + retorno + '</strong> <br>' +
                        'Entraremos em contato com você o mais rápido possível.<br>' +
                        'Fique a vontade para continuar explorando nosso Site!');
                $("#modal").modal();
            },
            error: function (retorno) {
                $("#modal button").removeAttr('disabled');
                $("#modal button").removeClass('disabled');
                $('#retorno-email').text('Email enviado com sucesso!!!' + retorno);
                $("#modal").modal();
            }
        });
        $("#modal button").addClass('disabled');
        return false;
    });
});