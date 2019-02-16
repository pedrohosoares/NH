<?php

class Paginas {

    public function Title() {
        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $select = mysql_query("SELECT id_evento FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($select);
        $this->id_evento = $res['id_evento'];

        $nomes = mysql_query("SELECT nome_anfitriao, nome_anfitriao2, data_evento FROM etb_eventos WHERE id='$this->id_evento'");
        $res = mysql_fetch_assoc($nomes);
        $this->nome_anfitriao = $res['nome_anfitriao'];
        $this->nome_anfitriao2 = $res['nome_anfitriao2'];
        $this->data_evento = $res['data_evento'];
        $this->data_evento_nova = implode("/", array_reverse(explode("-", $this->data_evento)));

        echo $this->nome_anfitriao . "&nbsp;" . $this->nome_anfitriao2 . "&nbsp;" . "($this->data_evento_nova)";
    }

    public function NomeAnfitrioes() {
        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $select = mysql_query("SELECT id_evento FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($select);
        $this->id_evento = $res['id_evento'];

        $nomes = mysql_query("SELECT nome_anfitriao, nome_anfitriao2 FROM etb_eventos WHERE id='$this->id_evento'");
        $res = mysql_fetch_assoc($nomes);
        $this->nome_anfitriao = $res['nome_anfitriao'];
        $this->nome_anfitriao2 = $res['nome_anfitriao2'];

        echo $this->nome_anfitriao . "&nbsp;" . $this->nome_anfitriao2;
    }

    public function DataHorario() {
        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $select = mysql_query("SELECT id_evento FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($select);
        $this->id_evento = $res['id_evento'];

        $nomes = mysql_query("SELECT data_evento, horario_evento FROM etb_eventos WHERE id='$this->id_evento'");
        $res = mysql_fetch_assoc($nomes);
        $this->data_evento = $res['data_evento'];
        $this->horario_evento = $res['horario_evento'];
        $this->data_evento_nova = implode("/", array_reverse(explode("-", $this->data_evento)));

        echo "
        <div class='title_date'>
            <span class='swirl_left'>
                <span class='swirl_right'>$this->data_evento_nova</span></span>
            </div>
            <div class='title_under'>$this->horario_evento</div>
            ";
        }

        public function Banner() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $id_site = mysql_query("SELECT id FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($id_site);
        $this->id_site = $res['id'];

        $banner = mysql_query("SELECT url FROM nh_sites_banner WHERE id_site='$this->id_site'");
        $res = mysql_fetch_assoc($banner);
        $this->url = $res['url'];

        if (mysql_num_rows($banner) === 0) {
            echo "http://www.nossashistorias.com.br/templatesimages/categoria2/3/slide_padrao.jpg";
        }
        if (mysql_num_rows($banner) === 1) {
            echo "http://www.nossashistorias.com.br/user/bannerprincipal/$this->url";
        }
    }

    public function SobreEventoIndex() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $id_site = mysql_query("SELECT id FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($id_site);
        $this->id_site = $res['id'];

        $texto = mysql_query("SELECT texto FROM nh_sites_sobre WHERE id_site='$this->id_site'");
        $res = mysql_fetch_assoc($texto);
        $this->texto = $res['texto'];

        $this->limite = 400; // Limite de 200 letras
        $this->texto_final = substr($this->texto, 0, strrpos(substr($this->texto, 0, $this->limite), ' ')) . '...';
        echo $this->texto_final;
    }

    public function InstagramIndex() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $id_site = mysql_query("SELECT id FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($id_site);
        $this->id_site = $res['id'];

        $url = mysql_query("SELECT url FROM nh_sites_instagram WHERE id_site='$this->id_site'");
        $res = mysql_fetch_assoc($url);
        $this->url = $res['url'];

        echo "<iframe src='http://instaembedder.com/gallery-v2.php?hashtag=$this->url&amp;width=150&amp;cols=7&amp;rows=2&amp;margin=8&amp;color=gray&amp;likes=1&amp;share_buttons=1&amp;comments=1&amp;date=1&amp;link=1&amp;frame=1&amp;image_border=8&amp;frame_color=white&amp;' frameborder='0' width='890' height='600'></iframe>";
    }

    public function NossasHistorias() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $id_site = mysql_query("SELECT id FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($id_site);
        $this->id_site = $res['id'];

        $texto = mysql_query("SELECT texto FROM nh_sites_sobre WHERE id_site='$this->id_site'");
        $res = mysql_fetch_assoc($texto);
        $this->texto = $res['texto'];

        echo $this->texto;
    }

    public function SobreEvento() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $id_site = mysql_query("SELECT id_evento FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($id_site);
        $this->id_evento = $res['id_evento'];

        $local_cerimonia = mysql_query("SELECT local, endereco, cidade, bairro, numero FROM etb_local_religioso WHERE id_evento='$this->id_evento'");
        $res = mysql_fetch_assoc($local_cerimonia);
        $this->local_religioso = $res['local'];
        $this->endereco_religioso = $res['endereco'];
        $this->cidade_religioso = $res['cidade'];
        $this->bairro_religioso = $res['bairro'];
        $this->numero_religioso = $res['numero'];

        $local_festa = mysql_query("SELECT local, endereco, cidade, bairro, numero FROM etb_local_festa WHERE id_evento='$this->id_evento'");
        $res = mysql_fetch_assoc($local_festa);
        $this->local_festa = $res['local'];
        $this->endereco_festa = $res['endereco'];
        $this->cidade_festa = $res['cidade'];
        $this->bairro_festa = $res['bairro'];
        $this->numero_festa = $res['numero'];

        echo "
        <div class='caixas-homenageados'>
            <span class='swirl_left'>
                <span class='swirl_right'>
                    <h2 style='padding-bottom: 0px; margin-bottom: 0px;'>Cerimônia</h2>
                </span>
            </span>
            <p>Local: $this->local_religioso</p>
            <p>Endereço: $this->endereco_religioso, $this->numero_religioso</p>
            <p>Cidade: $this->cidade_religioso</p>
            <p>Bairro: $this->bairro_religioso</p>
        </div>

        <div class='caixas-homenageados'>
            <span class='swirl_left'>
                <span class='swirl_right'>
                    <h2 style='padding-bottom: 0px; margin-bottom: 0px;'>Festa</h2>
                </span>
            </span>
            <p>Local: $this->local_festa</p>
            <p>Endereço: $this->endereco_festa, $this->numero_festa</p>
            <p>Cidade: $this->cidade_festa</p>
            <p>Bairro: $this->bairro_festa</p>
        </div>
        ";
    }

    public function Instagram() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $id_site = mysql_query("SELECT id FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($id_site);
        $this->id_site = $res['id'];

        $url = mysql_query("SELECT url FROM nh_sites_instagram WHERE id_site='$this->id_site'");
        $res = mysql_fetch_assoc($url);
        $this->url = $res['url'];

        if (!empty($this->url)) {
            echo "<p><a href='$this->url' target='_blank' class='instagram'>Clique aqui para acessar</a></p>";
        } else {
            echo "<p class='instagram'>No momento o evento não possui instagram disponível.</p>";
        }
    }

    public function MuralRecados() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $id_site = mysql_query("SELECT id FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($id_site);
        $this->id_site = $res['id'];

        $mural = mysql_query("SELECT titulo, texto, data_cadastro FROM nh_sites_mural WHERE id_site='$this->id_site' AND status='1'");

        while ($res = mysql_fetch_array($mural)) {

            $this->titulo = $res[0];
            $this->texto = $res[1];
            $this->data_cadastro = $res[2];

            $this->data_cadastro_nova = implode("/", array_reverse(explode("-", $this->data_cadastro)));

            echo "
            <div class='caixas-mensagens-convidados'>
                <p class='texto-justificado'>$this->texto</p>
                <span class='swirl_left'><span class='swirl_right'><h3>$this->titulo</h3></span></span>
            </div>
            ";
        }
    }

    public function Homenageados() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $id_site = mysql_query("SELECT id FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($id_site);
        $this->id_site = $res['id'];

        $mural = mysql_query("SELECT nome, texto, data_cadastro FROM nh_sites_homenageados WHERE id_site='$this->id_site'");

        while ($res = mysql_fetch_array($mural)) {

            $this->nome = ucwords($res[0]);
            $this->texto = $res[1];
            $this->data_cadastro = $res[2];

            $this->data_cadastro_nova = implode("/", array_reverse(explode("-", $this->data_cadastro)));

            echo "
            <div class='caixas-homenageados'>
                <span class='swirl_left'>
                    <span class='swirl_right'>
                        <h2 style='padding-bottom: 0px; margin-bottom: 0px;''>$this->nome</h2>
                    </span>
                </span>
                <p class='texto-justificado'>$this->texto</p>
            </div>
            ";
        }
    }

    public function GaleriaFotos() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $id_site = mysql_query("SELECT id FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($id_site);
        $this->id_site = $res['id'];

        $galeria = mysql_query("SELECT url FROM nh_sites_galeria WHERE id_site='$this->id_site'");

        while ($res = mysql_fetch_array($galeria)) {

            $this->url = $res[0];

            echo "
            <div class='col-md-personalizado'>
                <a href='http://www.nossashistorias.com.br/user/galeria/$this->url' data-lightbox='roadtrip'>
                    <img src='http://www.nossashistorias.com.br/user/galeria/$this->url' />
                </a>
            </div>
            ";
        }
    }

    public function RSVP() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $id_evento = mysql_query("SELECT id_evento FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($id_evento);
        $this->id_evento = $res['id_evento'];

        $this->nome = $_POST['nome'];
        $this->email = $_POST['email'];
        $this->tipo_festa = $_POST['tipo_festa'];
        $this->telefone = '';
        $this->qtd_adultos = $_POST['n_adultos'];
        $this->qtd_criancas = $_POST['n_criancas'];
        $this->idade_criancas = $_POST['idade_criancas'];
        $this->estado = '';
        $this->cep = '';
        $this->endereco = '';
        $this->cidade = '';
        $this->bairro = '';
        $this->numero = '';
        $this->confirmacao = 'confirmado';
        $this->status = 'ativo';
        $this->data = $_POST['data'];
        $this->data_nova = implode("-", array_reverse(explode("/", $this->data)));


        if ($this->tipo_festa === 'ambos') {

            //REALIZA UM NOVO CONVIDADO NO RELIGIOSO
            $insert = mysql_query("INSERT INTO `etb_lista_convidados_religioso` (`id`, `id_evento`, `nome`, `email`, `telefone`, `qtd_adultos`, `qtd_criancas`, `idade_criancas`, `estado`, `cep`, `endereco`, `cidade`, `bairro`, `numero`, `data_cadastro`, `confirmacao`, `status`)  
                values(
                null,
                '$this->id_evento', 
                '$this->nome', 
                '$this->email', 
                '$this->telefone', 
                '$this->qtd_adultos', 
                '$this->qtd_criancas', 
                '$this->idade_criancas', 
                '$this->estado', 
                '$this->cep', 
                '$this->endereco', 
                '$this->cidade', 
                '$this->bairro', 
                '$this->numero', 
                '$this->data_nova', 
                '$this->confirmacao',   
                '$this->status')"
                );

            //REALIZA UM NOVO CONVIDADO NA FESTA
            $insert = mysql_query("INSERT INTO `etb_lista_convidados_festa` (`id`, `id_evento`, `nome`, `email`, `telefone`, `qtd_adultos`, `qtd_criancas`, `idade_criancas`, `estado`, `cep`, `endereco`, `cidade`, `bairro`, `numero`, `data_cadastro`, `confirmacao`, `status`) 
                values(
                null,
                '$this->id_evento', 
                '$this->nome', 
                '$this->email', 
                '$this->telefone', 
                '$this->qtd_adultos', 
                '$this->qtd_criancas', 
                '$this->idade_criancas', 
                '$this->estado', 
                '$this->cep', 
                '$this->endereco', 
                '$this->cidade', 
                '$this->bairro', 
                '$this->numero', 
                '$this->data_nova', 
                '$this->confirmacao',   
                '$this->status')"
                );

            echo ("<script language='JavaScript'>
              alert('Obrigado por confirmar sua presença!');
              window.location='rsvp';
          </script>");
        }

        if ($this->tipo_festa === 'religioso') {

            //REALIZA UM NOVO CONVIDADO NO RELIGIOSO
            $insert = mysql_query("INSERT INTO `etb_lista_convidados_religioso` (`id`, `id_evento`, `nome`, `email`, `telefone`, `qtd_adultos`, `qtd_criancas`, `idade_criancas`, `estado`, `cep`, `endereco`, `cidade`, `bairro`, `numero`, `data_cadastro`, `confirmacao`, `status`)  
                values(
                null,
                '$this->id_evento', 
                '$this->nome', 
                '$this->email', 
                '$this->telefone', 
                '$this->qtd_adultos', 
                '$this->qtd_criancas', 
                '$this->idade_criancas',     
                '$this->estado', 
                '$this->cep', 
                '$this->endereco', 
                '$this->cidade', 
                '$this->bairro', 
                '$this->numero', 
                '$this->data_nova', 
                '$this->confirmacao',   
                '$this->status')"
                );

            echo ("<script language='JavaScript'>
              alert('Obrigado por confirmar sua presença!');
              window.location='rsvp';
          </script>");
        }

        if ($this->tipo_festa === 'festa') {

            //REALIZA UM NOVO CONVIDADO PRA FESTA
            $insert = mysql_query("INSERT INTO `etb_lista_convidados_festa` (`id`, `id_evento`, `nome`, `email`, `telefone`, `qtd_adultos`, `qtd_criancas`, `idade_criancas`, `estado`, `cep`, `endereco`, `cidade`, `bairro`, `numero`, `data_cadastro`, `confirmacao`, `status`) 
                values(
                null,
                '$this->id_evento', 
                '$this->nome', 
                '$this->email', 
                '$this->telefone', 
                '$this->qtd_adultos', 
                '$this->qtd_criancas',
                '$this->idade_criancas', 
                '$this->estado', 
                '$this->cep', 
                '$this->endereco', 
                '$this->cidade', 
                '$this->bairro', 
                '$this->numero', 
                '$this->data_nova', 
                '$this->confirmacao',   
                '$this->status')"
                );

            echo ("<script language='JavaScript'>
              alert('Obrigado por confirmar sua presença!');
              window.location='rsvp';
          </script>");
        }
    }

    public function ListaPresentes() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $id_evento = mysql_query("SELECT id_evento FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($id_evento);
        $this->id_evento = $res['id_evento'];

        $presentes = mysql_query("SELECT id, nome, valor, url FROM etb_presentes WHERE id_evento='$this->id_evento' AND status='ativo'");

        while ($res = mysql_fetch_array($presentes)) {

            $this->id = $res[0];
            $this->nome = ucwords($res[1]);
            $this->valor = $res[2];
            $this->url = $res[3];

            $this->valor_final = ' R$ ' . number_format($this->valor, 2, ',', '.');

            echo "
            <div class='col-md-personalizado1 borda-presentes'> 
                <div class='bottom_icon'>
                    <img src='http://www.nossashistorias.com.br/user/img-presentes/$this->url' alt='$this->nome' title='$this->nome' /></div>
                    <h2>$this->nome</h2>
                    <h3>$this->valor_final</h3>
                    <a href='lista-de-presentes-detalhes?id=$this->id' class='botao-presentear'>PRESENTEAR</a>
                </div>
                ";
            }
        }

        public function ListaPresentesLoja() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $id_evento = mysql_query("SELECT id_evento FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($id_evento);
        $this->id_evento = $res['id_evento'];

        $presentes = mysql_query("SELECT id, url FROM etb_presentes_loja WHERE id_evento='$this->id_evento' AND status='ativo'");

        while ($res = mysql_fetch_array($presentes)) {

            $this->id = $res[0];
            $this->url = $res[1];

            echo "
            <p class='lojas-fisicas'><a href='http://$this->url' target='_blank'>$this->url</a></p>
            ";
        }
    }

    public function ListaPresentesDetalhes() {

        $this->id = $_GET['id'];

        $presentes = mysql_query("SELECT nome, valor, url FROM etb_presentes WHERE id='$this->id' ");
        $res = mysql_fetch_assoc($presentes);
        $this->nome = ucwords($res['nome']);
        $this->valor = $res['valor'];
        $this->url = $res['url'];

        $this->valor_final = ' R$ ' . number_format($this->valor, 2, ',', '.');

        if ($this->id === 'vale-presente') {
            echo "
            <div class='col-md-personalizado1'> 
                <div class='bottom_icon'>
                    <img src='http://www.nossashistorias.com.br/templatesimages/vale-presente-templates.jpg' alt='Vale-Presente' title='Vale-Presente' /></div>
                    <h2>Vale-Presente</h2>
                    <h3>Informe o valor no formulário</h3>
                </div>
                ";
            } else {
                echo "
                <div class='col-md-personalizado1'> 
                    <div class='bottom_icon'>
                        <img src='http://www.nossashistorias.com.br/user/img-presentes/$this->url' alt='$this->nome' title='$this->nome' /></div>
                        <h2>$this->nome</h2>
                        <h3>$this->valor_final</h3>
                    </div>
                    ";
                }
            }

            public function ValePresente() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $id_evento = mysql_query("SELECT id_evento FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($id_evento);
        $this->id_evento = $res['id_evento'];

        $vale_presente = mysql_query("SELECT status FROM etb_valepresente_ativacao WHERE id_evento='$this->id_evento'");
        $ar = mysql_fetch_assoc($vale_presente);
        $status = $ar['status'];

        if ($status == '1') {

            echo "
            <div class='col-md-personalizado1 borda-presentes'> 
                <div class='bottom_icon'>
                    <img src='http://www.nossashistorias.com.br/templatesimages/vale-presente-templates.jpg' alt='Vale-Presente' title='Vale-Presente' /></div>
                    <h2>Vale-Presente</h2>
                    <h3>Informe o valor</h3>
                    <a href='lista-de-presentes-detalhes?id=vale-presente' class='botao-presentear'>PRESENTEAR</a>
                </div>
                ";
            }
        }

        public function Pagseguro() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $select = mysql_query("SELECT id_evento FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($select);
        $this->id_evento = $res['id_evento'];

        $this->id_presente = $_POST['id'];
        $this->nome = $_POST['nome'];
        $this->email = $_POST['email'];
        $this->telefone = $_POST['telefone'];
        $this->data_cadastro = $_POST['data'];
        $this->status = 'pendente';

        $presente = mysql_query("SELECT nome, valor FROM etb_presentes WHERE id='$this->id_presente' ");
        $ar = mysql_fetch_assoc($presente);
        $this->nome_presente = ucwords($ar['nome']);
        $this->valor_presente = $ar['valor'];

        //REALIZA UMA NOVA COMPRA DE PRESENTE
        $insert = mysql_query("INSERT INTO etb_presentes_vendas 
            values(
            null,
            '$this->id_evento', 
            '$this->id_presente', 
            '$this->nome', 
            '$this->email', 
            '$this->telefone', 
            '$this->data_cadastro', 
            '$this->status')"
            );

        $email = 'pagseguro@nossashistorias.com.br';
        $token = 'A96F2D23BB0F465EAF928F2D43DE409E';
        $url = 'https://ws.pagseguro.uol.com.br/v2/checkout/?email=' . $email . '&token=' . $token;
        $xml = "<?xml version='1.0' encoding='ISO-8859-1' standalone='yes'?>
        <checkout>
            <currency>BRL</currency>
            <redirectURL>http://nossashistorias.com.br/user/meu-plano</redirectURL>
            <items>
                <item>
                    <id>0001</id>
                    <description>$this->nome_presente</description>
                    <amount>$this->valor_presente</amount>
                    <quantity>1</quantity>
                    <weight>1000</weight>
                </item>
            </items>
            <reference>REF1234</reference>
            <sender>
                <email>$this->email</email>
                <phone>
                    <areaCode>11</areaCode>
                    <number>55663377</number>
                </phone>
            </sender>
            
        </checkout>";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, Array('Content-Type: application/xml; charset=ISO-8859-1'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $xml);
        $xml = curl_exec($curl);

        if ($xml == 'Unauthorized') {
            //Insira seu código avisando que o sistema está com problemas, sugiro enviar um e-mail avisando para alguém fazer a manutenção 

            header('Location: paginaDeErro.php');
            exit; //Mantenha essa linha
        }

        curl_close($curl);

        $xml = simplexml_load_string($xml);

        if (count($xml->error) > 0) {
            //Insira seu código avisando que o sistema está com problemas, sugiro enviar um e-mail avisando para alguém fazer a manutenção, talvez seja útil enviar os códigos de erros.
            header('Location: paginaDeErro.php');
            exit;
        }

        header('Location: https://pagseguro.uol.com.br/v2/checkout/payment.html?code=' . $xml->code);
    }

    public function PagseguroValePresente() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $select = mysql_query("SELECT id_evento FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($select);
        $this->id_evento = $res['id_evento'];

        $this->nome = $_POST['nome'];
        $this->email = $_POST['email'];
        $this->telefone = $_POST['telefone'];
        $this->valor = $_POST['valor'];
        $this->data_cadastro = $_POST['data'];
        $this->status = 'pendente';

        $this->source = array('.', ',');
        $this->replace = array('', '.');

        $this->valor_final = str_replace($this->source, $this->replace, $this->valor);

        //REALIZA UMA NOVA COMPRA DE PRESENTE
        $insert = mysql_query("INSERT INTO etb_vale_presentes_vendas 
            values(
            null,
            '$this->id_evento', 
            '$this->nome', 
            '$this->email', 
            '$this->telefone', 
            '$this->valor_final', 
            '$this->data_cadastro', 
            '$this->status')"
            );

        $email = 'pagseguro@nossashistorias.com.br';
        $token = 'A96F2D23BB0F465EAF928F2D43DE409E';
        $url = 'https://ws.pagseguro.uol.com.br/v2/checkout/?email=' . $email . '&token=' . $token;
        $xml = "<?xml version='1.0' encoding='ISO-8859-1' standalone='yes'?>
        <checkout>
            <currency>BRL</currency>
            <redirectURL>http://nossashistorias.com.br/user/meu-plano</redirectURL>
            <items>
                <item>
                    <id>0001</id>
                    <description>Vale-Presente</description>
                    <amount>$this->valor_final</amount>
                    <quantity>1</quantity>
                    <weight>1000</weight>
                </item>
            </items>
            <reference>REF1234</reference>
            <sender>
                <email>$this->email</email>
                <phone>
                    <areaCode>11</areaCode>
                    <number>55663377</number>
                </phone>
            </sender>
            
        </checkout>";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, Array('Content-Type: application/xml; charset=ISO-8859-1'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $xml);
        $xml = curl_exec($curl);

        if ($xml == 'Unauthorized') {
            //Insira seu código avisando que o sistema está com problemas, sugiro enviar um e-mail avisando para alguém fazer a manutenção 

            header('Location: paginaDeErro.php');
            exit; //Mantenha essa linha
        }

        curl_close($curl);

        $xml = simplexml_load_string($xml);

        if (count($xml->error) > 0) {
            //Insira seu código avisando que o sistema está com problemas, sugiro enviar um e-mail avisando para alguém fazer a manutenção, talvez seja útil enviar os códigos de erros.
            header('Location: paginaDeErro.php');
            exit;
        }

        header('Location: https://pagseguro.uol.com.br/v2/checkout/payment.html?code=' . $xml->code);
    }

    public function Mensagem() {

        $this->nome_pasta = basename(getcwd()); // Resultado: NOME DO SITE

        $id_site = mysql_query("SELECT id FROM nh_sites WHERE nome='$this->nome_pasta'");
        $sit = mysql_fetch_assoc($id_site);
        $this->id_site = $sit['id'];

        $id_evento = mysql_query("SELECT id_evento FROM nh_sites WHERE nome='$this->nome_pasta'");
        $res = mysql_fetch_assoc($id_evento);
        $this->id_evento = $res['id_evento'];

        $id_cadastro = mysql_query("SELECT id_cadastro FROM etb_eventos WHERE id='$this->id_evento'");
        $res = mysql_fetch_assoc($id_cadastro);
        $this->id_cadastro = $res['id_cadastro'];

        $email = mysql_query("SELECT nome, email FROM tb_cadastros WHERE id='$this->id_cadastro'");
        $res = mysql_fetch_assoc($email);
        $this->nome_cadastro = $res['nome'];
        $this->email_cadastro = $res['email'];

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        $data = $_POST['data'];
        $status = "2";

        $data_nova = implode("-", array_reverse(explode("/", $data)));

        //REALIZA UM NOVO CADASTRO DE MENSAGEM PENDENTE
        $insert = mysql_query("INSERT INTO nh_sites_mural
            values(
            null,
            '$this->id_site',
            '$nome',
            '$mensagem',
            '$data_nova',
            '$status')"
            );


        //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
        //====================================================
        $email_remetente = "nossashistorias@nossashistorias.com.br"; // deve ser um email do dominio
        //====================================================
        //Configurações do email, ajustar conforme necessidade
        //====================================================
        $email_destinatario = $this->email_cadastro; // qualquer email pode receber os dados
        $email_reply = "$email";
        $email_assunto = " Olá $this->nome_cadastro - Mensagem do seu convidado(a)";
        //====================================================
        //Monta o Corpo da Mensagem
        //====================================================
        $email_conteudo = "Nome = $nome \n";
        $email_conteudo .= "Email = $email \n";
        $email_conteudo .= "Mensagem = $mensagem \n";
        $email_conteudo .= "Data do Envio = $data \n";

        //====================================================
        //Seta os Headers (Alerar somente caso necessario)
        //====================================================
        $email_headers = implode("\n", array("From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto", "Return-Path:  $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
        //====================================================

        if (mail($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)) {
            echo ("<script language='JavaScript'>
              window.alert('Mensagem enviada para o anfitrião com sucesso!')
              window.location.href='evento';
          </script>");
        }
    }

}
?>

