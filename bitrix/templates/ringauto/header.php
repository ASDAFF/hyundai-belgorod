<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? IncludeTemplateLangFile(__FILE__); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"/><![endif]-->

	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
	    
    <script src="/media/js_new/device.min.js"></script>

    <link rel="shortcut icon" href="/media/img/Favicon_02.ico"/>

    <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->


	<link href="<?=SITE_TEMPLATE_PATH?>/css/style.css" rel="stylesheet" />

	<link type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/main.css" rel="stylesheet" />
	<link type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/css_style_ru.css" rel="stylesheet" />

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
<!-- 	<script type='text/javascript' src="/media/js/sc_gt_default.js"></script> -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NZBL9QH');</script>
<!-- End Google Tag Manager -->
	</head>

<body class="main">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZBL9QH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div id="wrapper">
	<header id="header">
		<div class="header-center clearfix">
			<div class="header-center-right">
				<!--<a class="header-center-right-btn" href="/configurator">
					<i class="i-0030-auto-icon"></i> Конфигуратор
				</a> -->
			</div>
			<div class="header-center-left">
				г. Воронеж, ул. Изыскателей, 39, корп. 2 — <b>+7 473 261-7777</b>
				<span class="header-center-left-sep">|</span>
				г. Липецк, ул. 50 лет НЛМК, 24 — <b>+7 4742 72-7777</b>
			</div>
		</div>

		<div class="user-bar clearfix">
			<div class="user-bar-logo"><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/media/img/logo.png" alt="HYUNDAI"/></a></div>

			<nav class="user-bar-nav">
				<ul class="reset gnb">
					<li class="user-bar-nav-item"><a class="user-bar-nav-item-link showroom-open" href="#gnbShowroom">Модельный ряд</a></li>
					<li class="user-bar-nav-item"><a class="user-bar-nav-item-link" href="#gnbShopping">Покупка</a></li>
					<li class="user-bar-nav-item"><a class="user-bar-nav-item-link" href="#gnbServices">Сервис</a></li>
					<li class="user-bar-nav-item"><a class="user-bar-nav-item-link" href="/configurator">Конфигуратор</a></li>
				</ul>
			</nav>



			<div class="gnb_layer" id="gnbShowroom" style="visibility: hidden; height: 0px; padding-bottom: 0px;">

				<div class="layer_body">

					<a href="#" class="btn_close">close gnb layer</a>
					<div class="showroom">

						<div class="tab">
							<ul>
								<li class="all"><a href="#showroomAll" class="on">ПОСМОТРЕТЬ ВСЕ</a></li>
								<li class="cars"><a href="#showroomCars">ЛЕГКОВЫЕ</a></li>
								<li class="suv"><a href="#showroomSUV">ВНЕДОРОЖНИКИ</a></li>
								<li class="commercial"><a href="#showroomCommercial">КОММЕРЧЕСКИЕ</a></li>
							</ul>
						</div>

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


						<div class="loadingbox" style="display:none;">
							<img src="/media/img/loading.gif" alt="loading"><br>
						</div>

					</div>

				</div>

				<div class="layer_foot"></div>
				<div class="layer_foot"></div>

			</div>

			<div class="gnb_layer" id="gnbShopping" style="visibility: hidden; height: 0px; padding-bottom: 0px;"><div class="layer_body"><a href="#" class="btn_close">close gnb layer</a><div class="shopping" style=""><div class="tools"><strong class="title">
								ПОМОЩЬ В ВЫБОРЕ
							</strong>
							<ul class="line1">

								<li><a href="/configurator">Создать свою конфигурацию</a></li>

								<li><a href="/corporate-clients" >Корпоративным клиентам</a></li>
								<li><a href="/all-offers">Специальные предложения</a></li>
							</ul>

						</div>

					</div></div><div class="layer_foot"></div>

			</div>



			<div class="gnb_layer gnb_layer--redesign" id="gnbServices" style="visibility: hidden; height: 0px; padding-bottom: 0px;">
				<div class="layer_body">
					<div class="services">
						<ul class="ub-items">
							<li class="ub-item ub-item--owners">
								<a href="/service/roadside-assistance" class="ub-item-link">
									<span class="ub-item__icon"></span>
									<span class="ub-item__name">Владельцам</span>
								</a>
							</li>
							<li class="ub-item ub-item--warranty">
								<a href="/service/garantiya/" class="ub-item-link">
									<span class="ub-item__icon"></span>
									<span class="ub-item__name">Гарантия</span>
								</a>
							</li>
							<li class="ub-item ub-item--maintenance">
								<a href="/service/obsluzhivanie/" class="ub-item-link">
									<span class="ub-item__icon"></span>
									<span class="ub-item__name">Обслуживание</span>
								</a>
							</li>
							<li class="ub-item ub-item--bodyworks">
								<a href="/service/bodyworks" class="ub-item-link">
									<span class="ub-item__icon"></span>
									<span class="ub-item__name">Кузовной ремонт</span>
								</a>
							</li>
							<li class="ub-item ub-item--parts">
								<a href="/service/originalnye-zapchasti/" class="ub-item-link">
									<span class="ub-item__icon"></span>
									<span class="ub-item__name">Оригинальные запчасти</span>
								</a>
							</li>
							<!--
                                                <li class="ub-item ub-item--accessories">
                                                    <a href="#" class="ub-item-link">
                                                        <span class="ub-item__icon"></span>
                                                        <span class="ub-item__name">Оригинальные аксессуары</span>
                                                    </a>
                                                </li>
                            -->
							<li class="ub-item ub-item--assurance">
								<a href="/HyundaiAssurance" class="ub-item-link">
									<span class="ub-item__icon"></span>
									<span class="ub-item__name">Premium assurance</span>
								</a>
							</li>
							<li class="ub-item ub-item--brochures">
								<a href="/service/broshyury-i-rukovodstva/" class="ub-item-link">
									<span class="ub-item__icon"></span>
									<span class="ub-item__name">Руководства и&nbsp;брошюры</span>
								</a>
							</li>
							<li class="ub-item ub-item--best">
								<a href="/service/best" class="ub-item-link">
									<span class="ub-item__icon"></span>
									<span class="ub-item__name">Лучшее для своих</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="layer_foot">
					<a href="/service/spetspredlozheniya/" class="user-bar-footer-link">сервисные акции</a>
				</div>
			</div>


			<div id="user-bar-search" class="user-bar-search">
				<form action="/search">
					<input type="hidden" name="searchid" value="2249684"/>
					<input type="hidden" name="web" value="0"/>
					<input class="user-bar-search-input" type="text" name="text" placeholder="Я хочу найти..." value=""/>
				</form>
			</div>
		</div>


		<div style="display: none;">
			<script type="text/javascript">

				var pip_car_name ="";

				$(function(){
					$('.gnb_layer .carfinder .btn_reset').click(function(){
						//2011-08-03 스크립트 삭제1
						setGnbFinderValues();
						return false;
					});

					/* GNB car finder slide values */
					/* min : range minimum value */
					/* maz : range maximum value */
					/* values : initial value */
					function setGnbFinderValues(){

						$('.gnb_layer .category li').removeClass('select'); //2011-08-03
						$('.gnb_layer .category .case1 input').attr('value','0');

					}
					setGnbFinderValues();


					//2011-08-04
					$('.gnb_layer .category li .check').each(function(i){
						$(this).click(function(){
							if($(this).parent().hasClass('select')) {
								// 체크 안되었음
								$(this).parent().removeClass('select');
								$('#categoryGnb'+i).attr('value','0');
							} else {
								// 체크 되었음
								$(this).parent().addClass('select');
								$('#categoryGnb'+i).attr('value','1');
							}
						});
					});

					//Find a car AJax 처리 함수
					$('.gnb_layer .showroom .tab .btn_finder').click(function(){
						$('.gnb_layer .showroom .tab a').removeClass('on');
						gnbToggle('.gnb_layer .showroom>.list ul','off');
						gnbToggle('.gnb_layer .showroom .banners','off');
						$(".gnb_layer .showroom>.list").hide();
						$(".gnb_layer .showroom .banners").hide();
						/* $('.gnb_layer .showroom>.list ul').hide();
						 $('.gnb_layer .showroom .banners').hide(); */
						$(this).addClass('on');

						$('.gnb_layer .showroom .other_list').hide();

						gnbToggle('.gnb_layer .showroom .carfinder','on');
						/* $('.gnb_layer .showroom .carfinder').show(); */
						gnbToggle('.header .gnb_layer .showroom .list ul','on');

						var siteCode = $("#siteCode").val();
						var siteLang = $("#siteLang").val();
						var dataParam = "wwn_country_code=" + siteCode + "&pageFlag=GNB&" +"wwn_language_code="+ siteLang;
						var finderUrl = "";

						if(siteCode == "ES"){
							finderUrl = "/wcm/front/builder/carFinderInitView.do";
						}else{
							finderUrl = "/wcm/"+siteCode.toLowerCase()+"/front/builder/carFinderInitView.do";
						}

						$(".showroom .loadingbox").show();

						//2013-12-20
						if(siteCode == 'RU' && '' == '11069'){

						}else{
							$.ajax({
								url : finderUrl,
								data : dataParam,
								success : fn_generateFinder,
								error : fn_errorFinder
							});
						}

						return false;
					});
				});

				function fn_generateFinder(xmlDoc){
					$(".gnb_layer .showroom #gnb_carfinder").remove();
					$(".gnb_layer .showroom").append(xmlDoc);
					$(".showroom .loadingbox").hide();
				}

				function fn_errorFinder(){}

			</script>


			<input type="hidden" id="siteCode" value="RU">
			<input type="hidden" id="siteLang" value="RU">



			<!-- end gnb layer -->


			<div class="gnb_layer" id="gnbShopping" style="visibility: hidden; height: 0px; padding-bottom: 0px;"><div class="layer_body"><a href="#" class="btn_close">close gnb layer</a><div class="shopping" style=""><div class="tools"><strong class="title">
								ПОМОЩЬ В ВЫБОРЕ
							</strong>
							<ul class="line1">

								<li><a href="/configurator">Создать свою конфигурацию</a></li>

								<li><a href="/corporate-clients">Корпоративным клиентам</a></li>
								<li><a href="/all-offers">Специальные предложения</a></li>
							</ul>

							<ul class="line2">

							</ul>
						</div>

						<ul class="etc">

							<li><a href="/find-dealer"><strong>Найти <br>дилера</strong><span class="icon"><img src="/media/img/tr_ico_gnb_shopping_02.gif" alt="TR_ico_gnb_shopping_02"></span><span class="txt">
															Детальная <br> информация об <br> официальных <br> дилерах Hyundai<br><img src="/media/img/btn_gnb_go.png" alt=""></span></a></li>



						</ul></div></div><div class="layer_foot"></div>

			</div>


			<input type="hidden" value="" id="nUrl"></div>
	</header><!--header-->



