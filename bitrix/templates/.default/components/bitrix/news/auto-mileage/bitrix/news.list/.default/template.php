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




			<div class="autos_search_result" id="search-results">
				<div class="autos_search_result_title">
					<h2>Результаты поиска</h2>
					<div class="sort_block js-results-sort">
						<?
						switch($_REQUEST['order']){
							case "ASC":
								$order = "DESC";
								break;

							case "DESC":
								$order = "ASC";
								break;

							default:
								$order = "DESC";
						}
						?>
						<span class="tablet_hidden">Сортировать по </span>
						<a href="/hpromise/avtomobili-s-probegom/?sort=NEW_PRICE&order=<?=$order?>&clear_cache=Y#search-results" class="<?if($_REQUEST['sort'] == "NEW_PRICE" OR empty($_REQUEST['order'])):?>active<?endif;?> <? if($_REQUEST['order']) print mb_strtolower($_REQUEST['order']); else print "asc";?>">цена</a> <i>|</i>
						<a href="/hpromise/avtomobili-s-probegom/?sort=MILEAGE&order=<?=$order?>&clear_cache=Y#search-results" class="<?if($_REQUEST['sort'] == "MILEAGE"):?>active<?endif;?> <?=mb_strtolower($_REQUEST['order']);?>">пробегу</a> <i>|</i>
						<a href="/hpromise/avtomobili-s-probegom/?sort=YEAR&order=<?=$order?>&clear_cache=Y#search-results" class="<?if($_REQUEST['sort'] == "YEAR"):?>active<?endif;?> <?=mb_strtolower($_REQUEST['order']);?>">году выпуска</a>
					</div>

					<div class="mob_car_filter">
						<span class="js-car-filter-show car-filter-show"></span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div id="chips_wrap"></div>
				<div class="clearfix"></div>
				<div class="autos_search_result_list">


				<?
				$i = 1;
				foreach($arResult["ITEMS"] as $key => $arItem):?>
					<div class="search_item car-list">
						<div class="car-list__row">
							<div class="car-list_cell" data-label="">
							<span class="car-list__brand_mob">
								<a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?echo $arItem["NAME"]?></a>
							</span>
							<span class="car-list_cell-inner car-list__year_mob"><?=$arItem['PROPERTIES']['YEAR']['VALUE']?></span>

							<span class="numb__row"><?=$i;?></span>

							<span class="car-list_cell-inner">
								<i class="car-list__img-holder">
									<a class="car-list__img-link" href="<?=$arItem['DETAIL_PAGE_URL']?>">
										<img src="<?=resize_for_other_server($arItem['PROPERTIES']['SLIDER']['VALUE'][0],165,130);?>" alt="<?echo $arItem["NAME"]?>">
									</a>
								</i>
							</span>
						</div>
					<div class="car-list_cell valign_top" data-label="">

						<span class="car-list__brand">
							<a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?echo $arItem["NAME"]?></a>
						</span>
						<div class="clearfix"></div>

						<div class="mob_dealer">
							<span class="car-list_cell-inner car-list__km"><?=myFormatCurrency($arItem['PROPERTIES']['MILEAGE']['VALUE'])?> км</span>

							<span class="car-list_cell-inner car-list__city">
								<?=$arItem['PROPERTIES']['STREET']['VALUE']?>, тел: <?=$arItem['PROPERTIES']['PHONE']['VALUE']?>
							</span>


						</div>

          					<span class="car-list_cell-inner car-list__descr">

								<?if($arItem['PROPERTIES']['ENGINE']['VALUE']):?>
									Двигатель: <?=$arItem['PROPERTIES']['ENGINE']['VALUE']?><br>
								<?endif;?>

								<?if($arItem['PROPERTIES']['POWER']['VALUE']):?>
									Мощность: <?=$arItem['PROPERTIES']['POWER']['VALUE']?><br>
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

								<div class="clearfix"></div>
								<div class="dealers_info">
									<span class="car-list_cell-inner car-list__city">
										<?=$arItem['PROPERTIES']['STREET']['VALUE']?>, тел: <?=$arItem['PROPERTIES']['PHONE']['VALUE']?>
									</span>
								</div>
							</div>
							<div class="car-list_cell" data-label="">
								<span class="car-list_cell-inner car-list__year"><?=$arItem['PROPERTIES']['YEAR']['VALUE']?></span>
							</div>
							<div class="car-list_cell" data-label="" style="width: 100px">
								<span class="car-list_cell-inner car-list__km"><?=myFormatCurrency($arItem['PROPERTIES']['MILEAGE']['VALUE'])?> км</span>
							</div>
							<div class="car-list_cell price-cell" data-label="">
								<span class="car-list_cell-inner car-list__price"><?=myFormatCurrency($arItem['PROPERTIES']['NEW_PRICE']['VALUE']);?> ₽</span>
							</div>
							<div class="car-list_cell compare-cell" data-label="">
								<a id="compareid_<?=$arItem['ID']?>" onclick="compare_tov(<?=$arItem['ID']?>);" href="javascript:void(0)" class="add-to-compare <?if(isset($_SESSION['CATALOG_COMPARE_LIST'][$arParams['IBLOCK_ID']]['ITEMS'][$arItem['ID']])):?>in-compare<? endif; ?>">
									<span></span>
									Сравнить
								</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<hr />

					<?
				$i++;
				endforeach; ?>

					<div class="clearfix"></div>
					<!-- <a href="#" class="all_results">Все результаты</a> -->
				</div>
			</div>
			<div class="clearfix"></div>





