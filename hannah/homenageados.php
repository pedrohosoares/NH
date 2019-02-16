<?php
ini_set("display_errors", "Off");
include('include/session.php');
$session = new VerificaSession();
?>
<?php $title = 'Layout Casamento 03 - Nossas Histórias'; ?>
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
    <body style="margin-top: -26px;">
        <?php include ('include/header.php'); ?>
        <div class="page_header_photo general_header">
            <div class="page_header_trans">
                <div class="page_header_title">
                    <h1>HOMENAGEADOS</h1>
                </div>
            </div>
        </div>
        <div class="about_content">
            <div class="full_width_centered">
                <div class="left_full">
                    <p style="text-align: center;">Homenageie as pessoas que abrilhantarão ainda mais a sua festa. Se quiser, poderá inserir fotos e vídeos.
                </div>

                <div class="clear"></div>
            </div>  <!--end of full width-->
        </div> <!--end of about content-->
        <div class="carousel_container"> 
            
            <div class="carousel_container_image">
                
                <div class="full_width_carousel">
                    <h3 class="form_subtitle" style="color: #FFF;">HOMENAGEADOS</h3>
                    <div id="weddingcarousel" class="owl-carousel">
                        <div class="left14"><img src="images/image_14.jpg" alt="" title="" /><h3>MATHEUS SOUZA</h3></div>
                        <div class="left14"><img src="images/image_14_3.jpg" alt="" title="" /><h3>ANA CAROLINA</h3></div>
                        <div class="left14"><img src="images/image_14_2.jpg" alt="" title="" /><h3>PATRICIA MOREIRA</h3></div>
                        <div class="left14_last"><img src="images/image_14_6.jpg" alt="" title="" /><h3>KLEBER KAUCH</h3></div>
                        <div class="left14"><img src="images/image_14_5.jpg" alt="" title="" /><h3>GUILHERME ORESTES</h3></div>
                        <div class="left14"><img src="images/image_14_3.jpg" alt="" title="" /><h3>ANA CAROLINA</h3></div>
                        <div class="left14"><img src="images/image_14_7.jpg" alt="" title="" /><h3>BRUNA FABRA</h3></div>
                        <div class="left14_last"><img src="images/image_14_8.jpg" alt="" title="" /><h3>SHEPHANIE CALÇADA</h3></div>
                    </div>   
                </div>
            </div> 
        </div>
        
        <div class="page_content">
            <div class="full_width_centered">

                <div class="form_content">
                    <h3 class="form_toptitle" id="Note"></h3>
                    <form id="ContactForm" method="post" action="#">

                        <h3 class="form_subtitle">VOCÊ PODE ADICIONAR MAIS UM CONVIDADO</h3>

                        <div class="form_row_full">
                            <label>NOME</label>
                            <input type="text" class="form_input required" name="contactname" id="contactname" />
                        </div>
                        <div class="form_row_full">
                            <label>MENSAGEM</label>
                            <textarea class="form_textarea_full" name="contactcomments" id="contactcomments"></textarea>
                        </div>
                        <div class="form_row">
                            <input type="submit" name="submit" class="form_submit_contact" id="submit" value="ENVIAR" />
                            <input class="" type="hidden" name="to"  value="famousthemes@gmail.com" />
                            <input class="" type="hidden" name="subject" value="Contact form message" />
                            <label id="loader" style="display:none;"><img src="images/loader.gif" alt="Loading..." id="LoadingGraphic" /></label> 

                        </div>

                    </form>
                </div> 

                <div class="clear"></div>
            </div>  <!--end of full width-->
        </div> <!--end of page content--> 

        <?php include ('include/footer.php'); ?>

    </body>
</html>