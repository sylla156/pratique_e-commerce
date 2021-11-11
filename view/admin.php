 <?php

    require_once __DIR__ . DIRECTORY_SEPARATOR . "../src/model/_admin.php";
    $ifAdminIsConnecter  = (isset($_SESSION['admin']) and $_SERVER['PATH_INFO'] === '/admin');
    $DomBloc = $_GET == null;
 if (isset($_GET[$title])) {
     !$DomBloc ? $btnMode = $_GET[$title] : $btnMode = "";
 } else {
     $btnMode = "";
 }
 if ($ifAdminIsConnecter) { ?>
     <main class="admin">
         <header class="admin__header">
             <p class="btnActive"><a href="/deconnexion" class="linkNoActive">deconnnecter </a> </p>
             <p><?= $adminName ?></p>
         </header>
         <?php if ($DomBloc) { ?>
             <section class="admin__section">
                 <h2 class="admin__section--title">administration</h2><br><br>
                 <div class="admin__section--article">
                     <a href="/admin?user" class="linkNoActive admin__section--article-all">
                         <div class=" admin__section--article-user">user</div>
                     </a>
                     <a href="/admin?article" class="linkNoActive admin__section--article-all">
                         <div class=" admin__section--article-article">article</div>
                     </a>
                     <a href="/admin?carousel" class="linkNoActive admin__section--article-all">
                         <div class=" admin__section--article-carousel">carousel</div>
                     </a>
                     <a href="/admin?admin" class="linkNoActive admin__section--article-all">
                         <div class=" admin__section--article-admin">admin</div>
                     </a>
                 </div>
             </section>
         <?php } elseif (!$DomBloc and $btnMode === "") { ?>
             <section class="admin__param">
                 <h2 class="admin__param--title"><?= $title ?></h2>
                 <form action="/admin?<?= $title ?>" method="get" class="admin__param--form">
                     <input type="text" name="<?= $title ?>.search" id="">
                     <input type="submit" value="envoyer">
                 </form>
                 <p class="admin__param--btnAdd">
                     <a href="?<?= $title ?>=add." class="btnActive linkNoActive">add</a>
                 </p>
                 <?php if ($data !== []) { ?>
                     <table class="admin__param--table">
                         <thead>
                             <?php
                                foreach ($data[0] as $key => $value) {
                                    echo "<th>$key</th>";
                                } ?>
                         </thead>

                         <tbody>
                             <?php for ($i = 0; $i < count($data); $i++) {
                                    $dataSelection = $data[$i]; ?>
                                 <tr>
                                     <?php foreach ($dataSelection as $key => $value) {
                                            if (gettype($value) === 'string') {
                                                if (strlen($value) >= 20) {
                                                    $value = substr($value, 0, 20) . "....";
                                                }

                                                if ($key === 'img') {
                                                    $value = "<img src='$value' alt='image' width=100px>";
                                                }
                                            }
                                            echo "<td>$value</td>";
                                     } ?>
                                     <td class="btnActive">
                                         <a 
                                         href="?<?= $title ?>=update.<?= $dataSelection["id"] ?>" 
                                         class="linkNoActive">
                                             modifier
                                         </a>
                                     </td>
                                     <td class="btnActive btnDelete">
                                         <a 
                                         href=" ?<?= $title ?>=delete.<?= $dataSelection["id"] ?>" 
                                         class="linkNoActive"">
                                         suprimer
                                     </a>
                                 </td>
                             </tr>
                             <?php } ?>
                     </tbody>
                 </table>
                 <?php } elseif ($data === []) {
                        echo "<p class='alertDanger'>$error</p>";
                 } ?>
             </section>
         <?php } elseif (!$DomBloc and $btnMode !== "") {
                $searchTrue = false;
             for ($i = 0; $i < strlen($btnMode); $i++) {
                 if ($btnMode[$i] === '_') {
                     $searchTrue = true;
                 }
             }
             if ($searchTrue === false) {
                 require_once __DIR__ . '/formInputForAdmin/module.php';
             }
         } ?>
     </main>

 <?php } elseif ($_SERVER['PATH_INFO'] !== '/admin' || empty($_SESSION['admin'])) {
        echo "<script>location.pathname = '/error'</script>";
 } ?>