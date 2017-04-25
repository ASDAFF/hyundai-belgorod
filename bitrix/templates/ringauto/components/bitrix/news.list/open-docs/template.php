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

<div class="content content--manuals">

	<div class="manuals-car-silder">
		<div class="car-slider_wrap">
			<div class="car-slider_cut">
				<ul class="car-slider" style="width: 2632px;">
					<?foreach($arResult["ITEMS"] as $arItem):?>
					<li data-model="<?=str_replace(' ','_',$arItem['NAME'])?>" class="">
						<div class="image-wrap">
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" style="max-width: 100%;">
						</div>
						<span class="model"><?=$arItem['NAME']?></span>
					</li>
					<?endforeach;?>
				</ul>
			</div>
			<div class="slider-prev"></div>
			<div class="slider-next"></div>
		</div>
	</div>

	<div class="content-inner">
		<div class="content-inner-title"><?=$arResult['NAME']?></div>

		<?foreach($arResult["ITEMS"] as $arItem){?>
		<div class="avaible-documents" data-model="<?=str_replace(' ','_',$arItem['NAME'])?>" style="display: none;">
			<div class="avaible-documents-list grid">
			<?foreach($arItem['PROPERTIES']['FILES']['VALUE'] as $key => $doc){?>
				<div class="avaible-document-wrap grid-el grid-el-33">
					<a target="_blank" href="<?=CFile::GetPath($doc);?>" class="avaible-document avaible-document--manual">
						<div class="avaible-document-title"><?=$arItem['PROPERTIES']['NAME_DOCS']['VALUE'][$key]?></div>
						<div class="avaible-document-model"><?=$arItem['PROPERTIES']['MODEL_DOCS']['VALUE'][$key]?></div>
					</a>
				</div>
			<?}?>

				<div class="avaible-document-wrap grid-el grid-el-33">
					<a href="#" for="brochures_request" data-model="<?=str_replace(' ','_',$arItem['NAME'])?>" class="avaible-document avaible-document--brochure zing_form_toggler">
						<div class="avaible-document-title">брошюра</div>
						<div class="avaible-document-model"><?=$arItem['NAME']?></div>
					</a>
				</div>
			</div>
		</div>
		<?}?>

	</div>

</div>


