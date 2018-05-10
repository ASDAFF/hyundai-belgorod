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

					<? if(SITE_ID == "s1" OR SITE_ID == "s2" OR SITE_ID == "s5"): ?>
					<li class="main-nav__item">
						<a href="/offer/" class="main-nav__link">Авто в наличии</a>
					</li>
					<? endif;?>

					<li class="main-nav__item">
						<a href="/all-offers/" class="main-nav__link">Cпецпредложения</a>
					</li>
					<li class="main-nav__item">
						<a href="/hpromise/" target="_blank" class="main-nav__link">С пробегом</a>
					</li>
					<li class="main-nav__item">
						<a href="/service/spetspredlozheniya/" class="main-nav__link">Сервис</a>
					</li>
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






		</div>
	</div>

<?endif?>
