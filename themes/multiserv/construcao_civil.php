<!--CONSTRUÇÃO CIVIL-->
<div class="container-fluid div-btn-construcao" align="center">
    <button type="button" class="btn btn-construcao" onclick="sectionConstrucaoAtual(1)">
        <img src="<?= INCLUDE_PATH; ?>/img/limpeza-caixa-dagua.png" alt="Limpeza em caixa dágua" class="img-responsive">
    </button>
    <button type="button" class="btn btn-construcao" onclick="sectionConstrucaoAtual(2)">
        <img src="<?= INCLUDE_PATH; ?>/img/corte-arvores.png" alt="Corte de árvores" class="img-responsive">
    </button>
    <button type="button" class="btn btn-construcao" onclick="sectionConstrucaoAtual(3)">
        <img src="<?= INCLUDE_PATH; ?>/img/pintura.png" alt="Pinturas" class="img-responsive">
    </button>
    <button type="button" class="btn btn-construcao" onclick="sectionConstrucaoAtual(4)">
        <img src="<?= INCLUDE_PATH; ?>/img/trabalho-altura.png" alt="Serviçoes em alturas" class="img-responsive">
    </button>
    <button type="button" class="btn btn-construcao" onclick="sectionConstrucaoAtual(5)">
        <img src="<?= INCLUDE_PATH; ?>/img/instalacoes-eletricas.png" alt="Instalações elétricas" class="img-responsive">
    </button>
</div>
<?php require REQUIRE_PATH . '/inc/construcao-item.php'; ?>
<!--CONSTRUÇÃO CIVIL-->
