<?php
    if( !defined('BASE_DIR') ){ define('BASE_DIR', __DIR__ ); }
    if( !defined('TPL_DIR') ){ define('TPL_DIR', BASE_DIR ."/templates/" ); }
    
    require_once BASE_DIR ."/src/helpers.php";
    
    checkGuest();
?>

<!DOCTYPE html>
<html lang="ru" data-theme="light">
    <?php include_once TPL_DIR ."head.php"; ?> 
    <body>
        <?php include_once TPL_DIR ."header.php"; ?>

        <main>
            <link rel="stylesheet" href="/styles/login.css?v=<?= rand(0,999); ?>">
            <form class="card" action="/src/actions/login.php" method="post">
                <h2>Вход</h2>

                <?php if( hasMessage('error') ){ ?>
                    <div class="notice error">
                        <?= getMessage('error'); ?>
                    </div>
                <?php } ?>

                <label for="email">
                    Ваш Email
                    <input type="text" id="email" name="email" placeholder="ivanovd@gmail.com" value="<?= old('email'); ?>" <?= validationErrorAttr('email'); ?>>
                    <?php if( hasValidationError('email') ){ ?>
                        <small><?= validationErrorMessage('email'); ?></small>
                    <?php } ?>
                </label>

                <label for="password">
                    Пароль
                    <input type="password" id="password" name="password" placeholder="******" >
                </label>

                <button type="submit" id="submit">Продолжить</button>
                
                <p class="register-link">
                    У меня еще нет 
                    <a href="/src/register.php">аккаунта</a>
                </p>
            </form>
        </main>

    <?php include_once BASE_DIR ."/components/scripts.php"; ?>
    </body>
</html>