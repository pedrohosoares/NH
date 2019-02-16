<?php
include('inc.conexao.php');
include_once('Model.class.php');
$paginas = New Paginas();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
    <title><?php $paginas->Title($db); ?> | Lista de Presentes</title>
    <meta charset="utf-8"/>
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <link rel="stylesheet" type="text/css" media="all" href="css.style.css?key=<?php echo time(); ?>"/>
    <link rel="stylesheet" href="css.prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>
    <!--<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>-->
    <link href="css.css" rel="stylesheet" type="text/css"/>
    <link href="css.css(1)" rel="stylesheet" type="text/css"/>

    <link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'/>
    <!-- jQuery -->
    <script type="text/javascript" src="js.jquery.min.js"></script>
    <!-- PrettyPhoto -->
    <script src="js.jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js.jquery.quicksand.js"></script>
    <script type="text/javascript" src="js.custom.quicksand.js"></script>
    <!-- Twitter Feed -->
    <script type="text/javascript" src="js.jquery.tweet.js" charset="utf-8"></script>
    <!-- FlexSlider -->
    <script type="text/javascript" src="js.jquery.flexslider-min.js"></script>

    <!-- DropDownMenu -->
    <script type="text/javascript" src="js.menu.js"></script>


    <script type="text/javascript" charset="utf-8">
        var $ = jQuery.noConflict();
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "fade"
            });
            $(function () {
                $('.show_menu').click(function () {
                    $('.menu').fadeIn();
                    $('.show_menu').fadeOut();
                    $('.hide_menu').fadeIn();
                });
                $('.hide_menu').click(function () {
                    $('.menu').fadeOut();
                    $('.show_menu').fadeIn();
                    $('.hide_menu').fadeOut();
                });
            });
        });
        jQuery(function ($) {
            $(".tweet").tweet({
                modpath: 'js.twitter/',
                join_text: "auto",
                username: "famousthemes",
                count: 1,
                auto_join_text_default: "we said,",
                auto_join_text_ed: "we",
                auto_join_text_ing: "we were",
                auto_join_text_reply: "we replied",
                auto_join_text_url: "we were checking out",
                loading_text: "loading tweets..."
            });
        });</script>

        <script type="text/javascript" src="projeto.js"></script>

        <!--[if lt IE 8]>
          <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
              <img src="http://storage.ie6countdown.com/assets/100/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
         </div>
         <![endif]-->
        <!--[if lt IE 9]>
          <script src="js.html5shiv.js"></script>
          <link rel="stylesheet" media="screen" href="css/ie.css">
    
    
          <![endif]-->
        <!--[if lt IE 8]>
          <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
              <img src="http://storage.ie6countdown.com/assets/100/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
         </div>
         <![endif]-->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <link rel="stylesheet" media="screen" href="css/ie.css">
          <![endif]-->
      </head>
      <!--==============================header=================================-->
      <body>
        <div id="shadow_bg">
            <div id="main_container">

                <?php include("inc.header.php"); ?>

                <div id="center_container">

                    <div id="header">
                        <div class="title"><a href=""><?php $paginas->NomeAnfitrioes($db); ?></a></div>
                        <div class="description">
                            <span class="swirl_left">
                                <span class="swirl_right"><?php $paginas->DataHorario($db); ?></span>
                            </span>
                        </div>
                    </div>

                    <div class="pages_title">
                        <h2>Lista de <span>Presentes</span></h2>
                    </div> 

                    <div class="content">
                        

                        <!--INICIO-->
                        <div class="left_full">
                            <h2 class="titulo-lista-presentes"><strong>Presentes Reais</strong></h2>
                            <p>Preparei uma incrível lista de presentes reais (lista de presentes em loja física). Entre no site da loja abaixo e escolha uma das opções disponíveis. Irei adorar o presente que receberei!</p>
                        </div>

                        <div>
                            <div class='left_full'>
                                <h2 class="largura-titulo">CVC</h2>
                                <div class='bgs'>
                                    <div class='col-md-12'>
                                        <img src='http://www.nossashistorias.com.br/templatesimages/logocvc/template1/logocvc.jpg' class='bg_thumb img-left' alt='Nome' title='Presente' style='width:178px;height:166px;'/>
                                        <p>cvc.com.br</p>
                                        <div class='col-md-10'>
                                            <a href='javascript::;' class='more_about btn-presente'>» Presentear</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='clear' style='margin-top:15px'></div>

                        <div class="left_full col-md-12">
                            <h2 class="titulo-lista-presentes"><strong>Presentes Virtuais</strong></h2>
                        </div>

                        <div class="left_full">
                            <p>A minha lista de presentes foi preparada com imagens ilustrativas (presentes virtuais). Você pode escolher uma das várias opções que, com muita dedicação, selecionei. Com certeza, irei adorar o seu presente! Espero você na festa!</p>
                        </div>

                        <?php
                        $paginas->ValePresente($db);
                        $paginas->ListaPresentes($db);
                        ?>

                        <div class="clear"></div>
                    </div>
                    
                </div>
            </div>

            <?php include("inc.footer.php"); ?>

        </body>
        </html>