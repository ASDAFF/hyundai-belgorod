<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

	<div class="main-header">
		<div class="main-header__holder">
			<a href="/" class="main-header__logo" title="Hyundai">
				<div class="logoblock">
					<img src="/_img/dealerLogo.png">
				</div>
				<div class="textblock">
					<?
					$APPLICATION->IncludeFile("/include/dealer-name.php", Array(), Array(
						"MODE"      => "html",                                           // будет редактировать в веб-редакторе
						"NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
						"TEMPLATE"  => ""                    // имя шаблона для нового файла
					));
					?>
				</div>

			</a>
			<nav class="main-nav" role="navigation">
				<ul class="main-nav__list">
					<li class="main-nav__item main-nav__item--has-submenu">
						<span class="main-nav__link" data-role="showroom-submenu-link">Модельный ряд</span>
					</li>

					<li class="main-nav__item main-nav__item--has-submenu">
						<span class="main-nav__link" data-role="service-submenu-link">Сервис</span>
					</li>
					<li class="main-nav__item">
						<a href="/hpromise/" target="_blank" class="main-nav__link">С пробегом</a>
					</li>

					<li class="main-nav__item">
						<a href="/all-offers/" class="main-nav__link">Cпецпредложения</a>
					</li>
					<li class="main-nav__item">
						<a href="/configurator/" class="main-nav__link">Конфигуратор</a>
					</li>
					<li class="main-nav__item main-nav__item--has-submenu">
						<span class="main-nav__link" data-role="n-submenu-link">Бренд</span>
					</li>
					<? if(SITE_ID == "s1" OR SITE_ID == "s2" OR SITE_ID == "s5"): ?>
					<li class="main-nav__item">
						<a href="/offer/" class="main-nav__link">Авто в наличии</a>
					</li>
					<? endif;?>

					<li class="main-nav__item">
						<a href="/contacts/" class="main-nav__link">Контакты</a>
					</li>
					<!--<li class="main-nav__item">
						<a href="/vacancies/" class="main-nav__link">Вакансии</a>
					</li>-->


<!--					<li class="main-nav__item">-->
<!--						<a target="_blank" href="http://www.hyundai.ru/configurator" class="main-nav__link">Конфигуратор</a>-->
<!--					</li>-->
<!---->
<!--					<li class="main-nav__item main-nav__item--go-leave">-->
<!--						<a href="https://mir.hyundai.ru/" target="_blank" class="main-nav__link">Мир Хендэ →</a>-->
<!--					</li>-->
				</ul>
			</nav>
			<span class="main-header__menu"><span class="main-header__menu-ic-helper"></span></span>
		</div>
		<div class="main-header__submenus-holder">

			<div class="submenu" data-role="showroom-submenu">
				<div class="submenu-content">

					<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "menu", Array(
						"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
						"CACHE_GROUPS" => "Y",	// Учитывать права доступа
						"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
						"CACHE_TYPE" => "A",	// Тип кеширования
						"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
						"IBLOCK_ID" => $arParams['MODEL_IBLOCK'],	// Инфоблок
						"IBLOCK_TYPE" => "products",	// Тип инфоблока
						"SECTION_CODE" => "",	// Код раздела
						"SECTION_FIELDS" => array(	// Поля разделов
							0 => "",
							1 => "",
						),
						"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
						"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
						"SECTION_USER_FIELDS" => array(	// Свойства разделов
							0 => "",
							1 => "",
						),
						"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
						"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
						"VIEW_MODE" => "LINE",	// Вид списка подразделов
					),
						false
					);?>

					<button class="submenu-close"></button>
				</div>
			</div>
<!--
			<div class="submenu" data-role="n-submenu">
				<div class="submenu-content">
					<ul class="showroom">
						<li class="showroom__cat" role="menuitem">
							<div class="showroom__cat-title">N</div>
							<div class="showroom__cat-items">
								<a href="/i30N/" class="showroom__cat-item" title="i30N">
									<span class="showroom__cat-item-name">i30N</span>
									<img src="<?=SITE_TEMPLATE_PATH?>/media/car/I30.png" class="showroom__cat-item-image" alt="i30N"/>
								</a>
								<a href="/Veloster-N/" class="showroom__cat-item" title="Veloster N">
									<span class="showroom__cat-item-name">Veloster N</span>
									<img src="<?=SITE_TEMPLATE_PATH?>/media/car/veloster_2.png" class="showroom__cat-item-image" alt="Veloster N"/>
								</a>
							</div>
						</li>
					</ul>
					<button class="submenu-close"><svg xmlns="http://www.w3.org/2000/svg" class="ic-svg"><use xlink:href="#ic-close-sm"></use></svg></button>
				</div>
			</div>
-->
			<div class="submenu" data-role="n-submenu">
				<div class="submenu-content">
					<ul class="service-submenu">
						<li class="service-submenu__cat">
							<strong class="service-submenu__cat-title">О компании</strong>
							<ul class="service-submenu__cat-items">
								<li class="service-submenu__item">
									<a href="/AboutUs" class="service-submenu__link">Хендэ Мотор СНГ</a>
								</li>
								<li class="service-submenu__item">
									<a href="/XMMP" class="service-submenu__link">Завод ХММР</a>
								</li>
								<li class="service-submenu__item">
									<a href="/news" class="service-submenu__link">Пресс-центр</a>
								</li>
								<li class="service-submenu__item">
									<a href="/IntroductoryRemarks" class="service-submenu__link">Социальная ответственность</a>
								</li>
							</ul>
						</li>
						<li class="service-submenu__cat">
							<strong class="service-submenu__cat-title">Инновации</strong>
							<ul class="service-submenu__cat-items">
								<li class="service-submenu__item">
									<a href="/ioniq" class="service-submenu__link">Ioniq</a>
								</li>
								<li class="service-submenu__item">
									<a href="/Nexo" class="service-submenu__link" target="_blank">Nexo</a>
								</li>
								<li class="service-submenu__item">
									<a href="/Kona/" class="service-submenu__link" target="_blank">KONA Electric</a>
								</li>
							</ul>
						</li>
						<li class="service-submenu__cat">
							<strong class="service-submenu__cat-title">N</strong>
							<ul class="service-submenu__cat-items">
								<li class="service-submenu__item">
									<a href="/i30N/" class="service-submenu__link">i30N</a>
								</li>
								<li class="service-submenu__item">
									<a href="/Veloster-N/" class="service-submenu__link">Veloster N</a>
								</li>
							</ul>
						</li>
						<li class="service-submenu__cat">
							<strong class="service-submenu__cat-title">В мире</strong>
							<ul class="service-submenu__cat-items">
								<li class="service-submenu__item">
									<a href="http://worldwide.hyundai.com/" class="service-submenu__link" target="_blank">Международный сайт</a>
								</li>
								<li class="service-submenu__item">
									<a href="https://motorsport.hyundai.com/" class="service-submenu__link" target="_blank">Motorsport</a>
								</li>

								<li class="service-submenu__item">
									<a href="https://www.hyundai.com/worldwide/en/global-hyundai/hyundai-tv" class="service-submenu__link" target="_blank">Hyundai TV</a>
								</li>
								<li class="service-submenu__item">
									<a href="https://www.hyundai.com/worldwide/en/meet-hyundai/motorshow/2018" class="service-submenu__link" target="_blank">Motorshow</a>
								</li>

							</ul>
						</li>
					</ul>
					<button class="submenu-close"><svg xmlns="http://www.w3.org/2000/svg" class="ic-svg"><use xlink:href="#ic-close-sm"></use></svg></button>
				</div>
			</div>
			<div class="submenu" data-role="service-submenu">
				<div class="submenu-content">
					<ul class="service-submenu">
						<li class="service-submenu__cat">
							<strong class="service-submenu__cat-title">Обслуживание и&nbsp;ремонт</strong>
							<ul class="service-submenu__cat-items">
								<li class="service-submenu__item">
									<a href="/service/maintenance" class="service-submenu__link">Обслуживание</a>
								</li>
								<li class="service-submenu__item">
									<a href="/service/bodyworks" class="service-submenu__link">Кузовной ремонт</a>
								</li>
								<li class="service-submenu__item">
									<a href="/service/warranty" class="service-submenu__link">Гарантия</a>
								</li>
								<li class="service-submenu__item">
									<a href="/service/manuals" class="service-submenu__link">Руководства и&nbsp;каталоги</a>
								</li>
								<li class="service-submenu__item">
									<a href="/service-request/" class="service-submenu__link">Запись на&nbsp;сервис</a>
								</li>
							</ul>
						</li>
						<li class="service-submenu__cat">
							<strong class="service-submenu__cat-title">Запасные части и&nbsp;аксессуары</strong>
							<ul class="service-submenu__cat-items">
								<li class="service-submenu__item">
									<a href="/service/parts" class="service-submenu__link">Оригинальные запасные части</a>
								</li>
								<li class="service-submenu__item">
									<a href="http://acc.hyundai.ru" class="service-submenu__link" target="_blank">Оригинальные аксессуары</a>
								</li>
								<li class="service-submenu__item">
									<a href="/pl2/" class="service-submenu__link">Запчасти Product Line 2</a>
								</li>
								<li class="service-submenu__item">
									<a href="/shell" class="service-submenu__link">Моторное масло</a>
								</li>
							</ul>
						</li>
						<li class="service-submenu__cat">
							<strong class="service-submenu__cat-title">Сервисные предложения</strong>
							<ul class="service-submenu__cat-items">
								<li class="service-submenu__item">
									<a href="/service/best" class="service-submenu__link">Лучшее для своих</a>
								</li>
								<li class="service-submenu__item">
									<a href="/service/roadside-assistance" class="service-submenu__link">Помощь на дороге</a>
								</li>
								<li class="service-submenu__item">
									<a href="https://era.hyundai.ru/"  target="_blank" class="service-submenu__link">На связи<svg xmlns="http://www.w3.org/2000/svg" class="ic-svg ic-arrow-s"><use xlink:href="#ic-arrow-s"></use></svg></a>
								</li>
							</ul>
						</li>
						<li class="service-submenu__cat">
							<strong class="service-submenu__cat-title"></strong>
							<ul class="service-submenu__cat-items">
								<li class="service-submenu__item">
									<a href="/service/maintenance#maintenance-calculator-wrapper" class="service-submenu__link service-submenu__link--btn">Калькулятор ТО</a>
								</li>
								<li class="service-submenu__item">
									<a href="/all-offers#service-offers" class="service-submenu__link service-submenu__link--btn">Акции сервис</a>
								</li>
							</ul>
						</li>
					</ul>
					<button class="submenu-close"><svg xmlns="http://www.w3.org/2000/svg" class="ic-svg"><use xlink:href="#ic-close-sm"></use></svg></button>
				</div>
			</div>

		</div>
	</div>

<?endif?>
