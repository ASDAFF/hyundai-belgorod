<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? IncludeTemplateLangFile(__FILE__); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
<!--	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">-->
	<meta name="viewport" content="width=1920">

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
<body class="main" style="">
<style>
	@media screen and (max-width: 1425px) {
		body{
			min-width: 1920px;
			max-width: 1920px;
		}
	}
</style>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZBL9QH"
				  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div id="wrapper">

	<header class="header-primary" id="header-primary">
		<div class="navbar-primary">

			<div class="navbar-primary__sp" data-role="navbar-support">

				<span class="navbar-primary__sp-title">«Ринг Авто» г. Воронеж, ул. Изыскателей, 39, корп. 2</span>
				<span class="navbar-primary__sp-phone-w">
					<span class="navbar-primary__sp-phone">+7 473 261-7777</span>
				</span>

				<br>

				<span class="navbar-primary__sp-title">«Ринг Авто Север» г. Воронеж, 7 км автодороги Воронеж-Москва, напротив Сити-парка «Град»</span>
				<span class="navbar-primary__sp-phone-w">
					<span class="navbar-primary__sp-phone">+7 473 347-7777</span>
				</span>

				<br>


			</div>




			<nav class="navbar-primary__nv" role="navigation">
				<ul class="navbar-primary__nv-list">
					<li class="navbar-primary__nv-list-item"><a href="/configurator/" class="navbar-primary__nv-list-link">Создать свой Hyundai</a></li>
					<li class="navbar-primary__nv-list-item"><a href="#" class="navbar-primary__nv-list-link zing_form_toggler" for="zing_cuzov_btn">Запись на сервис</a></li>
					<li class="navbar-primary__nv-list-item"><a href="#" class="navbar-primary__nv-list-link zing_form_toggler_spec" for="testdrive">Тест-драйв</a></li>
				</ul>
			</nav>
		</div>

		<div class="main-header">
			<div class="main-header__holder">
				<a href="/" class="main-header__logo" title="Hyundai">
					<img src="/_img/logo.jpg">
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

