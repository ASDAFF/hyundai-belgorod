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

<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="car-list__row">
	<div class="car-list_cell" data-label="">
					<span class="car-list_cell-inner">
						<i class="car-list__img-holder">
							<a class="car-list__img-link fancycarframe" href="<?=$arItem['DETAIL_PAGE_URL']?>">
								<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
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


