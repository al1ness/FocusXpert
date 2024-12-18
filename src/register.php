<?php
    if( !defined('BASE_DIR') ){ define('BASE_DIR', __DIR__ ."/../" ); }
    if( !defined('TPL_DIR') ){ define('TPL_DIR', BASE_DIR ."/templates/" ); } 
    if( !defined('TPL') ){ define('TPL', "reg"); }

    require_once BASE_DIR . "/src/helpers.php";
?>

<!DOCTYPE html>
<html lang="en">
    <?php include_once TPL_DIR ."head.php"; ?> 
    <body>
        <?php include_once TPL_DIR ."header.php"; ?>
        <main> 
            <link rel="stylesheet" href="/styles/register.css?<?= rand(0,999); ?>">
            <form class="card" action="/src/actions/register.php" method="post" enctype="multipart/form-data">
                <h2>Регистрация</h2>

                <label for="name">
                    Имя
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Иванов Иван"
                        value="<?= old(key: 'name') ?>"
                        <?php validationErrorAttr(fieldName: 'name'); ?>
                    >
                        <?php if(hasValidationError(fieldName: 'name')): ?>
                        <small><?php validationErrorMessage(fieldName: 'name') ?></small>
                        <?php endif; ?>
                </label>

                <label for="email">
                    E-mail
                    <input
                        type="text"
                        id="email"
                        name="email"
                        placeholder="ivanovd@gmail.com"
                        value="<?= old(key: 'email') ?>"
                        <?php validationErrorAttr(fieldName: 'email'); ?>
                        >
                        <?php if(hasValidationError(fieldName: 'email')): ?>
                        <small><?php validationErrorMessage(fieldName: 'email') ?></small>
                        <?php endif; ?>
                </label>

                <label for="avatar">Изображение профиля
                    <input
                        type="file"
                        id="avatar"
                        name="avatar"
                        <?php validationErrorAttr(fieldName: 'avatar'); ?>
                        >
                        <?php if(hasValidationError(fieldName: 'avatar')): ?>
                        <small><?php validationErrorMessage(fieldName: 'avatar') ?></small>
                        <?php endif; ?>
                </label>

                <div class="grid">
                    <label for="password">
                        Пароль
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="******"
                            <?php validationErrorAttr(fieldName: 'password'); ?>
                            >
                            <?php if(hasValidationError(fieldName: 'password')): ?>
                            <small><?php validationErrorMessage(fieldName: 'password') ?></small>
                            <?php endif; ?>
                    </label>

                    <label for="password_confirmation">
                        Подтверждение
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="******"
                            <?php validationErrorAttr(fieldName: 'password_confirmation'); ?>
                        >
                    </label>
                </div>

                <fieldset>
                    <label for="terms">
                        <input
                            type="checkbox"
                            id="terms"
                            name="terms"
                        >
                        Я принимаю все условия пользования
                    </label>
                </fieldset>

                <button
                    type="submit"
                    id="submit"
                    disabled
                >Продолжить</button>

                <p class="register-link">У меня уже есть <a href="../index.php">аккаунт</a></p>
            </form>
        </main>
    
        <script src="/scripts/app.js"></script>
        <?php include_once BASE_DIR ."/components/scripts.php"; ?>
    
    </body>
</html>


