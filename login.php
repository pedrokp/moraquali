<?PHP 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
		
		<?php
        if(($_POST['login']=='admin')&&($_POST['senha']=='1234')) {
            echo '<p>Login Efetuado</p>';
        }
        else {
            echo '<p>Dados Incorretos</p>';
        }
        ?>


        <form method="get">
            <br>
            Data inicial:
            <input type="date" name="dateini" value="date"><br>
            Data inicial:
            <input type="date" name="datefim" value="date"> <br>
            <input type="submit" value="Enviar">

        </form >
        <fieldset>
        <legend>Dados:</legend>
        <form action="resposta.php" method="post">
            <p>Usuário:<br>
                <input type="name" name="login">
            
            </p>
            <p>Senha:<br>
                <input type="password" name="senha">
            
            </p>
            <p>
            <input type="reset" value="Limpar">
            <input type="submit" value="Enviar">
            </p>
            
        </form>
        </fieldset>



    </body>



</html>