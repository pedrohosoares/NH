<div class="title_container">

    <div class="title_front">EVENTO DE</div>
    <div class="love_birds"><img src="http://www.nossashistorias.com.br/templatesimages/icones/aniversario.png" alt="" title=""/></div>
    <div class="title"><?php $paginas->NomeAnfitrioes($db); ?></div>
    <?php $paginas->DataHorario($db); ?>

</div>

<div class="slider_container">
    <div class="slider_trans_black"></div>
    <div id="random">
        <div style="background-image: url('<?php $paginas->Banner($db); ?>');"></div>
    </div>
</div>