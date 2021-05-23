<?php
if (isset($_GET[$title])) {
    $zone = $_GET[$title];
    $id = explode(".", $zone)[1];
    $zone = explode(".", $zone)[0];
    $info = $title . '&' . $zone . '&' . $id;
    --$id;
    if ($zone === 'update') {
        ?>
        <section class="admin__update">
            <h2 class="admin__update--title"><?= $title ?></h2>
            <form action="/admin?<?= $title ?>" method="post" class="admin__update--form">
                <?php foreach ($data[$id] as $key => $value) {
                    switch ($key) {
                        case $key === 'id' || $key === 'prix':
                            $type = 'number';
                            break;
                        case 'nom':
                            $type = 'text';
                            break;
                        case 'tel':
                            $type = 'tel';
                            break;
                        case 'email':
                            $type = 'email';
                            break;
                        case 'img':
                            $type = 'file';
                            break;
                        case 'pass':
                            $type = 'password';
                            break;
                        default:
                            $type = 'text';
                            break;
                    }
                    echo "<label for='$key' class='admin__update--form-label' >$key</label>";
                    echo "<input type='$type' 
            name='$key' id='$key' 
            class='admin__update--form-$key admin__update--form-input' 
            autocomplete='off' 
            value='$value'> </br>";
                }
                echo "<input type='text' value='$info' name='info' class='noClick'>";
                echo "<input type='submit' value='modify' class='btnActive' style='align-self:center';>";
                ?>
            </form>
        </section>
    <?php } elseif ($zone === "delete") { ?>
        <form action="/admin?<?=$title?>" method="post" class="noClick">
        <input type="text" name="info" value="<?=$info?>">
        <input type="submit" value="envoyer" class="submit">
        </form>
        <script>
        document.querySelector('.submit').click();
        </script>
    <?php }
} ?>