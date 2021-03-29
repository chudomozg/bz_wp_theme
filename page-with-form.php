<?php
/*
Template Name: С формой обратной связи
Template Post Type: post, page, product
*/
__( 'С формой обратной связи', 'With contact form before footer' );

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

			endwhile; // End of the loop.
			?>

    </div><!-- #main -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 bz-delimiter"></div>
      </div>
    </div>
    <section class='bz-contact-form'>
      <div class="container">
        <div class="row">
          <div class="bz-contact-form_text bz-cf-textpart col-12 col-lg-6">
            <div class="bz-cf-textpart_title">
              <h2><?php echo(get_option('theme_footer_cf_header')); ?></h2>
            </div>
            <div class="bz-cf-textpart_content">
              <?php echo get_option('theme_footer_cf_text'); ?>
            </div>
          </div>
          <div class="col-12 col-lg-1"></div>
          <div class="bz-cf-form col-12 col-lg-5 col-xl-4">
            <div class="bz-cf-form__wrapper">
              <?php echo do_shortcode( '[contact-form-7 id="13" title="Footer contact form"]' ); ?>
            </div>
          </div>
        </div>
      </div> 
    </section>
	</section><!-- #primary -->

  <?php get_footer(); ?>