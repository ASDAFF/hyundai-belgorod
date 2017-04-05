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
<div class="container" style="margin-top: 0px">




		<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "service-menu", Array(
			"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
			"CACHE_GROUPS" => "Y",	// Учитывать права доступа
			"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
			"CACHE_TYPE" => "N",	// Тип кеширования
			"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
			"IBLOCK_ID" => "11",	// Инфоблок
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
			"NOW_ID" => $arResult['SECTION']['PATH'][0]['ID']
		),
			false
		);?>

		<div class="service-left-block">
			<ul class="">
				<?foreach($arResult["ITEMS"] as $arItem):?>
				<li><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem['NAME']?></a></li>
				<?endforeach;?>
			</ul>
		</div>

		<div class="service-right-block">

			<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="service-content">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
				<div class="desc">
					<h1><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem['NAME']?></a></h1>
					<p><?echo $arItem["PREVIEW_TEXT"];?></p>
				</div>

				<div class="service-line"></div>
			</div>
			<?endforeach;?>

		</div>

		<div class="clear"></div>
	</div>



</div>

