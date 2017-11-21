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

	<link href="<?=SITE_TEMPLATE_PATH?>/css/mobile.css" rel="stylesheet" />

	<link href="/bitrix/css/main/main-menu.css" rel="stylesheet" type="text/css">

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
<!-- 	<script type='text/javascript' src="/media/js/sc_gt_default.js"></script> -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NZBL9QH');</script>
<!-- End Google Tag Manager -->
	</head>

<body class="main" style="">
<style>
	@media screen and (max-width: 1100px) {
		body{
			min-width: 1100px;
			max-width: 1100px;
		}
	}

	@media screen and (max-width: 1335px) {
		.main-header__logo{
			display: none;
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

				<span class="navbar-primary__sp-title">«Ринг Авто» г. Липецк, ул. 50 лет НЛМК, 24</span>
				<span class="navbar-primary__sp-phone-w">
					<span class="navbar-primary__sp-phone">+7 4742 72-7777</span>
				</span>

			</div>
			<nav class="navbar-primary__nv" role="navigation">
				<ul class="navbar-primary__nv-list">
					<li class="navbar-primary__nv-list-item"><a target="_blank" href="http://www.hyundai.ru/configurator" class="navbar-primary__nv-list-link">Создать свой Hyundai</a></li>
					<li class="navbar-primary__nv-list-item"><a href="#" class="navbar-primary__nv-list-link zing_form_toggler" for="zing_cuzov_btn">Запись на сервис</a></li>
					<li class="navbar-primary__nv-list-item"><a href="#" class="navbar-primary__nv-list-link zing_form_toggler_spec" for="testdrive">Тест-драйв</a></li>
				</ul>
			</nav>
		</div>



		<? $APPLICATION->IncludeComponent("bitrix:menu", "main-menu", Array(
			"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
			"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
			"DELAY" => "N",	// Откладывать выполнение шаблона меню
			"MAX_LEVEL" => "2",	// Уровень вложенности меню
			"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
				0 => "",
			),
			"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
			"MENU_CACHE_TYPE" => "N",	// Тип кеширования
			"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
			"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
			"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
			"MODEL_IBLOCK" => getIdModelIb(SITE_ID),	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		),
			false
		);?>


	</header>

	<script src="/home_style/js/common.js"></script>


	<?
	$APPLICATION->IncludeFile("/bitrix/include/for_pages/stiker-model.php", Array(), Array(
		"MODE"      => "php",                                           // будет редактировать в веб-редакторе
		"NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
		"TEMPLATE"  => ""                    // имя шаблона для нового файла
	));
	?>
