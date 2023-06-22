<? require_once("php/connect.php"); require_once("functions/vacancies.php"); require_once('functions/info.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="../img/user-fav.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/main.min.css">
	<title>Вакансии</title>
</head>
<body>
	<!-- шапка -->
	<header>
		<div class="container">
			<div class="header-logo">
				<a href="/"><img src="img/ThreeCats_Logo.png" alt="Логотип"></a>
			</div>
			<div class="header-menu">
				<ul>
					<li><a href="news.php">Новости</a></li>
					<li><a href="services.php">Услуги и цены</a></li>
					<li><a href="items.php">Товары</a></li>
					<li><a href="discounts.php">Акции</a></li>
					<li><a href="articles.php">Статьи</a></li>
					<li><a href="vacancies.php">Вакансии</a></li>
					<li><a href="about.php">О нас</a></li>
					<li><a href="contacts.php">Контакты</a></li>
					<li><a href="lost.php" class="header-menu-item-icn">Потеряшки</a></li>
				</ul>
				<!-- burger btn -->
				<button class="header-burger--open burger-btn">
				</button>
			</div>
		</div>
		<!-- burger -->
		<div class="header-burger__content">
			<div class="burger-menu">
				<ul class="burger__content-list">
					<li><a href="news.php" class="menu-elem">Новости</a></li>
					<li><a href="services.php" class="menu-elem">Услуги и цены</a></li>
					<li><a href="items.php" class="menu-elem">Товары</a></li>
					<li><a href="discounts.php" class="menu-elem">Акции</a></li>
					<li><a href="articles.php" class="menu-elem">Статьи</a></li>
					<li><a href="vacancies.php" class="menu-elem">Вакансии</a></li>
					<li><a href="about.php" class="menu-elem">О нас</a></li>
					<li><a href="contacts.php" class="menu-elem">Контакты</a></li>
					<li><a href="lost.php" class="header-menu-item-icn" class="menu-elem">Потеряшки</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- контент -->
	<main>
        <!-- Крошки -->
        <div class="breadcrumb">
            <ul class="container">
                <li><a href="/">Главная</a></li>
                <li><a href="#" class="active">Вакансии</a></li>
            </ul>
        </div>
        <!-- Вакаенсии -->
        <div class="vacancies section container">
            <h2 class="sec-title">Вакансии</h2>
            <div class="vacancies-content">
                <!-- Карточки -->
                <div class="vacancies-cards">
                    <? vacancies(); ?>
                </div>
            </div>
        </div>
	</main>
	

	<!-- подвал -->
	<footer>
		<div class="container">
			<div class="footer-top">
				<!-- Логотип и политики -->
				<div class="footer-top__left">
					<div class="footer-top-logo">
						<a href="/"><img src="img/ThreeCats_Logo.png" alt="Логотип"></a>
					</div>
					<div class="footer-top-privacy">
						<a href="#" class="text14 privacy-policy">Политика конфиденциальности</a>
						<a href="#" class="text14 user-terms">Пользовательское соглашение</a>
					</div>
				</div>
				<!-- Меню -->
				<div class="footer-top__center">
					<div class="footer-menu-left">
						<ul>
							<li><a href="news.php" class="menu-list">Новости</a></li>
							<li><a href="services.php" class="menu-list">Услуги и цены</a></li>
							<li><a href="items.php" class="menu-list">Товары</a></li>
							<li><a href="discounts.php" class="menu-list">Акции</a></li>
							<li><a href="articles.php" class="menu-list">Статьи</a></li>
						</ul>
					</div>
					<div class="footer-menu-right">
						<ul>
							<li><a href="vacancies.php" class="menu-list">Вакансии</a></li>
							<li><a href="about.php" class="menu-list">О нас</a></li>
							<li><a href="contacts.php" class="menu-list">Контакты</a></li>
							<li><a href="lost.php" class="menu-list">Потеряшки</a></li>
						</ul>
					</div>
				</div>
				<!-- Контакты и т.д -->
				<div class="footer-top__right">
					<!-- Телефоны -->
					<div class="footer-contacts">
						<span class="icn icn-tel"></span>
						<div class="footer-contacts-links">
							<? footerTel($tel); ?>
						</div>
					</div>
					<!-- График -->
					<div class="footer-work">
						<span class="icn icn-time"></span>
						<p class="text18 footer-work-text">
							Пн-Вс: <? footerSchedule($schedule[0], $schedule[1]); ?>
						</p>
					</div>
					<!-- Оставить заявку -->
					<a href="#" class="button3 footer-submit">Оставить заявку</a>
					<!-- Адрес -->
					<div class="footer-address">
						<p class="text16"><?= $address; ?></p>
					</div>
					<!-- Соц сети -->
					<div class="footer-soc">
						<a href="https://vk.com/trikotant" class="soc-icon soc-icon-vk-36" target="_blank"></a>
						<a href="https://ok.ru/profile/560775933088" class="soc-icon soc-icon-ok-36" target="_blank"></a>
					</div>
				</div>
			</div>
			<div class="splitter"></div>
			<div class="footer-bottom">
				<div class="footer-bottom__left">
					<p class="text14">Copyright 2023 - <?= $name; ?></p>
				</div>
				<div class="footer-bottom__right">
					<p class="text14">Разработка сайта - <a href="https://github.com/denistoyt" target="_blank">Denisto Coding</a></p>
				</div>
				
			</div>
		</div>
	</footer>

	<!-- модальные окна -->
	<!-- оставить заявку -->
	<div class="modal modal-submit">
		<form class="modal-submit-form">
			<h3 class="modals-title">Оставить заявку</h3>
			<div class="modal-submit-content">
				<p class="modals-subtitle">Оцените состояние животного:</p>
				<!-- Чекбоксы статуса здоровья -->
				<div class="modal-submit__status">
					<!-- Очень хорошо -->
					<label for="statusGood">
						<input type="radio" name="status" id="statusGood" value="1">
						Очень хорошо
					</label>
					<!-- Не очень -->
					<label for="statusSoSo">
						<input type="radio" name="status" id="statusSoSo" value="2">
						Не очень
					</label>
					<!-- Печально -->
					<label for="statusSad">
						<input type="radio" name="status" id="statusSad" value="3">
						Печально
					</label>
					<!-- Плохо -->
					<label for="statusBad">
						<input type="radio" name="status" id="statusBad" value="4">
						Плохо
					</label>
					<!-- Очень плохо -->
					<label for="statusAwful">
						<input type="radio" name="status" id="statusAwful" value="5">
						Очень плохо
					</label>
				</div>
				<!-- Поля -->
				<div class="modal-submit__inputs">
					<!-- Имя -->
					<label for="submitName" class="input-label">
						Имя*
						<input type="text" name="name" id="submitName" required>
					</label>
					<!-- Телефон -->
					<label for="submitTel" class="input-label">
						Телефон*
						<input type="text" name="tel" id="submitTel" required>
					</label>
				</div>
				<!-- Персональные данные -->
				<p class="modal-submit__terms">
					Нажимая кнопку, вы даете согласие <br> на
					<a href="#" class="user-terms">обработку своих персональных данных</a>
				</p>
				<!-- Оставить заявку -->
				<button class="button3 modal-submit__send">Оставить заявку</button>
			</div>
		</form>
	</div>
	<!-- оставить заявку подтверждение -->
	<div class="modal modal-submit-apply">
		<h3 class="modals-title">Спасибо за заявку!</h3>
		<p class="modals-subtitle">Мы обязательно перезвоним*</p>
		<p class="modal-submit-apply_sub">*Приоритет зависит от состояния животного</p>
		<button class="button1 modal-submit-apply_btn">ОК</button>
	</div>



	<script src="libs/jquery/jquery.min.js"></script>
	<script src="libs/fancybox/fancybox.min.js"></script>
	<script src="libs/jquery/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="libs/jquery/plugins/mask/jquery.mask.min.js"></script>
	<script src="js/scripts.min.js"></script>
</body>
</html>