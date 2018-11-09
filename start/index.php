<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Hyundai Solaris купить в Воронеже. Цена на новый Хендай Солярис");
$APPLICATION->SetTitle("NewSolaris");
?>
    <link type="text/css" href="http://www.hyundai.ru/media/start/css/roundslider.css" rel="stylesheet" />
    <link type="text/css" href="http://www.hyundai.ru/media/start/css/base.css" rel="stylesheet" />



<!--
Контент страницы начнется тут
-->

<main class="main" data-model="home">


<div class="main overflow">
	<div class="layout__start-redesign">
		<div class="main__container">
			<div class="main__title-label title-label">
				финансовая программа
			</div>
			<h1 class="main__title title">
				Старт
			</h1>
			<p class="main__subtitle subtitle">
				Hyundai Старт дает возможность снизить ежемесячные платежи по кредиту
			</p>
			<div class="main__buttons">
				<a href="#model" class="main__button-model button_fsz">
					Выбрать модель
					<span class="main__button-model-arrow"></span>
				</a>
				<div class="main__button-start button_fsz">
					Что такое Старт?
				</div>
			</div>
		</div>
		<div class="benefit">
			<div class="benefit__item">
				<div class="benefit__img benefit__img-1"></div>
				<div class="benefit__text">
					Платите минимум в месяц
				</div>
			</div>
			<div class="benefit__item">
				<div class="benefit__img benefit__img-2"></div>
				<div class="benefit__text">
					Меняйте автомобиль каждые 2-3 года

				</div>
			</div>
			<div class="benefit__item">
				<div class="benefit__img benefit__img-3"></div>
				<div class="benefit__text">
					Выберите автомобиль классом выше
				</div>
			</div>

		</div>
	</div>
</div>
<div id="model" class="model overflow">
	<div class="layout__start-redesign">
		<div class="model__cantainer">
			<div class="model__top-line">
				<div class="model__title title">
					Ваша модель
				</div>
				<div class="model__menu">
					<div class="model__menu-label">Все модели</div>
				</div>
			</div>
		</div>
		<div class="model__selects">
			<select class="model__select" name="car">
			</select>
			<select class="model__select" name="type">
			</select>
		</div>

		<div class="model__slider">
			<div class="slider__label">
				Solaris
			</div>
			<div class="hc-badge" style="transform: matrix(1, 0, 0, 1, 0, 0);">
				<div class="hc-badge__holder">
					<span class="hc-badge__name">«Старт»</span>
					<span class="hc-badge__pay"><strong class="hc-badge__pay-value">15 436</strong><sup>1</sup></span>
					<span class="hc-badge__pay-period">₽/мес.</span>
				</div>
			</div>
			<div class="slider__box">
									<img
						src="img/23.png"
						class="slider__item slider__item_active"
						alt=""
						data-name="SOLARIS"
						data-id="23"
					>
									<img
						src="img/24.png"
						class="slider__item "
						alt=""
						data-name="SONATA"
						data-id="24"
					>
									<img
						src="img/25.png"
						class="slider__item "
						alt=""
						data-name="Новый SANTA FE"
						data-id="25"
					>
									<img
						src="img/26.png"
						class="slider__item "
						alt=""
						data-name="Новый TUCSON"
						data-id="26"
					>
									<img
						src="img/7.png"
						class="slider__item "
						alt=""
						data-name="ELANTRA"
						data-id="7"
					>
									<img
						src="img/22.png"
						class="slider__item "
						alt=""
						data-name="CRETA"
						data-id="22"
					>
							</div>
			<div class="slider__go-calc">
                <div class="calc__total-price">
                    <div class="calc__total-price-text">
                        стоимость
                    </div>
                    <div class="calc__total-price-digits">
                        630 000
                    </div>
                </div>
                <div class="slider__controls">
					<div class="slider__control-prev">Solaris</div>
					<div class="slider__control-next">Grand Santa Fe</div>
				</div>
				<a class="slider__go-calc-button" href="#calc">
					Рассчитать кредит
					<span class="slider__go-calc-arrow"></span>
				</a>
			</div>
		</div>

        <div id="calc"></div>
<!--
        <div class="solaris-spec" >
            <div class="solaris-spec__main">
                <div class="solaris-spec__main-spec">
                    Спецпредложение
                </div>
                <div class="solaris-spec__main-caption">
                    Новый Hyundai Solaris за 2500 ₽/мес.
                </div>
                <div class="solaris-spec__main-arrow"></div>
            </div>
            <div class="solaris-spec__second">
                <div class="solaris-spec__image">
                    <div class="solaris-spec__casco">
                        <div class="solaris-spec__casco-img"></div>
                        <div class="solaris-spec__casco-text">
                            Каско<br> в подарок
                        </div>
                    </div>
                </div>
                <div class="solaris-spec__info">
                    <div class="solaris-spec__info-header">
                        Новый Hyundai Solaris<br>за 2500 ₽/мес
                    </div>
                    <div class="solaris-spec__items">
                        <div class="solaris-spec__item">
                            <div class="solaris-spec__item-header">
                                Первый взнос
                            </div>
                            <div class="solaris-spec__item-text">
                                50%
                            </div>
                        </div>
                        <div class="solaris-spec__item">
                            <div class="solaris-spec__item-header">
                                Остаточная стоимость
                            </div>
                            <div class="solaris-spec__item-text">
                                50%
                            </div>
                        </div>
                        <div class="solaris-spec__item">
                            <div class="solaris-spec__item-header">
                                Ежемесячный платеж
                            </div>
                            <div class="solaris-spec__item-text">
                                2500 ₽
                            </div>
                        </div>
                        <div class="solaris-spec__item">
                            <div class="solaris-spec__item-header">
                                Срок
                            </div>
                            <div class="solaris-spec__item-text">
                                24 мес
                            </div>
                        </div>
                    </div>
                    <div class="solaris-spec__buttons">
                        <div class="solaris-spec__email">
							Отправить на email
						</div>
                        <a class="solaris-spec__more" href="/promo/specprice">
							Подробнее
						</a>
                    </div>
                </div>
            </div>
        </div>
-->

		<div class="calc">

			<div class="calc-box">

				<div class="calc__box">
					<div class="calc_bg"></div>
					<div class="calc__widget">

					</div>
					<div class="calc__info">

						<div class="calc__label">
							Старт
						</div>
						<div class="calc__price startprice">
							31 580
						</div>
						<div class="calc__line">
							<div class="calc__line-scale start-scale" style="width:60%;"></div>
						</div>

						<div class="calc__label">
							Стандартный кредит
						</div>
						<div class="calc__price tprice">
							31 580
						</div>
						<div class="calc__line">
							<div class="calc__line-scale  full-scale"></div>
						</div>
						<div class="calc__button calculator-btn">
							Отправить на email
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-menu">
			<div class="slider-menu__close"></div>
			<div class="slider-menu__items">
														<div class="slider-menu__item" data-id="23">
						<div class="slider-menu__item-name">SOLARIS</div>
						<div class="slider-menu__item-price">6 000</div>
						<img class="slider-menu__item-img" src="img/23.png">
					</div>
														<div class="slider-menu__item" data-id="24">
						<div class="slider-menu__item-name">SONATA</div>
						<div class="slider-menu__item-price">9 000</div>
						<img class="slider-menu__item-img" src="img/24.png">
					</div>
														<div class="slider-menu__item" data-id="25">
						<div class="slider-menu__item-name">Новый SANTA FE</div>
						<div class="slider-menu__item-price">12 000</div>
						<img class="slider-menu__item-img" src="img/25.png">
					</div>
														<div class="slider-menu__item" data-id="26">
						<div class="slider-menu__item-name">Новый TUCSON</div>
						<div class="slider-menu__item-price">10 000</div>
						<img class="slider-menu__item-img" src="img/26.png">
					</div>
														<div class="slider-menu__item" data-id="7">
						<div class="slider-menu__item-name">ELANTRA</div>
						<div class="slider-menu__item-price">8 000</div>
						<img class="slider-menu__item-img" src="img/7.png">
					</div>
														<div class="slider-menu__item" data-id="22">
						<div class="slider-menu__item-name">CRETA</div>
						<div class="slider-menu__item-price">7 000</div>
						<img class="slider-menu__item-img" src="img/22.png">
					</div>
												</div>
		</div>
	</div>
</div>

<div class="options">
	<div class="layout__start-redesign">
		<div class="options__container">
			<div class="options__spot"></div>
			<div class="options__left">
				<h3 class="option__title title">
					По окончании программы
				</h3>
				<p class="option__subtitle subtitle">
					Чтобы продажа была максимально выгодна для Вас, в договоре заранее зафиксирована минимальная выкупная стоимость.
				</p>
				<div class="options__button button-link">
					<!--<a href="/ContactUs">Задать вопрос</a>-->
					<div class="button-link__line"></div>
				</div>
			</div>
			<div class="options__right">
				<div class="options__item">
					<div class="options__item-img options__item-img-1"></div>
					<div class="options__item-text">
						Погасить остаток и оставить автомобиль себе

					</div>
				</div>
				<div class="options__item">
					<div class="options__item-img options__item-img-2"></div>
					<div class="options__item-text">
						Обменять автомобиль на новый, отдав прежний дилеру в trade-in
					</div>
				</div>
				<div class="options__item">
					<div class="options__item-img options__item-img-3"></div>
					<div class="options__item-text">
						Вернуть автомобиль банку
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="faq">
	<div class="layout__start-redesign">
		<div class="faq__container">
			<h3 class="faq__title title">Вопрос-ответ</h3>
			<div class="faq__items">
				<div class="faq__item faq__item_01" data-num="01">
					<div class="faq__item-text">
						Что такое Старт?

					</div>
					<div class="faq__item-num">
						01
					</div>
					<div class="faq__item-plus"></div>
				</div>
				<div class="faq__item faq__item_02" data-num="02">
					<div class="faq__item-text">
						Чем СТАРТ отличается от обычного кредита?
					</div>
					<div class="faq__item-num">
						02
					</div>
					<div class="faq__item-plus"></div>
				</div>
				<div class="faq__tip faq__tip_01 faq__tip_hide">
					<div class="faq__tip-text subtitle">
						СТАРТ – это новая финансовая программа Hyundai, которая позволяет существенно снизить ежемесячные платежи по кредиту, а также регулярно обновлять автомобиль.
					</div>
				</div>
				<div class="faq__tip faq__tip_02 faq__tip_hide">
					<div class="faq__tip-text subtitle">
						Ежемесячные платежи по программе СТАРТ в среднем в 2 раза ниже, чем по обычному кредиту, что делает покупку и обслуживание автомобиля более комфортными.
					</div>
				</div>


				<div class="faq__item faq__item_03" data-num="03">
					<div class="faq__item-text">
						Кому необходим СТАРТ?<br/> 

					</div>
					<div class="faq__item-num">
						03
					</div>
					<div class="faq__item-plus"></div>
				</div>
				<div class="faq__item faq__item_04" data-num="04">
					<div class="faq__item-text">
						За счет чего получаются маленькие платежи по кредиту?
					</div>
					<div class="faq__item-num">
						04
					</div>
					<div class="faq__item-plus"></div>
				</div>
				<div class="faq__tip faq__tip_03 faq__tip_hide">
					<div class="faq__tip-text subtitle">
						<ul>
							<li>Клиентам, которые рационально планируют бюджет и предпочитают минимальные выплаты по кредиту.</li>
							<li>Клиентам, которые выбирают между доступной и дорогой версией автомобиля, но не хотят увеличивать свою нагрузку по кредиту.</li>
							<li>Клиентам, которые привыкли идти в ногу со временем и каждые три года менять автомобиль на новый и более современный.</li>
						</ul>
					</div>
				</div>
				<div class="faq__tip faq__tip_04 faq__tip_hide">
					<div class="faq__tip-text subtitle">
						Часть кредита, а именно 45% (остаточная стоимость), фиксируется Банком и не включатся в ежемесячные платежи. Таким образом Клиент имеет возможность эксплуатировать автомобиль 3 года, не оплачивая сразу всю его стоимость. Через 3 года у Клиента есть выбор, что делать с автомобилем и остатком долга.
					</div>
				</div>



				<div class="faq__item faq__item_05 hide" data-num="05">
					<div class="faq__item-text">
						Существуют ли риски для Клиента?

					</div>
					<div class="faq__item-num">
						05
					</div>
					<div class="faq__item-plus"></div>
				</div>
				<div class="faq__item faq__item_06 hide" data-num="06">
					<div class="faq__item-text">
						Какие преимущества получает Клиент?
					</div>
					<div class="faq__item-num">
						06
					</div>
					<div class="faq__item-plus"></div>
				</div>
				<div class="faq__tip faq__tip_05 faq__tip_hide">
					<div class="faq__tip-text subtitle">
						Чтобы Клиент не сталкивался с рисками, в договоре заранее зафиксирована гарантированная остаточная стоимость, т.е. минимальная сумма, которую может получить Клиент при продаже автомобиля Дилеру в рамках программы СТАРТ. Эта сумма достаточна для погашения кредита, при этом это только минимальная стоимость. Фактическая стоимость будет зависеть от технического состояния автомобиля и условий рынка, ее назовет Дилер при оценке автомобиля.
					</div>
				</div>
				<div class="faq__tip faq__tip_06 faq__tip_hide">
					<div class="faq__tip-text subtitle">
						<ul>
							<li>Комфортные ежемесячные платежи — в 2 раза ниже по сравнению с обычным кредитом.</li>
							<li>Регулярное обновление автомобиля.</li>
							<li>Более дорогая версия автомобиля без существенного влияния на платеж.</li>
							<li>Гарантия остаточной стоимости.</li>
							<li>Несколько вариантов погашения кредита на выбор.</li>
						</ul>
					</div>
				</div>


				<div class="faq__item faq__item_07 hide" data-num="07">
					<div class="faq__item-text">
						Что делать с автомобилем по прошествии<br/>трех лет?

					</div>
					<div class="faq__item-num">
						07
					</div>
					<div class="faq__item-plus"></div>
				</div>
				<div class="faq__item faq__item_08 hide" data-num="08">
					<div class="faq__item-text">
						Что если через 3 года автомобиль будет стоить дешевле 45%?
					</div>
					<div class="faq__item-num">
						08
					</div>
					<div class="faq__item-plus"></div>
				</div>
				<div class="faq__tip faq__tip_07 faq__tip_hide">
					<div class="faq__tip-text subtitle">
						У Клиента есть три опции:
						<ul class="">
							<li>Обновить свой автомобиль на новый Hyundai, реализовав автомобиль Дилеру, а полученные от продажи средства использовать для погашения текущего кредита и в качестве взноса за новый автомобиль.</li>
							<li>Продолжить пользоваться своим автомобилем, погасив кредит за счет собственных средств или продлив кредит еще на 2 года.</li>
							<li>Вернуть автомобиль Банку по гарантированной минимальной остаточной стоимости и закрыть задолженность по кредиту.</li>
						</ul>

					</div>
				</div>
				<div class="faq__tip faq__tip_08 faq__tip_hide">
					<div class="faq__tip-text subtitle">
						Средняя рыночная стоимость подержанного Solaris составляет около 70% от цены нового.
Но даже если случится так, что ситуация на рынке кардинально изменится, у Клиента есть гарантированная остаточная стоимость 45%, в пределах которой автомобиль будет выкуплен, а кредит, соответственно, будет погашен. Кроме того, есть возможность продлить кредит еще на 2 года.
					</div>
				</div>


				<div class="faq__item faq__item_09 hide" data-num="09">
					<div class="faq__item-text">
						Какие существуют условия для получения гарантированной остаточной стоимости?
					</div>
					<div class="faq__item-num">
						09
					</div>
					<div class="faq__item-plus"></div>
				</div>
				<div class="faq__item faq__item_inverse hide">
					<a href="javascript:void(0)" onclick="$('.zing_form_back_tel').click()">
					<div class="faq__item-text">
						Остались вопросы?
					</div>
					<div class="faq__item-num">
						написать
					</div>
					</a>
				</div>
				<div class="faq__tip faq__tip_09 faq__tip_hide">
					<div class="faq__tip-text subtitle">
						<ul class="">
							<li>Пробег не более 90000 км за 3 года.</li>
							<li>Прохождение плановых ТО у официального Дилера.</li>
							<li>Качественное состояние автомобиля, соответствующее возрасту автомобиля и нормальным условиям эксплуатации Положительная кредитная история в Банке.</li>
							<li>Наступление 36 платежа (не ранее).</li>
							<li>Обновление автомобиля на новый Hyundai.</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="faq__button">
				<div class="button-link">
					Показать все
					<div class="button-link__line"></div>
				</div>
			</div>


			<div class="credit-disclaimer-center-text">
				<p>
					<sup data-car="23">1</sup>Платеж рассчитан по программе Hyundai Старт исходя из цены Solaris (1.4 6MT Active) 679 900 р. 2018 года производства на условиях кредитного продукта «ДИРЕКТ Баллун ПСП КЛАССИКА: Hyundai в кредит»: срок кредита 36 мес., процентная ставка 9.9% годовых, первоначальный взнос 314 500р., сумма кредита 413 816р. Гарантированная остаточная стоимость автомобиля (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 45% от цены на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. Предложение действует с 01.10.18 по 31.10.18г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.rusfinancebank.ru
				</p>
				<p>
					<sup data-car="7">2</sup>Платеж рассчитан по программе Hyundai Старт исходя из цены Elantra (1.6 6МТ Start) 984 000р., 2018 года производства на условиях кредитного продукта «ДИРЕКТ Баллун ПСП КЛАССИКА: Hyundai в кредит»: срок кредита 36 мес., процентная ставка 9.9% годовых, первоначальный взнос 474 000р., сумма кредита 577 576р. Гарантированная остаточная стоимость автомобиля (часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита) ― 45%. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. Предложение действует с 01.10.18 по 31.10.18г, не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.rusfinancebank.ru
				</p>
				<p>
					<sup data-car="24">3</sup>Платеж рассчитан по условиям программы Hyundai (Старт), исходя из цены Hyundai Sonata (Primary 2.0 MPI 6AT ) 1 299 000 руб., 2018 года производства, на условиях кредитного продукта «ДИРЕКТ Баллун ПСП КЛАССИКА: Hyundai в кредит», исходя из процентной ставки 9.9% годовых, первоначальный взнос 668 500 р., сумма кредита 714 043 р., срок кредита 36 месяцев. Гарантированная остаточная стоимость автомобиля (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) 45% от цены на момент покупки. Обязательно оформление полиса КАСКО. Обеспечение: залог приобретаемого автомобиля. Тарифным планом предусмотрена финансовая защита кредита. Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действует с 01.10.18 по 31.10.18г, не является офертой. Условия и тарифы могут быть изменены Банком в одностороннем порядке. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. Подробности на www.rusfinancebank.ru
					</p>
				<p>
					<sup data-car="22">4</sup>Платеж рассчитан в рамках программы Hyundai Старт исходя из цены Hyundai Creta (1.6 6MT 2WD Start) 879 900р. 2018 года производства на условиях кредитного «ДИРЕКТ Баллун ПСП КЛАССИКА: Hyundai в кредит»: первоначальный взнос 428 000р., сумма кредита 511 778р., срок кредита 36 мес., процентная ставка 9.9% годовых. Гарантированная остаточная стоимость автомобиля (часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита) - 45%. Кредит погашается равными ежемесячными платежами (за исключением первого и последнего). Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Кредит обеспечивается залогом приобретаемого автомобиля. Предложение действует с 01.10.18 по 31.10.18г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробности на www.rusfinancebank.ru
				</p>
				<p>
					<sup data-car="25">5</sup>Ежемесячный платеж по кредиту рассчитан, исходя из цены Hyundai Santa Fe (Family 2,4л 6AT 4WD) 1 999 000 р., 2018 года производства, на условиях кредитного продукта «Директ Баллун ПСП КЛАССИКА: Hyundai в кредит»: первоначальный взнос 1 030 500 р., сумма кредита 968 500 р., срок кредита 36 мес., процентная ставка 12,9% годовых. Часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита - 45%. Кредит погашается равными ежемесячными платежами (за исключением первого и последнего). Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Кредит обеспечивается залогом приобретаемого автомобиля. Предложение действует с 01.10.18 по 31.10.18г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробности на www.rusfinancebank.ru


				</p>
				<p>
					<sup data-car="26">6</sup>Платеж рассчитан в рамках программы Hyundai (Старт) исходя из цены Hyundai Tucson (Primary 2,0л 6MT 2WD) 1 399 000р., 2018 года производства, на условиях кредитного продукта «ДИРЕКТ Баллун ПСП КЛАССИКА: Hyundai в кредит»: первоначальный взнос 711 500р., сумма кредита 778595р., срок кредита 36 мес.; процентная ставка 9.9% годовых. Часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита - 45%. Кредит погашается равными ежемесячными платежами (за исключением первого и последнего). Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Кредит обеспечивается залогом приобретаемого автомобиля. Предложение действует с 01.10.18 по 31.10.18г, не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробности на www.rusfinancebank.ru


				</p>
<!--
				<p>
					<sup>10</sup>Полис КАСКО на безвозмездной основе оформляется на срок 1 (один) год в САО «ВСК» при покупке нового Hyundai Solaris, Elantra, Tucson, Sonata, Santa Fe, Grand Santa Fe в кредит по программе СТАРТ. Указанная информация носит справочный характер и не является публичной офертой. Условия и тарифы могут быть изменены САО «ВСК» в одностороннем порядке. Предложение действует до 31.08.2018г
				</p>
-->
			</div>


		</div>
	</div>
</div>
<noindex>
	<div class="popup popup_hidden">
		<div class="popup__container">
			<div class="popup__close"></div>
			<div class="popup__iframe-box">
				<iframe class="popup__iframe" src="https://www.youtube.com/embed/079fITMMm4o?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</noindex>
<script id="start-credit" data-classlist="start-credit-template-modal" type="text/sp-template">
	<div class="start-credit__body">
		<span class="spreader-inner__heading">Оформление заявки</span>
		<form class="form" data-form-id="start-credit-form" accept-charset="utf-8" novalidate="novalidate">
			<input type="hidden" data-novalidate="true" name="carid" id="carid" value="">
			<input type="hidden" data-novalidate="true" name="mod" id="mod" value="">
			<input type="hidden" data-novalidate="true" name="compl" id="compl" value="">
			<input type="hidden" data-novalidate="true" name="pay" id="pay" value="">
			<input type="hidden" data-novalidate="true" name="term" id="term" value="">
			<input type="hidden" data-novalidate="true" name="prepay" id="prepay" value="">
			<input type="hidden" data-novalidate="true" name="sum" id="sum" value="" value="">
			<input type="hidden" data-novalidate="true" name="prepay_rub" id="prepay_rub" value="">
			<div class="form-row">
				<input class="text-input" id="start-credit-last-name" type="text" name="last_name" data-empty="Заполните поле" placeholder="Фамилия">
			</div>
			<div class="form-row">
				<input class="text-input" id="start-credit-first-name" type="text" name="name" data-empty="Заполните поле" placeholder="Имя">
			</div>
			<div class="form-row">
				<input class="text-input" id="start-credit-email-name" type="email" name="email" data-empty="Заполните поле" data-wrong="Неверный формат" placeholder="E-mail"
			</div>
			<div class="form-row form-row--agreement">
				<input class="checkbox-input" id="start-credit-agreement" type="checkbox" name="agree" data-wrong="Согласитесь с правилами" value="Y">
				<label for="start-credit-agreement" class="checkbox-label">Я согласен на обработку моих <a href="#modal-legal" title="Показать соглашение" style="text-decoration: underline;">персональных данных</a></label>
			</div>
			<div class="form-row">
				<button class="button button--ripple button--submit" data-rippled="white" type="submit">Отправить</button>
			</div>
		</form>
	</div>
</script>

<div id="modal-legal">
	<a title="Закрыть" class="modal-legal__wrap"></a>
	<div class="modal-legal">
	    <h2 class="skyblue">Правила обработки<br>персональных данных</h2>
	    <div class="clearfix">
	        <p class="offers__text fleft">
	            Настоящим Я, в соответствии с требованиями Федерального закона от 27.07.09 <strong>№152-ФЗ</strong> «О персональных данных» даю свое согласие лично, своей волей и в своем интересе
	            на обработку <i>(сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение, передачу (включая трансграничную передачу), обезличивание, блокирование и уничтожение)</i> моих персональных данных, в том числе с использованием средств автоматизации.
	            <br><br>
	            Такое согласие мною даётся в отношении следующих персональных данных: фамилии, имя, отчество; контактный адрес электронной почты (e-mail); контактный телефон;
	            для определения потребностей в производственной мощности, мониторинга исполнения сервисными центрами гарантийной политики; ведения истории обращения в сервисные центры; проведения дилерами, дистрибьюторами, контрагентами маркетинговых исследований в области продаж, сервиса и послепродажного обслуживания;
	            для рекламных, исследовательских, информационных,
	        </p>
	        <p class="offers__text fleft">
	            а также иных целей, в том числе, путем осуществления
	            со мной прямых контактов по различным средствам связи.
	            <br><br>
	            Согласие дается Hyundai Motor Company (Хёндэ Мотор Компани, 231 Янгджи-Донг, Сеочо-Гу, Сеул, 137-938, Республика Корея), ООО «Хендэ Мотор СНГ» (г. Москва, ул.Тестовская, д.10), ООО «Хендэ Мотор МануфактурингPус» (197706, Санкт-Петербург, г. Сестрорецк, Левашовское ш.,
	            д. 20, литер А).
	            <br><br>
	            Я даю свое согласие передавать мои персональные данные для обработки исследовательским агентствам: ООО «Международный институт маркетинговых и социальных исследований «ГФК-Русь» (г. Москва, 9-я Парковая улица,
	            д. 48, корп. 4), ЗАО «Бизнес Аналитика МК» (г. Москва,
	            ул. Новослободская, д. 31, стр. 2); ЗАО «АВТОАССИСТАНС» (г.Москва, ул. Обручева д. 52 стр.3),
	            ООО «Ипсос» (г. Москва, Гамсоновскийпереулок, д. 5),
	            а также любым другим третьим лицам, для целей, указанных в настоящем согласии.
	        </p>
	    </div>
	    <a href="#!" title="" class="closeIt">×</a>
	</div>
</div>


</main>


<!--
Контент страницы закончится тут
-->




<a href="http://zingaya.com/widget/7fa635d9bedd182ca122939b4d8769ba" style="display: none;" onclick="typeof(_gaq)=='undefined'?'':_gaq.push(['_trackEvent', 'Zingaya', 'ButtonClick']);typeof(_gat)=='undefined'?'':_gat._getTrackerByName()._setAllowLinker(true); window.open(typeof(_gat)=='undefined'?this.href+'?referrer='+escape(window.location.href)+'':_gat._getTrackerByName()._getLinkerUrl(this.href+'?referrer='+escape(window.location.href)+''), '_blank', 'width=236,height=220,resizable=no,toolbar=no,menubar=no,location=no,status=no'); return false" class="zingaya_button1373885756660 _zc2 zing_call_btn" id="zing_hotline_btn"></a>		<script type="text/x-template" id="common-modal-template">
		<div class="">
			<slot>default modal-content</slot>
		</div>
	</script>
	</div>

	<div class="svg-root" style="position: absolute; width: 0; height: 0; visibility: hidden;">
	<svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" display="none" aria-hidden="true">
		<symbol id="img-hyundai" viewbox="0 0 512 65.85">
			<title>Hyundai</title>
				<path fill="#003469" d="M478.5,16.74h-21c-3.5.2-4.5,1.1-4.5,5.4v11.8h25.5Zm11.2-9.5v51.3H478.5V43.74H453v14.8H441.8V18.34c0-7.1,2.9-11.1,11.2-11.1Zm-59,11.1v27.8c0,8.8-5,12.5-11.2,12.5H384.3V7.34h35.2C429.1,7.24,430.7,13.34,430.7,18.34Zm-11.2,3.1a4.44,4.44,0,0,0-4.7-4.8H395.6v32.1h19.2c4.4-.2,4.7-2.8,4.7-4.9ZM156.9,7.24h11.2v20.2h25V7.24h11.2v51.3H193V37.64H168v20.9H156.8l.1-51.3Zm66.4,0,14,21,13.8-21h13.6L242.9,40v18.5H231.7V40L209.8,7.24Zm104,0h36c5.1,0,10.1.7,9.9,11.1v40.2H362V21.94c0-4.4-.5-5.4-4-5.4H338.4v41.9H327.2V7.24Zm184.7,0v51.3H500.8V7.24ZM270.3,58.64h36c7.1,0,10.1-2.1,9.9-12.4v-39H305v36.7c0,4.4-.5,4.9-4,4.9H281.4V7.24H270.2v51.4Z" transform="translate(0)" style="fill:#003469"/>
				<path fill="#003469" d="M111.6,10.24a89.15,89.15,0,0,0-10-4.4,118.24,118.24,0,0,0-50.8-5c-15.9,2.1-31.3,5.9-43.4,16.9-5.8,5.4-9.2,13.5-6.4,21.2,3.7,9.5,13.5,15.8,22.3,19.4,26,10.5,61.3,10.1,86.4-1.9,8.6-4.3,18.2-11.6,19.4-21.9C130.1,23.34,120.3,15,111.6,10.24Zm-58,4.5c2.2-4.2,6-9.2,11.4-9.3a116,116,0,0,1,32.5,4.5c.6.3,1.4.5,1.7,1.1s-.3,1.1-.7,1.6c-8.5,6.6-18.2,10.3-28.1,13.6-5,1.2-10.1,3.4-15.7,2.2a5,5,0,0,1-3.2-2.5C50.1,22,52,18,53.6,14.74ZM19.1,49.24c-1.3,1.2-2.6-.4-3.8-.9-6-3.9-11.4-10.3-9.8-17.8,2.5-9.8,12.6-15.1,21.1-18.7a80.75,80.75,0,0,1,15.7-4.3c.6,0,1.4-.1,1.6.5l-.2.6C32.9,20.94,25.8,35.14,19.1,49.24Zm55.1,4.7c-2.5,3.8-6.5,7.1-11.4,6.6a117.21,117.21,0,0,1-31.6-4.8,1.55,1.55,0,0,1-1.1-.8,1.44,1.44,0,0,1,.5-1.5c9.1-7.3,19.8-10.7,30.5-14.3,4-1.1,8.2-2.4,12.7-1.8a5.35,5.35,0,0,1,4.3,3.2C79.1,45.64,76.4,49.84,74.2,53.94Zm49.4-18.3c-2.5,10.2-13.6,15.6-22.4,19-4.8,1.6-9.6,3.2-14.9,3.7-.3,0-.9,0-.9-.5l.1-.6c7.5-8.4,13.1-17.8,18.1-27.4,2.3-4.3,4.4-8.7,6.4-13.1a2.36,2.36,0,0,1,.9-.6c1.8.3,3.1,1.7,4.6,2.7C120.6,23,125.2,28.74,123.6,35.64Z"/>
		</symbol>
		<symbol id="ic-phone" viewbox="0 0 24.307 24.294">
			<title>Phone</title>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M19.123,24.294c-0.465-0.094-0.945-0.135-1.387-0.29
				c-3.615-1.268-6.918-3.095-9.789-5.646c-3.656-3.249-6.16-7.268-7.709-11.883c-0.543-1.618-0.145-3.087,1.043-4.319
				C1.887,1.528,2.513,0.92,3.135,0.309c0.422-0.415,0.892-0.413,1.315,0.01C6.087,1.95,7.721,3.583,9.353,5.22
				C9.831,5.7,9.828,6.121,9.352,6.603C8.867,7.095,8.375,7.58,7.887,8.07c-0.733,0.738-0.83,1.319-0.436,2.267
				c1.323,3.173,3.632,5.328,6.789,6.613c0.717,0.293,1.338,0.084,1.869-0.419c0.543-0.513,1.059-1.056,1.59-1.581
				c0.465-0.463,0.918-0.46,1.387,0.008c1.611,1.609,3.223,3.219,4.83,4.83c0.521,0.521,0.52,0.934,0,1.458
				c-0.613,0.619-1.229,1.237-1.848,1.853C21.369,23.796,20.223,24.241,19.123,24.294z"/>
		</symbol>
		<symbol id="ic-mail" viewbox="0 0 30.329 22.121">
			<title>Mail</title>
			<g>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M15.164,16.388L0,5.541v15.01c0,0.866,0.702,1.569,1.568,1.569 H28.76c0.895,0,1.568-0.717,1.568-1.602V5.541L15.164,16.388z"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M0.689,2.845l13.562,9.698c0.543,0.389,1.281,0.389,1.825,0 l13.561-9.698c0.555-0.396,0.789-1.105,0.582-1.755C30.01,0.44,29.407,0,28.725,0H1.603C0.921,0,0.317,0.44,0.109,1.09 C-0.1,1.739,0.135,2.448,0.689,2.845z"/>
			</g>
		</symbol>
		<symbol id="ic-arrow-s" viewbox="0 0 14.172 11.732">
			<title>Arrow small</title>
			<polygon fill-rule="evenodd" clip-rule="evenodd" points="8.325,0 7.675,0.759 12.27,5.379 0,5.379 0,6.379 12.27,6.379 7.646,11.025 8.354,11.732 14.172,5.879 "/>
		</symbol>
		<symbol id="ic-arrow-m" viewbox="0 0 32.156 10">
			<title>Arrow middle</title>
			<path d="M628.678,4310a0.816,0.816,0,0,0,.544-0.21c1.606-1.5,3.087-2.9,4.529-4.27a0.652,0.652,0,0,0,.009-1.02c-1.244-1.19-2.886-2.75-4.558-4.29a0.731,0.731,0,0,0-.515-0.21,0.8,0.8,0,0,0-.739.51,0.728,0.728,0,0,0,.3.86c0.614,0.57,1.228,1.15,1.877,1.76l1.216,1.14h-4.983c-1.047,0-22.474,0-23.52.01a0.76,0.76,0,1,0-.011,1.46H630.78l0.259,0.43-0.185.12c-0.042.03-.086,0.05-0.13,0.08a0.858,0.858,0,0,0-.2.13l-0.316.3c-0.68.63-1.383,1.29-2.056,1.94a0.675,0.675,0,0,0-.009,1.05A0.785,0.785,0,0,0,628.678,4310Z" transform="translate(-601.875 -4300)"/>
		</symbol>
		<symbol id="ic-arrow-b" viewbox="0 0 30 13.997">
			<title>Arrow big</title>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M22.786,13.997c0.279,0,0.543-0.104,0.738-0.293
				c2.176-2.096,4.182-4.052,6.137-5.979c0.447-0.442,0.451-0.987,0.012-1.423c-1.686-1.664-3.91-3.852-6.176-6.014
				C23.299,0.101,23.057,0,22.799,0c-0.439,0-0.834,0.283-1.002,0.72c-0.16,0.414-0.043,0.759,0.404,1.193
				c0.832,0.809,1.664,1.617,2.543,2.471l1.646,1.6h-6.752c-1.418,0-16.898,0-18.316,0.002C0.499,5.986,0.005,6.366,0,7.001
				s0.484,1.02,1.309,1.028c0.046,0,0.093,0.001,0.139,0.001l0.242-0.001h23.184h0.762l0.35,0.609l-0.25,0.166
				c-0.057,0.037-0.117,0.073-0.176,0.108c-0.105,0.062-0.205,0.122-0.273,0.188l-0.43,0.413c-0.92,0.887-1.873,1.805-2.785,2.728
				c-0.457,0.461-0.461,1.023-0.012,1.467C22.245,13.893,22.508,13.997,22.786,13.997z"/>
		</symbol>
		<symbol id="ic-ru" viewbox="0 0 21 14">
			<title>Russia</title>
			<image width="21" height="14" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAOCAMAAAD32Kf8AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAATlBMVEX///////////////////++zOgANKQAOaYAOq1/MVXiKhXUKx/VKx7VKx7VKx7VKx7///++zOgANKQAOaYAOq1/MVXiKhXUKx/VKx4AAAD6LABFAAAAEHRSTlPV6unt6Ojo6Ojo6Ojt1erp9UK6/AAAAAFiS0dEGexutYgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfhBBMODDbPccupAAAAQ0lEQVQY03XIxwGAIAAEwUUkY479V+qfk3kOmKFlwK7KMv7s2Fm3KYfflSccKnQ2niqSLpXIt8qURxXqqyrTvLTm6QMqABMr2oqgMgAAAABJRU5ErkJggg=="/>
		</symbol>
		<symbol id="ic-ok" viewbox="0 0 45.438 45.01">
			<title>Odnoklassniki</title>
			<g>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M22.721,19.195c1.452,0.017,2.592-1.045,2.583-2.399
					c-0.008-1.289-1.15-2.41-2.492-2.448c-1.329-0.038-2.602,1.159-2.606,2.451C20.203,18.092,21.347,19.182,22.721,19.195z"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M22.721,0C10.171,0,0,10.075,0,22.505
					C0,34.934,10.171,45.01,22.721,45.01c12.547,0,22.717-10.076,22.717-22.505C45.438,10.075,35.268,0,22.721,0z M22.808,10.591
					c3.511,0.01,6.427,2.796,6.462,6.174c0.033,3.386-2.934,6.242-6.491,6.249c-3.582,0.006-6.485-2.788-6.469-6.229
					C16.326,13.323,19.203,10.581,22.808,10.591z M28.981,31.034c0.533,0.581,0.932,1.271,0.492,1.974
					c-0.336,0.541-0.943,1.19-1.5,1.257c-0.621,0.076-1.428-0.316-1.959-0.74c-1.098-0.876-2.068-1.908-3.269-3.041
					c-1.114,1.141-2.145,2.192-3.169,3.249c-0.589,0.605-1.307,0.829-2.119,0.594c-1.422-0.414-1.861-2.013-0.82-3.112
					c1.01-1.067,2.105-2.058,3.284-3.2c-0.509-0.198-0.887-0.324-1.247-0.488c-0.787-0.357-1.616-0.66-2.34-1.122
					c-0.899-0.569-1.073-1.543-0.581-2.43c0.444-0.799,1.405-1.167,2.335-0.866c0.305,0.098,0.593,0.25,0.88,0.393
					c2.558,1.275,5.097,1.165,7.621-0.094c0.229-0.112,0.455-0.249,0.695-0.336c0.965-0.347,1.955,0.006,2.42,0.847
					c0.494,0.897,0.262,1.947-0.684,2.483c-1.023,0.577-2.123,1.029-2.951,1.423C26.977,28.826,27.969,29.937,28.981,31.034z"/>
			</g>
		</symbol>
		<symbol id="ic-vk" viewbox="0 0 45.437 45.01">
			<title>Vkontakte</title>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M22.72,0C10.17,0,0,10.075,0,22.505
				C0,34.934,10.17,45.01,22.72,45.01c12.547,0,22.717-10.076,22.717-22.505C45.437,10.075,35.267,0,22.72,0z M33.841,29.358
				c-1.033,0.024-2.07,0.009-3.104,0.05c-0.82,0.031-1.516-0.216-2.09-0.783c-0.689-0.675-1.328-1.398-2.039-2.048
				c-0.686-0.625-1.23-0.479-1.533,0.402c-0.152,0.444-0.203,0.932-0.24,1.404c-0.047,0.6-0.334,0.918-0.938,0.975
				c-3.32,0.323-6.007-0.905-8.069-3.417c-1.063-1.295-1.998-2.713-2.852-4.157c-0.933-1.57-1.704-3.234-2.544-4.857
				c0-0.129,0-0.262,0-0.394c0.366-0.121,0.725-0.329,1.097-0.349c0.967-0.052,1.938-0.017,2.905-0.032
				c0.65-0.012,1.05,0.265,1.328,0.858c0.562,1.204,1.155,2.396,1.811,3.556c0.315,0.562,0.747,1.078,1.21,1.531
				c0.462,0.45,0.944,0.308,1.054-0.328c0.155-0.915,0.242-1.854,0.243-2.784c0.002-1.07,0.022-2.223-1.5-2.448
				c0.385-0.722,1.008-0.867,1.644-0.898c0.966-0.044,1.938-0.052,2.904-0.019c1.427,0.052,1.724,0.387,1.718,1.79
				c-0.008,1.311-0.045,2.621,0.004,3.929c0.014,0.317,0.258,0.69,0.51,0.902c0.09,0.074,0.537-0.237,0.799-0.408
				c0.139-0.093,0.258-0.243,0.344-0.392c0.855-1.491,1.693-2.993,2.566-4.476c0.172-0.287,0.473-0.693,0.732-0.709
				c1.471-0.085,2.949-0.104,4.424-0.071c0.701,0.018,0.904,0.417,0.65,1.085c-0.131,0.345-0.268,0.697-0.477,0.998
				c-0.859,1.238-1.736,2.467-2.629,3.684c-1.041,1.416-1.018,1.549,0.176,2.793c0.953,0.993,1.912,1.993,2.746,3.081
				C35.343,28.679,34.931,29.334,33.841,29.358z"/>
		</symbol>
		<symbol id="ic-yt" viewbox="0 0 45.437 45.01">
			<title>Youtube</title>
			<g>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M20.053,26.858c2.477-1.428,4.897-2.822,7.388-4.259
					c-2.502-1.449-4.923-2.851-7.388-4.279C20.053,21.202,20.053,23.987,20.053,26.858z"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M22.722,0C10.171,0,0,10.075,0,22.505
					C0,34.934,10.171,45.01,22.722,45.01c12.547,0,22.717-10.076,22.717-22.505C45.438,10.075,35.269,0,22.722,0z M33.194,28.101
					c0,1.542-0.973,2.538-2.513,2.54c-5.316,0.007-10.632,0.007-15.947,0c-1.525-0.002-2.489-0.98-2.489-2.493
					c-0.001-3.758-0.001-7.514,0-11.271c0-1.546,0.961-2.508,2.522-2.51c2.641-0.005,5.281-0.001,7.92-0.001
					c2.641,0,5.281-0.002,7.921,0c1.621,0.002,2.586,0.966,2.586,2.571C33.194,20.659,33.195,24.38,33.194,28.101z"/>
			</g>
		</symbol>
		<symbol id="ic-inst" viewbox="0 0 45.437 45.01">
			<title>Instagram</title>
			<g>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M25.325,26.604c-1.695,1.103-3.516,1.103-5.211,0
					c-1.901-1.236-2.57-3.054-2.136-5.299c-0.841,0-1.693,0-2.576,0c0,0.094,0,0.182,0,0.27c0,2.322-0.001,4.643,0,6.964
					c0,0.744,0.505,1.278,1.247,1.28c4.046,0.005,8.093,0.005,12.14,0c0.741-0.002,1.247-0.536,1.247-1.28c0.001-2.32,0-4.643,0-6.963
					c0-0.088,0-0.176,0-0.271c-0.883,0-1.734,0-2.577,0C27.896,23.551,27.226,25.368,25.325,26.604z"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M22.729,24.942c1.343-0.012,2.428-1.1,2.43-2.434
					c0-1.346-1.108-2.451-2.45-2.44c-1.342,0.011-2.428,1.1-2.429,2.435C20.28,23.849,21.389,24.953,22.729,24.942z"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M28.818,15.189c-0.656,0-1.214,0.547-1.221,1.197
					c-0.006,0.673,0.536,1.23,1.205,1.239c0.668,0.009,1.232-0.544,1.233-1.209C30.039,15.746,29.486,15.19,28.818,15.189z"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M22.722,0C10.171,0,0,10.075,0,22.505
					C0,34.934,10.171,45.01,22.722,45.01c12.547,0,22.717-10.076,22.717-22.505C45.438,10.075,35.269,0,22.722,0z M32.476,22.52
					c0,2.403,0.001,4.806,0,7.208c0,1.463-1.03,2.527-2.495,2.53c-4.841,0.01-9.683,0.01-14.524,0
					c-1.465-0.003-2.493-1.068-2.493-2.532c0-4.814,0-9.628,0-14.442c0-1.463,1.03-2.528,2.495-2.531c4.842-0.01,9.683-0.01,14.524,0
					c1.465,0.003,2.493,1.069,2.493,2.532C32.476,17.696,32.476,20.108,32.476,22.52z"/>
			</g>
		</symbol>
		<symbol id="ic-fb" viewbox="0 0 45.438 45.01">
			<title>Facebook</title>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M22.721,0C10.171,0,0,10.075,0,22.505
				C0,34.934,10.171,45.01,22.721,45.01c12.547,0,22.717-10.076,22.717-22.505C45.438,10.075,35.268,0,22.721,0z M28.961,14.459
				c-0.949,0.001-1.898-0.003-2.846,0.007c-0.719,0.006-1.275,0.282-1.326,1.014c-0.062,0.857-0.016,1.721-0.016,2.607
				c1.475,0,2.832,0,4.188,0c0,0.47,0,0.938,0,1.41c-0.18,1.002-0.361,2.004-0.561,3.113c-1.219,0-2.398,0-3.674,0
				c0,4.128,0,8.142,0,12.173c-1.882,0-3.66,0-5.579,0c0-4.101,0-8.138,0-12.264c-0.982,0-1.827,0-2.671,0c0-1.41,0-2.82,0-4.23
				c0.865-0.06,1.729-0.119,2.716-0.188c0-0.664,0.033-1.292-0.006-1.917c-0.192-2.947,0.96-5.051,4.061-5.958c1.905,0,3.809,0,5.713,0
				C28.961,11.638,28.961,13.048,28.961,14.459z"/>
		</symbol>
		<symbol id="ic-tw" viewbox="0 0 45.439 45.01">
			<title>Twitter</title>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M22.72,0C10.171,0,0,10.075,0,22.505
				C0,34.934,10.171,45.01,22.72,45.01c12.547,0,22.719-10.076,22.719-22.505C45.439,10.075,35.267,0,22.72,0z M35.892,22.024
				c-1.004,0.413-2.008,0.828-2.91,1.199c-0.752,1.27-1.352,2.671-2.277,3.781c-3.742,4.488-10.165,6.18-15.579,4.142
				c-2.23-0.841-4.242-2.087-5.578-4.222c0.52,0.278,1.034,0.572,1.562,0.831c2.482,1.212,5.971,0.574,7.569-1.376
				c-1.794-0.65-1.952-0.996-1.057-2.421c-1.136-0.189-2.182-0.517-2.774-1.798c0.414-0.253,0.803-0.487,1.224-0.744
				c-1.081-0.59-2.235-1.106-2.305-2.662c0.371-0.103,0.709-0.195,1.161-0.319c-1.092-0.895-1.93-1.79-1.809-3.369
				c3.217,1.268,6.32,2.386,8.899,4.64c1.139-2.816,2.039-5.755,5.306-6.698h0.625c-0.029,0.188-0.057,0.376-0.086,0.579h1.268
				c0.025,0.089,0.053,0.181,0.08,0.271c-0.467,0.278-0.936,0.558-1.494,0.892c2.656,0.618,4.197,2.303,4.883,4.896
				c0.059,0.214,0.449,0.452,0.701,0.472c0.77,0.061,1.549,0.022,2.322,0.022c0.039,0.094,0.076,0.189,0.117,0.283
				c-0.775,0.38-1.549,0.761-2.48,1.217c0.977,0.063,1.803,0.118,2.631,0.171V22.024z"/>
		</symbol>
		<symbol id="ic-corner-r-thin" viewbox="0 0 6.75 12.75">
			<title>Corner right thin</title>
			<path d="M347.457,4297.34a0.82,0.82,0,0,0-.457.74,0.972,0.972,0,0,0,.271.66c1.434,1.53,2.858,3.05,4.438,4.73a1.033,1.033,0,0,0,.155.14,0.04,0.04,0,0,0,.024.02s0,0.01,0,.01a0.753,0.753,0,0,0-.165.13c-1.319,1.4-2.657,2.83-3.952,4.21l-0.42.45a0.151,0.151,0,0,1-.04.04,1.66,1.66,0,0,0-.133.16,0.852,0.852,0,0,0-.174.52,0.869,0.869,0,0,0,.375.72,0.76,0.76,0,0,0,1.057-.22l5-5.34a0.994,0.994,0,0,0,.321-0.68,1.046,1.046,0,0,0-.329-0.7c-1.627-1.74-3.309-3.53-4.965-5.3a2.164,2.164,0,0,0-.335-0.28A0.633,0.633,0,0,0,347.457,4297.34Z" transform="translate(-347 -4297.25)"/>
		</symbol>
		<symbol id="rippled-circle" viewbox="0 0 100 100">
			<title>Rippled circle</title>
			<circle cx="1" cy="1" r="1"/>
		</symbol>
		<symbol id="ic-car" viewbox="0 0 75.613 40.536">
			<title>Car</title>
			<g>
				<path d="M75.321,21.434c-0.538-4.051-6.8-5.326-11.474-6.351c-1.136-0.248-2.207-0.483-3.109-0.737
					c-1.9-0.532-4.052-3.734-6.133-6.832c-2.45-3.648-5.654-6.649-8.325-7.269C45.579,0.082,44.501,0,43.076,0
					c-6.948,0-24.072,0.189-25.545,0.414C14.89,0.762,6.61,10.717,5.176,12.399c-3.173,3.775-5.072,5.979-5.174,8.445
					c-0.085,2.073,2.514,10.469,3.184,11.154c0.673,0.688,1.567,1.047,2.517,1.047h3.825c0.807,4.263,4.458,7.49,8.832,7.49
					c4.394,0,8.056-3.258,8.842-7.548h22.157c0.785,4.29,4.448,7.548,8.842,7.548c4.429,0,8.113-3.312,8.857-7.653
					c0.396,0.001,0.793,0,1.185,0c1.495,0,3.638-0.08,4.965-0.772C75.389,30.494,76.068,27.098,75.321,21.434z M18.359,38.757
					c-3.982,0-7.222-3.358-7.222-7.486s3.24-7.486,7.222-7.486c3.983,0,7.223,3.358,7.223,7.486S22.342,38.757,18.359,38.757z
					 M58.199,38.757c-3.983,0-7.225-3.358-7.225-7.486s3.241-7.486,7.225-7.486c3.982,0,7.224,3.358,7.224,7.486
					S62.182,38.757,58.199,38.757z M72.383,30.533c-0.736,0.384-2.101,0.571-4.171,0.571c-0.374,0-0.718,0.004-1.018,0.005
					c-0.085-5.035-4.084-9.104-8.995-9.104c-4.944,0-8.968,4.123-9,9.204h-21.84c-0.033-5.081-4.056-9.204-9-9.204
					c-4.962,0-8.999,4.154-9.001,9.262H5.712c-0.476,0-0.919-0.169-1.254-0.511c-0.345-0.354-2.762-7.811-2.678-9.838
					c0.072-1.737,1.432-3.415,4.76-7.375c3.508-4.18,9.842-11.046,11.079-11.339c1.236-0.292,13.767-0.552,25.526-0.435
					c1.233,0.012,2.127,0.067,2.734,0.209c1.986,0.46,5.1,3.324,7.249,6.525c2.365,3.521,4.599,6.847,7.129,7.556
					c0.946,0.266,2.044,0.506,3.206,0.761c4.135,0.905,9.721,2.032,10.094,4.847C74.281,27.159,73.331,29.632,72.383,30.533z"/>
				<path d="M51.7,14.257H25.153c-0.491,0-0.89,0.398-0.89,0.89s0.398,0.89,0.89,0.89H51.7
					c0.491,0,0.89-0.398,0.89-0.89S52.191,14.257,51.7,14.257z"/>
			</g>
		</symbol>
		<symbol id="ic-map" viewbox="0 0 62.864 54.301">
			<title>Map</title>
			<g>
				<path d="M32.108,42.506c0.625-0.73,15.285-17.994,15.285-26.545C47.394,7.16,40.233,0,31.432,0
					c-8.801,0-15.961,7.16-15.961,15.961c0,8.55,14.661,25.814,15.285,26.545C31.094,42.902,31.771,42.902,32.108,42.506z
					 M31.432,1.779c7.821,0,14.182,6.361,14.182,14.182c0,7.124-12.422,22.446-13.838,24.169l-0.344,0.419l-0.343-0.419
					C29.672,38.407,17.25,23.085,17.25,15.961C17.25,8.141,23.613,1.779,31.432,1.779z"/>
				<path d="M37.565,15.961c0-3.382-2.752-6.133-6.133-6.133c-3.381,0-6.133,2.751-6.133,6.133s2.752,6.133,6.133,6.133
					C34.813,22.094,37.565,19.343,37.565,15.961z M27.08,15.961c0-2.4,1.952-4.354,4.353-4.354c2.401,0,4.354,1.953,4.354,4.354
					s-1.953,4.354-4.354,4.354C29.032,20.314,27.08,18.361,27.08,15.961z"/>
				<path d="M62.8,53.076l-9.072-22.368c-0.137-0.337-0.461-0.555-0.824-0.555h-8.316c-0.49,0-0.891,0.398-0.891,0.89
					c0,0.49,0.4,0.89,0.891,0.89h7.717l8.35,20.589H2.211l8.35-20.589h7.717c0.49,0,0.89-0.399,0.89-0.89c0-0.491-0.399-0.89-0.89-0.89
					H9.961c-0.363,0-0.688,0.218-0.824,0.555L0.066,53.076c-0.112,0.274-0.079,0.586,0.086,0.831c0.166,0.246,0.442,0.394,0.738,0.394
					h61.083c0.297,0,0.572-0.147,0.738-0.393C62.878,53.662,62.911,53.351,62.8,53.076z"/>
			</g>
		</symbol>
		<symbol id="ic-steering-wheel" viewbox="0 0 51.71 51.711">
			<title>Steering wheel</title>
			<g>
				<path d="M25.854,5.289c-11.34,0-20.565,9.226-20.565,20.566c0,11.34,9.226,20.565,20.565,20.565
					c11.34,0,20.567-9.226,20.567-20.565C46.421,14.515,37.195,5.289,25.854,5.289z M25.854,6.958c9.465,0,17.325,6.994,18.688,16.085
					l-12.533-0.96c-1.273-2.068-3.553-3.456-6.155-3.456c-2.6,0-4.877,1.386-6.15,3.451L7.202,22.835
					C8.652,13.846,16.463,6.958,25.854,6.958z M31.416,25.855c0,3.065-2.494,5.56-5.561,5.56c-3.065,0-5.56-2.494-5.56-5.56
					s2.494-5.56,5.56-5.56C28.921,20.296,31.416,22.79,31.416,25.855z M6.957,25.855c0-0.45,0.021-0.896,0.053-1.337l11.92-0.724
					c-0.194,0.653-0.303,1.345-0.303,2.061c0,0.91,0.177,1.778,0.484,2.581L7.035,27.521C6.987,26.972,6.957,26.417,6.957,25.855z
					 M7.262,29.211l12.795,0.971c0.007,0,0.015,0,0.022,0.001c0.484,0.644,1.066,1.21,1.734,1.662l0.732,12.612
					C14.79,43.081,8.657,36.961,7.262,29.211z M27.285,44.693c-0.472,0.035-0.948,0.06-1.43,0.06c-0.548,0-1.088-0.028-1.624-0.075
					l-0.696-11.983c0.729,0.248,1.509,0.389,2.32,0.389c0.806,0,1.577-0.138,2.301-0.382L27.285,44.693z M28.972,44.491l0.918-12.643
					c0.67-0.453,1.256-1.02,1.74-1.666c0.002,0,0.002,0,0.004,0l12.779-0.783C42.943,37.124,36.755,43.193,28.972,44.491z
					 M32.593,28.452c0.312-0.807,0.49-1.681,0.49-2.597c0-0.709-0.107-1.392-0.299-2.04l11.928,0.914c0.002,0,0.002,0,0.004,0
					c0.021,0.372,0.037,0.747,0.037,1.126c0,0.627-0.033,1.247-0.094,1.859L32.593,28.452z"/>
				<path d="M25.854,0C11.599,0,0,11.599,0,25.855s11.599,25.855,25.854,25.855c14.256,0,25.856-11.599,25.856-25.855
					S40.111,0,25.854,0z M25.854,50.042c-13.337,0-24.187-10.85-24.187-24.187S12.518,1.668,25.854,1.668
					c13.336,0,24.188,10.851,24.188,24.188S39.191,50.042,25.854,50.042z"/>
			</g>
		</symbol>
		<symbol id="ic-calc" viewbox="0 0 49.06 52.048">
			<title>Calc</title>
			<g>
				<path d="M18.396,37.545c0-0.268-0.105-0.52-0.295-0.708c-0.188-0.188-0.439-0.293-0.707-0.293
					s-0.52,0.104-0.707,0.293l-2.674,2.674l-2.674-2.674c-0.188-0.188-0.44-0.293-0.708-0.293s-0.519,0.104-0.708,0.293
					c-0.188,0.188-0.293,0.44-0.293,0.708s0.104,0.519,0.293,0.708l2.674,2.674l-2.674,2.674C9.734,43.789,9.63,44.04,9.63,44.308
					s0.104,0.52,0.293,0.708c0.181,0.18,0.438,0.283,0.708,0.283c0.27,0,0.528-0.104,0.708-0.283l2.674-2.674l2.674,2.674
					c0.18,0.18,0.438,0.283,0.707,0.283s0.527-0.104,0.707-0.283c0.189-0.188,0.295-0.44,0.295-0.708s-0.105-0.519-0.295-0.707
					l-2.674-2.674l2.674-2.674C18.291,38.063,18.396,37.812,18.396,37.545z"/>
				<path d="M45.818,0H3.241C1.454,0,0,1.454,0,3.242v45.563c0,1.788,1.454,3.242,3.241,3.242h42.577
					c1.787,0,3.242-1.454,3.242-3.242V3.242C49.06,1.454,47.605,0,45.818,0z M47.058,48.806c0,0.684-0.557,1.24-1.24,1.24H3.241
					c-0.684,0-1.239-0.557-1.239-1.24V3.242c0-0.685,0.556-1.24,1.239-1.24h42.577c0.684,0,1.24,0.556,1.24,1.24V48.806z"/>
				<path d="M20.011,26.605h-4.223v-4.223c0-0.552-0.449-1.001-1-1.001c-0.553,0-1.001,0.449-1.001,1.001v4.223H9.564
					c-0.552,0-1.001,0.449-1.001,1.001s0.449,1.001,1.001,1.001h4.223v4.223c0,0.552,0.449,1.001,1.001,1.001c0.551,0,1-0.449,1-1.001
					v-4.223h4.223c0.551,0,1-0.449,1-1.001S20.562,26.605,20.011,26.605z"/>
				<path d="M39.503,26.137H28.33c-0.553,0-1.002,0.449-1.002,1.001s0.449,1.001,1.002,1.001h11.174
					c0.553,0,1.002-0.449,1.002-1.001S40.056,26.137,39.503,26.137z"/>
				<path d="M39.042,35.761c0-0.268-0.104-0.52-0.293-0.708c-0.188-0.189-0.439-0.293-0.707-0.293
					s-0.52,0.104-0.707,0.293l-7.096,7.095c-0.188,0.188-0.293,0.44-0.293,0.707c0,0.268,0.105,0.52,0.293,0.709
					c0.18,0.18,0.438,0.282,0.709,0.282c0.27,0,0.527-0.103,0.707-0.282l7.094-7.096C38.939,36.279,39.042,36.028,39.042,35.761z"/>
				<path d="M31.378,37.531c0.467,0,0.908-0.183,1.238-0.514c0.684-0.683,0.684-1.795,0-2.478
					c-0.33-0.331-0.77-0.513-1.238-0.513s-0.908,0.182-1.24,0.513c-0.682,0.683-0.682,1.795,0,2.478
					C30.47,37.349,30.91,37.531,31.378,37.531z"/>
				<path d="M37.921,40.57c-0.469,0-0.908,0.183-1.238,0.514c-0.684,0.684-0.684,1.795,0,2.479
					c0.33,0.33,0.77,0.513,1.238,0.513c0.467,0,0.908-0.183,1.238-0.513c0.684-0.684,0.684-1.796,0-2.479
					C38.83,40.753,38.39,40.57,37.921,40.57z"/>
				<path d="M9.964,16.405h29.131c0.615,0,1.113-0.497,1.113-1.111s-0.498-1.112-1.113-1.112H9.964
					c-0.614,0-1.112,0.498-1.112,1.112S9.35,16.405,9.964,16.405z"/>
			</g>
		</symbol>
		<symbol id="ic-pig" viewbox="0 0 57.23 52.154">
			<title>Pig</title>
			<g>
				<path d="M50.669,7.894C46.497,3.041,40.92,0.25,34.949,0.033L21.73,0C17.088,0,11.71,2.924,7.344,7.823
					C2.677,13.067,0,19.709,0,26.044C0,33.923,2.94,40.99,7.571,45.77l-0.002,0.059h0.059c3.803,3.897,8.733,6.261,14.119,6.261h11.531
					c0.106,0,0.203,0.01,0.409,0.031c0.203,0.017,0.408,0.033,0.597,0.033c12.652,0,22.946-11.698,22.946-26.078
					C57.214,19.242,54.884,12.785,50.669,7.894z M55.111,26.077c0,13.228-9.357,23.99-20.859,23.99s-20.86-10.763-20.86-23.99
					c0-13.228,9.358-23.99,20.86-23.99S55.111,12.849,55.111,26.077z M12.385,45.829l0.015-0.001c0.556-0.031,0.991-0.486,0.991-1.035
					c0-0.579-0.465-1.051-1.035-1.051H8.549l-0.012-0.015l-0.029,0.015H8.486l-0.31-0.362c-0.673-0.778-1.316-1.655-1.966-2.681
					l-0.901-1.43L8.09,39.39c0.559,0,1.02-0.436,1.051-0.992c0.03-0.57-0.414-1.062-0.997-1.095l-3.819-0.165l-0.216-0.516
					c-0.295-0.715-0.578-1.53-0.891-2.56l-0.333-1.145h3.259c0.58,0,1.051-0.472,1.051-1.052s-0.472-1.051-1.051-1.051H2.477
					l-0.104-0.758c-0.129-0.871-0.207-1.749-0.238-2.69l-0.042-0.921H6.16c0.58,0,1.052-0.472,1.052-1.052
					c0-0.58-0.472-1.051-1.052-1.051H2.132l0.114-0.985c0.096-0.87,0.257-1.739,0.491-2.661l0.166-0.674h3.906
					c0.58,0,1.051-0.472,1.051-1.051s-0.472-1.051-1.051-1.051H3.515l0.525-1.216c0.334-0.775,0.748-1.597,1.34-2.663l0.293-0.526
					l0.167-0.239h3.075l0.014-0.001c0.556-0.031,0.991-0.486,0.99-1.007c0.016-0.275-0.086-0.55-0.279-0.754
					c-0.196-0.207-0.471-0.325-0.755-0.325H7.226l0.78-0.999c0.448-0.543,0.895-1.055,1.327-1.519l0.405-0.438l0.076-0.107
					c0.055-0.104,0.128-0.2,0.217-0.284h3.149l0.014-0.001c0.557-0.03,0.992-0.485,0.991-1.009c0.015-0.284-0.084-0.552-0.277-0.755
					c-0.194-0.204-0.47-0.321-0.757-0.321h-0.7l1.189-0.804c2.789-1.87,5.65-2.899,8.058-2.899h3.199l-2.361,1.633
					c-6.928,4.712-11.231,13.292-11.231,22.39c0,9.198,4.168,17.543,11.148,22.324l2.336,1.601H21.73c-3.044,0-6.002-0.859-8.788-2.553
					l-2.644-1.62H12.385z"/>
				<path d="M36.31,10.218h-7.055c-0.589,0-1.051,0.462-1.051,1.051v14.34h-4.09c-0.58,0-1.052,0.472-1.052,1.051
					c0,0.58,0.472,1.052,1.052,1.052h4.09v4.319h-4.09c-0.58,0-1.052,0.472-1.052,1.052s0.472,1.051,1.052,1.051h4.073v6.004
					c0,0.58,0.472,1.052,1.052,1.052c0.579,0,1.051-0.479,1.051-1.067v-6.004h7.285c0.58,0,1.052-0.472,1.052-1.052
					c0-0.579-0.472-1.052-1.052-1.052h-7.285v-4.319h6.02c4.461,0,8.091-3.629,8.091-8.09v-1.281
					C44.401,13.854,40.771,10.218,36.31,10.218z M42.298,18.357v1.281c0,3.31-2.693,6.003-6.004,6.003h-6.004V12.353h6.004
					C39.605,12.353,42.298,15.046,42.298,18.357z"/>
			</g>
		</symbol>
		<symbol id="ic-fix" viewbox="0 0 61.112 56.893">
			<title>Fix</title>
			<g>
				<path fill="#66645F" d="M8.646,26.561c0.78,0,1.513-0.303,2.062-0.852l3.044-3.045l5.791,5.79c0.336,0.335,0.922,0.336,1.258-0.001
					c0.347-0.347,0.347-0.911,0-1.258l-6.42-6.419c-0.312-0.312-0.946-0.311-1.258,0l-3.673,3.675c-0.287,0.287-0.627,0.33-0.804,0.33
					s-0.518-0.043-0.805-0.331l-5.731-5.733c-0.287-0.287-0.33-0.627-0.33-0.803c0-0.177,0.043-0.517,0.33-0.805L16.439,2.78
					c0.564-0.564,1.817-0.954,2.618-0.793L29.77,4.129l-7.863,7.864c-0.165,0.165-0.261,0.395-0.261,0.629
					c0,0.237,0.093,0.461,0.261,0.629l6.287,6.287c0.336,0.335,0.922,0.336,1.258,0c0.168-0.169,0.261-0.393,0.261-0.63
					s-0.093-0.461-0.261-0.629l-5.658-5.657l6.979-6.979c0.615-0.615,0.852-1.35,0.65-2.015c-0.202-0.666-0.807-1.146-1.661-1.315
					L19.406,0.242c-0.236-0.048-0.489-0.071-0.756-0.071c-1.267,0-2.661,0.543-3.469,1.351l-14.33,14.33
					C0.303,16.401,0,17.134,0,17.914s0.302,1.513,0.852,2.062l5.731,5.733C7.133,26.259,7.865,26.561,8.646,26.561z"/>
				<path fill="#66645F" d="M43.051,31.882c-0.336-0.336-0.922-0.336-1.258,0c-0.168,0.168-0.262,0.392-0.262,0.629
					s0.094,0.461,0.262,0.629l13.971,13.97c0.371,0.371,0.512,0.97,0.387,1.642c-0.121,0.658-0.488,1.319-1.031,1.862l-3.377,3.377
					c-0.684,0.684-1.533,1.076-2.328,1.076c-0.48,0-0.898-0.153-1.176-0.432L34.545,40.943c-0.168-0.169-0.391-0.261-0.629-0.261
					c-0.236,0-0.461,0.092-0.629,0.261c-0.168,0.167-0.26,0.391-0.26,0.629c0,0.237,0.092,0.461,0.26,0.629l13.693,13.691
					c0.617,0.617,1.455,0.944,2.422,0.944c1.277,0,2.588-0.579,3.598-1.588l3.379-3.377c1.836-1.838,2.125-4.538,0.643-6.021
					L43.051,31.882z"/>
				<path fill="#66645F" d="M60.125,8.316c-0.115-0.273-0.357-0.472-0.648-0.528c-0.289-0.057-0.596,0.039-0.801,0.244l-5.607,5.608
					c-0.561,0.558-1.609,0.557-2.166-0.001l-3.426-3.424c-0.289-0.289-0.447-0.675-0.447-1.084c0-0.408,0.158-0.793,0.447-1.083
					l5.607-5.607c0.211-0.21,0.301-0.51,0.244-0.801s-0.254-0.534-0.527-0.648C51.233,0.334,49.614,0,47.987,0
					c-2.834,0-5.438,1.043-7.332,2.938c-2.783,2.782-3.67,6.895-2.377,11.001l0.082,0.257L18.595,33.961l-0.247-0.065
					c-1.027-0.273-2.074-0.411-3.11-0.411c-2.837,0-5.446,1.046-7.345,2.944c-3.016,3.015-3.779,7.783-1.947,12.147
					c0.115,0.273,0.357,0.471,0.648,0.528c0.297,0.057,0.593-0.035,0.801-0.244l5.609-5.609c0.278-0.278,0.673-0.438,1.083-0.438
					s0.805,0.16,1.083,0.439l3.424,3.425c0.29,0.289,0.449,0.675,0.449,1.083c0,0.41-0.16,0.794-0.45,1.083l-5.606,5.608
					c-0.209,0.21-0.301,0.509-0.243,0.801c0.058,0.291,0.255,0.533,0.528,0.648c1.565,0.658,3.186,0.992,4.813,0.992
					c2.834,0,5.438-1.044,7.333-2.939c2.885-2.884,3.728-7.301,2.199-11.526l-0.096-0.266l19.401-19.402l0.256,0.081
					c1.201,0.377,2.432,0.568,3.656,0.568c2.838,0,5.447-1.046,7.346-2.944C61.196,17.448,61.959,12.681,60.125,8.316z M56.922,19.205
					c-1.562,1.563-3.725,2.424-6.088,2.424c-1.281,0-2.566-0.246-3.818-0.73c-0.326-0.126-0.705-0.046-0.951,0.2L25.841,41.324
					c-0.258,0.258-0.332,0.654-0.185,0.988c1.65,3.748,1.062,7.823-1.497,10.383c-1.559,1.559-3.716,2.418-6.074,2.418
					c-0.675,0-1.366-0.072-2.056-0.213l-0.81-0.165l4.631-4.634c0.626-0.624,0.972-1.456,0.973-2.342c0-0.885-0.345-1.717-0.971-2.342
					l-3.424-3.424c-0.626-0.626-1.457-0.972-2.342-0.972c-0.886,0-1.717,0.346-2.341,0.971L7.11,46.628l-0.165-0.812
					c-0.625-3.085,0.199-6.124,2.206-8.13c1.562-1.562,3.724-2.424,6.086-2.424c1.108,0,2.227,0.187,3.323,0.553
					c0.318,0.106,0.676,0.021,0.911-0.215L40.02,15.053c0.248-0.249,0.328-0.622,0.201-0.95c-1.414-3.652-0.768-7.448,1.691-9.906
					c2.006-2.005,5.033-2.839,8.131-2.204l0.809,0.165L46.221,6.79c-0.627,0.626-0.971,1.457-0.971,2.342s0.344,1.717,0.969,2.343
					l3.426,3.423c0.625,0.626,1.457,0.971,2.342,0.971c0.883,0,1.715-0.344,2.34-0.97l4.635-4.635l0.164,0.812
					C59.752,14.16,58.928,17.199,56.922,19.205z"/>
			</g>
		</symbol>
		<symbol id="ic-gift" viewbox="0 0 47.756 59.093">
			<title>Gift</title>
			<g>
				<path fill="#66645F" d="M43.583,16.653h-6.908c2.15-0.835,3.994-1.739,4.912-2.628c3.233-3.131,3.316-8.308,0.186-11.541
					C40.221,0.883,38.139,0,35.909,0c-2.131,0-4.146,0.816-5.676,2.298c-2.465,2.385-5.249,11.399-6.355,15.254
					c-1.092-3.782-3.905-12.884-6.353-15.254C15.994,0.816,13.978,0,11.848,0c-2.23,0-4.313,0.883-5.864,2.484
					c-3.13,3.234-3.046,8.411,0.187,11.541c0.918,0.889,2.761,1.793,4.913,2.628H4.174C1.873,16.653,0,18.525,0,20.827v11.729
					c0,0.49,0.399,0.89,0.89,0.89h13.562c0.49,0,0.89-0.399,0.89-0.89s-0.399-0.89-0.89-0.89H1.78V20.827
					c0-1.32,1.074-2.395,2.395-2.395h12.152c0.006,0,0.011-0.003,0.018-0.004c2.624,0.788,5.023,1.396,6.234,1.69
					c-0.092,3.067-1.061,15.647-10.664,18.145c-0.475,0.123-0.761,0.609-0.638,1.085c0.102,0.392,0.456,0.665,0.86,0.665
					c0.077,0,0.152-0.009,0.224-0.028c8.429-2.191,10.95-10.745,11.698-16.12c0.377,5.999,1.752,18.017,6.764,22.881
					c1.492,1.449,3.209,2.183,5.104,2.183l0.157-0.001c0.238-0.005,0.46-0.103,0.624-0.274s0.252-0.396,0.247-0.635
					c-0.01-0.48-0.403-0.871-0.878-0.871l-0.157,0.002c-1.431,0-2.691-0.549-3.856-1.68c-6.122-5.941-6.365-24.928-6.367-25.119
					c-0.001-0.121-0.027-0.236-0.072-0.341c1.34-0.332,3.586-0.914,6.004-1.646c0.105,0.043,0.219,0.068,0.338,0.068h11.617
					c1.32,0,2.395,1.074,2.395,2.395v10.839H31.653c-0.49,0-0.889,0.399-0.889,0.89s0.398,0.89,0.889,0.89h15.213
					c0.49,0,0.891-0.399,0.891-0.89V20.827C47.756,18.525,45.883,16.653,43.583,16.653z M21.834,18.099
					c-2.838-0.727-12.266-3.261-14.425-5.352C4.88,10.3,4.814,6.251,7.262,3.723c1.213-1.253,2.842-1.943,4.586-1.943
					c1.666,0,3.242,0.639,4.439,1.797c2.16,2.092,4.998,11.433,5.816,14.245l0.108,0.375L21.834,18.099z M25.544,18.196l0.108-0.375
					c0.818-2.812,3.656-12.153,5.818-14.245c1.195-1.158,2.771-1.797,4.438-1.797c1.744,0,3.373,0.69,4.586,1.943
					c2.447,2.528,2.383,6.576-0.146,9.024c-2.158,2.09-11.588,4.625-14.426,5.352L25.544,18.196z"/>
				<path fill="#66645F" d="M42.656,33.7c-0.491,0-0.89,0.399-0.89,0.89v20.931c0,0.988-0.805,1.793-1.793,1.793H7.784
					c-0.989,0-1.793-0.805-1.793-1.793V34.59c0-0.49-0.399-0.89-0.89-0.89c-0.49,0-0.89,0.399-0.89,0.89v20.931
					c0,1.97,1.603,3.572,3.573,3.572h32.189c1.97,0,3.572-1.603,3.572-3.572V34.59C43.545,34.1,43.146,33.7,42.656,33.7z"/>
			</g>
		</symbol>
		<symbol id="ic-steering-wheel-thin" viewbox="0 0 74 74">
			<title>Steering wheel thin</title>
			<path d="M36.76,72.84a36,36,0,1,1,36-36,36.08,36.08,0,0,1-36,36m0-69.07a33,33,0,1,0,33,33,33.07,33.07,0,0,0-33-33m0,41.54a8.5,8.5,0,1,1,8.5-8.5,8.51,8.51,0,0,1-8.5,8.5m0-14a5.5,5.5,0,1,0,5.5,5.5,5.51,5.51,0,0,0-5.5-5.5"/><path d="M36.76,72.84a36,36,0,1,1,36-36A36.08,36.08,0,0,1,36.76,72.84Zm0-69.07a33,33,0,1,0,33,33A33.07,33.07,0,0,0,36.76,3.77Zm0,41.54a8.5,8.5,0,1,1,8.5-8.5A8.51,8.51,0,0,1,36.76,45.3Zm0-14a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,36.76,31.3Z"/><rect x="2.35" y="37.69" width="27.62" height="3" transform="translate(-6.52 3.38) rotate(-9.94)"/><rect x="2.35" y="37.69" width="27.62" height="3" transform="translate(-6.52 3.38) rotate(-9.94)"/><rect x="55.86" y="25.38" width="3" height="27.62" transform="translate(8.85 88.91) rotate(-80.05)"/><rect x="55.86" y="25.38" width="3" height="27.62" transform="translate(8.85 88.91) rotate(-80.05)"/><rect x="35.26" y="43.8" width="3" height="27.53"/><rect x="35.26" y="43.8" width="3" height="27.53"/>
		</symbol>
		<symbol id="ic-key" viewbox="0 0 74 74">
			<title>Key</title>
			<path d="M39,48.46l8.34-8.34,1.15,1.15-0.12,2.56,5.37,5.37-0.14,7.12,7.35-1.18-1,7.72L65,62.21l3,3,0.17,4.48-4.42.16L43,49.1l-3.16.24Zm-4.24,0,4,4,3.17-.24L62.54,72.86l8.72-.32-0.32-8.66-4.83-4.83-2.71.34,1-7.86-7.75,1.25,0.1-4.8L51.4,42.63l0.12-2.56-4.21-4.21Z"/><path d="M62.54,72.86L41.88,52.2l-3.17.24-4-4L47.32,35.87l4.21,4.21L51.4,42.63,56.74,48l-0.1,4.8,7.75-1.25-1,7.86,2.71-.34,4.83,4.83,0.32,8.66ZM43,49.1L63.74,69.82l4.42-.16L68,65.17l-3-3-5.08.64,1-7.72-7.34,1.18,0.14-7.12-5.37-5.37,0.12-2.56-1.15-1.15L39,48.46l0.89,0.89Z"/><path d="M37.17,9.32a9.75,9.75,0,0,1,2.73,1.92l2.89,2.89a9.8,9.8,0,0,1,2.43,4L49.1,30.79h0a9.75,9.75,0,0,1-2.43,9.79l-6.34,6.34a9.76,9.76,0,0,1-9.79,2.43L17.92,45.46a9.83,9.83,0,0,1-4-2.43L11,40.14a9.71,9.71,0,0,1-1.92-2.73L3.42,25.48a9.79,9.79,0,0,1,1.92-11.1l8.79-8.79A9.79,9.79,0,0,1,25.23,3.67M23.95,6.38a6.78,6.78,0,0,0-7.69,1.33L7.47,16.51A6.79,6.79,0,0,0,6.14,24.2l5.65,11.93A6.75,6.75,0,0,0,13.12,38L16,40.91a6.78,6.78,0,0,0,2.79,1.68l12.63,3.89a6.76,6.76,0,0,0,6.78-1.68l6.34-6.34a6.76,6.76,0,0,0,1.68-6.78h0L42.35,19.05a6.78,6.78,0,0,0-1.68-2.79l-2.89-2.89A6.75,6.75,0,0,0,35.88,12M14.71,27.16a5.63,5.63,0,0,1-4-9.61L17.3,11a5.63,5.63,0,1,1,8,8l-6.57,6.57a5.61,5.61,0,0,1-4,1.65m6.57-14.83a2.61,2.61,0,0,0-1.86.77l-6.57,6.57a2.63,2.63,0,0,0,3.72,3.72l6.57-6.57a2.63,2.63,0,0,0-1.86-4.49"/><path d="M37.17,9.32a9.75,9.75,0,0,1,2.73,1.92l2.89,2.89a9.8,9.8,0,0,1,2.43,4L49.1,30.79h0a9.75,9.75,0,0,1-2.43,9.79l-6.34,6.34a9.76,9.76,0,0,1-9.79,2.43L17.92,45.46a9.83,9.83,0,0,1-4-2.43L11,40.14a9.71,9.71,0,0,1-1.92-2.73L3.42,25.48a9.79,9.79,0,0,1,1.92-11.1l8.79-8.79A9.79,9.79,0,0,1,25.23,3.67M23.95,6.38a6.78,6.78,0,0,0-7.69,1.33L7.47,16.51A6.79,6.79,0,0,0,6.14,24.2l5.65,11.93A6.75,6.75,0,0,0,13.12,38L16,40.91a6.78,6.78,0,0,0,2.79,1.68l12.63,3.89a6.76,6.76,0,0,0,6.78-1.68l6.34-6.34a6.76,6.76,0,0,0,1.68-6.78h0L42.35,19.05a6.78,6.78,0,0,0-1.68-2.79l-2.89-2.89A6.75,6.75,0,0,0,35.88,12M14.71,27.16a5.63,5.63,0,0,1-4-9.61L17.3,11a5.63,5.63,0,1,1,8,8l-6.57,6.57A5.61,5.61,0,0,1,14.71,27.16Zm6.57-14.83a2.61,2.61,0,0,0-1.86.77l-6.57,6.57a2.63,2.63,0,0,0,3.72,3.72l6.57-6.57A2.63,2.63,0,0,0,21.28,12.33Z"/>
		</symbol>
		<symbol id="ic-shield" viewbox="0 0 74 74">
			<title>Shield</title>
			<path d="M26.3,40.41A4.28,4.28,0,1,1,22,44.69a4.28,4.28,0,0,1,4.28-4.28m0-1.69a6,6,0,1,0,6,6,6,6,0,0,0-6-6m21.09,1.75a4.28,4.28,0,1,1-4.28,4.28,4.28,4.28,0,0,1,4.28-4.28m0-1.69a6,6,0,1,0,6,6,6,6,0,0,0-6-6M44,27.14a6.48,6.48,0,0,1,4.06,1.73L55,36.11a6.9,6.9,0,0,1,1.66,4.13v2.33a2.41,2.41,0,0,1-2.4,2.4h-0.6a6.28,6.28,0,1,0-12.56,0H32.58A6.28,6.28,0,0,0,20,44.87a2.41,2.41,0,0,1-1.71-2.3v-13a2.41,2.41,0,0,1,2.4-2.4H44Zm-7.58-4.26h0m-3.91,2.57H20.71a4.1,4.1,0,0,0-4.09,4.09v13a4.12,4.12,0,0,0,2.92,3.92l2.14,0.65,0-2.24a4.59,4.59,0,0,1,9.17.08v1.69H42.81V45A4.59,4.59,0,1,1,52,45v1.69h2.29a4.1,4.1,0,0,0,4.09-4.09V40.24a8.55,8.55,0,0,0-2.13-5.31L49.29,27.7A8.15,8.15,0,0,0,44,25.45H32.52ZM71.36,13.12a0.93,0.93,0,0,0-.87-0.8c-22.65-.07-32.23-10.89-32.3-11a0.89,0.89,0,0,0-1.38,0c-0.15.07-9.66,10.89-32.38,10.89a0.87,0.87,0,0,0-.87.8,102,102,0,0,0,0,18.58C4.43,41.14,7,54.28,14.81,63c5.66,6.32,13.28,9.58,22.65,9.58s17-3.19,22.65-9.58c7.77-8.71,10.38-21.85,11.25-31.29a94.49,94.49,0,0,0,0-18.58M58.73,61.75c-5.3,6-12.49,8.93-21.27,8.93s-16-3-21.27-8.93C3.12,47.24,4.86,19.21,5.23,14.06,25,13.84,34.92,5.78,37.46,3.24,40,5.78,49.87,13.84,69.69,14.06c0.36,5.15,2.11,33.18-11,47.69"/><path d="M37.46,73.07c-9.48,0-17.22-3.28-23-9.75-7.81-8.76-10.5-22-11.38-31.65a103.1,103.1,0,0,1,0-18.59,1.39,1.39,0,0,1,1.38-1.34c19.76,0,29.43-8.15,31.92-10.64l0.1-.1a1.4,1.4,0,0,1,1-.47h0A1.4,1.4,0,0,1,38.57,1c1,1.09,10.48,10.71,31.92,10.78A1.43,1.43,0,0,1,71.85,13h0c0.36,1.63.87,9.84,0,18.7C71,41.32,68.28,54.57,60.48,63.32,54.75,69.79,47,73.07,37.46,73.07ZM37.1,1.77l0,0C34.49,4.38,24.57,12.75,4.43,12.75a0.39,0.39,0,0,0-.37.3v0.14a102,102,0,0,0,0,18.4C4.92,41,7.56,54.1,15.18,62.66c5.6,6.25,13.1,9.42,22.28,9.42S54.2,68.9,59.73,62.66c7.62-8.55,10.26-21.58,11.13-31a99.14,99.14,0,0,0,0-18.29h0l0-.16a0.43,0.43,0,0,0-.38-0.38c-21.87-.07-31.62-10-32.66-11.11a0.43,0.43,0,0,0-.33-0.18h0a0.39,0.39,0,0,0-.31.15Zm0.36,69.41c-9,0-16.27-3.06-21.64-9.1C3.7,48.63,4,24,4.73,14l0-.46H5.22c20.41-.22,30.14-8.93,31.88-10.67l0.35-.35,0.35,0.35C39.56,4.63,49.28,13.34,69.7,13.56h0.46l0,0.46c0.7,10,1,34.6-11.09,48.06C53.73,68.12,46.45,71.18,37.46,71.18ZM5.7,14.55C5,24.67,4.88,48.44,16.56,61.42c5.18,5.82,12.21,8.76,20.9,8.76s15.72-2.95,20.9-8.76h0C70,48.44,69.89,24.67,69.22,14.55,49.83,14.22,40,6.29,37.46,3.94,35,6.29,25.09,14.22,5.7,14.55Zm41.7,36.66a6.48,6.48,0,0,1-6-4.05H32.28a6.47,6.47,0,0,1-11.92.1l-1-.29a4.62,4.62,0,0,1-3.27-4.4v-13A4.6,4.6,0,0,1,20.72,25H44a8.7,8.7,0,0,1,5.65,2.41l6.94,7.23a9.11,9.11,0,0,1,2.27,5.65v2.33a4.6,4.6,0,0,1-4.59,4.59H53.4A6.48,6.48,0,0,1,47.39,51.22Zm-4.91-4.05a5.47,5.47,0,0,0,9.81,0H51.51a4.78,4.78,0,0,1-8.24,0H42.49Zm-20.78.5a5.47,5.47,0,0,0,9.46-.5H30.39a4.78,4.78,0,0,1-8.21-.05V47.8ZM47.39,41a3.78,3.78,0,1,0,3.78,3.78A3.78,3.78,0,0,0,47.39,41ZM26.3,40.91a3.78,3.78,0,1,0,3.78,3.78A3.78,3.78,0,0,0,26.3,40.91Zm-5.18,5.53,0.07,0,0-1.58A5.09,5.09,0,0,1,31.39,45v1.19h0.18A5.47,5.47,0,1,0,21.12,46.44Zm32.59-.28h0.57a3.6,3.6,0,0,0,3.59-3.59V40.24a8.12,8.12,0,0,0-2-5l-6.94-7.23A7.71,7.71,0,0,0,44,26H20.72a3.6,3.6,0,0,0-3.59,3.59v13A3.62,3.62,0,0,0,19.68,46L20,46.1a6.48,6.48,0,0,1-.12-0.76,2.92,2.92,0,0,1-2-2.77v-13a2.91,2.91,0,0,1,2.9-2.9H44a6.92,6.92,0,0,1,4.42,1.89l6.94,7.23a7.34,7.34,0,0,1,1.8,4.48v2.33a2.9,2.9,0,0,1-2.9,2.9H53.83A6.48,6.48,0,0,1,53.71,46.16Zm-1.23,0h0.2a5.47,5.47,0,1,0-10.57,0h0.2V45a5.09,5.09,0,1,1,10.18,0v1.19Zm-19.88,0h8.48A6.48,6.48,0,0,1,41,45.47H32.72A6.26,6.26,0,0,1,32.6,46.16Zm21.56-1.69h0.12a1.9,1.9,0,0,0,1.9-1.9V40.24a6.41,6.41,0,0,0-1.52-3.79l-6.94-7.23A6,6,0,0,0,44,27.64H20.72a1.9,1.9,0,0,0-1.9,1.9v13a1.91,1.91,0,0,0,.77,1.52,6.78,6.78,0,0,1,13.48.38h7.57A6.78,6.78,0,0,1,54.16,44.47Z"/><path d="M26.3,40.41A4.28,4.28,0,1,1,22,44.69a4.28,4.28,0,0,1,4.28-4.28m0-1.69a6,6,0,1,0,6,6A6,6,0,0,0,26.3,38.72Zm21.09,1.75a4.28,4.28,0,1,1-4.28,4.28,4.28,4.28,0,0,1,4.28-4.28m0-1.69a6,6,0,1,0,6,6A6,6,0,0,0,47.39,38.78ZM44,27.14a6.48,6.48,0,0,1,4.06,1.73L55,36.11a6.9,6.9,0,0,1,1.66,4.13v2.33a2.41,2.41,0,0,1-2.4,2.4h-0.6a6.28,6.28,0,1,0-12.56,0H32.58A6.28,6.28,0,0,0,20,44.87a2.41,2.41,0,0,1-1.71-2.3v-13a2.41,2.41,0,0,1,2.4-2.4H44Zm-7.58-4.26h0m-3.91,2.57H20.71a4.1,4.1,0,0,0-4.09,4.09v13a4.12,4.12,0,0,0,2.92,3.92l2.14,0.65,0-2.24a4.59,4.59,0,0,1,9.17.08v1.69H42.81V45A4.59,4.59,0,1,1,52,45v1.69h2.29a4.1,4.1,0,0,0,4.09-4.09V40.24a8.55,8.55,0,0,0-2.13-5.31L49.29,27.7A8.15,8.15,0,0,0,44,25.45H32.52ZM71.36,13.12a0.93,0.93,0,0,0-.87-0.8c-22.65-.07-32.23-10.89-32.3-11a0.89,0.89,0,0,0-1.38,0c-0.15.07-9.66,10.89-32.38,10.89a0.87,0.87,0,0,0-.87.8,102,102,0,0,0,0,18.58C4.43,41.14,7,54.28,14.81,63c5.66,6.32,13.28,9.58,22.65,9.58s17-3.19,22.65-9.58c7.77-8.71,10.38-21.85,11.25-31.29A94.49,94.49,0,0,0,71.36,13.12ZM58.73,61.75c-5.3,6-12.49,8.93-21.27,8.93s-16-3-21.27-8.93C3.12,47.24,4.86,19.21,5.23,14.06,25,13.84,34.92,5.78,37.46,3.24,40,5.78,49.87,13.84,69.69,14.06,70.05,19.21,71.8,47.24,58.73,61.75Z"/><path d="M37.46,73.07c-9.48,0-17.22-3.28-23-9.75-7.81-8.76-10.5-22-11.38-31.65a103.1,103.1,0,0,1,0-18.59,1.39,1.39,0,0,1,1.38-1.34c19.76,0,29.43-8.15,31.92-10.64l0.1-.1a1.4,1.4,0,0,1,1-.47h0A1.4,1.4,0,0,1,38.57,1c1,1.09,10.48,10.71,31.92,10.78A1.43,1.43,0,0,1,71.85,13h0c0.36,1.63.87,9.84,0,18.7C71,41.32,68.28,54.57,60.48,63.32,54.75,69.79,47,73.07,37.46,73.07ZM37.1,1.77l0,0C34.49,4.38,24.57,12.75,4.43,12.75a0.39,0.39,0,0,0-.37.3v0.14a102,102,0,0,0,0,18.4C4.92,41,7.56,54.1,15.18,62.66c5.6,6.25,13.1,9.42,22.28,9.42S54.2,68.9,59.73,62.66c7.62-8.55,10.26-21.58,11.13-31a99.14,99.14,0,0,0,0-18.29h0l0-.16a0.43,0.43,0,0,0-.38-0.38c-21.87-.07-31.62-10-32.66-11.11a0.43,0.43,0,0,0-.33-0.18h0a0.39,0.39,0,0,0-.31.15Zm0.36,69.41c-9,0-16.27-3.06-21.64-9.1C3.7,48.63,4,24,4.73,14l0-.46H5.22c20.41-.22,30.14-8.93,31.88-10.67l0.35-.35,0.35,0.35C39.56,4.63,49.28,13.34,69.7,13.56h0.46l0,0.46c0.7,10,1,34.6-11.09,48.06C53.73,68.12,46.45,71.18,37.46,71.18ZM5.7,14.55C5,24.67,4.88,48.44,16.56,61.42c5.18,5.82,12.21,8.76,20.9,8.76s15.72-2.95,20.9-8.76h0C70,48.44,69.89,24.67,69.22,14.55,49.83,14.22,40,6.29,37.46,3.94,35,6.29,25.09,14.22,5.7,14.55Zm41.7,36.66a6.48,6.48,0,0,1-6-4.05H32.28a6.47,6.47,0,0,1-11.92.1l-1-.29a4.62,4.62,0,0,1-3.27-4.4v-13A4.6,4.6,0,0,1,20.72,25H44a8.7,8.7,0,0,1,5.65,2.41l6.94,7.23a9.11,9.11,0,0,1,2.27,5.65v2.33a4.6,4.6,0,0,1-4.59,4.59H53.4A6.48,6.48,0,0,1,47.39,51.22Zm-4.91-4.05a5.47,5.47,0,0,0,9.81,0H51.51a4.78,4.78,0,0,1-8.24,0H42.49Zm-20.78.5a5.47,5.47,0,0,0,9.46-.5H30.39a4.78,4.78,0,0,1-8.21-.05V47.8ZM47.39,41a3.78,3.78,0,1,0,3.78,3.78A3.78,3.78,0,0,0,47.39,41ZM26.3,40.91a3.78,3.78,0,1,0,3.78,3.78A3.78,3.78,0,0,0,26.3,40.91Zm-5.18,5.53,0.07,0,0-1.58A5.09,5.09,0,0,1,31.39,45v1.19h0.18A5.47,5.47,0,1,0,21.12,46.44Zm32.59-.28h0.57a3.6,3.6,0,0,0,3.59-3.59V40.24a8.12,8.12,0,0,0-2-5l-6.94-7.23A7.71,7.71,0,0,0,44,26H20.72a3.6,3.6,0,0,0-3.59,3.59v13A3.62,3.62,0,0,0,19.68,46L20,46.1a6.48,6.48,0,0,1-.12-0.76,2.92,2.92,0,0,1-2-2.77v-13a2.91,2.91,0,0,1,2.9-2.9H44a6.92,6.92,0,0,1,4.42,1.89l6.94,7.23a7.34,7.34,0,0,1,1.8,4.48v2.33a2.9,2.9,0,0,1-2.9,2.9H53.83A6.48,6.48,0,0,1,53.71,46.16Zm-1.23,0h0.2a5.47,5.47,0,1,0-10.57,0h0.2V45a5.09,5.09,0,1,1,10.18,0v1.19Zm-19.88,0h8.48A6.48,6.48,0,0,1,41,45.47H32.72A6.26,6.26,0,0,1,32.6,46.16Zm21.56-1.69h0.12a1.9,1.9,0,0,0,1.9-1.9V40.24a6.41,6.41,0,0,0-1.52-3.79l-6.94-7.23A6,6,0,0,0,44,27.64H20.72a1.9,1.9,0,0,0-1.9,1.9v13a1.91,1.91,0,0,0,.77,1.52,6.78,6.78,0,0,1,13.48.38h7.57A6.78,6.78,0,0,1,54.16,44.47Z"/>
		</symbol>
		<symbol id="ic-fix-w-gear" viewbox="0 0 74 74">
			<title>Fix with gear</title>
			<path d="M38,3a33.89,33.89,0,0,1,6.42.62L48,12a26.68,26.68,0,0,1,7.16,4.28l9-.85A33.72,33.72,0,0,1,70,25.74L64.48,33a26.45,26.45,0,0,1-.12,8.33l5.26,7.41A33.79,33.79,0,0,1,63.52,58.9l-9-1.12a26.68,26.68,0,0,1-7.28,4.07L43.45,70.1a33.72,33.72,0,0,1-11.85-.18l-3.54-8.36a26.66,26.66,0,0,1-7.16-4.28l-9,.85A33.72,33.72,0,0,1,6.08,47.79l5.47-7.25a26.45,26.45,0,0,1,.12-8.33L6.42,24.79a33.76,33.76,0,0,1,6.09-10.17l9,1.11a26.67,26.67,0,0,1,7.28-4.07l3.78-8.25A34.05,34.05,0,0,1,38,3m0-2.75a36.91,36.91,0,0,0-5.87.48,2.75,2.75,0,0,0-2.06,1.57L26.76,9.51a29.33,29.33,0,0,0-6,3.36l-7.91-1-0.34,0a2.75,2.75,0,0,0-2.08.95,36.39,36.39,0,0,0-6.58,11,2.75,2.75,0,0,0,.33,2.56L8.8,32.89a29,29,0,0,0-.1,6.88l-4.8,6.36a2.75,2.75,0,0,0-.41,2.55,36.36,36.36,0,0,0,6.25,11.2,2.75,2.75,0,0,0,2.13,1h0.26l7.93-.74A29.39,29.39,0,0,0,26,63.66L29.07,71a2.75,2.75,0,0,0,2,1.63,36.46,36.46,0,0,0,12.81.19A2.75,2.75,0,0,0,46,71.25L49.27,64a29.35,29.35,0,0,0,6-3.36l7.91,1,0.34,0a2.75,2.75,0,0,0,2.07-.95,36.38,36.38,0,0,0,6.59-11,2.75,2.75,0,0,0-.33-2.56l-4.62-6.51a29,29,0,0,0,.1-6.88l4.8-6.36a2.75,2.75,0,0,0,.4-2.55,36.34,36.34,0,0,0-6.25-11.2,2.75,2.75,0,0,0-2.13-1H63.92L56,13.39a29.36,29.36,0,0,0-5.91-3.53L47,2.52A2.75,2.75,0,0,0,45,.89,36.82,36.82,0,0,0,38,.23"/><path d="M38,3a33.89,33.89,0,0,1,6.42.62L48,12a26.68,26.68,0,0,1,7.16,4.28l9-.85A33.72,33.72,0,0,1,70,25.74L64.48,33a26.45,26.45,0,0,1-.12,8.33l5.26,7.41A33.79,33.79,0,0,1,63.52,58.9l-9-1.12a26.68,26.68,0,0,1-7.28,4.07L43.45,70.1a33.72,33.72,0,0,1-11.85-.18l-3.54-8.36a26.66,26.66,0,0,1-7.16-4.28l-9,.85A33.72,33.72,0,0,1,6.08,47.79l5.47-7.25a26.45,26.45,0,0,1,.12-8.33L6.42,24.79a33.76,33.76,0,0,1,6.09-10.17l9,1.11a26.67,26.67,0,0,1,7.28-4.07l3.78-8.25A34.05,34.05,0,0,1,38,3m0-2.75a36.91,36.91,0,0,0-5.87.48,2.75,2.75,0,0,0-2.06,1.57L26.76,9.51a29.33,29.33,0,0,0-6,3.36l-7.91-1-0.34,0a2.75,2.75,0,0,0-2.08.95,36.39,36.39,0,0,0-6.58,11,2.75,2.75,0,0,0,.33,2.56L8.8,32.89a29,29,0,0,0-.1,6.88l-4.8,6.36a2.75,2.75,0,0,0-.41,2.55,36.36,36.36,0,0,0,6.25,11.2,2.75,2.75,0,0,0,2.13,1h0.26l7.93-.74A29.39,29.39,0,0,0,26,63.66L29.07,71a2.75,2.75,0,0,0,2,1.63,36.46,36.46,0,0,0,12.81.19A2.75,2.75,0,0,0,46,71.25L49.27,64a29.35,29.35,0,0,0,6-3.36l7.91,1,0.34,0a2.75,2.75,0,0,0,2.07-.95,36.38,36.38,0,0,0,6.59-11,2.75,2.75,0,0,0-.33-2.56l-4.62-6.51a29,29,0,0,0,.1-6.88l4.8-6.36a2.75,2.75,0,0,0,.4-2.55,36.34,36.34,0,0,0-6.25-11.2,2.75,2.75,0,0,0-2.13-1H63.92L56,13.39a29.36,29.36,0,0,0-5.91-3.53L47,2.52A2.75,2.75,0,0,0,45,.89,36.82,36.82,0,0,0,38,.23Z"/><path d="M42.49,21.06a10,10,0,0,1,2.34.25L37,28.81l4.52,4.62,0,0,4.39,4.3,7.68-7.64a11.57,11.57,0,0,1-3,10.13c-3,3.16-7.62,3.64-10.15,3.64a15.51,15.51,0,0,1-1.84-.1l-9.16,8.64a15.11,15.11,0,0,1-7.11-7.85L30.79,36S30,28.39,34.63,24.11a11.46,11.46,0,0,1,7.86-3m0-2.75h0a14.16,14.16,0,0,0-9.72,3.77C28.41,26.09,28,32.21,28,34.94l-7.67,7.74a2.75,2.75,0,0,0-.6,2.95,17.83,17.83,0,0,0,8.41,9.28,2.75,2.75,0,0,0,3.15-.44l8.28-7.82,0.84,0c2.92,0,8.37-.58,12.13-4.48a14.34,14.34,0,0,0,3.73-12.69,2.75,2.75,0,0,0-4.61-1.3l-5.76,5.72-2.05-2a2.76,2.76,0,0,0-.32-0.39l-2.58-2.63,5.81-5.57a2.75,2.75,0,0,0-1.19-4.64,12.49,12.49,0,0,0-3.05-.34"/><path d="M42.49,21.06a10,10,0,0,1,2.34.25L37,28.81l4.52,4.62,0,0,4.39,4.3,7.68-7.64a11.57,11.57,0,0,1-3,10.13c-3,3.16-7.62,3.64-10.15,3.64a15.51,15.51,0,0,1-1.84-.1l-9.16,8.64a15.11,15.11,0,0,1-7.11-7.85L30.79,36S30,28.39,34.63,24.11a11.46,11.46,0,0,1,7.86-3m0-2.75h0a14.16,14.16,0,0,0-9.72,3.77C28.41,26.09,28,32.21,28,34.94l-7.67,7.74a2.75,2.75,0,0,0-.6,2.95,17.83,17.83,0,0,0,8.41,9.28,2.75,2.75,0,0,0,3.15-.44l8.28-7.82,0.84,0c2.92,0,8.37-.58,12.13-4.48a14.34,14.34,0,0,0,3.73-12.69,2.75,2.75,0,0,0-4.61-1.3l-5.76,5.72-2.05-2a2.76,2.76,0,0,0-.32-0.39l-2.58-2.63,5.81-5.57a2.75,2.75,0,0,0-1.19-4.64A12.49,12.49,0,0,0,42.49,18.31Z"/><path d="M38,10.19A26.57,26.57,0,1,1,11.45,36.76,26.57,26.57,0,0,1,38,10.19m0-2.75A29.32,29.32,0,1,0,67.34,36.76,29.35,29.35,0,0,0,38,7.44"/><path d="M38,10.19A26.57,26.57,0,1,1,11.45,36.76,26.57,26.57,0,0,1,38,10.19m0-2.75A29.32,29.32,0,1,0,67.34,36.76,29.35,29.35,0,0,0,38,7.44Z"/>
		</symbol>
		<symbol id="ic-gear" viewbox="0 0 74 74">
			<title>Gear</title>
			<path d="M65.3,17.22A5,5,0,0,1,64,20.64,1.74,1.74,0,0,0,63.66,23q1.18,2.69,2.24,5.43a1.79,1.79,0,0,0,1.93,1.46,5.14,5.14,0,0,1,4.84,4.93q0,2.29,0,4.57a5.11,5.11,0,0,1-4.8,5A1.76,1.76,0,0,0,66,45.73q-1.08,2.77-2.28,5.49a1.73,1.73,0,0,0,.3,2.33,5.1,5.1,0,0,1-.22,7.13q-1.48,1.5-3,3a5.12,5.12,0,0,1-7.08.17,1.74,1.74,0,0,0-2.33-.3c-1.84.81-3.69,1.58-5.56,2.31a1.72,1.72,0,0,0-1.35,1.77,5.1,5.1,0,0,1-5.07,4.92H35a5.08,5.08,0,0,1-5-4.61c-0.13-1.54-.32-1.68-1.77-2.23-1.74-.65-3.45-1.4-5.15-2.16a1.77,1.77,0,0,0-2.34.26,5.09,5.09,0,0,1-7.18-.24q-1.45-1.42-2.87-2.87a5.09,5.09,0,0,1-.19-7.12,1.75,1.75,0,0,0,.3-2.33c-0.81-1.84-1.57-3.7-2.31-5.56a1.72,1.72,0,0,0-1.72-1.32,5.06,5.06,0,0,1-5-5.17c0-1.4,0-2.8,0-4.21a5.11,5.11,0,0,1,4.9-5.09,1.72,1.72,0,0,0,1.77-1.36q1.09-2.8,2.3-5.56a1.74,1.74,0,0,0-.31-2.33,5.09,5.09,0,0,1,.19-7.07c1-1,2-2,3-3a5.1,5.1,0,0,1,7.07-.14,1.73,1.73,0,0,0,2.27.31q2.79-1.22,5.63-2.34A1.7,1.7,0,0,0,30,6.57a5.09,5.09,0,0,1,5.07-4.91h4.35a5.07,5.07,0,0,1,5.05,4.69c0.11,1.42.36,1.63,1.7,2.13,1.79,0.68,3.54,1.44,5.29,2.21a1.71,1.71,0,0,0,2.21-.25,5.11,5.11,0,0,1,7.29.25c1,1,1.92,1.91,2.87,2.87A4.91,4.91,0,0,1,65.3,17.22ZM57.23,61.68A6.27,6.27,0,0,0,58.4,61c1-.89,1.86-1.82,2.77-2.76a1.56,1.56,0,0,0,.05-2.41,5.26,5.26,0,0,1-.77-6.21,47.51,47.51,0,0,0,2.08-5,5.19,5.19,0,0,1,4.94-3.82,1.61,1.61,0,0,0,1.64-1.64c0-1.4,0-2.8,0-4.21a1.54,1.54,0,0,0-1.55-1.55,5.28,5.28,0,0,1-5.08-4,39.64,39.64,0,0,0-1.94-4.76c-1.22-2.49-1.07-4.35.7-6.45a1.53,1.53,0,0,0-.08-2.3q-1.39-1.43-2.82-2.82a1.55,1.55,0,0,0-2.35,0,5.23,5.23,0,0,1-6.27.75,38.78,38.78,0,0,0-4.74-2c-2.61-.88-3.82-2.29-4.06-5a1.61,1.61,0,0,0-1.67-1.61c-1.38,0-2.76,0-4.13,0A1.55,1.55,0,0,0,33.52,6.8a5.31,5.31,0,0,1-3.92,5,41.57,41.57,0,0,0-4.89,2,5.23,5.23,0,0,1-6.33-.73,1.55,1.55,0,0,0-2.35.07q-1.4,1.37-2.76,2.77a1.57,1.57,0,0,0,0,2.41A5.25,5.25,0,0,1,14,24.52a43,43,0,0,0-2,4.88,5.23,5.23,0,0,1-5,4,1.6,1.6,0,0,0-1.63,1.65c0,1.38,0,2.76,0,4.13a1.56,1.56,0,0,0,1.59,1.59,5.26,5.26,0,0,1,5,3.91,41.74,41.74,0,0,0,2,4.89,5.21,5.21,0,0,1-.7,6.27,1.57,1.57,0,0,0,.06,2.41q1.34,1.37,2.71,2.71a1.57,1.57,0,0,0,2.46,0,5.24,5.24,0,0,1,6-.77c1.74,0.83,3.54,1.57,5.36,2.22a5.18,5.18,0,0,1,3.63,4.77A1.64,1.64,0,0,0,35.31,69q2,0,3.91,0a1.58,1.58,0,0,0,1.72-1.68,5.31,5.31,0,0,1,3.82-5,47.19,47.19,0,0,0,5.09-2.09,5.24,5.24,0,0,1,6.21.77A7,7,0,0,0,57.23,61.68Z"/><path class="cls-1" d="M19.24,37a18,18,0,1,1,17.9,18.05A18,18,0,0,1,19.24,37Zm3.61,0a14.37,14.37,0,1,0,14.46-14.3A14.34,14.34,0,0,0,22.85,37Z"/>
		</symbol>
		<symbol id="ic-case" viewbox="0 0 74 74">
			<title>Case box</title>
			<path d="M63.23,67.52H11.47a8.8,8.8,0,0,1-8.79-8.79V25.09a8.8,8.8,0,0,1,8.79-8.79H63.23A8.8,8.8,0,0,1,72,25.09V58.72A8.8,8.8,0,0,1,63.23,67.52ZM11.47,19.29a5.8,5.8,0,0,0-5.79,5.79V58.72a5.8,5.8,0,0,0,5.79,5.79H63.23A5.8,5.8,0,0,0,69,58.72V25.09a5.8,5.8,0,0,0-5.79-5.79H11.47Z"/><path d="M49.43,19.29H25.27A3.32,3.32,0,0,1,22,16V8.47a3.32,3.32,0,0,1,3.32-3.32H49.43a3.32,3.32,0,0,1,3.32,3.32V16A3.32,3.32,0,0,1,49.43,19.29ZM25.27,8.15a0.32,0.32,0,0,0-.32.32V16a0.32,0.32,0,0,0,.32.32H49.43A0.32,0.32,0,0,0,49.75,16V8.47a0.32,0.32,0,0,0-.32-0.32H25.27Z"/><path d="M68.09,38.48H4.18a1.5,1.5,0,1,1,0-3H68.09A1.5,1.5,0,0,1,68.09,38.48Z"/><rect x="15.1" y="29.78" width="3" height="13.62"/><rect x="57.06" y="29.78" width="3" height="13.62"/>
		</symbol>
		<symbol id="ic-car-2" viewBox="0 0 74 74">
			<title>Car two</title>
			<path d="M61,28.75H13.08v-4l0.12-.22C15.79,20,18.91,15,23.27,14.82H50c4.81,0,7,3.81,10,9.08l0.79,1.38L61,25.5v3.26ZM15,26.81H59V26l-0.67-1.16c-2.9-5.05-4.65-8.1-8.33-8.1H23.32c-2.94.13-5.46,3.5-8.29,8.55v1.5Z"/><path d="M61.24,29H12.83V24.73L13,24.46c2.62-4.68,5.78-9.7,10.28-9.89H50c5,0,7.17,3.86,10.23,9.2l0.79,1.38,0.17,0.29V29Zm-47.91-.5H60.74V25.56l-0.1-.17L59.84,24c-3-5.2-5.14-9-9.8-9H23.27c-4.23.18-7.3,5.07-9.85,9.63l-0.09.16V28.5Zm46-1.44H14.77V25.24l0-.06c2.87-5.11,5.42-8.54,8.5-8.67H50c3.83,0,5.6,3.1,8.55,8.23L59.29,26v1.11Zm-44-.5H58.79V26.09L58.16,25c-2.85-5-4.58-8-8.11-8H23.32c-3,.13-5.64,4.09-8,8.36v1.19Z"/><path d="M53.26,16.92H20.81a1.11,1.11,0,0,1-.91-0.47,2.09,2.09,0,0,1-.07-1.77A5.66,5.66,0,0,1,25.54,11h23a5.66,5.66,0,0,1,5.71,3.66,2.09,2.09,0,0,1-.07,1.77A1.11,1.11,0,0,1,53.26,16.92ZM21.81,15H52.26c-0.41-.87-1.4-2-3.73-2h-23C23.2,13,22.22,14.1,21.81,15Z"/><path d="M53.26,17.17H20.81a1.35,1.35,0,0,1-1.12-.58,2.32,2.32,0,0,1-.1-2c0.83-2.4,3.05-3.83,5.94-3.83h23c2.89,0,5.11,1.43,5.94,3.83a2.33,2.33,0,0,1-.1,2A1.36,1.36,0,0,1,53.26,17.17ZM25.54,11.26a5.42,5.42,0,0,0-5.47,3.5,1.85,1.85,0,0,0,0,1.54,0.86,0.86,0,0,0,.71.37H53.26A0.86,0.86,0,0,0,54,16.3a1.9,1.9,0,0,0,0-1.54,5.42,5.42,0,0,0-5.47-3.5h-23Zm27.11,4H21.41l0.17-.36c0.46-1,1.53-2.16,4-2.16h23c2.56,0,3.58,1.35,4,2.16Zm-30.42-.5H51.84a3.61,3.61,0,0,0-3.31-1.52h-23A3.61,3.61,0,0,0,22.23,14.72Z"/><path d="M70.33,52.41H2.2V42.85c0-9.15,6.48-16,15.07-16H56.15c9,0,15.72,7.17,15.72,16.69v7.38A1.54,1.54,0,0,1,70.33,52.41ZM4.15,50.46H69.92v-7c0-8.41-5.92-14.75-13.77-14.75H17.27c-7.48,0-13.13,6.06-13.13,14.1v7.62Z"/><path d="M70.33,52.66H2V42.85c0-9.29,6.59-16.29,15.32-16.29H56.15c9.1,0,16,7.28,16,16.94v7.38A1.79,1.79,0,0,1,70.33,52.66Zm-67.88-.5H70.33a1.29,1.29,0,0,0,1.29-1.29V43.49c0-9.37-6.65-16.44-15.47-16.44H17.27c-8.45,0-14.82,6.79-14.82,15.79v9.31Zm67.72-1.44H3.9V42.85c0-8.18,5.75-14.35,13.38-14.35H56.15c8,0,14,6.45,14,15v7.22ZM4.4,50.21H69.67V43.49c0-8.26-5.81-14.5-13.52-14.5H17.27C9.93,29,4.4,35,4.4,42.85v7.37Z"/><path d="M12.19,29.24H6.79a3,3,0,0,1-3-3V25.88a3,3,0,0,1,3-3h5.4a3,3,0,0,1,3,3V26.2A3,3,0,0,1,12.19,29.24Zm-5.4-4.46A1.09,1.09,0,0,0,5.7,25.88V26.2A1.09,1.09,0,0,0,6.79,27.3h5.4a1.09,1.09,0,0,0,1.09-1.09V25.88a1.09,1.09,0,0,0-1.09-1.09H6.79Z"/><path d="M12.19,29.49H6.79A3.29,3.29,0,0,1,3.5,26.2V25.88a3.29,3.29,0,0,1,3.29-3.29h5.4a3.29,3.29,0,0,1,3.29,3.29V26.2A3.29,3.29,0,0,1,12.19,29.49Zm-5.4-6.4A2.79,2.79,0,0,0,4,25.88V26.2A2.79,2.79,0,0,0,6.79,29h5.4A2.79,2.79,0,0,0,15,26.2V25.88a2.79,2.79,0,0,0-2.79-2.79H6.79Zm5.4,4.46H6.79A1.34,1.34,0,0,1,5.45,26.2V25.88a1.34,1.34,0,0,1,1.34-1.34h5.4a1.34,1.34,0,0,1,1.34,1.34V26.2A1.34,1.34,0,0,1,12.19,27.55ZM6.79,25a0.84,0.84,0,0,0-.84.84V26.2a0.84,0.84,0,0,0,.84.84h5.4A0.84,0.84,0,0,0,13,26.2V25.88A0.84,0.84,0,0,0,12.19,25H6.79Z"/><path d="M67.16,29.24h-5.4a3,3,0,0,1-3-3V25.88a3,3,0,0,1,3-3h5.4a3,3,0,0,1,3,3V26.2A3,3,0,0,1,67.16,29.24Zm-5.4-4.46a1.1,1.1,0,0,0-1.09,1.09V26.2a1.1,1.1,0,0,0,1.09,1.09h5.4a1.1,1.1,0,0,0,1.09-1.09V25.88a1.1,1.1,0,0,0-1.09-1.09h-5.4Z"/><path d="M67.16,29.49h-5.4a3.29,3.29,0,0,1-3.29-3.29V25.88a3.29,3.29,0,0,1,3.29-3.29h5.4a3.29,3.29,0,0,1,3.29,3.29V26.2A3.29,3.29,0,0,1,67.16,29.49Zm-5.4-6.4A2.79,2.79,0,0,0,59,25.88V26.2A2.79,2.79,0,0,0,61.75,29h5.4a2.79,2.79,0,0,0,2.79-2.79V25.88a2.79,2.79,0,0,0-2.79-2.79h-5.4Zm5.4,4.46h-5.4a1.34,1.34,0,0,1-1.34-1.34V25.88a1.34,1.34,0,0,1,1.34-1.34h5.4a1.34,1.34,0,0,1,1.34,1.34V26.2A1.34,1.34,0,0,1,67.16,27.55ZM61.75,25a0.84,0.84,0,0,0-.84.84V26.2a0.85,0.85,0,0,0,.84.84h5.4A0.85,0.85,0,0,0,68,26.2V25.88A0.84,0.84,0,0,0,67.16,25h-5.4Z"/><path d="M14.69,59.37H3.07a1,1,0,0,1-1-1V51.66a1,1,0,0,1,1-1H14.69a1,1,0,0,1,1,1V58.4A1,1,0,0,1,14.69,59.37ZM4,57.42h9.67v-4.8H4v4.8Z"/><path d="M14.69,59.62H3.07A1.22,1.22,0,0,1,1.85,58.4V51.66a1.22,1.22,0,0,1,1.22-1.22H14.69a1.22,1.22,0,0,1,1.22,1.22V58.4A1.22,1.22,0,0,1,14.69,59.62ZM3.07,50.93a0.72,0.72,0,0,0-.72.72V58.4a0.72,0.72,0,0,0,.72.72H14.69a0.72,0.72,0,0,0,.72-0.72V51.66a0.72,0.72,0,0,0-.72-0.72H3.07ZM14,57.67H3.8v-5.3H14v5.3Zm-9.67-.5h9.17v-4.3H4.3v4.3Z"/><path d="M71,59.37H59.35a1,1,0,0,1-1-1V51.66a1,1,0,0,1,1-1H71a1,1,0,0,1,1,1V58.4A1,1,0,0,1,71,59.37ZM60.32,57.42H70v-4.8H60.32v4.8Z"/><path d="M71,59.62H59.35a1.22,1.22,0,0,1-1.22-1.22V51.66a1.22,1.22,0,0,1,1.22-1.22H71a1.22,1.22,0,0,1,1.22,1.22V58.4A1.22,1.22,0,0,1,71,59.62ZM59.35,50.93a0.72,0.72,0,0,0-.72.72V58.4a0.72,0.72,0,0,0,.72.72H71a0.72,0.72,0,0,0,.72-0.72V51.66A0.72,0.72,0,0,0,71,50.93H59.35Zm10.89,6.74H60.07v-5.3H70.24v5.3Zm-9.67-.5h9.17v-4.3H60.57v4.3Z"/><path d="M15.27,43.29A12.42,12.42,0,0,1,12.54,43C8.6,42.1,6,39.62,6.46,37.26a4.71,4.71,0,0,1,2.65-3.74,4.36,4.36,0,0,1,4.18.84,26,26,0,0,0,3.94,2.1c2.74,1.28,4.9,2.29,4.9,3.91a1.92,1.92,0,0,1-.82,1.53C20.14,42.81,17.58,43.29,15.27,43.29Zm-4.91-8.06a1.5,1.5,0,0,0-.55.1,2.9,2.9,0,0,0-1.45,2.31c-0.19.94,1.35,2.72,4.61,3.49,2.55,0.6,6.49-.07,7.15-0.77-0.39-.56-2.47-1.53-3.74-2.13a27.2,27.2,0,0,1-4.26-2.29A3.14,3.14,0,0,0,10.36,35.23Zm9.81,5.2h0Z"/><path d="M15.27,43.54a12.64,12.64,0,0,1-2.79-.28c-4.07-.95-6.76-3.55-6.27-6A5,5,0,0,1,9,33.29a4.59,4.59,0,0,1,4.41.87,25.78,25.78,0,0,0,3.9,2.08c2.82,1.32,5,2.36,5,4.13a2.16,2.16,0,0,1-.91,1.72C20.11,43.16,17.28,43.54,15.27,43.54Zm-4.91-10a3.18,3.18,0,0,0-1.16.22,4.48,4.48,0,0,0-2.5,3.56c-0.44,2.23,2.09,4.58,5.89,5.46a12.16,12.16,0,0,0,2.68.26c2.5,0,4.86-.54,5.87-1.34a1.68,1.68,0,0,0,.72-1.33c0-1.45-2.1-2.44-4.75-3.68a26.11,26.11,0,0,1-4-2.13A4.78,4.78,0,0,0,10.36,33.54Zm4.92,8.07a10.64,10.64,0,0,1-2.36-.23c-3.46-.81-5-2.71-4.8-3.78a3.13,3.13,0,0,1,1.6-2.49,2.77,2.77,0,0,1,2.56.63A27.08,27.08,0,0,0,16.5,38c1.73,0.81,3.44,1.65,3.84,2.21l0.12,0.17-0.14.15-0.13.12v0C19.45,41.18,17.31,41.6,15.28,41.6Zm-4.92-6.12a1.26,1.26,0,0,0-.46.08,2.68,2.68,0,0,0-1.3,2.13c-0.15.74,1.21,2.44,4.43,3.19a12.43,12.43,0,0,0,6.73-.56,21.74,21.74,0,0,0-3.47-1.87A27.41,27.41,0,0,1,12,36.13,2.91,2.91,0,0,0,10.36,35.48Z"/><path d="M58.68,43.29c-2.31,0-4.87-.47-6-1.39a1.92,1.92,0,0,1-.82-1.53c0-1.61,2.16-2.62,4.89-3.91a26,26,0,0,0,3.94-2.1,4.36,4.36,0,0,1,4.18-.84,4.71,4.71,0,0,1,2.65,3.74C68,39.62,65.34,42.1,61.41,43A12.42,12.42,0,0,1,58.68,43.29Zm-4.86-2.94c0.67,0.71,4.6,1.37,7.15.77,3.26-.76,4.8-2.54,4.61-3.49a2.9,2.9,0,0,0-1.45-2.31,2.53,2.53,0,0,0-2.32.6,27.25,27.25,0,0,1-4.26,2.29C56.28,38.82,54.2,39.79,53.81,40.35Zm0,0.08h0Z"/><path d="M58.68,43.54c-2,0-4.84-.38-6.18-1.44a2.16,2.16,0,0,1-.91-1.72c0-1.77,2.22-2.81,5-4.13a25.79,25.79,0,0,0,3.9-2.08,4.59,4.59,0,0,1,4.41-.87,5,5,0,0,1,2.8,3.92c0.49,2.5-2.2,5.1-6.27,6A12.64,12.64,0,0,1,58.68,43.54Zm4.91-10a4.78,4.78,0,0,0-2.77,1,26.16,26.16,0,0,1-4,2.13c-2.66,1.24-4.75,2.23-4.75,3.68a1.68,1.68,0,0,0,.72,1.33c1,0.8,3.37,1.34,5.87,1.34a12.15,12.15,0,0,0,2.68-.26c3.8-.89,6.33-3.24,5.89-5.46a4.48,4.48,0,0,0-2.49-3.56A3.19,3.19,0,0,0,63.58,33.54ZM58.67,41.6c-2.18,0-4.47-.48-5-1.08l-0.14-.15,0.12-.17c0.39-.56,2-1.36,3.83-2.2a27.24,27.24,0,0,0,4.22-2.27,2.75,2.75,0,0,1,2.56-.63,3.12,3.12,0,0,1,1.61,2.49c0.21,1.07-1.34,3-4.8,3.78A10.63,10.63,0,0,1,58.67,41.6Zm-4.48-1.28a12.43,12.43,0,0,0,6.73.56c3.22-.75,4.57-2.45,4.42-3.19A2.68,2.68,0,0,0,64,35.56a2.29,2.29,0,0,0-2.08.57,27.42,27.42,0,0,1-4.28,2.31A21.89,21.89,0,0,0,54.19,40.32Z"/>
		</symbol>
		<symbol id="ic-acc" viewBox="0 0 208.198 207.498">
			<g>
				<g transform="translate(-481.000000, -645.000000)">
					<g transform="translate(481.000000, 645.000000)">
						<path d="M104.15,9.205c-52.518,0-95.245,42.728-95.245,95.245c0,52.518,42.728,95.245,95.245,95.245
							c52.517,0,95.245-42.727,95.245-95.245C199.395,51.932,156.667,9.205,104.15,9.205 M104.15,206.498
							c-56.27,0-102.048-45.778-102.048-102.048C2.102,48.18,47.88,2.401,104.15,2.401c56.269,0,102.048,45.779,102.048,102.048
							C206.198,160.719,160.419,206.498,104.15,206.498"/>
						<path d="M104.15,43.221c-33.761,0-61.229,27.468-61.229,61.229c0,33.761,27.468,61.229,61.229,61.229
							s61.228-27.468,61.228-61.229C165.378,70.688,137.911,43.221,104.15,43.221 M104.15,172.481
							c-37.513,0-68.032-30.519-68.032-68.032c0-37.513,30.519-68.032,68.032-68.032s68.032,30.519,68.032,68.032
							C172.182,141.962,141.663,172.481,104.15,172.481"/>
						<path d="M104.15,90.843c-7.504,0-13.606,6.102-13.606,13.606c0,7.504,6.103,13.606,13.606,13.606
							c7.503,0,13.607-6.102,13.607-13.606C117.757,96.945,111.653,90.843,104.15,90.843 M104.15,124.859
							c-11.256,0-20.41-9.153-20.41-20.41c0-11.256,9.154-20.41,20.41-20.41c11.255,0,20.41,9.154,20.41,20.41
							C124.56,115.706,115.405,124.859,104.15,124.859"/>
						<path d="M100.748,87.013h6.803V39.819h-6.803V87.013z"/>
						<path d="M100.748,168.651h6.803v-47.193h-6.803V168.651z"/>
						<path d="M121.372,107.851h47.193v-6.803h-47.193V107.851z"/>
						<path d="M39.733,107.851h47.194v-6.803H39.733V107.851z"/>
						<path d="M118.733,94.462l-4.811-4.81l33.369-33.373l4.814,4.81L118.733,94.462z"/>
						<path d="M61.005,152.19l-4.81-4.811l33.37-33.373l4.813,4.81L61.005,152.19z"/>
						<path d="M147.144,152.34l-33.373-33.373l4.813-4.81l33.37,33.374L147.144,152.34z"/>
						<path d="M89.416,94.613L56.042,61.24l4.813-4.81l33.37,33.373L89.416,94.613z"/>
					</g>
				</g>
			</g>
		</symbol>
		<symbol id="ic-close-sm" viewBox="0 0 15 15">
			<title>Close small</title>
			<path d="M714.99,2327.71l0.722-.72,14.3,14.3-0.722.72Zm0.722,14.3-0.722-.72,14.3-14.3,0.722,0.72Z" transform="translate(-715 -2327)"/>
		</symbol>
	</svg>
</div>


    <!--<script src="http://www.hyundai.ru/assets/js/vendors.js?v=1"></script>-->
    <!--<script src="common.js"></script>-->



<!-- ! specific stuff for current page only ! -->
<script type="text/javascript" src="http://maps.google.ru/maps/api/js?key=AIzaSyCg3II6UgahN4akFiKCe1Vjrm4wRMBPp8A"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://www.hyundai.ru/media/js/libs/underscore.js"></script>
<script type="text/javascript" src="http://www.hyundai.ru/media/js/libs/jquery.nanoscroller.min.js"></script>
<script type="text/javascript" src="http://www.hyundai.ru/media/js/libs/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="http://www.hyundai.ru/media/start/js/roundslider.js"></script>
<script type="text/javascript" src="script.js?v=2"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>