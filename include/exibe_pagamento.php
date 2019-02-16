<?php
$credito = isset($_GET['credito'])?$_GET['credito']:"";
$debito = isset($_GET['debito'])?$_GET['debito']:"";
$boleto_link = isset($_GET['boleto_link'])?$_GET['boleto_link']:"";
$numero_boleto = isset($_GET['numero_boleto'])?$_GET['numero_boleto']:"";
$resposta = isset($_GET['resposta'])?$_GET['resposta']:"";
if(!empty($credito)){
    echo "<br /><h2>Pagamento realizado com sucesso! Em breve iremos autenticar o mesmo!</h2><br />";
}
if(!empty($debito)){
    echo "<br /><h2>Pagamento realizado com sucesso! Em breve iremos autenticar o mesmo!</h2><br />";
}
if(!empty($numero_boleto)){
    echo "<br /><h2>Dados do Boleto</h2><br />";
    echo "Número do Boleto: ".$numero_boleto."<br />";
    echo "Link para ver o boleto: <a href='".$boleto_link."' target='_blank'>Ver Boleto Online</a><br />";
    echo "Baixar Boleto: <a href='".$boleto_link."' download>Baixar Boleto</a><br />";
    ?>
    <br />
    <?php
}
?>