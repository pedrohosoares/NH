<div class="footer">
    <div class="full_width_centered">
        <div class="footer_sign">
            <span class="swirl_left_transparent">
                <span class="swirl_right_transparent">
                    <img src="http://www.nossashistorias.com.br/templatesimages/icones/formatura.png" alt="" title="" />
                </span>
            </span>
        </div>

        <nav class="footer_menu">
            <ul>
                <li><a href="index" class="selected">HOME</a></li>
                <li><a href="evento">SOBRE O EVENTO</a></li>
                <!--<li><a href="instagram">INSTAGRAM</a></li>-->
                <li><a href="mural-recados">MENSAGEM DE CONVIDADOS</a></li>
                <li><a href="galeria-de-fotos">GALERIA DE FOTOS</a></li>
                <li><a href="lista-de-presentes">LISTA DE PRESENTES</a></li>
                <li><a href="rsvp">R.S.V.P.</a></li>
                <li><a onClick="jQuery('html, body').animate({scrollTop: 0}, 'slow');"  href="javascript:void(0);" class="gotop" title="Go on top">TOPO</a> </li>
            </ul>
        </nav>
        <div class="footer_copyright">Copyright <script type="text/javascript">document.write(new Date().getFullYear());</script> Todos os Direitos Reservados para <a href="http://www.nossashistorias.com.br" target="_blank">Nossas Histórias</a></div>
    </div>
</div>

</div>
<!-- jQuery -->
<script type="text/javascript" src="js.jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js.lightbox-plus-jquery.min.js"></script>
<!-- SLIDER -->
<script type="text/javascript" src="js.jquery.skippr.js"></script>
<script type="text/javascript" src="js.effects.js"></script>
<script type="text/javascript" src="js.jquery.stapel.js"></script>
<script src="js.jquery.maskMoney.js"></script>

<script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $(".moeda").maskMoney({prefix: 'R$ ', allowNegative: true, thousands: '.', decimal: ',', affixesStay: false});
            });
</script>
<script>
            $(document).ready(function () {
                "use strict";
                $("#random").skippr({
                    navType: 'bubble',
                    transition: 'fade',
                    autoPlay: true,
                    autoPlayDuration: 4000,
                    speed: 1000,
                    arrows: false
                });
                $("#weddingcarousel").owlCarousel({
                    items: 4,
                    itemsScaleUp: true,
                    navigationText: ["prev", "next"]
                })
            });
</script>
<script type="text/javascript">
    $(function () {
        "use strict";
        var $grid = $('#tp-grid'),
                $name = $('#name'),
                $close = $('#close'),
                $loader = $('<div class="loader"><i></i><i></i><i></i><i></i><i></i><i></i><span>Loading...</span></div>').insertBefore($grid),
                stapel = $grid.stapel({
                    onLoad: function () {
                        $loader.remove();
                    },
                    onBeforeOpen: function (pileName) {
                        $name.html(pileName);
                    },
                    onAfterOpen: function (pileName) {
                        $close.show();
                    }
                });

        $close.on('click', function () {
            $close.hide();
            $name.empty();
            stapel.closePile();
        });

    });
</script>
<script type="text/javascript" src="js.jquery.swipebox.js"></script>
<script src="js.owl.carousel.js"></script>
<!-- DropDownMenu -->
<script type="text/javascript" src="js.menu.js"></script>
<!--<script type="text/javascript" src="js.effects.js"></script>-->
<script type="text/javascript" src="js.jquery.arctext.js"></script>
<script type="text/javascript" src="js.jquery.countdown.js"></script>
<script type="text/javascript">
    var $ = jQuery.noConflict();
    $(window).load(function () {
        "use strict";
        var $titlefront = $('.title_front').hide();
        var $titleunder = $('.title_under').hide();
        var $bestman = $('.bestman span').hide();
        var $footernames = $('.footer_names').hide();

        $titlefront.show().arctext({radius: 250});
        $titleunder.show().arctext({radius: 180, dir: -1});
        $bestman.show().arctext({radius: 80});
        $footernames.show().arctext({radius: 120, dir: -1});

        $('#defaultCountdown').countdown({until: new Date(2016, 8 - 1, 20, 15), format: 'y-o-d-h'});

    });
</script>
<script type="text/javascript">
    var main_menu = new main_menu.dd("main_menu");
    main_menu.init("main_menu", "menuhover");
</script>