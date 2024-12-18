<?php

header('Content-Type: application/json');

require_once __DIR__ . '/actions/config.php';
require_once __DIR__ . '/helpers.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user']['id'])) {
    echo json_encode(['success' => false, 'message' => 'Вы не авторизованы']);
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);
$userId = $_SESSION['user']['id'];
$productId = $data['product_id'];
$quantity = isset($data['quantity']) ? (int)$data['quantity'] : 1; 

if ($quantity <= 0) {
    echo json_encode(['success' => false, 'message' => 'Количество товара должно быть больше 0']);
    exit;
}

try {
    $pdo = getPDO();
    
    $stmt = $pdo->prepare("SELECT quantity FROM cart_items WHERE user_id = :user_id AND product_id = :product_id");
    $stmt->execute(['user_id' => $userId, 'product_id' => $productId]);
    $existingItem = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existingItem) {
        $stmt = $pdo->prepare("UPDATE cart_items SET quantity = :quantity WHERE user_id = :user_id AND product_id = :product_id");
        $stmt->execute(['quantity' => $quantity, 'user_id' => $userId, 'product_id' => $productId]);
    
        echo json_encode(['success' => true, 'message' => 'Количество товара обновлено']);
    } else {
        $stmt = $pdo->prepare("INSERT INTO cart_items (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
        $stmt->execute(['user_id' => $userId, 'product_id' => $productId, 'quantity' => $quantity]);
    
        echo json_encode(['success' => true, 'message' => 'Товар добавлен в корзину']);
    } 
        
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Ошибка при обновлении товара в корзине']);
}
