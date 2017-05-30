<!--MODAL-->
<div class="container">
    <div class="modal fade" tabindex="-1" role="dialog" id="modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close disabled" disabled="disabled" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span id="titulo-modal" class="h3 text-center modal-title">Enviando seu E-mail...</span>
                </div>
                <div class="modal-body modal-retorno-email">
                    <p id="retorno-email" class="h4 text-center">
                        <img src="<?= INCLUDE_PATH; ?>/img/loading.gif">
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger disabled" disabled="disabled" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MODAL-->