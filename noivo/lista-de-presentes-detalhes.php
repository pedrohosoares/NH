<?php
ob_start();
session_start();
//ini_set('display_errors', 1); 
//error_reporting(E_ALL);
include('inc.conexao.php');
include_once('Model.class.php');
$paginas = New Paginas();
if (isset($_POST['acao-presente'])) {
    require_once('../../../user/model/plano/Pagamento.class.php');
    $pagamento = New Pagamento();
    $pagamento->iniciaMoip($db);
    $pagamento->setaComprador();
    $pagamento->produto('Vale produto NH em dinheiro');
    $pagamento->setaProdutoCompra();
    $resposta = $pagamento->realizaPagamento();
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <title><?php $paginas->Title($db); ?> | Lista de Presentes</title>
        <meta charset="utf-8"/>
        <meta name = "format-detection" content = "telephone=no" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
        <link rel="stylesheet" type="text/css" media="all" href="css.style.css?key=<?php echo time(); ?>"/>
        <link rel="stylesheet" href="css.prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>
        <!--<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>-->
        <link href="css.css" rel="stylesheet" type="text/css"/>
        <link href="css.css(1)" rel="stylesheet" type="text/css"/>

        <link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'/>
        <!-- jQuery -->
        <script type="text/javascript" src="js.jquery.min.js"></script>
        <!-- PrettyPhoto -->
        <script src="js.jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js.jquery.quicksand.js"></script>
        <script type="text/javascript" src="js.custom.quicksand.js"></script>
        <!-- Twitter Feed -->
        <script type="text/javascript" src="js.jquery.tweet.js" charset="utf-8"></script>
        <!-- FlexSlider -->
        <script type="text/javascript" src="js.jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="js.jquery.maskMoney.js"></script>

        <!-- DropDownMenu -->
        <script type="text/javascript" src="js.menu.js"></script>

        <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $(".moeda").maskMoney({prefix: 'R$ ', allowNegative: true, thousands: '.', decimal: ',', affixesStay: false});
            });
        </script>

        <script type="text/javascript" charset="utf-8">
            var $ = jQuery.noConflict();
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "fade"
                });
                $(function () {
                    $('.show_menu').click(function () {
                        $('.menu').fadeIn();
                        $('.show_menu').fadeOut();
                        $('.hide_menu').fadeIn();
                    });
                    $('.hide_menu').click(function () {
                        $('.menu').fadeOut();
                        $('.show_menu').fadeIn();
                        $('.hide_menu').fadeOut();
                    });
                });
            });
            jQuery(function ($) {
                $(".tweet").tweet({
                    modpath: 'js.twitter/',
                    join_text: "auto",
                    username: "famousthemes",
                    count: 1,
                    auto_join_text_default: "we said,",
                    auto_join_text_ed: "we",
                    auto_join_text_ing: "we were",
                    auto_join_text_reply: "we replied",
                    auto_join_text_url: "we were checking out",
                    loading_text: "loading tweets..."
                });
            });</script>

        <script type="text/javascript" src="projeto.js"></script>

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

        <!--[if lt IE 8]>
          <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
              <img src="http://storage.ie6countdown.com/assets/100/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
         </div>
       <![endif]-->
        <!--[if lt IE 9]>
          <script src="js.html5shiv.js"></script>
          <link rel="stylesheet" media="screen" href="css/ie.css">
    
    
        <![endif]-->
        <!--[if lt IE 8]>
          <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
              <img src="http://storage.ie6countdown.com/assets/100/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
         </div>
       <![endif]-->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <link rel="stylesheet" media="screen" href="css/ie.css">
        <![endif]-->
    </head>
    <!--==============================header=================================-->
    <body>
        <div id="shadow_bg">
            <div id="main_container">

                <?php include("inc.header.php"); ?>

                <div id="center_container">

                    <div id="header">
                        <div class="title"><a href=""><?php $paginas->NomeAnfitrioes($db); ?></a></div>
                        <div class="description">
                            <span class="swirl_left">
                                <span class="swirl_right"><?php $paginas->DataHorario($db); ?></span>
                            </span>
                        </div>
                    </div>

                    <div class="pages_title">
                        <h2>Confirmação e <span>Pagamento</span></h2>
                    </div> 

                    <div class="content">

                        <div class='left_full'>
                            <?php $paginas->ListaPresentesDetalhes($db); ?>
                        </div>

                        <div class=''>
                            <div class="form_content">

                                <p>Basta você preencher com seus dados e clicar em <br/>CONFIRMAR E EFETUAR PAGAMENTO.</p>
                                <br/>
                                <p>Indique seu próprio CEP, na compra do presente no Pagseguro.</p>

                                <figure class="pagseguro">
                                    <img src="http://www.nossashistorias.com.br/templatesimages/pagseguro.png" width="250"/>
                                </figure>

                                <?php
                                $id = isset($_GET['id'])?$_GET['id']:"";
                                $data = date('Y-m-d');

                                if ($id === 'vale-presente') {
                                    echo "
                                    <form id='form1' method='post' action='' onsubmit='return validaPresente(this);'>                
                                        <div class='form_row'>
                                            <label>Nome Completo:</label>
                                            <input type='text' class='form_input' name='nome' />
                                        </div>
                                        <div class='form_row'>
                                            <label>E-mail:</label>
                                            <input type='text' class='form_input' name='email' />
                                        </div>
                                        <div class='form_row'>
                                            <label>Telefone:</label>
                                            <input type='text' class='form_input' name='telefone' />
                                        </div>
                                        <div class='form_row'>
                                            <label>Valor:</label>
                                            <input type='text' class='form_input moeda' name='valor' />
                                        </div>
                                        <div class='form_row'>
                                            <input type='hidden' value='$data' name='data' />
                                            <input type='submit' class='form_submit_contact' value='Confirmar e Efetuar Pagamento' name='acao-presente'/>
                                        </div> 
                                    </form>
                                        ";
                                    if (isset($_POST['acao-presente'])) {
                                        require_once('../../../user/model/plano/Plano.class.php');
                                        $pagina = new Plano();

                                        //$paginas = New Paginas();
                                        //$paginas->PagseguroValePresente($db);
                                    }
                                } else {
                                    ?>
                                    <script type="text/javascript">
                                        jQuery(function($){
                                            $(document).ready(function(){
                                                function escondeMostraMeioPagamento(){
                                                    $('select[name="pagamento_avulso"]').change(function(){
                                                        var valor = $(this).val();
                                                        if(valor == 'credito'){
                                                            $('#cartao_credito').fadeIn();
                                                            $('#boleto,#cartao_debito').fadeOut();
                                                            $('#boleto input,#cartao_debito input').val('');
                                                            $('#cartao_credito input').attr('required',true);
                                                        }else if(valor == 'debito'){
                                                            $('#cartao_debito').fadeIn();
                                                            $('#cartao_credito,#boleto').fadeOut();
                                                            $('#cartao_credito input,#boleto input').val('');
                                                        }else if(valor == 'boleto'){
                                                            $('#boleto').fadeIn();
                                                            $('#cartao_credito,#cartao_debito').fadeOut();
                                                            $('#cartao_credito input,#cartao_debito input').val('');
                                                            $('#cartao_credito input').removeAttr('required');
                                                        }else{
                                                            $('#cartao_credito input').removeAttr('required');
                                                            $('#cartao_credito,#boleto,#cartao_debito').fadeOut();
                                                            $('#cartao_credito input,#boleto input,#cartao_debito input').val('');
                                                        }
                                                    });
                                                }
                                                escondeMostraMeioPagamento();
                                            });
                                        });
                                    </script>
                                    <form action="/minhahistoria/user/compra.php" method="post" class="formRenovar form-horizontal MultiFile-intercepted">
                                        <div class="row-fluid">
                                            <div class="col-md-12">
                                                <div class="form-actions ">
                                                    <b>Forma de pagamento:</b> <br>
                                                    <input type="hidden" value="plano" name="tipo_preco">
                                                    <input type="hidden" value="5400" name="preco_base">
                                                    <input type="hidden" value="5400" name="preco">
                                                    <input type="hidden" value="2018-12-01" name="data_expiracao">
                                                    <input type="hidden" value="200" name="id_evento">
                                                    <input type="hidden" value="acao-renovar" name="acao-renovar">
                                                    <select name="pagamento_avulso" value="Selecione o tipo" required="">
                                                        <option value="">Selecione uma opção..</option>
                                                        <option value="credito">Cartão de Crédito</option>
                                                        <option value="boleto">Boleto Bancário</option>
                                                    </select><br>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="col-md-12">
                                                <div class="pull-left">
                                                    <b>Nome:</b> <br>
                                                    <input type="text" value="" name="nome" required="">
                                                </div>
                                                
                                                <div class="pull-rigth">
                                                    <b>E-mail:</b> <br>
                                                    <input type="text" value="pedrohosoares@gmail.com" required="" name="email">
                                                </div>
                                                
                                                <div class="pull-left">
                                                    <b>Nascimento:</b> <br>
                                                    <input type="text" value="" required="" name="nascimento">
                                                </div>
                                                
                                                
                                                <div class="pull-rigth">
                                                    <b>Cpf:</b> <br>
                                                    <input type="number" value="" required="" name="cpf">
                                                </div>
                                                
                                                <div class="pull-left">
                                                    <b>DDD (*Dois digitos):</b> <br>
                                                    <input type="number" maxlength="2" required="" minlength="2" value="" name="ddd">
                                                </div>
                                                
                                                <div class="pull-rigth">
                                                    <b>Telefone (*Só numeros):</b> <br>
                                                    <input type="number" value="" required="" name="telefone">
                                                </div>
                                                
                                                <div class="pull-left">
                                                    <b>Cep:</b> <br>
                                                    <input type="text" value="" required="" name="cep">
                                                </div>
                                                
                                                <div class="pull-rigth">
                                                    <b>Rua:</b> <br>
                                                    <input type="text" value="" required="" name="rua">
                                                </div>
                                                
                                                <div class="pull-left">
                                                    <b>Número:</b> <br>
                                                    <input type="number" value="" required="" name="numero">
                                                </div>
                                                
                                                <div class="pull-rigth">
                                                    <b>Bairro:</b> <br>
                                                    <input type="text" value="" required="" name="bairro">
                                                </div>
                                                
                                                <div class="pull-left">
                                                    <b>Cidade:</b> <br>
                                                    <input type="text" value="" required="" name="cidade">
                                                </div>
                                                
                                                <div class="pull-rigth">
                                                    <b>Estado:</b> <br>
                                                    <select required="" name="estado">
                                                        <option value="AC">Acre</option>
                                                        <option value="AL">Alagoas</option>
                                                        <option value="AP">Amapá</option>
                                                        <option value="AM">Amazonas</option>
                                                        <option value="BA">Bahia</option>
                                                        <option value="CE">Ceará</option>
                                                        <option value="DF">Distrito Federal</option>
                                                        <option value="ES">Espírito Santo</option>
                                                        <option value="GO">Goiás</option>
                                                        <option value="MA">Maranhão</option>
                                                        <option value="MT">Mato Grosso</option>
                                                        <option value="MS">Mato Grosso do Sul</option>
                                                        <option value="MG">Minas Gerais</option>
                                                        <option value="PA">Pará</option>
                                                        <option value="PB">Paraíba</option>
                                                        <option value="PR">Paraná</option>
                                                        <option value="PE">Pernambuco</option>
                                                        <option value="PI">Piauí</option>
                                                        <option value="RJ">Rio de Janeiro</option>
                                                        <option value="RN">Rio Grande do Norte</option>
                                                        <option value="RS">Rio Grande do Sul</option>
                                                        <option value="RO">Rondônia</option>
                                                        <option value="RR">Roraima</option>
                                                        <option value="SC">Santa Catarina</option>
                                                        <option value="SP">São Paulo</option>
                                                        <option value="SE">Sergipe</option>
                                                        <option value="TO">Tocantins</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div id="cartao_credito" style="display:none;">
                                                <div class="pull-left">
                                                    <h3>Dados do cartão de crédito:</h3>
                                                </div>
                                                <br />
                                                <div class="pull-left">
                                                        <b>Mês de expiração:</b> <br>
                                                        <input type="number" min="1" max="12" value="" name="mes">
                                                </div>
                                                <div class="pull-rigth">
                                                       <b>Ano de expiração:</b> <br>
                                                        <input type="number" value="" name="ano" min="1970">
                                                </div>
                                                    <div class="pull-left">
                                                        <b>Número do cartão:</b> <br>
                                                        <input type="number" value="" name="numero_cartao">
                                                    </div>
                                                    <div class="pull-rigth">
                                                        <b>CVC *Código de Segurança (000):</b> <br>
                                                        <input type="number" value="" name="CVC">
                                                    </div>
                                                    <div class="pull-rigth">
                                                        <b>Número parcelas:</b> <br>
                                                        <input type="number" value="" name="numero_parcelas">
                                                    </div>
                                                    <div class="pull-rigth">
                                                        <b>Data de nascimento:</b> <br>
                                                        <input type="text" value="" name="nascimento_cartao">
                                                    </div>
                                                   <div class="pull-rigth">
                                                        <b>Cpf:</b> <br>
                                                        <input type="number" value="" name="cpf_cartao">
                                                    </div>
                                                   <div class="pull-rigth">
                                                        <b>DDD(*Dois números):</b> <br>
                                                        <input type="number" value="" name="dddcartao">
                                                    </div>
                                                   <div class="pull-rigth">
                                                        <b>Telefone(*Só números):</b> <br>
                                                        <input type="number" value="" name="telefone_cartao">
                                                    </div>
                                                    <div class="pull-left">
                                                        <b>Nome do dono do cartão <br>(Como esta escrito nele):</b> <br>
                                                        <input type="text" value="" name="nome_dono_cartao">
                                                    </div>
                                                    <input type="hidden" value="" name="card_type" id="card_type">
                                                    <textarea name="encrypted_value" style="display:none;" id="encrypted_value"></textarea>
                                                    <?php 
                                                    if(isset($resposta) and !empty($resposta)){
                                                        if(is_array($resposta)){
                                                            echo "<br /><h3>".$resposta[1]."</h3><br />";
                                                            echo "<a link='_blank' href='".$resposta[0]."''>Ver boleto</a>";
                                                        }else{
                                                            echo $resposta;
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </form>
                                    <?php
                                }
                                ?>

                            </div>   
                        </div>

                        <div class="clear"></div>
                    </div>

                </div>
            </div>

            <?php include("inc.footer.php"); ?>

    </body>
</html>