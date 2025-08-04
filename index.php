<?php
/**
 * The main template file
 *
 * @package Apparel-Merchandiser
 */

get_header();?>

 <!-- Google Tag Manager (noscript) -->
     

<div id="content" class="site-content container pt-4 pt-5">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <!-- Hero Section Start -->
<section class="py-5 container-fluid position-relative" style="background: linear-gradient(135deg,  #009245, #FCEE21); overflow: hidden;">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Text Block -->
      <div class="col-lg-6 text-white">
        <h1 class="display-5 fw-bold mb-3">
          <span class="d-block">Real Stories and Real Skills for</span>
          <span class="text-dark">Apparel Merchandiser and Web Developer</span>
        </h1>
        <p class="fs-5 text-light mb-4">
         Welcome to my blog — where I share real experiences, useful tips, and practical solutions from both the apparel industry and web development. No fluff, just straight value.
        </p>
        <p class="fst-italic mb-4">"Ever wondered what happens when garments meet GitHub?"</p>
        <a href="https://brightfuturei.com/" class="btn btn-outline-light btn-lg px-4 py-2 rounded-pill">Explore My World</a>
      </div>

      <!-- Image Block -->
      <div class="col-lg-6 position-relative text-center">
        <div class="bg-gradient position-absolute top-50 start-50 translate-middle rounded-circle shadow-lg" style="width: 400px; height: 400px; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 80%); z-index: 0;"></div>
        <img src="https://brightfuturei.com/wp-content/uploads/2025/07/blog-picture.jpg" alt="Apparel Meets Code" class="img-fluid rounded-4 shadow-lg position-relative" loading="lazy" style="z-index: 1;">
      </div>

    </div>
  </div>
</section>
<!-- Hero Section End -->


  <!--
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3602557870695275"
     crossorigin="anonymous"></script>
     
   
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKPZ3Z9M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3602557870695275"
     data-ad-slot="1532958923"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

-->



      <!-- Blog Posts -->
      <div class="row">
        <div class="col-lg-8">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
          ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class('card mb-4'); ?>>
                <div class="row g-0">
                  <?php if (has_post_thumbnail()) : ?>
                    <div class="col-md-5">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid rounded-start w-100 h-100 object-fit-cover']); ?>
                      </a>
                    </div>
                  <?php endif; ?>

                  <div class="col">
                    <div class="card-body">
                      <div class="d-flex justify-content-between mb-2">
                        <div><?php the_category(', '); ?></div>
                        <?php if (is_sticky()) : ?>
                          <span class="badge bg-danger"><i class="fa-solid fa-star"></i> Sticky</span>
                        <?php endif; ?>
                      </div>

                      <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                        <h2 class="card-title h5"><?php the_title(); ?></h2>
                      </a>

                      <p class="meta small text-muted mb-2">
                        <?php the_time('F j, Y'); ?> • <?php the_author(); ?> • 
                        <?php comments_number('No Comments', '1 Comment', '% Comments'); ?>
                      </p>

                      <p class="card-text">
                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                      </p>

                      <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-primary">Read More »</a>
                    </div>
                  </div>
                </div>
              </article>
          <?php
            endwhile;

            the_posts_pagination([
              'mid_size' => 2,
              'prev_text' => __('« Prev'),
              'next_text' => __('Next »'),
            ]);

          else :
            echo '<p>No posts found.</p>';
          endif;
          ?>
        </div>
      


        <!-- Sidebar -->
        <div class="col-lg-4">
          <?php get_sidebar();?>
        </div>
      </div>

    </main>
  </div>
</div>

<?php get_footer();?>