<main class="forms-main">
<form action="" method="post" class="user-form" id="auth-form">
    <a href="index.php">
        <svg class="to-white-svg" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.18748 4.00932C5.03031 3.85752 4.81981 3.77352 4.60131 3.77542C4.38281 3.77732 4.1738 3.86496 4.0193 4.01947C3.86479 4.17398 3.77715 4.38299 3.77525 4.60148C3.77335 4.81998 3.85735 5.03048 4.00915 5.18765L8.82165 10.0002L4.00831 14.8127C3.92872 14.8895 3.86524 14.9815 3.82156 15.0831C3.77789 15.1848 3.7549 15.2942 3.75394 15.4048C3.75298 15.5155 3.77406 15.6252 3.81596 15.7276C3.85786 15.83 3.91974 15.9231 3.99798 16.0013C4.07623 16.0796 4.16927 16.1414 4.27168 16.1833C4.3741 16.2252 4.48383 16.2463 4.59448 16.2454C4.70513 16.2444 4.81448 16.2214 4.91615 16.1777C5.01782 16.1341 5.10977 16.0706 5.18665 15.991L9.99998 11.1785L14.8125 15.991C14.9696 16.1428 15.1801 16.2268 15.3986 16.2249C15.6171 16.223 15.8262 16.1353 15.9807 15.9808C16.1352 15.8263 16.2228 15.6173 16.2247 15.3988C16.2266 15.1803 16.1426 14.9698 15.9908 14.8127L11.1783 10.0002L15.9908 5.18765C16.1426 5.03048 16.2266 4.81998 16.2247 4.60148C16.2228 4.38299 16.1352 4.17398 15.9807 4.01947C15.8262 3.86496 15.6171 3.77732 15.3986 3.77542C15.1801 3.77352 14.9696 3.85752 14.8125 4.00932L9.99998 8.82182L5.18748 4.00848V4.00932Z" fill="#373737"/>
        </svg>
    </a>
    <input type="hidden" name="form-type" value="auth">
    <h1>Вход</h1>
    <p class="link">Нет аккаунта? <span><a href="reg.php">Зарегестрироваться</a></span></p>
    <label for="user-login">Логин</label>
    <input class="pr-l-blue" type="text" name="login" id="user-login" required maxlength="128">
    <label for="user-pass">Пароль</label>
    <input class="pr-l-blue" type="password" name="password" id="user-pass" required maxlength="128">
    <button class="link" id="forget-pass">Забыли пароль?</button>
    <button class="pr-blue" type="submit">Войти</button>
    <?php if(isset($autherror)): ?> <p class="error-message"><?= $autherror ?> </p> <?php endif; ?>
</form> 
</main>

