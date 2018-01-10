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

$itemCount = count($arResult);
$isAjax = (isset($_REQUEST["ajax_action"]) && $_REQUEST["ajax_action"] == "Y");

if ($arParams['POSITION_FIXED'] == 'Y')
{
	$mainClass .= ' fix '.($arParams['POSITION'][0] == 'bottom' ? 'bottom' : 'top').' '.($arParams['POSITION'][1] == 'right' ? 'right' : 'left');
}
$style = ($itemCount == 0 ? ' style="display: none;"' : '');
?>
<div class="car_in_compare_fixed_cont">
	<?=$itemCount;?>
</div>


<script type="text/javascript">
var <? echo $obCompare; ?> = new JCCatalogCompareList(<? echo CUtil::PhpToJSObject($jsParams, false, true); ?>)
</script>