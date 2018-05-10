<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест-драйв");
?>


<section class="testdrive">
	<link rel="stylesheet" type="text/css" href="/test-drive/newalloffers.css">
	<link rel="stylesheet" type="text/css" href="/test-drive/style.css">
	

<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> 
<script type="text/javascript" src="/test-drive/nanoscroller.js"></script>
<script type="text/javascript" src="/test-drive/jquery.maskedinput.min.js"></script>


				
			


<div class="layout-black">
	<div class="progress-ring-wrap">
		<canvas id="progress-ring" class="progress-ring" width="200" height="200"></canvas>
	</div>
</div>
<div class="offers__main test-drive-main ">

	<div class="offers__container test-drive-content">

		<h1 class="offers__content-title skyblue">Тест-драйв автомобилей Hyundai</h1>
		<div class="info-gather__body clearfix">
			<div class="info-gather__col info-gather__col__car fleft">
				<h2 class="info-gather__col__title">Автомобиль</h2>
				<div class="carlistdropdown">
					<div id="dropdown-carlisting" class="dealer__location-dropdown drop-it-down" tabindex="0">
						<ul class="dropdown-list first">
							<li	 data-value="" class="dropdown-item first">Новая SONATA</li>
						</ul>
						<div class="nano">
							<ul class="dropdown-list nano-content">
								<li data-model="Sonata"			model="Sonata"			class="dropdown-item active" >Новая SONATA</li>
								<li data-model="Solaris New"		model="SOLARIS"	class="dropdown-item " >SOLARIS</li>
								<li data-model="Elantra"			model="ELANTRA"			class="dropdown-item " >ELANTRA</li>
								<li data-model="Creta"				model="CRETA"			class="dropdown-item " >CRETA</li>
								<li data-model="Tucson"				model="TUCSON"			class="dropdown-item " >TUCSON</li>
								<li data-model="Santa Fe"	 		model="SANTA FE"		class="dropdown-item " >SANTA FE</li>
								<li data-model="Grand Santa Fe"		model="Grand SANTA FE"	class="dropdown-item " >Grand SANTA FE</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="currentCarImg__wrap"><img class="currentCarImg" src="/test-drive/auto/sonata_td.png" alt="Car picture"/></div>
				
				<!-- <div id="creta-test-drive" style="padding-top: 10px; color: #fff;">Тест-драйв доступен во всех официальных дилерских центрах после 25 февраля 2017 г.</div> -->
			</div>
			<div class="info-gather__col info-gather__col__dealer fleft">
				<h2 class="info-gather__col__title">Выбор дилера</h2>
				<div class="dealercitylistdropdown">
					<div class="city">Воронеж</div>
				</div>
				<div class="dealerlistdropdown">
					<div id="dropdown-dealerlisting" class="dealer__location-dropdown drop-it-down" tabindex="0">
						<ul class="dropdown-list first"><li	 data-value="" class="dropdown-item first">Ринг Авто (левый берег)</li></ul>
						<div class="nano">
							<ul class="dropdown-list nano-content">
								<li class="dropdown-item active" data-value="Ринг Авто (левый берег)">Ринг Авто (левый берег)</li>
								<li class="dropdown-item" data-value="Ринг Авто (напротив сити-парка Град)">Ринг Авто (напротив сити-парка Град)</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="selected-dealer__wrap">
					<div id="selected-dealer"></div>
				</div>
				
			</div>
			<form class="testdriveform">
			<div class="info-gather__col info-gather__col__personal fleft">
				<h2 class="info-gather__col__title">Ваши данные</h2>
				<div class="selectMr__wrap">
					<input type="radio" class="selectMr__option" name="mrOrms" value="Mr." id="Mr." checked="true"><label for="Mr.">Уважаемый</label>
					<input type="radio" class="selectMr__option" name="mrOrms" value="Ms." id="Ms."><label for="Ms.">Уважаемая</label>
				</div>
				<div class="controls__wrap" data-content="Пожалуйста, &#xa; введите Имя.">
					<input type="text" name="name" required="required" id="name" placeholder="Имя">
				</div>
				<div class="controls__wrap" data-content="Пожалуйста, &#xa; введите Фамилию.">
					<input type="text" name="surname" required="required" id="surname" placeholder="Фамилия">
				</div>
				<div class="controls__wrap" data-content="Пожалуйста, &#xa; введите телефон">
					<input type="text" name="phone"  required="required" id="phone" maxlength="16" placeholder="+7 (___)___-__-__">
				</div>
				<div class="controls__wrap" data-content="Введен &#xa; некорректный E-mail.">
					<input type="email" name="email" required="required" id="email" placeholder="E-mail">
				</div>
			</div>

		</div>
		<div class="info-gather__body-footer clearfix">
			<input type="submit" class="send-req fright" value="Отправить заявку" />
			<div class="legal-info fright">
				<div class="dd">Вы должны согласиться на условия</div>
				<input type="checkbox" class="agree_rules"  id="agree_rules"><label for="agree_rules">Я согласен на обработку данных</label>
				<a href="#" class="show-legal skyblue dashedskyblue">Смотреть правила</a>
			</div>
		</div>
		</form>
		

		<noindex>
		<div class="overlayed legal-wrap" id="pr">
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
	$(".show-legal").click(function(){
		$("#pr").fadeIn("fast");
		return false;
	})
	$(".closeIt").click(function(){
		$(this).parents(".overlayed").fadeOut("fast");
	})
function carImg(img) {
			var imgs = {
				'Solaris New':			'/test-drive/auto/solaris_td.png',
				'Elantra':				'/test-drive/auto/Elantra.png',
				'Creta':				'/test-drive/auto/creta.png',
				'Tucson':				'/test-drive/auto/tucson.png',
				'Santa Fe':				'/test-drive/auto/SantaFe.png',
				'Grand Santa Fe':		'/test-drive/auto/gsf.png',
				'Sonata':				'/test-drive/auto/sonata_td.png'			
				
				
			};
			return imgs[img];
};
function tipalert(msg, params) {
    var element = $("<div/>", {
            "class": "tip_alert"
            , html: '<p>'+msg+'</p>'
            , click: function () {
                $(this).fadeOut("fast", function () {
                    $(this).remove();
                })
            }
        })
    element.appendTo("body");
    element.fadeIn("fast");
    setTimeout(function () {element.fadeOut("fast", function () { $(this).remove();})}, 2000)
}


	$(document).ready(function(){
		$("#dropdown-carlisting .nano").nanoScroller({
		alwaysVisible: true,
		sliderMinHeight: 45,
		sliderMaxHeight: 45,
		preventPageScrolling: true
	});
	$("#dropdown-dealercitylisting .nano").nanoScroller({
		alwaysVisible: true,
		sliderMinHeight: 45,
		sliderMaxHeight: 45,
		preventPageScrolling: true
	});
	$("#dropdown-dealerlisting .nano").nanoScroller({
		alwaysVisible: true,
		sliderMinHeight: 45,
		sliderMaxHeight: 45,
		preventPageScrolling: true
	});
	$('.dropdown-item.first').click(function(){
		$(this).parents('.drop-it-down').toggleClass("is-dropped");
	});

	$(".nano-content .dropdown-item").click(function(){
		$(this).parents('.drop-it-down').toggleClass("is-dropped");
		$(this).parents('.drop-it-down').find(".nano-content .dropdown-item").removeClass("active");
		$(this).addClass("active");
		$(this).parents('.drop-it-down').find(".dropdown-item.first").html($(this).html());
		if ($(this).parents('.drop-it-down').attr("id")=="dropdown-carlisting")
		{			
			$(".currentCarImg").attr("src", carImg($(this).attr("data-model")));
		}
		if ($(this).parents('.drop-it-down').attr("id")=="dropdown-dealercitylisting")
		{			
			if ($(this).attr("data-value")==1){$(".dealerlistdropdown").show();}
			if ($(this).attr("data-value")==2){$(".dealerlistdropdown").hide();}
		}
	})
	$(".testdriveform").submit(function(){
		$(".dd").hide();
		if ($("#agree_rules").is(":checked"))
		{
			var form=$(this);
		var formdata=$(this).serialize();
		formdata=formdata+"&car="+$("#dropdown-carlisting li.first").html();
		formdata=formdata+"&city=Воронеж";
		formdata=formdata+"&dealer="+$("#dropdown-dealerlisting li.first").html();
		$.ajax({
                url: '/test-drive/send.php',
                type: 'POST',
                dataType: 'json',
                data: formdata,
                error:function(){},
                success: function (data) {
                	tipalert(data["text"]);
                	form[0].reset();                              
                }
        })	
		}else
		{
			$(".dd").show();
		}
		
		
		return false;

		
	})

	})
	
	
</script>
<!--/RuTarget-->
</section>



<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>