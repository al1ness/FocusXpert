<?php

header('Content-Type: application/json');

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

try {
    $pdo = getPDO();
    $stmt = $pdo->prepare("DELETE FROM cart_items WHERE user_id = :user_id");
    $stmt->execute(['user_id' => $userId]);

    echo json_encode(['success' => true, 'message' => 'Корзина успешно очищена']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Ошибка при очистке корзины']);
}