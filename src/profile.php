<?php
    if( !defined('BASE_DIR') ){ define('BASE_DIR', __DIR__ ."/../" ); }
    if( !defined('TPL_DIR') ){ define('TPL_DIR', BASE_DIR ."/templates/" ); }
    if( !defined('TPL') ){ define('TPL', "profile"); }

    require_once BASE_DIR . "/src/helpers.php";

    // Получаем данные пользователя после проверки авторизации
    $user = checkAuth();  

    //if( !AUTH ){
    //    header('Location: /');
    //    exit(); 
    //}

    $avatar = htmlspecialchars( $user['avatar'] ); 
    $user_name = htmlspecialchars( $user['name'] );
?>

<!DOCTYPE html>
<html lang="ru" data-theme="light">
    <?php include_once TPL_DIR ."head.php"; ?> 
    <body>
        <link rel="stylesheet" href="/styles/profile.css?v=<?= rand(0,999); ?>">
        <?php include_once TPL_DIR ."header.php"; ?>
        <main>
            <div class="card home">
                <img class="avatar" src="<?= $avatar ? $avatar : '/images/icon.png' ?>" alt="<?= $user_name; ?>">
                <h1>Привет, <?= $user_name; ?>!</h1>
                <form action="/src/actions/logout.php" method="post">
                    <button role="button">Выйти из аккаунта</button>
                </form>
            </div>

            <?php include_once BASE_DIR ."/components/scripts.php"; ?>
        </main>
    </body>
</html>