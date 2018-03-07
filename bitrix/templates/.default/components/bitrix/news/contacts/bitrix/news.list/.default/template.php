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

<!--
Контент страницы начнется тут
-->

<main class="main" data-model="home">


	<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="dealer__container">

		<div class="dealer__content_wrap ">
			<div class="dealer__content_area ">

				<div class="dealer__title_area clearfix">

					<h1 class="title"><?=$arResult["NAME"]?></h1>
					<div class="dealer__location-dropdown drop-it-down">
						<ul class="dropdown-list first">
							<li  data-value="" class="dropdown-item first"></li>
						</ul>
						<div class="nano">
							<ul class="dropdown-list nano-content">
								<li  data-value="" class="dropdown-item divider">&mdash;</li>


								<li data-value="19" class="dropdown-item"><?=$arResult["NAME"]?></li>

							</ul>
						</div>
					</div>
				</div>

				<div class="dealer__maps">
					<div class="dealer__map_container">
						<div class="map_info">
							<div class="map_img">
								<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
							</div>
							<div class="map_text">
								<p><?=$arItem["NAME"]?></p>
								<p><?=$arItem['PROPERTIES']['PHONE']['VALUE']?></p>
								<p><?=$arItem['PROPERTIES']['STRET']['VALUE']?></p>
								<a href="/">Сайт дилера</a>
							</div>
						</div>
						<div id="map_canvas" class="no-directions"></div>
					</div>
					<div class="dealer__map_results">
						<h2 class="dealer__map_results__city"><?=$arItem["NAME"]?></h2>
						<div class="dealer-special-description"> — дилер, оформленный по новым стандартам бренда</div>
						<div class="clearfix"></div>
						<div class="dealer-info-box">

							<div class="dealer-info special ">
								<div class="pop_body">
									<div class="dealer-name"><?=$arItem["NAME"]?></div>
									<div class="pop_text">
										<span class="dealer-address" style="height: 60px;">
											<a class="wa_link" href="/service/roadside-assistance#wa-block">WA</a>
											<span><?=$arItem['PROPERTIES']['STRET']['VALUE']?></span>
										</span>
										<span class="dealer-phone"><?=$arItem['PROPERTIES']['PHONE']['VALUE']?></span>
									</div>

									<span class="call-to-dealer">
										<a class="zingaya_button1370324828422  zing_form_back_tel" for="feedback_home" href="javascript:;">позвонить</a>
									</span>
								</div>
							</div>


							<div class="dealer-info-box-devider"></div>
						</div>
					</div>
				</div>
				<div class="dealer-epilog">
					<? if(SITE_ID != "s5"):?>
					<h2 class="title_big">Как добраться</h2>
					<?endif;?>

					<p><?=$arItem['PROPERTIES']['MAP']['~VALUE']['TEXT']?></p><br>

					<?foreach($arItem['PROPERTIES']['BUS']['VALUE'] as $b){?>
						<p><?=$b?></p><br>
					<?}?>


					<h3 class="title_big">Реквизиты</h3>
					<?=$arItem['PROPERTIES']['REKV']['~VALUE']['TEXT']?>
				</div>
			</div>

		</div>
	</div>




	<? endforeach; ?>

	<script type="text/html" id="waTpl">
		<div class="wap">
			<div class="wap__body">
				<a href="#" class="wap__close"></a>
				<div class="wap__content">
					<div class="wap__text-content">
						<div class="wap__header">Workshop Automation</div>
						<p class="wap__descr">– это автоматизированная система обслуживания клиентов и&nbsp;контроля за рабочими процессами в дилерском центре, реализованная как мобильное приложение для планшетных компьютеров.</p>
						<a href="<%=refLink%>" class="wap__ref">подробнее</a>
					</div>
					<img src="/media/img/wap-bg.jpg" class="wap__img" alt=""/>
				</div>
			</div>
		</div>
	</script>

	<script type="text/html" id="dealerTemplate">
		<div class="dealer-info <%= special %> <%= wa %>">
			<div class="pop_body">
				<div class="dealer-name"><%= name %></div>
				<div class="pop_text">
					<span class="dealer-address"><a class="wa_link" href="/service/roadside-assistance#wa-block">WA</a><span><%= address %></span></span>
					<span class="dealer-phone"><%= phone %></span>
				</div>
				<a target="_blank" class="dealer-test-drive_parent-link" href="/test-drive?dealer=<%= name %>&amp;city=<%= city %>&dealer_id=<%= id %>"><div class="dealer-test-drive">Тест-драйв</div></a>
				<a class="js-build-direction dealer-direction inactive" href="#">Построить маршрут</a>


	        <span class="call-to-dealer">
	            <a href="#"  onclick="window.open('http://zingaya.com/widget/7fa635d9bedd182ca122939b4d8769ba?referrer='+escape(window.location.href)+'&amp;extra=<%= encodePhone %>', '_blank', 'width=236,height=220,resizable=no,toolbar=no,menubar=no,location=no,status=no'); return false" class="zingaya_button1370324828422 zingayabutton  zing_call_btn" id="zing_dealer_btn"></a>
	            <a class="zingaya_button1370324828422  zing_form_toggler" for="zing_dealer_btn" href="javascript:;">позвонить</a>
	        </span>
			</div>
		</div>
	</script>

	<script type="text/javascript" src="http://maps.google.ru/maps/api/js?key=AIzaSyCg3II6UgahN4akFiKCe1Vjrm4wRMBPp8A"></script>
	<script type="text/javascript" src="/media/js/underscore.js"></script>
	<script type="text/javascript" src="/contacts/find-dealer.js"></script>



</main>

<!-- AIzaSyAKZGqoKnU5GBk44xf4RsvxJJbo802XPRQ	-->
<!--
Контент страницы закончится тут
-->




