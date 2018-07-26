<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8; text/html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MoraQuali</title>
        <meta name="description" content="Reforma de baixo custo.">
        <link rel="stylesheet" href="main.css">
        <link href='//fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
    </head>
    <body>
        <div class="header">
            <div class="title"><a href="index.php"><img src="imagens/logo_moraquali.png"></a></div>
            <div class="menu" id="menu">
                <ul>		
                    <li class="<?php if (($_GET['id']) == '') {echo 'ativo';} else {echo '';} ?>"><a href="index.php">HOME</a></li>
                    <li class="<?php if (($_GET['id']) == 'quemsomos') {echo 'ativo';} else {echo '';} ?>"><a  href="index.php?id=quemsomos">QUEM SOMOS</a></li>
                    <li class="<?php if (($_GET['id']) == 'servicos') {echo 'ativo';} else {echo '';} ?>"><a  href="index.php?id=servicos">SERVIÇOS</a></li>                    
                    <li>
                        <div class="dropdown">
                            <div class="dropbtn">CONTATO</div>
                            <div class="dropdown-content">
                                <a href="index.php?id=cliente">CLIENTE</a>
                                <a href="index.php?id=fornecedor">FORNECEDOR</a>
                                <a href="index.php?id=engenheiro">ENGENHEIRO</a>
                                <a href="index.php?id=duvidas" style="border-radius: 0 0 10px 10px;">DÚVIDAS</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="content">
            <?php
            if (isset($_GET['id'])) {
                switch ($_GET['id']) {
                    case quemsomos : include('quemsomos.php');
                        break;
                    case servicos : include('servicos.php');
                        break;
                    case cliente : include('login_cli.php');
                        break;
                    case fornecedor : include('login_for.php');
                        break;
                    case engenheiro : include('login_eng.php');
                        break;
                    case duvidas : include('duvidas.php');
                        break;
                    case cadastro : include('cadastro.php');
                        break;
                    case resposta.php : include('resposta.php');
                        break;
                }
            } else {
                include('home.php');
            }
            ?>
            </div>
        <div class="footer">
            <div class="title"><a href="index.php"><img src="imagens/logo_moraquali.png"></a></div>
            <div class="box_endereco">
                <p>Matriz:</p>
                <p>São Paulo, Brasil.</p>
                <p>Avenida Paulista, 2400</p>
                <p>8 andar</p>
                <p>CEP: 00000-000</p>
                <p>moraquali@atendimento.com.br</p>
            </div>
            <div class="box_rede_social">
                <img src="imagens/logo_social_02.png">
                <img src="imagens/logo_social_04.png">
                <img src="imagens/logo_social_06.png">
                <img src="imagens/logo_social_11.png">
                <img src="imagens/logo_social_12.png">
                <img src="imagens/logo_social_14.png">                                
            </div>
        </div>
    </body>
</html>
