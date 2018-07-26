<?PHP
session_start();
?>
<div class="duvida">
    <form method="post">
        <fieldset>
            <legend>Dúvida:</legend>
            <input type="name" name="nome" placeholder="nome">
            <input type="email" name="email" placeholder="e-mail">
            <textarea name="duvida" placeholder="dúvida"></textarea>
            <input class="btnenviar" type="submit" value="Enviar">
        </fieldset>
    </form>
</div>
