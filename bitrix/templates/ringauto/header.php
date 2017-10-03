<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? IncludeTemplateLangFile(__FILE__); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"/><![endif]-->

	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
	    
    <script src="/media/js_new/device.min.js"></script>

    <link rel="shortcut icon" href="/media/img/Favicon_02.ico"/>

    <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->


	<link href="<?=SITE_TEMPLATE_PATH?>/css/style.css" rel="stylesheet" />

	<link type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/main.css" rel="stylesheet" />
	<link type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/css_style_ru.css" rel="stylesheet" />



	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/mobile/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/mobile/font-awesome/css/font-awesome.css" >
	<link href="/home_style/css/style_new.css" rel="stylesheet" type="text/css">
	<link href="/home_style/css/home.css" rel="stylesheet" type="text/css">
	<link href="/home_style/css/overrides.css" rel="stylesheet" type="text/css">


	<link href="<?=SITE_TEMPLATE_PATH?>/css/mobile.css" rel="stylesheet" />

	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquerymin.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-ui.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.simplemodal.1.4.4.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.inputmask.bundle.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.lazyload.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.validate.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.main.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/zing.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/mobile/js/menu.js" type="text/javascript"></script>
	
	<script src="<?=SITE_TEMPLATE_PATH?>/js/analytics.js"></script>
	
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/call_online.js"></script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NZBL9QH');</script>
	<!-- End Google Tag Manager -->
</head>
<body class="main">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZBL9QH"
				  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div id="wrapper">

	<header class="header-primary" id="header-primary">
		<div class="navbar-primary">
			<div class="navbar-primary__sp" data-role="navbar-support">

				<span class="navbar-primary__sp-title">г. Воронеж, ул. Изыскателей, 39, корп. 2</span>
				<span class="navbar-primary__sp-phone-w">
					<span class="navbar-primary__sp-phone">+7 473 261-7777</span>
				</span>

			</div>
			<nav class="navbar-primary__nv" role="navigation">
				<ul class="navbar-primary__nv-list">
					<li class="navbar-primary__nv-list-item"><a href="/configurator/" class="navbar-primary__nv-list-link">Создать свой Hyundai</a></li>
					<li class="navbar-primary__nv-list-item"><a href="#" class="navbar-primary__nv-list-link zing_form_toggler" for="zing_cuzov_btn">Запись на сервис</a></li>
					<li class="navbar-primary__nv-list-item"><a href="#" class="navbar-primary__nv-list-link zing_form_toggler_spec" for="testdrive">Тест-драйв</a></li>
				</ul>
			</nav>
		</div>

		<a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Меню</a>
		<nav class="mobile-menu-new">
			<ul class="menu">

				<li>
					<a href="#">
						Модельный ряд
					</a>
					<?$APPLICATION->IncludeComponent("bitrix:news.list", "menu-model", Array(
						"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
						"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
						"AJAX_MODE" => "N",	// Включить режим AJAX
						"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
						"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
						"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
						"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
						"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
						"CACHE_GROUPS" => "Y",	// Учитывать права доступа
						"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
						"CACHE_TYPE" => "A",	// Тип кеширования
						"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
						"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
						"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
						"DISPLAY_DATE" => "N",	// Выводить дату элемента
						"DISPLAY_NAME" => "Y",	// Выводить название элемента
						"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
						"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
						"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
						"FIELD_CODE" => array(	// Поля
							0 => "",
							1 => "",
						),
						"FILTER_NAME" => "",	// Фильтр
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
						"IBLOCK_ID" => "7",	// Код информационного блока
						"IBLOCK_TYPE" => "products",	// Тип информационного блока (используется только для проверки)
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
						"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
						"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
						"NEWS_COUNT" => "40",	// Количество новостей на странице
						"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
						"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
						"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
						"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
						"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
						"PAGER_TITLE" => "Новости",	// Название категорий
						"PARENT_SECTION" => "",	// ID раздела
						"PARENT_SECTION_CODE" => "",	// Код раздела
						"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
						"PROPERTY_CODE" => array(	// Свойства
							0 => "",
							1 => "",
						),
						"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
						"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
						"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
						"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
						"SET_STATUS_404" => "N",	// Устанавливать статус 404
						"SET_TITLE" => "N",	// Устанавливать заголовок страницы
						"SHOW_404" => "N",	// Показ специальной страницы
						"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
						"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
						"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
						"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
						"COMPONENT_TEMPLATE" => ".default"
					),
						false
					);?>
				</li>
				<li><a href="/offer/">Cпецпредложения</a></li>
				<li><a href="/hpromise/avtomobili-s-probegom/">Автомобили с пробегом</a></li>
				<li><a href="/service/spetspredlozheniya/">Сервис</a></li>
				<li><a href="/configurator">Конфигуратор</a></li>
				<li><a href="/contacts">Контакты</a></li>
			</ul>
		</nav>

		<div class="main-header">
			<div class="main-header__holder">
				<a href="/" class="main-header__logo" title="Hyundai">
					<svg xmlns="http://www.w3.org/2000/svg" class="hyundai-logo"><use xlink:href="#img-hyundai"></use></svg>
				</a>
				<nav class="main-nav" role="navigation">
					<ul class="main-nav__list">
						<li class="main-nav__item main-nav__item--has-submenu">
							<span class="main-nav__link" data-role="showroom-submenu-link">Модельный ряд</span>
						</li>
						<li class="main-nav__item">
							<a href="/offer/" target="_blank" class="main-nav__link">Cпецпредложения</a>
						</li>
						<li class="main-nav__item">
							<a href="/hpromise/avtomobili-s-probegom/" target="_blank" class="main-nav__link">Автомобили с пробегом</a>
						</li>
						<li class="main-nav__item">
							<a href="/service/spetspredlozheniya/" class="main-nav__link">Сервис</a>
						</li>
						<li class="main-nav__item">
							<a href="/contacts/" class="main-nav__link">Контакты</a>
						</li>
						<li class="main-nav__item">
							<a href="/configurator/" class="main-nav__link">Конфигуратор</a>
						</li>

						<li class="main-nav__item main-nav__item--go-leave">
							<a href="https://mir.hyundai.ru/" target="_blank" class="main-nav__link">Мир Хендэ →</a>
						</li>
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
							"IBLOCK_ID" => "7",	// Инфоблок
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

					</div>
				</div>
			</div>
		</div>
	</header>


	<script src="/home_style/js/common.js"></script>

