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

<div class="container">

	<div class="service-top-baner" style="background: url(<?=$arResult['DETAIL_PICTURE']['SRC']?>) no-repeat center bottom/cover;">

		<div class="service-top-content">
			<p><?=$arResult['PROPERTIES']['TOP_BANNER_TEXT_1']['VALUE']?></p>
			<p class="blue"><?=$arResult['PROPERTIES']['TOP_BANNER_TEXT_2']['VALUE']?></p>
			<p class="smole"><?=$arResult['PROPERTIES']['TOP_BANNER_TEXT_3']['VALUE']?></p>
			<a href="" class="zing_form_toggler_spec" for="newslist"><?=$arResult['PROPERTIES']['TOP_BANNER_TEXT_LINK']['VALUE']?></a>
		</div>

	</div>

	<div class="content-wrap">

		<div class="news-line"></div>

		<div class="name-detali">
			<h1><?=$arResult['NAME']?></h1>
			<span></span>
		</div>




		<div class="clear"></div>
	</div>

	<script type="text/javascript" src="/media/js_new/service-pages.js"></script>




	<div class="maintenance-slider loaded">
		<div class="slide_nav-wrap">
			<div class="views-title"><?=$arResult['PROPERTIES']['NAME_SLIDER']['VALUE']?></div>
			<div class="slide_nav">
				<div class="slider-prev"></div>
				<span class="paginator"></span>
				<div class="slider-next"></div>
			</div>
		</div>
		<div class="maintenance-slider-cut">
			<ul class="views clearfix" style="">
				<?foreach($arResult['PROPERTIES']["SLIDER"]['VALUE'] as $key => $arItem):?>
					<li class="view view1 alive" style="width: 1903px;">
						<img src="<?=CFile::GetPath($arItem)?>" class="view-image">
						<div class="view-inner">
							<div class="view-text">
								<?echo $arResult['PROPERTIES']["DESCRIPTION_SLIDER"]['~VALUE'][$key];?>
							</div>
						</div>
					</li>
				<?endforeach;?>
			</ul>
		</div>
	</div>

	<div class="parts-slide-text">
		<div class="parts-slide-text-heading">Преимущества</div>
		<div class="parts-slide-text-wrapper clearfix">
			<div class="parts-slide-text-item">
				<img src="/img/yes.png" class="parts-slide-text-item__ic" alt="">
				<div class="parts-slide-text-item__title">При обслуживание у официального дилера</div>
				<div class="parts-slide-text-item__text">
					<ul>
						<?foreach($arResult['PROPERTIES']["PREMIUM_ORIG"]['VALUE'] as $key => $arItem):?>
							<li><?=$arItem?></li>
						<?endforeach;?>
					</ul>
				</div>
			</div>
			<div class="parts-slide-text-item">
				<img src="/img/no.png" class="parts-slide-text-item__ic" alt="">
				<div class="parts-slide-text-item__title">При обслуживание в стороннем сервисе</div>
				<div class="parts-slide-text-item__text">
					<ul>
						<?foreach($arResult['PROPERTIES']["PREMIUM_FAKE"]['VALUE'] as $key => $arItem):?>
							<li><?=$arItem?></li>
						<?endforeach;?>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="vin-check" style="background: url('<?=CFile::GetPath($arResult['PROPERTIES']["IMG_BANER"]['VALUE'])?>') no-repeat center center/cover;">
		<div class="vin-check-content">
			<div class="vin-check-heading"><?=$arResult['PROPERTIES']["BOTTOM_BANER_TEXT"]['VALUE']?></div>
			<div class="vin-check-form-wrap">
				<a href="<?=$arResult['PROPERTIES']['BOTTOM_BANER_LINK']['VALUE']?>" class="zing_form_toggler_spec" for="newslist" ><?=$arResult['PROPERTIES']['BOTTOM_BANER_LINK_TEXT']['VALUE']?></a>
			</div>
		</div>
	</div>


	<div class="content-wrap">


		<link rel="stylesheet" type="text/css" href="/media/css_new/pip_flat_SL.css"/>
		<script type="text/javascript" src="/media/js_new/pip_flat_SL.js"></script>

		<div class="promo-slider_wrap">
			<div class="promo-slider_cut">
				<ul class="promo-slider">
					<?
					if(CModule::IncludeModule("iblock")) {
					$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "CODE", "PROPERTY_ENABLE_SPEC");
					$arFilter = Array("IBLOCK_ID" => 11, "ACTIVE" => "Y");
					$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
					while ($ob = $res->GetNextElement()) {
					$arFields = $ob->GetFields();
					$arProps = $ob->GetProperties();
					?>
						<li>
							<a href="/offer-service/<?= $arFields['CODE'] ?>/" class="promo-slider-link">
								<img src="<?= CFile::GetPath($arFields['PREVIEW_PICTURE']); ?>" alt="<?echo $arFields["NAME"]?>">
								<span class="model"><?echo $arFields["NAME"]?></span>
							</a>
						</li>
						<?
						}
					}
					?>
				</ul>
			</div>
			<div class="slider-prev"></div>
			<div class="slider-next"></div>

		</div>




	</div>

</div>
