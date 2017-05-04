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

	<div class="content-wrap">
		<span class="title-lev01">
			<?=$arResult['NAME'];?>
		</span>

		<ul class="news-list-lg">
			<li class="news-item">
				<a href="<?=$arResult["ITEMS"][0]['DETAIL_PAGE_URL']?>">
					<div class="cover" style="background: url('<?=$arResult["ITEMS"][0]['PREVIEW_PICTURE']['SRC']?>') no-repeat center center; background-size: cover;">
					</div>
					<div class="descr"><?=$arResult["ITEMS"][0]['NAME']?></div>
					<div class="date"><?=$arResult["ITEMS"][0]['DISPLAY_ACTIVE_FROM']?></div>
				</a>
			</li>
		</ul>

		<ul class="news-list-sm">
			<?
			array_shift($arResult["ITEMS"]);
			foreach($arResult["ITEMS"] as $i){
			?>
			<li class="news-item">
				<a href="<?=$i['DETAIL_PAGE_URL'];?>">
					<div class="cover"><img src="<?=$i['PREVIEW_PICTURE']['SRC']?>" alt=""></div>
					<div class="descr"><?=$i['NAME']?></div>
					<div class="date"><?=$i['DISPLAY_ACTIVE_FROM']?></div>
				</a>
			</li>
			<?}?>
		</ul>
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


