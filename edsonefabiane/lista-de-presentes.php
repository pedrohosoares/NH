<?php
include('inc.conexao.php');
include_once('Model.class.php');
$paginas = New Paginas();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
    <title><?php $paginas->Title(); ?> | Lista de Presentes</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
    <link rel="stylesheet" type="text/css" media="all" href="css.style.css?key=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="css.green.css" />
    <link rel="stylesheet" href="css.stapel.css"/>
    <link type="text/css" rel="stylesheet" href="css.swipebox.css" />
    <link rel="stylesheet" href="css.carousel.css"/>
    <link href='http://fonts.googleapis.com/css?family=Clicker+Script' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'/>
    <script src="js.modernizr.custom.63321.js"></script>

</head>
<!--==============================header=================================-->
<body>

    <?php include ('inc.header.php'); ?>

    <div class="page_header_photo general_header">
        <div class="page_header_trans">
            <div class="page_header_title">
                <h1>LISTA DE PRESENTES</h1>
            </div>
        </div>
    </div>

    <div class="home_bottom background-home-bottom" style="background: #F9F7F1 !important">
        <div class="full_width_centered">
            <div class='caixas-homenageados'>
                <span class="swirl_left">
                    <span class="swirl_right">
                        <h2 style="margin: -15px 0 20px;">Presentes Reais</h2>
                    </span>
                </span>
                <p class="texto-justificado">Preparamos uma incrível lista de presentes reais (lista de presentes em loja física). Entre no site da loja abaixo e escolha uma das opções disponíveis. Iremos adorar o presente que receberemos.</p>
            </div>
        </div>
    </div>
    <!--<div class="home_bottom background-home-bottom">
        <div class="full_width_centered">

            <div class='col-md-personalizado1 borda-presentes'>
                <div class='bottom_icon'>
                    <img src='http://www.nossashistorias.com.br/templatesimages/logocvc/template3/logocvc.jpg' alt='' title='' />
                </div>
                <h2>CVC</h2>
                <h3>cvc.com.br</h3>
                <a href='' class='botao-presentear'>PRESENTEAR</a>
            </div>
            <div class="clear"></div>

        </div>
    </div>-->


    <div class="home_bottom background-home-bottom" style="background: #F9F7F1 !important">
        <div class="full_width_centered">
            <div class='caixas-homenageados'>
                <span class="swirl_left">
                    <span class="swirl_right">
                        <h2 style="margin: -15px 0 20px;">Presentes Virtuais</h2>
                    </span>
                </span>
                <p class="texto-justificado">A nossa lista de presentes foi preparada com imagens ilustrativas (presentes virtuais). Vocês podem escolher uma das várias opções que, com muita dedicação, selecionamos. Com certeza, iremos adorar o presente! Esperamos vocês na festa!</p>
            </div>
        </div>
    </div>
    <div class="home_bottom background-home-bottom">
        <div class="full_width_centered">
            <!-- <p class="left_full" style="background: #e6cb6a; padding-top: 40px;"></p> -->

            <?php
            $paginas->ValePresente();
            $paginas->ListaPresentes();
            ?>
            <div class="clear"></div>

        </div>
    </div>
    
    <?php include ('inc.footer.php'); ?>

</body>
</html>