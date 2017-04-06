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

<div class="maintenance-slider loaded">
	<div class="slide_nav-wrap">
		<div class="views-title"><?=$arResult['NAME']?></div>
		<div class="slide_nav">
			<div class="slider-prev"></div>
			<span class="paginator"></span>
			<div class="slider-next"></div>
		</div>
	</div>
	<div class="maintenance-slider-cut">
		<ul class="views clearfix" style="">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<li class="view view1 alive" style="width: 1903px;">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="view-image">
				<div class="view-inner">
					<div class="view-text">
						<?echo $arItem["PREVIEW_TEXT"];?>
					</div>
				</div>
			</li>
			<?endforeach;?>
		</ul>
	</div>
</div>
