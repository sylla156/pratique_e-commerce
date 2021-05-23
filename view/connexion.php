<?php

declare(strict_types=1);

require_once __DIR__ . DIRECTORY_SEPARATOR . "../src/model/_connexion.php";
$error = $connexionError ?? "";

?>
<div class="form">
    <?php if (strlen($error) >= 5) { ?>
        <p class="alertDanger"><?= $error ?></p>
    <?php } ?>
    <form action="/connexion" method="post">
        <h3 class="clickOfConnectAdmin">connexion</h3>
        <br>
        <input type="email" placeholder="exemple@gmail.com" name="email">
        <br>
        <input type="password" placeholder="**********" name="password">
        <br>
        <select name="typeConnexion" id="typeConnexion">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
        <br>
        <button type="submit" class="btnActive">envoyer</button>
    </form>
    <br>
</div>


<?php
?>