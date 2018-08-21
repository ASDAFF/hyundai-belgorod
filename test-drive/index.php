<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест-драйв");
?>

	<link type="text/css" href="https://www.hyundai.ru/media/css/newalloffers.css" rel="stylesheet" />
	<link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_spritespin.css" rel="stylesheet" />
	<link type="text/css" href="https://www.hyundai.ru/media/css/forms/test-drive.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://www.hyundai.ru/assets/css/overrides.css?v=4.0">

	<!--
    Контент страницы начнется тут
    -->

	<main class="main" data-model="home">

		<!--
    Start of DoubleClick Floodlight Tag: Please do not remove
    Activity name of this tag: Hyundai Test Drive
    URL of the webpage where the tag is expected to be placed: http://www.hyundai.ru
    This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
    Creation Date: 09/20/2017
    -->
		<script type="text/javascript">
			var axel = Math.random() + "";
			var a = axel * 10000000000000;
			document.write('<iframe src="https://8042512.fls.doubleclick.net/activityi;src=8042512;type=invmedia;cat=x15kfb9x;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
		</script>
		<noscript>
			<iframe src="https://8042512.fls.doubleclick.net/activityi;src=8042512;type=invmedia;cat=x15kfb9x;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
		</noscript>
		<!-- End of DoubleClick Floodlight Tag: Please do not remove -->

		<script type="text/javascript">
			var currentModel = '';
		</script>
		<script type="text/javascript">
			var currentDealerName = '';
		</script>
		<script type="text/javascript">
			var currentDealerId = '';
		</script>
		<script type="text/javascript">
			var currentDealerCity = '';
		</script>

		<div class="layout-black">
			<div class="progress-ring-wrap">
				<canvas id="progress-ring" class="progress-ring" width="200" height="200"></canvas>
			</div>
		</div>


		<div class="offers__main test-drive-main ">

			<div class="offers__container test-drive-content">
				<div class="imgcache" style="display:none;">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw034141.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/genesis2014_big.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw034951.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw032533.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw014876.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw014840.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw014896.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw035821.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw071553.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/i30_wagon_gnb.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw015671.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw032984.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw014892.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw060307.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw072595.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw014852.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/hw060307_premuim.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/tucson.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/elantra-new.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/gsf.png" alt="">
					<img src="https://www.hyundai.ru/media/img/test_drive_imgs/solaris_td.png" alt="">
				</div>
				<h1 class="offers__content-title skyblue">Тест-драйв автомобилей Hyundai</h1>
				<div class="info-gather__body clearfix">
					<div class="info-gather__col info-gather__col__car fleft">
						<h2 class="info-gather__col__title">Автомобиль</h2>
						<div class="carlistdropdown">
							<div id="dropdown-carlisting" class="dealer__location-dropdown drop-it-down" tabindex="0">
								<ul class="dropdown-list first">
									<li	 data-value="" class="dropdown-item first">&nbsp;</li>
								</ul>
								<div class="nano">
									<ul class="dropdown-list nano-content">
										<li data-model="Sonata"			model="Sonata"			class="dropdown-item active" >Новая SONATA</li>
										<li data-model="Solaris New"		model="SOLARIS"	class="dropdown-item " >SOLARIS</li>
										<li data-model="Elantra"			model="ELANTRA"			class="dropdown-item " >ELANTRA</li>
										<li data-model="Creta"				model="CRETA"			class="dropdown-item " >CRETA</li>
										<li data-model="Tucson"				model="TUCSON"			class="dropdown-item " >TUCSON</li>
										<li data-model="Santa Fe"	 		model="SANTA FE"		class="dropdown-item " >SANTA FE</li>
										<li data-model="New Santa Fe"	 		model="NEW SANTA FE"		class="dropdown-item " >Новый SANTA FE</li>
										<li data-model="Grand Santa Fe"		model="Grand SANTA FE"	class="dropdown-item " >Grand SANTA FE</li>
										<li data-model="H-1"		model="H-1"	class="dropdown-item " >H-1</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="currentCarImg__wrap"><img class="currentCarImg" src="https://www.hyundai.ru/media/img/test_drive_imgs/sonata_td.png" alt="Car picture"/></div>
						<a target="_blank" class="car-about skyblue underlined" href="/NewSolaris">Описание модели</a>
						<!-- <div id="creta-test-drive" style="padding-top: 10px; color: #fff;">Тест-драйв доступен во всех официальных дилерских центрах после 25 февраля 2017 г.</div> -->
					</div>
					<div class="info-gather__col info-gather__col__dealer fleft">
						<h2 class="info-gather__col__title">Выбор дилера</h2>
						<div class="dealercitylistdropdown">
							<div id="dropdown-dealercitylisting" class="dealer__location-dropdown drop-it-down" tabindex="0">
								<ul class="dropdown-list first"><li	 data-value="" class="dropdown-item first">&nbsp;</li></ul>
								<div class="nano">
									<ul class="dropdown-list nano-content">
										<li data-value="36" class="dropdown-item active">Белгород</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="dealerlistdropdown">
							<div id="dropdown-dealerlisting" class="dealer__location-dropdown drop-it-down" tabindex="0">
								<ul class="dropdown-list first"><li	 data-value="" class="dropdown-item first">Выберите дилера</li></ul>
								<div class="nano">
									<ul class="dropdown-list nano-content">
										<li></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="selected-dealer__wrap">
							<div id="selected-dealer"></div>
						</div>
						<a class="show-map skyblue dashedskyblue" href="#">Показать на карте</a>
					</div>
					<div class="info-gather__col info-gather__col__personal fleft">
						<h2 class="info-gather__col__title">Ваши данные</h2>
						<div class="selectMr__wrap">
							<input type="radio" class="selectMr__option" name="mrOrms" value="Mr." id="Mr." checked="true"><label for="Mr.">Уважаемый</label>
							<input type="radio" class="selectMr__option" name="mrOrms" value="Ms." id="Ms."><label for="Ms.">Уважаемая</label>
						</div>
						<div class="controls__wrap" data-content="Пожалуйста, &#xa; введите Имя.">
							<input type="text" name="name" id="name" placeholder="Имя">
						</div>
						<div class="controls__wrap" data-content="Пожалуйста, &#xa; введите Фамилию.">
							<input type="text" name="surname" id="surname" placeholder="Фамилия">
						</div>
						<div class="controls__wrap" data-content="Пожалуйста, &#xa; введите телефон">
							<input type="text" name="phone" id="phone" maxlength="16" placeholder="+7 (___)___-__-__">
						</div>
						<div class="controls__wrap" data-content="Введен &#xa; некорректный E-mail.">
							<input type="text" name="email" id="email" placeholder="E-mail">
						</div>
					</div>
				</div>
				<div class="info-gather__body-footer clearfix">
					<div class="send-req fright">Отправить заявку</div>
					<div class="legal-info fright">
						<input type="checkbox" class="agree_rules" id="agree_rules"><label for="agree_rules">Я согласен на обработку данных</label>
						<a href="#" class="show-legal skyblue dashedskyblue">Смотреть правила</a>
					</div>
				</div>

				<div class="map_canvas_wrap">
					<div class="map-overlayed"></div>
					<div id="map_canvas"></div>
					<div class="closeMap">&times;</div>
				</div>

				<noindex>
					<div class="overlayed legal-wrap">
						<div class="test-drive-popup test-drive-popup__legal">
							<h2 class="skyblue">Правила обработки<br>персональных данных</h2>
							<div class="clearfix legal_info_">
								<p class="offers__text fleft">
									Настоящим Я, в соответствии с требованиями Федерального закона от 27.07.09 <strong>№152-ФЗ</strong> «О персональных данных» даю свое согласие лично, своей волей и в своем интересе на обработку <i>(сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение, передачу (включая трансграничную передачу), обезличивание, блокирование и уничтожение)</i> моих персональных данных, в том числе с использованием средств автоматизации.<br><br>
									Такое согласие мною даётся в отношении следующих персональных данных: фамилии, имя, отчество; контактный адрес электронной почты (e-mail); контактный телефон; для определения потребностей в производственной мощности, мониторинга исполнения сервисными центрами гарантийной политики; ведения истории обращения в сервисные центры; проведения дилерами, дистрибьюторами, контрагентами маркетинговых исследований в области продаж, сервиса и послепродажного обслуживания; для рекламных, исследовательских, информационных,
								</p>
								<p class="offers__text fleft">
									а также иных целей, в том числе, путем осуществления со мной прямых контактов по различным средствам связи.<br><br>
									Согласие дается Hyundai Motor Company (Хёндэ Мотор Компани, 231 Янгджи-Донг, Сеочо-Гу, Сеул, 137-938, Республика Корея), ООО «Хендэ Мотор СНГ» (г. Москва, ул.Тестовская, д.10), ООО «Хендэ Мотор МануфактурингPус» (197706, Санкт-Петербург, г. Сестрорецк, Левашовское ш., д. 20, литер А).
									<br><br>
									Я даю свое согласие передавать мои персональные данные для обработки исследовательским агентствам: ООО «Международный институт маркетинговых и социальных исследований «ГФК-Русь» (г. Москва, 9-я Парковая улица, д. 48, корп. 4), ЗАО «Бизнес Аналитика МК» (г. Москва, ул. Новослободская, д. 31, стр. 2); АО «АВТОАССИСТАНС» (г.Москва, ул. Обручева д. 52 стр.3), ООО «Ипсос» (г. Москва, Гамсоновскийпереулок, д. 5), а также любым другим третьим лицам, для целей, указанных в настоящем согласии.
								</p>
							</div>
							<div class="closeIt">&times;</div>
						</div>
					</div>
				</noindex>

				<div class="overlayed response-wrap">
					<div id="test-drive-response">
						<h2></h2>
						<p class="text">В ближайшее время с вами свяжется менеджер<br/>для уточнения информации</p>
						<div class="closeIt">&times;</div>
					</div>
				</div>

			</div>
		</div>

		<script type="text/html" id="dealerTemplate">
			<div class="dealer-info">
				<div class="pop_body">
					<div class="dealer-name"><%= name %></div>
					<div class="pop_text pop_text__test-drive">
						<span class="dealer-address"><%= address %></span>
						<span class="dealer-phone"><%= phone %></span>
						<span class="dealer-site"><%= site %></span>
					</div>
					<div class="test-drive___select-dealer-btn">
						<a href="#" class="test-drive___select-dealer-link js-dealer-map-selector" data-id="<%= id %>" data-name="<%= name %>" data-address="<%= address %>"data-code="<%= code %>">Выбрать дилера</a>
					</div>
				</div>
			</div>
		</script>

		<script type="text/html" id="dealerListTemp">
			<li class="dropdown-item" data-id="<%= id %>"><%= name %></li>
		</script>

		<script type="text/html" id="dealerTemplateInfo">
			<span class="dealer-address"><%= address %></span>
			<span class="dealer-phone"><%= phone %></span>
			<span class="dealer-site"><%= site %></span>
		</script>

		<!--RuTarget-->
		<script type="text/javascript" >
			var _rutarget = window._rutarget || [];
			_rutarget.push({'event': 'confirmOrder'});
		</script>
		<!--/RuTarget-->
	</main>


	<!--
    Контент страницы закончится тут
    -->

	<!-- ! specific stuff for current page only ! -->
	<script type="text/javascript" src="https://maps.google.ru/maps/api/js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/underscore.js"></script>
	<script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/jquery.nanoscroller.min.js"></script>
	<script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/test-drive.js?v=1"></script>
	<script type="text/javascript" src="https://www.hyundai.ru/media/js/forms/test-drive-ring.js"></script>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>