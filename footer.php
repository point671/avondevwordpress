<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avon
 */

?>

<footer class="footer">
    <div class="footer__container">
        <div class="footer__body body-footer">
            <div class="body-footer__logo logo-footer-body">
                <div class="logo-footer-body__title">AVON</div>
                <div class="logo-footer-body__signature">Личный сайт бизнес-партнёра
                    Ирины Ликаркиной </div>
            </div>


            <div class="body-footer__wrap-content">
                <div class="body-footer__content content-footer-body">
                    <div class="content-footer-body__item item-body-footer-content">
                        <a href="" class="item-body-footer-content__link">Новинки и хиты</a>
                        <a href="" class="item-body-footer-content__link">Новинки и хиты</a>
                        <a href="" class="item-body-footer-content__link">Новинки и хиты</a>
                        <a href="" class="item-body-footer-content__link">Новинки и хиты</a>
                    </div>
                    <div class="content-footer-body__item item-body-footer-content">
                        <a href="" class="item-body-footer-content__link">Новинки и хиты</a>
                        <a href="" class="item-body-footer-content__link">Новинки и хиты</a>
                        <a href="" class="item-body-footer-content__link">Новинки и хиты</a>
                    </div>
                    <div class="content-footer-body__item item-body-footer-content">
                        <a href="" class="item-body-footer-content__link">Новинки и хиты</a>
                        <a href="" class="item-body-footer-content__link">Новинки и хиты</a>
                    </div>
                </div>
                <div class="body-footer__soc soc-footer-body">
                    <div class="soc-footer-body__icon icon-body-footer-soc">
                        <a href="#" class="icon-body-footer-soc__a">
                            <img class="icon-body-footer-soc__icon"
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/vk.svg" alt="">
                        </a>
                        <a href="#" class="icon-body-footer-soc__a">
                            <img class="icon-body-footer-soc__icon"
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/facebook.svg" alt="">
                        </a>
                        <a href="#" class="icon-body-footer-soc__a">
                            <img class="icon-body-footer-soc__icon"
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/google_my_business.svg"
                                alt="">
                        </a>
                        <a href="#" class="icon-body-footer-soc__a">
                            <img class="icon-body-footer-soc__icon"
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/youtube.svg" alt="">
                        </a>
                        <a href="#" class="icon-body-footer-soc__a">
                            <img class="icon-body-footer-soc__icon"
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/ok.svg" alt="">
                        </a>


                    </div>
                    <div class="soc-footer-body__text">Подписаться на новости</div>
                    <form class="soc-footer-body__mail mail-body-footer-soc">
                        <input type="email" name="form[]" placeholder="Email" class="mail-body-footer-soc__input">
                        <button class="mail-body-footer-soc__button"> <img class="mail-body-footer-soc__icon"
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/SendIcon.svg"
                                alt=""></button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bg fill-form__bg">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/background.jpg" alt="">
    </div>
</footer>
</div>
<!-- 
<div id="popup" aria-hidden="true" class="popup">
	<div class="popup__wrapper">
		<div class="popup__content">
			<button data-close type="button" class="popup__close">Закрыть</button>
			<div class="popup__text">
			</div>
		</div>
	</div>
</div>
 -->


<?php wp_footer(); ?>
</body>

</html>