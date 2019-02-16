    
<?php
//$dominio = $_SERVER['HTTP_HOST'];
//$id = $_GET['id'];
//$url_atual = "http://" . $dominio;
//
//$home = '/';
//$home2 = '/index.php';
//$sobrenos = '/sobre-nos.php';
//$cardapio = '/cardapio.php';
//$pedidonline = '/pedido-online.php';
//$contato = '/contato.php';

$url_atual = $_SERVER ['REQUEST_URI'];

$home = '/historia/categoria01/03/';
$home2 = '/historia/categoria01/03/index';
$evento = '/historia/categoria01/03/evento';
$nossas_historias = '/historia/categoria01/03/nossas-historias';
$homenageados = '/historia/categoria01/03/homenageados';
$rsvp = '/historia/categoria01/03/rsvp';
$galeria = '/historia/categoria01/03/galeria-de-fotos';
$lista_de_convidados = '/historia/categoria01/03/lista-de-convidados';
$lista_de_presentes = '/historia/categoria01/03/lista-de-presentes';
?>

<div id="main_container">

    <a class="show_menu" href="#"><img src="http://www.nossashistorias.com.br/templatesimages/categoria1/3//mobile_menu_open.png" alt="" title="" /></a>
    <a class="hide_menu" href="#"><img src="http://www.nossashistorias.com.br/templatesimages/categoria1/3//mobile_menu_close.png" alt="" title="" /></a>

    <nav class="menu">                                                                   
        <ul id="main_menu">
            <li><a <?php
                if ($url_atual === $home) {
                    echo "class='selected'";
                }if ($url_atual === $home2) {
                    echo "class='selected'";
                }
                ?> href="index">HOME</a></li>
            <li><a <?php
                if ($url_atual === $evento) {
                    echo "class='selected'";
                }
                ?>href="evento">SOBRE O EVENTO</a></li>
            
            <li><a <?php
                if ($url_atual === $homenageados) {
                    echo "class='selected'";
                }
                ?>href="mural-recados">MENSAGEM DOS CONVIDADOS</a></li>
            <li><a <?php
                if ($url_atual === $galeria) {
                    echo "class='selected'";
                }
                ?>href="galeria-de-fotos">GALERIA DE FOTOS</a></li>
            <li><a <?php
                if ($url_atual === $lista_de_presentes) {
                    echo "class='selected'";
                }
                ?>href="lista-de-presentes">LISTA DE PRESENTES</a></li> 
            <li><a <?php
                if ($url_atual === $rsvp) {
                    echo "class='selected'";
                }
                ?>href="rsvp">R.S.V.P.</a></li> 
        </ul>
    </nav>
