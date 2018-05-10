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

<!--
Контент страницы начнется тут
-->

<main class="main" data-model="home">


	<div class="container">
		<div class="content_wrap">
			<div class="content_area">


				<div class="title_area">
					<h1 class="title">О компании</h1>
				</div>

				<div class="b-news-view">
					<h1 class="b-news-view__title">Контакты</h1>
					<div class="b-news-view__content">

						<?foreach($arResult["ITEMS"] as $arItem):?>
						<p><b><?=$arItem["NAME"]?></b><br/>
							<b>Адрес:</b> <?=$arItem['PROPERTIES']['STRET']['VALUE']?><br/>
							<b>Телефон:</b>  <?=$arItem['PROPERTIES']['PHONE']['VALUE']?><br/>
							<b>E-mail:</b> <a href="<?=$arItem['PROPERTIES']['EMAIL']['VALUE']?>"><?=$arItem['PROPERTIES']['EMAIL']['VALUE']?></a><br/>
							<b>Режим работы автоцентра:</b> <?=$arItem['PROPERTIES']['WORK']['VALUE']?><br/>
							<?=$arItem['PROPERTIES']['MAP']['~VALUE']['TEXT']?>
						<? endforeach; ?>

					</div>

					<br /><br />
				</div>



</main>


<!--
Контент страницы закончится тут
-->







