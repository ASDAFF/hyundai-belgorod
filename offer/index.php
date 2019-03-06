<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("offer");
?>

<?
if(!empty($_GET['offer-filter'])){
	$GLOBALS['filterOffer'] = array("PROPERTY_folder_id" => $_GET['offer-filter']);
}
?>

<?
/*
$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"offer", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "vin",
			1 => "service_auto_apply",
			2 => "poi_id",
			3 => "currency",
			4 => "video",
			5 => "exchange",
			6 => "time",
			7 => "year",
			8 => "registry_year",
			9 => "contact",
			10 => "action",
			11 => "OPTION_EQU",
			12 => "sale_services",
			13 => "ICON_GAS",
			14 => "ICON_PAZZL",
			15 => "ICON_REMEN",
			16 => "ICON_SPEED",
			17 => "name",
			18 => "SLIDER_IMAGE_ONE",
			19 => "interior_code",
			20 => "modification_code",
			21 => "color_code",
			22 => "equipment_code",
			23 => "owners_number",
			24 => "CUZOV",
			25 => "mark_id",
			26 => "folder_id",
			27 => "modification_id",
			28 => "warranty_expire",
			29 => "CAPACITY",
			30 => "description",
			31 => "extras",
			32 => "armored",
			33 => "availability",
			34 => "metallic",
			35 => "run",
			36 => "wheel",
			37 => "contact_info",
			38 => "sts",
			39 => "CREDIT",
			40 => "SLIDER",
			41 => "SLOGAN",
			42 => "state",
			43 => "SpecId",
			44 => "DEFAULT_COMPLIT",
			45 => "OLD_PRICE",
			46 => "custom",
			47 => "TEXT_GAS",
			48 => "TEXT_PAZZL",
			49 => "TEXT_REMEN",
			50 => "TEXT_SPEED",
			51 => "number",
			52 => "phone",
			53 => "body_type",
			54 => "pts",
			55 => "TRANSMISS",
			56 => "STREET",
			57 => "unique_id",
			58 => "images",
			59 => "color",
			60 => "discount_price",
			61 => "NEW_PRICE",
			62 => "IMAGES_FON_1",
			63 => "IMAGES_FON_2",
			64 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "61",
		"IBLOCK_TYPE" => "products",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "CREDIT",
			1 => "SLIDER",
			2 => "OLD_PRICE",
			3 => "NEW_PRICE",
			4 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "160",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/offer/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "offer",
		"FILTER_NAME" => "filterOffer",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "folder_id",
			1 => "",
		),
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);
*/
?>

	<main class="main" data-model="home">

		<style>
			#wrapper {
				background: #f5f5f5 !important;
			}
		</style>

		<div class="offers-container">
			<div class="content_area">
				<!-- hide elantra and ix35 banner-->

				<!-- WARNING -->
				<!-- this checks only img src!! no checking by offer ID -->
				<!--
                            <img src="http://hyundai-belgorod.ru/promo/special-offer/img/1_1920х530_Hyundai_10.jpg" class="promo-head">-->
				<br>
				<div class="news-line"></div>
				<div class="news-center no-padding clearfix" style="text-align: center">
					<span class="h1-offer">Спецпредложения Белгород</span>
				</div>
				<div class="news-line mt14"></div>

				<!-- old syntax: -->
				<!-- <img class="promo-head" src="http://www.hyundai.ru/media/offers_image/766be949ba7a5f92fc74d6e23aca1ed7_Hyundai_Shell_aug_1500x545.jpg" style=""/> -->

				<!-- end of hiding banner-->

				<div class="offers-content">
					<!--
                                    <h1 class="title-offer bordr-btm">Автомобили Hyundai по специальным условиям!</h1>
                    -->
					<div class="offers-block">

						<div class="offer-terms">
							<!--<p>Только в Ринг Авто Белгород автомобили Hyundai по специальным условиям!</p>-->
							<br>
							<!--
                                    <tr style="height:50.1pt">
                                        <td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
                                            <p class="MsoNormal" align="center" style="text-align:center">
                                                <b>
                                                    <span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">CRETA Sleek Silver VIN Z94G3813DKR141940
                                                        <o:p></o:p>
                                                    </span>
                                                </b>
                                                <br>
                                            </p>
                                        </td>

                                        <td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
                                            <p class="MsoNormal" align="center" style="text-align:center">
                                                <b>
                                                    <span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_2,0L_4WD_STYLE CRUISE
                                                        <o:p></o:p>
                                                    </span>
                                                </b>
                                                <br>
                                            </p>
                                        </td>
                                        <td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
                                            <p class="MsoNormal" align="center" style="text-align:center">
                                                <b>
                                                    <span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Sleek Silver
                                                        <o:p></o:p>
                                                    </span>
                                                </b>
                                                <br>
                                            </p>
                                        </td>
                                    </tr>
    --><table class="MsoNormalTable" cellspacing="0" cellpadding="0" style="width:700.0pt;margin-left:.1pt;border-collapse:collapse">
								<tbody>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">CRETA

												</span>
											</b>
											<br>
										</p>
									</td>

									<td style="width:185.0pt;border:solid #CCC085 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_2WD_ACTIVE
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border:solid #CCC085 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Sleek Silver
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">CRETA
												</span>
											</b>
											<br>
										</p>
									</td>

									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_2WD_ COMFORT
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Sanset Orange
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">CRETA

												</span>
											</b>
											<br>
										</p>
									</td>

									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_2WD_ACTIVE
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Crystal White
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">CRETA

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_2WD_ACTIVE
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Fiery Red

												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">CRETA
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6MT_1,6L_4WD_ACTIVE+WINTER+LIGHT

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Urban Gray
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">CRETA
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_2,0L_2WD_TREVEL
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Crystal White
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">CRETA

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_2WD_ACTIVE+WINTER
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Sleek Silver
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">CRETA

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_2WD_TREVEL

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Sanset Orange
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">CRETA

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_2,0L_4WD_TREVEL+ADVANCED
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Crystal White

												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">CRETA

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_2,0L_2WD_TREVEL
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Urban Gray

												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">CRETA
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_2WD_ACTIVE+WINTER
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Phantom Black
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_COMFORT+WIN

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Crystal White
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,4L_COMFORT

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Sleek Silver
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,4L_COMFORT+ADV
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Sleek Silver
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6MT_1,6L_ACTIVE PLUS
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Marina Blue

												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS</span></b><br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_COMFORT&nbsp;
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Sleek Silver
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6MT_1,4L_ACTIVE PLUS
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Crystal White
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6MT_1,6L_ACTIVE PLUS
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Phantom Black

												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_COMFORT+WIN

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Crystal White

												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6MT_1,6L_COMFORT
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Crystal White
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_COMFORT&nbsp;
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Crystal White
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_COMFORT+WIN
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Sleek Silver
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_COMFORT+WIN
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Urban Gray
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6MT_1,6L_ACTIVE PLUS
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Phantom Black
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_COMFORT&nbsp;
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Phantom Black
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">SOLARIS

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_1,6L_COMFORT&nbsp;
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Marina Blue
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">TUCSON
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_2,0L_4WD_LIFESTYLE + ADV_NEW
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Polar White
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center"><b><span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">TUCSON&nbsp;</span></b><br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_2,0L_2WD_LIFESTYLE
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">White Sand
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">TUCSON

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_2,0L_2WD _ LIFESTYLE_NEW
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">White Sand
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">TUCSON
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_2,0L_4WD_LIFESTYLE
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Platinum Silver
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">TUCSON
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">8AT_2,0D_4WD_DYNAMIC_ NEW
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">White Sand
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">TUCSON

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_2,0L_4WD_LIFESTYLE
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Micron Grey
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">TUCSON

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_2,0L_2WD _ LIFESTYLE_NEW
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Polar White
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">TUCSON
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_2,0L_4WD _ LIFESTYLE_NEW
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Phantom Black
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">TUCSON

												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_2,0L_4WD _ LIFESTYLE_NEW
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Phantom Black
												</span>
											</b>
											<br>
										</p>
									</td>
								</tr>
								<tr style="height:50.1pt">
									<td style="width:161.0pt;border:solid #CCC085 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">TUCSON
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:185.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span lang="EN-US" style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">6AT_2,0L_4WD_LIFESTYLE
												</span>
											</b>
											<br>
										</p>
									</td>
									<td style="width:89.0pt;border-top:none;border-left:none;border-bottom:solid #CCC085 1.0pt;border-right:solid #CCC085 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:50.1pt">
										<p class="MsoNormal" align="center" style="text-align:center">
											<b>
												<span style="font-size:10.0pt;font-family:&quot;Hyundai Sans Text&quot;,sans-serif;color:black;mso-fareast-language:RU">Phantom Black
												</span>
											</b>
											<br>
										</p>
									</td>

								</tr>

								</tbody>
							</table>



						</div>


					</div>

				</div>

			</div>
		</div>


		<style>
			.request-service-btn {
				-moz-user-select: none;
				background: #1d88ce none repeat scroll 0 0;
				border: 2px solid #fff;
				color: #fff !important;
				display: inline-block;
				font-family: "Arial", sans-serif;
				font-size: 13px;
				font-weight: bold;
				padding: 16px 29px;
				text-align: center;
				text-transform: uppercase;
				transition: background 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s, border-color 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s, color 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s;
				text-decoration: none !important;
			}

			.request-service-btn:hover {
				background: rgba(29, 136, 206, 0.8) none repeat scroll 0 0;
				color: #1d88ce !mportant;
				text-decoration: none;
				border: 2px solid #fff;
			}

			.h1-offer {
				font-weight: 300;
				font-family: 'HyundaiSansHead',sans-serif;
				color: #0084CF;
				font-size: 40px;
				text-transform: uppercase;
				text-align: center;
			}
		</style>
	</main>

	<div class="clear"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>