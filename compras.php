<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		<link rel="stylesheet" href="main.css">  
		
    </head>
    <body>
		<div class="compras">
        <?php
        echo '<h3>Olá '.$_SESSION['user'].'</h3><hr>';
        
        echo 'Selecionado: '. $_POST['prod'].'<p>';

        ?>
		</div>
    </body>
</html>
