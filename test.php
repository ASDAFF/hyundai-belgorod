<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Hyundai Solaris купить в Воронеже. Цена на новый Хендай Солярис");
$APPLICATION->SetTitle("NewSolaris");
?>

<?

offer_filter_auto($APPLICATION->GetCurPage());

?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>