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
if (!defined('B_PROLOG_INCLUDED') || (B_PROLOG_INCLUDED !== true)) {
	die();
}

if (!$arResult["NavShowAlways"]) {
	if (
		(0 == $arResult["NavRecordCount"])
		||
		((1 == $arResult["NavPageCount"]) && (false == $arResult["NavShowAll"]))
	) {
		return;
	}
}

$navQueryString      = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$navQueryStringFull  = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

?>

<div class="b-news-pagination">
	<p class="pagination">

		<a class="pagination_prev" href="?PAGEN_5=<?php echo $arResult["NavPageNomer"]-1 ?>" rel="prev">Предыдущая</a>

		<?php while ($arResult["nStartPage"] <= $arResult["nEndPage"]) { ?>
			<?php if ($arResult["nStartPage"] == $arResult["NavPageNomer"]) { ?>
				<strong class="pagination-item current"><?php echo $arResult["nStartPage"] ?></strong>
			<?php } elseif ((1 == $arResult["nStartPage"]) && (false == $arResult["bSavePage"])) { ?>
				<a class="pagination-item" href="<?php echo $arResult["sUrlPath"] ?><?php echo $navQueryStringFull ?>"><?php echo $arResult["nStartPage"] ?></a>
			<?php } else { ?>
				<a class="pagination-item" href="<?php echo $arResult["sUrlPath"] ?>?<?php echo $navQueryString ?>PAGEN_<?php echo $arResult["NavNum"] ?>=<?php echo $arResult["nStartPage"] ?>"><?php echo $arResult["nStartPage"] ?></a>
			<?php } ?>
			<?php $arResult["nStartPage"]++ ?>
		<?php } ?>

		<a class="pagination_next" href="?PAGEN_5=<?php echo $arResult["NavPageNomer"]+1 ?>" rel="next">Следующая</a>

	</p><!-- .pagination -->
</div>
