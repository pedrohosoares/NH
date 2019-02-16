<?php
include('inc.conexao.php');
include_once('Model.class.php');
$paginas = New Paginas();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <title><?php $paginas->Title($db); ?> | Lista de Convidados</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
        <link rel="stylesheet" type="text/css" media="all" href="css.style.css" />
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
                    <h1>LISTA DE CONVIDADOS</h1>
                </div>
            </div>
        </div>

        <div class="home_bottom">
            <div class="full_width_centered">
                <h2 class="tamanho-h2">CONVIDADOS PARA <strong class="color-strong">CERIMÔNIA</strong></h2>
                
                    <?php $paginas->ConvidadosCerimonia($db); ?>

                <div class="clear"></div>
            </div>
        </div>

        <div class="home_bottom background-home-bottom">
            <div class="full_width_centered">
                <h2 class="tamanho-h2">CONVIDADOS PARA <strong class="color-strong">FESTA</strong></h2>
                
                    <?php $paginas->ConvidadosFesta($db); ?>

                <div class="clear"></div>
            </div>
        </div>

        <?php include ('inc.footer.php'); ?>

    </body>
</html>