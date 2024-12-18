<?php
    if( !defined('BASE_DIR') ){ define('BASE_DIR', __DIR__ ."/../" ); }
    if( !defined('TPL_DIR') ){ define('TPL_DIR', BASE_DIR ."/templates/" ); } 
    if( !defined('TPL') ){ define('TPL', "catalog"); }

    require_once BASE_DIR . "/src/helpers.php";

?>

<!DOCTYPE html>
<html lang="en">
    <?php include_once TPL_DIR ."head.php"; ?> 
    <body>
        <?php include_once TPL_DIR ."header.php"; ?>
        <main>
            <link rel="stylesheet" href="/styles/catalog.css?<?= rand(0,999); ?>">
            
            <div class="top__content">
                <div class="top__image-block">
                <p class="top__welcome-text">Каталог</p>
                </div>
            </div>

            <div class="catalog-header">
                <nav class="breadcrumbs" aria-label="Breadcrumb">
                    <ul class="breadcrumbs-link">
                        <li>
                            <a class="breadcrumbs-link" href="main.php">Главная</a>
                        </li>
                        <li class="filler">/</li>
                        <li>
                            <a class="breadcrumbs-link" href="catalog.php">Каталог товаров</a>
                        </li>
                    </ul>
                </nav>
                <form class="select">
                    <select name="sort-order" class="sort-order">
                        <option value="1">Порядок: сперва новые</option>
                        <option value="2">Порядок: сперва старые</option>
                        <option value="3">Порядок: сперва дорогие</option>
                        <option value="4">Порядок: сперва дешевые</option>
                    </select>
                </form>
            </div>

            <section class="product-box cameras" id="cameras">
                <h2 class="cameras__heading">Камеры</h2>
                <div class="cameras__list">
                    <div class="cameras__item product-card" data-product-id="1" data-product-name="Canon EOS M50 Mark II" data-price="74999" data-img-src="/images/products/cameras/Canon EOS M50 Mark II.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Canon EOS M50 Mark II.jpg" alt="Canon EOS M50 Mark II" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Canon EOS M50 Mark II</h3>
                        <p class="cameras__item-desc" >Идеальна для начинающих фотографов с поддержкой 4K.</p>
                        <p class="cameras__prices">74 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="cameras__item product-card" data-product-id="2" data-product-name="Fujifilm X-T4" data-price="144999" data-img-src="/images/products/cameras/Fujifilm X-T4.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Fujifilm X-T4.jpg" alt="Fujifilm X-T4" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Fujifilm X-T4</h3>
                        <p class="cameras__item-desc">Стабилизация изображения и отличное качество съемки.</p>
                        <p class="cameras__prices">149 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="cameras__item product-card" data-product-id="3" data-product-name="Sony ZV-E10" data-price="67999" data-img-src="/images/products/cameras/Sony ZV-E10.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Sony ZV-E10.jpg" alt="Sony ZV-E10" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Sony ZV-E10</h3>
                        <p class="cameras__item-desc">Отличный выбор для влогеров с гибкими возможностями.</p>
                        <p class="cameras__prices">67 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="cameras__item product-card" data-product-id="4" data-product-name="Nikon D780" data-price="179999" data-img-src="/images/products/cameras/Nikon D780.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Nikon D780.jpg" alt="Nikon D780" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Nikon D780</h3>
                        <p class="cameras__item-desc">Профессиональная зеркалка с быстрым автофокусом.</p>
                        <p class="cameras__prices">179 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="cameras__item product-card" data-product-id="5" data-product-name="Nikon Z7 II" data-price="349999" data-img-src="/images/products/cameras/Nikon Z7 II.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Nikon Z7 II.jpg" alt="Nikon Z7 II" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Nikon Z7 II</h3>
                        <p class="cameras__item-desc">Беззеркальная камера с отличной детализацией.</p>
                        <p class="cameras__prices">349 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="cameras__item product-card" data-product-id="6" data-product-name="Pentax K-1 Mark II" data-price="189999" data-img-src="/images/products/cameras/Pentax K-1 Mark II.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Pentax K-1 Mark II.jpg" alt="Pentax K-1 Mark II" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Pentax K-1 Mark II</h3>
                        <p class="cameras__item-desc">Полнокадровая зеркальная камера с высоким разрешением.</p>
                        <p class="cameras__prices">189 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="cameras__item product-card" data-product-id="7" data-product-name="Sony Alpha 7 IV" data-price="219999" data-img-src="/images/products/cameras/Sony Alpha 7 IV.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Sony Alpha 7 IV.jpg" alt="Sony Alpha 7 IV" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Sony Alpha 7 IV</h3>
                        <p class="cameras__item-desc">Идеально подходит для съемки видео и фото в высоком разрешении.</p>
                        <p class="cameras__prices">219 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="cameras__item product-card" data-product-id="8" data-product-name="Sony A7C" data-price="129999" data-img-src="/images/products/cameras/Sony A7C.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Sony A7C.jpg" alt="Sony A7C" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Sony A7C</h3>
                        <p class="cameras__item-desc">Компактная беззеркальная камера с полнокадровым сенсором.</p>
                        <p class="cameras__prices">129 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="cameras__item product-card" data-product-id="9" data-product-name="Nikon Z6 II" data-price="179999" data-img-src="/images/products/cameras/Nikon Z6 II.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Nikon Z6 II.jpg" alt="Nikon Z6 II" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Nikon Z6 II</h3>
                        <p class="cameras__item-desc">Мощная беззеркальная камера для профессионалов.</p>
                        <p class="cameras__prices">179 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="cameras__item product-card" data-product-id="10" data-product-name="Panasonic Lumix GH6" data-price="149999" data-img-src="/images/products/cameras/Panasonic Lumix GH6.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Panasonic Lumix GH6.jpg" alt="Panasonic Lumix GH6" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Panasonic Lumix GH6</h3>
                        <p class="cameras__item-desc">Компактная камера для видео с высокой производительностью.</p>
                        <p class="cameras__prices">149 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="cameras__item product-card" data-product-id="11" data-product-name="Sony Alpha 1" data-price="451999" data-img-src="/images/products/cameras/Sony Alpha 1.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Sony Alpha 1.jpg" alt="Sony Alpha 1" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Sony Alpha 1</h3>
                        <p class="cameras__item-desc">Сверхбыстрая съемка с профессиональным качеством.</p>
                        <p class="cameras__prices">451 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="cameras__item product-card" data-product-id="12" data-product-name="Panasonic Lumix S1" data-price="279999" data-img-src="/images/products/cameras/Canon EOS M50 Mark II.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Panasonic Lumix S1.jpg" alt="Panasonic Lumix S1" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Panasonic Lumix S1</h3>
                        <p class="cameras__item-desc">Камера для профессиональной фото- и видеосъемки.</p>
                        <p class="cameras__prices">279 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div> 
                    <div class="cameras__item product-card" data-product-id="13" data-product-name="Panasonic Lumix GH5 II" data-price="106999" data-img-src="/images/products/cameras/Panasonic Lumix GH5 II.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Panasonic Lumix GH5 II.jpg" alt="Panasonic Lumix GH5 II" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Panasonic Lumix GH5 II</h3>
                        <p class="cameras__item-desc">Отлично подходит для видео и гибридных съемок.</p>
                        <p class="cameras__prices">106 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="cameras__item product-card" data-product-id="14" data-product-name="Leica Q2" data-price="469999" data-img-src="/images/products/cameras/Leica Q2.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Leica Q2.jpg" alt="Leica Q2" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Leica Q2</h3>
                        <p class="cameras__item-desc">Премиум камера для настоящих ценителей фотографии.</p>
                        <p class="cameras__prices">109 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="cameras__item product-card" data-product-id="15" data-product-name="Olympus OM-D E-M1 Mark III" data-price="95999" data-img-src="/images/products/cameras/Olympus OM-D E-M1 Mark III.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Olympus OM-D E-M1 Mark III.jpg" alt="Olympus OM-D E-M1 Mark III" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Olympus OM-D E-M1 Mark III</h3>
                        <p class="cameras__item-desc">Компактная камера с профессиональными функциями.</p>
                        <p class="cameras__prices">95 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="cameras__item product-card" data-product-id="16" data-product-name="Canon EOS R6" data-price="189999" data-img-src="/images/products/cameras/Canon EOS R6.jpg">
                        <div class="image">
                            <img src="/images/products/cameras/Canon EOS R6.jpg" alt="Canon EOS R6" class="cameras__img">
                        </div>
                        <h3 class="cameras__item-name">Canon EOS R6</h3>
                        <p class="cameras__item-desc">Полнокадровая камера с быстрой автофокусировкой.</p>
                        <p class="cameras__prices">189 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                </div>
            </section>

            <section class="product-box gopro" id="gopros">
                <h2 class="gopro__heading">Камеры GoPro</h2>
                <div class="gopro__list">
                    <div class="gopro__item product-card" data-product-id="17" data-product-name="GoPro Hero 11 Black" data-price="47999" data-img-src="/images/products/go_pro/GoPro Hero 11 Black.jpg">
                        <div class="image">
                            <img src="/images/products/go_pro/GoPro Hero 11 Black.jpg" alt="GoPro Hero 11 Black" class="gopro__img">
                        </div>
                        <h3 class="gopro__item-name">GoPro Hero 11 Black</h3>
                        <p class="gopro__item-desc">Прочная экшн-камера с поддержкой записи видео в 5K.</p>
                        <p class="gopro__prices">47 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="gopro__item product-card" data-product-id="18" data-product-name="GoPro Max" data-price="52999" data-img-src="/images/products/go_pro/GoPro Max.jpg">
                        <div class="image">
                            <img src="/images/products/go_pro/GoPro Max.jpg" alt="GoPro Max" class="gopro__img">
                        </div>
                        <h3 class="gopro__item-name">GoPro Max</h3>
                        <p class="gopro__item-desc">Камера с возможностью 360-градусной записи видео.</p>
                        <p class="gopro__prices">52 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="gopro__item product-card" data-product-id="19" data-product-name="GoPro Hero 8 Black" data-price="31999" data-img-src="/images/products/go_pro/GoPro Hero 8 Black.jpg">
                        <div class="image">
                            <img src="/images/products/go_pro/GoPro Hero 8 Black.jpg" alt="GoPro Hero 8 Black" class="gopro__img">
                        </div>
                        <h3 class="gopro__item-name">GoPro Hero 8 Black</h3>
                        <p class="gopro__item-desc">Компактная камера с прочным корпусом и отличной стабилизацией.</p>
                        <p class="gopro__prices">31 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="gopro__item product-card" data-product-id="20" data-product-name="GoPro Hero 7 Black" data-price="27999" data-img-src="/images/products/go_pro/GoPro Hero 7 Black.jpg">
                        <div class="image">
                            <img src="/images/products/go_pro/GoPro Hero 7 Black.jpg" alt="GoPro Hero 7 Black" class="gopro__img">
                        </div>
                        <h3 class="gopro__item-name">GoPro Hero 7 Black</h3>
                        <p class="gopro__item-desc">Прочная и водонепроницаемая камера для активных приключений.</p>
                        <p class="gopro__prices">27 999 руб.</p>
                        <button class="add-to-cart-btn" >Добавить в корзину</button>
                    </div>
                    <div class="gopro__item product-card" data-product-id="21" data-product-name="GoPro Hero 6 Black" data-price="23999" data-img-src="/images/products/go_pro/GoPro Hero 6 Black.jpg">
                        <div class="image">
                            <img src="/images/products/go_pro/GoPro Hero 6 Black.jpg" alt="GoPro Hero 6 Black" class="gopro__img">
                        </div>
                        <h3 class="gopro__item-name">GoPro Hero 6 Black</h3>
                        <p class="gopro__item-desc">Надежная камера с отличной стабилизацией и 4K-съемкой.</p>
                        <p class="gopro__prices">24 999 руб.</p>
                        <button class="add-to-cart-btn" >Добавить в корзину</button>
                    </div>
                    <div class="gopro__item product-card" data-product-id="22" data-product-name="GoPro Hero 5 Session" data-price="19999" data-img-src="/images/products/go_pro/GoPro Hero 5 Session.jpg">
                        <div class="image">
                            <img src="/images/products/go_pro/GoPro Hero 5 Session.jpg" alt="GoPro Hero 5 Session" class="gopro__img">
                        </div>
                        <h3 class="gopro__item-name">GoPro Hero 5 Session</h3>
                        <p class="gopro__item-desc">Компактная экшн-камера с поддержкой 4K-видео.</p>
                        <p class="gopro__prices">19 999 руб.</p>
                        <button class="add-to-cart-btn" >Добавить в корзину</button>
                    </div>
                    <div class="gopro__item product-card" data-product-id="23" data-product-name="GoPro Fusion" data-price="30999" data-img-src="/images/products/go_pro/GoPro Fusion.jpg">
                        <div class="image">
                            <img src="/images/products/go_pro/GoPro Fusion.jpg" alt="GoPro Fusion" class="gopro__img">
                        </div>
                        <h3 class="gopro__item-name">GoPro Fusion</h3>
                        <p class="gopro__item-desc">Камера для 360-градусной съемки в формате 5.2K.</p>
                        <p class="gopro__prices">30 999 руб.</p>
                        <button class="add-to-cart-btn" >Добавить в корзину</button>
                    </div>
                    <div class="gopro__item product-card" data-product-id="24" data-product-name="GoPro Hero 10 Black" data-price="34999" data-img-src="/images/products/go_pro/GoPro Hero 10 Black.jpg">
                        <div class="image">
                            <img src="/images/products/go_pro/GoPro Hero 10.jpg" alt="GoPro Hero 10 Black" class="gopro__img">
                        </div>
                        <h3 class="gopro__item-name">GoPro Hero 10 Black</h3>
                        <p class="gopro__item-desc">Высокая производительность и съемка в условиях низкой освещенности.</p>
                        <p class="gopro__prices">34 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="gopro__item product-card" data-product-id="25" data-product-name="GoPro Hero 9 Black" data-price="32999" data-img-src="/images/products/go_pro/GoPro Hero 9.jpg">
                        <div class="image">
                            <img src="/images/products/go_pro/GoPro Hero 9.jpg" alt="GoPro Hero 9 Black" class="gopro__img">
                        </div>
                        <h3 class="gopro__item-name">GoPro Hero 9 Black</h3>
                        <p class="gopro__item-desc">Отличная стабилизация и поддержка записи в 4K.</p>
                        <p class="gopro__prices">32 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                </div>
            </section>

            <section class="product-box lenses" id="lenses">
                <h2 class="lenses__heading">Объективы для камер</h2>
                <div class="lenses__list">
                    <div class="lenses__item product-card" data-product-id="26" data-product-name="Canon EF 50mm f/1.8 STM" data-price="14999" data-img-src="/images/products/lenses/Canon EF 50mm f1.8 STM.jpg">
                        <div class="image">
                            <img src="/images/products/lenses/Canon EF 50mm f1.8 STM.jpg" alt="Canon EF 50mm f/1.8 STM" class="lenses__img">
                        </div>
                        <h3 class="lenses__item-name">Canon EF 50mm f/1.8 STM</h3>
                        <p class="lenses__item-desc">Классический портретный объектив с широкой диафрагмой.</p>
                        <p class="lenses__prices">14 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="lenses__item product-card" data-product-id="27" data-product-name="Sony FE 24-70mm f/2.8 GM" data-price="169999" data-img-src="/images/products/lenses/Sony FE 24-70mm f2.8 GM.jpg">
                        <div class="image">
                            <img src="/images/products/lenses/Sony FE 24-70mm f2.8 GM.jpg" alt="Sony FE 24-70mm f/2.8 GM" class="lenses__img">
                        </div>
                        <h3 class="lenses__item-name">Sony FE 24-70mm f/2.8 GM</h3>
                        <p class="lenses__item-desc">Универсальный зум-объектив для профессионалов.</p>
                        <p class="lenses__prices">169 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="lenses__item product-card" data-product-id="28" data-product-name="Nikon Z 14-24mm f/2.8 S" data-price="209999" data-img-src="/images/products/lenses/Nikon Z 14-24mm f2.8 S.jpg">
                        <div class="image">
                            <img src="/images/products/lenses/Nikon Z 14-24mm f2.8 S.jpg" alt="Nikon Z 14-24mm f/2.8 S" class="lenses__img">
                        </div>
                        <h3 class="lenses__item-name">Nikon Z 14-24mm f/2.8 S</h3>
                        <p class="lenses__item-desc">Широкоугольный объектив для архитектурной и пейзажной съемки.</p>
                        <p class="lenses__prices">209 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="lenses__item product-card" data-product-id="29" data-product-name="Tamron 28-75mm f/2.8 Di III RXD" data-price="74999" data-img-src="/images/products/lenses/Tamron 28-75mm f2.8 Di III RXD.jpg">
                        <div class="image">
                            <img src="/images/products/lenses/Tamron 28-75mm f2.8 Di III RXD.jpg" alt="Tamron 28-75mm f/2.8 Di III RXD" class="lenses__img">
                        </div>
                        <h3 class="lenses__item-name">Tamron 28-75mm f/2.8 Di III RXD</h3>
                        <p class="lenses__item-desc">Легкий и компактный зум-объектив для Sony E-mount.</p>
                        <p class="lenses__prices">74 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="lenses__item product-card" data-product-id="30" data-product-name="Sigma 35mm f1.4 DG HSM Art" data-price="81999" data-img-src="/images/products/lenses/Sigma 35mm f1.4 DG HSM Art.jpg">
                        <div class="image">
                            <img src="/images/products/lenses/Sigma 35mm f1.4 DG HSM Art.jpg" alt="Sigma 35mm f/1.4 DG HSM Art" class="lenses__img">
                        </div>
                        <h3 class="lenses__item-name">Sigma 35mm f1.4 DG HSM Art</h3>
                        <p class="lenses__item-desc">Объектив с высоким разрешением для художественной съемки.</p>
                        <p class="lenses__prices">81 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="lenses__item product-card" data-product-id="31" data-product-name="Fujifilm XF 56mm f/1.2 R" data-price="95999" data-img-src="/images/products/lenses/Fujifilm XF 56mm f1.2 R.jpg">
                        <div class="image">
                            <img src="/images/products/lenses/Fujifilm XF 56mm f1.2 R.jpg" alt="Fujifilm XF 56mm f/1.2 R" class="lenses__img">
                        </div>
                        <h3 class="lenses__item-name">Fujifilm XF 56mm f/1.2 R</h3>
                        <p class="lenses__item-desc">Идеальный объектив для портретов с малой глубиной резкости.</p>
                        <p class="lenses__prices">95 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="lenses__item product-card" data-product-id="32" data-product-name="Samyang AF 85mm f/1.4 RF" data-price="99999" data-img-src="/images/products/lenses/Samyang AF 85mm f1.4 RF.jpg">
                        <div class="image">
                            <img src="/images/products/lenses/Samyang AF 85mm f1.4 RF.jpg" alt="Samyang AF 85mm f/1.4 RF" class="lenses__img">
                        </div>
                        <h3 class="lenses__item-name">Samyang AF 85mm f/1.4 RF</h3>
                        <p class="lenses__item-desc">Идеальный портретный объектив для камер Canon RF.</p>
                        <p class="lenses__prices">99 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="lenses__item product-card" data-product-id="33" data-product-name="Zeiss Batis 85mm f/1.8" data-price="119999" data-img-src="/images/products/lenses/Zeiss Batis 85mm f1.8.jpg">
                        <div class="image">
                            <img src="/images/products/lenses/Zeiss Batis 85mm f1.8.jpg" alt="Zeiss Batis 85mm f/1.8" class="lenses__img">
                        </div>
                        <h3 class="lenses__item-name">Zeiss Batis 85mm f/1.8</h3>
                        <p class="lenses__item-desc">Качественный портретный объектив для камер Sony.</p>
                        <p class="lenses__prices">119 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="lenses__item product-card" data-product-id="34" data-product-name="Tokina AT-X 11-16mm f/2.8 PRO DX" data-price="44999" data-img-src="/images/products/lenses/Tokina AT-X 11-16mm f2.8 PRO DX.jpg">
                        <div class="image">
                            <img src="/images/products/lenses/Tokina AT-X 11-16mm f2.8 PRO DX.jpg" alt="Tokina AT-X 11-16mm f/2.8 PRO DX" class="lenses__img">
                        </div>
                        <h3 class="lenses__item-name">Tokina AT-X 11-16mm f/2.8 PRO DX</h3>
                        <p class="lenses__item-desc">Широкоугольный объектив для пейзажной и архитектурной съемки.</p>
                        <p class="lenses__prices">44 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="lenses__item product-card" data-product-id="35" data-product-name="Canon RF 85mm f/2 Macro IS STM" data-price="89999" data-img-src="/images/products/lenses/Canon RF 85mm f2 Macro IS STM.jpg">
                        <div class="image">
                            <img src="/images/products/lenses/Canon RF 85mm f2 Macro IS STM.jpg" alt="Canon RF 85mm f/2 Macro IS STM" class="lenses__img">
                        </div>
                        <h3 class="lenses__item-name">Canon RF 85mm f/2 Macro IS STM</h3>
                        <p class="lenses__item-desc">Портретный объектив с макро возможностями для камер Canon RF.</p>
                        <p class="lenses__prices">89 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="lenses__item product-card" data-product-id="36" data-product-name="Panasonic Lumix G 25mm f/1.7 ASPH" data-price="29999" data-img-src="/images/products/lenses/Panasonic Lumix G 25mm f1.7 ASPH.jpg">
                        <div class="image">
                            <img src="/images/products/lenses/Panasonic Lumix G 25mm f1.7 ASPH.jpg" alt="Panasonic Lumix G 25mm f/1.7 ASPH" class="lenses__img">
                        </div>
                        <h3 class="lenses__item-name">Panasonic Lumix G 25mm f/1.7 ASPH</h3>
                        <p class="lenses__item-desc">Компактный фикс-объектив с быстрой автофокусировкой.</p>
                        <p class="lenses__prices">29 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="lenses__item product-card" data-product-id="37" data-product-name="Olympus M.Zuiko Digital ED 12-40mm f/2.8 PRO" data-price="119999" data-img-src="/images/products/lenses/Olympus M.Zuiko Digital ED 12-40mm f2.8 PRO.jpg">
                        <div class="image">
                            <img src="/images/products/lenses/Olympus M.Zuiko Digital ED 12-40mm f2.8 PRO.jpg" alt="Olympus M.Zuiko Digital ED 12-40mm f/2.8 PRO" class="lenses__img">
                        </div>
                        <h3 class="lenses__item-name">Olympus M.Zuiko Digital ED 12-40mm f/2.8 PRO</h3>
                        <p class="lenses__item-desc">Профессиональный зум-объектив для камер Micro Four Thirds.</p>
                        <p class="lenses__prices">119 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="lenses__item product-card" data-product-id="38" data-product-name="Nikon AF-S 70-200mm f/2.8E FL ED VR" data-price="219999" data-img-src="/images/products/lenses/Nikon AF-S 70-200mm f2.8E FL ED VR.jpg">
                        <div class="image">
                            <img src="/images/products/lenses/Nikon AF-S 70-200mm f2.8E FL ED VR.jpg" alt="Nikon AF-S 70-200mm f/2.8E FL ED VR" class="lenses__img">
                        </div>
                        <h3 class="lenses__item-name">Nikon AF-S 70-200mm f/2.8E FL ED VR</h3>
                        <p class="lenses__item-desc">Телеобъектив для съемки спортивных событий и дикой природы.</p>
                        <p class="lenses__prices">219 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                </div>
            </section>

            <section class="product-box accessories" id="accessories">
                <h2 class="accessories__heading">Аксессуары для камер</h2>
                <div class="accessories__list">
                    <div class="accessories__item product-card" data-product-id="39" data-product-name="Manfrotto Compact Action Tripod" data-price="6499" data-img-src="/images/products/accessories/Manfrotto Compact Action Tripod.jpg">
                        <div class="image">
                            <img src="/images/products/accessories/Manfrotto Compact Action Tripod.jpg" alt="Manfrotto Compact Action Tripod" class="accessories__img">
                        </div>
                        <h3 class="accessories__item-name">Manfrotto Compact Action Tripod</h3>
                        <p class="accessories__item-desc">Универсальный штатив для фото- и видеосъемки.</p>
                        <p class="accessories__prices">6 499 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="accessories__item product-card" data-product-id="40" data-product-name="Rode VideoMic Pro" data-price="19999" data-img-src="/images/products/accessories/Rode VideoMic Pro.jpg">
                        <div class="image">
                            <img src="/images/products/accessories/Rode VideoMic Pro.jpg" alt="Rode VideoMic Pro" class="accessories__img">
                        </div>
                        <h3 class="accessories__item-name">Rode VideoMic Pro</h3>
                        <p class="accessories__item-desc">Микрофон для профессиональной видеосъемки.</p>
                        <p class="accessories__prices">19 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="accessories__item product-card" data-product-id="41" data-product-name="DJI Ronin-SC Gimbal" data-price="24999" data-img-src="/images/products/accessories/DJI Ronin-SC Gimbal.jpg">
                        <div class="image">
                            <img src="/images/products/accessories/DJI Ronin-SC Gimbal.jpg" alt="DJI Ronin-SC Gimbal" class="accessories__img">
                        </div>
                        <h3 class="accessories__item-name">DJI Ronin-SC Gimbal</h3>
                        <p class="accessories__item-desc">Компактный стабилизатор для беззеркальных камер.</p>
                        <p class="accessories__prices">24 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="accessories__item product-card" data-product-id="42" data-product-name="Peak Design Everyday Backpack.jpg" data-price="18999" data-img-src="/images/products/accessories/Peak Design Everyday Backpack.jpg">
                        <div class="image">
                            <img src="/images/products/accessories/Peak Design Everyday Backpack.jpg" alt="Peak Design Everyday Backpack" class="accessories__img">
                        </div>
                        <h3 class="accessories__item-name">Peak Design Everyday Backpack</h3>
                        <p class="accessories__item-desc">Универсальный рюкзак для фото- и видеооборудования.</p>
                        <p class="accessories__prices">18 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="accessories__item product-card" data-product-id="43" data-product-name="Lowepro ProTactic 450 AW II" data-price="22999" data-img-src="/images/products/accessories/Lowepro ProTactic 450 AW II.jpg">
                        <div class="image">
                            <img src="/images/products/accessories/Lowepro ProTactic 450 AW II.jpg" alt="Lowepro ProTactic 450 AW II" class="accessories__img">
                        </div>
                        <h3 class="accessories__item-name">Lowepro ProTactic 450 AW II</h3>
                        <p class="accessories__item-desc">Рюкзак для профессионального оборудования с защитой от дождя.</p>
                        <p class="accessories__prices">22 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="accessories__item product-card" data-product-id="44" data-product-name="Godox V1 Flash" data-price="16999" data-img-src="/images/products/accessories/Godox V1 Flash.jpg">
                        <div class="image">
                            <img src="/images/products/accessories/Godox V1 Flash.jpg" alt="Godox V1 Flash" class="accessories__img">
                        </div>
                        <h3 class="accessories__item-name">Godox V1 Flash</h3>
                        <p class="accessories__item-desc">Круглая вспышка с мягким освещением для профессиональной съемки.</p>
                        <p class="accessories__prices">16 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="accessories__item product-card" data-product-id="45" data-product-name="Hoya ProND 1000 Filter 77mm" data-price="4499" data-img-src="/images/products/accessories/Hoya ProND 1000 Filter 77mm.jpg">
                        <div class="image">
                            <img src="/images/products/accessories/Hoya ProND 1000 Filter 77mm.jpg" alt="Hoya ProND 1000 Filter 77mm" class="accessories__img">
                        </div>
                        <h3 class="accessories__item-name">Hoya ProND 1000 Filter 77mm</h3>
                        <p class="accessories__item-desc">Нейтральный фильтр для съемки на длинной выдержке.</p>
                        <p class="accessories__prices">4 499 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="accessories__item product-card" data-product-id="46" data-product-name="SanDisk Extreme Pro SDXC 128GB" data-price="3999" data-img-src="/images/products/accessories/SanDisk Extreme Pro SDXC 128GB.jpg">
                        <div class="image">
                            <img src="/images/products/accessories/SanDisk Extreme Pro SDXC 128GB.jpg" alt="SanDisk Extreme Pro SDXC 128GB" class="accessories__img">
                        </div>
                        <h3 class="accessories__item-name">SanDisk Extreme Pro SDXC 128GB</h3>
                        <p class="accessories__item-desc">Высокоскоростная карта памяти для профессиональной съемки.</p>
                        <p class="accessories__prices">3 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="accessories__item product-card" data-product-id="47" data-product-name="Canon LP-E6N Batter" data-price="5999" data-img-src="/images/products/accessories/Canon LP-E6N Batter.jpg">
                        <div class="image">
                            <img src="/images/products/accessories/Canon LP-E6N Batter.jpg" alt="Canon LP-E6N Battery" class="accessories__img">
                        </div>
                        <h3 class="accessories__item-name">Canon LP-E6N Battery</h3>
                        <p class="accessories__item-desc">Дополнительный аккумулятор для камер Canon.</p>
                        <p class="accessories__prices">5 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="accessories__item product-card" data-product-id="48" data-product-name="Sony NP-FZ100 Battery" data-price="7499" data-img-src="/images/products/accessories/Sony NP-FZ100 Battery.jpg">
                        <div class="image">
                            <img src="/images/products/accessories/Sony NP-FZ100 Battery.jpg" alt="Sony NP-FZ100 Battery" class="accessories__img">
                        </div>
                        <h3 class="accessories__item-name">Sony NP-FZ100 Battery</h3>
                        <p class="accessories__item-desc">Дополнительный аккумулятор для камер Sony Alpha.</p>
                        <p class="accessories__prices">7 499 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="accessories__item product-card" data-product-id="49" data-product-name="Manfrotto Tripod" data-price="27999" data-img-src="/images/products/accessories/Manfrotto Tripod.jpg">
                        <div class="image">
                            <img src="/images/products/accessories/Manfrotto Tripod.jpg" alt="Manfrotto Tripod" class="accessories__img">
                        </div>
                        <h3 class="accessories__item-name">Manfrotto Tripod</h3>
                        <p class="accessories__item-desc">Профессиональный штатив для фото- и видеосъемки.</p>
                        <p class="accessories__prices">22 999 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                    <div class="accessories__item product-card" data-product-id="50" data-product-name="DJI Osmo Mobile 5" data-price="14799" data-img-src="/images/products/accessories/DJI Osmo Mobile 5.jpg">
                        <div class="image">
                            <img src="/images/products/accessories/DJI Osmo Mobile 5.jpg" alt="DJI Osmo Mobile 5" class="accessories__img">
                        </div>
                        <h3 class="accessories__item-name">DJI Osmo Mobile 5</h3>
                        <p class="accessories__item-desc">Компактный стабилизатор для вашего смартфона.</p>
                        <p class="accessories__prices">14 799 руб.</p>
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                    </div>
                </div>
            </section>
        </main>

        <?php 
            require_once TPL_DIR ."/footer.php"; 
            require_once TPL_DIR ."/cart_added.php"; 
        ?>

        <script src="/scripts/add_to_cart.js" defer></script>
        <script src="/scripts/script.js" defer></script>
        <script src="/scripts/sort_cat.js"></script>
    </body>
</html>

