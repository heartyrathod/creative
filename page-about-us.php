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
      <div class="cud-about-content overflow-hidden px-xxl-7 px-xl-7 px-lg-6 px-md-4 px-0 gap-xxl-5 gap-xl-5 gap-lg-4 gap-3 d-flex flex-column">
        <div class="row gap-xxl-5 gap-xl-5 gap-lg-4 gap-md-4 gap-3">
          <div class="col-12 gap-xxl-5 gap-xl-5 gap-lg-4 gap-3 d-flex flex-column">
            <h2 class="text-primary">The Back Story</h2>
            <h3>We are a powerful and deserving competitor in the web development industry. As a team, we cooperate with a client. At every level of the process, there is communication with the client.</h3>
            <div class="cud-about-content-text d-flex flex-row flex-xxl-nowrap flex-xl-nowrap flex-lg-nowrap flex-md-nowrap flex-wrap justify-content-between align-items-start gap-xxl-5 gap-xl-5 gap-lg-4 gap-md-4 gap-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/about/about.svg" width="150" height="150" title="Our Story" alt="Our Story" data-aos="zoom-in">
              <p class="flex-grow-1 m-0">We are three partners in CreativeuiDesign: Vishal, Narendra, and Suresh. Suresh Patel is an experienced and enthusiastic entrepreneur in the retail, restaurant, and fast food industry across several states in the USA. He successfully launched new restaurants, took existing establishments to the next level, and led major expansion projects. Suresh brings a wealth of knowledge and experience to the team, and we are excited to have him on board. Together, we strive to create innovative and creative designs that will take businesses to the next level. With Suresh's expertise and combined passion for design, we are confident that we can help our clients achieve their goals and create the perfect brand image.</p>
            </div>
          </div>
          <div class="col-12">
            <ul class="cud-half">
              <li>
                <span>Art Direction & Brand Strategy</span>
                <p>Establishing greater distances between people and how they travel through an original and powerful campaign.</p>
              </li>
              <li>
                <span>Designing websites and apps with UX/UI</span>
                <p>Obtain a regulator once an enterprise like the one she and the other person had when they were credited and pushed.</p>
              </li>
              <li>
                <span>6 years of diligent investigation</span>
                <p>Our forefathers had a remedy. This performs the roles of your email marketing expert, newsletter provider, and campaign manager.</p>
              </li>
              <li>
                <span>Audience division</span>
                <p>Segmenting can increase audience engagement. Targeting subsets of your contacts will increase your conversions. Give them the material they require.</p>
              </li>
              <li>
                <p>Creative UI Design is a <a href="https://creativeuidesign.com/web-development/">Web Devlopment Company</a> spcializes in creating stunning websites and digital solutions</p>
              </li>
              <li>
                <p>As a <a href="https://creativeuidesign.com/mobile-app-development/">Mobile App Devlopment</a> Company, Creative UI Design specializes in creating innovative and user-friendly mobile applications for businesses of all sizes</p>
              </li>
            </ul>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12" data-aos="fade-left" data-aos-delay="150">
                <div class="bg-success-subtle d-flex flex-wrap justify-content-center align-items-center rounded-4 p-4">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/about/mission.png" width="500" height="500" alt="Our Mission" title="Our Mission" class="img-fluid w-75">
                </div>
              </div>
              <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-8 col-sm-12 col-12 d-flex flex-column justify-content-center gap-3" data-aos="fade-right" data-aos-delay="150">
                <h4 class="fs-5 fw-bold">Our Mission</h4>
                <p>We have created our own performance assessment methods to help our clients through the software development process. We can better predict our prospects because we have seen how technology has developed from Generation X to Generation Y.</p>
              </div>
              <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12" data-aos="fade-left" data-aos-delay="150" data-aos-duration="300">
                <div class="bg-blue-subtle d-flex flex-wrap justify-content-center align-items-center rounded-4 p-4">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/about/vision.png" width="500" height="500" alt="Our Vision" title="Our Vision" class="img-fluid w-75">
                </div>
              </div>
              <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-8 col-sm-12 col-12 d-flex flex-column justify-content-center gap-3" data-aos="fade-right" data-aos-delay="150" data-aos-duration="300">
                <h4 class="fs-5 fw-bold">Our Vision</h4>
                <p>Our strategy of inventing technology and enhancing it with a consumer experience is the foundation of our vision. By implementing cutting-edge technology, digital transformation, and self-discovery, we are strengthening our abilities to manage various cross-border operations worldwide.</p>
              </div>
            </div>
          </div>
          <div class="col-12 d-flex flex-column justify-content-center gap-3">
            <h3>A word from our Founder</h3>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/about/quote.svg" width="80" height="53" title="Quote" alt="Quote" class="img-fluid" loading="lazy">
            <p class="fs-6">We are specialists in processing unique corporate work while putting everything into a digital and cyber matrix. Our professionals are implementing new technical innovations in tandem with technological developments to provide you with tomorrow's change now. Every industry has unique requirements, and all of those unique requirements call for unique solutions. We at Creative UI Design LLC provide uniquely created solutions to support that particular industry's unique features.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>
<?php
get_footer();
