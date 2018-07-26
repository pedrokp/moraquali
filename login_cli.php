<?php
session_start();
?>
<div class="login">
    <form method="post" action="resposta.php">
        <fieldset>
            <legend>Cliente:</legend>
            <input type="name" name="login" placeholder="login" required>
            <input type="password" name="senha" placeholder="senha" required>
            <input class="btnentrar" type="reset" value="Limpar">
            <input class="btnentrar" type="submit" value="Entrar">            
        </fieldset>
    </form>
</div>