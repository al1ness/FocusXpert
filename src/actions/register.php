<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/../helpers.php";

$avatarPath = null;

$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$passwordConfirmation = $_POST['password_confirmation'] ?? null;
$avatar = $_FILES['avatar'] ?? null;

//Валидация

if(empty($name)){
    addValidationError(fieldName:'name', message:'Неверное имя.');
}

if(!filter_var($email, filter: FILTER_VALIDATE_EMAIL)){
    addValidationError(fieldName:'email', message:'Указана неправильная почта.');
}

if(empty($password)){
    addValidationError(fieldName:'password', message:'Пароль не заполнен.');
}

if($password !== $passwordConfirmation) {
    addValidationError(fieldName:'password', message:'Пароли не сопадают.');
}

if(!empty($avatar)){
    $types = ['image/jpeg', 'image/png'];

    if(!in_array($avatar['type'], $types)){
        addValidationError(fieldName:'avatar', message:'Изображение профиля имеет неверный тип.');
    }

    if($avatar['size'] / 1000000 >= 1){
        addValidationError(fieldName:'avatar', message:'Изображение должно быть меньше 1 мб.');
    }
}

// Если список с ошибками валидации не пустой, то производим редирект обратно на форму
if (!empty($_SESSION['validation'])) {
    setOldValue('name', $name);
    setOldValue('email', $email);
    redirect('/register.php');
}

//  Загружаем аватарку, если она была отправлена в форме
if (!empty($avatar)) {
    $avatarPath = uploadFile($avatar, 'avatar');
}

//var_dump($avatarPath);

//ПОДКЛЮЧЕНИЕ DATA BASE

$pdo = getPDO();

$query = "INSERT INTO users (name, email, avatar, password) VALUES (:name, :email, :avatar, :password)";
$params = [
    'name' => $name,
    'email' => $email,
    'avatar' => $avatarPath,
    'password'=> password_hash($password, PASSWORD_DEFAULT)
];

$stmt = $pdo->prepare($query);

try {
$stmt->execute($params);
} catch (\Exception $e) {
    die($e->getMessage());
}

redirect('/index.php');