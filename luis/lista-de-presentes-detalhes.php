<?php
ob_start();
session_start();
include('inc.conexao.php');
include_once('Model.class.php');
$paginas = New Paginas();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <title><?php $paginas->Title(); ?> | Página Inicial</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Clean Slide Responsive Vcard Template" />
        <meta name="keywords" content="jquery, Responsive Vcard, Template, Vcard, Clean Slide" />


        <!-- Loading Google Web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Rouge+Script' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'/>

        <!-- CSS Files -->
        <link href="css.reset.css" rel="stylesheet" type="text/css" />
        <link href="css.style.css?key=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
        <link href="css.colour_21.css" rel="stylesheet" type="text/css"  id="color" />
        <link href="css.typography.css" rel="stylesheet" type="text/css"  id="customFont"/>
        <link href="css.responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css.prettyPhoto.css" type="text/css" />

        <!-- settings-panel Demo Purpose css -->
        <link href="css.settings.css" rel="stylesheet" type="text/css" />

        <link rel="shortcut icon" href="favicon.ico"/>
        <link rel="apple-touch-icon" href="apple_touch_icon.html"/>
        <link rel="apple-touch-icon" sizes="72x72" href="apple_touch_icon_72x72.html"/>
        <link rel="apple-touch-icon" sizes="114x114" href="apple_touch_icon_114x114.html"/>

        <!--[if lt IE 8]>
          <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
              <img src="http://storage.ie6countdown.com/assets/100/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
         </div>
       <![endif]-->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <link rel="stylesheet" media="screen" href="css.ie.css">
        <![endif]-->

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

    </head>
    <!--==============================header=================================-->
    <body style="margin-top: -26px">
        <div id="wrapper">

            <div class="clr" id="top-head">
                <!--// Navigation //-->
                <div class="menu_nav">
                    <div id="nav-wrap" class="nav-wrap">
                        <ul class="arrowunderline" id="nav">
                            <li id="selected"><a href="index">Volta para Página Inicial</a></li>
                        </ul>
                    </div>
                </div>
                <!--// Navigation End //-->
                <div class="border_pat"></div>
            </div>
            <div class="green_bg">
                <div class="container1">
                    <div class="logo_sec">
                        <div class="clr">
                            <div class="middle_heart" style="margin-top: 35px"></div>
                            <p class="groom">
                                <a href="#home"><?php $paginas->NomeAnfitrioes(); ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div id="content">
                    <div class="card-pattern">

                        <!-- Home -->
                        <div id="home" class="sub_page">
                            <div class="card_content">
                                <div class="clr">
                                    <div class="top-bg1">
                                        <div class="heading">Lista de Presentes</div>
                                    </div>

                                </div>
                                <div class="content">
                                    <div class="hline"></div>
                                    <!-- Accordion -->	
                                    <div class="clr">
                                        <div class="left_full">
                                            <p class="left_full">Basta você preencher com seus dados e clicar em CONFIRMAR E EFETUAR PAGAMENTO.</p>
                                        </div>
                                        <div class="left_full">
                                            <?php $paginas->ListaPresentesDetalhes(); ?>

                                            <div class="col-md-6" style="margin-left:50px;float:left;">

                                                <figure class="pagseguro">
                                                    <img src="http://www.nossashistorias.com.br/templatesimages/pagseguro.png" width="250"/>
                                                </figure>

                                                <div id="respond">
                                                    <?php
                                                    $id = $_GET['id'];
                                                    $data = date('Y-m-d');

                                                    if ($id === 'vale-presente') {
                                                        echo "
                                                            <form id='form2' action='' method='post' onsubmit='return validaPresente(this);'>
                                                                <div><div class='clr'></div><br>
                                                                        <label for='nome'>Nome Completo:</label>
                                                                        <input name='nome' type='text' class='required' id='nome'/>
                                                                </div>
                                                                <div><div class='clr'></div><br>
                                                                        <label for='email'>E-mail:</label>
                                                                        <input name='email' type='text' class='required' id='email'/>
                                                                </div>
                                                                <div><div class='clr'></div><br>
                                                                        <label for='telefone'>Telefone:</label>
                                                                        <input name='telefone' type='text' class='required' id='telefone'/>
                                                                </div>
                                                                <div><div class='clr'></div><br>
                                                                        <label for='valor'>Valor:</label>
                                                                        <input name='valor' type='text' class='required moeda' id='valor'/>
                                                                </div>
                                                                <div class='clr'></div>
                                                                <div>
                                                                    <input type='hidden' value='$data' name='data' />
                                                                    <input type='hidden' value='$id' name='id' />
                                                                    <input id='submitBtn' value='Confirmar e Efetuar Pagamento' name='acao-presente' type='submit' class='submitBtn-presente' />
                                                                </div>
                                                            </form>
                                                            ";
                                                        if (isset($_POST['acao-presente'])) {
                                                            $paginas = New Paginas();
                                                            $paginas->PagseguroValePresente();
                                                        }
                                                    } else {
                                                        echo "
                                                            <form id='form2' action='' method='post' onsubmit='return validaPresente(this);'>
                                                                <div><div class='clr'></div><br>
                                                                        <label for='nome'>Nome Completo:</label>
                                                                        <input name='nome' type='text' class='required' id='nome'/>
                                                                </div>
                                                                <div><div class='clr'></div><br>
                                                                        <label for='email'>E-mail:</label>
                                                                        <input name='email' type='text' class='required' id='email'/>
                                                                </div>
                                                                <div><div class='clr'></div><br>
                                                                        <label for='telefone'>Telefone:</label>
                                                                        <input name='telefone' type='text' class='required' id='telefone'/>
                                                                </div>
                                                                <div class='clr'></div>
                                                                <div>
                                                                    <input type='hidden' value='$data' name='data' />
                                                                    <input type='hidden' value='$id' name='id' />
                                                                    <input id='submitBtn' value='Confirmar e Efetuar Pagamento' name='acao-presente' type='submit' class='submitBtn-presente' />
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

                                        </div>
                                    </div>	
                                </div>
                                <div class="clr"></div>
                            </div>
                            <!-- //Home -->



                        </div>
                        <!-- contact end -->



                        <div class="clr"></div>
                    </div><!--card pattern end -->
                    <div class="clr "></div>
                </div>
                <div class="bottom-shade"></div>
            </div>
        </div>
        <?php include ('inc.footer.php'); ?>
    </body>
</html>