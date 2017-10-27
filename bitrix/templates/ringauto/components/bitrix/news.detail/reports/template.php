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

<div class="container">
	<div class="content_wrap">
		<div class="content_area">

			<div class="title_area">
				<div class="navigation">
					<ul>
						<li><a href="/">Hyundai</a> &gt;</li>
						<li><span>Медиа-центр</span> &gt;</li>
						<li class="on" style=""><a href="/news">Новости компании</a> &gt;</li>
						<li><a href="#"><?=$arResult["NAME"]?></a></li>
					</ul>
				</div>
				<h1 class="title">Новости компании</h1>
			</div>



			<div class="b-news-view">
				<h1 class="b-news-view__title"><?=$arResult["NAME"]?></h1>
                <span class="b-news-view__date">
	                <?=$arResult["DISPLAY_ACTIVE_FROM"]?>
				</span>
				<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
				<div class="b-news-view__content">
					<?echo $arResult["DETAIL_TEXT"];?>
				</div>
			</div>

		</div>
	</div>
</div>


