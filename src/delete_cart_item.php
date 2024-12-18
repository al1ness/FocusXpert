<?php

header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/actions/config.php';
require_once __DIR__ . '/helpers.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Проверка аутентификации пользователя
if (!isset($_SESSION['user']['id'])) {
    echo json_encode(['success' => false, 'message' => 'Вы не авторизованы']);
    exit;
}

$userId = $_SESSION['user']['id'];
$data = json_decode(file_get_contents('php://input'), true);
$productId = $data['product_id'] ?? null;

if (empty($productId)) {
    echo json_encode(['success' => false, 'message' => 'Некорректный ID товара']);
    exit;
}

try {
    $pdo = getPDO();
    $stmt = $pdo->prepare("DELETE FROM cart_items WHERE user_id = :user_id AND product_id = :product_id");
    $stmt->execute([
        'user_id' => $userId,
        'product_id' => $productId
    ]);

    echo json_encode(['success' => true, 'message' => 'Товар успешно удален']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Ошибка при удалении товара']);
}
