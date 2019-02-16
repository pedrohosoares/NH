<?php
//ini_set("display_errors", "Off");
if(!isset($_GET['id'])){exit;}
include_once('../../user/model/Pagamento/Pagamento.class.php');
include_once('../../user/moip/vendor/autoload.php');
$pagamento = new Pagamento();
$pagamento->setTipo('presente');
//$pagamento->validacaoFormulario();
if(isset($_GET['id']) and !empty($_GET['id'])){
	$id_presente = $_GET['id'];
	$pagamento->setIdPresente($id_presente);
	if(!is_numeric($id_presente)){
		$pagamento->setProduto('Vale Presente NH');
	}
}
$pagamento->iniciaMoip($db);
if(!empty($_POST) and isset($_POST)){
	$_POST['quantidade'] = empty($_POST['quantidade'])?1:$_POST['quantidade'];
	$dados = $_POST;
	$data = date('Y-m-d',strtotime('+10days'));
	$pagamento->geraIdUnico();
	$pagamento->geraIdUnicoProduto();
	$pagamento->setEmail($dados['email']);
	$pagamento->setMeio($dados['pagamento_avulso']);
	$pagamento->setQuantidade($dados['quantidade']);
	$pagamento->setNome($dados['nome']);
	$pagamento->setDataNascimento($dados['nascimento']);
	$pagamento->setCpf($dados['cpf']);
	$pagamento->setDdd($dados['ddd']);
	$pagamento->setTelefone($dados['telefone']);
	$pagamento->setCep($dados['cep']);
	$pagamento->setRua($dados['rua']);
	$pagamento->setNumero($dados['numero']);
	$pagamento->setBairro($dados['bairro']);
	$pagamento->setCidade($dados['cidade']);
	$pagamento->setEstadoCliente($dados['estado']);
	$pagamento->setComplemento($dados['complemento']);
	$pagamento->setPagina($_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/pago");
	if($pagamento->getMeio() == 'credito'){
		$pagamento->setMesCartao($dados['mes']);
		$pagamento->setAnoCartao($dados['ano']);
		$pagamento->setNumeroCartao($dados['numero_cartao']);
		$pagamento->setCvc($dados['CVC']);
		$pagamento->setNumeroParcelas($dados['numero_parcelas']);
		$pagamento->setDataNascimentoCartao($dados['nascimento_cartao']);
		$pagamento->setCpfCartao($dados['cpf_cartao']);
		$pagamento->setDddCartao($dados['dddcartao']);
		$pagamento->setTelefoneCartao($dados['telefone_cartao']);
		$pagamento->setNomeDonoCartao($dados['nome_dono_cartao']);
	}
	if($pagamento->getMeio() == 'debito'){
		$pagamento->setNumeroBancoDebito($_POST['numero_banco_debito']);
		$pagamento->setDataExpiracaoDebito($_POST['data_expiracao_debito']);
	}
	$pagamento->setaComprador();
	$pagamento->setaProdutoCompra();
	$pagamento->realizaPagamento($db);
	$mensagem = $pagamento->getResposta();
	$erro = $pagamento->getErro($mensagem);
}

if(isset($erro) and !empty($erro)){
	echo "<br /><h3 style='float: right; font-size: 21px; padding-right: 18px; background-color: red; color: #FFF; border-radius: 5px; padding: 14px; margin-right: 10px;' class='site-debito-pagmento erro_moip'>".$erro."</h3>";	
}
echo $pagamento->formulario();
if(isset($erro) and !empty($erro)){
	echo "<br /><h3 style='float: right; font-size: 21px; padding-right: 18px; background-color: red; color: #FFF; border-radius: 5px; padding: 14px; margin-right: 10px;' class='site-debito-pagmento erro_moip'>".$erro."</h3>";	
}
?>