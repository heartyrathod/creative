<?php
/*
Template Name: Service Details
Template Post Type: post, page, event
*/
get_header();

?>
<main class="cud-main">
  <?php include("banner.php"); ?>
  <?php if (is_page('ui-ux-design')) { ?>
    <section class="cud-after-banner overflow-hidden d-flex flex-column mt-xxl-5 mt-xl-5 mt-lg-4 mt-3 w-100">
      <div class="container">
        <div class="row">
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12" data-aos="fade-right">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/services/four-clients.webp" title="Creative UI Designer" alt="Creative UI Designer" width="637" height="603" class="img-fluid">
          </div>
          <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
            <div class="cud-after-banner-wrap d-flex flex-row flex-wrap align-items-center h-100">
              <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="cud-after-banner-heading d-flex flex-column flex-wrap gap-3 pe-xxl-4 pe-xl-4 pe-3 border-1 border-end w-100 border-gray-300">
                    <p class="fs-6 fw-normal m-0" data-aos="fade-up">Creative UI Designer</p>
                    <h2 data-aos="fade-up" data-aos-delay="100">Clients gets always expectional works form us..</h2>
                  </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="cud-after-banner-content d-flex flex-column align-items-start justify-content-center flex-wrap gap-3 ps-xxl-4 ps-xl-4 ps-lg-4 ps-md-3 ps-0 w-100">
                    <p class="fs-5 fw-light m-0" data-aos="fade-up">We created stunning and quality design over last 12 years with satisfaction.</p>
                    <a href="<?php echo site_url('contact-us'); ?>" class="btn btn-primary text-white" data-aos="fade-up" data-aos-delay="100">Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>
  <section class="entry-content d-flex flex-column my-xxl-5 my-xl-5 my-lg-4 my-3 w-100">
    <div class="container  d-flex flex-column gap-3">
      <?php echo the_content(); ?>
      <div class="cud-cta mt-2  p-lg-4 p-3 shadow border-start border-5 border-primary d-flex align-items-center justify-content-between gap-3 flex-wrap">
        <p class="m-0">What good is an idea if it remains an idea? Let's put efforts together to give it a look of Website or Mobile Application.</p>
        <a href="javascript:;" onclick="tidioChatApi.display(true);tidioChatApi.open()" class="btn btn-blue">Let’s Start a discussion</a>
      </div>
    </div>
  </section>
  <?php if (is_page('ui-ux-design')) { ?>
    <section class="d-flex flex-column my-xxl-5 my-xl-5 my-lg-4 my-3 w-100 overflow-hidden">
      <div class="container d-flex flex-column gap-xxl-5 gap-xl-5 gap-lg-4 gap-md-4 gap-3">
        <?php if (have_rows('service_type')) : ?>
          <?php while (have_rows('service_type')) : the_row();
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $pbname = get_sub_field('portfolio_button_name');
            $pblink =  get_sub_field('portfolio_button_link');
            $packagename =  get_sub_field('package_button_label');
            $packagelinkk =  get_sub_field('package_button_link');
            $image = get_sub_field('image');
            $color = get_sub_field('color');
            $index = get_row_index();
          ?>
            <div class="row  <?php echo ($index % 2 ? 'flex-xxl-row-reverse flex-xl-row-reverse flex-lg-row-reverse  flex-md-row-reverse'  : '') ?>">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" data-aos="fade-left">
                <div class="cud-service-img bg-<?php echo $color; ?>-subtle p-xxl-6 p-xl-6 p-lg-5 p-md-4 p-3 rounded-4 d-flex flex-wrap flex-row justify-content-center align-items-center h-100">
                  <img src="<?php echo $image['url']; ?>" title="<?php echo  $title; ?>" alt="<?php echo  $title; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" class="img-fluid w-75">
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  d-flex flex-column flex-wrap justify-content-center align-items-start gap-xxl-4 gap-xl-4 gap-3" data-aos="fade-right">
                <div class="cud-service-icon bg-<?php echo $color; ?>-subtle rounded-3 d-flex flex-row flex-wrap justify-content-center align-items-center p-xxl-4 p-xl-4 p-3" data-aos="fade-up" data-aos-delay="100">
                  <i class="cud-icon-<?php echo  $icon; ?> text-<?php echo $color; ?> fs-2"></i>
                </div>
                <h3 data-aos="fade-up" data-aos-delay="200"><?php echo  $title; ?></h3>
                <div data-aos="fade-up" data-aos-delay="300"><?php echo  $description; ?></div>
                <div class="cud-service-actions d-flex flex-row flex-wrap gap-3" data-aos="fade-up" data-aos-delay="400">
                  <a href="<?php echo  $pblink; ?>" class="btn btn-<?php echo $color ?>"><?php echo   $pbname; ?></a>
                  <a href="<?php echo  $packagelinkk; ?>" class="btn btn-outline-<?php echo $color ?>"><?php echo  $packagename; ?></a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </section>
  <?php } ?>
  <?php if (have_rows('service_technology_list')) : ?>
    <section class="cud-technology mt-0  mb-xxl-5 mb-xl-5 mb-lg-4 mb-3">
      <div class="container d-flex flex-column gap-xxl-4 gap-xl-4 gap-3">

        <h2 class="fs-5" data-aos="fade-up">Technology We Use</h2>
        <div class="row">
          <?php $delay = 50;
          while (have_rows('service_technology_list')) : the_row(); ?>
            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>">
              <div class="d-flex flex-column flex-wrap justify-content-between align-items-start gap-3 border border-2 border-hover-<?php the_sub_field('color'); ?> border-<?php the_sub_field('color'); ?> border-opacity-10 p-xxl-4 p-xl-4 p-lg-4 p-3 rounded-4 w-100 h-100">
                <div class="d-flex flex-column flex-wrap align-items-start gap-3">
                  <span class="d-flex flex-wrap flex-row justify-content-center align-items-center bg-<?php the_sub_field('color'); ?> bg-opacity-10 p-4 rounded-4">
                    <i class="cud-icon-<?php the_sub_field('technology_icon'); ?> text-<?php the_sub_field('color'); ?> fs-3"></i>
                  </span>
                  <h3 class="fs-6"><?php the_sub_field('technology_name'); ?></h3>
                  <p><?php the_sub_field('technology_description'); ?></p>
                </div>
                <?php if (get_sub_field('technology_link') != "") { ?>
                  <a href="<?php echo get_sub_field('technology_link'); ?>" class="btn btn-sm btn-light-<?php the_sub_field('color'); ?>" aria-label="Read more <?php the_sub_field('technology_name'); ?>">Read more →</a>
                <?php } ?>
              </div>
            </div>
          <?php $delay = $delay + 50;
          endwhile; ?>
        </div>

      </div>
    </section>

  <?php endif; ?>
  <?php if (!is_page('seo-services')) { ?>
    <section class="cud-portfolios w-100 overflow-hidden m-0 w-100 pt-0" id="cud-portfolios">
      <div class="container vstack align-items-start gap-xxl-5 gap-xl-5 gap-lg-4 gap-md-3 gap-sm-2 gap-2">
        <div class="cud-portfolios-wrap w-100 hstack flex-wrap align-items-center justify-content-between gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-2 gap-2">
          <div class="cud-heading d-flex flex-column flex-wrap gap-3 align-items-start h-100 justify-content-center align-content-start" data-aos="fade-left">
            <span class="cud-heading-primary position-relative d-flex flex-row align-items-center px-3 py-2 border border-1 shadow-sm  border-primary-subtle text-primary shadow-sm bg-body-dark gap-2 rounded-pill">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                <circle cx="8" cy="8" r="8" />
              </svg>
              <p class=" m-0">Portfolio</p>
            </span>
            <h2 class="cud-heading-title mb-0 ">Explore Our Exceptional Work</h2>
          </div>
          <a href="<?php echo site_url('portfolio'); ?>" class="btn btn-primary text-white px-xxl-4 px-xl-4 px-lg-4 px-md-3 px-sm-3 px-3" aria-label="View all portfolio" data-aos="fade-right" data-aos-delay="150">View all →</a>
        </div>

        <div class="cud-portfolios-content set_more_posts w-100">
          <div class="row">
            <?php
            // echo $post->post_name;
            $postcat = get_the_category($post->ID);
            $cat_slug = '';
            if ($post->post_name == 'mobile-app-development') {
              $cat_slug = 'mobile-app-design';
            } else if ($post->post_name == 'web-development') {
              $cat_slug = 'web-design';
            } else if ($post->post_name == 'ui-ux-design') {
              $cat_slug = 'branding-design';
            }
            $args = array(
              'posts_per_page' => 3,
              'post_type'   => 'portfolios',
              'tax_query' => array(
                array(
                  'taxonomy' => 'portfolio_category',
                  'field' => 'slug',
                  'terms' => $cat_slug,
                )
              ),
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
                <div class="cud-portfolios-item  d-flex flex-row flex-wrap align-items-start w-100 h-100 gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-3">
                  <a href="<?php echo get_permalink($portfolio->ID); ?>" class="cud-portfolios-item-img  d-flex flex-row flex-wrap overflow-hidden position-relative rounded-2 w-100">
                    <img src="<?php echo $image[0]; ?>" title="<?php echo $portfolio->post_title; ?>" alt="<?php echo $portfolio->post_title; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" class="img-fluid" />
                  </a>
                  <div class="cud-portfolios-item-title d-flex flex-row flex-nowrap justify-content-between w-100 gap-xxl-3 gap-xl-3 gap-lg-3 gap-md-2 gap-sm-2 gap-2">
                    <h2 class="m-0 fw-semibold">
                      <a href="<?php echo get_permalink($portfolio->ID); ?>" title="<?php echo $portfolio->post_title; ?>" alt="<?php echo $portfolio->post_title; ?>"><?php echo $portfolio->post_title; ?></a>
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
  <?php } ?>
</main>
<?php
get_footer();
?>