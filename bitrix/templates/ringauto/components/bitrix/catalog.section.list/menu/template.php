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
<div class="list">
<?
foreach ($arResult['SECTIONS'] as &$arSection){
?>
	<ul id="showroomAll" style="display:block;visibility:visible;height:auto;" class="">
	<?
	$arSelect = Array("ID", "IBLOCK_ID","CODE","PREVIEW_PICTURE", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");
	$arFilter = Array("IBLOCK_ID" => $arSection['IBLOCK_ID'],"SECTION_ID" => $arSection['ID'], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
	while($ob = $res->GetNextElement()){
		$arFields = $ob->GetFields();
		$arProps = $ob->GetProperties();
		?>
		<li>
			<a href="/<?=$arFields['CODE']?>" style="position: relative; display: inline;">
				<img alt="" src="<?=CFile::GetPath($arFields["PREVIEW_PICTURE"]);?>"><br>
				<span class="model"><?=$arFields['NAME']?><br>
				<? if($arProps['PROFIT']['VALUE']):?>
					<span class="sale"><?=$arProps['PROFIT']['VALUE']?></span>
				<? endif; ?>
				</span>
				<span class="menuPrice"><?=$arProps['PRICE']['VALUE']?></span>
			</a>
		</li>
		<?

	}
?>
		</ul>
		<?
}
?>
</div>

