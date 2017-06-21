<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Официальный дилер Hyundai в Воронеже. Автосалон Хендай");
$APPLICATION->SetTitle("Мебельная компания");
?>


		<div id="content">
			<div class="videoPopup">
				<a class="closeButton" href="#" title="Закрыть">&times;</a>
				<div class="videoContainer">
					<iframe class="videoFrame" width="100%" height="" src="" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>


			<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"top_slider_home", 
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
		"CACHE_TYPE" => "A",
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
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "slides",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
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
			0 => "",
			1 => "",
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
		"COMPONENT_TEMPLATE" => "top_slider_home"
	),
	false
);?>



			<!-- POPUP VIDEO CONTAINER -->
			<script type="text/javascript">
				/*
				 var videoSource = $(".videoP"),
				 videoPopup  = $(".videoPopup");
				 */
				var videoSource = $(".videoFrame"),
					videoPopup  = $(".videoPopup");

				$('.btn-to-replace').replaceWith('<div class="video_butt_popup_on_slider"><a href="javascript:;" class="playVideoLink video_link2"></a></div>');
				$('.btn-to-replace__500k').replaceWith('<div class="video_butt_popup_on_slider video_butt_popup_on_slider_ro"><a title="400 000" href="javascript:;" class="playVideoLink video_link_500k video_link_500k__item-1" data-src="https://www.youtube.com/embed/0Lj4ZL2s4bs?rel=0&amp;showinfo=0;autoplay=1"></a><a title="Апельсинка" href="javascript:;" class="playVideoLink video_link_500k video_link_500k__item-2" data-src="https://www.youtube.com/embed/fBRCy2fFLfc?rel=0&amp;showinfo=0;autoplay=1"></a><a title="Колумб" href="javascript:;" class="playVideoLink video_link_500k video_link_500k__item-3" data-src="https://www.youtube.com/embed/Sv6OByOrCgU?rel=0&amp;showinfo=0;autoplay=1"></a><a title="Пингвин" href="javascript:;" class="playVideoLink video_link_500k video_link_500k__item-4" data-src="https://www.youtube.com/embed/npNhsbyNvlI?rel=0&amp;showinfo=0;autoplay=1"></a><a title="Спасатель" href="javascript:;" class="playVideoLink video_link_500k video_link_500k__item-5" data-src="https://www.youtube.com/embed/3pc396Jnl6k?rel=0&amp;showinfo=0;autoplay=1"></a><a title="Талисман" href="javascript:;" class="playVideoLink video_link_500k video_link_500k__item-6" data-src="https://www.youtube.com/embed/90TWa4RkhLM?rel=0&amp;showinfo=0;autoplay=1"></a><a title="Такси" href="javascript:;" class="playVideoLink video_link_500k video_link_500k__item-7" data-src="https://www.youtube.com/embed/33EEw7fSB0I?rel=0&amp;showinfo=0;autoplay=1"></a></div>');

				$(".video_link2").on("click",function(e){
					e.preventDefault();
				});

				var preventOpenLink = $('.video_butt_popup_on_slider_ro').closest('a.ls-l');

				// change cursor on layer
				$('.video_butt_popup_on_slider_ro').closest('a.ls-l').css('cursor', 'default').on('click', function (e) {
					return false;
				});
				$(".video_link2").on('click',function(){
					this1 = $(this).index();
					videoSource.attr("src", "https://www.youtube.com/embed/jiBmoQhcUBc?rel=0&amp;showinfo=0;autoplay=1");
					videoPopup.fadeIn();
					//alert(123);
				});

				$(".video_link_500k").on('click',function(e){
					e.preventDefault();
					oSrc = $(this).attr('data-src');
					videoSource.attr("src", oSrc);
					videoPopup.fadeIn();
					var data = $('#layerslider').layerSlider('data');
					//turn off the pauseonhover init setting
					data.paused = false;
					$('#layerslider').layerSlider('stop');
				});

				function videoClose(){
					videoSource.attr("src",'');
					videoPopup.fadeOut();
					$('#layerslider').layerSlider('start');
				}
			</script>
			<!-- POPUP VIDEO CONTAINER END-->





			<div class="banners clearfix newBigThumbs">

				<?$APPLICATION->IncludeComponent("bitrix:news.list", "baners_home", Array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
					"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
					"AJAX_MODE" => "N",	// Включить режим AJAX
					"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
					"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
					"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
					"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
					"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
					"CACHE_GROUPS" => "Y",	// Учитывать права доступа
					"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
					"CACHE_TYPE" => "A",	// Тип кеширования
					"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
					"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
					"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
					"DISPLAY_DATE" => "Y",	// Выводить дату элемента
					"DISPLAY_NAME" => "Y",	// Выводить название элемента
					"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
					"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
					"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
					"FIELD_CODE" => array(	// Поля
						0 => "",
						1 => "",
					),
					"FILTER_NAME" => "",	// Фильтр
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
					"IBLOCK_ID" => "10",	// Код информационного блока
					"IBLOCK_TYPE" => "baners",	// Тип информационного блока (используется только для проверки)
					"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
					"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
					"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
					"NEWS_COUNT" => "4",	// Количество новостей на странице
					"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
					"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
					"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
					"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
					"PAGER_TITLE" => "Новости",	// Название категорий
					"PARENT_SECTION" => "",	// ID раздела
					"PARENT_SECTION_CODE" => "",	// Код раздела
					"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
					"PROPERTY_CODE" => array(	// Свойства
						0 => "",
						1 => "",
					),
					"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
					"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
					"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
					"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
					"SET_STATUS_404" => "N",	// Устанавливать статус 404
					"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
					"SHOW_404" => "N",	// Показ специальной страницы
					"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
					"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
					"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
					"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
				),
					false
				);?>

			</div>


			<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"offers_home", 
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
		"CACHE_TYPE" => "A",
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
		"IBLOCK_ID" => "8",
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
			1 => "OLD_PRICE",
			2 => "NEW_PRICE",
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


			<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news_home", 
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
		"CACHE_TYPE" => "A",
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
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "7",
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
			0 => "",
			1 => "",
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
		"COMPONENT_TEMPLATE" => "news_home"
	),
	false
);?>


			<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider_tehnologies", 
	array(
		"ACTIVE_DATE_FORMAT" => "",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
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
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "slides",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
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
			0 => "TITLE_DESC",
			1 => "LINK_YOU",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "slider_tehnologies"
	),
	false
);?>



			<nav class="site-nav">
				<div class="site-nav-center clearfix">
					<div class="site-nav-center-item">
						<a class="site-nav-center-item-link" href="/configurator">
							<div class="site-nav-center-item-link-item">
								<div class="site-nav-center-item-link-item-pic"><i class="i-0013-icon-1"></i></div>
								<div>Создать свой Hyundai</div>
							</div>
							<div class="site-nav-center-item-link-item">
								<div class="site-nav-center-item-link-item-pic"><i class="i-0013-icon-1"></i></div>
								<div>Создать свой Hyundai</div>
							</div>
						</a>
					</div>
					<div class="site-nav-center-item">
						<a class="site-nav-center-item-link zing_form_toggler_spec" for="testdrive" href="#">
							<div class="site-nav-center-item-link-item">
								<div class="site-nav-center-item-link-item-pic"><i class="i-0011-icon-3"></i></div>
								<div>Пройти тест-драйв</div>
							</div>
							<div class="site-nav-center-item-link-item">
								<div class="site-nav-center-item-link-item-pic"><i class="i-0011-icon-3"></i></div>
								<div>Пройти тест-драйв</div>
							</div>
						</a>
					</div>
					<div class="site-nav-center-item">
						<a class="site-nav-center-item-link" href="/configurator">
							<div class="site-nav-center-item-link-item">
								<div class="site-nav-center-item-link-item-pic"><i class="i-0010-icon-4"></i></div>
								<div>Рассчитать кредит</div>
							</div>
							<div class="site-nav-center-item-link-item">
								<div class="site-nav-center-item-link-item-pic"><i class="i-0010-icon-4"></i></div>
								<div>Рассчитать кредит</div>
							</div>
						</a>
					</div>
				</div>
			</nav>

			<div class="content-wrap text-index-block">

				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/include/index_text.php"
					)
				);?>

			</div>


		</div><!--content-->




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>