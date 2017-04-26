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





		<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "service-menu", Array(
			"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
			"CACHE_GROUPS" => "Y",	// ��������� ����� �������
			"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
			"CACHE_TYPE" => "N",	// ��� �����������
			"COUNT_ELEMENTS" => "Y",	// ���������� ���������� ��������� � �������
			"IBLOCK_ID" => "11",	// ��������
			"IBLOCK_TYPE" => "products",	// ��� ���������
			"SECTION_CODE" => "",	// ��� �������
			"SECTION_FIELDS" => array(	// ���� ��������
				0 => "",
				1 => "",
			),
			"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID �������
			"SECTION_URL" => "",	// URL, ������� �� �������� � ���������� �������
			"SECTION_USER_FIELDS" => array(	// �������� ��������
				0 => "",
				1 => "UF_HIDDEN",
			),
			"SHOW_PARENT_NAME" => "Y",	// ���������� �������� �������
			"TOP_DEPTH" => "2",	// ������������ ������������ ������� ��������
			"VIEW_MODE" => "LINE",	// ��� ������ �����������
			"NOW_ID" => $arResult['IBLOCK_SECTION_ID']
		),
			false
		);?>

	<div class="content-wrap">

		<?$APPLICATION->IncludeComponent("bitrix:news.list", "service-list", Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
			"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
			"AJAX_MODE" => "N",	// �������� ����� AJAX
			"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
			"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
			"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
			"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
			"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
			"CACHE_GROUPS" => "Y",	// ��������� ����� �������
			"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
			"CACHE_TYPE" => "A",	// ��� �����������
			"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
			"DETAIL_URL" => "",	// URL �������� ���������� ��������� (�� ��������� - �� �������� ���������)
			"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
			"DISPLAY_DATE" => "Y",	// �������� ���� ��������
			"DISPLAY_NAME" => "Y",	// �������� �������� ��������
			"DISPLAY_PICTURE" => "Y",	// �������� ����������� ��� ������
			"DISPLAY_PREVIEW_TEXT" => "Y",	// �������� ����� ������
			"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
			"FIELD_CODE" => array(	// ����
				0 => "",
				1 => "",
			),
			"FILTER_NAME" => "",	// ������
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// �������� ������, ���� ��� ���������� ��������
			"IBLOCK_ID" => "11",	// ��� ��������������� �����
			"IBLOCK_TYPE" => "products",	// ��� ��������������� ����� (������������ ������ ��� ��������)
			"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// �������� �������� � ������� ���������
			"INCLUDE_SUBSECTIONS" => "Y",	// ���������� �������� ����������� �������
			"MESSAGE_404" => "",	// ��������� ��� ������ (�� ��������� �� ����������)
			"NEWS_COUNT" => "20",	// ���������� �������� �� ��������
			"PAGER_BASE_LINK_ENABLE" => "N",	// �������� ��������� ������
			"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
			"PAGER_SHOW_ALL" => "N",	// ���������� ������ "���"
			"PAGER_SHOW_ALWAYS" => "N",	// �������� ������
			"PAGER_TEMPLATE" => ".default",	// ������ ������������ ���������
			"PAGER_TITLE" => "�������",	// �������� ���������
			"PARENT_SECTION" => $arResult['IBLOCK_SECTION_ID'],	// ID �������
			"PARENT_SECTION_CODE" => "",	// ��� �������
			"PREVIEW_TRUNCATE_LEN" => "",	// ������������ ����� ������ ��� ������ (������ ��� ���� �����)
			"PROPERTY_CODE" => array(	// ��������
				0 => "",
				1 => "",
			),
			"SET_BROWSER_TITLE" => "Y",	// ������������� ��������� ���� ��������
			"SET_LAST_MODIFIED" => "N",	// ������������� � ���������� ������ ����� ����������� ��������
			"SET_META_DESCRIPTION" => "Y",	// ������������� �������� ��������
			"SET_META_KEYWORDS" => "Y",	// ������������� �������� ����� ��������
			"SET_STATUS_404" => "N",	// ������������� ������ 404
			"SET_TITLE" => "Y",	// ������������� ��������� ��������
			"SHOW_404" => "N",	// ����� ����������� ��������
			"SORT_BY1" => "ACTIVE_FROM",	// ���� ��� ������ ���������� ��������
			"SORT_BY2" => "SORT",	// ���� ��� ������ ���������� ��������
			"SORT_ORDER1" => "DESC",	// ����������� ��� ������ ���������� ��������
			"SORT_ORDER2" => "ASC",	// ����������� ��� ������ ���������� ��������

		),
			false
		);?>


		<div class="service-right-block">

			<h1><?=$arResult["NAME"]?></h1>
			<p><?echo $arResult["DETAIL_TEXT"];?></p>

		</div>

		<div class="clear"></div>
	</div>



</div>
