<?php
include('inc.conexao.php');
include_once('Model.class.php');
$paginas = New Paginas();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <title><?php $paginas->Title(); ?> | Sobre o Evento</title>
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
                    alert("x Selecione ocampo mensagem");
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
    <body>
        <?php include ('inc.header.php'); ?>
        <div class="page_header_photo general_header">
            <div class="page_header_trans">
                <div class="page_header_title">
                    <h1>SOBRE O EVENTO</h1>
                </div>
            </div>
        </div>
        
        <div class="about_content">
            <div class="full_width_centered">
                <!--<h2>SOBRE O EVENTO</h2>-->
                <div class="left_full">
                    <p style="text-align: center;">
                        <?php $paginas->SobreEvento(); ?>
                    </p>
                </div>

                <div class="clear"></div>
            </div>   
        </div> 
        
        <div class="about_content">
            <div class="full_width_centered">
                <h2>MINHAS HISTÓRIAS</h2>
                <div class="left_full">
                    <p style="text-align: center;">
                        <?php $paginas->NossasHistorias(); ?>
                    </p>
                </div>

                <div class="clear"></div>
            </div>   
        </div> 

        <div class="about_content">
            <div class="full_width_centered">
                <h2>HOMENAGEADOS</h2>
                <div class="left_full">
                    <p style="text-align: center;">
                        <?php $paginas->Homenageados(); ?>
                    </p>
                </div>

                <div class="clear"></div>
            </div>   
        </div> 

        <?php include ('inc.footer.php'); ?>

    </body>
</html>