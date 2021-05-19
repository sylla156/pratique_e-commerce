<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "../src/model/_admin.php";
$DomVerifier  = (isset($_SESSION['admin']) and $_SERVER['PATH_INFO'] === '/admin');
$DomBloc = $_GET == null;
if ($DomVerifier) { ?>
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
        <?php } ?>
    </main>

<?php } elseif ($_SERVER['PATH_INFO'] !== '/admin' || empty($_SESSION['admin'])) {
    echo "<script>location.pathname = '/error'</script>";
}
