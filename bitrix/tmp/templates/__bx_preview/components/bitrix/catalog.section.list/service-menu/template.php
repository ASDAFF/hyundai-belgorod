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
<?if($APPLICATION->GetCurPage() == '/service/'):?>
	<div class="service-top-baner" style="background: url('<? echo $arResult['SECTIONS'][0]['PICTURE']['SRC']; ?>') no-repeat center bottom/cover;">
		<!--
		<div class="service-top-content">
			<span>fsfsgdfhhgdfghdfgh</span>
		</div>
		-->
	</div>
<?endif;?>

<?foreach ($arResult['SECTIONS'] as &$arSection):?>
	<? if($arSection['ID'] == $arParams['NOW_ID']):?>
	<div class="service-top-baner" style="background: url('<? echo $arSection['PICTURE']['SRC']; ?>') no-repeat center bottom/cover;">
		<!--
		<div class="service-top-content">
			<span>fsfsgdfhhgdfghdfgh</span>
		</div>
		-->
	</div>
	<?endif;?>
<?endforeach;?>

	<div class="content-wrap" style="width: 1100px">

	<ul class="service-menu">
		<?foreach ($arResult['SECTIONS'] as &$arSection):?>
			<? if($arSection['UF_HIDDEN'] != 1): ?>
		<li class="<?if($APPLICATION->GetCurPage() == $arSection['SECTION_PAGE_URL']):?>active<?endif?>"><a class="" href="<? echo $arSection['SECTION_PAGE_URL']; ?>" data-service-img="<? echo $arSection['PICTURE']['SRC']; ?>"><? echo $arSection['NAME']; ?></a></li>
			<? endif;?>
		<?endforeach;?>
	</ul>

	</div>

		<script>
			$(function(){
				$('.service-menu li a').mouseenter(function(){
					var img = $(this).attr('data-service-img');
					$('.service-top-baner').css('background','url('+img+') no-repeat center bottom/cover');
				});
			});
		</script>