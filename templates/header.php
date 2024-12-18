<?php
    if( !defined('AUTH') ){ define('AUTH', ( isset( $_SESSION['AUTH'] ) && $_SESSION['AUTH'] ? true : false ) ); } 
    if( !defined('TPL') ){ define('TPL', 'main'); }
?>
<link rel="stylesheet" href="/styles/header.css?<?= rand(0,999); ?>">
<header>
    <div class="top">
        <a href="/<?= ( isset( $_SESSION['AUTH'] ) && $_SESSION['AUTH'] ) ? 'src/main.php' : ''; ?>" class="logo">
            FocusXpert
        </a>
        <form method="GET" action="/src/search.php" class="top__search-container">
            <div class="input">
                <input type="search" class="top__search-form" name="query" placeholder="Поиск" autocomplete="off">
                <button class="search_icon">
                    <svg class="svg-inline--fa fa-search fa-w-16 text-900 fs-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                </button>
            </div>
            <button class="search-btn">Найти</button>
        </form>
        <input type="checkbox" id="show_burger" autocomplete="off">
        <nav class="top__nav">
            <?php 
                if( AUTH ){ 
                    switch( TPL ){
                        case "catalog": 
            ?>
                            <a href="/src/catalog.php" class="top__nav-item">О нас</a> 
                            <a href="/src/main.php" class="top__nav-item">Главная</a>
            <?php 
                            break; 
                        case "main": 
            ?>
                            <a href="/src/catalog.php" class="top__nav-item">О нас</a>
                            <a href="/src/catalog.php" class="top__nav-item">Каталог</a> 
            <?php
                            break; 
                        case "search":
            ?>
                            <a href="/src/main.php" class="top__nav-item">Главная</a>
                            <a href="/src/catalog.php" class="top__nav-item">Каталог</a> 
            <?php 
                            break; 
                        default:
            ?>
                            <a href="/src/catalog.php" class="top__nav-item">Каталог</a>
            <?php
                            break; 
                    }
            ?>
                    <a href="/src/cart.php" class="top__nav-item">Корзина</a>
                    <a href="/src/profile.php" class="top__nav-item">Профиль</a>
            <?php
                }
                else {
                    if( TPL == "reg" ){
            ?>
                        <a href="/src/main.php" class="top__nav-item">Главная</a>
                        <a href="/src/catalog.php" class="top__nav-item">Каталог</a>
                        <a href="/" class="top__nav-item">Войти</a>
            <?php 
                    } 
                    else {
            ?>
                        <a href="/" class="top__nav-item">О нас</a>
                        <a href="/" class="top__nav-item">Главная</a>
                        <a href="/" class="top__nav-item">Каталог</a>
                        <a href="/" class="top__nav-item">Корзина</a> 
            <?php 
                    } 
                }
            ?> 
        </nav>
        <label for="show_burger" id="burger_toggle">
            <i></i>
            <i></i>
            <i></i>
        </label>
    </div>
</header>