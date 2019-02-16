<?php
ini_set("display_errors", "Off");
include('include/session.php');
$session = new VerificaSession();
?>
<?php $title = 'Layout Formatura 02 - Nossas Histórias'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <title><?php echo $title; ?></title>
        <?php include ('include/head.php'); ?>
        <!--[if lt IE 8]>
          <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
              <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
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

                <?php include("include/header.php"); ?>

                <div id="center_container">

                    <div id="header">

                        <div class="title"><a href="">Formatura da Nathália</a></div>
                        <div class="description"><span class="swirl_left"><span class="swirl_right">25 outubro 2015 - Faltam 60 dias para este evento.</span></span></div>

                    </div><!-- End of Header-->

                    <div class="pages_title">
                        <h2>Meus <span>Homenageados</span></h2>
                    </div>
                    
                    <div class="content">
                        <div class="left_full section_home">
                            <p class="texto-justificado">
                                Homenageie as pessoas que abrilhantarão ainda mais a sua festa. Se quiser, poderá inserir fotos e vídeos.<br/><br/>
                            </p>
                        </div>
                    </div>
                    <div class="content">


                        <div class="left13 section_home">
                            <h2>Homenageado(a) <span>1</span></h2>
                            <a href=""><img src="./images/content/content1.jpg" alt="" title=""></a>
                            <p class="texto-justificado">Ficamos satisfeitos com o trabalho da <strong>Falcon5M,</strong> que desenvolveu umsitemoderno e que nos dá ampla autonomia para administrá-lo de forma ágil e prática. Kleber e Guilherme sempre estiveram à disposição para trocar ideias em busca de um resultado que atendesse nossas necessidades.</p>
                            <!--<a href="" class="section_more"><span class="swirl_left"><span class="swirl_right">» veja as fotos</span></span></a>-->
                        </div>

                        <div class="left13 section_home">
                            <h2>Homenageado(a) <span>2</span></h2>
                           <a href=""><img src="./images/content/content2.jpg" alt="" title=""></a>
                            <p class="texto-justificado">Ficamos satisfeitos com o trabalho da <strong>Falcon5M,</strong> que desenvolveu umsitemoderno e que nos dá ampla autonomia para administrá-lo de forma ágil e prática. Kleber e Guilherme sempre estiveram à disposição para trocar ideias em busca de um resultado que atendesse nossas necessidades.</p>
                            <!--<a href="" class="section_more"><span class="swirl_left"><span class="swirl_right">» veja a lista de convidados</span></span></a>-->
                        </div>

                        <div class="left13 section_home">
                            <h2>Homenageado(a) <span>3</span></h2>
                            <a href=""><img src="./images/content/content3.jpg" alt="" title=""></a>
                            <p class="texto-justificado">Ficamos satisfeitos com o trabalho da <strong>Falcon5M,</strong> que desenvolveu umsitemoderno e que nos dá ampla autonomia para administrá-lo de forma ágil e prática. Kleber e Guilherme sempre estiveram à disposição para trocar ideias em busca de um resultado que atendesse nossas necessidades.</p>
                            <!--<a href="" class="section_more"><span class="swirl_left"><span class="swirl_right">» veja a lista de presentes</span></span></a>;-->
                        </div>

                        <!--<div class="name_divider">NS</div>-->         

                    </div>
                    <div class="content">
                        <div class="pages_title">
                            <h2>Você pode incluir outro <span>Homenageado</span></h2>
                        </div>

                        <div class="form_content">

                            <form id="form1" method="post" action="">                
                                <div class="form">
                                    <div class="form_row">
                                        <label>Nome:</label>
                                        <input type="text" class="form_input" name="Nome" />
                                    </div>
                                    <div class="form_row">
                                        <label>Mensagem:</label>
                                        <textarea class="form_textarea" name="comment"></textarea>
                                    </div>
                                    <div class="form_row">
                                        <input type="submit" class="form_submit_contact" value="Enviar" />
                                    </div> 
                                </div>

                            </form>
                        </div>       

                    </div>

                    <div class="clear"></div> 

                </div>

            </div>
        </div>

        <?php include("include/footer.php"); ?>

    </body>
</html>