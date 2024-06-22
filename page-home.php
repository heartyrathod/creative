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

get_header(); ?>
<main class="cud-main">
  <section class="cud-banner overflow-hidden">
    <div class="container h-100">
      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="cud-heading d-flex flex-column flex-wrap  gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-2 gap-2 align-items-start h-100 justify-content-center  align-content-start">
            <?php if (have_rows('banner')) : ?>
              <?php while (have_rows('banner')) : the_row(); ?>
                <?php if (get_sub_field('banner_subtitle') != "") { ?>
                  <span class="cud-heading-primary position-relative d-flex flex-row align-items-center px-3 py-2 border border-1 shadow-sm bg-body border-blue-subtle text-blue shadow-sm bg-body gap-2 rounded-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                      <circle cx="8" cy="8" r="8" />
                    </svg>
                    <span class="text-body m-0">
                      <?php echo get_sub_field('banner_subtitle') ?>
                    </span>
                  </span>
                <?php } ?>
                <?php if (get_sub_field('banner_title') != "") { ?>
                  <h1 class="m-0"><?php echo get_sub_field('banner_title') ?></h1>
                <?php } ?>
                <?php if (get_sub_field('banner_description') != "") { ?>
                  <p class="ps-3 fs-6 border-2 border-start"><?php echo get_sub_field('banner_description') ?></p>
                <?php } ?>
                <?php //echo the_content();
                ?>
                <?php while (have_rows('banner_actions')) : the_row(); ?>
                  <?php if (get_sub_field('action_link') != "") { ?>
                    <a href="<?php echo get_sub_field('action_link') ?>" class="btn btn-primary text-white" aria-label="<?php echo get_sub_field('action_name') ?>">
                      <i class="cud-icon-arrow text-white me-2 small"></i><?php echo get_sub_field('action_name') ?>
                    </a>
                  <?php } ?>
                <?php endwhile; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="cud-banner-img w-100 h-100 position-relative hstack flex-wrap justify-content-center">
            <?php $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full");
            $tlt =  get_post_meta(get_post_thumbnail_id($blogpost->ID), '_wp_attachment_image_alt', true);
            ?>

            <img src="<?php echo $image_data[0]; ?>" title="<?php echo $tlt; ?>" alt="<?php echo $tlt; ?>" width="<?php echo $image_data[1]; ?>" height="<?php echo $image_data[2]; ?>" class="img-fluid" fetchpriority="high" data-box>
            <div class="cud-banner-img-content">
              <span class="cud-banner-img-content-title text-uppercase mb-2 d-block position-relative">Our projects</span>
              <h2 class="cud-banner-img-content-heading mb-2">Portfolio Landing UI</h2>
              <a href="#cud-portfolios" class="fw-medium text-primary text-decoration-underline" aria-label="Explore Now">Explore Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cud-service overflow-hidden pb-1">
    <div class="container vstack align-items-center gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-2 gap-2">
      <div class="row row-gap-0 g-xxl-4 g-xl-4 g-lg-4 g-3">
        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
          <div class="cud-heading d-flex flex-column flex-wrap gap-3 align-items-start h-100 justify-content-center align-content-start" data-aos="fade-up">
            <span class="cud-heading-primary position-relative d-flex flex-row align-items-center px-3 py-2 border border-1 shadow-sm border-primary-subtle text-primary shadow-sm bg-body gap-2 rounded-pill">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                <circle cx="8" cy="8" r="8" />
              </svg>
              <span class="text-body m-0">Services</span>
            </span>
            <h2 class="cud-heading-title mb-0">Experts in every aspect lifecycle</h2>
            <p class="m-0">We deploy world-class Creative Design and Development team on demand. That can design, build, ship and scale your vision in the most efficient way.</p>
            <a href="<?php echo get_permalink(17); ?>" class="btn btn-primary text-white px-xxl-4 px-xl-4 px-lg-4 px-md-3 px-sm-3 px-3" aria-label="View all services" data-aos="fade-left" data-aos-offset="100" data-aos-duration="200">View all services</a>
          </div>
        </div>
        <?php if (have_rows('service_type', 17)) : ?>
          <?php $delay = 100;
          while (have_rows('service_type', 17)) : the_row();
            $icon = get_sub_field('icon');
            $color = get_sub_field('color');
            $bg = get_sub_field('bg');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $pbname = get_sub_field('portfolio_button_name');
            $pblink =  get_sub_field('portfolio_button_link');
            $packagename =  get_sub_field('package_button_label');
            $packagelinkk =  get_sub_field('package_button_link');
            $image = get_sub_field('image');
          ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>" data-aos-duration="400">
              <div class="cud-service-item cud-<?php echo $icon; ?> bg-<?php echo $color; ?>-subtle p-xxl-5 p-xl-4 p-lg-4 p-md-4 p-sm-3 p-3 vstack gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-3 h-100 justify-content-between rounded-4 border-1 border border-<?php echo $color; ?> border-opacity-25">
                <div class="cud-service-content vstack align-items-start gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-3">
                  <div class="d-flex align-items-center gap-3">
                    <div class="cud-service-icon bg-<?php echo $color; ?> bg-opacity-10 rounded-3 d-flex flex-row flex-wrap justify-content-center align-items-center">
                      <i class="cud-icon-<?php echo  $icon; ?> text-<?php echo $color; ?>"></i>
                    </div>
                    <h3 class="mb-0 flex-grow-1"><?php echo  $title; ?></h3>
                  </div>
                  <?php echo  $description; ?>
                </div>
                <div class="cud-service-links d-flex flex-row flex-wrap align-items-center gap-xxl-3 gap-xl-3 gap-lg-3 gap-md-2 gap-sm-2 gap-2">
                  <a href="<?php echo  $pblink; ?>" class="btn btn-<?php echo $color; ?> text-white px-xxl-4 px-xl-4 px-lg-4 px-md-3 px-sm-3 px-3" aria-label="Read more <?php echo  $title; ?>">Read more</a>
                </div>
              </div>
            </div>
          <?php $delay = $delay + 100;
          endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="cud-about pt-xxl-6 pt-xl-6 pt-lg-5 pt-md-4 pt-0 overflow-hidden">
    <div class="container position-relative">
      <div class="circle-animation border border-opacity-10">
        <span class="tp-circle-1"></span>
        <span class="tp-circle-2"></span>
      </div>
      <div class="cud-about-wrap px-xxl-7 px-xl-7 px-lg-6 px-md-5 p-0">
        <div class="row">
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" data-aos="fade-left">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/home/about-img.png" class="img-fluid" data-box width="1150" height="1289" title="Who We Are" alt="Who We Are">
          </div>
          <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12" data-aos="fade-right">
            <div class="d-flex flex-column flex-wrap align-items-start justify-content-center gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-2 gap-2 h-100 ps-xxl-5 ps-xl-4 ps-lg-3 ps-md-3 ps-0">
              <div class="cud-heading d-flex flex-column flex-wrap gap-3 align-items-start justify-content-center align-content-start" data-aos="fade-up">
                <span class="cud-heading-primary position-relative d-flex flex-row align-items-center px-3 py-2 border border-1 shadow-sm border-primary-subtle text-primary shadow-sm bg-body gap-2 rounded-pill">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                  </svg>
                  <span class="text-body m-0">Who We Are</span>
                </span>
                <h2 class="cud-heading-title mb-0">A complete Creative Solutions provider for Web, Mobile & Software</h2>
              </div>
              <p data-aos="fade" class="m-0">We are three partners in CreativeuiDesign: Vishal, Narendra, and Suresh. Suresh Patel is an experienced and enthusiastic entrepreneur in the retail, restaurant, and fast food industry across several states in the USA. He successfully launched new restaurants, took existing establishments to the next level, and led major expansion projects. Suresh brings a wealth of knowledge and experience to the team, and we are excited to have him on board. Together, we strive to create innovative and creative designs that will take businesses to the next level. With Suresh's expertise and combined passion for design, we are confident that we can help our clients achieve their goals and create the perfect brand image.</p>
              <a href="<?php echo get_permalink(371); ?>" class="btn btn-primary text-white px-xxl-4 px-xl-4 px-lg-4 px-md-3 px-sm-3 px-3" aria-label="Read more about us" data-aos="fade-left" data-aos-offset="100" data-aos-duration="200">Read more</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section class="cud-portfolios w-100 overflow-hidden" id="cud-portfolios">
    <div class="container vstack align-items-start gap-xxl-5 gap-xl-5 gap-lg-4 gap-md-3 gap-sm-2 gap-2">
      <div class="cud-portfolios-wrap w-100 hstack flex-wrap align-items-center justify-content-between gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-2 gap-2">
        <div class="cud-heading d-flex flex-column flex-wrap gap-3 align-items-start h-100 justify-content-center align-content-start" data-aos="fade-left">
          <span class="cud-heading-primary position-relative d-flex flex-row align-items-center px-3 py-2 border border-1 shadow-sm  border-primary-subtle text-primary shadow-sm bg-body-dark gap-2 rounded-pill">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
              <circle cx="8" cy="8" r="8" />
            </svg>
            <span class="text-white m-0">Portfolio</span>
          </span>
          <h2 class="cud-heading-title mb-0 text-white">Explore Our Exceptional Work</h2>
        </div>
        <a href="<?php echo site_url('portfolio'); ?>" class="btn btn-primary text-white px-xxl-4 px-xl-4 px-lg-4 px-md-3 px-sm-3 px-3" aria-label="View all portfolio" data-aos="fade-right" data-aos-delay="150">View all →</a>
      </div>
      <div class="cud-portfolios-content set_more_posts w-100">
        <div class="row">
          <?php
          $args1 = array(
            'posts_per_page' => 3,
            'post_type'   => 'portfolios'
          );
          $all_post_count = count(get_posts($args1));
          $args = array(
            'posts_per_page' => 3,
            'post_type'   => 'portfolios'
          );

          $latest_post = get_posts($args);
          $delay = 100;
          foreach ($latest_post as $portfolio) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($portfolio->ID), 'single-post-thumbnail');
            global $wpdb;
            $cUd404_post_view = $wpdb->prefix . "post_view";
            $view_count = $wpdb->get_row("SELECT COUNT(pw.post_id) AS view_count FROM $cUd404_post_view AS pw WHERE pw.post_id=$portfolio->ID");
            $viewer_count = view_count_formate($view_count->view_count);
          ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>" data-aos-duration="400">
              <div class="cud-portfolios-item d-flex flex-row flex-wrap align-items-start w-100 h-100 gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-3">
                <a href="<?php echo get_permalink($portfolio->ID); ?>" class="cud-portfolios-item-img d-flex flex-row flex-wrap overflow-hidden position-relative rounded-2 w-100">
                  <img src="<?php echo $image[0]; ?>" title="<?php echo $portfolio->post_title; ?>" alt=" <?php echo $portfolio->post_title; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" class="img-fluid" />
                </a>
                <div class="cud-portfolios-item-title d-flex flex-row flex-nowrap justify-content-between w-100 gap-xxl-3 gap-xl-3 gap-lg-3 gap-md-2 gap-sm-2 gap-2">
                  <h2 class="m-0 fw-semibold">
                    <a href="<?php echo get_permalink($portfolio->ID); ?>" title="<?php echo $portfolio->post_title; ?>"><?php echo $portfolio->post_title; ?></a>
                  </h2>
                  <span class="d-flex flex-row flex-nowrap justify-content-between align-items-center gap-2 fw-semibold">
                    <i class="cud-icon-eye"></i><?php echo $viewer_count; ?>
                  </span>
                </div>
              </div>
            </div>
          <?php $delay = $delay + 100;
          } ?>
        </div>
      </div>
    </div>
  </section>
  <section class="cud-technology overflow-hidden pt-2 pb-3">
    <div class="container vstack align-items-start gap-xxl-5 gap-xl-5 gap-lg-4 gap-md-3 gap-sm-2 gap-2 align-items-center">
      <div class="cud-heading d-flex flex-column flex-wrap gap-3 align-items-start h-100 justify-content-center align-items-center" data-aos="fade-up">
        <span class="cud-heading-primary position-relative d-flex flex-row align-items-center px-3 py-2 border border-1 shadow-sm border-primary-subtle text-primary shadow-sm bg-body gap-2 rounded-pill">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8" />
          </svg>
          <span class="text-body m-0">Technologies</span>
        </span>
        <h2 class="cud-heading-title mb-0 text-center">Technology has made us ever more productive.</h2>
      </div>
      <div class="cud-technology-wrap cud-tabs w-100 vstack gap-xxl-5 gap-xl-5 gap-lg-4 gap-md-3 gap-sm-3 gap-3">
        <?php while (have_posts()) : the_post(); ?>
          <?php if (have_rows('technology')) : ?>
            <ul class="nav nav-tabs hstack gap-1 justify-content-center border-0" id="myTab" role="tablist" data-aos="fade-up" data-aos-delay="300" data-aos-offset="5">
              <?php $i = 0;
              while (have_rows('technology')) : the_row(); ?>
                <li class="nav-item p-0 m-0" role="presentation">
                  <button class=" btn border-0
									<?php if ($i == 0) {
                    echo 'active';
                  } ?>" id="cud-<?php the_sub_field('tab_name'); ?>-tab" data-bs-toggle="tab" data-bs-target="#cud-<?php the_sub_field('tab_name'); ?>" type="button" role="tab" aria-controls="cud-<?php the_sub_field('tab_name'); ?>" aria-selected="true"><?php the_sub_field('tab_name'); ?></button>
                </li>
              <?php $i++;
              endwhile; // while( has_sub_field('to-do_lists') ):
              ?>
            </ul>
            <div class="tab-content">
              <?php $i = 0;
              while (have_rows('technology')) : the_row(); ?>
                <div class="tab-pane
									<?php if ($i == 0) {
                    echo 'active';
                  } ?>" id="cud-<?php the_sub_field('tab_name'); ?>" role="tabpanel" aria-labelledby="cud-<?php the_sub_field('tab_name'); ?>-tab" tabindex="0">
                  <?php if (have_rows('technology_list')) : ?>
                    <div class="row d-flex justify-content-center">
                      <?php $delay = 100;
                      while (have_rows('technology_list')) : the_row(); ?>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>" data-aos-duration="400">
                          <div class="cud-technology-item vstack gap-xxl-3 gap-xl-3 gap-lg-3 gap-md-3 gap-sm-2 gap-2 rounded-4 overflow-hidden
													<?php if (get_sub_field('technology_link') != "") {
                            echo 'cud-has-link';
                          } else {
                            echo 'p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3';
                          } ?>">
                            <?php if (get_sub_field('technology_link') != "") { ?>
                              <a href="<?php echo get_sub_field('technology_link'); ?>" class="vstack gap-3  align-items-center
															<?php if (get_sub_field('technology_link') != "") {
                                echo 'p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3';
                              }
                              ?>
															">
                              <?php } ?>
                              <i class="cud-icon-<?php the_sub_field('technology_icon'); ?>"></i>
                              <h3 class="fw-normal m-0"><?php the_sub_field('technology_name'); ?></h3>
                              <?php if (get_sub_field('technology_link') != "") { ?>
                              </a>
                            <?php } ?>
                          </div>
                        </div>
                      <?php $delay = $delay + 100;
                      endwhile; ?>
                    </div>
                  <?php endif; // if( get_field('technology_list') ):
                  ?>
                </div>
              <?php $i++;
              endwhile; // while( has_sub_field('to-do_lists') ):
              ?>
            </div>
          <?php endif; // if( get_field('technology') ):
          ?>
        <?php endwhile; // end of the loop.
        ?>
      </div>
    </div>
  </section>
  <section class="cud-blog overflow-hidden w-100">
    <div class="container">
      <div class="row">
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 d-flex flex-column justify-content-center align-items-start gap-4">
          <?php $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full"); ?>
          <?php if (have_rows('banner', 376)) : ?>
            <?php while (have_rows('banner', 376)) : the_row(); ?>
              <div>
                <div class="cud-heading d-flex flex-column flex-wrap gap-3 align-items-start h-100 justify-content-center align-content-start" data-aos="fade-up">
                  <?php if (get_sub_field('banner_subtitle') != "") { ?>
                    <span class="cud-heading-primary position-relative d-flex flex-row align-items-center px-3 py-2 border border-1 shadow-sm border-primary-subtle text-primary shadow-sm bg-body gap-2 rounded-pill">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8" />
                      </svg>
                      <span class="text-body m-0"><?php echo get_sub_field('banner_subtitle') ?></span>
                    </span>
                  <?php } ?>
                  <?php if (get_sub_field('banner_title') != "") { ?>
                    <h2 class="cud-heading-title mb-0"><?php echo get_sub_field('banner_title') ?></h2>
                  <?php } ?>
                </div>
              </div>
              <?php if (get_sub_field('banner_description') != "") { ?>
                <p class="mb-0" data-aos="fade-up" data-aos-delay="150"><?php echo get_sub_field('banner_description') ?></p>
              <?php } ?>
              <a href="<?php echo get_permalink(376); ?>" class="btn btn-primary text-white" aria-label="View all blogs" data-aos="fade-up" data-aos-delay="300">View all</a>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <?php
        $args = array(
          'posts_per_page'   => 2,
          'offset'           => 0,
          'orderby'          => 'date',
          'order'            => 'DESC',
          'post_type'        => 'post',
          'post_status'      => 'publish',
          'suppress_filters' => true,
          'tax_query' => array(
            array(
              'taxonomy' => 'category',
              'field' => 'slug',
              'terms' => 'todays-special',
              'operator' => 'NOT IN'
            )
          ),
        );
        $posts_array = get_posts($args);
        $delay = 100;
        foreach ($posts_array as $blogpost) {
          $thumnail = wp_get_attachment_image_src(get_post_thumbnail_id($blogpost->ID), 'single-post-thumbnail');

          $cates = wp_get_post_terms($blogpost->ID, 'category',  array());
          // print_r($cates);
        ?>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>">
            <div class="cud-blog-item d-flex flex-column flex-wrap align-items-start gap-3">
              <?php
              $custom_logo_id = get_theme_mod('custom_logo');
              $image = wp_get_attachment_image_src($custom_logo_id, 'full');
              $image_alt =  get_post_meta(get_post_thumbnail_id($blogpost->ID), '_wp_attachment_image_alt', true);
              ?>
              <a href="<?php echo get_permalink($blogpost->ID) ?>" class="ratio ratio-16x9">
                <img class="img-fluid rounded-3" src="<?php echo $thumnail[0]; ?>" title="<?php echo $image_alt ?>" alt="<?php echo $image_alt; ?>" width="<?php echo $thumnail[1]; ?>" height="<?php echo $thumnail[2]; ?>">
              </a>
              <?php foreach ($cates as $cate) { ?>
                <a class="cud-blog-category py-2 px-3 rounded-5 text-primary bg-primary bg-opacity-5" href="<?php echo get_term_link($cate->slug, 'category'); ?>"><?php echo $cate->name; ?></a>
              <?php } ?>
              <h3 class="d-flex flex-row flex-wrap m-0">
                <a href="<?php echo get_permalink($blogpost->ID) ?>"><?php echo $blogpost->post_title; ?></a>
              </h3>
            </div>
          </div>
        <?php $delay = $delay + 100;
        } ?>
      </div>
    </div>
  </section>
  <section class="cud-custom-package w-100 mb-xxl-6 mb-xl-5 mb-3 overflow-hidden">
    <div class="container">
      <div class="row ">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-right">
          <div class="cud-custom-package-content cud-custom bg-warning bg-opacity-10 h-100 p-xxl-5 p-xl-5 p-lg-4 p-md-4 p-sm-4 p-4 d-flex flex-column flex-wrap justify-content-between align-items-center rounded-3">
            <h2 class="fs-4 fw-light mb-xxl-4 mb-xl-4 mb-lg-4 mb-md-3 mb-sm-3 mb-3 text-center">Want to have a custom package?</h2>
            <?php //if (have_rows('links', 'option')) :
            ?>
            <?php //$i = 0;
            // while (have_rows('links', 'option')) : the_row();
            // 	$i++;
            // 	if ($i == 2) :
            ?>
            <span onclick="tidioChatApi.display(true);tidioChatApi.open()" rel="noopener" class="btn btn-warning" title="Quick Chat">Quick Chat</span>
            <?php
            // 	endif;
            // endwhile;
            ?>
            <?php //endif;
            ?>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-left">
          <div class="cud-custom-package-content bg-primary bg-opacity-10 h-100 p-xxl-5 p-xl-5 p-lg-4 p-md-4 p-sm-4 p-4 d-flex flex-column flex-wrap justify-content-between align-items-center rounded-3">
            <h2 class="fs-4 fw-light mb-xxl-4 mb-xl-4 mb-lg-4 mb-md-3 mb-sm-3 mb-3 text-center">Hire Dedicated Developers</h2>
            <a href="<?php echo site_url('hire'); ?>" class="btn btn-primary text-white" title="View Packages">View Packages</a>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>
<?php
get_footer();
