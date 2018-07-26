<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo '<h3>Olá '.$_SESSION['user'].'</h3><hr>';
        
        echo 'Selecionado: '. $_POST['prod'].'<p>';

        ?>
    </body>
</html>
