    
<?php
$dominio = $_SERVER['HTTP_HOST'];
$id = $_GET['id'];
$url_atual = "http://" . $dominio;

$home = '/';
$home2 = '/index.php';
$sobrenos = '/sobre-nos.php';
$cardapio = '/cardapio.php';
$pedidonline = '/pedido-online.php';
$contato = '/contato.php';
?>

<header id="header" class="header_stick">
    <div class="container">
        <div class="row">
            <!-- #logo -->
<!--            <div id="logo" class="col-lg-12 animated fadeInUp">
                <p class="font-titulo">Casamento de Marcelo & Nathália</p>
            </div>  /#logo -->

            <button class="nav-collapser">
                <i class="fa fa-bars"></i>
            </button>

            <!-- #main_navigation -->
            <nav id="main_navigation" class="col-lg-12 main_navigation">
                <ul>
                    <li class="scroll active"><a href="#slider">Home</a></li>
                    <li class="scroll"><a href="#love_story1">Sobre o Evento</a></li>
                    
                    <li class="scroll"><a href="#important_people">Mensagem dos Convidados</a></li>
                    <li class="scroll"><a href="#gallery">Galeria de Fotos</a></li>
                    <!--<li class="scroll"><a href="#event_partises">Galeria de Fotos</a></li>-->
                    <li class="scroll"><a href="#blog">Lista de Presentes</a></li>
                    <li class="scroll"><a href="#rsvp">R.S.V.P.</a></li>
                    <!--<li class="scroll"><a href="#love_story">Instagram</a></li>-->
                </ul>
            </nav> <!-- /#main_navigation -->
        </div>
    </div>
</header> <!-- /header -->


