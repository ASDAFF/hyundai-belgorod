<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("offer");
?>

<?if($_REQUEST["ELEMENT_CODE"]):?>

	<?
	$APPLICATION->IncludeComponent(
		"bitrix:news.detail",
		"offer.promo",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_ELEMENT_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "Y",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"BROWSER_TITLE" => "-",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
			"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
			"FIELD_CODE" => array("",""),
			"FILE_404" => "",
			"IBLOCK_ID" => "35",
			"IBLOCK_TYPE" => "products",
			"IBLOCK_URL" => "",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
			"MESSAGE_404" => "",
			"META_DESCRIPTION" => "-",
			"META_KEYWORDS" => "-",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Страница",
			"PROPERTY_CODE" => array("vin","service_auto_apply","poi_id","currency","video","exchange","time","year","registry_year","contact","action","OPTION_EQU","sale_services","ICON_GAS","ICON_PAZZL","ICON_REMEN","ICON_SPEED","name","SLIDER_IMAGE_ONE","interior_code","modification_code","color_code","equipment_code","TransmissionCount","owners_number","CUZOV","POWER","mark_id","folder_id","modification_id","warranty_expire","CAPACITY","Description","extras","armored","availability","metallic","run","wheel","contact_info","sts","CREDIT","SLIDER","SLOGAN","state","SpecId","DEFAULT_COMPLIT","OLD_PRICE","OPTION_SUMM","custom","TEXT_GAS","TEXT_PAZZL","TEXT_REMEN","TEXT_SPEED","number","phone","FUEL_TYPE","body_type","GRAR_TYPE","pts","TRANSMISS","STREET","unique_id","images","color","discount_price","PRICE_OT_IMPORTERA","NEW_PRICE",""),
			"SET_BROWSER_TITLE" => "Y",
			"SET_CANONICAL_URL" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "Y",
			"SET_META_KEYWORDS" => "Y",
			"SET_STATUS_404" => "Y",
			"SET_TITLE" => "Y",
			"SHOW_404" => "N",
			"USE_PERMISSIONS" => "N",
			"USE_SHARE" => "N"
		)
	);?>


<?else:?>

	<? offers_filter_promo($_REQUEST['ELEMENT_CODE']); ?>

<?endif;?>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>