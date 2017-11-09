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

<div class="technologies">

	<div class="technologies-controls">
		<div class="news-center-head news-center-head--mb"><span>Технологии</span></div>
		<div  id="technologies-controls" class="technologies-item-content-center-right-tabs-menu clearfix">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<span class="technologies-item-content-center-right-tabs-menu-item active"><?echo $arItem["NAME"];?></span>
			<?endforeach;?>

		</div>
	</div>

	<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="technologies-item">
		<div class="technologies-item-content">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""/>
			<div class="technologies-item-content-center clearfix">
				<div class="technologies-item-content-center-left">
					<a class="btn-play video_link" href="#" data-src="<?=$arItem["PROPERTIES"]["LINK_YOU"]["VALUE"]?>?rel=0&showinfo=0;autoplay=1">
						<i class="btn-play-item i-0014-play-btn-copy-2"></i>
						<i class="btn-play-item i-0015-play-btn"></i>
					</a>
					<div class="technologies-item-content-center-left-video hidden"></div>
				</div>
				<div class="technologies-item-content-center-right">
					<div class="technologies-item-content-center-right-tabs">
						<div class="technologies-item-content-center-right-tabs-content">
							<div class="technologies-item-content-center-right-tabs-content-item">
								<div class="technologies-item-content-center-right-tabs-content-item-head"><?=$arItem["PROPERTIES"]["TITLE_DESC"]["VALUE"]?></div>
								<p><?echo $arItem["PREVIEW_TEXT"];?></p>
								<!--
                                                                        <a href="#" class="all-link">
                                                                            подробнее <i class="i-0025-arrow-icon"></i>
                                                                        </a>
                                -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?endforeach;?>



</div>

