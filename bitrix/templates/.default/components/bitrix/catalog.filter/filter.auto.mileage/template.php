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
//var_dump($arResult);
?>

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

	<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get" class="smartfilter form_search_block">

		<?foreach($arResult["ITEMS"] as $arItem):
			if(array_key_exists("HIDDEN", $arItem)):
				echo $arItem["INPUT"];
			endif;
		endforeach;?>

		<div class="lg_50">
			<select class="drop-it-down js-drop-it-down" name="arrFilter_pf[MODEL]" id="">
				<option value="">Модель*</option>
				<? foreach($arResult['VALUE']['MODEL'] as $model): ?>
				<option value="<?=$model?>"><?=$model?></option>
				<? endforeach; ?>
			</select>
		</div>


		<div class="lg_50">
			<select class="drop-it-down js-drop-it-down" name="arrFilter_pf[TRANSMISS]" id="">
				<option value="">Тип коробки передач</option>
				<? foreach($arResult['VALUE']['TRANSMISS'] as $model): ?>
					<option value="<?=$model?>"><?=$model?></option>
				<? endforeach; ?>
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
				<span class="range-slider__input-value"><?=min($arResult['VALUE']['MILEAGE']);?></span>
				<input class="range-slider__min js-range-slider__min" name="arrFilter_pf[MILEAGE][LEFT]" value="<?=min($arResult['VALUE']['MILEAGE']);?>" data-basic-value="<?=min($arResult['VALUE']['MILEAGE']);?>" type="text">
			</span>
			<span class="range-slider__input right">
				<input class="range-slider__max js-range-slider__max" name="arrFilter_pf[MILEAGE][RIGHT]" value="<?=max($arResult['VALUE']['MILEAGE']);?>" data-basic-value="<?=max($arResult['VALUE']['MILEAGE']);?>" type="text">
				<span class="range-slider__input-value"><?=max($arResult['VALUE']['MILEAGE']);?></span>
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
				<span class="range-slider__input-value"><?=min($arResult['VALUE']['NEW_PRICE']);?></span>
				<input class="range-slider__min js-range-slider__min" name="arrFilter_pf[NEW_PRICE][LEFT]" value="<?=min($arResult['VALUE']['NEW_PRICE']);?>" data-basic-value="<?=min($arResult['VALUE']['NEW_PRICE']);?>" type="text">
							 <span class="range-slider__input-value_rur"> ₽</span>
			</span>
			<span class="range-slider__input right">
				<span class="range-slider__input-value_rur"> ₽</span>
				<input class="range-slider__max js-range-slider__max" name="arrFilter_pf[NEW_PRICE][RIGHT]" value="<?=max($arResult['VALUE']['NEW_PRICE']);?>" data-basic-value="<?=max($arResult['VALUE']['NEW_PRICE']);?>" type="text">
				<span class="range-slider__input-value"><?=max($arResult['VALUE']['NEW_PRICE']);?></span>
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
					<select class="drop-it-down js-drop-it-down" name="arrFilter_pf[YEAR][LEFT]" id="">
						<option value="">год от</option>
						<option value="<?=min($arResult['VALUE']['YEAR']);?>" selected><?=min($arResult['VALUE']['YEAR']);?></option>
						<? foreach($arResult['VALUE']['YEAR'] as $year): ?>
						<option value="<?=$year?>"><?=$year?></option>
						<? endforeach; ?>

					</select>
				</div>
				<div class="lg_50">
					<select class="drop-it-down js-drop-it-down" name="arrFilter_pf[YEAR][RIGHT]" id="">
						<option value="">год до</option>
						<? foreach($arResult['VALUE']['YEAR'] as $year): ?>
							<option value="<?=$year?>"><?=$year?></option>
						<? endforeach; ?>
						<option value="<?=max($arResult['VALUE']['YEAR']);?>" selected><?=max($arResult['VALUE']['YEAR']);?></option>
					</select>
				</div>
				<div class="clearfix"></div>
			</div>
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
					<input class="range-slider__min js-range-slider__min" name=""
						   value="1"
						   data-basic-value="1" type="text">
				</span>
				<span class="range-slider__input right">
				 <input class="range-slider__max js-range-slider__max" name=""
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
							<input name="" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
							Задний						</label>
					</div>
					<div class="lg_33">
						<label>
							<input name="" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
							Передний						</label>
					</div>
					<div class="lg_33">
						<label>
							<input name="" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
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
											   name=""
											   value="Y"
											>
										Передних  								</label>
								</li>
								<li class="drop-it-down-custom__option">
									<label class="custom-multiple__option-label">
										<input class="js-custom-checkbox"
											   type="checkbox"
											   name=""
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
								<input name="" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
								Передних  						</label>
						</div>
						<div class="lg_33">
							<label class="long long_md long_lg">
								<input name="" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
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
											   name=""
											   value="Y"
											>
										Задний   								</label>
								</li>
								<li class="drop-it-down-custom__option">
									<label class="custom-multiple__option-label">
										<input class="js-custom-checkbox"
											   type="checkbox"
											   name=""
											   value="Y"
											>
										Передний   								</label>
								</li>
								<li class="drop-it-down-custom__option">
									<label class="custom-multiple__option-label">
										<input class="js-custom-checkbox"
											   type="checkbox"
											   name=""
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
								<input name="" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
								Задний  						</label>
						</div>
						<div class="lg_33">
							<label>
								<input name="" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
								Передний  						</label>
						</div>
						<div class="lg_33">
							<label class="long long_md long_lg">
								<input name="" value="Y" class="js-custom-checkbox default-checkbox" type="checkbox" >
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
						<input name="" value="289485416" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Электропривод зеркал  					</label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="4283388740" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Электропривод сидений  					</label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="1023518130" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Навигационная система  					</label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="372045425" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Датчик дождя  					</label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="3447271878" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Обогрев лобового стекла  					</label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="605721843" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Обогрев зеркал  					</label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="980181419" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Обогрев руля  					</label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="3725771860" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Иммобилайзер  					</label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="3678868925" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Кондиционер  					</label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="894006417" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Пневмоподвеска  					</label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="2660368260" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Круиз-контроль  					</label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="1860791280" class="js-custom-checkbox default-checkbox" type="checkbox" >
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
						<input name="" value="4158667338" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Противотуманные фары  	 </label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="3961824982" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Защита картера двигателя  	 </label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="1904655245" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Ксенон  	 </label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="2401609675" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Люк  	 </label>
				</div>
				<div class="lg_33">
					<label>
						<input name="" value="2520684170" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Тонировка стекол  	 </label>
				</div>
				<div class="lg_33">
					<label class="long long_md long_lg">
						<input name="" value="595022058" class="js-custom-checkbox default-checkbox" type="checkbox" >
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
						<input name="" value="4144464487" class="js-custom-checkbox default-checkbox" type="checkbox" >
						Охранная система         </label>
				</div>
				<div class="lg_33">
					<label class=" long_md">
						<input name="" value="1662243607" class="js-custom-checkbox default-checkbox" type="checkbox" >
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

			<button class="car-filter__button-submit set_filter" id="set_filter" name="set_filter" type="submit">Найти</button>
			<input type="hidden" name="set_filter" value="Y" />
			<input type="submit" class="car-filter__button-reset clear_filter" id="del_filter" name="del_filter" value="Сбросить фильтры">
		</div>
		<div class="clearfix"></div>
	</form>
	<div class="chips">
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
</div>
<div class="clearfix tablet_visible"></div>

