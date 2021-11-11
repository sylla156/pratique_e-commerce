<?php if (empty($_SERVER['PATH_INFO'])) { ?>
    <main class="main">
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
    </main>
<?php } ?>