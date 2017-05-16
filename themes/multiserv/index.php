<!--1º DOBRA-->
<header class="container-fluid main_cabecalho" id="inicio">
    <h1 class="invisible"><?= $pg_title; ?></h1>
    <div id="carousel-main" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-main" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-main" data-slide-to="1"></li>
            <li data-target="#carousel-main" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?= INCLUDE_PATH; ?>/img/a.jpg" alt="..." style="width: 100%; height: 53vh">
                <div class="carousel-caption">
                    <div class="carousel-text enter-left-bounce">
                        <h1>Pragas trazem doenças</h1>
                        <p class="h3 tagline">Ratos transmitem leptospiroze e causa diarréia</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?= INCLUDE_PATH; ?>/img/b.jpg" alt="..."style="width: 100%; height: 53vh">
                <div class="carousel-caption">
                    <div class="carousel-text enter-up-bounce">
                        <h1>Aranhas estão onde menos esperamos</h1>
                        <p class="h3 tagline">Elas podem estar dentro da sua casa. Melhor não confiar.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?= INCLUDE_PATH; ?>/img/c.jpg" alt="..." style="width: 100%; height: 53vh">
                <div class="carousel-caption">
                    <div class="carousel-text enter-right-bounce">
                        <h1>Persevejos são traiçoeiros</h1>
                        <p class="h3 tagline">Para quem tem alergia, uma picada pode ser fatal</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>
<!--FIM 1º DOBRA-->
<!--2º DOBRA-->
<section class="container-fluid main_sobre">
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 dir">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h1 class="text-center main_sobre-titulo">Conheça a <strong>Multiserv</strong></h1>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 esq">
        </div>
    </div>
    <p class="tagline text-justify" style="padding: 30px;">
        Localizada na cidade de Sarandi-PR, a Multiserv é uma empresa especializada em <b>Dedetização</b> e <b>Serviços de Construção Civil</b>. Há mais de 15 anos atuando no mercado, a Multiserv possui clientes distribuidos por todo o estado do Paraná. Além de oferecer atendimento e serviços de alta qualidade, sempre busca entregar algo a mais, tendo sempre como principais características a <b>qualidade</b>, o <b>compromisso</b>, e a <b>responsabilidade</b> que seus clientes merecem.
    </p>
    <div class="row text-center main_sobre-item">
        <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 anime">
            <div class="">
                <img src="<?= INCLUDE_PATH; ?>/img/compromisso.png" alt="Compromisso" class="img-responsive">
                <h3>COMPROMISSO</h3>
                <hr>
                <p class="tagline">Estamos sempre atendendo as normas de segurança, bem como as boas práticas no controle de pragas. Mais que compromisso no trabalho executado é o que temos com nossos clientes seja uma breve ligação ou até mesmo uma importante reunião.</p>
            </div>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 anime">
            <div class="">
                <img src="<?= INCLUDE_PATH; ?>/img/responsabilidade.png" alt="Responsabilidade" class="img-responsive">
                <h3>RESPONSABILIDADE</h3>
                <hr>
                <p class="tagline">Utizamos somente produtos avalidados e autorizados pelo Ministério da Saúde. Não somente na utilização dos nossos produtos, nossa responsabilidade é para com nossos clientes, não permitindo que falhas ou erros ocorram. Nossos clientes são nossos verdadeiros fãs.</p>
            </div>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 anime">
            <div class="">
                <img src="<?= INCLUDE_PATH; ?>/img/qualidade.png" alt="Qualidade" class="img-responsive">
                <h3>QUALIDADE</h3>
                <hr>
                <p class="tagline">Aplicamos o que há de melhor e maior referência no mercado. Mais que qualidade nos produtos aplicados, temos o prazer de atender com qualidade nossos clientes e parceiros.</p>
            </div>
        </article>
    </div>
</section>
<!-- 2º DOBRA-->
<!--ENTRE EM CONTATO 3º DOBRA-->
<section class="container-fluid main_contato2" id="contato">
    <div class="row">
        <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 main_contato2-txt">
            <h1 class="text-left">Alguma Dúvida?</h1>
            <p class="tagline contato2-txt1">
                Mande um <strong>e-mail</strong> solicitando um orçamento.
                Tire suas dúvidas. Venha conversar com a gente.
            </p>
            <p class="tagline contato2-txt2">Estamos Sempre à Disposição!</p>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
            <?php require REQUIRE_PATH . '/inc/formulario-email.php'; ?>
        </div>
    </div>
</section>
<!--FIM ENTRE EM CONTATO 3º DOBRA-->

<!--SECTIONS-->
<div class="container-fluid div-btn" align="center">
    <button type="button" class="btn btn-section btn-active" onclick="sectionAtual(1)">COMÉRCIO</button>
    <button type="button" class="btn btn-section" onclick="sectionAtual(2)">INDÚSTRIA</button>
    <button type="button" class="btn btn-section" onclick="sectionAtual(3)">CLÍNICAS E HOSPITAIS</button>
    <button type="button" class="btn btn-section" onclick="sectionAtual(4)">RESIDÊNCIAS E CONDOMÍNIOS</button>
</div>
<?php require REQUIRE_PATH . '/inc/sections.php'; ?>
<!--SECTIONS-->



<!--MAPA-->
<div class="container-fluid">
    <h2 class="text-center"><span class="label label-primary">Venha, faça-nos uma visita! Estamos bem próximo de você.</span></h2>
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.6530497228136!2d-51.869669785278866!3d-23.43689708474485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecdaa750a5af67%3A0x359f3ad912b7ea6c!2sMULTISERV+DEDETIZA%C3%87%C3%83O!5e0!3m2!1spt-BR!2sbr!4v1493073607043" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </div> 
</div>
<!--MAPA-->
<!--CERTIFICAÇÕES-->
<section class="container main-certificacoes">
    <h2 class="text-center h1"><span class="label label-danger">Nossas Certificações</span></h2>
    <div class="row text-center">
        <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <img src="<?= INCLUDE_PATH; ?>/img/iso2.png" alt="Responsabilidade" class="img-responsive">
            <h3 class="invisible">Certificado 1</h3>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <img src="<?= INCLUDE_PATH; ?>/img/iso2.png" alt="Responsabilidade" class="img-responsive">
            <h3 class="invisible">Certificado 2</h3>
        </article>
        <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <img src="<?= INCLUDE_PATH; ?>/img/iso2.png" alt="Responsabilidade" class="img-responsive">
            <h3 class="invisible">Certificado 3</h3>
        </article>
    </div>
</section>
<!--CERTIFICAÇÕES-->
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