<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/hpromise/avtomobili-s-probegom/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/hpromise/avtomobili-s-probegom/index.php",
	),
	array(
		"CONDITION" => "#^/services/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/services/index.php",
	),
	array(
		"CONDITION" => "#^/products/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/products/index.php",
	),
	array(
		"CONDITION" => "#^/contacts/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/contacts/index.php",
	),
	array(
		"CONDITION" => "#^/offer/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/offer/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
	array(
		"CONDITION" => "#^/offer-service/(.*?)/#",
		"RULE" => "ELEMENT_CODE=\$1",
		"ID" => "bitrix:news.detail",
		"PATH" => "/offer-service/index.php",
	),
);

?>