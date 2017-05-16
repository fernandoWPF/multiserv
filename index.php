<?php
require './_app/Config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebSite">
    <head>
        <meta charset="UTF-8">
        <title><?= $pg_title; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="<?= $pg_desc; ?>"/>
        <meta name="robots" content="index, follow"/><!--PARA QUE O GOOGLE SIGA A ESTRUTURA DA PÁGINA-->

        <link rel="canonical" href="<?= $pg_url; ?>"/>
        <link rel="alternate" hreflang="pt-br" href="http://www.multiserv.com.br" />

        <meta itemprop="name" content="<?= $pg_site; ?>">
        <meta itemprop="description" content="<?= $pg_desc; ?>">
        <meta itemprop="image" content="<?= $pg_image; ?>">
        <meta itemprop="url" content="http://www.multiserv.com.br">

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->  

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,900" rel="stylesheet">
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/style.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/bootstrap.min.css">

        <link rel="shortcut icon" href="<?= INCLUDE_PATH; ?>/img/logo.png" />
    </head>

    <body>
        <?php
        require REQUIRE_PATH . '/inc/analyticstracking.php';
        ?>
        <!--MENU PRINCIPAL-->
        <?php require REQUIRE_PATH . '/inc/menu.php'; ?>
        <!--FIM MENU PRINCIPAL-->
        
        <!--CONTEUDO-->
        <?php
        if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '.php';
        else:
            require REQUIRE_PATH . '/404.php';
        endif;
        ?>
        <!--CONTEUDO-->
        
        <!--FOOTER-->
        <?php require REQUIRE_PATH . '/inc/footer.php'; ?>
        <!--FOOTER-->
        
        <script src="<?= HOME; ?>/_cdn/jquery-3.1.1.min.js"></script>
        <script src="<?= HOME; ?>/_cdn/bootstrap.min.js"></script>
        <script src="<?= HOME; ?>/_cdn/script.js"></script>
        <script src="<?= HOME; ?>/_cdn/mail.js"></script>
        <script src="<?= HOME; ?>/_cdn/animation.js"></script>

    </body>
</html>
