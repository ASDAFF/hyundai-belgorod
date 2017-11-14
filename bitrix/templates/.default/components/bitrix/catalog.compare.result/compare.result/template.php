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

$isAjax = ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["ajax_action"]) && $_POST["ajax_action"] == "Y");
?>

<?
if ($isAjax)
{
	$APPLICATION->RestartBuffer();
}
?>


	<script>
		$(document).ready(function(){
			$('body').addClass('autos').addClass('compare');
		});
	</script>

	<div class="cont">
		<div class="nblock">
			<div class="compare_list_head">
				<div class="clearfix"></div>
				<a href="/hpromise/avtomobili-s-probegom/" class="back_btn">Вернуться</a>
				<div class="clearfix"></div>
				<h1>Сравнение <sup><?=count($arResult['ITEMS']);?></sup></h1>
				<a href="/hpromise/avtomobili-s-probegom/" class="compare_list_head_right tablet_hidden">Добавить еще</a>

				<div class="clearfix"></div>

				<div id="">
					<div class="compare_list">

						<div class="checkbox_circle_block">
							<label>
								<a class="js-custom-checkbox_circle" href="<? echo $arResult['COMPARE_URL_TEMPLATE'].'DIFFERENT=N'; ?>" rel="nofollow"><?=GetMessage("CATALOG_ALL_CHARACTERISTICS")?></a>
								<span class="custom-checkbox_circle <?if($_REQUEST['DIFFERENT'] == "N"):?>custom-checkbox--checked<?endif;?>"></span>
							</label>
						</div>
						<div class="checkbox_circle_block">
							<label>
								<a class="js-custom-checkbox_circle" href="<? echo $arResult['COMPARE_URL_TEMPLATE'].'DIFFERENT=Y'; ?>" rel="nofollow"><?=GetMessage("CATALOG_ONLY_DIFFERENT")?></a>
								<span class="custom-checkbox_circle <?if($_REQUEST['DIFFERENT'] == "Y"):?>custom-checkbox--checked<?endif;?>"></span>
							</label>
						</div>
						<a href="?action=DELETE_FROM_COMPARE_LIST&id=<?=$arParams['IBLOCK_ID']?>" class="clear_compare tablet_hidden">Удалить список</a>
						<div class="clearfix"></div>

						<div class="compare_list_table_custom">
							<div class="compare_list_table_wrap" style="display:block; width: 426px;">
								<div class="compare_list_table">

									<?
									if (!empty($arResult["SHOW_PROPERTIES"]))
									{
										$i = 1;
										foreach ($arResult["SHOW_PROPERTIES"] as $code => $arProperty)
										{
											$showRow = true;
											if ($arResult['DIFFERENT'])
											{
												$arCompare = array();
												foreach($arResult["ITEMS"] as $arElement)
												{
													$arPropertyValue = $arElement["DISPLAY_PROPERTIES"][$code]["VALUE"];
													if (is_array($arPropertyValue))
													{
														sort($arPropertyValue);
														$arPropertyValue = implode(" / ", $arPropertyValue);
													}
													$arCompare[] = $arPropertyValue;
												}
												unset($arElement);
												$showRow = (count(array_unique($arCompare)) > 1);
											}

											if ($showRow)
											{
												?>
												<div class="compare_list_row <?if($i > 5):?>hidden<? endif; ?>" <?if($_REQUEST['bxajaxid'] and $i > 5):?>style="display: table-row;"<?endif;?>>
													<?foreach($arResult["ITEMS"] as $arElement)
													{
														switch($code):

															case "SLIDER":
																?>

																<div class="compare_list_cell cell_id_<?=$arElement['ID']?>">
																	<a href="<?=$arElement['DETAIL_PAGE_URL']?>">
																		<img src="<?=$arElement['DISPLAY_PROPERTIES'][$code]['VALUE'][0]?>" alt="">
																		<h4 class="model"><?=$arElement['NAME']?></h4>
																		<p><?=$arElement['DISPLAY_PROPERTIES']['CAPACITY']['VALUE']?> MT</p>
																	</a>
																	<span class="del_compare_item" data-autoid="<?=$arElement['ID']?>" onclick="CatalogCompareObj.MakeAjaxAction('/hpromise/avtomobili-s-probegom/compare.php?action=DELETE_FROM_COMPARE_RESULT&ID=<?=$arElement['ID']?>');"></span>
																</div>

																<?
																break;

															default:
																?>
																<div class="compare_list_cell cell_id_<?=$arElement['ID']?>">
																	<h5><?=$arElement['DISPLAY_PROPERTIES'][$code]['NAME']?></h5>
																	<p class="cell_value"><?=$arElement['DISPLAY_PROPERTIES'][$code]['VALUE']?></p>
																</div>
																<?


														endswitch;
													}
													unset($arElement);
													?>
												</div>
												<?if($i == 5):?>
												<div class="compare_list_row row_head">
													<div class="compare_list_cell no_border tech">
														<h3>Характеристики</h3>
													</div>
													<div class="compare_list_cell no_border"></div>
													<div class="compare_list_cell no_border"></div>
												</div>
												<? endif; ?>
												<?
											}
											$i++;
										}
									}
									?>

								</div>
								<div class="clearfix"></div>
							</div>
						</div>

						<div class="clearfix"></div>
					</div>

					<script type="text/javascript">
						var CatalogCompareObj = new BX.Iblock.Catalog.CompareClass("bx_catalog_compare_block");
					</script>
				</div>
			</div>

		</div>
	</div>

	<div class="clearfix"></div>


<?
if ($isAjax)
{
	die();
}
?>

<script type="text/javascript">
	var CatalogCompareObj = new BX.Iblock.Catalog.CompareClass("bx_catalog_compare_block");
</script>