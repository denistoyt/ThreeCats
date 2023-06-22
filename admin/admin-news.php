<? session_start(); require_once("../php/connect.php"); require_once("../functions/news.php"); 
if ($_SESSION['autorized'] == true) {
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="../img/admin-fav.ico" type="image/x-icon">
	<link rel="stylesheet" href="../css/main.min.css">
	<title>Администратор - Новости</title>
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
			<a href="admin-news.php" class="admin-panel-menu-elem admin-menu-news menu-active">Новости</a>
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
			<h1 class="admin-panel-title">Новости</h1>
			<div class="admin-panel-tab tab">
				<ul class="tabs__list">
					<!-- Выберите модель -->
					<li class="tabs__item">
						<button class="tab-menu active button1" data-item-tab="all-news">Все новости</button>
					</li>
					<!-- Выберите комплектацию -->
					<li class="tabs__item">
						<button class="tab-menu button2" data-item-tab="add-news">Добавить</button>
					</li>
					<!-- Выберите доп оборудование -->
					<li class="tabs__item">
						<button class="tab-menu button1" data-item-tab="user-news">Предложения</button>
					</li>
				</ul>
				<!-- Контент -->
				<div class="admin-panel-tab__content">
					<!-- Все новости -->
					<div class="admin-panel-tab__item tab-content active" data-item-tab-target="all-news">
						<div class="news">
							<div class="news-content">
								<? AdminNews(); ?>
								<!-- Карточка редактируемая -->
								<div class="news-card admin-news-item--editable">
									<form class="admin-news-edit-form">
										<!-- Шапка -->
										<div class="news-card__header">
											<!-- Заголовок -->
											<label for="newsTitle" class="input-label">
												Заголовок новости
												<input type="text" name="news-title" id="newsTitle">
											</label>
											<!-- Дата -->
											<label for="newsDate-curr" class="check-label">
												Дата
												<span>
													<input type="checkbox" name="news-date-curr" id="newsDate-curr">
													Сегодня
												</span>
											</label>
											<input type="text" class="input input-date" name="news-date">
										</div>
										<!-- Контент -->
										<div class="news-card__content">
											<!-- загрузка изображения -->
											<label for="newsImage" class="check-label-l not-input">
												<span>
													Изображение
												</span>
											</label>
											<!-- инпут с загрузкой -->
											<label for="newsDownload" class="image-download input-downloads">
												<p>Загрузите файл изображения (.jpeg, .jpg, .png, .tiff) <br> <b>*не более 2мб</b></p>
												<span class="input-downloads-btn">Загрузить</span>
												<input type="file" name="news-image" id="newsDownload">
												<span id="result">
													<span id='resultFile'></span>
												</span>
											</label>
											<!-- Текст новости -->
											<label for="newsText" class="input-label">
												Текст новости
												<textarea name="news-text" id="newsText" cols="30" rows="10"></textarea>
											</label>
											<!-- сохранить -->
											<button class="button1 admin-news-save-btn" data-news-id="" type="button">Сохранить</button>
											<!-- удалить -->
											<button class="button5 admin-news-delete-btn" data-news-id="" type="button">Удалить</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- Добавить -->
					<div class="admin-panel-tab__item tab-content" data-item-tab-target="add-news">
						<div class="news-add">
							<div class="news-add__wrapper">
								<form class="admin-news-add-form" enctype="multipart/form-data">
									<!-- Заголовок -->
									<label for="newsTitle" class="input-label">
										Заголовок новости
										<input type="text" name="news-title" id="newsTitle">
									</label>
									<!-- Дата -->
									<label for="newsCurrDate" class="check-label">
										Дата
										<span>
											<input type="text" name="current-date" id="newsCurrDate">
											Сегодня
										</span>
									</label>
									<input type="text" class="input" name="news-add-date">
									<!-- Изображение -->
									<label for="newsImage" class="check-label-l not-input">
										<span>
											Изображение
										</span>
									</label>
									<label for="newsDownload_2" class="image-download input-downloads">
										<p>Загрузите файл изображения (.jpeg, .jpg, .png, .tiff) <br> <b>*не более 2мб</b></p>
										<span class="input-downloads-btn">Загрузить</span>
										<input type="file" name="news-image" id="newsDownload_2">
										<span id="result">
											<span id='resultFile'></span>
										</span>
									</label>
									<!-- Текст новости -->
									<label for="newsText" class="input-label">
										Текст новости
										<input type="text" name="news-add-text" id="newsText">
									</label>
									<!-- Добавить -->
									<button class="button1 admin-news-add-btn" type="button">Добавить</button>
								</form>
							</div>
						</div>
					</div>
					<!-- Предложения -->
					<div class="admin-panel-tab__item tab-content" data-item-tab-target="user-news">
						<div class="news-users">
							<? UsersNews(); ?>
						</div>
					</div>
				</div>
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
