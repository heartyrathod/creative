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
  <section class="entry-content d-flex flex-column my-xxl-5 my-xl-5 my-lg-4 my-3 w-100 overflow-hidden">
    <div class="container d-flex flex-column gap-xxl-5 gap-xl-5 gap-lg-4 gap-md-4 gap-3">
      <?php if (have_rows('service_type')) : ?>
        <?php while (have_rows('service_type')) : the_row();
          $icon = get_sub_field('icon');
          $color = get_sub_field('color');
          $title = get_sub_field('title');
          $description = get_sub_field('description');
          $pbname = get_sub_field('portfolio_button_name');
          $pblink =  get_sub_field('portfolio_button_link');
          $packagename =  get_sub_field('package_button_label');
          $packagelinkk =  get_sub_field('package_button_link');
          $image = get_sub_field('image');
          $index = get_row_index();
        ?>
          <div class="row <?php echo ($index % 2 ? 'flex-xxl-row-reverse flex-xl-row-reverse flex-lg-row-reverse  flex-md-row-reverse'  : '') ?>">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-left">
              <div class="cud-service-img bg-<?php echo $color; ?>-subtle p-xxl-6 p-xl-6 p-lg-5 p-md-4 p-3 rounded-4 d-flex flex-wrap flex-row justify-content-center align-items-center h-100">
                <img src="<?php echo $image['url']; ?>" title="<?php echo  $title; ?>" alt="<?php echo  $title; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" class="img-fluid w-75">
              </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex flex-column flex-wrap justify-content-center align-items-start gap-xxl-4 gap-xl-4 gap-3" data-aos="fade-right">
              <div class="cud-service-icon bg-<?php echo $color; ?>-subtle rounded-3 d-flex flex-row flex-wrap justify-content-center align-items-center p-xxl-4 p-xl-4 p-3" data-aos="fade-up" data-aos-delay="100">
                <i class="cud-icon-<?php echo  $icon; ?> text-<?php echo $color; ?> fs-2"></i>
              </div>
              <h2 data-aos="fade-up" data-aos-delay="200"><?php echo  $title; ?></h2>
              <div data-aos="fade-up" data-aos-delay="300"> <?php echo  $description; ?></div>
              <?php if (have_rows('technology')) : ?>
                <ul class="cud-service-technology d-flex flex-row flex-wrap gap-3 list-unstyled before-none">
                  <?php $delay = 100;
                  while (have_rows('technology')) : the_row();
                    $tech_icon = get_sub_field('technology_icon');
                    $tech_name = get_sub_field('technology_name');
                    $tech_link = get_sub_field('technology_link');
                  ?>
                    <li class=" d-flex flex-column flex-wrap justify-content-center align-items-center gap-2 w-auto p-0" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>">
                      <?php if ($tech_link != "") { ?>
                        <a href="<?php echo $tech_link; ?>" class="cud-service-technology-ic text-body" title="<?php echo  $tech_name; ?>">
                        <?php } ?>
                        <i class="cud-icon-<?php echo  $tech_icon; ?> fs-2 text-body-tertiary"></i>
                        <?php if ($tech_link != "") { ?>
                        </a>
                      <?php } ?>
                      <?php if ($tech_link != "") { ?>
                        <a href="<?php echo  $tech_link; ?>" class=" text-body">
                        <?php } ?>
                        <?php echo  $tech_name; ?>
                        <?php if ($tech_link != "") { ?>
                        </a>
                      <?php } ?>
                    </li>
                  <?php $delay = $delay + 100;
                  endwhile; ?>
                </ul>
              <?php endif; ?>
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

  <div class="container">
    <div class="cud-cta my-xxl-5 my-xl-4  my-3  p-lg-4 p-3 shadow border-start border-5 border-primary d-flex align-items-center justify-content-between gap-3 flex-wrap">
      <p class="m-0">What good is an idea if it remains an idea? Let's put efforts together to give it a look of Website or Mobile Application.</p>
      <a href="javascript:;" onclick="tidioChatApi.display(true);tidioChatApi.open()" class="btn btn-blue">Let’s Start a discussion</a>
    </div>
  </div>
</main>
<?php
get_footer();
