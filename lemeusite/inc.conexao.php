<?php
/*
$conexao = mysql_connect("mysql.nossashistorias.com.br","nossashistoria01", "nshis14toria") or die(mysql_error());
$banco = mysql_select_db("nossashistoria01") or die(mysql_error());
*/

$conexao = mysqli_connect("localhost","root", "") or die(mysqli_error());
$banco = mysqli_select_db("nossashistoria01") or die(mysqli_error());
?>
