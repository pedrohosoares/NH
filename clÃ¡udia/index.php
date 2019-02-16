<?php
include('inc.conexao.php');
include_once('Model.class.php');
$paginas = New Paginas();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <title><?php $paginas->Title(); ?> | Página Inicial</title>
        <meta charset="utf-8"/>
        <meta name = "format-detection" content = "telephone=no" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
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
              <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
         </div>
       <![endif]-->
        <!--[if lt IE 9]>
          <script src="js.html5shiv.js"></script>
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

                        <div class="title"><a href=""><?php $paginas->NomeAnfitrioes(); ?></a></div>
                        <div class="description">
                            <span class="swirl_left">
                                <span class="swirl_right"><?php $paginas->DataHorario(); ?></span>
                            </span>
                        </div>

                    </div><!-- End of Header-->

                    <?php include("inc.slide.php"); ?>

                    <div class="home_title">
                        <h2>Bem-vindo ao Site de<span>  <?php $paginas->NomeAnfitrioes(); ?></span></h2>
                        <div class="clear"></div>
                    </div>

                    <div class="content">

                        <div class="left23 about">
                            <h2>Minhas Histórias</h2>
                            <p><?php $paginas->SobreEventoIndex(); ?></p>
                            <a href="evento" class="more_about">» + Detalhes</a>
                        </div>

                        <div class="clear"></div>

                        <?php include("inc.fotos.footer.php"); ?>

                        <div class="name_divider">NH</div>         

                    </div>

                    <div class="clear"></div> 

                </div>

            </div>
        </div>

        <?php include("inc.footer.php"); ?>

    </body>
</html>