<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Hyundai IONIQ | Hyundai Россия");
?>

	<link rel="stylesheet" href="https://www.hyundai.ru/assets/css/style.css?v=3.0">

	                    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/cars_common.css" rel="stylesheet" />                    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_spritespin.css" rel="stylesheet" />                    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_ioniq.css" rel="stylesheet" />            
    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/overrides.css?v=4.0">


    <script src="https://www.hyundai.ru/media/js/libs/device.min.js"></script>

    <script>

    //Редирект на мобильную версию
        var isMobile = {
            Opera: function() {
                return navigator.userAgent.match(/Mini/i);
            }
        };

    //получения переменных из адреса
        var from_mobile = false;

        if (window.location.hash != ''){
            var query = document.location.hash.substring(1);
        }else{
            var query = window.location.search.substring(1);
        }
        var vars = query.split("?");
        var params = window.location.search.substring(1);
        for (var i=0;i<vars.length;i++) {
            var pair = vars[i].split("=");
            if(pair[0] == 'from_mobile'){pair[1];}
            if (pair[1] == 1) from_mobile = true;
        }
        if(!from_mobile){
            if (device.mobile() && !device.tablet() || isMobile.Opera()){

				if(window.location.pathname.indexOf('/test-drive') == 0)
	            {
		            console.log("http://m.hyundai.ru" + window.location.pathname + "?" + params);
	            	document.location.href="http://m.hyundai.ru" + window.location.pathname + "?" + params;
	            }
	            else if(window.location.pathname == '/start')
		            document.location.href="http://m.hyundai.ru/start" + "?" + params;
		        else if(window.location.pathname == '/Solaris')
		        	document.location.href="http://m.hyundai.ru/Solaris" + "?" + params;
		        else if(window.location.pathname == '/Sonata')
		        	document.location.href="http://m.hyundai.ru/Sonata" + "?" + params;
				else if(window.location.pathname == '/Creta')
		            document.location.href="http://m.hyundai.ru/Creta" + "?" + params;
				else if(window.location.pathname == '/Elantra')
		            document.location.href="http://m.hyundai.ru/Elantra" + "?" + params;
				else if(window.location.pathname == '/i40')
		            document.location.href="http://m.hyundai.ru/i40" + "?" + params;
				else if(window.location.pathname == '/i40-Wagon')
		            document.location.href="http://m.hyundai.ru/i40-Wagon" + "?" + params;
				else if(window.location.pathname == '/Tucson')
		            document.location.href="http://m.hyundai.ru/Tucson" + "?" + params;
				else if(window.location.pathname == '/SantaFe')
		            document.location.href="http://m.hyundai.ru/SantaFe" + "?" + params;
		        else if(window.location.pathname == '/NewSantaFe')
		            document.location.href="http://m.hyundai.ru/NewSantaFe" + "?" + params;
		        else if(window.location.pathname == '/NewTucson')
		            document.location.href="http://m.hyundai.ru/NewTucson" + "?" + params;
				else if(window.location.pathname == '/GrandSantaFe')
		            document.location.href="http://m.hyundai.ru/GrandSantaFe" + "?" + params;
				else if(window.location.pathname == '/H1')
		            document.location.href="http://m.hyundai.ru/H1" + "?" + params;
		        else if(window.location.pathname == '/test-drive')
		        	document.location.href="http://m.hyundai.ru/test-drive" + "?" + params;
		        else if(window.location.pathname.indexOf('/promo') != -1)
		        	document.location.href = 'http://m.hyundai.ru' + window.location.pathname.replace('/promo', '/offer') + '?' + params;
	            else
		            document.location.href="http://m.hyundai.ru";
            }
        }
    </script>
<style>
.main-nav__link {
    padding: 0 25px;
}

.titArea h3.subTit{
    text-align: center !important;
}
.logoblock img{
	display: initial;
}
.header {
    position: static;
    width: auto;
    height: auto;

    margin: 0 auto;
    z-index: 60;
    margin-left: 0;
}
.imgView1 {
    text-align: center !important;
}
.imgView1 h3.subTit{
    text-align: center !important;
}
 h2.topTit, h2.for-you__title, h2.for-every__text, h2.for-him__title, h2.for-them__title, h2.gallery__title, h2.for-every__title{
        text-align: center;
}
</style>


<!--
Контент страницы начнется тут
-->

<main class="main" data-model="home">

	<div class="contentWrap" id="container">
	<div class="contTop">
		<div class="topVisualArea">
			<div class="topVisual">
				<div class="visual">
					<img class="responsive-image" src="https://www.hyundai.ru/media/images/flat/ioniq/main.jpg"
					alt="White color Ioniq Electric is placed in front of a building with unique design">
				</div>
				<div class="middle">
					<div class="titWrap">
						<h1 class="ftit">IONIQ Electric*</h1>
						<div class="stit">
							Инновации в динамике.
							<br>Заряжен эмоциями.
						</div>
						<div class="disclaimer">
							*Данная модель недоступна на территории Российской Федерации.
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //.topVisualArea -->
	</div>
	<!-- //.contTop -->

	<div class="section">
		<div class="contWrap bgW">
			<div class="contBox full main-title">
				<div class="titArea full">
					<h2 class="topTit">О главном</h2>
					<h3 class="subTit">
						Аэродинамика в&nbsp;дизайне
					</h3>
					<div class="topTxt fwn">
						IONIQ Electric открыто демонстрирует превосходную аэродинамику, задавая новые стандарты в&nbsp;мире электромобилей.
					</div>
				</div>
				<div class="image-feature">
					<div id="image_feature" class="gridWrap n1 imgView1 imgOnly">
						<div class="grid">
							<div class="fullImg">
								<div class="img">
									<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide2.jpg" class="responsive-image" alt="Side front view of white Ioniq Electric parked outside">
								</div>
							</div>
						</div>
						<!-- //.gird -->
					</div>
				</div>
				<div class="section">
					<div id="section" class="contWrap bgG">
						<div class="contBox">
							<div class="image-feature">
								<div class="gridWrap n2 imgView2">
									<div class="gridRow">
										<div class="grid grid1">
											<div class="imgArea">
												<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide3.jpg"
												  alt="Closer view of side front part of white Ioniq Electric">
											</div>
											<div class="txtArea">
												<h3 class="subTit">Гладкий</h3>
												<div class="conArea">Отточенный дизайн исполнен летящими линиями и перетекающими поверхностями корпуса.</div>
											</div>
											<!-- //.txtArea -->
										</div>
										<div class="grid grid2">
											<div class="imgArea">
												<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide4.jpg"
												  alt="Sleek design of white Ioniq Electric">
											</div>
											<div class="txtArea">
												<h3 class="subTit">Обтекаемый</h3>
												<div class="conArea">Коэффициент лобового сопротивления всего 0,24 – отражение обтекаемого дизайна и&nbsp;плавности хода IONIQ&nbsp;Electric,<br>сплавленных воедино.
												</div>
											</div>
											<!-- //.txtArea -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="contWrap bgW">
			<div class="contBox future-block">
				<div class="image-feature">
					<div class="gridWrap n1 imgView1">
						<div class="grid">
							<div class="imgArea">
								<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide5.jpg"
								  class="responsive-image"
								  alt="Ioniq Electric getting charged">
							</div>
							<div class="txtArea">
								<h3 class="subTit">Подключение к&nbsp;будущему</h3>
								<div class="conArea">IONIQ Electric обеспечивает отсутствие вредных выбросов и&nbsp;отменную динамику передвижения.</div>
							</div>
							<!-- //.txtArea -->
						</div>
						<!-- //.gird -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="contWrap bgG">
			<div class="contBox section-3">
				<div class="image-feature">
					<div class="gridWrap n1 imgView1">
						<div class="grid">
							<div class="imgArea">
								<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide6.jpg"
								  class="responsive-image"
								  alt="Side view of white Ioniq Electric with white background">
							</div>
							<div class="txtArea power-block">
								<h3 class="subTit">Мощный и&nbsp;маневренный
									<br> </h3>
								<div class="conArea">Рассекающий воздушные потоки силуэт производит неизгладимое впечатление и&nbsp;показывает своё превосходство в&nbsp;движении благодаря составу из&nbsp;легкосплавного алюминия и&nbsp;высокопрочной стали.</div>
							</div>
							<!-- //.txtArea -->
						</div>
						<!-- //.gird -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="contWrap bgW">
			<div class="contBox full phz">
				<div class="image-feature">
					<div class="gridWrap n2 imgViewFull">
						<div class="gridRow">
							<div class="grid grid1">
								<div class="imgArea">
									<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide7.jpg"
									  alt="8 inches touch screen of Ioniq Electric">
								</div>
								<div class="txtArea">
									<h3 class="subTit">Постоянно на&nbsp;связи</h3>
									<div class="conArea">Эффективность любой поездки повышается благодаря доступу
										к&nbsp;мультимедийной системе с&nbsp;8-дюймовым монитором.
										<br>
										<br>
									</div>
								</div>
							</div>
							<div class="grid grid2">
								<div class="imgArea">
									<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide8.jpg"
									  alt="The digital instrument cluster">
								</div>
								<div class="txtArea">
									<h3 class="subTit">Всегда в&nbsp;курсе</h3>
									<div class="conArea">Комплекс цифровых инструментов отражает все важные процессы и&nbsp;показатели расхода энергии.
										<br>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section">
					<div class="contWrap bgG">
						<div class="contBox slider1-block">
							<div class="image-feature">
								<div class="gridWrap n1 imgView1">
									<div class="grid slider-1">
										<div class="slideWrap slideArea1">
											<ul class="slideArea swiper-wrapper">
												<li class="swiper-slide"
												  data-swiper-slide-index="0">
													<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide9.jpg"
													  alt="wireless charging system" class="responsive-image">
												</li>
												<li class="swiper-slide" data-swiper-slide-index="1">
													<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide15.jpg"
													  alt="Ioniq multimedia connectivity service" class="responsive-image">
												</li>
											</ul>
											<p class="btn_prev">
												<button class="prev">prev</button>
											</p>
											<p class="btn_next">
												<button class="next">next</button>
											</p>
											<div class="swiper-pagination">
											</div>
										</div>
										<!-- //.slideWrap -->
										<div class="txtArea">
											<h3 class="subTit">Мультимедийный информационный<br>
												центр и&nbsp;беспроводная зарядка</h3>
											<div class="conArea">
												Все системы, встроенные в&nbsp;IONIQ&nbsp;Electric, выводят взаимодействие с&nbsp;ним на&nbsp;новый технологический уровень.
											</div>
										</div>
										<!-- //.textArea -->
									</div>
									<!-- //.grid -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="contWrap bgW">
			<div class="contBox gallery-block">
				<div class="titArea">
					<h2 class="topTit">Галерея</h2>
				</div>
				<div class="gallery">
					<div id="gallery" class="galleryTy1">
						<div class="slideWrap bigImg">
							<div class="pageNum">
								<strong>1</strong> / 6
							</div>
							<ul class="slideArea swiper-wrapper">
								<li class="swiper-slide colorw">
									<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide10.jpg"
									  class="responsive-image" alt="Side front view of white Ioniq electric">
								</li>

								<li class="swiper-slide colorw">
									<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide5.jpg"
									  class="responsive-image" alt="Side front view of Ioniq electric getting charged">
								</li>

								<li class="swiper-slide colorw">
									<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide11.jpg"
									  class="responsive-image" alt="Side front view of white Ioniq electric driving in the car park tower">
								</li>

								<li class="swiper-slide colorw">
									<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide12.jpg"
									  class="responsive-image" alt="Side view of white Ioniq electric and woman standing in front">
								</li>

								<li class="swiper-slide colorw">
									<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide13.jpg"
									  class="responsive-image" alt="Side rear view of white Ioniq electric with aerodynamic design">
								</li>

								<li class="swiper-slide colorw">
									<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide14.jpg"
									  class="responsive-image" alt="Panoramic view of front interior from driver's viewpoint">
								</li>
							</ul>
							<p class="btn_prev">
								<button class="prev">prev</button>
							</p>
							<p class="btn_next">
								<button class="next">next</button>
							</p>
						</div>
						<!-- //slideWrap bigImg -->
						<div class="slideWrap thumbnail">
							<ul class="slideArea swiper-wrapper">
								<li class="swiper-slide on">
									<button>
										<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide10.jpg"
										  class="responsive-image" alt="Side front view of white Ioniq electric">
									</button>
								</li>

								<li class="swiper-slide swiper-slide-next">
									<button>
										<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide5.jpg"
										  class="responsive-image" alt="Side front view of Ioniq electric getting charged">
									</button>
								</li>

								<li class="swiper-slide">
									<button>
										<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide11.jpg"
										  class="responsive-image" alt="Side front view of white Ioniq electric driving in the car park tower">
									</button>
								</li>

								<li class="swiper-slide">
									<button>
										<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide12.jpg"
										  class="responsive-image" alt="Side view of white Ioniq electric and woman standing in front">
									</button>
								</li>

								<li class="swiper-slide">
									<button>
										<img src="https://www.hyundai.ru/media/images/flat/ioniq/thumb2.jpg"
										  class="responsive-image" alt="Side rear view of white Ioniq electric with aerodynamic design">
									</button>
								</li>

								<li class="swiper-slide">
									<button>
										<img src="https://www.hyundai.ru/media/images/flat/ioniq/slide14.jpg"
										  class="responsive-image" alt="Panoramic view of front interior from driver's viewpoint">
									</button>
								</li>
							</ul>
							<p class="btn_prev">
								<button class="prev">prev</button>
							</p>
							<p class="btn_next">
								<button class="next">next</button>
							</p>
						</div>
						<!-- //slideWrap thumbnail -->
					</div>
					<!-- //galleryTy1 -->
				</div>
			</div>
		</div>
  </div>
<!--   <div class="naviJumpWrap">
    <div class="naviJump">
      <div class="next">
        <a href="https://www.hyundai.com/worldwide/en/eco/ioniq-electric/highlights" class="version__link">Перейти на английскую версию страницы</a>
      </div>
    </div>
  </div> -->
</div>
</main>


<!--
Контент страницы закончится тут
-->




	<script src="https://www.hyundai.ru/assets/js/vendors.js?v=1"></script>
<!--
		<script src="https://www.hyundai.ru/assets/js/common.js?v=2"></script>
	-->

	<!-- ! specific stuff for current page only ! -->
	                    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>                    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/spritespin.js"></script>                    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/jquery.lazyload.min.js"></script>                    <script type="text/javascript" src="https://www.hyundai.ru/media/js/cars/sc_gt_default.js"></script>                    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/swiper/swiper.jquery.min.js"></script>                    <script type="text/javascript" src="https://www.hyundai.ru/media/js/cars/pip_ioniq.js"></script>            
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>