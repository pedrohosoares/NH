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
    <meta charset="UTF-8"/>
    <title><?php $paginas->Title(); ?> | Página Inicial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="favicon.html"/>
    <!-- Bootstrap -->
    <link href="css.bootstrap.min.css" rel="stylesheet" media="screen"/>
    <!-- Main CSS -->
    <link href="css.style.css?key=<?php echo time(); ?>" rel="stylesheet" media="screen"/>
    <link href="css.lightbox.css" rel="stylesheet" media="screen"/>

    <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'/>
        <!-- theme color css
        <link href="css.colorname.css" rel="stylesheet" media="screen"> -->	

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                  <script src="js/respond.js"></script>
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
<body class="single">

    <header id="header">
        <div class="container">
            <div class="row">
<!--                     #logo 
                    <div id="logo" class="col-lg-12 animated fadeInUp">
                        <p class="font-titulo">Casamento de Marcelo & Nathália</p>
                    </div>  /#logo -->

                    <button class="nav-collapser">
                        <i class="fa fa-bars"></i>
                    </button>

                    <nav id="main_navigation" class="col-lg-12 main_navigation">
                        <ul>
                            <li class="scroll active"><a href="index">Voltar para Página Inicial</a></li>
                        </ul>
                    </nav> 
                </div>
            </div>
        </header> <!-- /header -->

        <!-- #love_story -->
        <section id="love_story1" style="padding-bottom: 40px;">
            <div class="container">

                <!-- .section_title_wrap -->
                <div class="section_title_wrap">

                    <div class="col-md-presente">
                        <?php $paginas->ListaPresentesDetalhes(); ?>
                    </div>
                    <div class="col-md-presente">
                        <h1 class="section_title">
                            <span>Confirmação e Pagamento</span>
                        </h1>
                        <p class="section-text">

                            <p class="center">Basta você preencher com seus dados e clicar em <br/>CONFIRMAR E EFETUAR PAGAMENTO.</p>
                            <br/>
                            <p class="center">Indique seu próprio CEP, na compra do presente no Pagseguro.</p>

                            <figure class="pagseguro">
                                <img src="http://www.nossashistorias.com.br/templatesimages/pagseguro.png" width="250"/>
                            </figure>

                            <div class="rsvp_wrap">
                                <?php
                                $id = $_GET['id'];
                                $data = date('Y-m-d');
                                
                                if ($id === 'vale-presente') {
                                    echo "
                                    <form class='contact-form' method='post' action=''  onsubmit='return validaPresente(this);'>
                                        <p><input type='text' name='nome' class='name' placeholder='Nome Completo:'></p>
                                        <p><input type='text' name='email' class='name' placeholder='E-mail:'></p>
                                        <p><input type='text' name='telefone' class='name' placeholder='Telefone:'></p>
                                        <p><input type='text' name='valor' class='name moeda' placeholder='Valor:'></p>
                                        <input type='hidden' value='$data' name='data' />
                                        <input type='hidden' value='$id' name='id' />
                                        <button type='submit' name='acao-presente'>Confirmar e Efetuar Pagamento</button>
                                    </form>
                                    ";
                                    if (isset($_POST['acao-presente'])) {
                                        $paginas = New Paginas();
                                        $paginas->PagseguroValePresente();
                                    }
                                }
                                else{
                                    echo "
                                    <form class='contact-form' method='post' action=''  onsubmit='return validaPresente(this);'>
                                        <p><input type='text' name='nome' class='name' placeholder='Nome Completo'></p>
                                        <p><input type='text' name='email' class='name' placeholder='E-mail:'></p>
                                        <p><input type='text' name='telefone' class='name' placeholder='Telefone:'></p>

                                        <input type='hidden' value='$data' name='data' />
                                        <input type='hidden' value='$id' name='id' />
                                        <button type='submit' name='acao-presente'>Confirmar e Efetuar Pagamento</button>
                                    </form>
                                    ";
                                    if (isset($_POST['acao-presente'])) {
                                        $paginas = New Paginas();
                                        $paginas->Pagseguro();
                                    }
                                }
                                
                                ?>
                            </div>
                        </p>                        
                    </div>


                </div> <!-- /.section_title_wrap -->

            </div>
        </section>

        <?php include ('inc.footer.php'); ?>

    </body>
    </html>