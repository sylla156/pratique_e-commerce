<?php if ($_SERVER['REQUEST_URI'] === '/' || $_GET != null) { ?>
    <main class="article">
        <?php for ($count = 0; $count < 10; $count++) { ?>
            <div class="article__items">
                <img src="../picture/article/pc<?= $count ?>.jpg" alt="" class="article__items--img">
                <h3 class="article__items--price">19 000cfa</h3>
                <p class="article__items--decscribe">juste un peu de phrase</p>
                <div class="article__items--btn">
                    <a href="/article?name=<?= $count ?>" class="btnActive">acheter</a>
                </div>
            </div>
        <?php } ?>
    </main>
<?php } ?>