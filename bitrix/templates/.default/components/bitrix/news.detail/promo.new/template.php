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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">

	<link rel="shortcut icon" href="/favicon.ico">
	<title><?=$arResult['NAME']?></title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet">
	<link href="css/jumbotron.css" rel="stylesheet">

	<script src="js/jquery.min.js"></script>
	<?$APPLICATION->ShowHead()?>
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div id="header">
	<div class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container-big">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="/" class="main-header__logo navbar-brand" title="Hyundai">
					<div class="logoblock">
						<img src="images/logo.png">
					</div>
					<div class="textblock">
						Ринг Авто
					</div>
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav right">
					<li class="street"><a href="#contact"><?=$arResult['PROPERTIES']['STREET']['~VALUE'];?></a></li>
					<li></li>
					<li class="p-button-header c1"><a href="/contacts/">Контакты</a></li>
					<li class="p-button-header c2"><a href="#" onclick="PRZV.helpers.showWidget(1)">Заказать звонок</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>

<div class="main-banner">
	<img src="<?=CFile::GetPath($arResult['PROPERTIES']['MAIN_IMG']['VALUE'])?>">
</div>


<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-md-8 col-sm-8 col-xs-12 p-input">
			<input type="text" class="form-control" placeholder="Мобильный телефон">
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12 p-button">
			<button type="button" class="btn btn-primary">Получить выгоду!*</button>
		</div>

	</div>

	<div class="row">
		<div class="checkbox">
			<label>
				<input type="checkbox" value="" checked>
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				Я прочитал <a href="#">правила</a> и даю свое согласие на обработку персональных данных.
			</label>
		</div>
	</div>

	<div class="row">
		<p class="text-right bold">* Выгода складывается при сдаче авто в trade in, при смене hyundai на hyundai и дилерское предложение.</p>
	</div>

	<div class="row">
		<div class="content">
			<div class="col-md-6 col-sm-6 col-xs-6 p-button-icon">
				<a href="button" class="btn btn-primary">
					<img class="hidden-xs" src="images/steering.png">
					<span>Записаться на тест драйв</span>
				</a>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 p-button-icon">
				<a href="button" class="btn btn-primary">
					<img class="hidden-xs" src="images/Left.png">
					<span>Оцени свою машину</span>
				</a>
			</div>
		</div>
	</div>


</div> <!-- /container -->

<? offer_filter_auto($_REQUEST['ELEMENT_CODE']); ?>

<div class="container-big">


	<div class="row">
		<div class="col-md-6 col-sm-12 col-xs-12 img100">
			<img src="<?=CFile::GetPath($arResult['PROPERTIES']['IMG_CAR']['VALUE']);?>">
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="col-md-8 col-sm-8 col-xs-12 text-center blue">
				<? foreach($arResult['PROPERTIES']['H_ONE']['VALUE'] as $h1):?>
				<p><?=$h1?></p>
				<?endforeach?>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 p-button-no-icon">
				<a href="button" class="btn btn-primary">акция!</a>
			</div>
		</div>
	</div>


</div>

<hr>

<div class="container-big">

	<h1 class="text-center">Технические характеристики</h1>


	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="scroll-y">
				<table class="table">
					<thead>
					<? foreach($arResult['PROPERTIES']['TABLE_MOD']['VALUE'] as $key => $val): ?>
					<tr>
						<? for($i = 0;$i < count($val);$i++): ?>
							<? if($val[$i]): ?>
								<th><?=htmlspecialchars_decode($val[$i])?></th>
							<? endif; ?>
						<? endfor; ?>
					</tr>
					<? endforeach; ?>
					</thead>
				</table>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="panel-group" id="accordion">

				<div class="panel panel-default" id="TABLE_ENGINE">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" class="pluse" data-parent="#TABLE_ENGINE" href="#collapseOne">
								<?=$arResult['PROPERTIES']['TABLE_ENGINE']['NAME']?>
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse">
						<div class="panel-body">

							<div class="panel panel-default">
								<!-- Table -->
								<div class="scroll-y">
									<table class="table">
										<tbody>
										<? foreach($arResult['PROPERTIES']['TABLE_ENGINE']['VALUE'] as $key => $val): ?>
											<tr>
												<? for($i = 0;$i < count($val);$i++): ?>
													<? if($val[$i]): ?>
														<td class="<?if($i > 0)print 'grey';?>"><?=htmlspecialchars_decode($val[$i])?></td>
													<? endif; ?>
												<? endfor; ?>
											</tr>
										<? endforeach; ?>
										</tbody>
									</table>
								</div>

							</div>

						</div>
					</div>
				</div>

				<div class="panel panel-default" id="TABLE_DINAMIC">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" class="pluse" data-parent="#TABLE_DINAMIC" href="#collapseTwo">
								<?=$arResult['PROPERTIES']['TABLE_DINAMIC']['NAME']?>
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="panel panel-default">
								<!-- Table -->
								<div class="scroll-y">
									<table class="table">
										<tbody>
										<? foreach($arResult['PROPERTIES']['TABLE_DINAMIC']['VALUE'] as $key => $val): ?>
											<tr>
												<? for($i = 0;$i < count($val);$i++): ?>
													<? if($val[$i]): ?>
														<td class="<?if($i > 0)print 'grey';?>"><?=htmlspecialchars_decode($val[$i])?></td>
													<? endif; ?>
												<? endfor; ?>
											</tr>
										<? endforeach; ?>
										</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="panel panel-default" id="TABLE_GAS">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" class="pluse" data-parent="#TABLE_GAS" href="#collapseTree">
								<?=$arResult['PROPERTIES']['TABLE_GAS']['NAME']?>
							</a>
						</h4>
					</div>
					<div id="collapseTree" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="panel panel-default">
								<!-- Table -->
								<div class="scroll-y">
									<table class="table">
										<tbody>
										<? foreach($arResult['PROPERTIES']['TABLE_GAS']['VALUE'] as $key => $val): ?>
											<tr>
												<? for($i = 0;$i < count($val);$i++): ?>
													<? if($val[$i]): ?>
														<td class="<?if($i > 0)print 'grey';?>"><?=htmlspecialchars_decode($val[$i])?></td>
													<? endif; ?>
												<? endfor; ?>
											</tr>
										<? endforeach; ?>
										</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="panel panel-default" id="TABLE_LINE">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" class="pluse" data-parent="#TABLE_LINE" href="#collapseFour">
								<?=$arResult['PROPERTIES']['TABLE_LINE']['NAME']?>
							</a>
						</h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="panel panel-default">
								<!-- Table -->
								<div class="scroll-y">
									<table class="table">
										<tbody>
										<? foreach($arResult['PROPERTIES']['TABLE_LINE']['VALUE'] as $key => $val): ?>
											<tr>
												<? for($i = 0;$i < count($val);$i++): ?>
													<? if($val[$i]): ?>
														<td class="<?if($i > 0)print 'grey';?>"><?=htmlspecialchars_decode($val[$i])?></td>
													<? endif; ?>
												<? endfor; ?>
											</tr>
										<? endforeach; ?>
										</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>

<div class="background-grey">


	<div class="container">
		<h1 class="text-center" style="margin-bottom: 60px">Hyundai по специальной цене от руководителя отдела продаж</h1>

		<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-12 p-input">
				<input type="text" class="form-control" placeholder="Мобильный телефон">
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 p-button">
				<button type="button" class="btn btn-primary">Отправить</button>
			</div>

		</div>

		<div class="row">
			<div class="checkbox">
				<label>
					<input type="checkbox" value="" checked>
					<span class="cr b"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
					Я прочитал <a href="#">правила</a> и даю свое согласие на обработку персональных данных.
				</label>
			</div>
		</div>

		<div class="row">
			<div class="content">
				<div class="col-md-6 col-sm-6 col-xs-6 p-button-icon">
					<a href="button" class="btn btn-primary">
						<img class="hidden-xs" src="images/steering.png">
						<span>Записаться на тест драйв</span>
					</a>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 p-button-icon">
					<a href="button" class="btn btn-primary">
						<img class="hidden-xs" src="images/Left.png">
						<span>Оцени свою машину</span>
					</a>
				</div>
			</div>
		</div>

	</div>



</div>
<?=$arResult['PREVIEW_TEXT']?>
<div id="map"></div>

<div id="footer">
	<div class="container-big">

		<div class="col-md-12 col-sm-12 col-xs-12 text-right">
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="/AboutUs/">О компании</a></li>
				<li><a href="/contacts/">Контакты</a></li>
				<li><a href="/maintenance/">Обслуживание</a></li>
				<li><a href="/service/spetspredlozheniya/">Сервисные программы</a></li>
				<li><a href="/warranty/"> Гарантия</a></li>
			</ul>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 text-center">
			<p class="small">Вся представленная на сайте информация, касающаяся автомобилей и сервисного обслуживания, носит информационный характер и не является публичной офертой, определяемой положениями ст. 437 (2) ГК РФ. Для получения подробной информации просьба обращаться к ближайшему официальному дилеру ООО "Хендэ Мотор СНГ" Опубликованная на данном сайте информация может быть изменена в любое время без предварительного уведомления.  Максимальная скидка предоставляется при сдаче автомобиля hyundai в trade in.</p>
		</div>
	</div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/masked.js"></script>
<script>

	$(function(){
		$('.panel-title a').click(function(){
			$(this).toggleClass('minus','pluse');
		});
		$('input').mask("+7 (999) 999-99-99");

		$(".scroll-y").mCustomScrollbar({
			axis:"x",
			theme:"dark-thin",
			advanced:{autoExpandHorizontalScroll:true}
		});
	});

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

</body>
</html>



