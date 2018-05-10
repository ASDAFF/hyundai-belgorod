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




<div class="offers">
	<div class="news-line"></div>
	<div class="news-center no-padding clearfix" style="text-align: center">
		<span class="h1-offer"><?=$arResult['NAME']?></span>
	</div>
	<div class="news-line mt14"></div>


	<div class="content-wrap">

		<div class="super-offer-slide-giant">
			<div class="filter-box">
				<div class="filter-header">
					<p>Уточнить параметры</p>
				</div>
				<div class="filter-body">
					<p><span>&#9650;</span> Модель</p>
					<ul>
					<?foreach($arResult['FOR_FILTER'] as $arItem):?>
					<li><input type="radio" class="option-input radio" name="offer_model" value="<?=$arItem?>" <?if($_GET['offer-filter'] == $arItem):?>checked<?endif;?>> <?=$arItem?></li>
					<?endforeach;?>
					</ul>
				</div>
			</div>
		</div>


		<?
		foreach($arResult["ITEMS"] as $arItem) {

			?>
			<div class="super-offer-slide-giant">
				<div class="item" id="bx_<?=$arItem['ID']?>">
					<?stiker(SITE_ID,4,'right','160px','180px',$arItem["PROPERTIES"]["folder_id"]['VALUE']);?>
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>">


						<img data-lazy="<?=$arItem["PROPERTIES"]["SLIDER"]['VALUE'][0]?>" src="<?=$arItem["PROPERTIES"]["SLIDER"]['VALUE'][0]?>" alt="<?=$arItem['NAME']?>"/>

					</a>

					<div class="mCarListCards_Item_Info">
						<div class="mCarListCards_Item_Info_Name">
							<a href="<?=$arItem['DETAIL_PAGE_URL']?>">
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
			$('.super-offer-slide-giant .filter-box .filter-body p').click(function(){
				$than = this;
				$('.super-offer-slide-giant .filter-box .filter-body ul').slideToggle(function(){
					if($(this).css('display') == 'none'){
						$('span',$than).html('&#9660;');
					}else{
						$('span',$than).html('&#9650;');
					}
				});
			});
			$('.option-input.radio').click(function(){
				window.location.href = "?offer-filter="+$(this).val();
			});
		});
	</script>

</div>




