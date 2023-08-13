<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package avon
 */

get_header();
?>

<main class="page">
    <section class="fill-form fill-form-margin">
        <div class="fill-form__container">
            <div class="fill-form__body body-form-fill">
                <div class="body-form-fill__text-and-img text-and-img-fill-form-body">
                    <div class="text-and-img-fill-form-body__text text-body-form-fill-img-and-text">
                        <h2 class="text-body-form-fill-img-and-text__title">
                            <?php the_field("avon-reg_title"); ?>
                        </h2>
                        <div
                            class="text-body-form-fill-img-and-text__box-text box-text-text-and-img-fill-form-body-text">
                            <div class="box-text-text-and-img-fill-form-body-text__content">
                                <h3 class="box-text-text-and-img-fill-form-body-text__h3">
                                    <?php the_field("avon-reg-podzagolovok_1"); ?></h3>
                                <div class="box-text-text-and-img-fill-form-body-text__txt">
                                    <?php the_field("avon-reg-podzagolovok-text_1"); ?>
                                </div>
                            </div>
                            <div class="box-text-text-and-img-fill-form-body-text__content">
                                <h3 class="box-text-text-and-img-fill-form-body-text__h3">
                                    <?php the_field("avon-reg-podzagolovok_2"); ?>
                                </h3>
                                <div class="box-text-text-and-img-fill-form-body-text__txt">
                                    <?php the_field("avon-reg-podzagolovok-text_2"); ?></div>
                            </div>
                            <div class="box-text-text-and-img-fill-form-body-text__content">
                                <h3 class="box-text-text-and-img-fill-form-body-text__h3">
                                    <?php the_field("avon-reg-podzagolovok_3"); ?></h3>
                                <div class="box-text-text-and-img-fill-form-body-text__txt">
                                    <?php the_field("avon-reg-podzagolovok-text_3"); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-and-img-fill-form-body__img img-body-form-fill-img-and-text">
                        <div class="img-body-form-fill-img-and-text__up up-img-body-form-fill-img-and-text">
                            <div
                                class="up-img-body-form-fill-img-and-text__img-box up-img-body-form-fill-img-and-text__img-box_one">
                                <img class="img-body-form-fill-img-and-text__img img-body-form-fill-img-and-text__img_one"
                                    src="<?php echo bloginfo('template_url'); ?>/assets/img/register/perfume1.png"
                                    alt="">


                            </div>
                            <div
                                class="up-img-body-form-fill-img-and-text__img-box up-img-body-form-fill-img-and-text__img-box_two">
                                <img class="img-body-form-fill-img-and-text__img img-body-form-fill-img-and-text__img_two"
                                    src="<?php echo bloginfo('template_url'); ?>/assets/img/register/perfume2.png"
                                    alt="">
                            </div>
                        </div>
                        <!-- <div class="img-body-form-fill-img-and-text__down down-text-and-img-fill-form-body-img">
									<div class="down-text-and-img-fill-form-body-img__text-item">
										Заполни анкету и получи в подарок <span
											class="down-text-and-img-fill-form-body-img__dedicated">аромат и скидку
											30%</span> на всю
										продукцию
									</div>
								</div> -->
                    </div>


                </div>
                <div class="body-form-fill__button-and-inscription button-and-inscription-fill-form-body">
                    <div data-goto=".registration-form" class="button-and-inscription-fill-form-body__button">
                        <?php the_field("avon-reg-button"); ?> </div>
                    <div
                        class="button-and-inscription-fill-form-body__inscription inscription-body-form-fill-inscription-and-button">
                        <div class="inscription-body-form-fill-inscription-and-button__text">
                            <?php the_field("nadpis_s_vydelennym_teksom"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-block__bg fill-form__bg">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/main/first-screen.png" alt="">
        </div>


    </section>


    <section class="register-card">
        <div class="register-card__container">
            <div class="register-card__body body-card-register">
                <h2 class="body-card-register__title">Регистрация даёт возможность:</h2>
                <div class="body-card-register__card-section card-section-register-card-body">


                    <div class="card-section-register-card-body__item item-body-card-register-section-card">
                        <div class="item-body-card-register-section-card__img-wrap">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/register-card/free-icon-businesswoman.png"
                                alt="">
                        </div>
                        <div
                            class="item-body-card-register-section-card__become become-card-section-register-card-body-item">
                            <div class="become-card-section-register-card-body-item__wrap">
                                <h3 class="become-card-section-register-card-body-item__title">Стать покупателем
                                </h3>
                                <div class="become-card-section-register-card-body-item__text">Заказывай для
                                    себя со
                                    скидкой и подарками</div>
                            </div>
                        </div>
                        <div
                            class="item-body-card-register-section-card__list list-card-section-register-card-body-item">
                            <ul
                                class="list-card-section-register-card-body-item__ul ul-item-body-card-register-section-card-list">
                                <li class="ul-item-body-card-register-section-card-list__li">Экономия до 30% на
                                    каждый заказ</li>
                                <li class="ul-item-body-card-register-section-card-list__li">
                                    Доставка напрямую со склада AVON.
                                </li>
                                <li class="ul-item-body-card-register-section-card-list__li">Участие в закрытых
                                    распродажах</li>
                            </ul>
                        </div>
                        <div
                            class="item-body-card-register-section-card__button-wrap button-wrap-card-section-register-card-body-item">
                            <div class="button-wrap-card-section-register-card-body-item__button">
                                Подробнее
                            </div>
                        </div>
                    </div>
                    <div class="card-section-register-card-body__item item-body-card-register-section-card">
                        <div class="item-body-card-register-section-card__img-wrap">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/register-card/free-icon-businesswoman.png"
                                alt="">
                        </div>
                        <div
                            class="item-body-card-register-section-card__become become-card-section-register-card-body-item">
                            <div class="become-card-section-register-card-body-item__wrap">
                                <h3 class="become-card-section-register-card-body-item__title">Стать покупателем
                                </h3>
                                <div class="become-card-section-register-card-body-item__text">Заказывай для
                                    себя со
                                    скидкой и подарками</div>
                            </div>
                        </div>
                        <div
                            class="item-body-card-register-section-card__list list-card-section-register-card-body-item">
                            <ul
                                class="list-card-section-register-card-body-item__ul ul-item-body-card-register-section-card-list">
                                <li class="ul-item-body-card-register-section-card-list__li">Экономия до 30% на
                                    каждый заказ</li>
                                <li class="ul-item-body-card-register-section-card-list__li">
                                    Доставка напрямую со склада AVON.
                                </li>
                                <li class="ul-item-body-card-register-section-card-list__li">Участие в закрытых
                                    распродажах</li>
                            </ul>
                        </div>
                        <div
                            class="item-body-card-register-section-card__button-wrap button-wrap-card-section-register-card-body-item">
                            <div class="button-wrap-card-section-register-card-body-item__button">
                                Подробнее
                            </div>
                        </div>
                    </div>
                    <div class="card-section-register-card-body__item item-body-card-register-section-card">
                        <div class="item-body-card-register-section-card__img-wrap">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/register-card/free-icon-businesswoman.png"
                                alt="">
                        </div>
                        <div
                            class="item-body-card-register-section-card__become become-card-section-register-card-body-item">
                            <div class="become-card-section-register-card-body-item__wrap">
                                <h3 class="become-card-section-register-card-body-item__title">Стать покупателем
                                </h3>
                                <div class="become-card-section-register-card-body-item__text">Заказывай для
                                    себя со
                                    скидкой и подарками</div>
                            </div>
                        </div>
                        <div
                            class="item-body-card-register-section-card__list list-card-section-register-card-body-item">
                            <ul
                                class="list-card-section-register-card-body-item__ul ul-item-body-card-register-section-card-list">
                                <li class="ul-item-body-card-register-section-card-list__li">Экономия до 30% на
                                    каждый заказ</li>
                                <li class="ul-item-body-card-register-section-card-list__li">
                                    Доставка напрямую со склада AVON.
                                </li>
                                <li class="ul-item-body-card-register-section-card-list__li">Участие в закрытых
                                    распродажах</li>
                            </ul>

                        </div>
                        <div
                            class="item-body-card-register-section-card__button-wrap button-wrap-card-section-register-card-body-item">
                            <div class="button-wrap-card-section-register-card-body-item__button">
                                Подробнее
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="company-advantage">
        <div class="company-advantage__container">
            <div class="company-advantage__body body-advantage-company">
                <h2 class="body-advantage-company__title title-company-advantage-body">Преимущества компании
                    AVON</h2>
                <div class="body-advantage-company__items items-company-advantage-body">
                    <div class="items-company-advantage-body__items items-body-advantage-company-item">
                        <div class="items-body-advantage-company-item__number">12</div>
                        <div class="items-body-advantage-company-item__number-txt">зарплат в год</div>
                        <div class="items-body-advantage-company-item__text">Выплаты за продажи по каждому
                            каталогу + бонусы</div>
                    </div>
                    <div class="items-company-advantage-body__items items-body-advantage-company-item">
                        <div class="items-body-advantage-company-item__number">12</div>
                        <div class="items-body-advantage-company-item__number-txt">зарплат в год</div>
                        <div class="items-body-advantage-company-item__text">Выплаты за продажи по каждому
                            каталогу + бонусы</div>
                    </div>
                    <div class="items-company-advantage-body__items items-body-advantage-company-item">
                        <div class="items-body-advantage-company-item__number">12</div>
                        <div class="items-body-advantage-company-item__number-txt">зарплат в год</div>
                        <div class="items-body-advantage-company-item__text">Выплаты за продажи по каждому
                            каталогу + бонусы</div>
                    </div>
                    <div class="items-company-advantage-body__items items-body-advantage-company-item">
                        <div class="items-body-advantage-company-item__number">12</div>
                        <div class="items-body-advantage-company-item__number-txt">зарплат в год</div>
                        <div class="items-body-advantage-company-item__text">Выплаты за продажи по каждому
                            каталогу + бонусы</div>
                    </div>
                    <div class="items-company-advantage-body__items items-body-advantage-company-item">
                        <div class="items-body-advantage-company-item__number">12</div>
                        <div class="items-body-advantage-company-item__number-txt">зарплат в год</div>
                        <div class="items-body-advantage-company-item__text">Выплаты за продажи по каждому
                            каталогу + бонусы</div>
                    </div>
                </div>
                <div class="items-body-advantage-company-item__button button-item-company-advantage-body-items">
                    <div class="button-item-company-advantage-body-items__real-button" data-goto=".registration-form">
                        ЗАПОЛНИТЬ АНКЕТУ</div>
                </div>

            </div>
        </div>

    </section>

    <section class="steps-box">
        <div class="steps-box__container">
            <div class="steps-box__body body-steps-box">
                <h3 class="body-steps-box__title title-box-steps-body">Заманчиво! А подробности?<br>
                    <span class="title-box-steps-body__span">5 шагов до лидера</span> со стабильным доходом
                </h3>
                <div class="body-steps-box__wrap-content wrap-content-box-steps-body">
                    <!-- 
							<div class="steps">
								<div class="steps__wrap">

									<div class="step">1</div>
									<div class="step-text">Зарегистрироваться прямым покупателем или представителем —
										заполнить анкету и получить доступ в личный кабинет</div>

								</div>
								<div class="steps__wrap">
									<div class="step">1</div>
									<div class="step-text">Зарегистрироваться прямым покупателем или представителем —
										заполнить анкету и получить доступ в личный кабинет</div>
								</div>
								<div class="steps__wrap">
									<div class="step">1</div>
									<div class="step-text">Зарегистрироваться прямым покупателем или представителем —
										заполнить анкету и получить доступ в личный кабинет</div>
								</div>
								<div class="steps__wrap">
									<div class="step">1</div>
									<div class="step-text">Зарегистрироваться прямым покупателем или представителем —
										заполнить анкету и получить доступ в личный кабинет</div>
								</div>
								<div class="steps__wrap">
									<div class="step">1</div>
									<div class="step-text">Зарегистрироваться прямым покупателем или представителем —
										заполнить анкету и получить доступ в личный кабинет</div>
								</div>


							</div> -->
                    <div class="steps">
                        <div class="steps__wrap">
                            <div class="step step_one">
                                <div class="step__number">1</div>
                            </div>
                            <div class="step-text">Зарегистрироваться прямым покупателем или представителем —
                                заполнить анкету и получить доступ в личный кабинет</div>

                        </div>
                        <div class="steps__wrap">
                            <div class="step">
                                <div class="step__number">2</div>
                            </div>
                            <div class="step-text">Зарегистрироваться прямым покупателем или представителем —
                                заполнить анкету и получить доступ в личный кабинет</div>

                        </div>
                        <div class="steps__wrap">
                            <div class="step">
                                <div class="step__number">3</div>
                            </div>
                            <div class="step-text">Зарегистрироваться прямым покупателем или представителем —
                                заполнить анкету и получить доступ в личный кабинет</div>

                        </div>
                        <div class="steps__wrap">
                            <div class="step">
                                <div class="step__number">4</div>
                            </div>
                            <div class="step-text">Зарегистрироваться прямым покупателем или представителем —
                                заполнить анкету и получить доступ в личный кабинет</div>

                        </div>
                        <div class="steps__wrap">
                            <div class="step">
                                <div class="step__number">5</div>
                            </div>
                            <div class="step-text">Зарегистрироваться прямым покупателем или представителем —
                                заполнить анкету и получить доступ в личный кабинет</div>

                        </div>
                        <div class="steps__wrap">
                            <div class="step">
                                <div class="step__number">6</div>
                            </div>
                            <div class="step-text">Зарегистрироваться прямым покупателем или представителем —
                                заполнить анкету и получить доступ в личный кабинет</div>

                        </div>
                        <div class="steps__wrap">
                            <div class="step">
                                <div class="step__number">7</div>
                            </div>
                            <div class="step-text">Зарегистрироваться прямым покупателем или представителем —
                                заполнить анкету и получить доступ в личный кабинет</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="registration-form">
        <div class="registration-form__container">
            <div class="registration-form__body body-form-registration">
                <h3 class="body-form-registration__title title-company-advantage-body">
                    Анкета для регистрации в компании AVON
                </h3>
                <form class="body-form-registration__form form-registration-form-body">
                    <div class="form-registration-form-body__wrap wrap-body-form-registration-form">
                        <div class="wrap-body-form-registration-form__item">
                            <input type="text" name="fioname" id="fioname" placeholder="ФИО">
                        </div>
                        <div class="wrap-body-form-registration-form__box">
                            <div class="wrap-body-form-registration-form__item">
                                <input required type="text" placeholder="Дата рождения" onfocus="(this.type='date')" />
                            </div>
                            <div class="wrap-body-form-registration-form__item">
                                <input type="text" name="phone" id="phone" placeholder="Номер телефона">
                            </div>
                            <div class="wrap-body-form-registration-form__item">
                                <input type="text" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="wrap-body-form-registration-form__item">
                                <input type="text" name="address" id="address" placeholder="Ссылка на соцсеть">
                            </div>
                        </div>
                        <div
                            class="wrap-body-form-registration-form__item item-form-registration-form-body-wrap-adress">
                            <input type="text" name="street" id="street" placeholder="Адрес проживания">
                        </div>
                        <div
                            class="wrap-body-form-registration-form__wrap-index-city wrap-index-city-form-registration-form-body">
                            <div class="wrap-index-city-form-registration-form-body__box">
                                <div class="wrap-body-form-registration-form__item">
                                    <input type="text" name="city" id="city" placeholder="City">
                                </div>
                                <div class="wrap-body-form-registration-form__item">
                                    <input type="text" id="indexPochta" name="indexPochta" pattern="[0-9]{6}"
                                        placeholder="Индекс"><br>
                                </div>
                            </div>
                            <div
                                class="wrap-body-form-registration-form__item item-form-registration-form-body-wrap-coincidence">

                                <div class="options">
                                    <div class="options__item">
                                        <input hidden id="o_1" class="options__input" checked type="radio" value="1"
                                            name="option__reg">
                                        <label for="o_1" class="options__label options__label_fix"><span
                                                class="options__text">Совпадает с адресом
                                                регистрации</span></label>
                                    </div>
                                    <div class="options__item">
                                        <input hidden id="o_2" class="options__input" type="radio" value="2"
                                            name="option__reg">
                                        <label for="o_2" class="options__label options__label_fix"><span
                                                class="options__text">Не
                                                совпадает с адресом регистрации</span></label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div
                            class="wrap-body-form-registration-form__item item-form-registration-form-body-wrap-target">
                            <label>Цель регистрации:</label>
                            <div class="options item-form-registration-form-body-wrap-target__options  ">
                                <div class="options__item">
                                    <input hidden id="q_1" class="options__input" checked type="radio" value="1"
                                        name="option">
                                    <label for="q_1" class="options__label"><span
                                            class="options__text">Текст1</span></label>
                                </div>
                                <div class="options__item">
                                    <input hidden id="q_2" class="options__input" type="radio" value="2" name="option">
                                    <label for="q_2" class="options__label"><span
                                            class="options__text">Текст2</span></label>
                                </div>
                                <div class="options__item">
                                    <input hidden id="q_3" class="options__input" type="radio" value="2" name="option">
                                    <label for="q_3" class="options__label"><span
                                            class="options__text">Текст2</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-body-form-registration-form__you-get you-get-form-registration-form-body-wrap">
                            <h3 class="you-get-form-registration-form-body-wrap__title">Заполнив анкету вы
                                получите</h3>
                            <div
                                class="you-get-form-registration-form-body-wrap__content content-wrap-body-form-registration-form-get-you">
                                <div
                                    class="content-wrap-body-form-registration-form-get-you__item item-you-get-form-body-wrap-content">
                                    <div class="item-you-get-form-body-wrap-content__text">при заказе от 1500
                                        руб </div>
                                    <div class="item-you-get-form-body-wrap-content__discount">-20%</div>
                                </div>
                                <div
                                    class="content-wrap-body-form-registration-form-get-you__item item-you-get-form-body-wrap-content">
                                    <div class="item-you-get-form-body-wrap-content__text">при заказе от 2500
                                        руб </div>
                                    <div class="item-you-get-form-body-wrap-content__discount">-25%</div>
                                </div>
                                <div
                                    class="content-wrap-body-form-registration-form-get-you__item item-you-get-form-body-wrap-content">
                                    <div class="item-you-get-form-body-wrap-content__text">персональная скидка +
                                        скидка из каталога до</div>
                                    <div class="item-you-get-form-body-wrap-content__discount">-70%</div>
                                </div>
                            </div>
                            <div class="you-get-form-registration-form-body-wrap__bg">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/form/background.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="form-registration-form-body__button-wrap button-wrap-body-form-registration-form">
                        ЗАПОЛНИТЬ АНКЕТУ
                    </div>
                </form>
            </div>
        </div>
    </section>


    <section class="representative-reviews">
        <div class="representative-reviews__container">
            <div class="representative-reviews__body body-reviews-representative">
                <h3 class="body-reviews-representative__title title-company-advantage-body">Отзывы
                    представителей</h3>
                <!-- Оболочка слайдера -->
                <div class="title-company-advantage-body__slider swiper">
                    <!-- Двигающееся часть слайдера -->
                    <div class="title-company-advantage-body__wrapper swiper-wrapper">
                        <!-- Слайд -->
                        <div class="title-company-advantage-body__slide swiper-slide">
                            <div class="swiper-slide__wrap-content wrap-content-slide-swiper">
                                <div class="wrap-content-slide-swiper__avatar avatar-swiper-slide-content-wrap">
                                    <img class="avatar-swiper-slide-content-wrap__img"
                                        src="<?php echo bloginfo('template_url'); ?>/assets/img/representative-reviews/image.png"
                                        alt="">
                                </div>
                                <p class="wrap-content-slide-swiper__text">Я уже в возрасте и всегда
                                    беспокоилась, как и на что буду жить дальше. В AVON меня привлекли
                                    бесплатная регистрация, гибкий график работы и официальное трудоустройство.
                                    Теперь не о чем и переживать. Работаю как координатором, так и себе
                                    заказываю продукцию со скидками. Доход стабильный и денег вполне хватает.
                                    Есть постоянные клиенты, которые со временем стали подругами. Сотрудничая с
                                    Эйвон,
                                    я научилась разбираться в парфюмерии и косметике, ухаживать за собой и
                                    зарабатывать деньги.
                                    Выгляжу молодо и стильно, занимаюсь интересным делом и настроение всегда
                                    отличное.</p>
                            </div>
                            <div class="wrap-content-slide-swiper__signature">Лариса, г. Росляково</div>
                        </div>
                        <div class="title-company-advantage-body__slide swiper-slide">
                            <div class="swiper-slide__wrap-content wrap-content-slide-swiper">
                                <div class="wrap-content-slide-swiper__avatar avatar-swiper-slide-content-wrap">
                                    <img class="avatar-swiper-slide-content-wrap__img"
                                        src="<?php echo bloginfo('template_url'); ?>/assets/img/representative-reviews/image.png"
                                        alt="">
                                </div>
                                <p class="wrap-content-slide-swiper__text">Я уже в возрасте и всегда
                                    беспокоилась, как и на что буду жить дальше. В AVON меня привлекли
                                    бесплатная регистрация, гибкий график работы и официальное трудоустройство.
                                    Теперь не о чем и переживать. Работаю как координатором, так и себе
                                    заказываю продукцию со скидками. Доход стабильный и денег вполне хватает.
                                    Есть постоянные клиенты, которые со временем стали подругами. Сотрудничая с
                                    Эйвон,
                                    я научилась разбираться в парфюмерии и косметике, ухаживать за собой и
                                    зарабатывать деньги.
                                    Выгляжу молодо и стильно, занимаюсь интересным делом и настроение всегда
                                    отличное.</p>
                            </div>
                            <div class="wrap-content-slide-swiper__signature">Лариса, г. Росляково</div>
                        </div>
                        <div class="title-company-advantage-body__slide swiper-slide">
                            <div class="swiper-slide__wrap-content wrap-content-slide-swiper">
                                <div class="wrap-content-slide-swiper__avatar avatar-swiper-slide-content-wrap">
                                    <img class="avatar-swiper-slide-content-wrap__img"
                                        src="<?php echo bloginfo('template_url'); ?>/assets/img/representative-reviews/image.png"
                                        alt="">
                                </div>
                                <p class="wrap-content-slide-swiper__text">Я уже в возрасте и всегда
                                    беспокоилась, как и на что буду жить дальше. В AVON меня привлекли
                                    бесплатная регистрация, гибкий график работы и официальное трудоустройство.
                                    Теперь не о чем и переживать. Работаю как координатором, так и себе
                                    заказываю продукцию со скидками. Доход стабильный и денег вполне хватает.
                                    Есть постоянные клиенты, которые со временем стали подругами. Сотрудничая с
                                    Эйвон,
                                    я научилась разбираться в парфюмерии и косметике, ухаживать за собой и
                                    зарабатывать деньги.
                                    Выгляжу молодо и стильно, занимаюсь интересным делом и настроение всегда
                                    отличное.</p>
                            </div>
                            <div class="wrap-content-slide-swiper__signature">Лариса, г. Росляково</div>
                        </div>
                    </div>
                    <!-- Если нужна навигация (влево/вправо) -->

                </div>
                <button type="button" class="swiper-button-prev">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/representative-reviews/arrow-left.svg"
                        alt="">
                </button>
                <button type="button" class="swiper-button-next">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/representative-reviews/arrow-right.svg"
                        alt="">
                </button>
            </div>
        </div>
    </section>



    <section class="join-the-team">
        <div class="join-the-team__container">
            <div class="join-the-team__body body-team-the-join">
                <h3 class="body-team-the-join__title title-box-steps-body">Заманчиво! А подробности?<br>
                    <span class="title-box-steps-body__span">5 шагов до лидера</span> со стабильным доходом
                </h3>
                <div class="body-team-the-join__content content-join-the-team-body">
                    <div class="content-join-the-team-body__welcome">
                        Давай знакомиться!
                        Меня зовут Ирина Ликаркина.
                        Я – лидер компании AVON.
                    </div>

                    <div class="content-join-the-team-body__wrap-text-image wrap-text-image-body-team-the-join-content">
                        <p class="wrap-text-image-body-team-the-join-content__text">
                            Я сотрудничаю с Avon уже 15 лет и являюсь ведущим менеджером компании.
                            Сайт AVONCOS специально создан для моих покупателей и команды представителей. Здесь
                            вы найдете информацию о последних новостях и событиях в международной компании,
                            полезные советы для карьеры и бизнеса, описание новинок и хитов продукции,
                            рекомендации по уходу за собой и разнообразные обучающие материалы.
                            На моем сайте для представителей можно зарегистрироваться в Avon, полистать
                            каталоги, заказать продукцию со скидками, пройти обучение или задать любой вопрос.
                            Регистрируйтесь, подписывайтесь на рассылку и добавляйте сайт в закладки браузера.
                            Вместе мы добьемся успеха!
                        </p>
                        <div
                            class="wrap-text-image-body-team-the-join-content__img-box img-box-content-join-the-team-body-image-text-wrap">
                            <div class="img-box-content-join-the-team-body-image-text-wrap__img">
                                <img class="img-wrap-text-image-body-team-the-join-content-box-img"
                                    src="<?php echo bloginfo('template_url'); ?>/assets/img/join-the-team/image.png"
                                    alt="">
                            </div>


                        </div>


                    </div>


                    <div class="menu-block__bg fill-form__bg">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/join-the-team/Background.png"
                            alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="my-achievements">
        <div class="my-achievements__container">
            <div class="my-achievements__body body-achievements-my">
                <h3 class="body-achievements-my__title title-company-advantage-body">Отзывы
                    представителей</h3>
                <div class="body-achievements-my__content content-my-achievements-body">
                    <div class="content-my-achievements-body__item item-body-achievements-my-content">
                        <div class="item-body-achievements-my-content__icon">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/my-achievements/sparkle.svg"
                                alt="">
                        </div>
                        <div class="item-body-achievements-my-content__text">AVON – мой единственный источник
                            дохода. Я полностью обеспечиваю свою семью. </div>
                    </div>
                    <div class="content-my-achievements-body__item item-body-achievements-my-content">
                        <div class="item-body-achievements-my-content__icon">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/my-achievements/sparkle.svg"
                                alt="">
                        </div>
                        <div class="item-body-achievements-my-content__text">AVON – мой единственный источник
                            дохода. Я полностью обеспечиваю свою семью. </div>
                    </div>
                    <div class="content-my-achievements-body__item item-body-achievements-my-content">
                        <div class="item-body-achievements-my-content__icon">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/my-achievements/sparkle.svg"
                                alt="">
                        </div>
                        <div class="item-body-achievements-my-content__text">AVON – мой единственный источник
                            дохода. Я полностью обеспечиваю свою семью. </div>
                    </div>
                    <div class="content-my-achievements-body__item item-body-achievements-my-content">
                        <div class="item-body-achievements-my-content__icon">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/my-achievements/sparkle.svg"
                                alt="">
                        </div>
                        <div class="item-body-achievements-my-content__text">AVON – мой единственный источник
                            дохода. Я полностью обеспечиваю свою семью. </div>
                    </div>
                    <div class="content-my-achievements-body__item item-body-achievements-my-content">
                        <div class="item-body-achievements-my-content__icon">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/my-achievements/sparkle.svg"
                                alt="">
                        </div>
                        <div class="item-body-achievements-my-content__text">AVON – мой единственный источник
                            дохода. Я полностью обеспечиваю свою семью. </div>
                    </div>
                    <div class="content-my-achievements-body__item item-body-achievements-my-content">
                        <div class="item-body-achievements-my-content__icon">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/my-achievements/sparkle.svg"
                                alt="">
                        </div>
                        <div class="item-body-achievements-my-content__text">AVON – мой единственный источник
                            дохода. Я полностью обеспечиваю свою семью. </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="see-new">
        <div class="see-new__container">
            <div class="see-new__body body-new-see">
                <div data-tabs class="tabs body-new-see__tabs tabs-see-new-body">
                    <h3 class="tabs-see-new-body__title title-company-advantage-body">
                        Смотри новое на сайте
                    </h3>

                    <nav data-tabs-titles class="tabs__navigation tabs-see-new-body__nav nav-body-new-see-tabs">
                        <button type="button"
                            class="tabs__title nav-body-new-see-tabs__title _tab-active">Каталоги</button>
                        <button type="button" class="tabs__title nav-body-new-see-tabs__title">Статьи</button>
                        <button type="button" class="tabs__title nav-body-new-see-tabs__title">Акции</button>
                    </nav>
                    <div data-tabs-body class="tabs__content tabs-see-new-body__content content-body-new-see-tabs">
                        <div class="tabs__body content-body-new-see-tabs__body">
                            <div class="content-body-new-see-tabs__wrap-flex wrap-flex-tabs-see-new-body-content">
                                <a class="wrap-flex-tabs-see-new-body-content__a" href="">
                                    <img class="wrap-flex-tabs-see-new-body-content__img wrap-flex-tabs-see-new-body-content__img_one"
                                        src="<?php echo bloginfo('template_url'); ?>/assets/img/see-new/image1.jpg"
                                        alt="">
                                </a>
                                <a class="wrap-flex-tabs-see-new-body-content__a" href="">
                                    <img class="wrap-flex-tabs-see-new-body-content__img wrap-flex-tabs-see-new-body-content__img_two"
                                        src="<?php echo bloginfo('template_url'); ?>/assets/img/see-new/image1.jpg"
                                        alt="">
                                </a>
                                <a class="wrap-flex-tabs-see-new-body-content__a " href="">
                                    <img class="wrap-flex-tabs-see-new-body-content__img wrap-flex-tabs-see-new-body-content__img_one"
                                        src="<?php echo bloginfo('template_url'); ?>/assets/img/see-new/image1.jpg"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tabs__body content-body-new-see-tabs__body">
                            <div class="content-body-new-see-tabs__wrap-flex wrap-flex-tabs-see-new-body-content">
                                <a class="wrap-flex-tabs-see-new-body-content__a" href="">
                                    <img class="wrap-flex-tabs-see-new-body-content__img wrap-flex-tabs-see-new-body-content__img_one"
                                        src="<?php echo bloginfo('template_url'); ?>/assets/img/see-new/image1.jpg"
                                        alt="">
                                </a>
                                <a class="wrap-flex-tabs-see-new-body-content__a" href="">
                                    <img class="wrap-flex-tabs-see-new-body-content__img wrap-flex-tabs-see-new-body-content__img_two"
                                        src="<?php echo bloginfo('template_url'); ?>/assets/img/see-new/image1.jpg"
                                        alt="">
                                </a>
                                <a class="wrap-flex-tabs-see-new-body-content__a " href="">
                                    <img class="wrap-flex-tabs-see-new-body-content__img wrap-flex-tabs-see-new-body-content__img_one"
                                        src="<?php echo bloginfo('template_url'); ?>/assets/img/see-new/image2.jpg"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tabs__body content-body-new-see-tabs__body">
                            <div class="content-body-new-see-tabs__wrap-flex wrap-flex-tabs-see-new-body-content">
                                <a class="wrap-flex-tabs-see-new-body-content__a" href="">
                                    <img class="wrap-flex-tabs-see-new-body-content__img wrap-flex-tabs-see-new-body-content__img_one"
                                        src="<?php echo bloginfo('template_url'); ?>/assets/img/see-new/image1.jpg"
                                        alt="">
                                </a>
                                <a class="wrap-flex-tabs-see-new-body-content__a" href="">
                                    <img class="wrap-flex-tabs-see-new-body-content__img wrap-flex-tabs-see-new-body-content__img_two"
                                        src="<?php echo bloginfo('template_url'); ?>/assets/img/see-new/image1.jpg"
                                        alt="">
                                </a>
                                <a class="wrap-flex-tabs-see-new-body-content__a " href="">
                                    <img class="wrap-flex-tabs-see-new-body-content__img wrap-flex-tabs-see-new-body-content__img_one"
                                        src="<?php echo bloginfo('template_url'); ?>/assets/img/see-new/image1.jpg"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-see-new-body__button button-body-new-see-tabs">
                        Смотреть всё
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="have-any-questions">
        <div class="have-any-questions__container">
            <div class="have-any-questions__body body-questions-any-have">
                <h3 class="body-questions-any-have__title title-company-advantage-body">Остались вопросы?</h3>
                <div class="body-questions-any-have__spollers spollers-have-any-questions-body">
                    <div data-spollers class="spollers">
                        <div class="spollers__item">
                            <button type="button" data-spoller class="spollers__title">Заголовок
                                спойлера</button>
                            <div class="spollers__body">Контент спойлера</div>
                        </div>
                        <div class="spollers__item">
                            <button type="button" data-spoller class="spollers__title">Заголовок
                                спойлера</button>
                            <div class="spollers__body">Контент спойлера</div>
                        </div>
                        <div class="spollers__item">
                            <button type="button" data-spoller class="spollers__title">Заголовок
                                спойлера</button>
                            <div class="spollers__body">Контент спойлера</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php

get_footer();