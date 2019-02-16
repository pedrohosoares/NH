    
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

$home = '/site/historia/categoria01/01/';
$home2 = '/site/historia/categoria01/01/index';
$evento = '/site/historia/categoria01/01/evento';
$nossas_historias = '/site/historia/categoria01/01/historia-anfitrioes';
$homenageados = '/site/historia/categoria01/01/homenageados';
$rsvp = '/site/historia/categoria01/01/rsvp';
$galeria = '/site/historia/categoria01/01/galeria-de-fotos';
$lista_de_convidados = '/site/historia/categoria01/01/lista-de-convidados';
$lista_de_presentes = '/site/historia/categoria01/01/lista-de-presentes';
?>

<a class="show_menu" href="">menu</a>
<a class="hide_menu" href="">fechar menu</a>

<div class="menu">                                                                   
    <ul id="main_menu">
        <li><a <?php
            if ($url_atual === $home) {
                echo "class='selected'";
            }if ($url_atual === $home2) {
                echo "class='selected'";
            }
            ?> href="index">Home</a></li>
        <li><a <?php
            if ($url_atual === $evento) {
                echo "class='selected'";
            }
            ?>href="evento">Sobre o Evento</a></li>
        
        <li><a <?php
            if ($url_atual === $homenageados) {
                echo "class='selected'";
            }
            ?>href="mural-recados">Mensagem dos Convidados</a></li>
        <li><a <?php
            if ($url_atual === $galeria) {
                echo "class='selected'";
            }
            ?>href="galeria-de-fotos">Galeria de Fotos</a></li>
        <li><a <?php
            if ($url_atual === $lista_de_presentes) {
                echo "class='selected'";
            }
            ?>href="lista-de-presentes">Lista de Presentes</a></li> 
        <li><a <?php
            if ($url_atual === $rsvp) {
                echo "class='selected'";
            }
            ?>href="rsvp">R.S.V.P.</a></li> 
        
    </ul>
</div>