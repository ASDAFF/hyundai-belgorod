<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>

<?
$APPLICATION->IncludeFile("/hpromise/header.php", Array(), Array(
    "MODE"      => "php",
    "NAME"      => "Редактирование включаемой области раздела",
    "TEMPLATE"  => ""
));
?>

<?

if($_REQUEST['action'] == 'DELETE_FROM_COMPARE_LIST'){
	$_SESSION['CATALOG_COMPARE_LIST'][$_REQUEST['id']]['ITEMS'] = array();
}
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.compare.result", 
	"compare.result", 
	array(
		"ACTION_VARIABLE" => "action",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"DETAIL_URL" => "",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD_BOX" => "name",
		"ELEMENT_SORT_FIELD_BOX2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER_BOX" => "asc",
		"ELEMENT_SORT_ORDER_BOX2" => "desc",
		"FIELD_CODE" => array(
		),
		"IBLOCK_ID" => "37",
		"IBLOCK_TYPE" => "products",
		"NAME" => "CATALOG_COMPARE_LIST",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PROPERTY_CODE" => array(
			0 => "SLIDER",
			1 => "vin",
			2 => "service_auto_apply",
			3 => "STREET",
			4 => "poi_id",
			5 => "exchange",
			6 => "time",
			7 => "GARANTY",
			8 => "registry_year",
			9 => "contact",
			10 => "action",
			11 => "ENGINE",
			12 => "sale_services",
			13 => "name",
			14 => "interior_code",
			15 => "modification_code",
			16 => "color_code",
			17 => "equipment_code",
			18 => "COUNT_USER",
			19 => "MARK",
			20 => "MODEL",
			21 => "POWER",
			22 => "mark_id",
			23 => "folder_id",
			24 => "modification_id",
			25 => "warranty_expire",
			26 => "GRAR_TYPE",
			27 => "MILEAGE",
			28 => "CAPACITY",
			29 => "wheel",
			30 => "contact_info",
			31 => "sts",
			32 => "state",
			33 => "STANDART",
			34 => "custom",
			35 => "PHONE",
			36 => "CUZOV",
			37 => "body_type",
			38 => "pts",
			39 => "TYPE_SALON",
			40 => "FUEL_TYPE",
			41 => "TRANSMISS",
			42 => "COLOR",
			43 => "COLOR_SALON",
			44 => "NEW_PRICE",
			45 => "YEAR",
			46 => "",
		),
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SHOW_PRICE_COUNT" => "1",
		"TEMPLATE_THEME" => "blue",
		"USE_PRICE_COUNT" => "N",
		"COMPONENT_TEMPLATE" => "compare.result"
	),
	false
);?>

<?
$APPLICATION->IncludeFile("/hpromise/footer.php", Array(), Array(
    "MODE"      => "html",
    "NAME"      => "Редактирование включаемой области раздела",
    "TEMPLATE"  => ""
));
?>
