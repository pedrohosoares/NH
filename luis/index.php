<?php
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

            <link rel="icon" href="http://www.nossashistorias.com.br/templatesimages/favicon.ico" type="image/x-icon">

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

                    function validaMensagem(form) {

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
                        if (form.mensagem.value == "") {
                            alert("x Preencha o campo mensagem");
                            form.mensagem.focus();
                            return false;
                        }
                        if (!filtro_mail.test(form.email.value) || form.email.value == "") {
                            alert("x Preencha o campo com um Email Válido");
                            form.email.focus();
                            return false;
                        }
                    }
                </script>

                </head>
                <!--==============================header=================================-->
                <body style="margin-top: -26px">
                    <div id="wrapper">

                        <?php include ('inc.header.php'); ?>

                        <div class="container">
                            <div id="content">
                                <div class="card-pattern">

                                    <!-- Home -->
                                    <div id="home" class="sub_page">
                                        <div class="card_content">
                                            <div class="card_left">
                                                <div class="clr">
                                                    <div>
                                                        <ul class="card_image">
                                                            <li>
                                                                <div>
                                                                    <a href="javascript::;">
                                                                        <?php $paginas->Banner(); ?>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--                                <div class="card_right">
                                                                                <div class="clr">
                                            <?php $paginas->SobreEventoIndex(); ?>
                                                                                    <br/>
                                                                                </div>
                                                                            </div>-->
                                            <div class="clr"></div>
                                            <div class="dot_line">
                                                <div class="lines_dot">
                                                    <!--<div class="heart">&nbsp;</div>-->
                                                </div>
                                            </div>
                                            <?php $paginas->DataHorario(); ?>
                                        </div>
                                        <div class="clr"></div>
                                    </div>
                                    <!-- //Home -->

                                    <!-- about -->
                                    <div id="about" class="sub_page">
                                        <div class="clr"></div>
                                        <div class="card_content">
                                            <div class="heading">SOBRE O EVENTO</div>
                                            <div class="clr hline">&nbsp;</div>
                                            <div class="clr">
                                                <?php $paginas->SobreEvento(); ?>
                                            </div>
                                        </div>
                                        <div class="card_content">
                                            <div class="heading">MINHAS HISTÓRIAS</div>
                                            <div class="clr hline">&nbsp;</div>
                                            <div class="clr">
                                                <?php $paginas->NossasHistorias(); ?>
                                            </div>
                                        </div>
                                        <div class="card_content">
                                            <div class="heading">HOMENAGEADOS</div>
                                            <div class="clr hline">&nbsp;</div>
                                            <div class="clr">
                                                <?php $paginas->Homenageados(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //about -->

                                    <!-- Wedding -->
                                    <div id="wedding" class="sub_page">
                                        <div class="clr"></div>
                                        <div class="card_content">
                                            <div class="heading">VEJA AS FOTOS DO INSTAGRAM</div>
                                            <div class="clr hline">&nbsp;</div>
                                            <div class="clr">
                                                <?php $paginas->Instagram(); ?>
                                            </div>
                                            <div class="dot_line">
                                                <div class="lines_dot">
                                                    <!--<div class="heart">&nbsp;</div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //Wedding -->

                                    <div id="contact" class="sub_page">
                                        <div class="card_content">
                                            <div class="clr">
                                                <div class="top-bg1">
                                                    <div class="heading">MENSAGEM DOS CONVIDADOS</div>
                                                </div>

                                            </div>
                                            <div class="content">
                                                <div class="card_content">
                                                    <div class="heading">ENVIE SUA MENSAGEM</div>
                                                    <div class="clr hline">&nbsp;</div>
                                                    <div id="respond">
                                                        <form id="form2" action="" method="post" onsubmit="return validaMensagem(this);">
                                                            <div><div class="clr"></div><br>
                                                                    <input name="nome" type="text" class="required" placeholder="Nome Completo:" maxlength="34"/>
                                                            </div>
                                                            <div><div class="clr"></div><br>
                                                                    <input name="email" type="text" class="required" placeholder="E-mail:" />
                                                            </div>
                                                            <div><div class="clr"></div><br>
                                                                    <textarea name="mensagem" rows="20" placeholder="Mensagem:"></textarea>
                                                            </div>
                                                            <div>
                                                                <input type="hidden" value="<?php echo date('d/m/Y'); ?>" name="data" />
                                                                <input id="submitBtn" value="Enviar" name="acao-enviar-mensagem" type="submit" class="submitBtn" />
                                                            </div>
                                                            <?php
                                                            if (isset($_POST['acao-enviar-mensagem'])) {
                                                                $paginas = New Paginas();
                                                                $paginas->Mensagem();
                                                            }
                                                            ?>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="hline"></div>
                                                <div class="clr">
                                                    <?php $paginas->MuralRecados(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     <!-- Portfolio -->
                                    <div id="portfolio" class="sub_page">
                                        <div class="card_content">
                                            <div class="heading">Galeria de Fotos</div>
                                            <div class="clr hline">&nbsp;</div>
                                            <div class="clr">
                                                <ul id="portfolio-list">
                                                    <?php $paginas->GaleriaFotos(); ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clr"></div>
                                        <div class="card_content">
                                            <div class="heading">Instagram do Evento</div>
                                            <div class="clr">
                                                <?php $paginas->Instagram(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //Portfolio -->

                                    <!-- Features -->
                                    <div id="features" class="sub_page">
                                        <div class="card_content">
                                            <div class="clr">
                                                <div class="top-bg1">
                                                    <div class="heading">Lista de Convidados para Cerimônia</div>
                                                </div>

                                            </div>
                                            <div class="content">
                                                <div class="hline"></div>
                                                <!-- Accordion -->
                                                <div class="clr">
                                                    <div class="left">
                                                        <div class="accordion">
                                                            <?php $paginas->ConvidadosCerimonia(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card_content">
                                            <div class="clr">
                                                <div class="top-bg1">
                                                    <div class="heading">Lista de Convidados para Festa</div>
                                                </div>

                                            </div>
                                            <div class="content">
                                                <div class="hline"></div>
                                                <!-- Accordion -->
                                                <div class="clr">
                                                    <div class="left">
                                                        <div class="accordion">
                                                            <?php $paginas->ConvidadosFesta(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Features -->
                                    <div id="gift" class="sub_page">
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
                                                        <p class="left_full">A minha lista de presentes foi preparada com imagens ilustrativas (presente virtual). Você pode escolher uma das várias opções que, com muita dedicação, selecionei. Com certeza, irei adorar o seu presente! Espero você na festa!</p>
                                                    </div>
                                                    <div class="left_full">
                                                        <?php
                                                        $paginas->ValePresente();
                                                        $paginas->ListaPresentes();
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="clr">
                                                <div class="top-bg1">
                                                    <div class="heading">Lista de Presentes em lojas físicas</div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="hline"></div>
                                                <!-- Accordion -->
                                                <div class="clr">
                                                    <div class="left_full">
                                                        <?php $paginas->ListaPresentesLoja(); ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- contact end -->

                                    <!-- contact -->
                                    <div id="rsvp" class="sub_page">
                                        <div class="card_content">
                                            <div class="heading">Confirmar Presença</div>
                                            <div class="clr">
                                            </div>
                                            <div class="left">
                                                <div class="clr">
                                                    Fico muito feliz que vocês estejam confirmando as suas presenças na minha festa. Espero vocês para comemorarmos juntos! Um grande abraço!
                                                    <div id="respond" style="margin-left:250px;">
                                                        <div id="post_message" class="post_message"></div>
                                                        <div class="boxBody">
                                                            <div class="desc">
                                                                <form id="form2" action="" method="post" onsubmit="return validaRSVP(this);">
                                                                    <div><div class="clr"></div><br>
                                                                            <input name="nome" type="text" class="required" placeholder="Nome (s) do (s) convidado (s):" />
                                                                    </div>
                                                                    <div><div class="clr"></div><br>
                                                                            <input name="email" type="text" class="required" placeholder="E-mail:" />
                                                                    </div>
                                                                    <div><div class="clr"></div><br>
                                                                            <select name="tipo_festa">
                                                                                <option selected="selected" value="">Confirmar em?</option>
                                                                                <option value="religioso">Cerimônia</option>
                                                                                <option value="festa">Festa</option>
                                                                                <option value="ambos">Ambos</option>
                                                                            </select>
                                                                    </div>
                                                                    <div><div class="clr"></div><br>
                                                                            <select name="n_adultos">
                                                                                <option selected="selected" value="">N° de Adultos</option>
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
                                                                    <div><div class="clr"></div><br>
                                                                            <select name="n_criancas">
                                                                                <option selected="selected" value="">N° de Crianças</option>
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
                                                                    <div>
                                                                        <div class="clr"></div><br>
                                                                            <input name="idade_criancas" type="text" class="required phone" placeholder="Idade das Crianças"  />
                                                                    </div>
                                                                    <div>
                                                                        <input type="hidden" value="<?php echo date('d/m/Y'); ?>" name="data" />
                                                                        <input id="submitBtn" value="Confirmar" name="acao-cadastro-convidado" type="submit" class="submitBtn" />
                                                                    </div>
                                                                    <?php
                                                                    if (isset($_POST['acao-cadastro-convidado'])) {
                                                                        $paginas = New Paginas();
                                                                        $paginas->RSVP();
                                                                    }
                                                                    ?>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div  class="clr"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--//left end //-->

                                            <div class="clr"></div>
                                        </div>
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