<?php if (is_page('blog') || is_category()) {
	$post_ID = '376';
} else if (is_page('guides') || is_tax('guides-category')) {
	$post_ID = '1477';
} else {
	$post_ID = $post->ID;
}
?>
<?php $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post_ID), "full");
$banner_img_title =  get_post_meta(get_post_thumbnail_id($post_ID), '_wp_attachment_image_alt', true);
?>
<?php if (have_rows('banner', $post_ID)) : ?>
	<?php while (have_rows('banner', $post_ID)) : the_row(); ?>
		<section class="cud-banner w-100 m-0 position-relative pt-xxl-12 pt-xl-10 pt-8 pb-xxl-5 pb-xl-5 pb-lg-5 pb-4 bg-<?php echo get_sub_field('color') ?>-subtle">
			<div class="container">
				<div class="row">
					<?php
					if ($image_data != '') { ?>
						<div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12 order-xxl-1 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2">
						<?php } else { ?>
							<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<?php } ?>
							<div class="cud-heading d-flex flex-column flex-wrap gap-3 align-items-start h-100 justify-content-center align-content-start">
								<?php if (get_sub_field('banner_subtitle') != "") { ?>
									<span class="cud-heading-primary position-relative d-flex flex-row align-items-center px-3 py-2 border border-1 shadow-sm border-<?php echo get_sub_field('color') ?>-subtle text-<?php echo get_sub_field('color') ?> shadow-sm bg-body gap-2 rounded-pill">
										<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
											<circle cx="8" cy="8" r="8" />
										</svg>
										<p class="text-body m-0"><?php echo get_sub_field('banner_subtitle') ?></p>
									</span>
								<?php } ?>
								<?php if (get_sub_field('banner_title') != "") { ?>
									<h1 class="cud-heading-title m-0 w-100"><?php echo get_sub_field('banner_title') ?></h1>
								<?php } ?>
								<?php if (get_sub_field('banner_description') != "") { ?>
									<p class="ps-3 fs-6 border-2 border-start border-<?php echo get_sub_field('color') ?>-subtle m-0"><?php echo get_sub_field('banner_description') ?></p>
								<?php } ?>
							</div>
							<?php //echo the_content();
							?>
							<?php if (get_sub_field('action_link') != "") { ?>
								<?php if (have_rows('banner_actions', $post_ID)) : ?>
									<div class="cud-banner-actions">
										<?php while (have_rows('banner_actions', $post_ID)) : the_row(); ?>
											<?php if (get_sub_field('action_link') != "") { ?>
												<a href="<?php echo get_sub_field('action_link') ?>" class="btn btn-<?php echo get_sub_field('color') ?>">
													<?php echo get_sub_field('action_name') ?>
												</a>
											<?php } ?>
										<?php endwhile; ?>
									</div>
								<?php endif; ?>
							<?php } ?>
							</div>
							<?php if ($image_data != '') { ?>
								<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12  order-xxl-2 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-1">
									<div class="cud-banner-img w-100 h-100 d-flex flex-wrap flex-row justify-content-center align-items-center position-relative">
										<img src="<?php echo $image_data[0]; ?>" title="<?php echo $banner_img_title; ?>" alt="<?php echo $banner_img_title; ?>" width="<?php echo $image_data[1]; ?>" height="<?php echo $image_data[2]; ?>" class="img-fluid">
									</div>
								</div>
							<?php } ?>
						</div>
				</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>