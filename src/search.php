<?php
    if( !defined('BASE_DIR') ){ define('BASE_DIR', __DIR__ ."/../" ); }
    if( !defined('TPL_DIR') ){ define('TPL_DIR', BASE_DIR ."/templates/" ); } 
    if( !defined('TPL') ){ define('TPL', "search"); }

    require_once BASE_DIR ."/src/actions/config.php";
    require_once BASE_DIR ."/src/helpers.php";

    $pdo = getPDO();

    // Получение поискового запроса
    $query = $_GET['query'] ?? '';
    $query = trim($query); // Удаляем лишние пробелы

    // Поиск товаров
    $products = [];
    if (!empty($query)) {
        $stmt = $pdo->prepare("SELECT * FROM products WHERE LOWER(name) LIKE LOWER(:query)");
        $stmt->execute(['query' => '%' . mb_strtolower($query) . '%']);
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <?php include_once TPL_DIR ."head.php"; ?> 
    <body>
        <?php include_once TPL_DIR ."header.php"; ?>
        <main id="search_page">
            <link rel="stylesheet" href="/styles/search.css?<?= rand(0,999); ?>"> 
            <h2 class="heading">Результаты поиска</h2>
            <?php 
                if( !empty( $query ) ){ 
                    if( !empty( $products ) ){ 
            ?>
                        <div class="product-list">
                        <?php 
                            foreach( $products as $product ){ 
                        ?>
                            <div class="product-card" 
                                    data-product-id="<?= htmlspecialchars( $product['id'] ) ;?>" 
                                    data-product-name="<?= htmlspecialchars( $product['name'] ); ?>" 
                                    data-price="<?= htmlspecialchars( $product['price'] ); ?>" 
                                    data-img-src="<?= htmlspecialchars( $product['img_src'] ); ?>"
                            >
                                <img src="<?= htmlspecialchars( $product['img_src'] ); ?>" alt="<?= htmlspecialchars( $product['name'] ); ?>" class="product-img">
                                <h3 class="product-name">
                                    <?= htmlspecialchars( $product['name'] ); ?>
                                </h3>
                                <p class="product-desc">
                                    <?= htmlspecialchars( $product['description'] );  ?>
                                </p>
                                <p class="product-price">
                                    <?= htmlspecialchars( $product['price'] ); ?> руб.
                                </p>
                                <button class="add-to-cart-btn">Добавить в корзину</button>
                            </div>
                        <?php 
                            } 
                        ?>
                        </div>
        <?php 
                    } 
                    else { 
        ?>
                        <p>Товар "<strong><?= htmlspecialchars( $query ); ?></strong>" не найден.</p>
        <?php 
                    } 
                } 
                else {
        ?>
                    <p>Введите запрос в строку поиска.</p>
        <?php 
                } 
        ?>
            <a href="/index.php" class="back-link">Вернуться на главную</a>
        </main>

        <?php 
            require_once TPL_DIR ."/cart_added.php"; 
        ?>
        <script src="/scripts/add_to_cart.js" defer></script>
        <script src="/scripts/script.js" defer></script>
    </body>
</html>
