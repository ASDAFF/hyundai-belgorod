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


<link rel="stylesheet" href="/js/vertical-jquery-carousel/css/initcarousel.css" />

<div id="amazingcarousel-container-10">
	<div id="amazingcarousel-10" style="position: relative">
		<div class="amazingcarousel-list-container">
			<div class="amazingcarousel-list-wrapper">
				<ul class="amazingcarousel-list">


					<?foreach($arResult["ITEMS"] as $arItem):?>
					<li class="amazingcarousel-item">
						<div class="amazingcarousel-item-container">
							<div class="amazingcarousel-image">
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" title="<?=$arItem['NAME']?>" class="html5lightbox" data-group="amazingcarousel-10">
									<img src="<?=resize_for_other_server($arItem['PROPERTIES']['SLIDER']['VALUE'][0],360,270)?>" alt="<?=$arItem['NAME']?>" style="max-width: 356px"></a>
								<div class="amazingcarousel-text">
									<div class="amazingcarousel-text-bg"></div>
									<div class="amazingcarousel-title"><?=$arItem['NAME']?><br/><?=$arItem['PROPERTIES']['NEW_PRICE']['VALUE']?></div>
								</div>
								<div class="amazingcarousel-hover-effect">
								</div>
							</div>
						</div>
					</li>
					<?endforeach;?>
					<div style="clear:both;"></div>
				</ul>
			</div>
		</div>

		<div class="amazingcarousel-next"></div>
		<div class="amazingcarousel-nav"></div>
	</div>
</div>


<script src="/js/vertical-jquery-carousel/js/amazingcarousel.js"></script>

<script>

	$(function(){

		var jsFolder = "/img/";

		jQuery("#amazingcarousel-10").amazingcarousel({
			jsfolder:jsFolder,
			width:240,
			height:240,
			interval:3000,
			itembottomshadowimagetop:100,
			random:false,
			direction:"vertical",
			arrowheight:32,
			itembackgroundimagewidth:100,
			skin:"Vertical",
			responsive:true,
			bottomshadowimage:"bottomshadow-110-100-5.png",
			navstyle:"none",
			enabletouchswipe:true,
			backgroundimagetop:-40,
			arrowstyle:"always",
			bottomshadowimagetop:100,
			transitionduration:1000,
			hoveroverlayimage:"hoveroverlay-64-64-4.png",
			itembottomshadowimage:"itembottomshadow-100-100-5.png",
			showitembottomshadow:false,
			transitioneasing:"easeOutExpo",
			showitembackgroundimage:false,
			itembackgroundimage:"",
			playvideoimagepos:"center",
			circular:true,
			arrowimage:"arrows-32-32-4.png",
			showbottomshadow:false,
			screenquery:{
				mobile: {
					screenwidth: 600,
					visibleitems: 1
				}
			},
			navimage:"bullet-24-24-0.png",
			itembackgroundimagetop:0,
			showbackgroundimage:false,
			showplayvideo:true,
			spacing:12,
			scrollitems:1,
			showhoveroverlay:true,
			scrollmode:"page",
			navdirection:"vertical",
			itembottomshadowimagewidth:100,
			backgroundimage:"",
			arrowwidth:32,
			pauseonmouseover:true,
			navmode:"page",
			arrowhideonmouseleave:1000,
			navwidth:24,
			navspacing:4,
			playvideoimage:"playvideo-64-64-0.png",
			visibleitems:3,
			navswitchonmouseover:false,
			bottomshadowimagewidth:110,
			autoplay:false,
			backgroundimagewidth:110,
			loop:0,
			navheight:24
		});

	});
</script>




