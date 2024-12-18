<?php
    if( !defined('BASE_DIR') ){ define('BASE_DIR', __DIR__ ."/../" ); }
    if( !defined('TPL_DIR') ){ define('TPL_DIR', BASE_DIR ."/templates/" ); } 
    if( !defined('TPL') ){ define('TPL', "cart"); }

    require_once BASE_DIR . "/src/helpers.php"; 

    //$user = checkAuth();

    //if( !AUTH ){
    //    header('Location: /');
    //    exit(); 
    //}

?>

<!DOCTYPE html>
<html lang="en">
    <?php include_once TPL_DIR ."head.php"; ?> 
    <body>
        <?php include_once TPL_DIR ."header.php"; ?>
        <main class="cart-page">
            <link rel="stylesheet" href="/styles/cart.css?<?= rand(0,999); ?>">
            <section class="cart">
                <h2 class="cart__heading">Ваша корзина</h2>
                <div id="cart_header">
                    <div class="image"></div>
                    <div class="data">
                        <div class="name">Продукт</div>
                        <div class="qty">Количество</div>
                        <div class="price">Цена</div>
                        <div class="total">Всего</div>
                    </div>
                    <div class="actions"></div>
                </div>
                <div id="cart-items">

                </div>
                <div id="cart_footer">
                    Итого к оплате: <span id="cart-total">0 руб.</span>
                </div>
                <div class="cart__actions">
                    <button class="cart__clear-btn">Очистить корзину</button>
                    <a href="./catalog.php" class="cart__continue-btn">Продолжить покупки</a>
                </div>
            </section>

            <div class="order-form-container">
                <aside class="order-form">
                    <h2>Оформление заказа</h2>
                    <form>
                        <label for="name">ФИО:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="phone">Телефон:</label>
                        <input type="tel" id="phone" name="phone" required>

                        <label for="email">Электронная почта:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="address">Адрес доставки:</label>
                        <textarea id="address" name="address" required></textarea>

                        <button type="submit" class="order-form__submit">Оформить заказ</button>
                    </form>
                </aside>
            </div>
        </main>

    <?php 
        require_once TPL_DIR ."/footer.php"; 
        require_once TPL_DIR ."/cart_confirm.php"; 
    ?>

    
    <script src="/scripts/add_to_cart.js" defer></script>
    <script src="/scripts/script.js" defer></script>
</body>
</html>
