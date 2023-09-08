<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Регистрация</h2>
        <form action="signup_process.php" method="post">
            <input type="text" name="username" placeholder="Имя пользователя" required><br>
            <input type="password" name="password" placeholder="Пароль" required><br>
            <input type="submit" value="Зарегистрироваться">
        </form>
    </div>
</body>
</html>
