<?php 

session_start();

require_once __DIR__ . '/actions/config.php';

function redirect($path){
    header(header: "Location: $path");
    die();
}

function addValidationError($fieldName, $message){
    $_SESSION['validation'][$fieldName] = $message;
}

function setValidationError(string $fieldName, string $message): void
{
    $_SESSION['validation'][$fieldName] = $message;
}

function hasValidationError($fieldName): bool{
    return isset($_SESSION['validation'][$fieldName]);
}

function validationErrorAttr($fieldName){
    echo isset($_SESSION['validation'][$fieldName]) ? 'aria-invalid="true"' : '';
}

function validationErrorMessage($fieldName){
    $message = $_SESSION['validation'][$fieldName] ?? '';
    unset($_SESSION['validation'][$fieldName]);
    echo $message;
}

function setOldValue(string $key, mixed $value): void
{
    $_SESSION['old'][$key] = $value;
}

function old($key){
    $data = $_SESSION['old'][$key] ?? '';
    unset($_SESSION['old'][$key]);
    return $data;
}

function uploadFile(array $file, string $prefix = ''): string{
    $uploadPath = __DIR__ . '/../uploads';

    if (!is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }

    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $fileName = $prefix . '_' . time() . ".$ext";

    if (!move_uploaded_file($file['tmp_name'], "$uploadPath/$fileName")) {
        die('Ошибка при загрузке файла на сервер');
    }

    return "uploads/$fileName";
}

function setMessage(string $key, string $message): void{
    $_SESSION['message'][$key] = $message;
}

function hasMessage(string $key): bool{
    return isset($_SESSION['message'][$key]);
}

function getMessage(string $key): string{
    $message = $_SESSION['message'][$key] ?? '';
    unset($_SESSION['message'][$key]);
    return $message;
}

function getPDO(): PDO {
    try {
        return new \PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';charset=utf8;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    } catch (\PDOException $e) {
        die("Connection error: {$e->getMessage()}");
    }
}

function findUser(string $email): array|bool
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

function currentUser(): array|false
{
    $pdo = getPDO();

    // Если сессия пользователя не установлена
    if (!isset($_SESSION['user'])) {
        return false;
    }

    $userId = $_SESSION['user']['id'] ?? null;

    if (!$userId) {
        return false;
    }

    // Выполняем запрос в базу данных
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $userId]);

    // Возвращаем пользователя, если найден, иначе false
    return $stmt->fetch(\PDO::FETCH_ASSOC) ?: false;
}

    function logout(): void{ 
        unset( $_SESSION['user']['id'] ); 
        unset( $_SESSION['AUTH'] );
        redirect(path: '/');
    }

    function checkAuth(){
        session_start();
        
        if ( !isset( $_SESSION['user'] ) ){
            header("Location: /login.php");
            exit();
        } 
        else {
            $_SESSION['AUTH'] = true; 
        }
        
        return $_SESSION['user'];
    }

function checkGuest(): void
{
    if (isset($_SESSION['user']['id'])) {
        redirect('/src/profile.php');
    }
}

function getProductIdByName($productName) {
    $pdo = getPDO(); 

    $stmt = $pdo->prepare("SELECT id FROM products WHERE name = :name LIMIT 1");
    $stmt->execute(['name' => $productName]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result['id'] ?? null;
}

function getCartItemsByUserId($userId) {
    $pdo = getPDO();
    $stmt = $pdo->prepare("SELECT products.name, products.price, products.img_src, cart_items.quantity 
                           FROM cart_items 
                           JOIN products ON cart_items.product_id = products.id 
                           WHERE cart_items.user_id = :user_id");
    $stmt->execute(['user_id' => $userId]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addToCart(int $userId, int $productId, int $quantity = 1): void
{
    $pdo = getPDO();
    $stmt = $pdo->prepare("SELECT * FROM cart_items WHERE user_id = :user_id AND product_id = :product_id");
    $stmt->execute(['user_id' => $userId, 'product_id' => $productId]);
    $cartItem = $stmt->fetch(\PDO::FETCH_ASSOC);

    if ($cartItem) {
        // Если товар уже в корзине, обновляем количество
        $stmt = $pdo->prepare("UPDATE cart_items SET quantity = quantity + :quantity WHERE id = :id");
        $stmt->execute(['quantity' => $quantity, 'id' => $cartItem['id']]);
    } else {
        // Если товара нет в корзине, добавляем его
        $stmt = $pdo->prepare("INSERT INTO cart_items (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
        $stmt->execute(['user_id' => $userId, 'product_id' => $productId, 'quantity' => $quantity]);
    }
}