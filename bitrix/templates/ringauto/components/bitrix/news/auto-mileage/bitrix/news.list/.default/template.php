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

<?
$APPLICATION->IncludeFile("/hpromise/header.php", Array(), Array(
	"MODE"      => "html",
	"NAME"      => "Редактирование включаемой области раздела",
	"TEMPLATE"  => ""
));


?>



<script>
	$(document).ready(function(){
		$('body').addClass('autos');
	});
</script>

	<div class="cont">

		<?$APPLICATION->IncludeComponent(
			"bitrix:catalog.compare.list",
			"compare.list",
			Array(
				"ACTION_VARIABLE" => "action",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"COMPARE_URL" => "/hpromise/avtomobili-s-probegom/compare.php",
				"DETAIL_URL" => "",
				"IBLOCK_ID" => "16",
				"IBLOCK_TYPE" => "products",
				"NAME" => "CATALOG_COMPARE_LIST",
				"POSITION" => "top left",
				"POSITION_FIXED" => "N",
				"PRODUCT_ID_VARIABLE" => "id"
			)
		);?>


		<div class="car_in_compare_fixed"></div>


		<div class="nblock">
			<div class="autos_list_head">
				<div class="clearfix"></div>
				<h1>Купить автомобиль</h1>
				<div class="autos_list_head_descr">
					Hyundai с пробегом, в котором вы будете абсолютно уверены
				</div>

				<div class="mob_car_compare_added">
					<i></i> Добавлено к сравнению
				</div>

				<div class="clearfix"></div>

				<script>
					var dealers_of_cities = {"101":[{"option_value":1106667350,"value":"\u0410\u0432\u0442\u043e\u0433\u0435\u0440\u043c\u0435\u0441"},{"option_value":2790148689,"value":"\u0410\u0432\u0438\u043b\u043e\u043d"},{"option_value":4200868100,"value":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440 \u0414\u043c\u0438\u0442\u0440\u043e\u0432\u043a\u0430"},{"option_value":500958211,"value":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440 \u041a\u0440\u0430\u0441\u043d\u043e\u0431\u043e\u0433\u0430\u0442\u044b\u0440\u0441\u043a\u0430\u044f"},{"option_value":2874362523,"value":"Genser-\u0412\u0430\u0440\u0448\u0430\u0432\u043a\u0430"},{"option_value":3477049247,"value":"\u0420\u041e\u041b\u042c\u0424-\u0421\u0438\u0442\u0438"},{"option_value":1446436389,"value":"\u0420\u043e\u043b\u044c\u0444 \u0425\u0438\u043c\u043a\u0438"},{"option_value":3090726665,"value":"\u0420\u043e\u043b\u044c\u0444 \u042e\u0433"},{"option_value":643574442,"value":"\u0420\u043e\u043b\u044c\u0444-\u0410\u043b\u0442\u0443\u0444\u044c\u0435\u0432\u043e"}],"181":[{"option_value":1246022066,"value":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440 \u041d\u043e\u0432\u043e\u0441\u0438\u0431\u0438\u0440\u0441\u043a"}],"185":[{"option_value":3297583483,"value":"\u0410\u0442\u0438\u043a-\u041c\u043e\u0442\u043e\u0440\u0441"}],"168":[{"option_value":4221977395,"value":"\u041e\u043a\u0430\u043c\u0438 \u0417\u0430\u043f\u0430\u0434"},{"option_value":2359391141,"value":"\u041e\u043a\u0430\u043c\u0438 \u0412\u043e\u0441\u0442\u043e\u043a"}],"125":[{"option_value":3257044821,"value":"\u0414\u0410\u041a\u0410\u0420 \u041f\u0443\u043b\u043a\u043e\u0432\u0441\u043a\u043e\u0435"},{"option_value":3310308172,"value":"\u0412\u043e\u0441\u0442\u043e\u043a-\u0410\u0432\u0442\u043e"},{"option_value":514146775,"value":"\u0412\u043e\u0441\u0442\u043e\u043a-\u0410\u0432\u0442\u043e \u0416\u0443\u043a\u043e\u0432\u0430"},{"option_value":1386058436,"value":"\u0414\u0410\u041a\u0410\u0420 \u041d\u0435\u0432\u0441\u043a\u0438\u0439"},{"option_value":2423040286,"value":"\u0420\u043e\u043b\u044c\u0444 \u041e\u043a\u0442\u044f\u0431\u0440\u044c\u0441\u043a\u0430\u044f"}],"138":[{"option_value":397197520,"value":"\u0414\u0435\u043b\u044c\u0442\u0430 \u041c\u043e\u0442\u043e\u0440\u0441"}],"114":[{"option_value":2467687626,"value":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440 \u0411\u0440\u044f\u043d\u0441\u043a"}],"137":[{"option_value":1763556461,"value":"\u0410\u0432\u0442\u043e\u0441\u0430\u043b\u043e\u043d \u041c\u043e\u0442\u043e\u043c"}],"116":[{"option_value":2054572543,"value":"\u041a\u043e\u043c\u043e\u0441"}],"130":[{"option_value":117554618,"value":"\u042e\u0433-\u0410\u0432\u0442\u043e \u041a\u0440\u0430\u0441\u043d\u043e\u0434\u0430\u0440"},{"option_value":2651384832,"value":"\u042e\u0433-\u0410\u0432\u0442\u043e"}],"132":[{"option_value":2041626887,"value":"\u042e\u0433-\u0410\u0432\u0442\u043e \u041d\u043e\u0432\u043e\u0440\u043e\u0441\u0441\u0438\u0439\u0441\u043a"}],"141":[{"option_value":2575470644,"value":"\u0411\u0438\u0437\u043d\u0435\u0441 \u041b\u0438\u0433\u0430"}],"119":[{"option_value":892854072,"value":"\u0411\u043b\u043e\u043a \u0420\u043e\u0441\u043a\u043e \u041c\u043e\u0442\u043e\u0440\u0441"}],"123":[{"option_value":1548098294,"value":"\u0414\u0438\u043d\u0430\u043c\u0438\u043a\u0430"}],"174":[{"option_value":1912762339,"value":"\u0415\u0432\u0440\u0430\u0437\u0438\u044f \u043f\u043b\u044e\u0441"}],"118":[{"option_value":1110503342,"value":"\u0410\u0432\u0442\u043e\u0446\u0435\u043d\u0442\u0440 Genser"}],"178":[{"option_value":888517903,"value":"\u0425\u0435\u043d\u0434\u044d-\u0446\u0435\u043d\u0442\u0440 \u041a\u0440\u0430\u0441\u043d\u043e\u044f\u0440\u0441\u043a"},{"option_value":1139967385,"value":"\u041c\u0435\u0434\u0432\u0435\u0434\u044c-\u0421\u0435\u0432\u0435\u0440\u0410\u0432\u0442\u043e"}],"120":[{"option_value":2889780866,"value":"\u0410\u0432\u0442\u043e\u0438\u043c\u043f\u043e\u0440\u0442"}],"107":[{"option_value":319261745,"value":"\u041e\u0440\u0438\u043e\u043d \u0421\u0442\u0440\u043e\u0439"}],"162":[{"option_value":926105079,"value":"\u0421\u0438\u043b\u044c\u0432\u0435\u0440-\u041c\u043e\u0442\u043e\u0440\u0441"}],"144":[{"option_value":2005725464,"value":"\u0420\u0438\u043d\u0433 \u0410\u0432\u0442\u043e"}],"164":[{"option_value":314959366,"value":"\u041e\u043a\u0430\u043c\u0438 \u0422\u0430\u0433\u0438\u043b"}],"121":[{"option_value":1267114885,"value":"\u0422\u0430\u043c\u0431\u043e\u0432-\u0410\u0432\u0442\u043e"}],"122":[{"option_value":1015124755,"value":"\u0422\u0435\u0445\u0446\u0435\u043d\u0442\u0440 \u0413\u0440\u0430\u043d\u0434"}],"117":[{"option_value":641568874,"value":"\u0412\u0430\u0436\u043d\u0430\u044f \u043f\u0435\u0440\u0441\u043e\u043d\u0430 - \u0410\u0432\u0442\u043e"}],"108":[{"option_value":1677769895,"value":"\u0412\u043e\u0437\u0440\u043e\u0436\u0434\u0435\u043d\u0438\u0435"}],"177":[{"option_value":1772253505,"value":"\u0412\u043e\u0441\u0442\u043e\u043a - \u041c\u043e\u0442\u043e\u0440\u0441"}],"129":[{"option_value":2010416153,"value":"\u041a-\u041c\u043e\u0442\u043e\u0440\u0441"}],"115":[{"option_value":1640815655,"value":"\u041e\u0440\u0435\u0445\u043e\u0432\u043e-\u0410\u0432\u0442\u043e\u0426\u0435\u043d\u0442\u0440"}]};
				</script>

				<form name="_form" action="/avtomobili-s-probegom/#search-results" method="get" class="smartfilter form_search_block">

					<input type="hidden" name="sort-type" value="price:asc" />

					<div class="lg_50">
						<select class="drop-it-down js-drop-it-down"
								name="arrFilter_94"
								id="">
							<option value="">город</option>
							<option value="2286445522"  data-city="123">
								Архангельск				</option>
							<option value="884468121"  data-city="118">
								Белгород				</option>
							<option value="2613325421"  data-city="185">
								Благовещенск				</option>
							<option value="1023518130"  data-city="114">
								Брянск				</option>
							<option value="4283388740"  data-city="122">
								Владимир				</option>
							<option value="1081496055"  data-city="144">
								Воронеж				</option>
							<option value="2079752030"  data-city="168">
								Екатеринбург				</option>
							<option value="1135663375"  data-city="119">
								Иваново				</option>
							<option value="3541025950"  data-city="116">
								Ижевск				</option>
							<option value="4065481614"  data-city="177">
								Кемерово				</option>
							<option value="140116777"  data-city="130">
								Краснодар				</option>
							<option value="1659719199"  data-city="178">
								Красноярск				</option>
							<option value="3172189513"  data-city="107">
								Курск				</option>
							<option value="1416650876"  data-city="101">
								Москва				</option>
							<option value="1916810101"  data-city="164">
								Нижний Тагил				</option>
							<option value="3864289797"  data-city="132">
								Новороссийск				</option>
							<option value="2628381300"  data-city="181">
								Новосибирск				</option>
							<option value="1801126452"  data-city="174">
								Омск				</option>
							<option value="766302424"  data-city="108">
								Орел				</option>
							<option value="1241945380"  data-city="115">
								Орехово-Зуево				</option>
							<option value="2602800704"  data-city="162">
								Пермь				</option>
							<option value="1755155148"  data-city="129">
								Петрозаводск				</option>
							<option value="109153051"  data-city="138">
								Ростов-на-Дону				</option>
							<option value="289485416"  data-city="120">
								Рязань				</option>
							<option value="1630258919"  data-city="125">
								Санкт-Петербург				</option>
							<option value="807183736"  data-city="141">
								Старый Оскол				</option>
							<option value="1715864318"  data-city="121">
								Тамбов				</option>
							<option value="2752050184"  data-city="117">
								Тверь				</option>
							<option value="2520684170"  data-city="137">
								Ульяновск				</option>
						</select>
					</div>
					<div class="lg_50">
						<select class="drop-it-down js-drop-it-down"
								name="arrFilter_4"
								id="">
							<option value="">Модель*</option>
							<option value="301944851">Accent</option>
							<option value="4293996863">Avante</option>
							<option value="2691610470">Creta</option>
							<option value="4171035942">Elantra</option>
							<option value="522508321">Equus</option>
							<option value="149184850">Genesis</option>
							<option value="2145604036">Genesis Coupe</option>
							<option value="3874095230">Getz</option>
							<option value="986842064">Grand Santa Fe</option>
							<option value="260678987">Grandeur</option>
							<option value="2022610397">H-1/Starex</option>
							<option value="1603998926">H1</option>
							<option value="2525033713">i20</option>
							<option value="104851808">i30</option>
							<option value="1899551222">i40</option>
							<option value="600388241">ix35</option>
							<option value="1422787079">ix55</option>
							<option value="1993265620">Matrix</option>
							<option value="3400177572">NF</option>
							<option value="1511361077">Santa Fe</option>
							<option value="2749059690">Solaris</option>
							<option value="3571213052">Sonata</option>
							<option value="1794212663">Starex</option>
							<option value="1035978697">Terracan</option>
							<option value="2763429491">Tucson</option>
							<option value="1125038964">Verna</option>
						</select>
					</div>
					<div class="clearfix"></div>
					<div class="lg_50">
						<select class="drop-it-down js-drop-it-down"
								name="arrFilter_24"
								id="">
							<option value="">дилер</option>

							<option value="2874362523">Genser-Варшавка</option>
							<option value="2790148689">Авилон</option>
							<option value="1106667350">Автогермес</option>
							<option value="2889780866">Автоимпорт</option>
							<option value="2467687626">Автомир Брянск</option>
							<option value="4200868100">Автомир Дмитровка</option>
							<option value="500958211">Автомир Краснобогатырская</option>
							<option value="1246022066">Автомир Новосибирск</option>
							<option value="1763556461">Автосалон Мотом</option>
							<option value="1110503342">Автоцентр Genser</option>
							<option value="3297583483">Атик-Моторс</option>
							<option value="2575470644">Бизнес Лига</option>
							<option value="892854072">Блок Роско Моторс</option>
							<option value="641568874">Важная персона - Авто</option>
							<option value="1677769895">Возрождение</option>
							<option value="1772253505">Восток - Моторс</option>
							<option value="3310308172">Восток-Авто</option>
							<option value="514146775">Восток-Авто Жукова</option>
							<option value="1386058436">ДАКАР Невский</option>
							<option value="3257044821">ДАКАР Пулковское</option>
							<option value="397197520">Дельта Моторс</option>
							<option value="1548098294">Динамика</option>
							<option value="1912762339">Евразия плюс</option>
							<option value="2010416153">К-Моторс</option>
							<option value="2054572543">Комос</option>
							<option value="1139967385">Медведь-СеверАвто</option>
							<option value="2359391141">Оками Восток</option>
							<option value="4221977395">Оками Запад</option>
							<option value="314959366">Оками Тагил</option>
							<option value="1640815655">Орехово-АвтоЦентр</option>
							<option value="319261745">Орион Строй</option>
							<option value="3477049247">РОЛЬФ-Сити</option>
							<option value="2005725464">Ринг Авто</option>
							<option value="2423040286">Рольф Октябрьская</option>
							<option value="1446436389">Рольф Химки</option>
							<option value="3090726665">Рольф Юг</option>
							<option value="643574442">Рольф-Алтуфьево</option>
							<option value="926105079">Сильвер-Моторс</option>
							<option value="1267114885">Тамбов-Авто</option>
							<option value="1015124755">Техцентр Гранд</option>
							<option value="888517903">Хендэ-центр Красноярск</option>
							<option value="2651384832">Юг-Авто</option>
							<option value="117554618">Юг-Авто Краснодар</option>
							<option value="2041626887">Юг-Авто Новороссийск</option>
						</select>
					</div>
					<div class="lg_50">
						<select class="drop-it-down js-drop-it-down"
								name="arrFilter_6"
								id="">
							<option value="">Тип коробки передач</option>
							<option value="2212294583">AT</option>
							<option value="4088798008">MT</option>
						</select>
					</div>
					<div class="clearfix"></div>
					<div class="lg_50">
						<div class="range-slider-from-to js-range-slider-from-to js-number-format-val mobile-margin">
							<div class="range-slider__title">
								<span class="range-slider__coll">Пробег, км</span>
							</div>
							<div class="clearfix"></div>
							<div class="range-slider__wrap">
								<div class="range-slider__wrap-inner">
									<div class="range-slider__input-holder">
										<div class="range-slider__holder">
											<s class="js-range-slider__holder"></s>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
			<span class="range-slider__input left">
				<span class="range-slider__input-title">от</span>
				<span class="range-slider__input-value">100</span>
				<input class="range-slider__min js-range-slider__min"
					   name="arrFilter_16_MIN"
					   value="100"
					   data-basic-value="100" type="text">
			</span>
			<span class="range-slider__input right">
				<input class="range-slider__max js-range-slider__max"
					   name="arrFilter_16_MAX"
					   value="336000"
					   data-basic-value="336000" type="text">
				<span class="range-slider__input-value">336000</span>
				<span class="range-slider__input-title">до</span>
			</span>
							<div class="range-slider__padding">
							</div>
						</div>
					</div>
					<div class="lg_50">
						<div class="range-slider-from-to js-range-slider-from-to js-number-format-val">
							<div class="range-slider__title">
								<span class="range-slider__coll">Цена, руб</span>
							</div>
							<div class="clearfix"></div>
							<div class="range-slider__wrap">
								<div class="range-slider__wrap-inner">
									<div class="range-slider__input-holder">
										<div class="range-slider__holder">
											<s class="js-range-slider__holder"></s>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
			<span class="range-slider__input left">
				<span class="range-slider__input-title">от</span>
				<span class="range-slider__input-value">164000</span>
				<input class="range-slider__min js-range-slider__min"
					   name="arrFilter_36_MIN"
					   value="164000"
					   data-basic-value="164000" type="text">
							 <span class="range-slider__input-value_rur"> ₽</span>
			</span>
			<span class="range-slider__input right">
				<span class="range-slider__input-value_rur"> ₽</span>
				<input class="range-slider__max js-range-slider__max"
					   name="arrFilter_36_MAX"
					   value="2759602"
					   data-basic-value="2759602" type="text">
				<span class="range-slider__input-value">2759602</span>
				<span class="range-slider__input-title">до</span>
			</span>
							<div class="range-slider__padding">
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="lg_50">
						<div class="wrap_lg">
							<div class="lg_50">
								<select class="drop-it-down js-drop-it-down" name="arrFilter_14_MIN" id="">
									<option value="">год от</option>
									<option value="2003" selected>2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option>				</select>
							</div>
							<div class="lg_50">
								<select class="drop-it-down js-drop-it-down" name="arrFilter_14_MAX" id="">
									<option value="">год до</option>
									<option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected>2017</option>				</select>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="lg_50">
						<label class="round-checkbox">
							<input  name="arrFilter_21"
									value="2322626082"
									class="js-custom-checkbox default-checkbox" type="checkbox">
							Только сертифицированные<br />по <a href="/ajax/hpromise_rules.php" class="js-ajax-content" data-rules='Y'>программе H-Promise</a>
						</label>
					</div>
					<div class="clearfix"></div>
					<div class="lg_100">
						<hr />
					</div>
					<div class="clearfix"></div>
					<div class="hidden_filter">
						<div class="lg_50">
							<h3>Двигатель</h3>
							<div class="range-slider-from-to js-range-slider-from-to js-range-slider-from-to__decimal">
								<div class="clearfix"></div>
								<div class="range-slider__title">
									<span class="range-slider__coll">Объем двигателя, л</span>
								</div>
								<div class="range-slider__wrap">
									<div class="range-slider__wrap-inner">
										<div class="range-slider__input-holder">
											<div class="range-slider__holder">
												<s class="js-range-slider__holder"></s>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
				<span class="range-slider__input left">
					<span class="range-slider__input-title">от</span>
					<span class="range-slider__input-value">1</span>
					<input class="range-slider__min js-range-slider__min" name="arrFilter_8_MIN"
						   value="1"
						   data-basic-value="1" type="text">
				</span>
				<span class="range-slider__input right">
				 <input class="range-slider__max js-range-slider__max" name="arrFilter_8_MAX"
						value="4"
						data-basic-value="4" type="text">
					<span class="range-slider__input-value">4</span>
					<span class="range-slider__input-title">до</span>
				</span>
								<div class="range-slider__padding">
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="lg_50">
							<h3>Привод</h3>
							<div class="clearfix"></div>
							<div class="wrap_lg privod_type">
								<div class="lg_33">
									<label>
										<input name="arrFilter_10_1060745282" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
										Задний						</label>
								</div>
								<div class="lg_33">
									<label>
										<input name="arrFilter_10_2944839123" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
										Передний						</label>
								</div>
								<div class="lg_33">
									<label>
										<input name="arrFilter_10_3632373061" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
										Полный						</label>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
						<div class="lg_100">
							<hr />
						</div>
						<div class="clearfix"></div>
						<div class="lg_100">
							<h3>Комфорт</h3>
						</div>
						<div class="clearfix"></div>
						<div class="lg_50 md_50">
							<div class="mobile_hidden tablet_hidden">
								<div class="drop-it-down-custom custom-multiple js-multiple-drop-it-down">
									<div class="drop-it-down-custom__title js-custom-multiple__title">
  					<span class="drop-it-down-custom__placeholder">
  						<span class="drop-it-down-custom__placeholder-text">
  							Обогрев сидений</span>
  						<span class="custom-multiple__title-vals js-custom-multiple__title-vals"></span>
  						<i class="drop-it-down-custom__icon"></i>
  					</span>
									</div>
									<div class="drop-it-down-custom__list-wrap">
										<ul class="drop-it-down-custom__list">
											<li class="drop-it-down-custom__option js-custom-multiple__list-title">
											</li>
											<li class="drop-it-down-custom__option">
												<label class="custom-multiple__option-label">
													<input class="js-custom-checkbox"
														   type="checkbox"
														   name="arrFilter_64_3172189513"
														   value="Y"
														>
													Передних  								</label>
											</li>
											<li class="drop-it-down-custom__option">
												<label class="custom-multiple__option-label">
													<input class="js-custom-checkbox"
														   type="checkbox"
														   name="arrFilter_64_1521215566"
														   value="Y"
														>
													Передних и задних  								</label>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="tablet_visible mobile_visible">
								<h3 class="grey">Обогрев сидений</h3>
								<div class="clearfix"></div>
								<div class="wrap_lg privod_type">
									<div class="lg_33">
										<label>
											<input name="arrFilter_64_3172189513" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
											Передних  						</label>
									</div>
									<div class="lg_33">
										<label class="long long_md long_lg">
											<input name="arrFilter_64_1521215566" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
											Передних и задних  						</label>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="lg_50 md_50">
							<div class="tablet_hidden mobile_hidden">
								<div class="drop-it-down-custom custom-multiple js-multiple-drop-it-down">
									<div class="drop-it-down-custom__title js-custom-multiple__title">
  					<span class="drop-it-down-custom__placeholder">
  						<span class="drop-it-down-custom__placeholder-text">
  							Парковочный радар</span>
  						<span class="custom-multiple__title-vals js-custom-multiple__title-vals"></span>
  						<i class="drop-it-down-custom__icon"></i>
  					</span>
									</div>
									<div class="drop-it-down-custom__list-wrap">
										<ul class="drop-it-down-custom__list">
											<li class="drop-it-down-custom__option js-custom-multiple__list-title">
											</li>
											<li class="drop-it-down-custom__option">
												<label class="custom-multiple__option-label">
													<input class="js-custom-checkbox"
														   type="checkbox"
														   name="arrFilter_69_2752050184"
														   value="Y"
														>
													Задний   								</label>
											</li>
											<li class="drop-it-down-custom__option">
												<label class="custom-multiple__option-label">
													<input class="js-custom-checkbox"
														   type="checkbox"
														   name="arrFilter_69_884468121"
														   value="Y"
														>
													Передний   								</label>
											</li>
											<li class="drop-it-down-custom__option">
												<label class="custom-multiple__option-label">
													<input class="js-custom-checkbox"
														   type="checkbox"
														   name="arrFilter_69_1135663375"
														   value="Y"
														>
													Передний и задний   								</label>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="tablet_visible mobile_visible">
								<h3 class="grey">Парковочный радар</h3>
								<div class="clearfix"></div>
								<div class="wrap_lg privod_type">
									<div class="lg_33">
										<label>
											<input name="arrFilter_69_2752050184" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
											Задний  						</label>
									</div>
									<div class="lg_33">
										<label>
											<input name="arrFilter_69_884468121" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
											Передний  						</label>
									</div>
									<div class="lg_33">
										<label class="long long_md long_lg">
											<input name="arrFilter_69_1135663375" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
											Передний и задний  						</label>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
						<div class="props_values_block margin-top">
							<div class="lg_33">
								<label>
									<input name="arrFilter_70" value="289485416" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Электропривод зеркал  					</label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_71" value="4283388740" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Электропривод сидений  					</label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_68" value="1023518130" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Навигационная система  					</label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_72" value="372045425" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Датчик дождя  					</label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_62" value="3447271878" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Обогрев лобового стекла  					</label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_63" value="605721843" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Обогрев зеркал  					</label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_65" value="980181419" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Обогрев руля  					</label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_66" value="3725771860" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Иммобилайзер  					</label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_49" value="3678868925" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Кондиционер  					</label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_50" value="894006417" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Пневмоподвеска  					</label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_56" value="2660368260" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Круиз-контроль  					</label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_59" value="1860791280" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Датчик света  					</label>
							</div>
						</div>

						<div class="clearfix"></div>
						<div class="lg_100">
							<hr />
						</div>
						<div class="clearfix"></div>
						<div class="lg_100">
							<h3>Экстерьер</h3>
						</div>
						<div class="clearfix"></div>

						<div class="props_values_block">
							<div class="lg_33">
								<label>
									<input name="arrFilter_60" value="4158667338" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Противотуманные фары  	 </label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_55" value="3961824982" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Защита картера двигателя  	 </label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_79" value="1904655245" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Ксенон  	 </label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_73" value="2401609675" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Люк  	 </label>
							</div>
							<div class="lg_33">
								<label>
									<input name="arrFilter_78" value="2520684170" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Тонировка стекол  	 </label>
							</div>
							<div class="lg_33">
								<label class="long long_md long_lg">
									<input name="arrFilter_61" value="595022058" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Складывающиеся зеркала с электроприводом  	 </label>
							</div>
						</div>

						<div class="clearfix"></div>
						<div class="lg_100">
							<hr />
						</div>
						<div class="clearfix"></div>
						<div class="lg_100">
							<h3>Безопасность</h3>
						</div>
						<div class="clearfix"></div>
						<div class="props_values_block">
							<div class="lg_33">
								<label class="">
									<input name="arrFilter_53" value="4144464487" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Охранная система         </label>
							</div>
							<div class="lg_33">
								<label class=" long_md">
									<input name="arrFilter_47" value="1662243607" class="js-custom-checkbox default-checkbox" type="checkbox" >
									Антиблокировочная система         </label>
							</div>
						</div>

						<div class="clearfix"></div>
						<div class="lg_100 popup-hidden">
							<hr />
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					<div class="lg_50 popup-hidden">
						<span class="more_search_fields">Расширенный поиск</span>
					</div>
					<div class="lg_50 filter_btn">

						<button class="car-filter__button-submit set_filter"
								id="set_filter"
								name="set_filter"
								type="submit">Найти</button>
						<button class="car-filter__button-reset clear_filter"
								type="submit"
								id="del_filter"
								name="del_filter">Сбросить фильтры</button>
					</div>
					<div class="clearfix"></div>
				</form>
				<div class="chips">
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix tablet_visible"></div>
			<div class="autos_search_result" id="search-results">
				<div class="autos_search_result_title">
					<h2>Результаты поиска</h2>
					<div class="sort_block js-results-sort">
						<?
						switch($_REQUEST['order']){
							case "ASC":
								$order = "DESC";
								break;

							case "DESC":
								$order = "ASC";
								break;

							default:
								$order = "DESC";
						}
						?>
						<span class="tablet_hidden">Сортировать по </span>
						<a href="/hpromise/avtomobili-s-probegom/?sort=NEW_PRICE&order=<?=$order?>&clear_cache=Y#search-results" class="<?if($_REQUEST['sort'] == "NEW_PRICE" OR empty($_REQUEST['order'])):?>active<?endif;?> <? if($_REQUEST['order']) print mb_strtolower($_REQUEST['order']); else print "asc";?>">цена</a> <i>|</i>
						<a href="/hpromise/avtomobili-s-probegom/?sort=MILEAGE&order=<?=$order?>&clear_cache=Y#search-results" class="<?if($_REQUEST['sort'] == "MILEAGE"):?>active<?endif;?> <?=mb_strtolower($_REQUEST['order']);?>">пробегу</a> <i>|</i>
						<a href="/hpromise/avtomobili-s-probegom/?sort=YEAR&order=<?=$order?>&clear_cache=Y#search-results" class="<?if($_REQUEST['sort'] == "YEAR"):?>active<?endif;?> <?=mb_strtolower($_REQUEST['order']);?>">году выпуска</a>
					</div>

					<div class="mob_car_filter">
						<span class="js-car-filter-show car-filter-show"></span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div id="chips_wrap"></div>
				<div class="clearfix"></div>
				<div class="autos_search_result_list">


				<?foreach($arResult["ITEMS"] as $key => $arItem):?>
					<div class="search_item car-list">
						<div class="car-list__row">
							<div class="car-list_cell" data-label="">
							<span class="car-list__brand_mob">
								<a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?echo $arItem["NAME"]?></a>
							</span>
							<span class="car-list_cell-inner car-list__year_mob"><?=$arItem['PROPERTIES']['YEAR']['VALUE']?></span>

							<span class="numb__row"><?=$key+1;?></span>

							<span class="car-list_cell-inner">
								<i class="car-list__img-holder">
									<a class="car-list__img-link" href="<?=$arItem['DETAIL_PAGE_URL']?>">
										<img src="<?=$arItem['PROPERTIES']['SLIDER']['VALUE'][0]?>" alt="<?echo $arItem["NAME"]?>">
									</a>
								</i>
							</span>
						</div>
					<div class="car-list_cell valign_top" data-label="">

						<span class="car-list__brand">
							<a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?echo $arItem["NAME"]?></a>
						</span>
						<div class="clearfix"></div>

						<div class="mob_dealer">
							<span class="car-list_cell-inner car-list__km"><?=$arItem['PROPERTIES']['MILEAGE']['VALUE']?> км</span>

							<span class="car-list_cell-inner car-list__city">
								<?=$arItem['PROPERTIES']['STREET']['VALUE']?>, тел: <?=$arItem['PROPERTIES']['PHONE']['VALUE']?>
							</span>


						</div>

          					<span class="car-list_cell-inner car-list__descr">

								<?if($arItem['PROPERTIES']['ENGINE']['VALUE']):?>
									Двигатель: <?=$arItem['PROPERTIES']['ENGINE']['VALUE']?><br>
								<?endif;?>

								<?if($arItem['PROPERTIES']['POWER']['VALUE']):?>
									Мощность: <?=$arItem['PROPERTIES']['POWER']['VALUE']?><br>
								<?endif;?>

								<? foreach($arItem['PROPERTIES']['STANDART']['VALUE'] as $key => $u){?>
									<?=$u?>
									<?
									$key++;
									if($arItem['PROPERTIES']['STANDART']['VALUE'][$key]){
										print ',';
									}
									?>

								<?}?>
								<br>
								<?=$arItem['PROPERTIES']['COUNT_USER']['VALUE']?>
								<?if($arItem['PROPERTIES']['GARANTY']['VALUE'] == 'Y'):?>
									<br>На гарантии
								<?endif;?>

							</span>

								<div class="clearfix"></div>
								<div class="dealers_info">
									<span class="car-list_cell-inner car-list__city">
										<?=$arItem['PROPERTIES']['STREET']['VALUE']?>, тел: <?=$arItem['PROPERTIES']['PHONE']['VALUE']?>
									</span>
								</div>
							</div>
							<div class="car-list_cell" data-label="">
								<span class="car-list_cell-inner car-list__year"><?=$arItem['PROPERTIES']['YEAR']['VALUE']?></span>
							</div>
							<div class="car-list_cell" data-label="" style="width: 100px">
								<span class="car-list_cell-inner car-list__km"><?=$arItem['PROPERTIES']['MILEAGE']['VALUE']?> км</span>
							</div>
							<div class="car-list_cell price-cell" data-label="">
								<span class="car-list_cell-inner car-list__price"><?=myFormatCurrency($arItem['PROPERTIES']['NEW_PRICE']['VALUE']);?> ₽</span>
							</div>
							<div class="car-list_cell compare-cell" data-label="">
								<a id="compareid_<?=$arItem['ID']?>" onclick="compare_tov(<?=$arItem['ID']?>);" href="javascript:void(0)" class="add-to-compare <?if(isset($_SESSION['CATALOG_COMPARE_LIST'][$arParams['IBLOCK_ID']]['ITEMS'][$arItem['ID']])):?>in-compare<? endif; ?>">
									<span></span>
									Сравнить
								</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<hr />

					<? endforeach; ?>

					<div class="clearfix"></div>
					<!-- <a href="#" class="all_results">Все результаты</a> -->
				</div>
			</div>
			<div class="clearfix"></div>

			<div class="footer_info">
				<h3>Преимущества программы H-Promise</h3>
				<div class="lg_25">
					<span class="trade_in_ico"></span>
					<span class="ico_descr">1 год гарантии</span>
					<div class="clearfix"></div>
				</div>
				<div class="footer_seporator"></div>
				<div class="lg_25">
					<span class="docs_ico"></span>
					<span class="ico_descr">1 год  помощи на дороге</span>
					<div class="clearfix"></div>
				</div>
				<div class="footer_seporator"></div>
				<div class="lg_25 mob_right">
					<span class="trade_in_ico"></span>
					<span class="ico_descr text-uppercase">Trade-In</span>
					<div class="clearfix"></div>
				</div>
				<div class="footer_seporator"></div>
				<div class="lg_25">
					<span class="docs_ico"></span>
					<span class="ico_descr">Спецпрограммы страхования и кредитования</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<script>
		var compare_list = JSON.parse('[]');

		$.each(compare_list, function(key, val){
			$('#compareid_' + val).addClass('in-compare');
		});
	</script>

	<div class="clearfix"></div>


	<?
	$APPLICATION->IncludeFile("/hpromise/footer.php", Array(), Array(
		"MODE"      => "html",
		"NAME"      => "Редактирование включаемой области раздела",
		"TEMPLATE"  => ""
	));
	?>

