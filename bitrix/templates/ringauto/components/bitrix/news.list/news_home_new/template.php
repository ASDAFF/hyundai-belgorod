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
<section class="section section--home-news">
	<div class="section-content home-news-holder">
		<div class="section-header-smc"><?=$arResult['NAME'];?></div>
		<div class="home-news">
			<div class="home-news-items">
				<? foreach($arResult["ITEMS"] as $item):?>
				<a href="<?=$item['DETAIL_PAGE_URL'];?>" class="home-news-item">
					<div class="home-news-item__image">
						<img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" class="home-news-item__img" alt="<?=$item['NAME']?>" />
					</div>
					<div class="home-news-items__inner">
						<span class="home-news-item__date"><?=$item['DISPLAY_ACTIVE_FROM']?></span>
						<p class="home-news-item__title"><?=$item['NAME']?></p>
					</div>
				</a>
				<? endforeach; ?>
			</div>
		</div>
		<div class="news-subscriber">
			<a href="/news/" class="news-subscriber__more">Все новости<span class="news-subscriber__more-ic-w"><svg xmlns="http://www.w3.org/2000/svg" class="ic-svg ic-arrow-m"><use xlink:href="#ic-arrow-m"></use></svg></span></a>
		</div>
	</div>
</section>






