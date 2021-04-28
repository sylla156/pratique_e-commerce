<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/css/style.css">
    <script src="js/main.js" type="module" async></script>
    <title><?= $title_of_references ?? "erreur1" ?></title>
</head>

<body>
    <main class="main">

        <header class="main__header">
            <div class="main__header--btnCategory"><img src="https://www.flaticon.com/svg/vstatic/svg/1141/1141964.svg?token=exp=1619179548~hmac=4e94990f14ac1c643d4d421d9b6997ea" class="main__header--btnCategory-img icone" alt="button de categorie" srcset=""></div>
            <h4 class="main__header--title"><a href="./" class="linkNoActive"> <?= $title_of_site ?? "e_commerce" ?>       </a></h4>

            <form action="get" class="main__header--form">

                <input type="text" name="search" id="search" placeholder="recherche">
                <span></span>
                <input type="submit" value="recherche">
            </form>

            <div class="main__header--basket"><img src="https://www.flaticon.com/svg/vstatic/svg/60/60992.svg?token=exp=1619179672~hmac=fe932fa7dd7d059be112fbf8b409c2c2" class="icone" alt="panier" srcset=""></div>
            <div class="main__header--btnNav"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5tGoMe0TO8Z4nSXJn-iUFuII1c2RyJM-ZeA&usqp=CAU" class="main__header--btnNav-img icone" alt="button de navigation" srcset=""></div>
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
            <ul class="main__nav--parentList">
                <li class="main__nav--parentList-child "><a href="/connexion" class="btnActive">connexion</a></li>
                <p class="lineBr"></p>
                <li class="main__nav--parentList-child "><a href="/inscription" class="btnDislabel">inscription</a></li>
            </ul>
        </div>

        <!-- === === === === === === === === === ===
        === === la finision de nav === ===
                 === === === === === === === === === === -->


        <?php
        if ($_SERVER['REQUEST_URI'] === '/') {
            ?>

            <div class="main__carousel">
                <div class="main__carousel--btnPrevCarousel">
                    <img src="https://www.flaticon.com/svg/vstatic/svg/271/271228.svg?token=exp=1619374975~hmac=93be500eb0bbc0c00ce2e91ba72b1d34" alt="next" class="icone" style="transform: rotate(180deg);" srcset="">
                </div>

                <div class="main__carousel--main">
                    <div class=main__carousel--main__btnSelectorCarousel">
                        <ul class="main__carousel--main__btnSelectorCarousel--parentSelectorElementOfCarousel">

                        </ul>
                    </div>
                    <ul class="main__carousel--main-parentElement">
                        <li class="main__carousel--main-parentElement_element"><a href="./"><img src="./picture/carousel/pc0.jpg" alt="image" srcset=""></a></li>
                        <li class="main__carousel--main-parentElement_element"><a href="./"><img src="./picture/carousel/pc1.jpg" alt="image" srcset=""></a></li>
                        <li class="main__carousel--main-parentElement_element"><a href="./"><img src="./picture/carousel/pc2.jpg" alt="image" srcset=""></a></li>
                        <li class="main__carousel--main-parentElement_element"><a href="./"><img src="./picture/carousel/pc3.jpg" alt="image" srcset=""></a></li>
                        <li class="main__carousel--main-parentElement_element"><a href="./"><img src="./picture/carousel/pc4.jpg" alt="image" srcset=""></a></li>
                        <li class="main__carousel--main-parentElement_element"><a href="./"><img src="./picture/carousel/pc5.jpg" alt="image" srcset=""></a></li>
                        <li class="main__carousel--main-parentElement_element"><a href="./"><img src="./picture/carousel/pc6.jpg" alt="image" srcset=""></a></li>
                        <li class="main__carousel--main-parentElement_element"><a href="./"><img src="./picture/carousel/pc7.jpg" alt="image" srcset=""></a></li>
                        <li class="main__carousel--main-parentElement_element"><a href="./"><img src="./picture/carousel/pc8.jpg" alt="image" srcset=""></a></li>
                    </ul>
                </div>

                <div class="main__carousel--btnNextCarousel">
                    <img src="https://www.flaticon.com/svg/vstatic/svg/271/271228.svg?token=exp=1619374975~hmac=93be500eb0bbc0c00ce2e91ba72b1d34" alt="prev" class="icone" srcset="">
                </div>
            </div>
        <?php } ?>

        <!-- 
        <section class="main__section">
            <div class="main__section--rein">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere id corporis
                quas quo molestiae. Ratione veniam dolor, quod nobis illo necessitatibus saepe doloribus deserunt
                nostrum explicabo alias quibusdam tempore facilis?
                Nesciunt temporibus fugiat ab eius repellat, quas qui, tenetur fugit amet impedit unde eos pariatur
                exercitationem consectetur nemo ullam beatae doloribus, magnam sit laboriosam dicta ex. At laborum quod
                non.
                Iste modi sed, ipsum et, quaerat provident necessitatibus consequuntur at reiciendis non rerum! Dolores
                deserunt corrupti placeat voluptate eaque nobis, molestiae quis corporis qui, labore adipisci reiciendis
                quam quidem neque!
                Laboriosam assumenda sed dicta ullam animi labore, accusamus, dolorem necessitatibus modi esse soluta
                officia et odio fuga, magnam blanditiis ea enim corporis ut? Fuga ipsa veniam explicabo! Autem, itaque
                eveniet!</div>
        </section> -->


    </main>
</body>

</html>