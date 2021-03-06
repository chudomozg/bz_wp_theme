<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer class="bz-footer">
	<div class="container h-100">
		<div class="row h-100 d-flex justify-content-between">
			<div class="col-12 col-md-12 col-lg-4 footer-col-1 row pb-lg-0 pb-4">
				<div class="footer-logo col-12">
					<a href="<?php echo esc_url( home_url( '/' )); ?>">
						<img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
					</a>
				</div>
				<div class="footer-copyright col-12">
					© 2021 BUBEN&ZORWEG
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 footer-col-2 row pb-lg-0 pb-3">
				<div class="footer-use-term-link col-12 mb-2 mb-md-0">
					<?php echo(bz_get_link(get_option('theme_termsofuse'), array('footer-link'))) ?>
				</div>
				<div class="footer-pdata-consent-link col-12 mb-2 mb-md-0">
					<?php echo(bz_get_link(get_option('theme_personal_data_consent'), array('footer-link'))) ?>
				</div>
				<div class="footer-legal-inf col-12">
					<?php echo(get_option('theme_legal_information')) ?>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 footer-col-3 row">
				<div class="footer-email col-12 pb-lg-0 pb-2">
					<a href="mailto:<?php echo(get_option('theme_email')); ?>" class="footer-link">
						<?php echo(get_option('theme_email')); ?>
					</a>
				</div>
				<div class="footer-phone col-12 pb-lg-0 pb-3">
					<a href="tel:<?php echo(get_option('theme_phone')); ?>" class="footer-link">
						<?php echo(get_option('theme_phone')); ?>
					</a>
				</div>
				<div class="footer-social col-10 col-md-12">
					<div class="row pr-5">
						<div class="footer-social__footer-social-link col-3">
							<a href="">
								<img src="<?php echo(get_stylesheet_directory_uri().'/assets/images/telegram-footer-ico.svg') ?>" alt="telegram">
							</a>
						</div>
						<div class="footer-social__footer-social-link col-3">
							<a href="">
								<img src="<?php echo(get_stylesheet_directory_uri().'/assets/images/youtube-footer-ico.svg') ?>" alt="telegram">
							</a>
						</div>
						<div class="footer-social__footer-social-link col-3">
							<a href="">
								<img src="<?php echo(get_stylesheet_directory_uri().'/assets/images/facebook-footer-ico.svg') ?>" alt="telegram">
							</a>
						</div>
						<div class="footer-social__footer-social-link col-3">
							<a href="">
								<img src="<?php echo(get_stylesheet_directory_uri().'/assets/images/insta-footer-ico.svg') ?>" alt="telegram">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</footer>
<?php endif; ?>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>