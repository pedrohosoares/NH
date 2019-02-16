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

    <div class="home_bottom background-home-bottom" style="background: #F7D1E8 !important">
        <div class="full_width_centered">

            <div class='caixas-homenageados'>
                <span class="swirl_left">
                    <span class="swirl_right">
                        <h2 style="margin: -15px 0 20px;">Lista de Presentes</h2>
                    </span>
                </span>
                <p class="texto-justificado">A minha lista de presentes foi preparada com imagens ilustrativas (presente virtual). Vocês podem escolher uma das várias opções que, com muita dedicação, selecionei. Com certeza, irei adorar o presente! Espero vocês na festa!</p>
            </div>
        </div>
    </div>
    <div class="home_bottom background-home-bottom">
        <div class="full_width_centered">
            <!-- <p class="left_full" style="background: #F7D1E8; padding-top: 40px;"></p> -->

            <?php
            $paginas->ValePresente();
            $paginas->ListaPresentes();
            ?>
        </div>
    </div>
    <div class="home_bottom background-home-bottom" style="background: #F7D1E8 !important">
        <div class="full_width_centered">

            <div class='caixas-homenageados'>
                <span class="swirl_left">
                    <span class="swirl_right">
                        <h2 style="margin: -15px 0 20px;">Presentes Reais</h2>
                    </span>
                </span>
                <p class="texto-justificado">Lista de presentes em lojas físicas.</p>
            </div>
        </div>
    </div>
    <div class="home_bottom background-home-bottom">
        <div class="full_width_centered">

            <?php $paginas->ListaPresentesLoja(); ?>

        </div>
    </div>

    <?php include ('inc.footer.php'); ?>

</body>
</html>