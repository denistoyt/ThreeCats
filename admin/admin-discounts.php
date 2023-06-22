<? session_start(); require_once("../php/connect.php"); require_once("../functions/discounts.php"); if($_SESSION['autorized'] == true) {?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="../img/admin-fav.ico" type="image/x-icon">
	<link rel="stylesheet" href="../css/main.min.css">
	<title>Администратор - Акции</title>
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
			<a href="admin-discounts.php" class="admin-panel-menu-elem admin-menu-discounts menu-active">Акции</a>
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
			<h1 class="admin-panel-title">Акции</h1>
			<div class="admin-panel-tab tab">
				<ul class="tabs__list">
					<!-- Выберите модель -->
					<li class="tabs__item">
						<button class="tab-menu active button1" data-item-tab="all-discounts">Все акции</button>
					</li>
					<!-- Выберите комплектацию -->
					<li class="tabs__item">
						<button class="tab-menu button2" data-item-tab="add-discount">Добавить</button>
					</li>
				</ul>
				<!-- Контент -->
				<div class="admin-panel-tab__content">
					<!-- Все акции -->
					<div class="admin-panel-tab__item tab-content active" data-item-tab-target="all-discounts">
						<!-- Акции -->
                        <div class="discounts section container">
                            <div class="discounts-content">
                                <!-- Карточки -->
                                <div class="discounts-content-cards">
                                    <? AdminDiscounts(); ?>
                                    <!-- Карточка (редактируемая)-->
                                    <div class="discounts-cards__item discounts-cards__item--editable">
                                        <form class="admin-discounts-form">
                                            <!-- Наименование -->
                                            <label for="discountName" class="input-label">
                                                Наименование акции:
                                                <input type="text" name="discount-name" id="discountName">
                                            </label>
                                            <!-- Изображение -->
                                            <label for="discountsImage" class="check-label-l not-input">
                                                <span>
                                                    Изображение
                                                </span>
                                            </label>
                                            <label for="discountsDownload" class="image-download input-downloads">
                                                <p>Загрузите файл изображения (.jpeg, .jpg, .png, .tiff) <br> <b>*не более 2мб</b></p>
                                                <span class="input-downloads-btn">Загрузить</span>
                                                <input type="file" name="discounts-image" id="discountsDownload">
                                                <span id="result">
                                                    <span id="resultFile"></span>
                                                </span>
                                            </label>
                                            <!-- Текст акции -->
                                            <label for="discountText" class="input-label">
                                                Текст акции:
                                                <textarea name="discount-text" id="discountText" cols="30" rows="10"></textarea>
                                            </label>
                                            <!-- Действие ации до -->
                                            <label for="discountDate" class="input-label">
                                                Действие акции до:
                                                <input type="text" name="discount-date" id="discountDate">
                                            </label>
                                            <!-- Кнопки -->
                                            <div class="admin-discounts-edit-controls">
                                                <button class="button1 admin-discount-save-btn" type="button">Сохранить</button>
                                                <button class="button5 admin-discount-delete-btn" type="button">Удалить</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<!-- Добавить -->
					<div class="admin-panel-tab__item tab-content" data-item-tab-target="add-discount">
						<!-- Акции -->
                        <div class="discounts section container">
                            <div class="discounts-content">
                                <!-- Карточки -->
                                <div class="discounts-content-cards">
                                    <!-- Карточка (добавление)-->
                                    <div class="discounts-cards__item discounts-cards__item--add">
                                        <form class="admin-discounts-form">
                                            <!-- Наименование -->
                                            <label for="discountName" class="input-label">
                                                Наименование акции:
                                                <input type="text" name="discount-name" id="discountName">
                                            </label>
                                            <!-- Изображение -->
                                            <label for="discountsImage" class="check-label-l not-input">
                                                <span>
                                                    Изображение
                                                </span>
                                            </label>
                                            <label for="discountsDownload_2" class="image-download input-downloads">
                                                <p>Загрузите файл изображения (.jpeg, .jpg, .png, .tiff) <br> <b>*не более 2мб</b></p>
                                                <span class="input-downloads-btn">Загрузить</span>
                                                <input type="file" name="discounts-image" id="discountsDownload_2">
                                                <span id="result">
                                                    <span id="resultFile"></span>
                                                </span>
                                            </label>
                                            <!-- Текст акции -->
                                            <label for="discountText" class="input-label">
                                                Текст акции:
                                                <input type="text" name="discount-text" id="discountText">
                                            </label>
                                            <!-- Действие ации до -->
                                            <label for="discountDate" class="input-label">
                                                Действие акции до:
                                                <input type="text" name="discount-date" id="discountDate">
                                            </label>
                                            <!-- Кнопки -->
                                            <div class="admin-discounts-add-controls">
                                            <button class="button1 admin-discount-add-btn" type='button'>Добавить</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
<?
}
else {
	echo '<script type="text/javascript">location.href="../403.php"</script>';
}
?>