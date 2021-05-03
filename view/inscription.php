<?php

declare(strict_types=1);

require_once __DIR__ . DIRECTORY_SEPARATOR . "../src/model/_inscription.php";
$error = $inscriptionError ?? null;
$good = "inscription valider";
?>

<div class="form">
    <?php if (strlen($error) >= 5){ ?>
        <p class="alertDanger"><?= $error ?></p>
    <?php }?>
    <form action="/inscription" method="post">
        <h3>inscription</h3>
        <br>
        <input type="text" placeholder="nom" name="name">
        <br>
        <input type="tel" placeholder="0777273745" name="tel">
        <br>
        <input type="email" placeholder="exemple@gmail.com" name="email">
        <br>
        <input type="password" placeholder="**********" name="password">
        <br>
        <input type="password" placeholder="**********" name="passwordTest">
        <br>
        <button type="submit" class="btnActive">envoyer</button>
    </form>
</div>