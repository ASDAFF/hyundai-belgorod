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

<section class="section section--home-hero">
	<div class="home-hero" style="background: url(/_img/background/hero.jpg) no-repeat scroll center bottom/cover;">
		<div class="home-hero-slider">
			<div class="hero-slider-container">
				<div class="hero-slider-wrapper">

                    <div class="hero-slide">
                        <a href="#" class="hero-slide__inner include-video">
                            <img class="hero-slide__image video-cover" src="https://www.hyundai.ru/assets/img/start/pics/cover.jpg" alt="">
                        </a>
                    </div>

					<?foreach($arResult["ITEMS"] as $arItem):?>
					<div class="hero-slide">
						<a href="<?=$arItem["CODE"]?>" class="hero-slide__inner">
							<img class="hero-slide__image" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Новый Solaris" />
							<?if($arItem['~PREVIEW_TEXT']):?>
							<div class="hero-slide__panel">
								<div class="hero-slide__panel-inner">
									<?=$arItem['~PREVIEW_TEXT']?>
								</div>
							</div>
							<?endif;?>
						</a>
					</div>
					<?endforeach;?>

				</div>
				<div class="hero-slider-nav-holder">
					<div class="hero-slider-nav">
						<div class="hero-slider-bullets"></div>
						<div class="hero-slider-list-container">
							<ul class="hero-slider-list">
                                <li class="hero-slider-list__item" data-role="slide-refer">СТАРТ!</li>
								<?foreach($arResult["ITEMS"] as $arItem):?>
								<li class="hero-slider-list__item" data-role="slide-refer"><?=$arItem['NAME']?></li>
								<?endforeach;?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>





