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
  <section class="cud-banner cud-banner-hiredesigner">
    <div class="container">
      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="cud-banner-content">
            <span class="cud-banner-content-title">Hire Us</span>
            <?php echo the_content(); ?>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="cud-banner-img">
            <?php $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full"); ?>
            <img src="<?php echo $image_data[0]; ?>" title="<?php echo $post->post_title; ?>" alt="<?php echo $post->post_title; ?>" width="<?php echo $image_data[1]; ?>" height="<?php echo $image_data[2]; ?>" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cud-package-details">
    <div class="container">
      <div class="cud-heading cud-heading-center">
        <p class="cud-heading-subtitle">Pricing</p>
        <h2 class="cud-heading-title">Choose Your Package</h2>
        <p class="cud-heading-desc">Choose a plan that works best for your business</p>
      </div>
      <div class="cud-package-details-contnet">
        <div class="row">
          <?php if (have_rows('package_list')) : ?>
            <?php while (have_rows('package_list')) : the_row();
              $title = get_sub_field('title');
              $price = get_sub_field('price');
              $image = get_sub_field('image');
              $description = get_sub_field('description');
              $total_price = get_sub_field('total_price');
            ?>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="cud-package-details-item cud-hiredesigner">
                  <div class="cud-package-details-item-wrap">
                    <div class="cud-package-details-item-price">
                      <div class="cud-package-details-item-price-wrap">
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo $price; ?></p>
                      </div>
                      <div class="cud-package-details-item-price-icon">
                        <img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" class="img-fluid">
                      </div>
                    </div>
                    <?php echo $description; ?>
                  </div>
                  <?php if (!empty($total_price)) { ?>
                    <span class="cud-btn cud-btn-light w-100"><?php echo $total_price; ?></span>
                  <?php }
                  ?>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="cud-package-details-item cud-package-details-custom cud-hiredesigner">
              <h3>Want to have a custom package?</h3>
              <a href="https://calendly.com/alexswebmobile/30min" target="_blank" rel="noopener" class="cud-btn cud-btn-hiredesigner">Book Meeting</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cud-packages">
    <div class="container">
      <div class="cud-heading cud-heading-center">
        <h2 class="cud-heading-title mt-0">Other Packages</h2>
      </div>
      <div class="cud-packages-wrap">
        <div class="row">
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="cud-packages-item cud-mobile cud-bg cud-bg-mobile-light-15">
              <div class="cud-packages-item-content">
                <div class="cud-packages-item-icon cud-bg cud-bg-mobile-light-15">
                  <i class="cud-icon-mobile"></i>
                </div>
                <h3>Mobile App Design</h3>
                <p>Starting price $180</p>
              </div>
              <a href="mobile-app-design-package.html" class="cud-btn cud-btn-mobile">View Packages</a>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="cud-packages-item cud-web cud-bg cud-bg-web-light-15">
              <div class="cud-packages-item-content">
                <div class="cud-packages-item-icon cud-bg cud-bg-web-light-15">
                  <i class="cud-icon-web"></i>
                </div>
                <h3>Web Design</h3>
                <p>Starting price $150</p>
              </div>
              <a href="web-design-package.html" class="cud-btn cud-btn-web">View Packages</a>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="cud-packages-item cud-branding cud-bg cud-bg-branding-light-15">
              <div class="cud-packages-item-content">
                <div class="cud-packages-item-icon cud-bg cud-bg-branding-light-15">
                  <i class="cud-icon-branding"></i>
                </div>
                <h3>Branding Design</h3>
                <p>Starting price $75</p>
              </div>
              <a href="branding-design-package.html" class="cud-btn cud-btn-branding">View Packages</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
