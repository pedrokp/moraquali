<?PHP 
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="compras.php" method="POST">
        <?php
            echo '<h3>Olá '.$_SESSION['user'].'</h3><hr>';
            $produtos = array ("teclado","mouse","monitor","faxmodem","teclado");
            
            echo '<select name=prod>';
            foreach($produtos as $prod){
                echo '<option value='.$prod.'>'.$prod.'</option>';               
            }
            
            echo '</select>';
        ?>
            <input type="submit" value="Fechar Compra">
                   
        </form>
    </body>
</html>
