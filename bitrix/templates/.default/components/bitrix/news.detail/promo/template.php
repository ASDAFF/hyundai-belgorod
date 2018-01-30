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
//var_dump($arResult['NAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!--	<meta name="viewport" content="width=1200">-->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="http://www.hyundai-ringauto.ru/favicon.ico">

	<title><?=$arResult['NAME']?></title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery-ui.css">

	<!-- Custom styles for this template -->
	<link href="css/main.css" rel="stylesheet">


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.maskedinput.js"></script>


	<!-- Google Tag Manager --><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NZBL9QH');</script><!-- End Google Tag Manager -->
	<?$APPLICATION->ShowHead()?>
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div class="popup">
	<div class="popup-form-block" style="background: url('img/popup.jpg');">
		<div class="closed">X</div>
		<div class="col-md-6"></div>
		<div class="col-md-6">
			<div class="form-box popup-form">
				<div class="form-text popup-block">
					<h3>
						Запишись на тест-драйв уже сегодня и получи лучшее предложение на автомобиль.
					</h3>
					<p>

					</p>
					<p class="text-error-header"></p>
				</div>
				<form method="" action="">
					<input type="text" class="form-control" id="popup-tel" placeholder="Ваш телефон">
					<input type="text" class="form-control" id="popup-email" placeholder="ФИО">
					<button type="submit" class="btn btn-default btn-popup-block">Оставить заявку</button>
				</form>
			</div>
		</div>
	</div>
</div>



<div class="container-fluid">
	<div class="row">
		<div class="container">

			<div class="col-md-12 padding-left-null">
				<div class="service-phone">
					<?=$arResult['PROPERTIES']['STREET']['~VALUE'];?>
				</div>
			</div>


		</div>
	</div>
</div>


<div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="logo-brand" href="/"><img src="img/logo.png"></a>
		</div>
		<div class="navbar-collapse collapse">

			<ul class="nav navbar-nav navbar-right">
				<li><a href="/offer/" target="_blank">Спецпредложения</a></li>
				<!--
                <li><a href="#">Покупка</a></li>
                -->
				<li><a href="/all-offers#service-offers/" target="_blank">Сервис</a></li>
				<li><a href="http://www.hyundai.ru/configurator" target="_blank">Конфигуратор</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>

<div class="container-fluid">

	<div class="row">
		<div class="banner-blue" style="background: url(<?=CFile::GetPath($arResult['PROPERTIES']['MAIN_IMG']['VALUE'])?>)">
			<div class="container">
				<div class="text-blue-box">
					<? foreach($arResult['PROPERTIES']['H_ONE']['VALUE'] as $h1):?>
					<h1><?=$h1?></h1>
					<? endforeach;?>
				</div>
				<a href="#" class="test" id="test">Пройти тест драйв</a>
			</div>
		</div>
	</div>

</div>


<hr>
<? offer_filter_auto($_REQUEST['ELEMENT_CODE']); ?>

<div class="container">


	<div class="row">
		<div class="col-md-7">
			<div class="box-two-one-section">
				<img src="<?=CFile::GetPath($arResult['PROPERTIES']['IMG_MARK']['VALUE']);?>">
				<h3 style="color: rgb(160,160,160);"><?=$arResult['PROPERTIES']['SLOGAN']['VALUE']?></h3>
				<img class="car-img" src="<?=CFile::GetPath($arResult['PROPERTIES']['IMG_CAR']['VALUE']);?>">
				<img src="img/color.png">
			</div>
		</div>
		<div class="col-md-5">
			<div class="box-two-two-section">
				<h1>от <?=$arResult['PROPERTIES']['PRICE']['VALUE']?> р</h1>
				<p>В кредит от <?=$arResult['PROPERTIES']['CREDIT']['VALUE']?> р /месяц</p>
				<a href="http://hyundai-ringauto.ru/offer/" target="_blank">ВСЕ ПРЕДЛОЖЕНИЯ ></a>
			</div>
			<div class="row" style="margin-bottom: 15px;">
				<div class="col-md-6">
					<img class="icon-two-img" src="img/1.png">
					<? foreach($arResult['PROPERTIES']['ICON_GAS']['VALUE'] as $icon):?>
					<p class="small-text"><?=$icon?></p>
					<? endforeach; ?>
				</div>
				<div class="col-md-6">
					<img class="icon-two-img" src="img/2.png">
					<? foreach($arResult['PROPERTIES']['ICON_SPEED']['VALUE'] as $icon):?>
						<p class="small-text"><?=$icon?></p>
					<? endforeach; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img class="icon-two-img" src="img/3.png">
					<? foreach($arResult['PROPERTIES']['ICON_PILLOW']['VALUE'] as $icon):?>
						<p class="small-text"><?=$icon?></p>
					<? endforeach; ?>
				</div>
				<div class="col-md-6">
					<img class="icon-two-img" src="img/4.png">
					<? foreach($arResult['PROPERTIES']['ICON_PUZZLE']['VALUE'] as $icon):?>
						<p class="small-text"><?=$icon?></p>
					<? endforeach; ?>
				</div>
			</div>

		</div>
	</div>


</div> <!-- /container -->


<hr>
<div class="img-car" style="background: url(<?=CFile::GetPath($arResult['PROPERTIES']['IMG_CAR_BACK']['VALUE'])?>)">
	<div class="container">

		<div class="row">
			<div class="col-md-7">
				<h1>Стандартная комплектация</h1>
				<ul>
					<? foreach($arResult['PROPERTIES']['DEFAULT_COMPLIT']['VALUE'] as $default):?>
					<li><span><?=$default?></span></li>
					<? endforeach; ?>
				</ul>
			</div>
			<div class="col-md-5"></div>

		</div>


	</div>
</div>

<!-- /container -->

<hr>

<div class="container-fluid">

	<div class="row">
		<div class="banner-blue" style="background: url(<?=CFile::GetPath($arResult['PROPERTIES']['MAIN_IMG']['VALUE'])?>)">
			<div class="container">
				<div class="text-blue-box">
					<? foreach($arResult['PROPERTIES']['H_ONE']['VALUE'] as $h1):?>
						<h1><?=$h1?></h1>
					<? endforeach;?>
				</div>
				<a href="#" class="test" id="test">Пройти тест драйв</a>
			</div>
		</div>
	</div>

</div>

<hr>

<div class="container">

	<div class="row">

		<? foreach($arResult['PROPERTIES']['MAIN_PLUS']['VALUE'] as $key => $img):?>
		<div class="col-md-4 text-center">
			<p><?=$arResult['PROPERTIES']['MAIN_PLUS']['DESCRIPTION'][$key]?></p>
			<img class="option-img" src="<?=CFile::GetPath($img);?>">
		</div>
		<? endforeach; ?>

	</div>


</div> <!-- /container -->

<hr>
<div class="container-fluid car-back" style="background: url(<?=CFile::GetPath($arResult['PROPERTIES']['IMG_CAR_FORNT']['VALUE'])?>);background-repeat: no-repeat;">

	<div class="row">

		<div class="container">

			<div class="table-owerflow">
				<table style="width: 100%;font-size: 22px">
					<? foreach($arResult['PROPERTIES']['TABLE_MOD']['VALUE'] as $key => $val): ?>
					<tr>
						<? for($i = 0;$i < count($val);$i++): ?>
							<? if($val[$i]): ?>
							<td><?=htmlspecialchars_decode($val[$i])?></td>
							<? endif; ?>
						<? endfor; ?>
					</tr>
					<? endforeach; ?>
				</table>
			</div>

			<div id="accordion">
				<h3><span class="pluse" style="background: url('img/pluse.png');position: absolute;width: 32px;height: 32px;top: 8px;left: 0;"></span> <?=$arResult['PROPERTIES']['TABLE_ENGINE']['NAME']?></h3>
				<div>
					<table style="width: 100%;font-size: 22px;color: #A0A0A0">
						<? foreach($arResult['PROPERTIES']['TABLE_ENGINE']['VALUE'] as $key => $val): ?>
							<tr>
								<? for($i = 0;$i < count($val);$i++): ?>
									<? if($val[$i]): ?>
									<td><?=htmlspecialchars_decode($val[$i])?></td>
									<? endif; ?>
								<? endfor; ?>
							</tr>
						<? endforeach; ?>
					</table>
				</div>
				<h3><span class="pluse" style="background: url('img/pluse.png');position: absolute;width: 32px;height: 32px;top: 8px;left: 0;"></span> <?=$arResult['PROPERTIES']['TABLE_DINAMIC']['NAME']?></h3>
				<div>
					<table style="width: 100%;font-size: 22px;color: #A0A0A0">
						<? foreach($arResult['PROPERTIES']['TABLE_DINAMIC']['VALUE'] as $key => $val): ?>
							<tr>
								<? for($i = 0;$i < count($val);$i++): ?>
									<? if($val[$i]): ?>
									<td><?=htmlspecialchars_decode($val[$i])?></td>
									<? endif; ?>
								<? endfor; ?>
							</tr>
						<? endforeach; ?>
					</table>
				</div>
				<h3><span class="pluse" style="background: url('img/pluse.png');position: absolute;width: 32px;height: 32px;top: 8px;left: 0;"></span> <?=$arResult['PROPERTIES']['TABLE_GAS']['NAME']?></h3>
				<div>
					<table style="width: 100%;font-size: 22px;color: #A0A0A0">
						<? foreach($arResult['PROPERTIES']['TABLE_GAS']['VALUE'] as $key => $val): ?>
							<tr>
								<? for($i = 0;$i < count($val);$i++): ?>
									<? if($val[$i]): ?>
									<td><?=htmlspecialchars_decode($val[$i])?></td>
									<? endif; ?>
								<? endfor; ?>
							</tr>
						<? endforeach; ?>
					</table>
				</div>
				<h3><span class="pluse" style="background: url('img/pluse.png');position: absolute;width: 32px;height: 32px;top: 8px;left: 0;"></span> <?=$arResult['PROPERTIES']['TABLE_LINE']['NAME']?></h3>
				<div>
					<table style="width: 100%;font-size: 22px;color: #A0A0A0">
					<? foreach($arResult['PROPERTIES']['TABLE_LINE']['VALUE'] as $key => $val):?>
						<tr>
							<? for($i = 0;$i < count($val);$i++): ?>
								<? if($val[$i]): ?>
								<td><?=htmlspecialchars_decode($val[$i])?></td>
								<? endif; ?>
							<? endfor; ?>
						</tr>
					<? endforeach; ?>
					</table>
				</div>
			</div>
		</div>

	</div>

</div>


<hr>


<div class="navbar navbar-default navbar-static-top" role="navigation" style="background-color: #A0A0A0;border-color: #A0A0A0">
	<div class="container">

		<div class="navbar-collapse collapse">

			<ul class="nav navbar-nav">
				<li><a href="/">Главная</a></li>
				<li><a href="/AboutUs/">О компании</a></li>
				<li><a href="/contacts/">Контакты</a></li>
				<li><a href="/maintenance/">Обслуживание</a></li>
				<li><a href="/service/spetspredlozheniya/">Сервисные программы</a></li>
				<li><a href="/warranty/"> Гарантия</a></li>
			</ul>

		</div><!--/.nav-collapse -->
	</div>
</div>

<div class="container-fluid footer" style="background-color: #0072BB;">


	<div class="container-fluid footer2" style="background-color: #0072BB;">

		<div class="row">

			<div class="container">

				<h3><?=$arResult['PROPERTIES']['STREET']['~VALUE'];?></h3>


			</div>

		</div>
	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<script>
		jQuery( function($) {
			$( "#accordion" ).accordion({
				heightStyle: "content"
			});
			$("#header-tel").mask("8 (999) 999-9999");
			$("#popup-tel").mask("8 (999) 999-9999");

			$('.test').click(function(){
				$('.popup').css('display','block');
				return false;
			});
			$('.closed').click(function(){
				$('.popup').css('display','none');
				return false;
			});

			$('.btn-header-block').click(function(){
				$.ajax({
					url: 'ajax.php?tel='+$('#header-tel').val()+'&email='+$('#header-email').val(),
					success: function(data) {
						if(data){
							$('.text-error-header').text('');
							$('.form-text.header h3').text('Сообщение отправлено!');
						}else{
							$('.text-error-header').text('Поля не заполнены');
						}

					}
				});
				return false;
			});

			function closed(){
				$('.popup').css('display','none');
			}


			$('.btn-popup-block').click(function(){
				$.ajax({
					url: 'ajax.php?tel='+$('#popup-tel').val()+'&email='+$('#popup-email').val(),
					success: function(data) {
						if(data){
							$('.text-error-header').text('');
							$('.form-text.popup-block h3').text('Сообщение отправлено!');
							setInterval(closed, 3000)
						}else{
							$('.text-error-header').text('Поля не заполнены или email неправильный');
						}

					}
				});
				return false;
			});

		} );
	</script>


	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file",
			"AREA_FILE_SUFFIX" => "inc",
			"EDIT_TEMPLATE" => "",
			"PATH" => "/bitrix/include/seo-script-".SITE_ID.".php"
		)
	);?>



	<!-- BEGIN CLICKTEX CODE {literal} -->
	<script type="text/javascript" charset="utf-8" async="async" src="//www.clicktex.ru/code/5883"></script>
	<!-- {/literal} END CLICKTEX CODE -->    <!-- scroll to top button -->
	<style>
		/* scroll to top button */
		.scroll_me a{
			width:50px;
			height: 50px;
			background: url("/media/img/to_top.png");
			position: fixed;
			bottom: 50px;
			right: 21px;
			z-index: 999;
			cursor: pointer;
			opacity: 0.7;
			display: none;
		}
		.scroll_me a:hover{
			opacity:1;
		}

		.btn_area1>a>img{
			max-width: 220px;
		}
		.btn_area1>a:hover{
			opacity:.8;
		}
	</style>
</body>
</html>


