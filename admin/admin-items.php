<? session_start(); require_once("../php/connect.php");require_once("../functions/items.php"); if($_SESSION['autorized'] == true) {?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="../img/admin-fav.ico" type="image/x-icon">
	<link rel="stylesheet" href="../css/main.min.css">
	<title>Администратор - Товары</title>
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
			<a href="admin-items.php" class="admin-panel-menu-elem admin-menu-items menu-active">Товары</a>
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
			<h1 class="admin-panel-title">Товары</h1>
			<div class="admin-panel-tab tab">
				<ul class="tabs__list">
					<!-- Выберите модель -->
					<li class="tabs__item">
						<button class="tab-menu active button1" data-item-tab="all-items">Все товары</button>
					</li>
					<!-- Выберите комплектацию -->
					<li class="tabs__item">
						<button class="tab-menu button2" data-item-tab="add-items">Добавить</button>
					</li>
				</ul>
				<!-- Контент -->
				<div class="admin-panel-tab__content">
					<!-- Все товары -->
					<div class="admin-panel-tab__item tab-content active" data-item-tab-target="all-items">
						<!-- Товары -->
                        <div class="items section container">
                            <div class="items-content">
                                <!-- Карточки -->
                                <div class="items-cards">
                                    <? AdminItems(); ?>
                                    <!-- Карточка (редактируемая)-->
                                    <div class="items-cards__item items-cards__item--editable">
                                        <form class="item-edit-form">
                                            <!-- Название -->
                                            <label for="itemTitle" class="input-label">
                                                Название
                                                <input type="text" name="item-title" id="itemTitle">
                                            </label>
                                            <!-- Изображение -->
                                            <label for="itemsImage" class="check-label-l not-input">
                                                <span>
                                                    Изображение
                                                </span>
                                            </label>
                                            <label for="itemsDownload" class="image-download input-downloads">
                                                <p>Загрузите файл изображения (.jpeg, .jpg, .png, .tiff) <br> <b>*не более 2мб</b></p>
                                                <span class="input-downloads-btn">Загрузить</span>
                                                <input type="file" name="items-image" id="itemsDownload">
                                                <span id="result">
													<span id="resultFile"></span>
												</span>
                                            </label>
                                            <!-- Цена -->
                                            <label for="itemCost" class="input-label">
                                                Цена
                                                <input type="text" name="item-cost" id="itemCost">
                                            </label>
                                            <!-- Описание товара -->
                                            <label for="itemDescr" class="input-label">
                                                Описание товара
                                                <textarea name="item-descr" id="itemDescr" cols="30" rows="10"></textarea>
                                            </label>
                                            <!-- Кнопки -->
                                            <div class="admin-item-controls">
                                                <button class="button1 admin-items-save-btn">Сохранить</button>
                                                <button class="button5 admin-items-delete-btn">Удалить</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<!-- Добавить -->
					<div class="admin-panel-tab__item tab-content" data-item-tab-target="add-items">
						<!-- Товары -->
                        <div class="items section container">
                            <div class="items-content">
                                <!-- Карточки -->
                                <div class="items-cards">
                                    <!-- Карточка (добавляемая)-->
                                    <div class="items-cards__item items-cards__item--add">
                                        <form class="item-add-form">
                                            <!-- Название -->
                                            <label for="itemTitle" class="input-label">
                                                Название
                                                <input type="text" name="item-title" id="itemTitle">
                                            </label>
                                            <!-- Изображение -->
                                            <label for="itemsImage" class="check-label-l not-input">
                                                <span>
                                                    Изображение
                                                </span>
                                            </label>
                                            <label for="items" class="image-download input-downloads">
                                                <p>Загрузите файл изображения (.jpeg, .jpg, .png, .tiff) <br> <b>*не более 2мб</b></p>
                                                <span class="input-downloads-btn">Загрузить</span>
                                                <input type="file" name="item-image" id="items">
                                                <span id="result">
													<span id="resultFile"></span>
												</span>
                                            </label>
                                            <!-- Цена -->
                                            <label for="itemCost" class="input-label">
                                                Цена
                                                <input type="text" name="item-cost" id="itemCost">
                                            </label>
                                            <!-- Описание товара -->
                                            <label for="itemDescr" class="input-label">
                                                Описание товара
                                                <textarea name="item-descr" id="itemDescr" cols="30" rows="10"></textarea>
                                            </label>
                                            <!-- Кнопки -->
                                            <div class="admin-item-controls">
                                                <button class="button1 admin-items-add-btn">Добавить</button>
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