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

get_header('portfolio');
$postcat = get_the_category($post->ID);
$cat_id = 0;
if (!empty($postcat)) {
	$cat_id = $postcat[0]->cat_ID;
}
?>
<main class="cud-main">
	<section class="cud-portfolio-detail w-100 ">
		<div class="container">
			<div class="cud-portfolio-detail-img border border-2 rounded-4 overflow-hidden border-gray-100 mb-xxl-4 mb-xl-4 mb-lg-4 mb-3">
				<?php $portfolio_images = get_field('portfolio_images');
				// echo "<pre>";
				// print_r($portfolio_images);
				// echo "</pre>";
				if ($portfolio_images) {
					foreach ($portfolio_images as $key => $images) {
						$dnone = '';
						if ($key > 0) $dnone = 'd-none';
				?>
						<img src="<?php echo esc_url($images['large_images']['url']); ?>" title="<?php echo esc_attr($images['large_images']['alt']); ?>" alt="<?php echo esc_attr($images['large_images']['alt']); ?>" id="img_<?php echo $key; ?>" class="img-fluid <?php echo $dnone; ?>" width="<?php echo $images['large_images']['width']; ?>" height="<?php echo $images['large_images']['height'];  ?>" />
				<?php }
				} ?>
			</div>
			<div class="cud-portfolio-detail-content">
				<div class="row">
					<div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12 d-flex flex-column gap-3">
						<h2 class="fs-5 fw-semibold mb-0"><?php echo $post->post_title; ?></h2>
						<?php echo $post->post_content; ?>
					</div>
					<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 d-flex flex-column gap-4">
						<?php $tools = get_field('tools');
						if ($tools) {
						?>
							<div class="cud-portfolio-detail-wrap d-flex flex-column gap-2">
								<h2 class="fs-6 fw-semibold">Tools</h2>
								<div class=" cud-portfolio-detail-tools d-flex flex-row gap-2">
									<?php
									$field = get_field_object('tools');
									$rows = get_field('tools');
									$i = 0;
									if ($rows) {
										foreach ($rows as $row) {
											if ($field['choices'][$row] == 'Figma') { ?>
												<i class="cud-icon-figma  fs-3" title="Figma">
													<span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span>
												</i>
											<?php
											}
											if ($field['choices'][$row] == 'Illustrator') { ?>
												<i class="cud-icon-ai fs-3" title="Illustrator">
													<span class="path1"></span><span class="path2"></span>
												</i>
											<?php
											}
											if ($field['choices'][$row] == 'Photoshop') {
											?>
												<i class="cud-icon-ps  fs-3" title="Photoshop">
													<span class="path1"></span><span class="path2"></span>
												</i>
											<?php
											}
											if ($field['choices'][$row] == 'XD') {
											?>
												<i class="cud-icon-xd  fs-3" title="XD">
													<span class="path1"></span><span class="path2"></span>
												</i>
									<?php
											}
										}
									} ?>

								</div>

							</div>
						<?php } ?>
						<?php $font_family = get_field('font_family');
						if ($font_family) {
						?>
							<div class="cud-portfolio-detail-wrap d-flex flex-column gap-2">
								<h2 class="fs-6 fw-semibold">Font Family</h2>
								<p><?php echo $font_family; ?></p>
							</div>
						<?php } ?>
						<?php $colors = get_field('colors');
						if ($colors) {
						?>
							<div class="cud-portfolio-detail-wrap d-flex flex-column gap-2">
								<h2 class="fs-6 fw-semibold">Colors</h2>
								<div class="cud-colors">
									<?php if (have_rows('colors')) : ?>
										<?php while (have_rows('colors')) : the_row();
											$image = get_sub_field('color');
										?>
											<span>
												<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
													<title><?php echo $image; ?></title>
													<rect width="32" height="32" rx="4" fill="<?php echo $image; ?>" />
												</svg>
											</span>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							</div>
						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="cud-portfolios w-100 overflow-hidden m-0 w-100">
		<div class="container">
			<h3 class=" mb-3">Related Projects</h3>

			<div class="cud-portfolios-content set_more_posts w-100">
				<div class="row">
					<?php

					$args = array(
						'posts_per_page' => 3,
						'post_type'   => 'portfolios',
						'category'    => $cat_id,
						'exclude'     => [$post->ID]
					);

					$latest_post = get_posts($args);
					foreach ($latest_post as $portfolio) {
						$image = wp_get_attachment_image_src(get_post_thumbnail_id($portfolio->ID), 'single-post-thumbnail');
						global $wpdb;
						$cUd404_post_view = $wpdb->prefix . "post_view";
						$view_count = $wpdb->get_row("SELECT COUNT(pw.post_id) AS view_count FROM $cUd404_post_view AS pw WHERE pw.post_id=$portfolio->ID");
						$viewer_count = view_count_formate($view_count->view_count);
						$image_alt =  get_post_meta( get_post_thumbnail_id($portfolio->ID), '_wp_attachment_image_alt', true );
					?>
						<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>" data-aos-duration="400">
							<div class="cud-portfolios-item d-flex flex-row flex-wrap align-items-start w-100 h-100 gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-3">
								<a href="<?php echo get_permalink($portfolio->ID); ?>" class="cud-portfolios-item-img d-flex flex-row flex-wrap overflow-hidden position-relative rounded-2 w-100">
									<img src="<?php echo $image[0]; ?>" title="<?php echo $image_alt; ?>" alt="<?php echo $image_alt; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" class="img-fluid" />
								</a>
								<div class="cud-portfolios-item-title d-flex flex-row flex-nowrap justify-content-between w-100 gap-xxl-3 gap-xl-3 gap-lg-3 gap-md-2 gap-sm-2 gap-2">
									<h2 class="m-0 fw-semibold">
										<a href="<?php echo get_permalink($portfolio->ID); ?>"><?php echo $portfolio->post_title; ?></a>
									</h2>
									<span class="d-flex flex-row flex-nowrap justify-content-between align-items-center gap-2 fw-semibold">
										<i class="cud-icon-eye"></i><?php echo $viewer_count; ?>
									</span>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
$post_id = $post->ID;
$user_ip = $_SERVER['REMOTE_ADDR'];
global $wpdb;
$cUd404_post_view = $wpdb->prefix . "post_view";
$result = $wpdb->get_row("SELECT * FROM $cUd404_post_view AS pw WHERE pw.post_id=$post_id AND pw.user_ip='$user_ip'");
if (empty($result)) {
	$wpdb->insert($cUd404_post_view, ['post_id' => $post_id, 'user_ip' => $user_ip]);
}
?>
<?php
get_footer();
