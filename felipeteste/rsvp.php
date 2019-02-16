<?php
include('inc.conexao.php');
include_once('Model.class.php');
$paginas = New Paginas();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
    <title><?php $paginas->Title(); ?> | Confirmar Presença</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
    <link rel="stylesheet" type="text/css" media="all" href="css.style.css?key=<?php echo time(); ?>" />
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


</head>
<!--==============================header=================================-->
<body>

    <?php include ('inc.header.php'); ?>

    <div class="page_header_photo general_header">
        <div class="page_header_trans">
            <div class="page_header_title">
                <h1>R.S.V.P.</h1>
            </div>
        </div>
    </div>
    <div class="home_bottom background-home-bottom" style="background: #F9F7F1 !important; padding: 60px 0px 15px !important;">
        <div class="full_width_centered" style="padding: 0">
            <div class='caixas-homenageados'>
                <span class="swirl_left">
                    <span class="swirl_right">
                        <h2 style="margin: -20px 0px 15px;">Confirmação de Presença</h2>
                    </span>
                </span>
                <p class="texto-justificado">Ficamos muito felizes que vocês estejam confirmando as suas presenças na nossa festa. Esperamos vocês para comemorarmos juntos! Um grande abraço!</p>
            </div>
            <div class="clear"></div>
        </div>  <!--end of full width-->
    </div> <!--end of about content-->

    <div class="page_content">
        <div class="full_width_centered"  style="padding: 0">
            <h2>CONFIRME SUA <strong class="color-strong">PRESENÇA</strong></h2>

            <div class="page_content">
                <div class="full_width_centered"  style="padding: 0">

                    <div class="form_content">
                        <h3 class="form_toptitle" id="Note"></h3>
                        <form id="ContactForm" method="post" action="" onsubmit="return validaRSVP(this);">

                            <!-- <h2>Confirmar <strong class="color-strong">Presença</strong></h2> -->

                            <div class="form_row_full">
                                <label>Nome (s) do (s) convidado (s):</label>
                                <input type="text" class="form_input required" name="nome" id="contactname" />
                            </div>
                            <div class="form_row_full">
                                <label><i>E-MAIL</i>:</label>
                                <input type="text" class="form_input required" name="email" id="contactemail" />
                            </div>
                            <div class="form_row_full">
                                <label>TIPO DE EVENTO:</label>
                                <select name="tipo_festa" class="form-input required" id="contactname">
                                    <option selected="selected" value="">Selecione...</option>
                                    <option value="religioso">Cerimônia</option>
                                    <option value="festa">Festa</option>
                                    <option value="ambos">Ambos</option>
                                </select>
                            </div>
                            <div class="form_row_full">
                                <label>N° DE ADULTOS:</label>
                                <select name="n_adultos" class="form-input required" id="contactname">
                                    <option selected="selected" value="">Selecione...</option>
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

                            <div class="form_row_full">
                                <label>N° DE CRIANÇAS:</label>
                                <select name="n_criancas" class="form-input required" id="contactname">
                                    <option selected="selected" value="">Selecione...</option>
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

                            <div class="form_row_full">
                                <label>IDADE DAS CRIANÇAS:</label>
                                <input type="text" class="form_input required" name="idade_criancas" id="contactphone" />
                            </div>

                            <input type="hidden" value="<?php echo date('d/m/Y'); ?>" name="data" />

                            <div class="form_row">
                                <input type="submit" name="acao-cadastro-convidado" class="form_submit_contact" id="submit" value="CONFIRMAR" />
                            </div>
                            <?php
                            if (isset($_POST['acao-cadastro-convidado'])) {
                                $paginas = New Paginas();
                                $paginas->RSVP();
                            }
                            ?>

                        </form>
                    </div> 

                    <div class="clear"></div>
                </div>  <!--end of full width-->
            </div>            

            <div class="clear"></div>
        </div>  <!--end of full width-->
    </div> <!--end of about content-->



    <?php include ('inc.footer.php'); ?>

</body>
</html>