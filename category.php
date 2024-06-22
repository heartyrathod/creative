<?php

get_header();
$current_category = get_queried_object();
// echo "<pre>"; print_r($current_category); "</pre>";
$term_id = '';
if (!empty($current_category)) {
  $term_id = $current_category->term_id;
}
// $category_id = $categories[0]->cat_ID;
?>
<main class="cud-main">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php include("banner.php"); ?>
    <div class="entry-content cud-entry-content w-100 mt-xxl-5 mt-xl-5 mt-lg-4 mt-3 my-xxl-5 my-xl-5 my-lg-4 my-3 w-100 d-block">
      <div class="container">
        <div class="cud-blog px-xxl-7 px-xl-7 px-lg-5 px-md-5 px-sm-0 px-0">
          <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
              <ul class="cud-blog-category d-flex flex-xxl-column flex-xl-column flex-lg-row flex-sm-row flex-row list-unstyled before-none">
                <li class="w-100 d-flex flex-row flex-wrap p-0">
                  <a href="<?php echo site_url('blog'); ?>" class="<?php if (is_page('blog')) {
                                                                      echo 'cud-active';
                                                                    } ?> w-100 py-2 px-3 rounded-2">All</a>
                </li>
                <?php
                $terms = get_terms(array(
                  'taxonomy' => 'category',
                  'hide_empty' => 1,
                ));
                // print_r($terms);exit;
                foreach ($terms as $term) {
                ?>
                  <li class="w-100 d-flex flex-row flex-wrap p-0">
                    <a href="<?php echo site_url('') ?>/category/<?php echo $term->slug; ?>" class="<?php echo ($term_id == $term->term_id ? 'cud-active' : '');  ?> w-100 py-2 px-3 rounded-2">
                      <?php echo $term->name; ?>
                      <!-- <span><?php echo $term->count; ?></span> -->
                    </a>
                  </li>
                <?php } ?>
                <!-- <li>
                  <a href="#">Web Development</a>
                </li>
                <li>
                  <a href="#">Mobile App Development</a>
                </li>
                <li>
                  <a href="#">UI/UX Design</a>
                </li> -->
              </ul>
            </div>
            <?php
            $args = array(
              'posts_per_page'   => -1,
              'offset'           => 0,
              'orderby'          => 'date',
              'order'            => 'DESC',
              'post_type'        => 'post',
              'post_status'      => 'publish',
              'suppress_filters' => true,
              'tax_query' => array(
                array(
                  'taxonomy' => 'category',
                  'field' => 'term_id',
                  'terms' => $term_id,
                )
              ),
            );
            $posts_array = get_posts($args);
            // echo "<pre>"; print_r($posts_array); echo "</pre>";
            ?>
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
              <div class=" cud-blog-list">
                <div class="row">
                  <?php
                  foreach ($posts_array as $keys => $blogpost) {
                    if ($keys == 0) {
                      $thumnail = wp_get_attachment_image_src(get_post_thumbnail_id($blogpost->ID), 'single-post-thumbnail');
                      $cates = wp_get_post_terms($blogpost->ID, 'category',  array());
                  ?>
                      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="cud-blog-list-item cud-main-blog w-100 h-100">
                          <div class="row">
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                              <div class="cud-blog-list-img w-100">
                                <a href="<?php echo get_permalink($blogpost->ID) ?>" class="w-100 ratio ratio-16x9">
                                  <img class="img-fluid rounded-3" src="<?php echo $thumnail[0]; ?>" title="<?php echo $blogpost->post_title; ?>" alt="<?php echo $blogpost->post_title; ?>" width="<?php echo $thumnail[1]; ?>" height="<?php echo $thumnail[2]; ?>">
                                </a>
                              </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                              <div class="cud-blog-list-content d-flex flex-column flex-wrap align-items-start gap-3 justify-content-center h-100">
                                <?php foreach ($cates as $cate) { ?>
                                  <a href="<?php echo esc_url(get_category_link($cate->term_id)); ?>" class="cud-category  py-2 px-3 rounded-5 text-primary bg-primary bg-opacity-5"><?php if (!empty($cate)) {
                                                                                                                                                                                        echo esc_html($cate->name);
                                                                                                                                                                                      } ?></a>
                                <?php } ?>
                                <h2>
                                  <a href="<?php echo get_permalink($blogpost->ID) ?>"><?php echo esc_html($blogpost->post_title); ?></a>
                                </h2>
                                <!-- <p><?php echo esc_html($blogpost->post_excerpt); ?></p> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php }
                  } ?>
                  <?php

                  foreach ($posts_array as $key => $blogpost) {
                    if ($key != 0) {
                      $thumnail = wp_get_attachment_image_src(get_post_thumbnail_id($blogpost->ID), 'single-post-thumbnail');
                      $cates = wp_get_post_terms($blogpost->ID, 'category',  array());
                      // print_r($cates);
                  ?>
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="cud-blog-list-item d-flex flex-column flex-wrap align-items-start gap-3">
                          <?php
                          $custom_logo_id = get_theme_mod('custom_logo');
                          $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                          ?>
                          <div class="cud-blog-list-img w-100">
                            <a href="<?php echo get_permalink($blogpost->ID) ?>" class="w-100 ratio ratio-16x9">
                              <img class="img-fluid img-fluid rounded-3" src="<?php echo $thumnail[0]; ?>" title="<?php echo $blogpost->post_title; ?>" alt="<?php echo $blogpost->post_title; ?>" width="<?php echo $thumnail[1]; ?>" height="<?php echo $thumnail[2]; ?>">
                            </a>
                          </div>
                          <div class="cud-blog-list-content d-flex flex-column flex-wrap align-items-start gap-3 justify-content-center h-100">
                            <?php foreach ($cates as $cate) { ?>
                              <a class="cud-category  py-2 px-3 rounded-5 text-primary bg-primary bg-opacity-5" href="<?php echo get_term_link($cate->slug, 'category'); ?>"><?php echo esc_html($cate->name); ?></a>
                            <?php } ?>
                            <h2>
                              <a href="<?php echo get_permalink($blogpost->ID) ?>"><?php echo esc_html($blogpost->post_title); ?></a>
                            </h2>
                            <p><?php echo esc_html($blogpost->post_excerpt); ?></p>
                          </div>
                        </div>
                      </div>
                  <?php }
                  } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- .entry-content -->

    <?php if (get_edit_post_link()) : ?>
      <footer class="entry-footer default-max-width">
        <div class="container">
          <?php
          edit_post_link(
            sprintf(
              /* translators: %s: Name of current post. Only visible to screen readers. */
              esc_html__('Edit %s', 'twentytwentyone'),
              '<span class="screen-reader-text">' . get_the_title() . '</span>'
            ),
            '<span class="edit-link">',
            '</span>'
          );
          ?>
        </div>
      </footer><!-- .entry-footer -->
    <?php endif; ?>
  </article><!-- #post-<?php the_ID(); ?> -->
</main>
<?php
get_footer();
?>