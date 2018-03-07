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
<div class="container content content_small">
	<span class="media-report-el__title-txt t-h1">Статьи</span>
</div>

<div class="container content content_small">
					

					<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>

				<div class="grid__el">
                    <article class="media-report-el">
                        <div class="media-report-el__img">
                            <div class="media-report-el__img-size">
                                <div class="media-report-el__img-in abs bg_img" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>')"></div>
                            </div>
                        </div>
                        <div class="media-report-el-text">
                            <div class="media-report-el-text__wrap">
                                <div class="media-report-el__date">
                                    <span class="media-report-el__date-txt"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
                                </div>
                                <div class="media-report-el__title">
                                    <span class="media-report-el__title-txt t-h3"><?=$arItem["NAME"]?></span>
                                </div>
                                <div class="media-report-el__desc">
                                    <div class="editor editor_mb-off">
                                        <p><?=$arItem["PREVIEW_TEXT"]?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="g-link"></a>
                    </article>
                </div>
				
				<?endforeach;?>

				


				<script type="text/javascript">
					$('#date_start').datepicker({
						dateFormat: 'dd.mm.yy',
						onSelect: function(selected) {
							$("#date_end").datepicker("option","minDate", selected)
						},
						beforeShow: function(input, inst) {
							$('#ui-datepicker-div').addClass('b-news-datepicker');
						}
					});

					$('#date_end').datepicker({
						dateFormat: 'dd.mm.yy',
						onSelect: function(selected) {
							$("#date_start").datepicker("option","maxDate", selected)
						},
						beforeShow: function(input, inst) {
							$('#ui-datepicker-div').addClass('b-news-datepicker');
						}
					});
				</script>

<div class="clear"></div>
</div>



