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
<div class="news">
	<div class="news-center clearfix">
		<div class="news-center-head"><h1><?=$arResult['NAME'];?></h1></div>
		<div class="news-center-body f-row">

			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="w-25 f-row-item">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-center-body-item">
					<div class="news-center-body-item-date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
					<div><?echo $arItem["NAME"]?></div>
				</a>
			</div>
			<?endforeach;?>


		</div>
	</div>
	<div class="news-line"></div>
	<div class="news-center no-padding clearfix">
		<div class="news-center-table">
			<div class="news-center-table-td news-center-table-td--w">
				<a class="all-link" href="/<?=$arResult['IBLOCK_TYPE_ID']?>/">
					все новости <i class="i-0025-arrow-icon"></i>
				</a>
			</div>
			<div class="news-center-table-td news-center-table-td--w1"><span class="news-center-rss-text">Хотите получать новости и акции?</span></div>
			<div class="news-center-table-td"><a class="btn newsletter_form_toggler" for="newsletter_hotline_btn">подписаться</a></div>
		</div>
	</div>
	<div class="news-line mt14"></div>
</div>


