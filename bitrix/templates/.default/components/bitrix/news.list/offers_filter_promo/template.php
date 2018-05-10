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

if(!empty($arResult["ITEMS"])):
?>
<link rel="stylesheet" type="text/css" href="/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="/css/slick-theme.css"/>
<script type="text/javascript" src="/js/slick.min.js"></script>

<div class="offers" style="margin-bottom: 50px;text-align: center">

	<div class="news-line"></div>
	<div class="news-center no-padding clearfix">
		<span class="h1-offer"><?=$arResult['NAME']?></span>
	</div>
	<div class="news-line mt14"></div>


	<div class="super-offer-slider-giant">

<?
foreach($arResult["ITEMS"] as $arItem) {

	?>
	<div class="super-offer-slide-giant">
		<div class="item" id="bx_<?=$arItem['ID']?>">
			<?stiker(SITE_ID,4,'right','160px','180px',$arItem["PROPERTIES"]["folder_id"]['VALUE']);?>
			<a href="/offer-promo/<?=$arItem['CODE']?>/">


				<img data-lazy="<?=$arItem["PROPERTIES"]["SLIDER"]['VALUE'][0]?>" alt="<?=$arItem['NAME']?>"/>

			</a>

			<div class="mCarListCards_Item_Info">
				<div class="mCarListCards_Item_Info_Name">
					<a href="/offer-promo/<?=$arItem['CODE']?>/">
						<?=$arItem['PROPERTIES']['folder_id']['VALUE'].' '.$arItem['PROPERTIES']['CAPACITY']['VALUE'].' / '.$arItem['PROPERTIES']['TRANSMISS']['VALUE']?>
					</a>
				</div>

				<div class="offer-sale">
					<span>Спецпредложение</span>
					<span><p>На авто с ПТС</p></span>
				</div>



				<div class="mCarListCards_Item_Info_Props">

					<span class="t1">Цена без скидки</span>
							<span class="t2"><?=myFormatCurrency($arItem['PROPERTIES']['OLD_PRICE']['VALUE'])?></span>
							<span class="t3">Выгода до</span>
							<span class="t4"><?=myFormatCurrency(preg_replace('/\D/', '', $arItem['PROPERTIES']['VIGODA']['VALUE'])+preg_replace('/\D/', '', $arItem['PROPERTIES']['CREDIT']['VALUE']))?></span>

					<div class="clear"></div>
				</div>
				<a class="mtr-btn mtr-btn-blue mtr-btn-wide" href="/offer-promo/<?=$arItem['CODE']?>/">Подробнее</a>
			</div>
		</div>
	</div>
	<?
}

?>

	</div>

	<a class="mtr-btn mtr-btn-blue mtr-btn-wide" style="width: 260px;" href="/offer-promo/">все предложения</a>

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
							breakpoint: 1024,
							settings: {
								arrows: true,
								slidesToShow: 2,
								slidesToScroll: 1,
							}
						},
						{
							breakpoint: 760,
							settings: {
								arrows: true,
								slidesToShow: 1,
								slidesToScroll: 1,
							}
						},
					]
				});
		});
	</script>

</div>

<? endif; ?>




