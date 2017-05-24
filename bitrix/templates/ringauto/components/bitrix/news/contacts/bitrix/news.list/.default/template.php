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

		<div class="title_area">
			<div class="navigation">
				<ul>
					<li><a href="">Hyundai</a> &gt;</li>
					<li><span>Контакты</span> </li>
				</ul>
			</div>

			<h1 class="title"><?=$arResult["NAME"]?></h1>
		</div>

		<div class="content_area">

			<div class="side_menu more_menu">
				<ul class="menu download_type" style="width:220px">
					<?foreach($arResult["ITEMS"] as $arItem):?>
					<li class=""><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem['NAME']?></a></li>
					<?endforeach;?>

				</ul>
			</div>

			<div class="contents_award_car">

				<?foreach($arResult["ITEMS"] as $arItem):?>
				<div class="award_car" style="width: 630px">
					<h2 id=""><?=$arItem['NAME']?></h2>
					<p><span class="strong">Адрес:</span> <?=$arItem['PROPERTIES']['STRET']['VALUE']?></p>
					<p><span class="strong">Телефон:</span> <?=$arItem['PROPERTIES']['PHONE']['VALUE']?></p>
					<p style="margin-bottom: 10px"><span class="strong">Режим работы:</span> <?=$arItem['PROPERTIES']['WORK']['VALUE']?></p>
					<p>
						<?=$arItem['PROPERTIES']['MAP']['~VALUE']['TEXT']?>
					</p><br>
					<p>ПРОЕЗД НА ОБЩЕСТВЕННОМ ТРАНСПОРТЕ</p><br><br>

					<?foreach($arItem['PROPERTIES']['BUS']['VALUE'] as $b){?>
						<p><?=$b?></p><br>
					<?}?>
				</div>
				<? endforeach; ?>






			</div>
		</div>
	</div>

</div>


