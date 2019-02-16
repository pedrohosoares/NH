<?php
include('inc.conexao.php');
include_once('Model.class.php');
$paginas = New Paginas();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <title><?php $paginas->Title(); ?> | Galeria de Fotos</title>
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

        <div class="page_header_photo general_header">
            <div class="page_header_trans">
                <div class="page_header_title">
                    <h1>GALERIA DE FOTOS</h1>
                </div>
            </div>
        </div>
        <div class="page_content">
            <div class="full_width_centered">

                <div class="wrapper">
                    <?php $paginas->GaleriaFotos(); ?>
                </div>  
                
                <h3 class="instagram">Instagram do Evento</h3>
                
                <div class="wrapper">
                    <?php $paginas->Instagram(); ?>
                </div>

                <div class="clear"></div>
            </div>  <!--end of full width-->
        </div> <!--end of about content-->  

        <?php include ('inc.footer.php'); ?>

    </body>
</html>