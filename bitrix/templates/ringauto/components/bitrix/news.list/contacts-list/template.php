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

<ul class="menu download_type" style="width:220px">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<li class="<?if($APPLICATION->GetCurPage() == $arItem["DETAIL_PAGE_URL"]){print 'on';}?>"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem['NAME']?></a></li>
	<?endforeach;?>

</ul>