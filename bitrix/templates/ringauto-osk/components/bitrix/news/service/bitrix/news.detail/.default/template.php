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

<div class="container">

	<?
	//var_dump($arResult);
	?>

	<div class="service-top-baner" style="background: url(<?=$arResult['DETAIL_PICTURE']['SRC']?>) no-repeat center bottom/cover;">

		<div class="service-top-content">
			<p><?=$arResult['PROPERTIES']['TOP_BANNER_TEXT_1']['VALUE']?></p>
			<p class="blue"><?=$arResult['PROPERTIES']['TOP_BANNER_TEXT_2']['VALUE']?></p>
			<p class="smole"><?=$arResult['PROPERTIES']['TOP_BANNER_TEXT_3']['VALUE']?></p>
			<a href="" class="zing_form_toggler_spec" for="newslist"><?=$arResult['PROPERTIES']['TOP_BANNER_TEXT_LINK']['VALUE']?></a>
		</div>

	</div>

	<div class="content-wrap">

		<div class="news-line"></div>

		<div class="name-detali">
			<h1><?=$arResult['NAME']?></h1>
			<span></span>
		</div>




		<div class="clear"></div>
	</div>

	<script type="text/javascript" src="/media/js_new/service-pages.js"></script>




	<div class="maintenance-slider loaded">
		<div class="slide_nav-wrap">
			<div class="views-title"><?=$arResult['PROPERTIES']['NAME_SLIDER']['VALUE']?></div>
			<div class="slide_nav">
				<div class="slider-prev"></div>
				<span class="paginator"></span>
				<div class="slider-next"></div>
			</div>
		</div>
		<div class="maintenance-slider-cut">
			<ul class="views clearfix" style="">
				<?foreach($arResult['PROPERTIES']["SLIDER"]['VALUE'] as $key => $arItem):?>
					<li class="view view1 alive" style="width: 1903px;">
						<img src="<?=CFile::GetPath($arItem)?>" class="view-image">
						<div class="view-inner">
							<div class="view-text">
								<?echo $arResult['PROPERTIES']["DESCRIPTION_SLIDER"]['~VALUE'][$key];?>
							</div>
						</div>
					</li>
				<?endforeach;?>
			</ul>
		</div>
	</div>

	<? if((int)$arResult['ID'] == 155): ?>

	<link type="text/css" href="/media/css_new/service_styles.css" rel="stylesheet" />
			<div class="bodyworks-views" id="bodyworks-views" style="background: none">
			<div class="content-inner content-inner--bodyworks-views">
				<div class="bw-views-cut">
					<div class="bw-views">
						<div class="bw-view bw-view--1 active">
							<div class="bw-view-image">
								<img src="/media/img_new/service-pages/bodyworks-view-1.png" class="bw-view-img" alt="">
							</div>
							<div class="bw-view-pluses">
								<div class="bw-view-plus bw-view-plus--1 right">
									<span class="bw-view-plus-descr">Капот от 8000 <span class="bw-view-plus-descr-price">9047 <span class="rouble">7</span></span></span>
									<a href="#" class="bw-view-plus-icon"></a>
								</div>
								<div class="bw-view-plus bw-view-plus--2 right">
									<span class="bw-view-plus-descr">Бампер передний от 6500 <span class="bw-view-plus-descr-price">7231 <span class="rouble">7</span></span></span>
									<a href="#" class="bw-view-plus-icon"></a>
								</div>
								<div class="bw-view-plus bw-view-plus--3 right">
									<span class="bw-view-plus-descr">Крыло переднее лев/прав от 6500<span class="bw-view-plus-descr-price">7597 <span class="rouble">7</span></span></span>
									<a href="#" class="bw-view-plus-icon"></a>
								</div>
								<div class="bw-view-plus bw-view-plus--4 right">
									<span class="bw-view-plus-descr">Крышка бокового зеркала от 2500 <span class="bw-view-plus-descr-price">1500 <span class="rouble">7</span></span></span>
									<a href="#" class="bw-view-plus-icon"></a>
								</div>
								<div class="bw-view-plus bw-view-plus--5 right">
									<span class="bw-view-plus-descr">Дверь передняя лев/прав от 6500 <span class="bw-view-plus-descr-price">3000 <span class="rouble">7</span></span></span>
									<a href="#" class="bw-view-plus-icon"></a>
								</div>
							</div>
						</div>
						<div class="bw-view bw-view--2">
							<div class="bw-view-image">
								<img src="/media/img_new/service-pages/bodyworks-view-2.png" class="bw-view-img" alt="">
							</div>
							<div class="bw-view-pluses">
								<div class="bw-view-plus bw-view-plus--1 right">
									<span class="bw-view-plus-descr">Крышка багажника от 6500<span class="bw-view-plus-descr-price">3000 <span class="rouble">7</span></span></span>
									<a href="#" class="bw-view-plus-icon"></a>
								</div>
								<div class="bw-view-plus bw-view-plus--2 right">
									<span class="bw-view-plus-descr">Бампер задний от 6500<span class="bw-view-plus-descr-price">2000 <span class="rouble">7</span></span></span>
									<a href="#" class="bw-view-plus-icon"></a>
								</div>
								<div class="bw-view-plus bw-view-plus--3 right">
									<span class="bw-view-plus-descr">Крыша от 10000 <span class="bw-view-plus-descr-price">5000 <span class="rouble">7</span></span></span>
									<a href="#" class="bw-view-plus-icon"></a>
								</div>
								<div class="bw-view-plus bw-view-plus--4 right">
									<span class="bw-view-plus-descr">Крыло заднее лев/прав от 7000 <span class="bw-view-plus-descr-price">3500 <span class="rouble">7</span></span></span>
									<a href="#" class="bw-view-plus-icon"></a>
								</div>
								<div class="bw-view-plus bw-view-plus--5 right">
									<span class="bw-view-plus-descr">Дверь задняя лев/прав от 6500 <span class="bw-view-plus-descr-price">3000 <span class="rouble">7</span></span></span>
									<a href="#" class="bw-view-plus-icon"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="bw-views-nav">
						<a href="#" class="bw-views-nav-btn prev disabled" role="button">Вид спереди</a>
						<a href="#" class="bw-views-nav-btn next" role="button">Вид сзади</a>
					</div>
				</div>
				<div class="bw-views-links">
					<a href="#" class="bw-views-link zing_form_toggler" for="zing_cuzov_btn" role="button">записаться на сервис</a>
					<a href="/service/originalnye-zapchasti/" class="bw-views-link">оригинальные запчасти</a>
				</div>
			</div>
		</div>

	<?endif;?>


	<div class="parts-slide-text">
		<div class="parts-slide-text-heading">Преимущества</div>
		<div class="parts-slide-text-wrapper clearfix">
			<div class="parts-slide-text-item">
				<img src="/img/yes.png" class="parts-slide-text-item__ic" alt="">
				<div class="parts-slide-text-item__title">При обслуживание у официального дилера</div>
				<div class="parts-slide-text-item__text">
					<ul>
						<?foreach($arResult['PROPERTIES']["PREMIUM_ORIG"]['VALUE'] as $key => $arItem):?>
						<li><?=$arItem?></li>
						<?endforeach;?>
					</ul>
				</div>
			</div>
			<div class="parts-slide-text-item">
				<img src="/img/no.png" class="parts-slide-text-item__ic" alt="">
				<div class="parts-slide-text-item__title">При обслуживание в стороннем сервисе</div>
				<div class="parts-slide-text-item__text">
					<ul>
						<?foreach($arResult['PROPERTIES']["PREMIUM_FAKE"]['VALUE'] as $key => $arItem):?>
						<li><?=$arItem?></li>
						<?endforeach;?>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="vin-check" style="background: url('<?=CFile::GetPath($arResult['PROPERTIES']["IMG_BANER"]['VALUE'])?>') no-repeat center center/cover;">
		<div class="vin-check-content">
			<div class="vin-check-heading"><?=$arResult['PROPERTIES']["BOTTOM_BANER_TEXT"]['VALUE']?></div>
			<div class="vin-check-form-wrap">
				<a href="<?=$arResult['PROPERTIES']['BOTTOM_BANER_LINK']['VALUE']?>" class="zing_form_toggler_spec" for="newslist" ><?=$arResult['PROPERTIES']['BOTTOM_BANER_LINK_TEXT']['VALUE']?></a>
			</div>
		</div>
	</div>


	<div class="content-wrap">

	<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "elements-offers", Array(
		"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "N",	// Тип кеширования
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"IBLOCK_ID" => "11",	// Инфоблок
		"IBLOCK_TYPE" => "products",	// Тип инфоблока
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"LABEL_PROP" => "-",	// Свойство меток товара
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
		"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Товары",	// Название категорий
		"PAGE_ELEMENT_COUNT" => "100",	// Количество элементов на странице
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"PRICE_CODE" => "",	// Тип цены
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRODUCT_PROPERTIES" => "",	// Характеристики товара
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PRODUCT_QUANTITY_VARIABLE" => "",	// Название переменной, в которой передается количество товара
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SECTION_CODE" => "spetspredlozheniya",	// Код раздела
		"SECTION_ID" => "",	// ID раздела
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => array(	// Свойства раздела
			0 => "",
			1 => "UF_SERVICE_LEFT_MENU",
			2 => "UF_SERVICE_TABS",
			3 => "UF_ENABLE_VIN",
			4 => "UF_SERVICE_CALC",
			5 => "UF_SLIDER_SERVICE",
			6 => "UF_BIG_SLIDER",
			7 => "UF_OPEN_DOCS",
			8 => "UF_HIDDEN",
			9 => "",
		),
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
	),
		false
	);?>

	</div>

</div>
