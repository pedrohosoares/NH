<?php
require_once('conexao.php');
function secure() {
	$_GET = array_map('trim', $_GET);
	$_POST = array_map('trim', $_POST);
	$_COOKIE = array_map('trim', $_COOKIE);
	$_REQUEST = array_map('trim', $_REQUEST);
	if(get_magic_quotes_gpc()) {
		$_GET = array_map('stripslashes', $_GET);
		$_POST = array_map('stripslashes', $_POST);
		$_COOKIE = array_map('stripslashes', $_COOKIE);
		$_REQUEST = array_map('stripslashes', $_REQUEST);
	}
	$_GET = array_map(array($db,'real_escape_string'), $_GET);
	$_POST = array_map(array($db,'real_escape_string'), $_POST);
	$_COOKIE = array_map(array($db,'real_escape_string'), $_COOKIE);
	$_REQUEST = array_map(array($db,'real_escape_string'), $_REQUEST);
}
?>