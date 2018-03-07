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

<div class="container" style="margin-top:0">
	<div class="content_wrap" style="margin: 0px auto;">
		<div class="content_area">

			

			<div class="b-news-view">
				<h1 class="b-news-view__title"><?=$arResult["NAME"]?></h1>
                <span class="b-news-view__date">
	                <?=$arResult["DISPLAY_ACTIVE_FROM"]?>
				</span>
				<?if($arResult["DETAIL_PICTURE"]["SRC"]):?>
				<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
				<?endif;?>
				<div class="b-news-view__content">
					<?echo $arResult["DETAIL_TEXT"];?>
				</div>
			</div>
			
			

		</div>
	</div>
</div>


