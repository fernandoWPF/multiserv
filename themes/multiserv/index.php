<!--1º DOBRA-->
<header class="container-fluid main_cabecalho" id="inicio">
    <h1 class="invisible"><?= $pg_title; ?></h1>
    <div id="carousel-main" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?= INCLUDE_PATH; ?>/img/casa-protegida.png" alt="Casa Protegida" class="img-responsive">
            </div>
            <div class="item">
                <img src="<?= INCLUDE_PATH; ?>/img/empresa-impecavel.png" alt="Empresa Impecável" class="img-responsive">
            </div>
            <div class="item">
                <img src="<?= INCLUDE_PATH; ?>/img/qualidade-compromisso.png" alt="Qualidade e Compromisso" class="img-responsive">
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
        <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4 anime">
            <div class="">
                <img src="<?= INCLUDE_PATH; ?>/img/compromisso.png" alt="Compromisso" class="img-responsive">
                <h4>COMPROMISSO</h4>
                <hr>
                <p class="tagline">Estamos sempre atendendo as normas de segurança, bem como as boas práticas no controle de pragas. Mais que compromisso no trabalho executado é o que temos com nossos clientes seja uma breve ligação ou até mesmo uma importante reunião.</p>
            </div>
        </article>
        <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4 anime">
            <div class="">
                <img src="<?= INCLUDE_PATH; ?>/img/responsabilidade.png" alt="Responsabilidade" class="img-responsive">
                <h4>RESPONSABILIDADE</h4>
                <hr>
                <p class="tagline">Utizamos somente produtos avalidados e autorizados pelo Ministério da Saúde. Não somente na utilização dos nossos produtos, nossa responsabilidade é para com nossos clientes, não permitindo que falhas ou erros ocorram. Nossos clientes são nossos verdadeiros fãs.</p>
            </div>
        </article>
        <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4 anime">
            <div class="">
                <img src="<?= INCLUDE_PATH; ?>/img/qualidade.png" alt="Qualidade" class="img-responsive">
                <h4>QUALIDADE</h4>
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
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.6530497228136!2d-51.869669785278866!3d-23.43689708474485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecdaa750a5af67%3A0x359f3ad912b7ea6c!2sMULTISERV+DEDETIZA%C3%87%C3%83O!5e0!3m2!1spt-BR!2sbr!4v1493073607043" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </div> 
</div>
<!--MAPA-->
<!--CERTIFICAÇÕES-->
<section class="container-fluid div-certificacao">
    <h2 class="invisible">Certificações</h2>
    <div class="row text-center">
        <article class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src="<?= INCLUDE_PATH; ?>/img/crf-pr.png" alt="Conselho Regional de Farmácia do Estado do Paraná" class="img-responsive">
            <h3 class="invisible">CRF-PR</h3>
        </article>
        <article class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src="<?= INCLUDE_PATH; ?>/img/anvisa.jpg" alt="Anvisa" class="img-responsive" >
            <h3 class="invisible">Certificado Anvisa</h3>
        </article>
        <article class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src="<?= INCLUDE_PATH; ?>/img/crea-pr.jpg" alt="CREA-PR" class="img-responsive" >
            <h3 class="invisible">Certificado CREA-PR</h3>
        </article>
    </div>
</section>
<!--CERTIFICAÇÕES-->
<?php require REQUIRE_PATH . '/inc/modal.php'; ?>