<?php require 'partials/header.php' ?>
    <form method="POST" action="/names">
        <label for="forName">Nom: </label>
        <input type="text" name="name"
               placeholder="Escriu el teu nom aquí"/>
        <input type="submit" value="Enviar">
    </form>
<?php require 'partials/footer.php' ?>