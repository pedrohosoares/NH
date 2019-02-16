<?php
ob_start();
session_start();
//ini_set('display_errors', 1); 
//error_reporting(E_ALL);
include('inc.conexao.php');
include_once('Model.class.php');
$paginas = New Paginas();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <title><?php $paginas->Title(); ?> | Lista de Presentes</title>
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
        <script type="text/javascript" src="js.jquery.maskMoney.js"></script>

        <!-- DropDownMenu -->
        <script type="text/javascript" src="js.menu.js"></script>

        <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $(".moeda").maskMoney({prefix: 'R$ ', allowNegative: true, thousands: '.', decimal: ',', affixesStay: false});
            });
        </script>


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

        <script type="text/javascript" charset="utf-8">
            function validaPresente(form) {
                
                 var filtro_mail = /^.+@.+\..{2,3}$/;

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
                if (form.telefone.value == "") {
                    alert("x Preencha o campo com seu telefone");
                    form.telefone.focus();
                    return false;
                }
                if (!filtro_mail.test(form.email.value) || form.email.value == "") {
                    alert("x Preencha o campo com um e-mail válido");
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
                        <div class="title"><a href=""><?php $paginas->NomeAnfitrioes(); ?></a></div>
                        <div class="description">
                            <span class="swirl_left">
                                <span class="swirl_right"><?php $paginas->DataHorario(); ?></span>
                            </span>
                        </div>
                    </div>

                    <div class="pages_title">
                        <h2>Confirmação e <span>Pagamento</span></h2>
                    </div> 

                    <div class="content">

                        <div class='left_full'>
                            <?php $paginas->ListaPresentesDetalhes(); ?>
                        </div>

                        <div class='left12'>
                            <div class="form_content">

                                <p>Basta você preencher com seus dados e clicar em <br/>CONFIRMAR E EFETUAR PAGAMENTO.</p>

                                <figure class="pagseguro">
                                    <img src="http://www.nossashistorias.com.br/templatesimages/pagseguro.png" width="250"/>
                                </figure>

                                <?php
                                $id = $_GET['id'];
                                $data = date('Y-m-d');

                                if ($id === 'vale-presente') {
                                    echo "
                                    <form id='form1' method='post' action='' onsubmit='return validaPresente(this);'>                
                                        <div class='form_row'>
                                            <label>Nome Completo:</label>
                                            <input type='text' class='form_input' name='nome' />
                                        </div>
                                        <div class='form_row'>
                                            <label>E-mail:</label>
                                            <input type='text' class='form_input' name='email' />
                                        </div>
                                        <div class='form_row'>
                                            <label>Telefone:</label>
                                            <input type='text' class='form_input' name='telefone' />
                                        </div>
                                        <div class='form_row'>
                                            <label>Valor:</label>
                                            <input type='text' class='form_input moeda' name='valor' />
                                        </div>
                                        <div class='form_row'>
                                            <input type='hidden' value='$data' name='data' />
                                            <input type='submit' class='form_submit_contact' value='Confirmar e Efetuar Pagamento' name='acao-presente'/>
                                        </div> 
                                    </form>
                                        ";
                                    if (isset($_POST['acao-presente'])) {
                                        $paginas = New Paginas();
                                        $paginas->PagseguroValePresente();
                                    }
                                } else {
                                    echo "
                                        <form id='form1' method='post' action='' onsubmit='return validaPresente(this);'>                
                                            <div class='form_row'>
                                                <label>Nome Completo:</label>
                                                <input type='text' class='form_input' name='nome' />
                                            </div>
                                            <div class='form_row'>
                                                <label>E-mail:</label>
                                                <input type='text' class='form_input' name='email' />
                                            </div>
                                            <div class='form_row'>
                                                <label>Telefone:</label>
                                                <input type='text' class='form_input' name='telefone' />
                                            </div>
                                            <div class='form_row'>
                                                <input type='hidden' value='$data' name='data' />
                                                <input type='hidden' value='$id' name='id' />
                                                <input type='submit' class='form_submit_contact' value='Confirmar e Efetuar Pagamento' name='acao-presente'/>
                                            </div> 
                                        </form>
                                                ";
                                    if (isset($_POST['acao-presente'])) {
                                        $paginas = New Paginas();
                                        $paginas->Pagseguro();
                                    }
                                }
                                ?>

                            </div>   
                        </div>

                        <div class="clear"></div>
                    </div>

                </div>
            </div>

<?php include("inc.footer.php"); ?>

    </body>
</html>