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


	<div class="parts-views-wrapper" id="parts-views">
		<div class="content-inner content-inner--parts-views">
			<div class="parts-views-heading">Преимущества</div>
			<div class="parts-views-descr" style="padding-top: 0;">Каждая оригинальная запасная часть разрабатывается с&nbsp;учетом многолетних научных исследований, проходит технологические тесты и инженерные испытания.</div>
			<div class="clearfix"></div>
		</div>
	</div>

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

				<div class="parts-slide-text">
					<div class="parts-slide-text-wrapper clearfix">
						<div class="parts-slide-text-item">
							<img src="data:img/png;base64,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" class="parts-slide-text-item__ic" alt=""/>
							<div class="parts-slide-text-item__title">ФУНКЦИОНАЛЬНЫЕ ОСОБЕННОСТИ</div>
							<div class="parts-slide-text-item__text">
								<?=$arItem['PROPERTIES']['DESC_ORIG']['~VALUE']['TEXT']?>
							</div>
						</div>
						<div class="parts-slide-text-item">
							<img src="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAAtCAQAAABRlGC9AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfhCB8LIys3hg9PAAAB6klEQVRYw7XXMUsDMRjG8RRBxaVTnQouXTspdHFRcNVdd8FRBelH8AuooziIoE7iIA6OgktF6uBQBLGDaEGK0KGof4e09trkktzlcpmO3N2PI7n3nlcggowprmlRUWdCcTcAtFUyHNfmXkeG4jrMk+cO+KQcEhznEuiwiED0yI8omTV3EeG0ZFhOQ4bmFDI8J8lan8yS67IUe0WBOvBOKQtujFOgy7LxqgKPwItuKscqswm4YwdOUKIJ1HTcgWE1/Lg6BXVqH3m4kIk5ddPsArD5X56y4xpMI0ZByW0wKMAVC/fDioUr8gw0KMpzPSesZI5D4Ic1K9eIclFwmDOTcmOl4AagysWTHlwflNy25iaV9OIkWAWgGnOjLL1t5lJwr6McQrBj5AbkB+Ue92vlCjwBTUrqnOAbuLI8oE+eaFda5epxnNsbDkhvzmUNo+SvLze8S7csD5tgxpezfYfJhuTeTJy50iQbeR5GI6EZ9CM1CdQOpiedubj/YTIyAadLbXsArIfhdKBrtYxyLVdOn0vdyaleYa+4cnFB2I20xxBn0IVMxZmivplMyZl7ixxHMWRqztbM6JOnB2fvnlRysheSF9JwLu3aMGnuAzMBo6Q359qQ9slbX869Ax7j3LmnygQUjHPGly+H+AO6Mw5Al2PFXAAAAABJRU5ErkJggg==" class="parts-slide-text-item__ic" alt=""/>
							<div class="parts-slide-text-item__title">ПРЕИМУЩЕСТВА ОРИГИНАЛЬНОГО ВОЗДУШНОГО ФИЛЬТРА</div>
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
		<div class="support-span-descr">Обратитесь к ближайшему <a href="/contacts/" class="support-span-link">официальному дилеру</a> Hyundai или позвоните в службу поддержки клиентов <a href="tel:88003337167"><strong>8 800 333-71-67</strong></a></div>
	</div>


</div>


