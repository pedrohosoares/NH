<?php
include('inc.conexao.php');
include_once('Model.class.php');
$paginas = New Paginas();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
    <title><?php $paginas->Title(); ?> | Página Inicial</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
    <link rel="stylesheet" type="text/css" media="all" href="css.style.css?key=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="css.lightbox.css" />
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

    <?php include ('inc.slide.php'); ?>

    <div class="about_content" style="background-color: #F9F7F1 !important">
        <div class="full_width_centered">
            <div class='caixas-homenageados'>
                <span class="swirl_left">
                  <span class="swirl_right">
                    <h2 style="padding-bottom: 0px; margin-bottom: 0px;">NOSSAS HISTÓRIAS</h2>
                </span>
            </span>
            <p><?php $paginas->SobreEventoIndex(); ?></p>
            <a href="evento" class="btn-evento">Saiba Mais</a>
        </div>
    </div>
</div>

<div class="about_content">

    <div class="clear"></div>

    <div class="page_content page_hei">
        <div class="full_width_centered">
            <h2>GALERIA DE <strong class="color-strong">FOTOS</strong></h2>
            <div class="wrapper">
                <?php $paginas->GaleriaFotos(); ?>
            </div>

            <div class="clear"></div>
        </div>
    </div>
</div>

<?php include ('inc.footer.php'); ?>

</body>
</html>