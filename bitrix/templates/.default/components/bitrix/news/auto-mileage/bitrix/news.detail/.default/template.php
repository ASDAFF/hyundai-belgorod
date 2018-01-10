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

<link rel="stylesheet" href="/js/lightslider-master/css/lightslider.css" />
<link rel="stylesheet" href="/js/lightslider-master/css/lightgallery.min.css" />


<div class="container">

	<div class="content_wrap">

		<div class="title-detali-auto"><?=$arResult['NAME']?> <?=$arResult['PROPERTIES']['YEAR']['VALUE']?> <?=$arResult['PROPERTIES']['ENGINE']['VALUE']?></div>

		<div class="auto-white-back">

			<div class="w-60 f-row-item">

				<ul id="imageGallery" class="gallery list-unstyled">

					<? foreach($arResult['PROPERTIES']['SLIDER']['VALUE'] as $img):?>
						<li data-thumb="<?=resize_for_other_server($img,132,100);?>" data-src="<?=resize_for_other_server($img,550,410);?>">
							<img src="<?=resize_for_other_server($img,550,410);?>" style="max-width: 544px"/>
						</li>
					<? endforeach; ?>
				</ul>

			</div>
			<div class="w-40 f-row-item">
				<ul class="detal-auto-text">
					<li><?=$arResult['NAME']?></li>
					<li>В наличии в "РИНГАВТО"</li>
					<li class="price"><?=$arResult['PROPERTIES']['NEW_PRICE']['VALUE']?></li>
					<!--					<li>Цвет салона --><?//=$arResult['PROPERTIES']['COLOR_SALON']['VALUE']?><!--</li>-->
					<!--					<li>Тип салона --><?//=$arResult['PROPERTIES']['TYPE_SALON']['VALUE']?><!--</li>-->
					<li></li>
				</ul>
				<table style="margin-bottom: 30px">
					<tr>
						<td style="width: 50%">Год производства</td>
						<td><?=$arResult['PROPERTIES']['YEAR']['VALUE']?></td>
					</tr>
					<tr>
						<td style="width: 50%">Пробег</td>
						<td><?=$arResult['PROPERTIES']['MILEAGE']['VALUE']?></td>
					</tr>
					<tr>
						<td style="width: 50%">Цвет кузова</td>
						<td><?=$arResult['PROPERTIES']['COLOR']['VALUE']?></td>
					</tr>


				</table>
				<div class="detal-btn-auto">
					<a href="#" class="zing_form_toggler" for="zing_hotline_btn">Забронировать</a>
					<a href="#" onclick="PRZV.helpers.showWidget(1)">Заказать звонок</a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="news-line"></div>

	<div class="content_wrap">

		<div class="w-60 f-row-item">
			<div class="title-option-auto">
				<h1>Основные характеристики</h1>
				<span></span>

				<table>
					<tr>
						<td>Марка автомобиля</td>
						<td><?=$arResult['PROPERTIES']['MARK']['VALUE']?></td>
					</tr>
					<tr>
						<td>Модель автомобиля</td>
						<td><?=$arResult['PROPERTIES']['MODEL']['VALUE']?></td>
					</tr>
					<tr>
						<td>Тип кузова</td>
						<td><?=$arResult['PROPERTIES']['CUZOV']['VALUE']?></td>
					</tr>
					<tr>
						<td>Тип трансмиссии</td>
						<td><?=$arResult['PROPERTIES']['TRANSMISS']['VALUE']?></td>
					</tr>
					<tr>
						<td>Тип топлива</td>
						<td><?=$arResult['PROPERTIES']['FUEL_TYPE']['VALUE']?></td>
					</tr>
					<tr>
						<td>Объем двигателя (в литрах)</td>
						<td><?=$arResult['PROPERTIES']['CAPACITY']['VALUE']?></td>
					</tr>
					<tr>
						<td>Мощность двигателя (л.с)</td>
						<td><?=$arResult['PROPERTIES']['POWER']['VALUE']?></td>
					</tr>
					<tr>
						<td><!-- Тип привода --> </td>
						<td><?=$arResult['PROPERTIES']['GRAR_TYPE']['VALUE']?></td>
					</tr>
				</table>

			</div>
			<div class="detal-text-auto">
				<?=$arResult['DETAIL_TEXT']?>
			</div>

		</div>

		<div class="w-40 f-row-item">

			<div class="title-slider-auto">
				Спецпредложения авто с пробегом
			</div>

			<? $APPLICATION->IncludeComponent("bitrix:news.list", "vertical-carusel", Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
				"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
				"AJAX_MODE" => "N",	// Включить режим AJAX
				"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
				"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
				"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
				"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
				"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
				"CACHE_GROUPS" => "Y",	// Учитывать права доступа
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_TYPE" => "N",	// Тип кеширования
				"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
				"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
				"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
				"DISPLAY_DATE" => "Y",	// Выводить дату элемента
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
				"IBLOCK_ID" => $arParams['IBLOCK_ID'],	// Код информационного блока
				"IBLOCK_TYPE" => "products",	// Тип информационного блока (используется только для проверки)
				"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
				"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
				"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
				"NEWS_COUNT" => "100",	// Количество новостей на странице
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
					1 => "NEW_PRICE",
					2 => "SLIDER",
				),
				"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
				"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
				"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
				"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
				"SET_STATUS_404" => "N",	// Устанавливать статус 404
				"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
				"SHOW_404" => "N",	// Показ специальной страницы
				"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
				"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
				"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
				"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
			),
				false
			);?>




		</div>



		<div class="clear"></div>
	</div>

	<?
	switch(SITE_ID){
		case "s1":
			$offer_id_ib = 8;
			break;
		case "s2":
			$offer_id_ib = 25;
			break;
		case "s3":
			$offer_id_ib = 35;
			break;
		case "s4":
			$offer_id_ib = 47;
			break;
	}
	?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"offers_home",
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "Y",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "N",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => $offer_id_ib,
			"IBLOCK_TYPE" => "products",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "160",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "CREDIT",
				1 => "NEW_PRICE",
				2 => "OLD_PRICE",
				3 => "",
			),
			"SET_BROWSER_TITLE" => "Y",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "Y",
			"SET_META_KEYWORDS" => "Y",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "Y",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"COMPONENT_TEMPLATE" => "offers_home"
		),
		false
	);?>



</div>

<script src="/js/lightslider-master/js/lightslider.js"></script>
<script src="/js/lightslider-master/js/lightgallery-all.min.js"></script>



<script type="text/javascript">


	$(document).ready(function() {


		$('#imageGallery').lightSlider({
			gallery:true,
			item:1,
			loop:true,
			thumbItem:4,
			slideMargin:0,
			enableDrag: false,
			currentPagerPosition:'left',
			onSliderLoad: function(el) {
				el.lightGallery({
					selector: '#imageGallery .lslide'
				});
			}
		});

	});
</script>



