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

//
?>
<link rel="stylesheet" type="text/css" href="/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="/css/slick-theme.css"/>
<script type="text/javascript" src="/js/slick.min.js"></script>

<div class="offers">

	<div class="news-line"></div>
	<div class="news-center no-padding clearfix">
		<h1 class="h1-offer"><?=$arResult['NAME']?></h1>
	</div>
	<div class="news-line mt14"></div>


	<div class="super-offer-slider-giant">

<?
foreach($arResult["ITEMS"] as $arItem) {
	?>
	<div class="super-offer-slide-giant">
		<div class="item" id="bx_<?=$arItem['ID']?>">
			<a href="<?=$arItem['DETAIL_PAGE_URL']?>">


				<img data-lazy="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>"/>

			</a>

			<div class="mCarListCards_Item_Info">
				<div class="mCarListCards_Item_Info_Name">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a>
				</div>

				<div class="mCarListCards_Item_Info_Props">
					<div class="mCarListCards_Item_Info_Props_Item">
						<span class="left gray-text">Старая цена</span><span class="right gray-text"><?=$arItem['PROPERTIES']['OLD_PRICE']['VALUE']?></span>

						<div class="clear"></div>
						<span class="left red-text">Новая цена</span><span class="right red-text"><?=$arItem['PROPERTIES']['NEW_PRICE']['VALUE']?></span>

						<div class="clear"></div>
						<span class="left w-gray-text">Скидка от <?=$arItem['PROPERTIES']['CREDIT']['VALUE']?></span>

					</div>
					<div class="clear"></div>
				</div>
				<a class="mtr-btn mtr-btn-blue mtr-btn-wide" href="<?=$arItem['DETAIL_PAGE_URL']?>">Подробнее</a>
			</div>
		</div>
	</div>
	<?
}
?>


	</div>


	<script>
		$(document).ready(function(){

				$('.super-offer-slider-giant').slick({
					slidesToShow: 3,
					slidesToScroll: 1,
					speed: 500,
					lazyLoad: 'ondemand',
					autoplay: true,
					autoplaySpeed: 6000,
					pauseOnHover: false,
					responsive: [
						{
							breakpoint: 1430,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1,
							}
						},
						{
							breakpoint: 950,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1,
							}
						},
					]
				});
		});
	</script>

</div>




