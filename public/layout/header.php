<main class="main">

    <header class="main__header">
        <div class="main__header--btnCategory">
            <img src="./picture/icone/list.png" class="main__header--btnCategory-img icone" alt="button de categorie">
        </div>
        <h4 class="main__header--title"><a href="./" class="linkNoActive"> <?= $title_of_site ?? "e_commerce" ?> 
        </a></h4>

        <form action="get" class="main__header--form">

            <input type="text" name="search" id="search" placeholder="recherche">
            <span></span>
            <input type="submit" value="recherche">
        </form>

        <div class="main__header--basket"><img src="./picture/icone/basket.png" class="icone" alt="panier"></div>
        <div class="main__header--btnNav">
            <?php if (isset($userName)) { ?>
                <p class="main__header--btnNav-userName "><?= $userName ?>
                <p class="main__header--btnNav-userImg "></p>
            <?php } else { ?>
                <img src="./picture/icone/user.png" class="main__header--btnNav-img icone" alt="button de navigation">
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
                        <a href="/parametre" class="btnActive">parametre</a>
                    </li>
                    <p class="lineBr"></p>
                    <li class="main__nav--center--parentList-child ">
                        <a href="/deconnexion" class="btnDislabel">deconnexion</a>
                    </li>
                <?php } else { ?>
                    <li class="main__nav--center--parentList-child ">
                        <a href="/connexion" class="btnActive">connexion</a>
                    </li>
                    <p class="lineBr"></p>
                    <li class="main__nav--center--parentList-child ">
                        <a href="/inscription" class="btnDislabel">inscription</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <!-- === === === === === === === === === ===
=== === la finision de nav === ===
         === === === === === === === === === === -->


    <?php
    if ($_SERVER['REQUEST_URI'] === '/') { ?>
        <div class="main__carousel">
            <div class="main__carousel--btnPrevCarousel">
                <img src="./picture/icone/direction.png" alt="next" class="icone" style="transform: rotate(180deg);">
            </div>

            <div class="main__carousel--main">
                <div class=main__carousel--main__btnSelectorCarousel">
                    <ul class="main__carousel--main__btnSelectorCarousel--parentSelectorElementOfCarousel">

                    </ul>
                </div>
                <ul class="main__carousel--main-parentElement">
                    <li class="main__carousel--main-parentElement_element">
                        <a href="./"><img src="./picture/carousel/pc0.jpg" alt="image"></a>
                    </li>
                    <li class="main__carousel--main-parentElement_element">
                        <a href="./"><img src="./picture/carousel/pc1.jpg" alt="image"></a>
                    </li>
                    <li class="main__carousel--main-parentElement_element">
                        <a href="./"><img src="./picture/carousel/pc2.jpg" alt="image"></a>
                    </li>
                    <li class="main__carousel--main-parentElement_element">
                        <a href="./"><img src="./picture/carousel/pc3.jpg" alt="image"></a>
                    </li>
                    <li class="main__carousel--main-parentElement_element">
                        <a href="./"><img src="./picture/carousel/pc4.jpg" alt="image"></a>
                    </li>
                    <li class="main__carousel--main-parentElement_element">
                        <a href="./"><img src="./picture/carousel/pc5.jpg" alt="image"></a>
                    </li>
                    <li class="main__carousel--main-parentElement_element">
                        <a href="./"><img src="./picture/carousel/pc6.jpg" alt="image"></a>
                    </li>
                    <li class="main__carousel--main-parentElement_element">
                        <a href="./"><img src="./picture/carousel/pc7.jpg" alt="image"></a>
                    </li>
                    <li class="main__carousel--main-parentElement_element">
                        <a href="./"><img src="./picture/carousel/pc8.jpg" alt="image"></a>
                    </li>
                </ul>
            </div>

            <div class="main__carousel--btnNextCarousel">
                <img src="./picture/icone/direction.png" alt="prev" class="icone">
            </div>
        </div>
    <?php } ?>


</main>