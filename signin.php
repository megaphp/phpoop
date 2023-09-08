<!DOCTYPE html>
<html>
<head>
    <title>Вход</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Вход</h2>
        <form action="signin_process.php" method="post">
            <input type="text" name="username" placeholder="Имя пользователя" required><br>
            <input type="password" name="password" placeholder="Пароль" required><br>
            <input type="submit" value="Войти">
        </form>
        <p>Нет аккаунта? <a href="signup.php">Регистрация</a></p>
    </div>
</body>
</html>
