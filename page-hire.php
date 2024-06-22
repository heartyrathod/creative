<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<main class="cud-main">
  <?php include("banner.php"); ?>
  <section class="entry-content d-flex flex-column my-xxl-5 my-xl-5 my-lg-4 my-3">
    <div class="container">
      <div class="cud-hire-wrap overflow-hidden px-xxl-7 px-xl-7 px-lg-6 px-md-4 px-0 gap-xxl-4 gap-xl-4 gap-lg-4 gap-3 d-flex flex-column">
        <?php
        the_content();

        wp_link_pages(
          array(
            'before'   => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
            'after'    => '</nav>',
            /* translators: %: Page number. */
            'pagelink' => esc_html__('Page %', 'twentytwentyone'),
          )
        );
        ?>
        <div class="cud-cta my-2 p-lg-4 p-3 shadow border-start border-5 border-primary d-flex align-items-center justify-content-between gap-3 flex-wrap">
          <p class="m-0">What good is an idea if it remains an idea? Let's put efforts together to give it a look of Website or Mobile Application.</p>
          <a href="javascript:;" onclick="tidioChatApi.display(true);tidioChatApi.open()" class="btn btn-blue">Let’s Start a discussion</a>
        </div>
        <?php if (have_rows('hire')) : ?>
        <div class="cud-hire-list gap-xxl-4 gap-xl-4 gap-lg-4 gap-3 d-flex flex-column">
          <h3 class="fs-5">Hire Dedicated Developers</h3>
          <div class="row">
            <?php $delay = 50;
              while (have_rows('hire')) : the_row(); ?>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>">
              <div class="d-flex flex-column flex-wrap justify-content-between align-items-start gap-3 border border-2 border-hover-primary border-<?php the_sub_field('color'); ?> border-opacity-10 p-xxl-4 p-xl-4 p-lg-4 p-3 rounded-4 w-100 h-100">
                <div class="d-flex flex-column flex-wrap align-items-start gap-3">
                  <div class="d-flex flex-wrap flex-row justify-content-center align-items-center bg-<?php the_sub_field('color'); ?> bg-opacity-10 p-4 rounded-4">
                    <i class="cud-icon-<?php the_sub_field('technology_icon'); ?> text-<?php the_sub_field('color'); ?> fs-3"></i>
                  </div>
                  <h4 class="fs-6"><?php the_sub_field('technology_name'); ?></h4>
                  <p><?php the_sub_field('technology_description'); ?></p>
                </div>
                <a href="<?php the_sub_field('technology_link'); ?>" class="btn btn-sm btn-light-<?php the_sub_field('color'); ?>" aria-label="Read more <?php the_sub_field('technology_name'); ?>">Read more</a>
              </div>
            </div>
            <?php $delay = $delay + 50;
              endwhile; ?>
            <?php if (have_rows('links', 'option')) : ?>
            <?php $i = 0;
        while (have_rows('links', 'option')) : the_row();
          $i++;
          if ($i == 1) : ?>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="700">
              <div class="cud-hire-list-item cud-hire-custom d-flex flex-column flex-wrap justify-content-center align-items-center gap-3 bg-blue p-xxl-4 p-xl-4 p-lg-4 p-3 rounded-4 w-100 h-100 text-center">
                <h4 class="fs-5 fw-light text-white">Want to hire our dedicated developer?</h4>
                <a href="<?php echo the_sub_field('link_action'); ?>" target="_blank" rel="noopener" class="btn btn-warning">Book Meeting</a>
              </div>
            </div>
            <?php
          endif;
        endwhile; ?>
            <?php endif; ?>
          </div>

          <?php endif; ?>
        </div>
      </div>

    </div>
  </section>
</main>
<?php
get_footer();