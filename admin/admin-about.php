<? session_start(); require_once("../php/connect.php"); require_once("../functions/about.php"); require_once("../functions/clients.php"); if($_SESSION['autorized'] == true) {?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="../img/admin-fav.ico" type="image/x-icon">
	<link rel="stylesheet" href="../css/main.min.css">
	<title>Администратор - О нас</title>
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
            <a href="admin-panel.php" class="admin-panel-menu-elem admin-panel-menu-current admin-menu-panel">
                Панель
            </a>
			<a href="admin-news.php" class="admin-panel-menu-elem admin-menu-news">Новости</a>
			<a href="admin-services.php" class="admin-panel-menu-elem admin-menu-services">Услуги и цены</a>
			<a href="admin-items.php" class="admin-panel-menu-elem admin-menu-items">Товары</a>
			<a href="admin-discounts.php" class="admin-panel-menu-elem admin-menu-discounts">Акции</a>
			<a href="admin-articles.php" class="admin-panel-menu-elem admin-menu-articles">Статьи</a>
			<a href="admin-vacancies.php" class="admin-panel-menu-elem admin-menu-vacancies">Вакансии</a>
			<a href="admin-about.php" class="admin-panel-menu-elem admin-menu-about menu-active">О нас</a>
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
			<h1 class="admin-panel-title">О нас</h1>
			<div class="admin-about-content">
                <form class="admin-about-form">
                    <? AdminAbout(); ?>
                    <!-- Наши клиенты -->
                    <div class="admin-about-clients"> 
                        <!-- Шапка -->
                        <div class="admin-about-clients-header">
                            <h3>Наши клиенты (Фото)</h3>
							<label for="patientsDownload" class="image-download input-downloads">
								<span class="input-downloads-btn">Добавить</span>
								<input type="file" id="patientsDownload">
								<span id="result">
									<span id='resultFile'></span>
								</span>
							</label>
                        </div>
                        <!-- Контент -->
                        <div class="admin-about-clients-content">
                            <? AdminClients(); ?>
                        </div>
                    </div>
                    <!-- Кнопка -->
                    <button class="button1 admin-about-save-btn" type="button">Сохранить</button>
                </form>
            </div>
        </div>
	</main>





	<script src="../libs/jquery/jquery.min.js"></script>
	<script src="../libs/fancybox/fancybox.min.js"></script>
	<script src="../js/scripts.min.js"></script>
</body>
</html>
<?
}
else {
	echo '<script type="text/javascript">location.href="../403.php"</script>';
}
?>