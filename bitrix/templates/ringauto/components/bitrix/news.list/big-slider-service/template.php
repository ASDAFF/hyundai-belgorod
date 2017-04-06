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




<div class="content content--parts">


	<div class="parts-views-wrapper" id="parts-views"></div>

	<div class="parts-slider" id="parts-slider">
		<div class="parts-slider-nav-wrapper">
			<ul class="parts-slider-nav" role="navigation">
				<?foreach($arResult["ITEMS"] as $arItem):?>
				<li class="parts-slider-nav-item ">
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="parts-slider-nav-item__img" alt=""/>
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="parts-slider-nav-item__img active" alt=""/>
				</li>
				<?endforeach;?>
			</ul>
		</div>


		<div class="parts-slider-content">

			<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="parts-slide parts-slide--they">
				<div class="parts-slide-title"><?=$arItem['NAME']?></div>
				<div class="parts-slide-descr"><?echo $arItem["PREVIEW_TEXT"];?></div>
				<div class="parts-slide-image-container">
					<img src="<?=CFile::GetPath($arItem['PROPERTIES']['IMAGE_NEW']['VALUE'])?>" class="parts-slide-img" width="1200" height="488" alt=""/>
					<img src="<?=CFile::GetPath($arItem['PROPERTIES']['IMAGE_OLD']['VALUE'])?>" class="parts-slide-img" width="1200" height="488" alt=""/>
				</div>
				<div class="parts-slide-functional-features">
					<div class="layout">
						<img class="parts-slide-functional-features__icon" src="/media/img_new/service-pages/parts/features__icon.png" alt=""/>
						<div class="parts-slide-functional-features__heading">функциональные особенности</div>
						<div class="parts-slide-functional-features__descr">
							<?echo $arItem["DETAIL_TEXT"];?>
						</div>
					</div>
				</div>
				<div class="parts-slide-text">
					<div class="parts-slide-text-heading">Преимущества</div>
					<div class="parts-slide-text-wrapper clearfix">
						<div class="parts-slide-text-item">
							<img src="/media/img_new/service-pages/parts/parts-slider-text-ic-left.png" class="parts-slide-text-item__ic" alt=""/>
							<div class="parts-slide-text-item__title">Оригинал</div>
							<div class="parts-slide-text-item__text">
								<?=$arItem['PROPERTIES']['DESC_ORIG']['~VALUE']['TEXT']?>
							</div>
						</div>
						<div class="parts-slide-text-item">
							<img src="/media/img_new/service-pages/parts/parts-slider-text-ic-right.png" class="parts-slide-text-item__ic" alt=""/>
							<div class="parts-slide-text-item__title">Подделка</div>
							<div class="parts-slide-text-item__text">
								<?=$arItem['PROPERTIES']['DESC_FAKE']['~VALUE']['TEXT']?>
							</div>
						</div>
					</div>
				</div>
				<div class="protect-urself">
					<div class="protect-urself-content-block">
						<div class="protect-urself-heading">Защита от подделок</div>
						<div class="protect-urself-descr"><?=$arItem['PROPERTIES']['WARNIG_TEXT']['~VALUE']['TEXT']?></div>
						<div class="protect-urself-note">Некоторые фотографии на сайте могут отличаться от фактических цветов и характеристик указанной продукции и подлежат уточнению при покупке в официальных дилерских центрах Hyundai</div>
					</div>
					<div class="protect-urself-content-block">
						<img src="<?=CFile::GetPath($arItem['PROPERTIES']['WARNIG_IMAGE']['VALUE'])?>" class="protect-urself-img" alt=""/>
					</div>
				</div>
			</div>
			<?endforeach;?>
		</div>
	</div>

	<div class="support-span">
		<div class="support-span-heading">нужна помощь?</div>
		<div class="support-span-descr">Обратитесь к ближайшему <a href="http://www.hyundai.ru/find-dealer" class="support-span-link">официальному дилеру</a> Hyundai или позвоните в службу поддержки клиентов <a href="tel:88003337167"><strong>8 800 333-71-67</strong></a></div>
	</div>


</div>


