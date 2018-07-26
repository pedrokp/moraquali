<?php
    session_start();
?>
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
                    <li style="float: right; margin-right: 40px;"><a href="index.php">HOME</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="resposta">
            <?php
            if (($_POST['login'] == 'admin') && ($_POST['senha'] == '1234')) {
                print '<div class="usr_resp">Engenheiro: '.$_POST['login'].'</div>';

                $_SESSION['user'] = $_POST['login'];
            } else {
                echo '<p>Dados Incorretos</p>';
            }
            ?>
                <div class="box_projeto">
                    <legend>Projetos:</legend>
                    
                    
                </div>
                <div class="box_fornecedor">
                    <legend>Fonecedores:</legend>
                    
                    
                </div>
                
                
                
            </div>
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
