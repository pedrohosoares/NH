<?php
$_GET = (isset($_GET) and !empty($_GET))?$_GET:exit;
$nomesite = isset($_GET['nomesite'])?$_GET['nomesite']:exit;
require_once('../../include/conexao.php');
$cx = new Conexao();
$db = $cx->getBanco();
$site = $db->query("SELECT * FROM nh_sites WHERE nome='$nomesite'");
if($site->num_rows == 0){exit;}
$site = $site->fetch_assoc();
#DADOS DO SITE
$id = $site['id'];
$id_evento = $site['id_evento'];
$id_template = $site['id_template'];
$nome = $site['nome'];
#DADOS DA CATEGORIA
$categoria = $db->query("SELECT id_categoria FROM etb_eventos WHERE id='$id_evento'");
if($categoria->num_rows == 0){exit;}
$categoria = $categoria->fetch_assoc();
$categoria = $categoria['id_categoria'];
?>
<iframe style="width: 100%;height: 100%;margin:0px;padding:0px;" src="../templates/categoria<?php echo $categoria; ?>/<?php echo $id_template; ?>/index.php"></iframe>
