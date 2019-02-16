<?php
require_once('../../include/conexao.php');
$cx = new Conexao();
$banco = $cx->getBanco();
$db = $banco;

//$conexao = mysql_connect("mysql.nossashistorias.com.br","nossashistoria01", "nshis14toria") or die(mysql_error());
//$banco = mysql_select_db("nossashistoria01") or die(mysql_error());
?>
