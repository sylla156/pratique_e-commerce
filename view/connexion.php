<?php

declare(strict_types=1);

require_once __DIR__ . DIRECTORY_SEPARATOR . "../src/model/_connexion.php";
?>
<div class="form">
    <form action="/connexion" method="post">
        <h3>connexion</h3>
        <br>
        <input type="email" placeholder="exemple@gmail.com">
        <br>
        <input type="password" placeholder="**********">
        <br>
        <button type="submit" class="btnActive">envoyer</button>
    </form>
    <br>
</div>