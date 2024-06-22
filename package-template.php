<?php
/*
Template Name: Packages Page
Template Post Type: page
*/

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
$className = get_field('page_class', $post->ID);
$img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full");
$url = $img[0];
$width = $img[1];
$height = $img[2];
?>
<main class="cud-main">
  <?php include("banner.php"); ?>
  <section class="cud-package-details">
    <div class="container">
      <div class="cud-package-details-wrap">
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
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="cud-package-details-item cud-<?php echo $className; ?>">
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
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-6 col-sm-6 col-12">
              <div class="cud-package-details-item cud-package-details-custom cud-<?php echo $className; ?>">
                <h3>Want to have a custom package?</h3>
                <a href="<?php echo get_theme_mod('kp_calendly_meeting_link', true); ?>" target="_blank" rel="noopener" class="cud-btn cud-btn-<?php echo $className; ?>">Book Meeting</a>
              </div>
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
          <?php
          $args = array(
            'posts_per_page' => 3,
            'post_type'   => 'page',
            'tax_query' => array(
              array(
                'taxonomy' => 'packages',
                'field' => 'term_id',
                'terms' => 19
              )
            ),
            'exclude'     => [$post->ID]
          );

          $package_post = get_posts($args);
          foreach ($package_post as $package) {
            $className = get_field('page_class', $package->ID);
            $package_title = get_field('package_title', $package->ID);
            $package_basic_info = get_field('package_basic_info', $package->ID);
          ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="cud-packages-item cud-<?= $className; ?> cud-bg cud-bg-<?= $className; ?>-light-15">
                <div class="cud-packages-item-content">
                  <div class="cud-packages-item-icon cud-bg cud-bg-<?= $className; ?>-light-15">
                    <i class="cud-icon-<?= $className; ?>"></i>
                  </div>
                  <h3><?php echo $package_title; ?></h3>
                  <p><?php echo $package_basic_info; ?></p>
                </div>
                <a href="<?php echo get_permalink($package->ID); ?>" class="cud-btn cud-btn-<?= $className; ?>">View Packages</a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
