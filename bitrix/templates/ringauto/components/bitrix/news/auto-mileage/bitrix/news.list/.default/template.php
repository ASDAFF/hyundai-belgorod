<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<html>
<head>
	<?
	$APPLICATION->SetTitle("prb");
	?>
	<?$APPLICATION->ShowHead();?>

	<script src="/media/js_new/device.min.js"></script>

	<link rel="shortcut icon" href="/media/img/Favicon_02.ico"/>

	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->


	<link href="/hpromise/css/common.css" rel="stylesheet" />




	<script src="/bitrix/templates/ringauto/js/jquerymin.js"></script>





	<link href="/hpromise/css/design.css" rel="stylesheet">

</head>


<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div class="design">
	<div class="wrapper">



		<div class="head-section base__section">

			<header class="header">
				<div class="header__inner">

					<div class="header__menu">
						<a href="/" class="header__logo"></a><nav class="header__nav js-head-nav">
							<i class="head-nav-icon js-head-nav-icon icon">
								<svg class="icon__cnt"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ei-navicon-icon"></use></svg>
							</i>

							<ul class="head-nav-list">

								<li class="head-nav-list__item  -active">
									<a class="head-nav-list__link" href="/hpromise/about">
										H-Promise        </a>
								</li>

								<li class="head-nav-list__item  -active">
									<a class="head-nav-list__link" href="/hpromise/trade-in">
										Программа лояльности        </a>
								</li>


								<li class="head-nav-list__item ">
									<a class="head-nav-list__link" href="/hpromise/avtomobili-s-probegom">
										Автомобили с пробегом        </a>
								</li>



							</ul>
						</nav>
						<div class="header__contacts">
							<div class="head-phone">+7 473 261-7777</div>
						</div>
					</div>
				</div>
			</header>
		</div>

		<div class="content-section base__section">
			<!--Убираем
                            Убираем-->
			<div class="content">

				<div class="base__inner">
					<div class="search-results" id="search-results">

						<div class="search-results__head">

							<h2>
								Автомобили в наличии
							</h2>
							<div class="car-list js-adaptive-table">


								<?foreach($arResult["ITEMS"] as $arItem):?>
									<div class="car-list__row">
										<div class="car-list_cell" data-label="">
											<span class="car-list_cell-inner">
												<i class="car-list__img-holder">
													<a class="car-list__img-link fancycarframe" href="<?=$arItem['DETAIL_PAGE_URL']?>">
														<img src="<?=$arItem['PROPERTIES']['SLIDER']['VALUE'][0]?>" alt="">
													</a>
												</i>

											</span>
										</div>
										<div class="car-list_cell" data-label="">
										<span class="car-list__brand">
											<a class="fancycarframe" href="<?=$arItem['DETAIL_PAGE_URL']?>"><?echo $arItem["NAME"]?></a>
										</span>


					<span class="car-list_cell-inner">

										<?if($arItem['PROPERTIES']['ENGINE']['VALUE']):?>
											Двигатель: <?=$arItem['PROPERTIES']['ENGINE']['VALUE']?><br>
										<?endif;?>

						<?if($arItem['PROPERTIES']['POWER']['VALUE']):?>
							Мощность: <?=$arItem['PROPERTIES']['POWER']['VALUE']?><br>
						<?endif;?>

						<? foreach($arItem['PROPERTIES']['STANDART']['VALUE'] as $key => $u){?>
							<?=$u?>
							<?
							$key++;
							if($arItem['PROPERTIES']['STANDART']['VALUE'][$key]){
								print ',';
							}
							?>

						<?}?>
						<br>
						<?=$arItem['PROPERTIES']['COUNT_USER']['VALUE']?>
						<?if($arItem['PROPERTIES']['GARANTY']['VALUE'] == 'Y'):?>
							<br>На гарантии
						<?endif;?>
					</span>

											<br><br>
					<span class="car-list_cell-inner car-list__city">
						<?=$arItem['PROPERTIES']['STREET']['VALUE']?>, тел: <?=$arItem['PROPERTIES']['PHONE']['VALUE']?></span>
										</div>
										<div class="car-list_cell" data-label="">
					<span class="car-list_cell-inner car-list__year">
						<?=$arItem['PROPERTIES']['YEAR']['VALUE']?>
					</span>
										</div>
										<div class="car-list_cell" data-label="">
					<span class="car-list_cell-inner car-list__km">
						<?=$arItem['PROPERTIES']['MILEAGE']['VALUE']?>
					</span>
										</div>
										<div class="car-list_cell" data-label="">
					<span class="car-list_cell-inner car-list__price">
						<?=$arItem['PROPERTIES']['NEW_PRICE']['VALUE']?>    <span style="font-family: 'PT Sans';"></span>
					</span>
										</div>
									</div>
								<?endforeach;?>


								<p class="footnote2" style="font-size: 1.2em;"></p>

							</div>
						</div>
						<div class="base__inner">
							<p class="footnote2">Данный раздел является информационным. Узнавайте информацию о наличии автомобилей, размещенных на сайте, у дилеров H-Promise.</p>
						</div>



					</div>
				</div>


				<div class="base__inner content__title">
					<h1>Сертифицированные автомобили с пробегом</h1>
				</div>


				<div class="base__inner distinctive__block">
					<h2>Преимущества</h2>
					<div class="content-prem">
						<div class="content-prem__single check">Комплексная проверка по 100 пунктам</div>
						<div class="content-prem__single oil">Предпродажная подготовка</div>
						<div class="content-prem__single prise">1 год гарантии</div>
						<div class="content-prem__single maz">1 год помощи на дороге</div>
						<div class="content-prem__single calc">Спецпрограммы кредитования и страхования</div>
						<div class="content-prem__single intrade">Трейд-ин</div>
					</div>
					<div style="clear: both;"></div>
					<p>&nbsp;</p>
					<p>Для вашего спокойствия на каждый автомобиль предоставляется 1 год гарантии* и 1 год «Помощи на дороге»**.</p>
					<p>Для покупателей сертифицированных автомобилей с пробегом H-Promise действуют специальные условия по кредитованию и страхованию.</p>
					<p>Вы также можете воспользоваться услугой ТРЕЙД-ИН и сдать в зачет стоимости приобретаемого автомобиля бывший в употреблении автомобиль любой марки.</p>
					<div class="logo__blockh"></div>
				</div>
				<div class="base__inner">
					<p class="footnote">* с момента покупки автомобиля при условии отсутствия гарантии производителя<br>
						** с момента покупки автомобиля</p>
					<h2 class="shareh">Критерии отбора автомобилей
						<div class="sharehd sharehdm1 js-sharehdm1" style="display: none;">-</div>
						<div class="sharehd sharehdp1 js-sharehdp1" style="display: block;">+</div>
					</h2>
				</div>
				<div class="base__inner distinctive__block js-sharehhid1" style="display: none;">
					<p>Все автомобили Hyundai с пробегом, сертифицированные по программе H-Promise, тщательно отбираются нашими специалистами и соответсвуют следующим критериям:</p>
					<ul>
						<li>Максимальный возвраст - 4 года, максимальный пробег - 130 000 км;</li>
						<li>Отсутствуют следы ремонта силовой структуры кузова и срабатывания подушек безопасности;</li>
						<li>Реальный пробег соответствует показаниям одометра на панели приборов;</li>
						<li>Комплексная техническая проверка по 100 пунктам подтверждает отличное техническое состояние автомобиля;</li>
						<li>При необходимости ремонта используются оригинальные запчасти, спецоборудование и обученный персонал;</li>
						<li>Каждый автомобиль сопровождает сертификат, подтверждающий качество и соответствие условиям программы;</li>
						<li>Проводится проверка юридической чистоты каждого автомобиля.</li>
					</ul>
					<div class="logo__blockh"></div>
				</div>



				<div class="bx_sitemap"></div>






				<div class="main-section base__section">
				</div>
			</div>

		</div>
		<div class="hidden-form js-hidden-form hide-this" style="display: none">
			<!-- forms here -->
			<div class="js-car-order-form"></div>
			<div class="js-car-question-form"></div>
			<div class="js-car-testdrive-form"></div>
		</div>
		<div class="hidden-counters hide-this" style="display: none">
			<!-- counters here -->
			<!-- Yandex.Metrika counter -->
		</div>

	</div>
</div>

<script>
	$(function(){
		//show.hide button
		//$('.js-sharehdp1').hide();
		$('.js-sharehdm1').click(function() {
			$('.js-sharehhid1').slideUp(500);
			$('.js-sharehdm1').hide(0);

			//$('.js-sharehdp1').slideDown(300);
			$('.js-sharehdp1').show(0);
		});
		$('.js-sharehdp1').click(function() {
			$('.js-sharehhid1').slideDown(500);
			$('.js-sharehdp1').hide(0);

			//$('.js-sharehdm1').slideDown(300);
			$('.js-sharehdm1').show(0);
		});
	});
</script>