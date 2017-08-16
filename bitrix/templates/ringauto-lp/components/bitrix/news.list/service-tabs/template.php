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

						<div class="spoilers-content">

							<?foreach($arResult["ITEMS"] as $arItem):
								?>
							<div class="spoiler">
								<div class="spoiler-title"><?=$arItem['NAME']?>
									<div class="warranty-value">
										<span class="warranty-value--years"><?=$arItem['PROPERTIES']['SERVICE_YERS']['~VALUE']['TEXT']?></span>
										<span class="warranty-value--milage"><?=$arItem['PROPERTIES']['SERVICE_KM_MILEAG']['VALUE']?><sup>Км</sup><sub>пробега</sub></span>
									</div>
								</div>
								<div class="spoiler-inner">
									<?echo $arItem["PREVIEW_TEXT"];?>
								</div>
							</div>

							<?endforeach;?>

						</div>

