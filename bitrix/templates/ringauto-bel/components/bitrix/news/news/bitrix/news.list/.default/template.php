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

	<div class="content_wrap">
		<div class="content_area">

			<div class="menu_area 40000">
				<div class="menu_title">Медиа-центр</div>
				<ul class="">
					<li class="on" style=""><a href="/news">Новости компании</a></li>
					<!--                     <li class="off" style=""><a href="/press-release">Пресс-релизы</a></li> -->
					<!--<li class="" style=""><a href="#">Журнал Hyundai Motor CIS</a></li>-->
					<li class="" style=""><a href="/awards">Награды</a></li>
					<!-- <li class="" style=""><a href="/FIFA">FIFA</a></li> -->
				</ul>
			</div>

			<div class="title_area">
				<div class="navigation">
					<ul>
						<li><a href="/">Hyundai</a> &gt;</li>
						<li><span>Медиа-центр</span> &gt;</li>
						<li>Новости компании</li>
					</ul>
				</div>
				<h1 class="title">Новости компании</h1>

			</div>




			<div class="b-fullsize-container">
				<!--
				<form class="b-search__form" method="GET" action="/SearchCategory" enctype="multipart/form-data">


					<input type="text" name="v_category" id="v_category" style="display: none;" value="News">
					<div class="b-search__form-block">
						<label for="wheres">Ключевые слова</label>
						<input class="b-search__form-text" type="text" placeholder="Поиск..." name="wheres" id="wheres" value="">
					</div>
					<div class="b-search__form-block">
						<label for="date_start">Опубликовано</label>
						<input class="b-search__form-date hasDatepicker" type="text" placeholder="с" name="date_start" id="date_start" value="">
						&nbsp;-&nbsp;
						<input class="b-search__form-date hasDatepicker" type="text" placeholder="по" name="date_end" id="date_end" value="">
					</div>

					<input type="submit" class="b-search__form-submit" value="Показать">


				</form>
				-->
				<!--  add datepicker script  -->

				<script type="text/javascript">
					$('#date_start').datepicker({
						dateFormat: 'dd.mm.yy',
						onSelect: function(selected) {
							$("#date_end").datepicker("option","minDate", selected)
						},
						beforeShow: function(input, inst) {
							$('#ui-datepicker-div').addClass('b-news-datepicker');
						}
					});

					$('#date_end').datepicker({
						dateFormat: 'dd.mm.yy',
						onSelect: function(selected) {
							$("#date_start").datepicker("option","maxDate", selected)
						},
						beforeShow: function(input, inst) {
							$('#ui-datepicker-div').addClass('b-news-datepicker');
						}
					});
				</script>

				<br>
				<br>

				<div class="b-news__list">

					<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>

					<div class="b-news__list-item">
						<div class="b-news__list-item__photo">
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
								<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" style="">
							</a>
						</div>
						<h3 class="b-news__list-item__title">
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
						</h3>
						<span class="b-news__list-item__date"> <?echo $arItem["DISPLAY_ACTIVE_FROM"]?> </span>
					</div>

					<?endforeach;?>


				</div>


				<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
					<br /><?=$arResult["NAV_STRING"]?>
				<?endif;?>

			</div>

		</div>


	</div>


</div>



