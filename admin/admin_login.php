<? session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="../img/admin-fav.ico" type="image/x-icon">
	<link rel="stylesheet" href="../css/main.min.css">
	<title>Администратор - Авторизация</title>
</head>
<body class="admin-login-body">
	<main class="admin-login">
		<div class="container">
            <!-- logo -->
            <img src="../img/Admin-Logo.png" alt="логотип" class="admin-autorize__logo">
            <div class="admin-autorize-wrapper">
                <a href="../index.php" class="admin-back-btn"></a>
                <form action="../functions/login.php" method="get" class="admin-autorize-form">
                    <!-- Логин -->
                    <label for="admin-login" class="input-label">
                        Имя пользователя или email
                        <input type="text" name="login" id="admin-login" required>
                    </label>
                    <!-- Пароль -->
                    <label for="admin-passw" class="input-label">
                        Пароль
                        <input type="password" name="passw" id="admin-passw" required>
                    </label>
                    <button class="button1 admin-autorize__btn">Войти</button>
                </form>
            </div>
        </div>
	</main>





	<script src="../libs/jquery/jquery.min.js"></script>
	<script src="../js/scripts.min.js"></script>
</body>
</html>