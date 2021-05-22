<?php

$path = $_SERVER['PATH_INFO'] ?? "merde/rien/a/signaler";
$tabPath = explode('/', $path);
$avis = false;
if ($tabPath[1] === "admin" || $tabPath[1] === "error") {
    $avis = true;
}

if ($avis === false) { ?>
    <main class="main">

        <header class="main__header">
            <div class="main__header--btnCategory">
                <img 
                    src="./picture/icone/list.png" 
                    class="main__header--btnCategory-img icone" 
                    alt="button de categorie"
                >
            </div>

            <h4 class="main__header--title">
                <a href="./" class="linkNoActive"> <?= $title_of_site ?? "e_commerce" ?> </a>
            </h4>
            <form action="get" class="main__header--form">

                <input type="text" name="search" id="search" placeholder="recherche">
                <span></span>
                <input type="submit" value="recherche">
            </form>

            <div class="main__header--basket"><img src="./picture/icone/basket.png" class="icone" alt="panier"></div>
            <div class="main__header--btnNav">
                <?php if ($userName !== null) { ?>
                    <p class="main__header--btnNav-userName "><?= $userName ?>
                    <p class="main__header--btnNav-userImg "></p>
                <?php } else { ?>
                    <img 
                        src="./picture/icone/user.png" 
                        class="main__header--btnNav-img icone" 
                        alt="button de navigation"
                    >
                <?php } ?>
            </div>
        </header>


        <!-- === === === === === === === === === ===
=== === le contenue de category === ===
         === === === === === === === === === === -->


        <div class="main__category noClick">
            <ul class="main__category--parentList">
                <li class="main__category--parentList-child1 main__category--parentList-child">category1</li>
                <li class="main__category--parentList-child2 main__category--parentList-child">category2</li>
                <li class="main__category--parentList-child3 main__category--parentList-child">category3</li>
                <li class="main__category--parentList-child4 main__category--parentList-child">category4</li>
                <li class="main__category--parentList-child5 main__category--parentList-child">category5</li>
                <li class="main__category--parentList-child6 main__category--parentList-child">category6</li>
                <li class="main__category--parentList-child7 main__category--parentList-child">category7</li>
                <li class="main__category--parentList-child8 main__category--parentList-child">category8</li>
                <li class="main__category--parentList-child9 main__category--parentList-child">category9</li>
                <li class="main__category--parentList-child10 main__category--parentList-child">category10</li>
            </ul>
        </div>

        <!-- === === === === === === === === === ===
=== === la finision de category === ===
         === === === === === === === === === === -->


        <!-- === === === === === === === === === ===
=== === le contenue de nav === ===
         === === === === === === === === === === -->

        <div class="main__nav noClick">
            <div class="main__nav--center">
                <ul class="main__nav--center--parentList">
                    <?php if (isset($userName)) { ?>
                        <li class="main__nav--center--parentList-child ">
                            <a href="/parametre" class="btnActive" style="padding: 20px 25px; margin: 5px;">
                                parametre
                            </a>
                        </li>
                        <p class="lineBr"></p>
                        <li class="main__nav--center--parentList-child ">
                            <a href="/deconnexion" class="btnDislabel" style="padding: 20px 25px; margin: 5px;">
                                deconnexion
                            </a>
                        </li>
                    <?php } else { ?>
                        <li class="main__nav--center--parentList-child ">
                            <a href="/connexion" class="btnActive" style="padding: 20px 25px; margin: 5px;">
                                connexion
                            </a>
                        </li>
                        <p class="lineBr"></p>
                        <li class="main__nav--center--parentList-child ">class
                            <a href="/inscription" class="btnDislabel" style="padding: 20px 25px; margin: 5px;">
                                inscription
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </main>
    <!-- === === === === === === === === === ===
=== === la finision de nav === ===
         === === === === === === === === === === -->
<?php } ?>