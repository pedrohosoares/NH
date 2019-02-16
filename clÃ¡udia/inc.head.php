<?php
//include('conexao.php');
include_once('model/seguranca/Seguranca.class.php');
include_once('model/paginas/Paginas.class.php');
//$seguranca = new Seguranca();
//$seguranca->secure();
?>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="http://www.nossashistorias.com.br/templatesimages/favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
<link rel="stylesheet" type="text/css" media="all" href="css/style.css"/>
<link rel="stylesheet" href="prettyphoto/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>
<!--<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>-->
<link href="css/css" rel="stylesheet" type="text/css"/>
<link href="css/css(1)" rel="stylesheet" type="text/css"/>

<link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- PrettyPhoto -->
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<script type="text/javascript" src="js/custom.quicksand.js"></script>
<!-- Twitter Feed -->
<script type="text/javascript" src="js/jquery.tweet.js" charset="utf-8"></script>
<!-- FlexSlider -->
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>

<!-- DropDownMenu -->
<script type="text/javascript" src="js/menu.js"></script>


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
            modpath: 'js/twitter/',
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

<script type="text/javascript" src="include/projeto.js"></script>
