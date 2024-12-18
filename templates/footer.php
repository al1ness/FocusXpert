<link rel="stylesheet" href="/styles/footer.css?v=<?= rand(0,999); ?>">
<footer class="footer">
    <a href="/" class="logo">FocusXpert</a>
    <div class="footer__content">
        <div class="footer__info">
            <nav class="footer__nav">
                <h4 class="footer__nav--heading">Меню</h4>
                <ul class="footer__nav--menu">
                    <li><a href="/src/main.php">Главная</a></li>
                    <li><a href="/src/catalog.php">Каталог</a></li>
                    <li><a href="/src/cart.php">Корзина</a></li>
                </ul>
            </nav>
            <nav>
                <h4 class="footer__nav--heading">Контакты</h4>
                <p><a href="tel:+79115557070" class="footer__nav--link">+79115557070</a></p>
                <p><a href="mailto:support@focusxpert.com" class="footer__nav--link">focusxpert.com</a></p>
                <div class="footer_icons">
                    <img src="/images/media/vk.svg" alt="Вк" class="icon">
                    <img src="/images/media/tg.svg" alt="Тг" class="icon">
                    <img src="/images/media/twitter.svg" alt="Твиттер" class="icon">
                </div>
            </nav>
        </div>
        <form action="#" class="footer__form">
            <h4 class="footer__form--heading">Подпишись, чтобы сразу узнать об акции</h4>
            <input type="email" placeholder="Ваш e-mail" class="footer__form--input">
            <button class="footer__button">Подписаться</button>
        </form>
    </div>
</footer>

