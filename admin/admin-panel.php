<? session_start(); if ($_SESSION['autorized'] == true) {?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="../img/admin-fav.ico" type="image/x-icon">
	<link rel="stylesheet" href="../css/main.min.css">
	<title>Панель управления</title>
</head>
<body>
	<!-- шапка -->
	<header class="admin-header">
		<div class="container">
			<div class="header-logo">
				<a href="admin-panel.php"><img src="../img/Admin-Logo.png" alt="Логотип"></a>
			</div>
			<div class="header-menu">
				<a href="#" class="admin-panel-user">
                    <img src="../img/Admin-User.png" alt="пользователь">
                </a>
			</div>
		</div>
	</header>
	<!-- контент -->
	<main class="admin-content">
        <aside class="admin-panel-menu">
            <a href="/" class="admin-panel-menu-elem admin-panel-menu-current menu-active admin-menu-panel">
                Панель
            </a>
			<a href="admin-news.php" class="admin-panel-menu-elem admin-menu-news">Новости</a>
			<a href="admin-services.php" class="admin-panel-menu-elem admin-menu-services">Услуги и цены</a>
			<a href="admin-items.php" class="admin-panel-menu-elem admin-menu-items">Товары</a>
			<a href="admin-discounts.php" class="admin-panel-menu-elem admin-menu-discounts">Акции</a>
			<a href="admin-articles.php" class="admin-panel-menu-elem admin-menu-articles">Статьи</a>
			<a href="admin-vacancies.php" class="admin-panel-menu-elem admin-menu-vacancies">Вакансии</a>
			<a href="admin-about.php" class="admin-panel-menu-elem admin-menu-about">О нас</a>
			<a href="admin-lost.php" class="admin-panel-menu-elem admin-menu-lost">Потеряшки</a>
			<div class="splitter"></div>
			<a href="admin-submits.php" class="admin-panel-menu-elem admin-menu-submits">Заявки на прием</a>
			<a href="admin-questions.php" class="admin-panel-menu-elem admin-menu-questions">Вопросы</a>
			<div class="splitter"></div>
			<a href="admin-profile.php" class="admin-panel-menu-elem admin-menu-profile" disabled>Профиль</a>
			<a href="admin-header.php" class="admin-panel-menu-elem admin-menu-header" disabled>Шапка сайта</a>
			<a href="admin-footer.php" class="admin-panel-menu-elem admin-menu-footer" disabled>Подвал сайта</a>
			<a href="admin-static.php" class="admin-panel-menu-elem admin-menu-static" disabled>Статичная информация</a>
        </aside>
        <div class="admin-panel-content">
			<p class="admin-panel-hello">Привет, <span class="admin-nickname"><?=$_SESSION['admin_nick'];?></span>!</p>
			<h1 class="admin-panel-title">Панель управления</h1>
			<div class="admin-panel__panel-item">
				<h2 class="panel-item__title">Страницы</h2>
				<ul>
					<li><a href="admin-news.php">Новости</a></li>
					<li><a href="admin-services.php">Услуги и цены</a></li>
					<li><a href="admin-items.php">Товары</a></li>
					<li><a href="admin-discounts.php">Акции</a></li>
					<li><a href="admin-articles.php">Статьи</a></li>
					<li><a href="admin-vacancies.php">Вакансии</a></li>
					<li><a href="admin-about.php">О нас</a></li>
					<li><a href="admin-lost.php">Потеряшки</a></li>
					<li><a href="admin-submits.php">Заявки на прием</a></li>
					<li><a href="admin-questions.php">Вопросы</a></li>
				</ul>
			</div>
			<div class="admin-panel__panel-item">
				<h2 class="panel-item__title">Настройки</h2>
				<ul>
					<li><a href="admin-profile.php" disabled>Профиль</a></li>
					<li><a href="admin-header.php" disabled>Шапка сайта</a></li>
					<li><a href="admin-footer.php" disabled>Подвал сайта</a></li>
					<li><a href="admin-static.php" disabled>Статичная информация</a></li>
				</ul>
			</div>
        </div>
	</main>





	<script src="../libs/jquery/jquery.min.js"></script>
	<script src="../libs/fancybox/fancybox.min.js"></script>
	<script src="../js/scripts.min.js"></script>
</body>
</html>
<?php
}
else {
	echo '<script type="text/javascript">location.href="../403.php"</script>';
}
?>