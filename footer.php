<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<footer class="cud-footer py-xxl-5 py-xl-5 py-lg-5 py-4 w-100 position-relative overflow-hidden">
	<div class="container">
		<div class="row">
			<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="zoom-in">
				<div class="cud-footer-contact rounded-3 p-xxl-4 p-xl-4 p-lg-4 p-3 h-100 d-flex flex-column flex-wrap align-items-start gap-3">
					<h2 class="cud-footer-title mb-0 fs-6 fw-bold">Address</h2>
					<?php if (have_rows('contact_info', 'option')) : ?>
						<?php while (have_rows('contact_info', 'option')) : the_row(); ?>
							<p class="mb-0"><?php the_sub_field('address'); ?></p>
					<?php endwhile;
					endif; ?>
				</div>
			</div>
			<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="zoom-in" data-aos-delay="200">
				<div class="cud-footer-contact  rounded-3 p-xxl-4 p-xl-4 p-lg-4 p-3 h-100 d-flex flex-column flex-wrap align-items-start gap-3">
					<h2 class="cud-footer-title mb-0 fs-6 fw-bold">Email address</h2>
					<?php if (have_rows('contact_info', 'option')) : ?>
						<?php while (have_rows('contact_info', 'option')) : the_row(); ?>
							<?php if (have_rows('emails', 'option')) : ?>
								<?php while (have_rows('emails', 'option')) : the_row(); ?>
									<a href="mailto:<?php the_sub_field('email_name'); ?>" class="text-break" title="<?php the_sub_field('email_name'); ?>"><?php the_sub_field('email_name'); ?></a>
							<?php endwhile;
							endif; ?>
					<?php endwhile;
					endif; ?>
				</div>
			</div>
			<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="zoom-in" data-aos-delay="400">
				<div class="cud-footer-contact  rounded-3 p-xxl-4 p-xl-4 p-lg-4 p-3 h-100 d-flex flex-column flex-wrap align-items-start gap-3">
					<h2 class="cud-footer-title mb-0 fs-6 fw-bold">Phone</h2>
					<div class="vstack align-items-start">
						<?php if (have_rows('contact_info', 'option')) : ?>
							<?php while (have_rows('contact_info', 'option')) : the_row(); ?>
								<?php if (have_rows('phone', 'option')) : ?>
									<?php while (have_rows('phone', 'option')) : the_row(); ?>
										<?php
										$ph = get_sub_field('phone_number');
										$phone_number = preg_replace('/\D+/', '', $ph);
										?>
										<a href="tel:<?php echo $phone_number; ?>" title="<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a>
								<?php endwhile;
								endif; ?>
						<?php endwhile;
						endif; ?>
					</div>
				</div>
			</div>
			<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12" data-aos="zoom-in" data-aos-delay="600">
				<div class="cud-footer-contact  rounded-3 p-xxl-4 p-xl-4 p-lg-4 p-3 h-100 d-flex flex-column flex-wrap align-items-start gap-3">
					<h2 class="cud-footer-title mb-0 fs-6 fw-bold">Schedule meeting</h2>
					<?php if (have_rows('links', 'option')) : ?>
						<?php $i = 0;
						while (have_rows('links', 'option')) : the_row();
							$i++;
							if ($i == 1) : ?>
								<a href="<?php echo the_sub_field('link_action'); ?>" target="_blank" rel="noopener" class="btn btn-primary text-white" title="Book Meeting">Book Meeting</a>
						<?php
							endif;
						endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
				<?php $menu = wp_get_nav_menu_object("Web Development (Footer)"); ?>
				<h3 class="cud-footer-title mb-3 fs-6 fw-bold">Web Development</h3>
				<?php
				echo wp_nav_menu(array(
					'menu'        => 'Web Development (Footer)',
					'menu_id'     => '',
					'menu_class'  => 'cud-footer-nav d-flex flex-row flex-wrap justify-content-start gap-2 m-0',
					'fallback_cb' => false,
					'depth'       => 1,
					'container_class' => 'mb-3'
				));
				?>
				<a href="<?php echo get_permalink(384); ?>" class="cud-view-all">View all web developments →</a>
			</div>
			<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="vstack gap-3">
					<div>
						<?php $menu = wp_get_nav_menu_object("Mobile App Development"); ?>
						<h3 class="cud-footer-title mb-3 fs-6 fw-bold"><?php echo $menu->name; ?></h3>
						<?php
						echo wp_nav_menu(array(
							'menu'        => 'Mobile App Development',
							'menu_id'     => '',
							'menu_class'  => 'cud-footer-nav d-flex flex-row flex-wrap justify-content-start gap-2 m-0',
							'fallback_cb' => false,
							'depth'       => 1,
						));
						?>
					</div>
					<div>
						<?php $menu = wp_get_nav_menu_object("Services"); ?>
						<h3 class="cud-footer-title mb-3 fs-6 fw-bold"><?php echo $menu->name; ?></h3>
						<?php
						echo wp_nav_menu(array(
							'menu'        => 'Services',
							'menu_id'     => '',
							'menu_class'  => 'cud-footer-nav d-flex flex-row flex-wrap justify-content-start gap-2 m-0',
							'fallback_cb' => false,
							'depth'       => 1,
						));
						?>
					</div>
				</div>
			</div>
			<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="vstack gap-3">
					<div>
						<?php $menu = wp_get_nav_menu_object("Insights"); ?>
						<h3 class="cud-footer-title mb-3 fs-6 fw-bold "><?php echo $menu->name; ?></h3>
						<?php
						echo wp_nav_menu(array(
							'menu'        => 'Insights',
							'menu_id'     => '',
							'menu_class'  => 'cud-footer-nav d-flex flex-row flex-wrap justify-content-start gap-2 m-0',
							'fallback_cb' => false,
							'depth'       => 1,
						));
						?>
					</div>
					<div>
						<?php $menu = wp_get_nav_menu_object("Support"); ?>
						<h3 class="cud-footer-title mb-3 fs-6 fw-bold"><?php echo $menu->name; ?></h3>
						<?php
						echo wp_nav_menu(array(
							'menu'        => 'Support',
							'menu_id'     => '',
							'menu_class'  => 'cud-footer-nav d-flex flex-row flex-wrap justify-content-start gap-2 m-0',
							'fallback_cb' => false,
							'depth'       => 1,
						));
						?>
					</div>
				</div>
			</div>
			<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="vstack gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-2 gap-2">
					<div>
						<h3 class="cud-footer-title mb-3 fs-6 fw-bold">Quick chat</h3>
						<?php if (have_rows('links', 'option')) : ?>
							<ul class="cud-footer-nav">
								<?php $i = 0;
								while (have_rows('links', 'option')) : the_row();
									$i++;
									if ($i != 1) : ?>
										<li>
											<a href="<?php echo the_sub_field('link_action'); ?>" target="_blank" rel="noopener"><?php echo the_sub_field('link_name'); ?></a>
										</li>
								<?php
									endif;
								endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="cud-footer-box">
						<h3 class="cud-footer-title mt-0 mb-3 fs-6 fw-bold">Follow us on</h3>
						<?php if (have_rows('social_links', 'option')) : ?>
							<ul class="cud-footer-social d-flex flex-wrap flex-row gap-3 m-0">
								<?php while (have_rows('social_links', 'option')) : the_row(); ?>
									<li class="w-auto p-0" data-aos="zoom-in" data-aos-delay="600">
										<a href="<?php the_sub_field('social_link'); ?>" target="_blank" title="<?php the_sub_field('social_name'); ?>" class="d-flex flex-row flex-wrap justify-content-center align-items-center">
											<i class="cud-icon-<?php the_sub_field('social_icon'); ?> fs-5"></i>
										</a>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="cud-footer-review w-100">
					<div class="row">
						<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6" data-aos="zoom-in" data-aos-delay="600">
							<a href="https://clutch.co/profile/creative-ui-design#reviews" target="_blank" rel="noopener" title="Clutch" class="bg-white py-xxl-4 py-xl-4 py-lg-4 py-3 px-xxl-4 px-xl-4 px-lg-4 px-2 rounded-3 w-100 d-flex flex-row flex-wrap justify-content-center align-items-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/generals/clutch.webp" width="300" height="100" class="img-fluid" title="Clutch" alt="Clutch">
							</a>
						</div>
						<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6" data-aos="zoom-in" data-aos-delay="800">
							<a href="https://www.goodfirms.co/company/creative-ui-design-llc" target="_blank" rel="noopener" title="GoodFirms" class="bg-white py-xxl-4 py-xl-4 py-lg-4 py-3 px-xxl-4 px-xl-4 px-lg-4 px-2 rounded-3 w-100 d-flex flex-row flex-wrap justify-content-center align-items-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/generals/goodfirms.webp" width="300" height="100" class="img-fluid" title="GoodFirms" alt="GoodFirms">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="cud-copy-rights py-4">
	<div class="container">
		<div class="cud-copy-rights-content d-flex flex-row flex-wrap justify-content-between align-items-center">
			<p class="m-0">©<?php echo date('Y'); ?> <span><?php echo get_bloginfo(); ?></span>. All Rights Reserved.</p>
		</div>
	</div>
</div>

<div class="cud-navigation-drawer cud-navigation-drawer-mainMenu bg-body">
	<div class="cud-navigation-drawer-header">
		<!-- <h2 class="cud-title">Wel<span>come</span></h2> -->
		<div class="cud-logo">
			<?php
			$custom_logo_id = get_theme_mod('custom_logo');
			$logo = wp_get_attachment_image_src($custom_logo_id, 'full');

			?>
			<a href="<?php echo get_option("siteurl"); ?>" title="<?php bloginfo('name'); ?>">
				<!-- <img src="<?php echo $logo[0]; ?>" alt="<?php bloginfo('name'); ?>" width="<?php echo $logo[1]; ?>" height="<?php echo $logo[2]; ?>" class="img-fluid"> -->
				<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 2398.6 580">
					<path style="fill:#FF0075;" d="M291.8,580H0l118.1-202.9l28.4-48.7l28.2,48.8l18.8,32.5l8.7,15.1l-42.4,24.5l-8.7-15.1 l-4.8-8.3L85.1,531.1h122l-6.9-11.9l42.4-24.5l21,36.4L291.8,580L291.8,580z M675,580H511.1l-28.2-48.9L284.7,187.9l-28.2-48.8 l28.4-48.7L337.5,0L675,580L675,580z M590,531.1L464,314.6L337.5,97.3l-24.4,42l226.2,391.9L590,531.1L590,531.1z M462.7,531.1 l-188-325.7l-28.2-48.8l-28.4,48.7l28.2,48.8l159.9,277h-66L213.1,311l-28.2-48.8L168.8,290l-12.2,20.9l28.2,48.8l98.9,171.3 l28.2,48.9h179L462.7,531.1L462.7,531.1z" />
					<g>
						<path class="cud-logo-c1" d="M859.3,396.1 c-91,0-159.1-63.8-159.1-157.1S770.3,82.8,860.5,82.8c41.3,0,86,15.1,110.7,43.7l-48.4,48.7c-13.4-18.5-37.2-27.3-59.7-27.3 c-49.7,0-85.2,38.6-85.2,91.1s34.7,91.1,83.9,91.1c28,0,50.1-12.6,62.6-30.2l49.7,47C948.2,377.2,909,396.1,859.3,396.1 L859.3,396.1z M1135.7,235.2c-6.3-1.7-12.1-2.1-17.5-2.1c-36.7,0-48.8,30.2-48.8,47.5v107.5h-68.5V178.9h66v30.2h0.8 c10.4-21,30.9-36.1,56.4-36.1c5.4,0,11.3,0.4,14.6,1.7L1135.7,235.2L1135.7,235.2z M1364.5,302.4h-150.7 c2.1,23.1,25.1,39.5,49.7,39.5c21.7,0,36.8-9.2,45.9-21.8l47.6,30.2c-19.6,28.6-52.2,44.5-94.4,44.5 c-62.6,0-114.4-39.9-114.4-110.5s49.3-112.1,112.3-112.1s104.4,42.4,104.4,113.8C1364.9,291.5,1364.9,297.4,1364.5,302.4 L1364.5,302.4z M1301.9,259.6c0-21.8-13.8-39.9-40.9-39.9s-45.5,18.5-47.2,39.9H1301.9L1301.9,259.6z M1402.1,207.5 c24.2-23.1,58.9-35.3,92.7-35.3c69.7,0,95.6,34.4,95.6,110.5v105.4h-62.6v-22.3h-1.2c-10.4,17.2-34.2,27.3-58.9,27.3 c-33,0-75.6-16.4-75.6-65.5c0-60.5,73.1-70.6,133.6-70.6v-3.4c0-20.6-16.3-30.2-37.6-30.2c-19.6,0-38.8,9.7-51.4,21.4L1402.1,207.5 L1402.1,207.5z M1527.8,297h-8.8c-30.1,0-63.9,3.8-63.9,28.6c0,16,15.9,21.4,29.7,21.4c27.6,0,43-16.8,43-42.8V297z M1711.5,230.6 v79.8c0,19.3,6.3,29.4,25.9,29.4c6.7,0,15-1.3,20-3.4l0.8,50.4c-9.2,3.4-25.1,6.3-39.7,6.3c-55.5,0-73.9-29.8-73.9-74.3v-88.2 h-33.4v-51.7h33v-55h67.2v55h48.8v51.7H1711.5L1711.5,230.6z M1827.6,150c-22.1,0-39.2-17.2-39.2-37.8s17.1-37.8,39.2-37.8 s39.2,16.8,39.2,37.8S1849.3,150,1827.6,150z M1793.3,388.1V178.9h68.5v209.2H1793.3z M2044.7,388.1h-73.9L1889,178.9h75.6 l43.8,135.7h1.2l43.8-135.7h73.1L2044.7,388.1L2044.7,388.1z M2358.7,302.4H2208c2.1,23.1,25.1,39.5,49.7,39.5 c21.7,0,36.8-9.2,45.9-21.8l47.6,30.2c-19.6,28.6-52.2,44.5-94.4,44.5c-62.6,0-114.4-39.9-114.4-110.5s49.3-112.1,112.3-112.1 s104.4,42.4,104.4,113.8C2359.1,291.5,2359.1,297.4,2358.7,302.4L2358.7,302.4z M2296.1,259.6c0-21.8-13.8-39.9-40.9-39.9 s-45.5,18.5-47.2,39.9H2296.1L2296.1,259.6z" />
						<path class="cud-logo-c2" d="M1452.2,525.4c-8.1,8.2-18.9,12.3-32.7,12.3s-24.6-4.1-32.7-12.3 s-12.1-19.3-12.1-33.3v-61.5h17.3v61.2c0,9.1,2.5,16.3,7.5,21.7c5,5.3,11.6,8,20,8s15-2.7,20-8c5-5.4,7.5-12.6,7.5-21.7v-61.2h17.3 v61.5C1464.3,506.1,1460.2,517.2,1452.2,525.4z M1488.6,535.6v-105h17.4v105H1488.6z M1608.5,430.6c15.7,0,28.4,4.8,38.1,14.5 c9.7,9.6,14.5,22.3,14.5,38s-4.8,28.4-14.5,38c-9.7,9.7-22.4,14.5-38.1,14.5h-40v-105L1608.5,430.6L1608.5,430.6z M1608.5,519.4 c10.4,0,18.9-3.3,25.3-10s9.7-15.5,9.7-26.2s-3.3-19.5-9.8-26.2s-14.9-10-25.3-10h-22.5v72.6H1608.5L1608.5,519.4z M1710.5,460 c12.9,0,22.8,4,29.5,12c6.8,8,9.5,19,8.3,32.9h-58.9c0.7,5.4,3.1,9.7,7.3,12.9s9.5,4.8,16,4.8c4.2,0,8.2-0.7,12.1-2.1 c3.9-1.4,6.9-3.2,9.1-5.5l10.1,9.9c-3.7,4-8.3,7.2-13.9,9.5c-5.6,2.3-11.6,3.5-17.8,3.5c-12.1,0-21.8-3.5-29.1-10.7 c-7.3-7.1-10.9-16.6-10.9-28.5s3.5-20.8,10.5-27.9S1699.1,460,1710.5,460L1710.5,460z M1710.9,474.6c-5.8,0-10.5,1.5-14.2,4.5 s-6.1,7.2-7.2,12.8h42.8c-0.6-5.3-2.8-9.5-6.6-12.6S1717,474.6,1710.9,474.6L1710.9,474.6z M1791.5,537.4c-12.4,0-23.5-3.7-33.2-11 l7.8-12.2c6.9,5.5,15.5,8.2,25.9,8.2c9.8,0,14.8-2.8,14.8-8.4c0-2.6-1.3-4.6-3.8-6c-2.5-1.4-6.6-2.4-12.3-3 c-9.6-0.9-17.1-3.3-22.3-7.3c-5.2-4-7.8-9.1-7.8-15.5c0-6.8,2.9-12.3,8.8-16.4c5.9-4.1,13.6-6.2,23.1-6.2c11.2,0,21,2.9,29.2,8.5 l-7.3,12c-6.6-4.2-13.6-6.3-21.2-6.3c-10.8,0-16.2,2.8-16.2,8.4c0,2.4,1.2,4.3,3.5,5.6c2.3,1.4,6.2,2.3,11.6,2.9 c10.9,1.2,18.9,3.6,23.9,7.4s7.5,9,7.5,16.1c0,7-2.9,12.5-8.7,16.7C1808.7,535.3,1801,537.4,1791.5,537.4L1791.5,537.4z  M1846.5,450.4c-3.1,0-5.6-1-7.6-2.9s-3-4.4-3-7.3c0-3.1,1-5.6,3-7.6s4.5-2.9,7.6-2.9s5.8,1,7.8,2.9c2,2,3.1,4.5,3.1,7.6 c0,2.9-1,5.3-3.1,7.3S1849.7,450.4,1846.5,450.4z M1838.1,535.6v-74.1h16.7v74.1H1838.1z M1949.8,497.2c0,13.5-6.3,23-18.8,28.5 c12.2,4.5,18.3,12.3,18.3,23.5c0,9.4-3.6,16.9-10.7,22.4c-7.2,5.5-16.7,8.3-28.5,8.3s-21.8-3-28.9-9.2c-7.2-6.1-10.5-14.2-10-24.2 h16.4c-0.2,5.5,1.8,9.9,5.9,13.2c4.1,3.3,9.7,5,16.6,5s12.2-1.5,16.2-4.3c4.1-2.9,6.1-6.7,6.1-11.4s-2-8.4-5.9-11s-9.3-4-16.2-4 c-12.2,0-21.9-3.3-29.2-10c-7.2-6.7-10.8-15.6-10.8-26.9s3.7-19.7,11.1-26.8s16.8-10.6,28.3-10.6c7.8,0,14.5,1.6,20,5l9.4-11.5 l12.1,9.3l-10.3,12C1946.9,481.5,1949.8,489,1949.8,497.2L1949.8,497.2z M1893.5,513c4.2,4,9.8,6,16.6,6s12.4-2,16.6-6 c4.2-4,6.3-9.2,6.3-15.8s-2.1-11.9-6.3-16c-4.2-4-9.8-6.1-16.7-6.1s-12.5,2-16.7,6.1s-6.3,9.4-6.3,16S1889.3,509,1893.5,513 L1893.5,513z M2007,460c9.5,0,17.2,3.1,22.9,9.5c5.7,6.3,8.6,14.7,8.6,25.2v41h-16.7v-39.9c0-6.5-1.6-11.5-4.8-15.1 s-7.6-5.4-13.1-5.4c-6.1,0-11,2-14.9,6.1c-3.9,4-5.8,9.2-5.8,15.4v39h-16.7v-74.1h14.9l0.2,9.8C1987.7,463.8,1996.2,460,2007,460 L2007,460z M2099.5,535.2V431.6h17.3V519h54.6v16.1H2099.5L2099.5,535.2z M2186.9,535.2V431.6h17.3V519h54.6v16.1H2186.9 L2186.9,535.2z M2319.9,537.2c-16.1,0-29.2-5-39.2-15s-15.1-23-15.1-38.9s5.1-28.7,15.2-38.8c10.1-10.1,23.1-15.1,39-15.1 s28.2,5.3,38.6,16l-11.5,10.7c-7.2-7.2-16-10.8-26.5-10.8c-11.1,0-20,3.5-26.9,10.6c-6.9,7.1-10.4,16.2-10.4,27.5 s3.4,20.4,10.4,27.5c6.9,7,15.9,10.6,26.9,10.6s20.1-3.7,27.7-11.1l11.1,11.5C2348.7,532.1,2335.6,537.2,2319.9,537.2L2319.9,537.2 z" />
						<g>
							<rect x="1000.8" y="387.9" class="cud-logo-c2" width="68.5" height="35.1" />
							<rect x="1000.8" y="162.9" class="cud-logo-c2" width="66" height="16" />
							<polygon class="cud-logo-c2" points="1033.8,116.6 1000.8,150.6 1066.8,150.6 		" />
							<path class="cud-logo-c2" d="M2374.3,109.6l-44.4-3.4c-5-0.4-9.7,2.7-11.3,7.5l-12.9,38.8c-1.5,4.4,0,9.3,3.7,12.1l36.8,28.6 c3.7,2.9,8.7,3.1,12.7,0.6l34.6-22c4.3-2.7,6.1-8,4.5-12.8l-14.1-42.1C2382.5,112.8,2378.8,109.9,2374.3,109.6z" />
						</g>
					</g>
				</svg>
			</a>

		</div>
		<div class="cud-right">
			<button class="cud-navigation-drawer-close bg-secondary bg-opacity-5 text-body-secondary" type="button" title="close">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
					<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
				</svg>
			</button>
		</div>
	</div>
	<div class="cud-navigation-drawer-body cud-scroll">
	</div>
	<div class="cud-navigation-drawer-footer">
		<a href="<?php echo get_theme_mod('kp_calendly_meeting_link', true); ?>" target="_blank" rel="noopener" class="btn btn-blue w-100">Book Meeting</a>
	</div>
</div>
<div class="cud-overly"></div>
<?php wp_footer(); ?>

</body>

</html>