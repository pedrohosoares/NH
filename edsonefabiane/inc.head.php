<?php
//include('conexao.php');
include_once('model/cadastro/FormCadastro.class.php');
include_once('model/login/FormLogin.class.php');
include_once('model/cardapio/Cardapio.class.php');
include_once('model/alertas/Alertas.class.php');
include_once('model/seguranca/Seguranca.class.php');
include_once('model/paginas/Paginas.class.php');
$seguranca = new Seguranca();
$seguranca->secure();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
<meta name="author" content="FamousThemes" />
<meta name="description" content="Get in the spotlight" />
<meta name="keywords" content="premium css templates, premium wordpress themes, famous themes, themeforest" />
<title>Layout Casamento 03 - Nossas Histórias</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css<?php echo time(); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="colors/green.css" />
<link rel="stylesheet" href="css/stapel.css">
<link type="text/css" rel="stylesheet" href="css/swipebox.css" />
<link rel="stylesheet" href="css/carousel.css">
<link rel="icon" href="http://www.nossashistorias.com.br/templatesimages/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Clicker+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<script src="js/modernizr.custom.63321.js"></script>
