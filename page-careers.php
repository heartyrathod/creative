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
  <div class="entry-content cud-entry-content">
    <div class="container">
      <div class="cud-careers">
        <div class="cud-careers-wrap">
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
          <div class="cud-careers-box">
            <div class="cud-positions">
              <h3>Hiring Urgently⚡️</h3>
              <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                  <a href="#" class="cud-positions-item">
                    <i class="cud-icon-wordpress"></i>
                    <div class="cud-positions-item-content">
                      <h4>WordPress</h4>
                      <p>2 positions</p>
                      <span>⇾</span>
                    </div>
                  </a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                  <a href="#" class="cud-positions-item">
                    <i class="cud-icon-wordpress"></i>
                    <div class="cud-positions-item-content">
                      <h4>WordPress</h4>
                      <p>2 positions</p>
                      <span>⇾</span>
                    </div>
                  </a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                  <a href="#" class="cud-positions-item">
                    <i class="cud-icon-wordpress"></i>
                    <div class="cud-positions-item-content">
                      <h4>WordPress</h4>
                      <p>2 positions</p>
                      <span>⇾</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="cud-positions">
              <h3>Current Openings</h3>
              <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                  <a href="#" class="cud-positions-item">
                    <i class="cud-icon-wordpress"></i>
                    <div class="cud-positions-item-content">
                      <h4>WordPress</h4>
                      <p>2 positions</p>
                      <span>⇾</span>
                    </div>
                  </a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                  <a href="#" class="cud-positions-item">
                    <i class="cud-icon-wordpress"></i>
                    <div class="cud-positions-item-content">
                      <h4>WordPress</h4>
                      <p>2 positions</p>
                      <span>⇾</span>
                    </div>
                  </a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                  <a href="#" class="cud-positions-item">
                    <i class="cud-icon-wordpress"></i>
                    <div class="cud-positions-item-content">
                      <h4>WordPress</h4>
                      <p>2 positions</p>
                      <span>⇾</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
