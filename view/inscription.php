<?php

declare(strict_types=1);

require_once __DIR__ . DIRECTORY_SEPARATOR . "../src/model/_inscription.php";

?>
<div class="form">
    <form action="/inscription" method="post">
        <h3>inscription</h3>
        <br>
        <input type="text" placeholder="nom prenom">
        <br>
        <input type="tel" placeholder="0777273745">
        <br>
        <input type="email" placeholder="exemple@gmail.com">
        <br>
        <input type="password" placeholder="**********">
        <br>
        <button type="submit" class="btnActive">envoyer</button>
    </form>
</div>