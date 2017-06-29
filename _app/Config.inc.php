<?php

define('HOME', 'http://10.24.50.21/multiserv/');
define('THEME', 'multiserv');
define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' . THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

$pg_name = 'Multiserv | Dedetizadora';
$pg_site = 'Multiserv | Dedetizadora';
$pg_domain = 'www.multiserv.com.br';

$pg_sitekit = INCLUDE_PATH . '/img/sitekit/';

switch ($Url[0]):
    case 'index':
        $pg_title = $pg_name;
        $pg_desc = 'descrição do site';
        $pg_image = $pg_sitekit . 'multiserv.png';
        $pg_url = HOME;
        break;
    
    case 'empresa':
        $pg_title = 'Empresa';
        $pg_desc = 'descrição do site';
        $pg_image = $pg_sitekit . 'multiserv.png';
        $pg_url = HOME . 'empresa';
        break;
    
    case 'dedetizacao':
        $pg_title = 'Dedetização';
        $pg_desc = 'descrição do site';
        $pg_image = $pg_sitekit . 'multiserv.png';
        $pg_url = HOME . 'dedetizacao';
        break;
    
    case 'construcao_civil':
        $pg_title = 'Construção Civil';
        $pg_desc = 'descrição do site';
        $pg_image = $pg_sitekit . 'multiserv.png';
        $pg_url = HOME . 'construcao_civil';
        break;
    case 'caixa_dagua':
        $pg_title = 'Limpeza de Caixas Dágua';
        $pg_desc = 'descrição do site';
        $pg_image = $pg_sitekit . 'multiserv.png';
        $pg_url = HOME . 'caixa_dagua';
        break;
    case 'contato':
        $pg_title = 'Contato';
        $pg_desc = 'descrição do site';
        $pg_image = $pg_sitekit . 'multiserv.png';
        $pg_url = HOME . 'contato';
        break;

    default :
        $pg_title = 'Página Não Encontrada!';
        $pg_desc = 'Você está vendo agora a página 404 pois não encontramos conteúdo relacionado à <b>' . $setUrl . '</b>, mas não saia ainda. Que tal voltar ao nosso Site?';
        $pg_image = $pg_sitekit . 'multiserv.png';
        $pg_url = HOME . '404';
        break;
endswitch;

function SitemapPing() {
    $SitemapPing = array();
    $SitemapPing['g'] = 'https://www.google.com/webmasters/tools/ping?sitemap=' . HOME . '/sitemap.xml';
    $SitemapPing['b'] = 'https://www.bing.com/webmaster/ping.aspx?siteMap=' . HOME . '/sitemap.xml';

    foreach ($SitemapPing as $sitemapUrl):
        $ch = curl_init($sitemapUrl);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
        curl_close($ch);
    endforeach;
}

if (!file_exists('sitemap.xml.gz')):
    $gzip = gzopen('sitemap.xml.gz', 'w9');
    $gmap = file_get_contents('sitemap.xml');
    gzwrite($gzip, $gmap);
    gzclose($gzip);
    SitemapPing();
endif;