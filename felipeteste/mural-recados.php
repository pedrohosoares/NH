<?php
include('inc.conexao.php');
include_once('Model.class.php');
$paginas = New Paginas();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
    <title><?php $paginas->Title(); ?> | Mural de Recados</title>
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

</head>
<!--==============================header=================================-->
<body>

    <?php include ('inc.header.php'); ?>

    <div class="page_header_photo general_header">
        <div class="page_header_trans">
            <div class="page_header_title">
                <h1>MENSAGEM DOS CONVIDADOS</h1>
            </div>
        </div>
    </div>

    <div class="about_content" style="background: #F9F7F1;">
        <div class="full_width_centered">
            <h2>ENVIE SUA <strong class="color-strong">MENSAGEM</strong></h2>
            <div class="left_full">
                <div class="form_content">
                    <h3 class="form_toptitle" id="Note"></h3>
                    <form id="ContactForm" method="post" action="" onsubmit="return validaMensagem(this);">

                        <div class="form_row_full">
                            <label>NOME COMPLETO:</label>
                            <input type="text" class="form_input required" name="nome" id="contactname" maxlength="34"/>
                        </div>
                        <div class="form_row_full">
                            <label><i>E-MAIL</i>:</label>
                            <input type="text" class="form_input required" name="email" id="contactemail" />
                        </div>
                        <div class="form_row_full">
                            <label>MENSAGEM:</label>
                            <textarea class="form_textarea_full" name="mensagem"></textarea>
                        </div>
                        <input type="hidden" value="<?php echo date('d/m/Y'); ?>" name="data" />

                        <div class="form_row">
                            <input type="submit" name="acao-enviar-mensagem" class="form_submit_contact" id="submit" value="ENVIAR" />
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

            <div class="clear"></div>
        </div>   
    </div> 
    <div class="page_content">
        <div class="full_width_centered">
            <h2><strong class="color-strong">MENSAGENS</strong></h2>
            <?php $paginas->MuralRecados(); ?>
            <div class="clear"></div>
        </div> 
    </div> 

    <?php include ('inc.footer.php'); ?>

</body>
</html>