<?php

require_once __DIR__ . '/helpers.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Проверка, авторизован ли пользователь
if (!isset($_SESSION['user']['id'])) {
    echo json_encode(['success' => false, 'message' => 'Вы не авторизованы']);
    exit;
}

$userId = $_SESSION['user']['id'];

try {
    $pdo = getPDO();
    $stmt = $pdo->prepare("SELECT p.`id`, p.`name`, p.`price`, p.`img_src`, ci.`quantity` 
                            FROM `cart_items` AS ci 
                            LEFT JOIN `products` AS p 
                                ON ci.`product_id` = p.`id`  
                            WHERE ci.`user_id` = :user_id");
    $stmt->execute(['user_id' => $userId]);

    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode(['success' => true, 'items' => $items]);
} 
catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Ошибка при получении товаров из корзины']);
}
