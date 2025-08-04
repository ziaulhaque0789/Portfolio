<?php
// Exit if accessed directly
defined('ABSPATH') || exit;
?>

<aside id="secondary" class="widget-area">
  <div class="p-4 bg-light rounded shadow-sm">

    <!-- Search -->
    <div class="mb-4">
      <h5 class="mb-3">Search</h5>
      <?php get_search_form(); ?>
    </div>

    <!-- Recent Posts -->
    <div class="mb-4">
      <h5 class="mb-3">Recent Posts</h5>
      <ul class="list-unstyled">
  <?php
  $recent_posts = wp_get_recent_posts([
    'numberposts' => 5,
    'post_status' => 'publish',
  ]);
  foreach ($recent_posts as $post) :
    $post_id = $post['ID'];
    $thumbnail = get_the_post_thumbnail($post_id, 'thumbnail', ['class' => 'me-2 rounded', 'style' => 'width: 60px; height: 60px; object-fit: cover;']);
  ?>
    <li class="mb-3 d-flex align-items-start">
      <a href="<?php echo get_permalink($post_id); ?>" class="d-flex text-decoration-none text-dark">
        <?php if ($thumbnail) : ?>
          <div><?php echo $thumbnail; ?></div>
        <?php endif; ?>
        <div class="small fw-semibold"><?php echo esc_html($post['post_title']); ?></div>
      </a>
    </li>
  <?php endforeach; wp_reset_query(); ?>
</ul>
    </div>

    <!-- Categories -->
    <div class="mb-4">
      <h5 class="mb-3">Categories</h5>
      <ul class="list-unstyled">
        <?php
        wp_list_categories([
          'title_li' => '',
          'show_count' => true,
        ]);
        ?>
      </ul>
    </div>

    <!-- Tag Cloud -->
    <div>
      <h5 class="mb-3">Tags</h5>
      <div class="tagcloud">
        <?php wp_tag_cloud([
          'smallest' => 0.8,
          'largest' => 1.2,
          'unit' => 'rem',
          'number' => 20,
          'format' => 'flat',
          'orderby' => 'name',
          'order' => 'ASC'
        ]); ?>
      </div>
    </div>

  </div>
</aside>
