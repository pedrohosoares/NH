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
        <title><?php $paginas->Title(); ?> | Lista de Presentes</title>
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
                    alert("x Preencha o campo com um Email Válido");
                    form.email.focus();
                    return false;
                }
            }
        </script>

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

                <?php $paginas->ListaPresentesDetalhes(); ?>

                <div class="col-md-5">
                    <div class="form_content">
                        
                        <p>Basta você preencher com seus dados e clicar em <br/>CONFIRMAR E EFETUAR PAGAMENTO.</p>

                        <figure class="pagseguro" style="float: none; margin-left: 0px;">
                            <img src="http://www.nossashistorias.com.br/templatesimages/pagseguro.png" width="250"/>
                        </figure>
                        
                        <?php
                        $id = $_GET['id'];
                        $data = date('Y-m-d');

                        if ($id === 'vale-presente') {
                            echo "
                                   <form id='ContactForm' method='post' action='' onsubmit='return validaPresente(this);'>
                                        <div class='form_row_full'>
                                            <label>NOME COMPLETO:</label>
                                            <input type='text' class='form_input required' name='nome' id='contactname' />
                                        </div>
                                        <div class='form_row_full'>
                                            <label><i>E-MAIL</i>:</label>
                                            <input type='text' class='form_input required' name='email' id='contactemail' />
                                        </div>

                                        <div class='form_row_full'>
                                            <label>TELEFONE:</label>
                                            <input type='text' class='form_input required' name='telefone' id='contactemail' />
                                        </div>
                                        <div class='form_row_full'>
                                            <label>VALOR:</label>
                                            <input type='text' class='form_input required moeda' name='valor' id='contactemail' />
                                        </div>
                                        <div class='form_row'>
                                            <input type='hidden' value='$data' name='data' />
                                            <input type='hidden' value='$id' name='id' />
                                            <input type='submit' name='acao-presente' class='form_submit_contact' id='submit' value='Confirmar e Efetuar Pagamento' />
                                        </div>
                                    </form>  
                                 ";
                            if (isset($_POST['acao-presente'])) {
                                $paginas = New Paginas();
                                $paginas->PagseguroValePresente();
                            }
                        } else {
                            echo "
                                    <form id='ContactForm' method='post' action='' onsubmit='return validaPresente(this);'>
                                        <div class='form_row_full'>
                                            <label>NOME (S) DO (S) CONVIDADO (S):</label>
                                            <input type='text' class='form_input required' name='nome' id='contactname' />
                                        </div>
                                        <div class='form_row_full'>
                                            <label><i>E-MAIL</i>:</label>
                                            <input type='text' class='form_input required' name='email' id='contactemail' />
                                        </div>

                                        <div class='form_row_full'>
                                            <label>TELEFONE:</label>
                                            <input type='text' class='form_input required' name='telefone' id='contactemail' />
                                        </div>

                                        <div class='form_row'>
                                            <input type='hidden' value='$data' name='data' />
                                            <input type='hidden' value='$id' name='id' />
                                            <input type='submit' name='acao-presente' class='form_submit_contact' id='submit' value='Confirmar e Efetuar Pagamento' />
                                        </div>
                                    </form>
                                 ";
                            if (isset($_POST['acao-presente'])) {
                                $paginas = New Paginas();
                                $paginas->Pagseguro();
                            }
                        }
                        ?>
                    </div> 
                </div>

                <div class="clear"></div>
            </div>
        </div>

        <?php include ('inc.footer.php'); ?>

    </body>
</html>