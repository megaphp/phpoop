<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container logged-in">
        <h2>Добро пожаловать, <?php echo $_SESSION['username']; ?>!</h2>
        <a href="logout.php" class="button">Выйти</a>

        
<div class="gif-container">
    <img src="earth.gif" alt="Интересный GIF" loop>
</div>

    </div>
</body>
</html>
