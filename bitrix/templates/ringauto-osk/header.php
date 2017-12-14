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
	@media screen and (max-width: 1100px) {
		body{
			min-width: 1100px;
			max-width: 1100px;
		}
	}

	@media screen and (max-width: 1335px) {
		.main-header__logo{
			/*display: none;*/
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

				<span class="navbar-primary__sp-title">
					<?
					$APPLICATION->IncludeFile("/include/top-text.php", Array(), Array(
						"MODE"      => "html",
						"NAME"      => "Редактирование включаемой области раздела",
						"TEMPLATE"  => ""
					));
					?>
				</span>
				<span class="navbar-primary__sp-phone-w">
					<span class="navbar-primary__sp-phone">+7 4725 46-00-22</span>
					<span class="navbar-primary__sp-corner"></span>
				</span>
				<div class="navbar-primary__sp-exp">
					<span class="navbar-primary__sp-exp-phone">+7 4725 46-00-22</span>
					<hr class="navbar-primary__sp-exp-hr">
					<a href="#" class="navbar-primary__sp-exp-link" onclick="$('.zing_form_back_tel').click()">
						<svg xmlns="http://www.w3.org/2000/svg" class="ic-svg ic-phone"><use xlink:href="#ic-phone"></use></svg>
						Позвонить онлайн
					</a>
					<a href="#" class="navbar-primary__sp-exp-link" onclick="$('.zing_form_back_tel').click();">
						<svg xmlns="http://www.w3.org/2000/svg" class="ic-svg ic-mail"><use xlink:href="#ic-mail"></use></svg>
						Обратная связь
					</a>
				</div>
			</div>

			<nav class="navbar-primary__nv" role="navigation">
				<ul class="navbar-primary__nv-list">
					<li class="navbar-primary__nv-list-item"><a target="_blank" href="http://www.hyundai.ru/configurator" class="navbar-primary__nv-list-link">Создать свой Hyundai</a></li>
					<li class="navbar-primary__nv-list-item"><a href="#" class="navbar-primary__nv-list-link zing_form_toggler" for="zing_cuzov_btn">Запись на сервис</a></li>
					<li class="navbar-primary__nv-list-item"><a href="#" class="navbar-primary__nv-list-link zing_form_toggler_spec" for="testdrive">Тест-драйв</a></li>
				</ul>
			</nav>
		</div>

		<div class="svg-root" style="position: absolute; width: 0; height: 0; visibility: hidden;">
			<svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" display="none" aria-hidden="true">
				<symbol id="img-hyundai" viewbox="0 0 512 65.85">
					<title>Hyundai</title>
					<path fill="#003469" d="M478.5,16.74h-21c-3.5.2-4.5,1.1-4.5,5.4v11.8h25.5Zm11.2-9.5v51.3H478.5V43.74H453v14.8H441.8V18.34c0-7.1,2.9-11.1,11.2-11.1Zm-59,11.1v27.8c0,8.8-5,12.5-11.2,12.5H384.3V7.34h35.2C429.1,7.24,430.7,13.34,430.7,18.34Zm-11.2,3.1a4.44,4.44,0,0,0-4.7-4.8H395.6v32.1h19.2c4.4-.2,4.7-2.8,4.7-4.9ZM156.9,7.24h11.2v20.2h25V7.24h11.2v51.3H193V37.64H168v20.9H156.8l.1-51.3Zm66.4,0,14,21,13.8-21h13.6L242.9,40v18.5H231.7V40L209.8,7.24Zm104,0h36c5.1,0,10.1.7,9.9,11.1v40.2H362V21.94c0-4.4-.5-5.4-4-5.4H338.4v41.9H327.2V7.24Zm184.7,0v51.3H500.8V7.24ZM270.3,58.64h36c7.1,0,10.1-2.1,9.9-12.4v-39H305v36.7c0,4.4-.5,4.9-4,4.9H281.4V7.24H270.2v51.4Z" transform="translate(0)" style="fill:#003469"/>
					<path fill="#003469" d="M111.6,10.24a89.15,89.15,0,0,0-10-4.4,118.24,118.24,0,0,0-50.8-5c-15.9,2.1-31.3,5.9-43.4,16.9-5.8,5.4-9.2,13.5-6.4,21.2,3.7,9.5,13.5,15.8,22.3,19.4,26,10.5,61.3,10.1,86.4-1.9,8.6-4.3,18.2-11.6,19.4-21.9C130.1,23.34,120.3,15,111.6,10.24Zm-58,4.5c2.2-4.2,6-9.2,11.4-9.3a116,116,0,0,1,32.5,4.5c.6.3,1.4.5,1.7,1.1s-.3,1.1-.7,1.6c-8.5,6.6-18.2,10.3-28.1,13.6-5,1.2-10.1,3.4-15.7,2.2a5,5,0,0,1-3.2-2.5C50.1,22,52,18,53.6,14.74ZM19.1,49.24c-1.3,1.2-2.6-.4-3.8-.9-6-3.9-11.4-10.3-9.8-17.8,2.5-9.8,12.6-15.1,21.1-18.7a80.75,80.75,0,0,1,15.7-4.3c.6,0,1.4-.1,1.6.5l-.2.6C32.9,20.94,25.8,35.14,19.1,49.24Zm55.1,4.7c-2.5,3.8-6.5,7.1-11.4,6.6a117.21,117.21,0,0,1-31.6-4.8,1.55,1.55,0,0,1-1.1-.8,1.44,1.44,0,0,1,.5-1.5c9.1-7.3,19.8-10.7,30.5-14.3,4-1.1,8.2-2.4,12.7-1.8a5.35,5.35,0,0,1,4.3,3.2C79.1,45.64,76.4,49.84,74.2,53.94Zm49.4-18.3c-2.5,10.2-13.6,15.6-22.4,19-4.8,1.6-9.6,3.2-14.9,3.7-.3,0-.9,0-.9-.5l.1-.6c7.5-8.4,13.1-17.8,18.1-27.4,2.3-4.3,4.4-8.7,6.4-13.1a2.36,2.36,0,0,1,.9-.6c1.8.3,3.1,1.7,4.6,2.7C120.6,23,125.2,28.74,123.6,35.64Z"/>
				</symbol>

				<symbol id="ic-phone" viewbox="0 0 24.307 24.294">
					<title>Phone</title>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M19.123,24.294c-0.465-0.094-0.945-0.135-1.387-0.29
						c-3.615-1.268-6.918-3.095-9.789-5.646c-3.656-3.249-6.16-7.268-7.709-11.883c-0.543-1.618-0.145-3.087,1.043-4.319
						C1.887,1.528,2.513,0.92,3.135,0.309c0.422-0.415,0.892-0.413,1.315,0.01C6.087,1.95,7.721,3.583,9.353,5.22
						C9.831,5.7,9.828,6.121,9.352,6.603C8.867,7.095,8.375,7.58,7.887,8.07c-0.733,0.738-0.83,1.319-0.436,2.267
						c1.323,3.173,3.632,5.328,6.789,6.613c0.717,0.293,1.338,0.084,1.869-0.419c0.543-0.513,1.059-1.056,1.59-1.581
						c0.465-0.463,0.918-0.46,1.387,0.008c1.611,1.609,3.223,3.219,4.83,4.83c0.521,0.521,0.52,0.934,0,1.458
						c-0.613,0.619-1.229,1.237-1.848,1.853C21.369,23.796,20.223,24.241,19.123,24.294z"/>
				</symbol>
				<symbol id="ic-mail" viewbox="0 0 30.329 22.121">
					<title>Mail</title>
					<g>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M15.164,16.388L0,5.541v15.01c0,0.866,0.702,1.569,1.568,1.569 H28.76c0.895,0,1.568-0.717,1.568-1.602V5.541L15.164,16.388z"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M0.689,2.845l13.562,9.698c0.543,0.389,1.281,0.389,1.825,0 l13.561-9.698c0.555-0.396,0.789-1.105,0.582-1.755C30.01,0.44,29.407,0,28.725,0H1.603C0.921,0,0.317,0.44,0.109,1.09 C-0.1,1.739,0.135,2.448,0.689,2.845z"/>
					</g>
				</symbol>

			</svg>
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