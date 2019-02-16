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
                    <h1>MINHAS HISTÓRIAS</h1>
                </div>
            </div>
        </div>
        <div class="about_content">
            <div class="full_width_centered">
                <div class="left_full">
                    <p style="text-align: center;">Compartilhe a sua história com seus amigos, neste momento especial! Se quiser, poderá inserir fotos (galeria) e vídeos. E faremos uma linha do tempo onde o anfitrião montará sua linha do tempo.</p>
                </div>

                <div class="clear"></div>
            </div>  <!--end of full width-->
        </div> <!--end of about content-->

        <div class="page_content background-nossas-historias">
            <div class="full_width_centered">
                <h3 class="form_subtitle coloracao-dos-titulos">GALERIA DE FOTOS DO ANFITRIÃO</h3>
                <div class="wrapper">
                    <div class="topbar">
                        <h2 id="name"></h2>
                        <div id="close" class="back">VOLTAR</div>
                    </div>

                    <ul id="tp-grid" class="tp-grid">

                        <!-- Wedding -->
                        <li data-pile="galeria">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-1" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-11" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_4.jpg" /></a>

                        </li>
                        <li data-pile="galeria">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-1" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-11" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_2.jpg" /></a>

                        </li>
                        <li data-pile="galeria">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-1" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-11" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_9.jpg" /></a>

                        </li>
                        <li data-pile="galeria">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-1" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-11" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_5.jpg" /></a>

                        </li>
                        <li data-pile="galeria">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-1" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-11" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_10.jpg" /></a>

                        </li>
                        <li data-pile="galeria">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-1" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-11" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13.jpg" /></a>

                        </li>

                        <!-- Honeymoon -->
                        <li data-pile="galeria">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-2" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-21" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_4.jpg" /></a>

                        </li>
                        <li data-pile="galeria">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-2" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-21" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_11.jpg" /></a>

                        </li>
                        <li data-pile="galeria1">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-2" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-21" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_7.jpg" /></a>

                        </li>

                        <!-- Ceremony -->
                        <li data-pile="galeria1">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-3" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-31" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_3.jpg" /></a>

                        </li>
                        <li data-pile="galeria1">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-3" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-31" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_10.jpg" /></a>

                        </li>
                        <li data-pile="galeria1">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-3" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-31" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_4.jpg" /></a>

                        </li>

                        <!-- Bachelor Party -->
                        <li data-pile="galeria1">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-4" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-41" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_2.jpg" /></a>

                        </li>
                        <li data-pile="galeria1">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-4" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-41" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_3.jpg" /></a>

                        </li>
                        <li data-pile="galeria1">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-4" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-41" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_6.jpg" /></a>

                        </li>

                        <!-- Bridal Shower -->
                        <li data-pile="galeria2">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-5" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-51" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_8.jpg" /></a>

                        </li>
                        <li data-pile="galeria2">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-5" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-51" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_2.jpg" /></a>

                        </li>
                        <li data-pile="galeria2">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-5" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-51" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_9.jpg" /></a>

                        </li>
                        <li data-pile="galeria2">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-5" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-51" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_4.jpg" /></a>

                        </li>
                        <li data-pile="galeria2">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-5" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-51" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_5.jpg" /></a>

                        </li>

                        <!-- Trash the Dress -->
                        <li data-pile="galeria2">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-6" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-61" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_5.jpg" /></a>

                        </li>
                        <li data-pile="galeria2">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-6" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-61" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_8.jpg" /></a>

                        </li>
                        <li data-pile="galeria2">

                            <span class="tp-info">
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/twitter.png" alt="" title="" /></a>
                                <a href="images/lightbox.jpg" rel="gallery-6" class="swipebox" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" /></a>
                                <a href="#" title="Lorem ipsum sit amet"><img src="images/social/pinterest.png" alt="" title="" /></a>
                            </span>
                            <a href="images/lightbox.jpg" rel="gallery-61" class="swipebox" title="Lorem ipsum sit amet"><img src="images/image13_2.jpg" /></a>

                        </li>

                    </ul>
                </div>  

                <div class="clear"></div>
            </div>  <!--end of full width-->
        </div> <!--end of about content-->

        <div class="container">
            <div class="full_width_centered">
                <div class="page-header">
                    <h3 class="form_subtitle coloracao-dos-titulos">MINHA LINHA DO TEMPO</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title coloracao-dos-titulos">Mussum ipsum cacilds</h4>
                            </div>
                            <div class="timeline-body">
                                <div class="col-md-4" style="float: left">
                                    <img src="images/image13_2.jpg" width="200" height="150"/>
                                </div>
                                <div class="col-md-8">
                                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.
                                        Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title coloracao-dos-titulos">Mussum ipsum cacilds</h4>
                            </div>
                            <div class="timeline-body">
                                <div class="col-md-4" style="float: left">
                                    <img src="images/image13_2.jpg" width="200" height="150"/>
                                </div>
                                <div class="col-md-8">
                                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.
                                        Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title coloracao-dos-titulos">Mussum ipsum cacilds</h4>
                            </div>
                            <div class="timeline-body">
                                <div class="col-md-4" style="float: left">
                                    <img src="images/image13_2.jpg" width="200" height="150"/>
                                </div>
                                <div class="col-md-8">
                                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.
                                        Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>



        <?php include ('include/footer.php'); ?>

    </body>
</html>