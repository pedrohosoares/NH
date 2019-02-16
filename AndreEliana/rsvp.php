<?php
include('inc.conexao.php');
include_once('Model.class.php');
$paginas = New Paginas();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <title><?php $paginas->Title($db); ?> | Confirmar Presença</title>
        <meta charset="utf-8">
            <meta name = "format-detection" content = "telephone=no" />
            <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
                <link rel="icon" href="favicon.ico" type="image/x-icon">
                    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
                    <link rel="stylesheet" type="text/css" media="all" href="css.style.css?key=<?php echo time(); ?>"/>
                    <link rel="stylesheet" href="css.prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>
                    <!--<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>-->
                    <link href="css.css" rel="stylesheet" type="text/css"/>
                    <link href="css.css(1)" rel="stylesheet" type="text/css"/>

                    <link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css'>
                        <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
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

                            <script type="text/javascript" charset="utf-8">
                                function validaRSVP(form) {

                                    if (form.nome.value == "") {
                                        alert("x Preencha o campo com seu nome");
                                        form.nome.focus();
                                        return false;
                                    }
                                    if (form.email.value == "") {
                                        alert("x Preencha o campo com seu e-mail");
                                        form.email.focus();
                                        return false;
                                    }
                                    if (form.tipo_festa.value == "") {
                                        alert("x Selecione o tipo de festa");
                                        form.tipo_festa.focus();
                                        return false;
                                    }
                                    if (form.n_adultos.value == "") {
                                        alert("x Selecione o número de adultos");
                                        form.n_adultos.focus();
                                        return false;
                                    }
                                    if (!filtro_mail.test(form.email.value) || form.email.value == "") {
                                        alert("x Preencha o campo com um Email Válido");
                                        form.email.focus();
                                        return false;
                                    }
                                }
                            </script>

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

                                            </div><!-- End of Header-->

                                            <div class="pages_title">
                                                <h2><span>R.S.V.P.</span></h2>
                                            </div>

                                            <div class="content">


                                                <div class="left_full section_home">
                                                    <p class="texto-justificado">Ficamos muito felizes que vocês estejam confirmando as suas presenças na nossa festa. Esperamos vocês para comemorarmos juntos! Um grande abraço!</p>
                                                </div>


                                            </div>
                                            <div class="content">
                                                <div class="pages_title">
                                                    <h2>Dados de <span>Confirmação</span></h2>
                                                </div>

                                                <div class="form_content form-responsivo">

                                                    <form id="form1" method="post" action="" onsubmit="return validaRSVP(this);">
                                                        <div class="form">
                                                            <div class="form_row">
                                                                <label>Nome (s) do (s) Convidado (s):</label>
                                                                <input type="text" class="form_input" name="nome" />
                                                            </div>
                                                            <div class="form_row">
                                                                <label>E-mail:</label>
                                                                <input type="text" class="form_input" name="email" />
                                                            </div>
                                                            <div class="form_row">
                                                                <label>Tipo de Evento:</label>
                                                                <div>
                                                                    <div class="checkbox_container">
                                                                        <input type="radio" name="tipo_festa" value="religioso" class="form_checkbox" /></div>
                                                                    <span class="checkbox_value" style="  padding: 9px 0px 0 6px;">Cerimônia</span>
                                                                </div>
                                                                <div>
                                                                    <div class="checkbox_container">
                                                                        <input type="radio" name="tipo_festa" value="festa" class="form_checkbox" /></div>
                                                                    <span class="checkbox_value" style="  padding: 9px 0px 0 6px;">Festa</span>
                                                                </div>
                                                                <div>
                                                                    <div class="checkbox_container">
                                                                        <input type="radio" name="tipo_festa" value="ambos" class="form_checkbox" /></div>
                                                                    <span class="checkbox_value" style="  padding: 9px 0px 0 6px;">Ambos</span>
                                                                </div>

                                                            </div>
                                                            <div class="form_row">
                                                                <label>Nº de Adultos:</label>
                                                                <select name="n_adultos" class="form_input">
                                                                    <option value="" selected>Selecione...</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                </select>
                                                            </div>
                                                            <div class="form_row">
                                                                <label>Nº de Crianças:</label>
                                                                <select name="n_criancas" class="form_input">
                                                                    <option value="" selected>Selecione...</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                </select>
                                                            </div>
                                                            <div class="form_row">
                                                                <label>Idade das Crianças:</label>
                                                                <input type="text" class="form_input" name="idade_criancas" />
                                                            </div>
                                                            <div class="form_row">
                                                                <input type="hidden" value="<?php echo date('d/m/Y'); ?>" name="data" />
                                                                <input type="submit" class="form_submit_contact" value="Confirmar" name="acao-cadastro-convidado"/>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        if (isset($_POST['acao-cadastro-convidado'])) {
                                                            $paginas = New Paginas();
                                                            $paginas->RSVP($db);
                                                        }
                                                        ?>

                                                    </form>
                                                </div>

                                            </div>

                                            <div class="clear"></div>

                                        </div>

                                    </div>
                                </div>

                                <?php include("inc.footer.php"); ?>

                            </body>
                            </html>