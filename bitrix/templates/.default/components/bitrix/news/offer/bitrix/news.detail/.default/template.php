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
//var_dump($arResult);
?>
<script type="text/javascript" src="/js/readmore.js"></script>
<div class="slider">
	<?stiker(SITE_ID,2,'left',false,false,$arResult["PROPERTIES"]["folder_id"]['VALUE']);?>
	<div class="main-slideshow">

		<?foreach($arResult["PROPERTIES"]["SLIDER"]["VALUE"] as $key => $arItem):
			if(!preg_match('/photo1/',$arItem,$preg)):
		?>
			<div class="main-slideshow-item">
				<div class="main-slideshow-item-content ls-slide">
					<a href="<?=$arResult["PROPERTIES"]["SLIDER"]["DESCRIPTION"][$key]?>"><img src="<?=$arItem;?>" alt=""/></a>
				</div>
			</div>
		<?
			endif;
		endforeach;
		?>

	</div>

	<div class="box-price-absolute-right">
	
		<div class="box-price">
			<p><?=myFormatCurrency($arResult["PROPERTIES"]['OLD_PRICE']['VALUE']);?></p>
			<p>старая цена</p>
		</div>


		<div class="box-price">
			<p><?=myFormatCurrency(preg_replace('/\D/', '', $arResult['PROPERTIES']['VIGODA']['VALUE'])+preg_replace('/\D/', '', $arResult['PROPERTIES']['CREDIT']['VALUE']))?></p>
			<p>выгода до</p>
		</div>

<?
/*
<div class="box-price">
			<p><?=myFormatCurrency($arResult["PROPERTIES"]['PRICE_OT_IMPORTERA']['VALUE']);?></p>
			<p>цена без скидки</p>
		</div>
*/
?>
		
		<div class="clear"></div>
	</div>

	<p style="color: #000;">
		<? /*$Description = explode('.',$arResult["PROPERTIES"]['Description']['VALUE']);
		print $Description[0].'.'.$Description[1].'.'; */?>
	
	 Выгода достигается путем комбинаций нескольких программ: сдача авто в trade in, сдача авто в trade in марки hyundai, скидка от дилерского центра, возможна госпрограмма.
	</p>

</div>
<div class="top-margin"></div>
<div class="news-center no-padding clearfix">
	<div class="news-center-table">
		<div class="news-center-table-td news-center-table-td"><span class="news-center-rss-text offer">Забронируй свою скидку уже сегодня</span></div>
		<div class="news-center-table-td a-rigth"><a href="#offer-form" class="btn offer" for="newsletter_hotline_btn">Получить скидку</a></div>
	</div>
</div>
<div class="news-line"></div>


<div class="news-center offer clearfix">
	<div class="news-center-head offer">
		<h1><?=$arResult['NAME']?></h1>
		<?
		global $USER;
		if ($USER->IsAuthorized()){
			print $arResult["PROPERTIES"]['vin']['VALUE'];
		}
		?>
	</div>
	<div class="offer-slogan"><?=$arResult["PROPERTIES"]['SLOGAN']['VALUE']?></div>
	<div class="news-center-body f-row">


			<div class="w-25 f-row-item">
					<img src="/img/icons/gas.png">
					<div>Экономный расход</div>
			</div>

			<div class="w-25 f-row-item">
				<img src="/img/icons/airbag.png">
				<div>Подушки безопасности</div>
			</div>

			<div class="w-25 f-row-item">
				<img src="/img/icons/speedometer.png">
				<div>Мощный двигатель</div>
			</div>

			<div class="w-25 f-row-item">
				<img src="/img/icons/puzle.png">
				<div>Большой список опций</div>
			</div>

	</div>
</div>


<div class="news-line"></div>


<div class="offer-default-setting" style="background-image:url('/XML_upload_for_1c/fotobank/<?=str_replace(' ','-',$arResult["PROPERTIES"]['folder_id']['VALUE'])?>/1.png')">

	<div class="news-center">
		<div class="setting-offer">
			<h1>Стандартная комплектация</h1>
			<ul>
				<?foreach($arResult["PROPERTIES"]["DEFAULT_COMPLIT"]["VALUE"] as $key => $arItem):?>
				<li><span><?=$arItem?></span></li>
				<?endforeach;?>
			</ul>

		</div>
		<a href="#offer-form" class="btn offer-setting" for="newsletter_hotline_btn">Пройти тест-драйв</a>
	</div>

</div>



<div class="news-line"></div>
<?
if($arResult["PROPERTIES"]["OPTION_EQU"]["VALUE"]):
?>
<div class="news-center">
	<div class="setting-offer">
		<h1>Дополнительное оборудование</h1>
		<ul>
			<?foreach($arResult["PROPERTIES"]["OPTION_EQU"]["VALUE"] as $key => $arItem):?>
			<li><span><?=$arItem?></span></li>
			<?endforeach;?>
		</ul>

	</div>

</div>
<? endif; ?>

<div class="paralax-offer">
	<?stiker(SITE_ID,4,'right',false,false,$arResult["PROPERTIES"]["folder_id"]['VALUE']);?>
	<img src="<?=$arResult["PROPERTIES"]["SLIDER"]["VALUE"][1]?>">


	<div class="box-price-absolute-left">
		<div class="box-price">
			<p><?=myFormatCurrency($arResult["PROPERTIES"]['OLD_PRICE']['VALUE']);?></p>
			<p>старая цена</p>
		</div>


		<div class="box-price">
			<p><?=myFormatCurrency(preg_replace('/\D/', '', $arResult['PROPERTIES']['VIGODA']['VALUE'])+preg_replace('/\D/', '', $arResult['PROPERTIES']['CREDIT']['VALUE']))?></p>
			<p>выгода до</p>
		</div>

<?
/*
<div class="box-price">
			<p><?=myFormatCurrency($arResult["PROPERTIES"]['PRICE_OT_IMPORTERA']['VALUE']);?></p>
			<p>цена без скидки</p>
		</div>
*/
?>
		
		<div class="clear"></div>
	</div>
	<p style="color: #000;">
		<? /*$Description = explode('.',$arResult["PROPERTIES"]['Description']['VALUE']);
		print $Description[0].'.'.$Description[1].'.'; */?>
	
	Выгода достигается путем комбинаций нескольких программ: сдача авто в trade in, сдача авто в trade in марки hyundai, скидка от дилерского центра, возможна госпрограмма.</p>

</div>


<div class="offer-form" id="offer-form" style="background-image: url('/XML_upload_for_1c/fotobank/<?=str_replace(' ','-',$arResult["PROPERTIES"]['folder_id']['VALUE'])?>/2.png')">

	<h1>Мы сделаем вам самое выгодное предложение на покупку Hyundai в России</h1>

	<div class="news-center no-padding">

		<div class="forma">

		<?$APPLICATION->IncludeComponent("altasib:feedback.form", "offer_form", Array(
			"ACTIVE_ELEMENT" => "Y",	// Активировать элемент после добавления
			"ADD_HREF_LINK" => "Y",	// Добавлять ссылку на страницу, с которой были отправлены данные формы
			"ALX_LINK_POPUP" => "N",	// Открывать во всплывающем окне
			"BBC_MAIL" => "",	// Дополнительные E-mail получателей почтовых уведомлений (через запятую)
			"CATEGORY_SELECT_NAME" => "Выберите категорию",	// Название списка разделов
			"CHECKBOX_TYPE" => "CHECKBOX",	// Выберите тип чекбоксов
			"CHECK_ERROR" => "Y",	// Выдавать сообщения об ошибках
			"COLOR_SCHEME" => "BRIGHT",	// Цветовая схема
			"COLOR_THEME" => "",	// Цвет темы
			"EVENT_TYPE" => "ALX_FEEDBACK_FORM",	// Тип почтового события
			"FB_TEXT_NAME" => "",	// Название поля «Текст сообщения» [FEEDBACK_TEXT]
			"FB_TEXT_SOURCE" => "PREVIEW_TEXT",	// Где сохранять поле «Текст сообщения»
			"FORM_ID" => "1",	// ID Формы
			"IBLOCK_ID" => getIblockFeedbackOffer(SITE_ID),	// Инфоблок
			"IBLOCK_TYPE" => "altasib_feedback",	// Тип инфоблока
			"INPUT_APPEARENCE" => array(	// Внешний вид полей
				0 => "DEFAULT",
			),
			"JQUERY_EN" => "N",	// Подключать jQuery Битрикс
			"LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",	// Текст ссылки для отправки другого сообщения
			"LOCAL_REDIRECT_ENABLE" => "N",	// Выполнять при успешном добавлении сообщения переход на другую страницу
			"MASKED_INPUT_PHONE" => array(	// Поля, обрабатываемые маской ввода телефона
				0 => "PHONE",
			),
			"MESSAGE_OK" => "Ваше сообщение было успешно отправлено",	// Текст, выводимый при успешном добавлении сообщения
			"NAME_ELEMENT" => "FIO",	// Сделать именем элемента
			"PROPERTY_FIELDS" => array(	// Поля для заполнения
				0 => "PHONE",
				1 => "FIO",
				2 => "EMAIL",
			),
			"PROPERTY_FIELDS_REQUIRED" => array(	// Обязательные для заполнения
				0 => "PHONE",
				1 => "FIO",
				2 => "EMAIL",
			),
			"PROPS_AUTOCOMPLETE_EMAIL" => array(	// Поля подстановки E-mail пользователя
				0 => "EMAIL",
			),
			"PROPS_AUTOCOMPLETE_NAME" => array(	// Поля подстановки ФИО пользователя
				0 => "FIO",
			),
			"PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(	// Поля подстановки телефона пользователя
				0 => "PHONE",
			),
			"PROPS_AUTOCOMPLETE_VETO" => "N",	// Запретить изменение полей автоподстановки для зарегистрированных пользователей
			"SECTION_FIELDS_ENABLE" => "N",	// Использовать различный набор полей для разделов
			"SECTION_MAIL_ALL" => "",	// Для всех категорий
			"SEND_IMMEDIATE" => "Y",	// Отправлять почтовое сообщение немедленно, без записи в таблицу b_event
			"SEND_MAIL" => "N",	// Отправлять подтверждение о принятии обращения отправителю, если указан e-mail
			"SHOW_LINK_TO_SEND_MORE" => "Y",	// Показывать ссылку на отправку другого сообщения
			"SHOW_MESSAGE_LINK" => "Y",	// Добавлять ссылку просмотра сообщения в письме администратору
			"USERMAIL_FROM" => "N",	// Подставлять обратный адрес в письме администратору из поля E-mail, заполненного пользователем
			"USE_CAPTCHA" => "N",	// Использовать CAPTCHA
			"WIDTH_FORM" => "100%",	// Ширина формы (% или px)
			"COMPONENT_TEMPLATE" => ".default",
			"COLOR_OTHER" => "#009688",	// Другой цвет, в формате #XXXXXX
		),
			false
		);?>
			</div>

	</div>

</div>


<div class="news-line"></div>

<div class="news-center">
	<div class="setting-offer">
		<h1>Автомобили в наличии с птс</h1>
	</div>
</div>

<?
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"offers_page",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $arParams['IBLOCK_ID'],
		"IBLOCK_TYPE" => "products",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "160",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "CREDIT",
			1 => "NEW_PRICE",
			2 => "OLD_PRICE",
			3 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "offers_home"
	),
	false
);?>

<script>
	$(function(){
		$('.setting-offer').readmore({
			speed: 75,
			maxHeight: 840,
			moreLink: '<a href="#" class="btn offer-setting" style="float:left;width: 209px;height: 50px;padding: 15px 0px;text-align: center;">Показать полностью</a>',
			lessLink: '<a href="#" class="btn offer-setting" style="float:left;width: 209px;height: 50px;padding: 15px 0px;text-align: center;">Скрыть текст</a>'
		});
	});
</script>
