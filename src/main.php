<?php
    if( !defined('BASE_DIR') ){ define('BASE_DIR', __DIR__ ."/../" ); }
    if( !defined('TPL_DIR') ){ define('TPL_DIR', BASE_DIR ."/templates/" ); } 
    if( !defined('TPL') ){ define('TPL', "main"); }

    require_once BASE_DIR ."/src/helpers.php"; 

?>

<!DOCTYPE html>
<html lang="en">
    <?php include_once TPL_DIR ."head.php"; ?> 
    <body> 
        <?php include_once TPL_DIR ."header.php"; ?>
        <main> 
            <script src="/scripts/swiper.js"></script>
            <link rel="stylesheet" href="/styles/swiper.css">
            <link rel="stylesheet" href="/styles/main.css?<?= rand(0,999); ?>">
            <div class="top__content">
                <div class="top__image-block">
                    <div class="top__welcome-text">
                        Добро пожаловать в FocusXpert — ваш проводник в мире фото- и видеотехники
                    </div>
                    <a href="/src/catalog.php" class="top__catalog">Перейти в каталог</a>
                </div>
            </div>

            <section class="categories">
                <h2 class="categories__heading">Категории товаров</h2>
                <div class="categories__list">
                    <div class="categories__item categories__item--cameras">
                        <a href="./catalog.php#cameras" class="categories__link">
                            <img src="/images/categories/camera.jpg" alt="Камеры" class="categories__image">
                            <span class="categories__name">Камеры</span>
                        </a>
                    </div>
                    <div class="categories__item categories__item--gopro">
                        <a href="./catalog.php#gopros" class="categories__link">
                            <img src="/images/categories/gopro.jpg" alt="Go-pro" class="categories__image">
                            <span class="categories__name">Go-pro</span>
                        </a>
                    </div>
                    <div class="categories__item categories__item--lenses">
                        <a href="./catalog.php#lenses" class="categories__link">
                            <img src="/images/categories/lens.jpg" alt="Объективы" class="categories__image">
                            <span class="categories__name">Объективы</span>
                        </a>
                    </div>
                    <div class="categories__item categories__item--accessories">
                        <a href="./catalog.php#accessories" class="categories__link">
                            <img src="/images/categories/accessoires.jpg" alt="Аксессуары" class="categories__image">
                            <span class="categories__name">Аксессуары</span>
                        </a>
                    </div>
                </div>
            </section>

            <section class="best-sellers">
                <h2 class="best-sellers__heading">Хиты продаж</h2> 
                <div class="slider-container slider">
                    <div class="swiper" id="swiper1"> 
                        <ul class="swiper-wrapper">
                            <li class="best-sellers__item product-card swiper-slide" data-product-id="24" data-product-name="GoPro Hero 10 Black" data-price="34999" data-img-src="/images/products/go_pro/GoPro Hero 10.jpg">
                                <div class="icons-box">
                                    <span class="icon icon-favorite" data-product="GoPro Hero 10 Black" title="Добавить в избранное"></span>
                                </div>
                                <div class="img">
                                    <img src="/images/products/go_pro/GoPro Hero 10.jpg" alt="GoPro Hero 10" class="best-sellers__img">
                                </div>
                                <h3 class="best-sellers__item-name">GoPro Hero 10 Black</h3>
                                <p class="best-sellers__item-desc">Экшн-камера для экстремальных условий.</p>
                                <p class="price__item">34 999 руб.</p>
                                <p class="best-sellers__prices">41 999 руб.</p>
                                <button class="add-to-cart-btn">Добавить в корзину</button>
                            </li>
                            <li class="best-sellers__item product-card swiper-slide" data-product-id="41" data-product-name="DJI Ronin-S" data-price="60799" data-img-src="/images/products/accessories/DJI Ronin-S.jpg">
                                <div class="icons-box">
                                    <span class="icon icon-favorite" data-product="DJI Ronin-S" title="Добавить в избранное"></span>
                                </div>
                                <div class="img">
                                    <img src="/images/products/accessories/DJI Ronin-S.jpg" alt="DJI Ronin-S" class="best-sellers__img">
                                </div>
                                <h3 class="best-sellers__item-name">DJI Ronin-S</h3>
                                <p class="best-sellers__item-desc">Стабилизатор для создания плавных кадров.</p>
                                <p class="price__item">24 999 руб.</p>
                                <p class="best-sellers__prices">29 999 руб.</p>
                                <button class="add-to-cart-btn">Добавить в корзину</button>
                            </li>
                            <li class="best-sellers__item product-card swiper-slide" data-product-id="9" data-product-name="Nikon Z6 II" data-price="179999" data-img-src="/images/products/cameras/Nikon Z6 II.jpg">
                                <div class="icons-box">
                                    <span class="icon icon-favorite" data-product="Nikon Z6 II" title="Добавить в избранное"></span>
                                </div>
                                <div class="img">
                                    <img src="/images/products/cameras/Nikon Z6 II.jpg" alt="Nikon Z6 II" class="best-sellers__img"> 
                                </div>
                                <h3 class="best-sellers__item-name">Nikon Z6 II</h3>
                                <p class="best-sellers__item-desc">Мощная беззеркальная камера для профессионалов.</p>
                                <p class="price__item">179 999 руб.</p>
                                <p class="best-sellers__prices">199 999 руб.</p>
                                <button class="add-to-cart-btn">Добавить в корзину</button>
                            </li>
                            <li class="best-sellers__item product-card swiper-slide" data-product-id="14" data-product-name="Leica Q2" data-price="95999" data-img-src="/images/products/cameras/Leica Q2.jpg">
                                <div class="icons-box">
                                    <span class="icon icon-favorite" data-product="Leica Q2" title="Добавить в избранное"></span>
                                </div>
                                <div class="img">
                                    <img src="/images/products/cameras/Leica Q2.jpg" alt="Leica Q2" class="best-sellers__img">
                                </div>
                                <h3 class="best-sellers__item-name">Leica Q2</h3>
                                <p class="best-sellers__item-desc">Премиум камера для настоящих ценителей фотографии.</p>
                                <p class="price__item">109 999 руб.</p>
                                <p class="best-sellers__prices">125 999 руб.</p>
                                <button class="add-to-cart-btn">Добавить в корзину</button>
                            </li>
                            <li class="best-sellers__item product-card swiper-slide" data-product-id="49" data-product-name="Manfrotto Tripod" data-price="22999" data-img-src="/images/products/accessories/Manfrotto Tripod.jpg">
                                <div class="icons-box">
                                    <span class="icon icon-favorite" data-product="Manfrotto Tripod" title="Добавить в избранное"></span>
                                </div>
                                <div class="img">
                                    <img src="/images/products/accessories/Manfrotto Tripod.jpg" alt="Manfrotto Tripod" class="best-sellers__img">
                                </div>
                                <h3 class="best-sellers__item-name">Manfrotto Tripod</h3>
                                <p class="best-sellers__item-desc">Профессиональный штатив для фото- и видеосъемки.</p>
                                <p class="price__item">22 999 руб.</p>
                                <p class="best-sellers__prices">27 999 руб.</p>
                                <button class="add-to-cart-btn">Добавить в корзину</button>
                            </li>
                            <li class="best-sellers__item product-card swiper-slide" data-product-id="7" data-product-name="Sony Alpha 7 IV" data-price="219999" data-img-src="/images/products/cameras/Sony Alpha 7 IV.jpg">
                                <div class="icons-box">
                                    <span class="icon icon-favorite" data-product="Sony Alpha 7 IV" title="Добавить в избранное"></span>
                                </div>
                                <div class="img">
                                    <img src="/images/products/cameras/Sony Alpha 7 IV.jpg" alt="Sony Alpha 7 IV" class="best-sellers__img">
                                </div>
                                <h3 class="best-sellers__item-name">Sony Alpha 7 IV</h3>
                                <p class="best-sellers__item-desc">Идеально подходит для съемки видео и фото.</p>
                                <p class="price__item">219 999 руб.</p>
                                <p class="best-sellers__prices none">219 999 руб.</p>
                                <button class="add-to-cart-btn">Добавить в корзину</button>
                            </li>
                            <li class="best-sellers__item product-card swiper-slide" data-product-id="10" data-product-name="Panasonic Lumix GH6" data-price="149999" data-img-src="/images/products/cameras/Panasonic Lumix GH6.jpg">
                                <div class="icons-box">
                                    <span class="icon icon-favorite" data-product="Panasonic Lumix GH6" title="Добавить в избранное"></span>
                                </div>
                                <div class="img">
                                    <img src="/images/products/cameras/Panasonic Lumix GH6.jpg"  alt="Panasonic Lumix GH6"  class="best-sellers__img">
                                </div>
                                <h3 class="best-sellers__item-name">Panasonic Lumix GH6</h3>
                                <p class="best-sellers__item-desc">Компактная камера для видео с высокой производительностью.</p>
                                <p class="price__item">149 999 руб.</p>
                                <p class="best-sellers__prices none">149 999 руб.</p>
                                <button class="add-to-cart-btn">Добавить в корзину</button>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-pagination"></div> 
                    <button class="swiper-button swiper-button-prev"></button>
                    <button class="swiper-button swiper-button-next"></button>
                </div>
            </section>

            <section class="promotions">
                <h2 class="promotions__heading">Акции</h2>
                <div class="slider2">
                    <div class="swiper" id="swiper2"> 
                        <ul class="swiper-wrapper">
                            <li class="promotions__item product-card swiper-slide" data-product-name="Canon EOS R6" data-price="189999" data-img-src="/images/products/cameras/Canon EOS R6.jpg">
                                <div class="icons-box">
                                    <span class="icon icon-favorite" data-product="Canon EOS R6" title="Добавить в избранное"></span>
                                </div>
                                <div class="img">
                                    <img src="/images/products/cameras/Canon EOS R6.jpg" alt="Canon EOS R6" class="promotions__img">
                                </div>
                                <h3 class="promotions__item-name">Canon EOS R6</h3>
                                <p class="promotions__item-desc">Высокая детализация с новейшей матрицей.</p>
                                <p class="price__item">189 999 руб.</p>
                                <p class="promotions__prices">239 999 руб.</p>
                                <button class="add-to-cart-btn">Добавить в корзину</button>
                            </li>
                            <li class="promotions__item product-card swiper-slide" data-product-id="11" data-product-name="Sony Alpha 1" data-price="451999" data-img-src="/images/products/cameras/Sony Alpha 1.jpg">
                                <div class="icons-box">
                                    <span class="icon icon-favorite" data-product="Sony Alpha 1" title="Добавить в избранное"></span>
                                </div>
                                <div class="img">
                                    <img src="/images/products/cameras/Sony Alpha 1.jpg" alt="Sony Alpha 1" class="promotions__img">
                                </div>
                                <h3 class="promotions__item-name">Sony Alpha 1</h3>
                                <p class="promotions__item-desc">Сверхбыстрая съемка с профессиональным качеством.</p>
                                <p class="price__item">451 999 руб.</p>
                                <p class="promotions__prices">479 999 руб.</p>
                                <button class="add-to-cart-btn">Добавить в корзину</button>
                            </li>
                            <li class="promotions__item product-card swiper-slide" data-product-id="25" data-product-name="GoPro Hero 9 Black" data-price="32999" data-img-src="/images/products/go_pro/GoPro Hero 9.jpg">
                                <div class="icons-box">
                                    <span class="icon icon-favorite" data-product="GoPro Hero 9 Black" title="Добавить в избранное"></span>
                                </div>
                                <div class="img">
                                    <img src="/images/products/go_pro/GoPro Hero 9.jpg" alt="GoPro Hero 9 Black" class="promotions__img">
                                </div>
                                <h3 class="promotions__item-name">GoPro Hero 9 Black</h3>
                                <p class="promotions__item-desc">Прочная экшн-камера с превосходной стабилизацией.</p>
                                <p class="price__item">32 999 руб.</p>
                                <p class="promotions__prices">37 999 руб.</p>
                                <button class="add-to-cart-btn">Добавить в корзину</button>
                            </li>
                            <li class="promotions__item product-card swiper-slide" data-product-id="50" data-product-name="DJI Osmo Mobile 5" data-price="14799" data-img-src="/images/products/accessories/DJI Osmo Mobile 5.jpg">
                                <div class="icons-box">
                                    <span class="icon icon-favorite" data-product="DJI Osmo Mobile 5" title="Добавить в избранное"></span>
                                </div>
                                <div class="img">
                                    <img src="/images/products/accessories/DJI Osmo Mobile 5.jpg" alt="DJI Osmo Mobile 5" class="promotions__img">
                                </div>
                                <h3 class="promotions__item-name">DJI Osmo Mobile 5</h3>
                                <p class="promotions__item-desc">Компактный стабилизатор для вашего смартфона.</p>
                                <p class="price__item">14 799 руб.</p>
                                <p class="promotions__prices">17 999 руб.</p>
                                <button class="add-to-cart-btn">Добавить в корзину</button>
                            </li>
                            <li class="promotions__item product-card swiper-slide" data-product-id="5" data-product-name="Nikon Z7 II" data-price="349999" data-img-src="/images/products/cameras/Nikon Z7 II.jpg">
                                <div class="icons-box">
                                    <span class="icon icon-favorite" data-product="Nikon Z7 II" title="Добавить в избранное"></span>
                                </div>
                                <div class="img">
                                    <img src="/images/products/cameras/Nikon Z7 II.jpg" alt="Nikon Z7 II" class="promotions__img">
                                </div>
                                <h3 class="promotions__item-name">Nikon Z7 II</h3>
                                <p class="promotions__item-desc">Беззеркальная камера с отличной детализацией.</p>
                                <p class="price__item">349 999 руб.</p>
                                <p class="promotions__prices">379 999 руб.</p>
                                <button class="add-to-cart-btn">Добавить в корзину</button>
                            </li>
                            <li class="promotions__item product-card swiper-slide" data-product-id="12" data-product-name="Panasonic Lumix S1" data-price="279999" data-img-src="/images/products/cameras/Panasonic Lumix S1.jpg">
                                <div class="icons-box">
                                    <span class="icon icon-favorite" data-product="Panasonic Lumix S1" title="Добавить в избранное"></span>
                                </div>
                                <div class="img">
                                    <img src="/images/products/cameras/Panasonic Lumix S1.jpg" alt="Panasonic Lumix S1" class="promotions__img">
                                </div>
                                <h3 class="promotions__item-name">Panasonic Lumix S1</h3>
                                <p class="promotions__item-desc">Камера для профессиональной фото- и видеосъемки.</p>
                                <p class="price__item">279 999 руб.</p>
                                <p class="promotions__prices">299 999 руб.</p>
                                <button class="add-to-cart-btn">Добавить в корзину</button>
                            </li>
                        </ul>
                    </div> 
                    <div class="swiper-pagination swiper2-pagination"></div> 
                    <button class="swiper-button swiper-button-prev swiper2-button-prev"></button>
                    <button class="swiper-button swiper-button-next swiper2-button-next"></button>
                </div>
            </section>

            <p class="container__link"><a href="./catalog.php" class="link-to-catalog">Перейти в каталог</a></p>
        </main>

        <?php 
            require_once TPL_DIR ."/footer.php"; 
            require_once TPL_DIR ."/cart_added.php"; 
        ?>

        <!--script src="/scripts/slider.js"></script-->
        <script src="/scripts/add_to_cart.js" defer></script>
        <script src="/scripts/script.js" defer></script>
        <script>
            var swiper1 = new Swiper("#swiper1", {
                grabCursor: true,
                loop: true,
                freeMode: true,
                spaceBetween: 20,
                slidesPerView: 'auto',
                loopSlides: 5,
                direction: "horizontal",
                //slidesPerView: 1,
                pagination: { el: ".swiper-pagination" }, 
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            }); 
            var swiper2 = new Swiper("#swiper2", {
                grabCursor: true,
                loop: true,
                freeMode: true,
                spaceBetween: 20,
                slidesPerView: 'auto',
                loopSlides: 5,
                direction: "horizontal",
                pagination: { el: ".swiper2-pagination" }, 
                navigation: {
                    nextEl: ".swiper2-button-next",
                    prevEl: ".swiper2-button-prev",
                }
            }); 
        </script>
    </body>
</html>