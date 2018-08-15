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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));


?>

<ul class="showroom">

	<? foreach ($arResult['SECTIONS'] as &$arSection): ?>
	<li class="showroom__cat" role="menuitem">
		<div class="showroom__cat-title"><?=$arSection['NAME']?></div>
		<div class="showroom__cat-items">

			<?
			$arSelect = Array("ID", "IBLOCK_ID","CODE","PREVIEW_PICTURE", "NAME","PROPERTY_PRICE","PROPERTY_PROMO");
			$arFilter = Array("IBLOCK_ID" => $arSection['IBLOCK_ID'],"SECTION_ID" => $arSection['ID'],"ACTIVE"=>"Y");
			$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
			while($ob = $res->GetNextElement()):
			$arFields = $ob->GetFields();
			?>

			<!--showroom__cat-item--promo-->
			<a href="/<?=$arFields['CODE']?>" class="showroom__cat-item <?if($arFields['PROPERTY_PROMO_VALUE']):?>showroom__cat-item--promo<?endif;?>" title="<?=$arFields['NAME']?>">
				<span class="showroom__cat-item-name"><?=$arFields['NAME']?></span>
				<span class="showroom__cat-item-price"><?=str_replace(array('руб.','руб'),'₽',$arFields['PROPERTY_PRICE_VALUE'])?></span>
<!--				<span class="showroom__cat-item-price">--><?//=$arFields['PROPERTY_PROFIT_MENU_VALUE']?><!--</span>-->
				<img src="<?=CFile::GetPath($arFields["PREVIEW_PICTURE"]);?>" class="showroom__cat-item-image" alt="Новый Solaris"/>
			</a>

			<? endwhile; ?>
		</div>
	</li>
	<? endforeach; ?>

</ul>




