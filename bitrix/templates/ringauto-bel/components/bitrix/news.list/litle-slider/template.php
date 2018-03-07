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

<link rel="stylesheet" type="text/css" href="/media/css_new/pip_flat_SL.css"/>
<script type="text/javascript" src="/media/js_new/pip_flat_SL.js"></script>

<div class="promo-slider_wrap">
	<div class="promo-slider_cut">
		<ul class="promo-slider">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<li>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="promo-slider-link">
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>">
					<span class="model"><?echo $arItem["NAME"]?></span>
					<span class="price"><?echo $arItem['PROPERTIES']["PRICE"]['VALUE']?></span>
				</a>
			</li>
			<?endforeach;?>
		</ul>
	</div>
	<div class="slider-prev"></div>
	<div class="slider-next"></div>

</div>


