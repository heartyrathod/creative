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
  <section class="cud-packages">
    <div class="container">
      <div class="cud-packages-wrap">
        <div class="row">
          <?php
          $args = array(
            'posts_per_page' => 4,
            'post_type'   => 'page',
            'orderby' => 'ID',
            'order' => 'DESC',
            'tax_query' => array(
              array(
                'taxonomy' => 'packages',
                'field' => 'term_id',
                'terms' => 19
              )
            )
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
                <a href="<?= get_permalink($package->ID); ?>" class="cud-btn cud-btn-<?= $className; ?>">View Packages</a>
              </div>
            </div>
          <?php } ?>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="cud-packages-item cud-packages-custom">
              <h3>Want to have a custom package?</h3>
              <a href="<?php echo get_theme_mod('kp_calendly_meeting_link', true); ?>" target="_blank" rel="noopener" class="cud-btn cud-btn-mobile">Book Meeting</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
