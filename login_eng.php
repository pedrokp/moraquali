<?php
session_start();
?>
<div class="login">
    <form method="post" action="resposta.php">
        <fieldset>
            <legend>Engenheiro:</legend>
            <input type="name" name="login" placeholder="login">
            <input type="password" name="senha" placeholder="senha">
            <input class="btnentrar" type="reset" value="Limpar">
            <input class="btnentrar" type="submit" value="Entrar">            
        </fieldset>
    </form>
</div>
