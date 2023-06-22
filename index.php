<? require_once("php/connect.php"); require_once('functions/banners.php'); require_once("functions/news.php"); require_once('functions/info.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="../img/user-fav.ico" type="image/x-icon">
	<link rel="stylesheet" href="libs/swiper/css/swiper.min.css">
	<link rel="stylesheet" href="css/main.min.css">
	<title>Три Кота - ветеринарный кабинет</title>
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
		<!-- Баннер -->
		<div class="swiper banner-slider">
			<div class="swiper-wrapper">
				<? showBanners(); ?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		<!-- Услуги -->
		<div class="main-services section container">
			<h2 class="sec-title">Услуги</h2>
			<div class="main-services-content">
				<!-- Карточки -->
				<div class="main-services-content-cards">
					<!-- Карточка -->
					<div class="main-services-item">
						<div class="main-services-item-picture">
							<span class="icn icn-vet-services-72"></span>
						</div>
						<p class="main-services-item-text">Вет. услуги</p>
					</div>
					<!-- Карточка -->
					<div class="main-services-item">
						<div class="main-services-item-picture">
							<span class="icn icn-therapy-72"></span>
						</div>
						<p class="main-services-item-text">Терапия</p>
					</div>
					<!-- Карточка -->
					<div class="main-services-item">
						<div class="main-services-item-picture">
							<span class="icn icn-surgery-72"></span>
						</div>
						<p class="main-services-item-text">Хирургия</p>
					</div>
					<!-- Карточка -->
					<div class="main-services-item">
						<div class="main-services-item-picture">
							<span class="icn icn-vaccination-72"></span>
						</div>
						<p class="main-services-item-text">Вакцинация</p>
					</div>
					<!-- Карточка -->
					<div class="main-services-item">
						<div class="main-services-item-picture">
							<span class="icn icn-sterilization-72"></span>
						</div>
						<p class="main-services-item-text">Стерилизация</p>
					</div>
					<!-- Карточка -->
					<div class="main-services-item">
						<div class="main-services-item-picture">
							<span class="icn icn-castration-72"></span>
						</div>
						<p class="main-services-item-text">Кастрация</p>
					</div>
					<!-- Карточка -->
					<div class="main-services-item">
						<div class="main-services-item-picture">
							<span class="icn icn-grooming-72"></span>
						</div>
						<p class="main-services-item-text">Стрижка</p>
					</div>
				</div>
				<!-- Услуги -->
				<div class="main-services-content-list">
					<!-- Карточка -->
					<div class="main-services-content-list-item">
						<!-- Шапка -->
						<div class="list-item-header">
							<p>Лечение кошек</p>
						</div>
						<!-- Контент -->
						<div class="list-item-content">
							<div class="list-item__text">
								<ul>
									<li><a href="services.php">Диагностика</a></li>
									<li><a href="services.php">Кастрация</a></li>
									<li><a href="services.php">Кесарево сечение</a></li>
									<li><a href="services.php">Реанимация котенка</a></li>
									<li><a href="services.php">Удаление новообразований</a></li>
									<li><a href="services.php">Удаление зубов</a></li>
									<li><a href="services.php">Хирургические обработки</a></li>
									<li><a href="services.php">Вакцинация</a></li>
								</ul>
							</div>
							<!-- Ссылка -->
							<a href="services.php" class="list-item__link">Все услуги</a>
						</div>
					</div>
					<!-- Карточка -->
					<div class="main-services-content-list-item">
						<!-- Шапка -->
						<div class="list-item-header">
							<p>Лечение собак</p>
						</div>
						<!-- Контент -->
						<div class="list-item-content">
							<div class="list-item__text">
								<ul>
									<li><a href="services.php">Диагностика</a></li>
									<li><a href="services.php">Кастрация</a></li>
									<li><a href="services.php">Реанимация щенка</a></li>
									<li><a href="services.php">Чистка зубов</a></li>
									<li><a href="services.php">Удаление зубов</a></li>
									<li><a href="services.php">Вакцинация</a></li>
								</ul>
							</div>
							<!-- Ссылка -->
							<a href="services.php" class="list-item__link">Все услуги</a>
						</div>
					</div>
					<!-- Карточка -->
					<div class="main-services-content-list-item">
						<!-- Шапка -->
						<div class="list-item-header">
							<p>Грызуны</p>
						</div>
						<!-- Контент -->
						<div class="list-item-content">
							<div class="list-item__text">
								<ul>
									<li><a href="services.php">Стрижка когтей (морские свинки)</a></li>
									<li><a href="services.php">Стрижка когтей (кролики)</a></li>
									<li><a href="services.php">Подрезание зубов кролику</a></li>
									<li><a href="services.php">Кастрация (кролик, хорек)</a></li>
								</ul>
							</div>
							<!-- Ссылка -->
							<a href="services.php" class="list-item__link">Все услуги</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Новости -->
		<div class="news section container">
			<h2 class="sec-title">Новости</h2>
			<div class="news-content">
				<? news(); ?>
			</div>
		</div>
		<!-- Все услуги -->
		<div class="all-services section container">
			<h2 class="sec-title">Все услуги ветеринарного кабинета</h2>
			<div class="all-services-content">
				<!-- Элемент -->
				<div class="all-services-item">
					<ul>
						<li class="all-services-item__title">Диагностика</li>
						<li class="all-services-item__text"><a href="services.php">Экспресс-тесты</a></li>
						<li class="all-services-item__text"><a href="services.php">Анализ крови</a></li>
						<li class="all-services-item__text"><a href="services.php">Анализ мочи</a></li>
						<li class="all-services-item__text"><a href="services.php">Микроскопия</a></li>
					</ul>
				</div>
				<!-- Элемент -->
				<div class="all-services-item">
					<ul>
						<li class="all-services-item__title">Стоматология</li>
						<li class="all-services-item__text"><a href="services.php">Просто удаление зуба</a></li>
						<li class="all-services-item__text"><a href="services.php">Сложное удаление зуба</a></li>
				</div>
				<!-- Элемент -->
				<div class="all-services-item">
					<ul>
						<li class="all-services-item__title">Хирургия</li>
						<li class="all-services-item__text"><a href="services.php">Кастрация кота</a></li>
						<li class="all-services-item__text"><a href="services.php">Кастрация собаки</a></li>
						<li class="all-services-item__text"><a href="services.php">Ампутация ушных раковин</a></li>
						<li class="all-services-item__text"><a href="services.php">Ампутация хвоста</a></li>
						<li class="all-services-item__text"><a href="services.php">Ампутация пальцев</a></li>
					</ul>
				</div>
				<!-- Элемент -->
				<div class="all-services-item">
					<ul>
						<li class="all-services-item__title">Вакцинопрофилактика</li>
						<li class="all-services-item__text"><a href="services.php">Вакцинация</a></li>
						<li class="all-services-item__text"><a href="services.php">Вакодерм</a></li>
						<li class="all-services-item__text"><a href="services.php">Сыворотки</a></li>
					</ul>
				</div>
				<!-- Элемент -->
				<div class="all-services-item">
					<ul>
						<li class="all-services-item__title">Терапия</li>
						<li class="all-services-item__text"><a href="services.php">Первичный прием</a></li>
						<li class="all-services-item__text"><a href="services.php">Повторный прием</a></li>
						<li class="all-services-item__text"><a href="services.php">Инъекции</a></li>
						<li class="all-services-item__text"><a href="services.php">Капельницы</a></li>
						<li class="all-services-item__text"><a href="services.php">Промывание</a></li>
						<li class="all-services-item__text"><a href="services.php">Стрижка когтей</a></li>
						<li class="all-services-item__text"><a href="services.php">Подрезание зубов кролику</a></li>
					</ul>
				</div>
				<!-- Элемент -->
				<div class="all-services-item">
					<ul>
						<li class="all-services-item__title">Эвтаназия</li>
						<li class="all-services-item__text"><a href="services.php">Эвтаназия до 1кг</a></li>
						<li class="all-services-item__text"><a href="services.php">Эвтаназия от 1.1 до 5.0кг</a></li>
						<li class="all-services-item__text"><a href="services.php">Эвтаназия от 10.1 до 20.0кг</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Остались вопросы? -->
		<div class="questions section container">
			<h2 class="sec-title">Остались вопросы? Задайте их нам!</h2>
			<div class="questions-content">
				<form class="questions-form">
					<div class="questions-row">
						<!-- Имя -->
						<label for="question-name" class="input-label">
							Имя*
							<input type="text" name="name" id="question-name">
						</label>
						<!-- Телефон -->
						<label for="question-tel" class="input-label">
							Телефон*
							<input type="text" name="tel" id="question-tel">
						</label>
						<!-- Email -->
						<label for="quetion-email" class="input-label">
							Email
							<input type="text" name="email" id="question-email">
						</label>
					</div>
					<div class="question-row">
						<!-- Вопрос -->
						<label for="question-message" class="input-label">
							Ваш вопрос*
							<textarea name="message" id="question-message" cols="30" rows="10"></textarea>
						</label>
					</div>
					<p class="question-terms">Нажимая кнопку, вы даёте согласие на <a href="#" class="user-terms">обработку своих персональных данных</a></p>
					<button class="button4 question-submit">Задать вопрос</button>
				</form>
			</div>
		</div>
		<!-- Как нас найти -->
		<div class="search section container">
			<h2 class="sec-title">Как нас найти?</h2>
			<div class="search-content">
				<div class="search-content__left">
					<!-- Элемент -->
					<div class="search-content__item">
						<span class="icn icn-place-or"></span>
						<div class="search-content-info">
							<p class="search-address"><?= $address; ?></p>
							<p class="search-work">Время работы: <? footerSchedule($schedule[0], $schedule[1]); ?></p>
						</div>
					</div>
					<!-- Элемент -->
					<div class="search-content__item">
						<span class="icn icn-tel-or"></span>
						<div class="search-content-info">
							<? footerTel($tel); ?>
						</div>
					</div>
				</div>
				<div class="search-content__right">
					<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3069490c8b2d330f5dd12f37d43ed2be8b4be7eb03cb294a8c07e65ed1ebd2a1&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
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
	<script src="libs/swiper/js/swiper.min.js"></script>
	<script src="libs/jquery/plugins/mask/jquery.mask.min.js"></script>
	<script src="js/scripts.min.js"></script>
</body>
</html>