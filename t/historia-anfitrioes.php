<?php
ini_set("display_errors", "Off");
include('include/session.php');
$session = new VerificaSession();
?>
<?php $title = 'Layout Casamento 01 - Nossas Histórias'; ?>
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

                        <div class="title"><a href="">Marcelo &amp; Nathália</a></div>
                        <div class="description"><span class="swirl_left"><span class="swirl_right">25 outubro 2015 - Faltam 60 dias para este evento.</span></span></div>

                    </div><!-- End of Header-->


                    <div class="pages_title">
                        <h2>Minhas <span>Histórias</span></h2>
                    </div> 

                    <div class="content">

                        <div class="left_full">
                            <h2>História dos Anfitriões</h2>
                            <p class="texto-justificado">
                                <a href="images/slider/slide1.jpg" rel="prettyPhoto[gallery]" title="Lorem ipsum sit amet"><img src="images/pic_left.jpg" alt="" title="" border="0" class="left_pic" /></a>
                                Compartilhe a sua história com seus amigos, neste momento especial! Se quiser, poderá inserir fotos (galeria) e vídeos e faremos uma linha do tempo onde o anfitrião montará sua linha do tempo.<br/><br/>
                            </p>
                        </div>

                        <div class="clear"></div>

                        <div class="pages_title">
                            <h2>Minha <span>Galeria de Fotos</span></h2>
                        </div> 

                        <div class="content">

                            <ul class="portfolio_items">

                                <li class="gallery13 ceremony" data-id="id-1">
                                    <img src="images/gallery_frame.png" alt="" title="" border="0" class="frame" />
                                    <img src="images/gallerythumb1.jpg" alt="" title="" border="0" class="thumb" />
                                    <span class="portfolio_caption">
                                        <a href="images/slider/slide1.jpg" rel="prettyPhoto[gallery]" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" border="0" /></a>
                                        <a href="#"><img src="images/like.png" alt="" title="" border="0" /></a>
                                    </span>  
                                    <h3>Exemplo de foto 01</h3>
                                </li>

                                <li class="gallery13 wedding" data-id="id-2">
                                    <img src="images/gallery_frame.png" alt="" title="" border="0" class="frame" />
                                    <img src="images/gallerythumb2.jpg" alt="" title="" border="0" class="thumb" />
                                    <span class="portfolio_caption">
                                        <a href="images/slider/slide1.jpg" rel="prettyPhoto[gallery]" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" border="0" /></a>
                                        <a href="#"><img src="images/like.png" alt="" title="" border="0" /></a>
                                    </span>  
                                    <h3>Exemplo de foto 02</h3>
                                </li>

                                <li class="gallery13 ceremony" data-id="id-3">
                                    <img src="images/gallery_frame.png" alt="" title="" border="0" class="frame" />
                                    <img src="images/gallerythumb3.jpg" alt="" title="" border="0" class="thumb" />
                                    <span class="portfolio_caption">
                                        <a href="images/slider/slide1.jpg" rel="prettyPhoto[gallery]" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" border="0" /></a>
                                        <a href="#"><img src="images/like.png" alt="" title="" border="0" /></a>
                                    </span>  
                                    <h3>Exemplo de foto 03</h3>
                                </li>


                                <li class="gallery13 wedding" data-id="id-4">
                                    <img src="images/gallery_frame.png" alt="" title="" border="0" class="frame" />
                                    <img src="images/gallerythumb4.jpg" alt="" title="" border="0" class="thumb" />
                                    <span class="portfolio_caption">
                                        <a href="images/slider/slide1.jpg" rel="prettyPhoto[gallery]" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" border="0" /></a>
                                        <a href="#"><img src="images/like.png" alt="" title="" border="0" /></a>
                                    </span>  
                                    <h3>Exemplo de foto 04</h3>
                                </li>

                                <li class="gallery13 honeymoon" data-id="id-5">
                                    <img src="images/gallery_frame.png" alt="" title="" border="0" class="frame" />
                                    <img src="images/gallerythumb5.jpg" alt="" title="" border="0" class="thumb" />
                                    <span class="portfolio_caption">
                                        <a href="images/slider/slide1.jpg" rel="prettyPhoto[gallery]" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" border="0" /></a>
                                        <a href="#"><img src="images/like.png" alt="" title="" border="0" /></a>
                                    </span>  
                                    <h3>Exemplo de foto 05</h3>
                                </li>

                                <li class="gallery13 honeymoon" data-id="id-6">
                                    <img src="images/gallery_frame.png" alt="" title="" border="0" class="frame" />
                                    <img src="images/gallerythumb6.jpg" alt="" title="" border="0" class="thumb" />
                                    <span class="portfolio_caption">
                                        <a href="images/slider/slide1.jpg" rel="prettyPhoto[gallery]" title="Lorem ipsum sit amet"><img src="images/zoom.png" alt="" title="" border="0" /></a>
                                        <a href="#"><img src="images/like.png" alt="" title="" border="0" /></a>
                                    </span>  
                                    <h3>Exemplo de foto 06</h3>
                                </li>
                            </ul>

                        </div>
                        <div class="pages_title">
                            <h2>Minha <span>Linha do Tempo</span></h2>
                        </div> 

                        <div class="container" style="margin-top: 80px;">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Titulo / Ano / Foto</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <img src="images/pic_left.jpg" alt="" title="" border="0" class="left_pic" />
                                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.
                                                Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <img src="images/pic_left.jpg" alt="" title="" border="0" class="left_pic" />
                                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.
                                                Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                            <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere
                                                pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <img src="images/pic_left.jpg" alt="" title="" border="0" class="left_pic" />
                                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.
                                                Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>



                        <div class="clear"></div>

                        <div class="divider"></div>

                        <div class="clear"></div>

                        <div class="left13 section_home">
                            <h2>Galeria de <span>Fotos</span></h2>
                            <a href=""><img src="./images/image_13.jpg" alt="" title=""></a>
                            <!--<p>Ficamos satisfeitos com o trabalho da <strong>Falcon5M,</strong> que desenvolveu umsitemoderno e que nos dá ampla autonomia para administrá-lo de forma ágil e prática. Kleber e Guilherme sempre estiveram à disposição para trocar ideias em busca de um resultado que atendesse nossas necessidades.</p>-->
                            <a href="" class="section_more"><span class="swirl_left"><span class="swirl_right">» veja as fotos</span></span></a>
                        </div>

                        <div class="left13 section_home">
                            <h2>Lista de <span>Convidados</span></h2>
                            <a href=""><img src="./images/image_13_2.jpg" alt="" title=""></a>
                            <!--<p>Ficamos satisfeitos com o trabalho da <strong>Falcon5M,</strong> que desenvolveu umsitemoderno e que nos dá ampla autonomia para administrá-lo de forma ágil e prática. Kleber e Guilherme sempre estiveram à disposição para trocar ideias em busca de um resultado que atendesse nossas necessidades.</p>-->
                            <a href="" class="section_more"><span class="swirl_left"><span class="swirl_right">» veja a lista de convidados</span></span></a>
                        </div>

                        <div class="left13 section_home">
                            <h2>Lista de <span>Presentes</span></h2>
                            <a href=""><img src="./images/image_13_3.jpg" alt="" title=""></a>
                            <!--<p>Ficamos satisfeitos com o trabalho da <strong>Falcon5M,</strong> que desenvolveu umsitemoderno e que nos dá ampla autonomia para administrá-lo de forma ágil e prática. Kleber e Guilherme sempre estiveram à disposição para trocar ideias em busca de um resultado que atendesse nossas necessidades.</p>-->
                            <a href="" class="section_more"><span class="swirl_left"><span class="swirl_right">» veja a lista de presentes</span></span></a>
                        </div>

                    </div>

                    <div class="clear"></div> 

                </div>

            </div>
        </div>

        <?php include("include/footer.php"); ?>

    </body>
</html>

