<?php
ob_start();
session_start();
include('inc.conexao.php');
include_once('Model.class.php');

$paginas = New Paginas();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
    <title><?php $paginas->Title($db); ?> | Lista de Presentes</title>
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
        function validaPresente(form) {

           var filtro_mail = /^.+@.+\..{2,3}$/;

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
        if (form.telefone.value == "") {
            alert("x Preencha o campo com seu telefone");
            form.telefone.focus();
            return false;
        }
        if (!filtro_mail.test(form.email.value) || form.email.value == "") {
            alert("x Preencha o campo com um e-mail válido");
            form.email.focus();
            return false;
        }
    }
</script>
<style type="text/css">
form.formRenovar button{
    background-color: #EC9007;
    color:#2D2E21;
    border:0px;
    border-radius: 5px;
}
form.formRenovar textarea{
    width: 100%;
    border-radius: 5px;
    border: 1px #e8e1d0 solid;
}
figure.pagseguro{
    width:100%;
}
.pull-left{
    width:50%;
    float:left;
}
.pull-rigth{
    width:48%;
    margin-left:10px;
    float:right;
}
#cartao_credito h3{
    width: 50%;
}
#cartao_debito h3{
    width: 50%;
}
#cartao_credito .pull-left:last-child{
    width: 48%;
    margin-left: 12px;
}
.pull-left:first-child{
    float: left;
    margin-top: 27px;
    margin-right: 1px;
}
</style>
</head>
<!--==============================header=================================-->
<body>

    <?php include ('inc.header.php'); ?>

    <div class="page_header_photo general_header">
        <div class="page_header_trans">
            <div class="page_header_title">
                <h1>CONFIRMAÇÃO E PAGAMENTO</h1>
            </div>
        </div>
    </div>

    <div class="home_bottom background-home-bottom">

        <div class="full_width_centered">

            <?php $paginas->ListaPresentesDetalhes($db); ?>

            <div class="col-md-5">
                <div class="form_content">

                    <figure class="pagseguro">
                        <img src="https://d26lpennugtm8s.cloudfront.net/stores/097/323/rte/moip_pagamento_seguro.jpg" width="400"/>
                    </figure>
                    <?php require_once('../include/pagamento.php'); ?>

                </div> 
            </div>

            <div class="clear"></div>
        </div>
    </div>

    <?php include ('inc.footer.php'); ?>

</body>
</html>