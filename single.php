<?php
/**
 * The template for displaying all single posts
 *
 * @package Apparel-Merchandiser
 */
get_header();?>

<div id="content" class="site-content container pt-5 pb-5">
  <div class="row mt-5">
    <!-- Main Content -->
    <div id="primary" class="content-area col-lg-8">
      <main id="main" class="site-main">

        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>

              <?php if (has_post_thumbnail()) : ?>
                <div class="mb-4">
                    <?php the_post_thumbnail('small', ['class' => 'img-fluid rounded w-100']); ?>

                </div>
              <?php endif; ?>

              <h1 class="fw-bold mb-3"><?php the_title(); ?></h1>

              <p class="meta small text-muted mb-4">
                <?php the_time('F j, Y'); ?> • <?php the_author(); ?> • <?php the_category(', '); ?>
              </p>

              <div class="post-content mb-5">
                <?php the_content(); ?>
              </div>

              <!-- Back to Home Button -->
              <div class="mb-5">
                <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn btn-primary">
                  ← Back to Home
                </a>
              </div>

              <!-- Post Navigation -->
              <nav class="post-navigation d-flex justify-content-between mb-5">
                <div class="prev-post">
                  <?php previous_post_link('<span class="btn btn-outline-secondary">« %link</span>', '%title'); ?>
                </div>
                <div class="next-post">
                  <?php next_post_link('<span class="btn btn-outline-secondary">%link »</span>', '%title'); ?>
                </div>
              </nav>

              <!-- Comments Section -->
              <?php
              if (comments_open() || get_comments_number()) {
                comments_template();
              }
              ?>

            </article>
        <?php
          endwhile;
        else :
          echo '<p>No content found.</p>';
        endif;
        ?>

      </main>
    </div>

    <!-- Sidebar -->
    <aside id="secondary" class="widget-area col-lg-4">
      <?php get_sidebar(); ?>
    </aside>

  </div> <!-- .row -->
</div> <!-- #content -->

<?php get_footer();?>
