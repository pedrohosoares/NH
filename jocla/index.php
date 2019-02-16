<?php
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
    <link rel="icon" href="http://www.nossashistorias.com.br/templatesimages/favicon.ico" type="image/x-icon">
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
        <body class="single">

            <?php include ('inc.header.php'); ?>

            <?php include ('inc.slide.php'); ?>

            <!-- #love_story -->
            <section id="love_story1" style="padding-bottom: 40px; padding-top: 40px;background: url(http://www.nossashistorias.com.br/templatesimages/bg-nossas-historias.png)#F9F7F1">
                <div class="container">

                    <!-- .section_title_wrap -->
                    <div class="section_title_wrap">
                        <h1 class="section_title">
                            <span style="background: url(http://www.nossashistorias.com.br/templatesimages/bg-nossas-historias.png)#F9F7F1;">Sobre o<b> Evento</b></span>
                        </h1>
                        <p class="section-text">
                            <?php $paginas->SobreEvento(); ?>
                        </p>
                    </div> <!-- /.section_title_wrap -->
                </div>
            </section>
            <section id="love_story1" style="padding-bottom: 40px; padding-top: 40px;">
                <div class="container">
                    <!-- .section_title_wrap -->
                    <div class="section_title_wrap">
                        <h1 class="section_title">
                            <span>Nossas <b>Histórias</b></span>
                        </h1>
                        <p class="section-text">
                            <?php $paginas->NossasHistorias(); ?>
                        </p>
                    </div> <!-- /.section_title_wrap -->
                </div>
            </section>
            <section id="love_story1" style="padding-bottom: 40px; padding-top: 40px; background: url(http://www.nossashistorias.com.br/templatesimages/bg-nossas-historias.png)#F9F7F1">
                <div class="container">

                    <!-- .section_title_wrap -->
                    <div class="section_title_wrap">
                        <h1 class="section_title">
                            <span style="background: url(http://www.nossashistorias.com.br/templatesimages/bg-nossas-historias.png)#F9F7F1">Homenagens</span>
                        </h1>
                        <p class="section-text">
                            <?php $paginas->Homenageados(); ?>
                        </p>
                    </div> <!-- /.section_title_wrap -->
                </div>
            </section>

            <!-- #important_people -->
            <section id="important_people" style="    padding-top: 40px; padding-bottom: 40px; background: #fff;">
                <div class="container">

                    <!-- .section_title_wrap -->
                    <div class="section_title_wrap">
                        <h1 class="section_title">
                            <span style="background: #fff;">Envie sua <b>Mensagem</b></span>
                        </h1>
                        <p class="section-text">
                            <div class="rsvp_wrap">
                                <form class="contact-form" method="post" action=""  onsubmit="return validaMensagem(this);">
                                    <p><input type="text" name="nome" class="name" placeholder="Nome Completo:" maxlength="34"></p>
                                    <p><input type="text" name="email" class="name" placeholder="E-mail:"></p>
                                    <p>
                                        <textarea name="mensagem" class="name" placeholder="Mensagem:"></textarea>
                                    </p>
                                    <input type="hidden" value="<?php echo date('d/m/Y') ?>" name="data" />
                                    <button type="submit" name="acao-enviar-mensagem">Enviar</button>
                                    <?php
                                    if (isset($_POST['acao-enviar-mensagem'])) {
                                        $paginas = New Paginas();
                                        $paginas->mensagem();
                                    }
                                    ?>
                                </form>
                            </div>
                        </p>
                    </div> <!-- /.section_title_wrap -->
                </div>
            </section>
            <section id="important_people" style="    padding-top: 40px; padding-bottom: 40px; background: url(http://www.nossashistorias.com.br/templatesimages/bg-nossas-historias.png)#F9F7F1;">
                <div class="container">

                    <!-- .section_title_wrap -->
                    <div class="section_title_wrap">
                        <h1 class="section_title">
                            <span style="background: url(http://www.nossashistorias.com.br/templatesimages/bg-nossas-historias.png)#F9F7F1">Mensagem dos <b>Convidados</b></span>
                        </h1>
                        <p class="section-text"></p>
                    </div> <!-- /.section_title_wrap -->

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul>
                                <?php $paginas->MuralRecados(); ?>
                            </ul>
                        </div>

                    </div>
                </div>
            </section> <!-- /#important_people -->


            <!-- #gallery -->
            <section id="gallery" style="    padding-top: 40px;">
                <div class="container-fluid">

                    <!-- .section_title_wrap -->
                    <div class="section_title_wrap">
                        <h1 class="section_title">
                            <span>Nossa <b>Galeria de Fotos</b></span>
                        </h1>
                    </div> <!-- /.section_title_wrap -->

                    <div class="row-fluid">
                        <ul class="clearfix">
                            <!--INÍCIO DA GALERIA DE FOTOS-->
                            <?php $paginas->GaleriaFotos(); ?>
                            <!--FINAL DA GALERIA DE FOTOS-->
                        </ul>
                    </div>
                </div>
            </section> <!-- /#gallery -->

            <!-- <section id="gallery" style="    padding-top: 40px;">
                <div class="container-fluid">

                    <div class="section_title_wrap">
                        <h1 class="section_title">
                            <span>Instagram <b>do Evento</b></span>
                        </h1>
                    </div> 

                    <div class="row-fluid">
                        <ul class="clearfix">
                            <?php $paginas->Instagram(); ?>
                        </ul>
                    </div>
                </div>
            </section> -->


            <section id="blog" class="no-padding" style="    padding-top: 40px; padding-bottom: 40px; background: url(http://www.nossashistorias.com.br/templatesimages/bg-nossas-historias.png)#F9F7F1">
                <div class="container">
                    <div class="section_title_wrap">
                        <h1 class="section_title">
                            <span style="background: url(http://www.nossashistorias.com.br/templatesimages/bg-nossas-historias.png)#F9F7F1">Lista de <b>Presentes</b></span>

                        </h1>
                        <p class="section-text">A nossa lista de presentes foi preparada com imagens ilustrativas (presentes virtuais). Vocês podem escolher uma das várias opções que, com muita dedicação, selecionamos. Com certeza, iremos adorar o presente! Esperamos vocês na festa!</p>
                    </div>
                    <div class="row">
                        <!--INICIO DA LISTA DE PRESENTE-->
                        <?php
                        $paginas->ValePresente();
                        $paginas->ListaPresentes();
                        ?>
                        <!--FINAL DA LISTA DE PRESENTE-->
                    </div>

                    <div class="section_title_wrap">
                        <h1 class="section_title">
                            <span style="background: url(http://www.nossashistorias.com.br/templatesimages/bg-nossas-historias.png)#F9F7F1">Lista de <b>Presentes</b> em lojas físicas</span>

                        </h1>
                    </div>
                    <div class="row">
                        <?php $paginas->ListaPresentesLoja(); ?>
                    </div>
                </div>
            </section>

            <section id="rsvp">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <h1>CONFIRME SUA PRESENÇA</h1>
                            <div class="rsvp_wrap">
                                <p>Ficamos muito felizes que vocês estejam confirmando as suas presenças na nossa festa. Esperamos vocês para comemorarmos juntos! Um grande abraço!</p>

                                <form class="contact-form" method="post" action=""  onsubmit="return validaRSVP(this);">
                                    <p><input type="text" name="nome" class="name" placeholder="Nome (s) do (s) convidado (s):"></p>
                                    <p><input type="text" name="email" class="name" placeholder="E-mail:"></p>
                                    <select class="guest" name="tipo_festa">
                                        <option selected="selected" value="">Tipo de Evento:</option>
                                        <option value="religioso">Cerimônia</option>
                                        <option value="festa">Festa</option>
                                        <option value="ambos">Ambos</option>
                                    </select>
                                    <select class="guest" name="n_adultos">
                                        <option selected="selected" value="">N° de Adultos:</option>
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
                                    <select class="guest" name="n_criancas">
                                        <option selected="selected" value="">N° de Crianças:</option>
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
                                    <p>
                                        <input type="text" name="idade_criancas" class="name" placeholder="Idade das Crianças:">
                                    </p>
                                    <input type="hidden" value="<?php echo date('d/m/Y') ?>" name="data" />
                                    <button type="submit" name="acao-cadastro-convidado">Confirmar</button>
                                    <?php
                                    if (isset($_POST['acao-cadastro-convidado'])) {
                                        $paginas = New Paginas();
                                        $paginas->RSVP();
                                    }
                                    ?>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include ('inc.footer.php'); ?>

        </body>
        </html>