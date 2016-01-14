<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */
get_header();
?> 
<div class="col-md-12 content-area" id="main-column">
  <main id="main" class="site-main" role="main">

    <div class="swiper-container">
      <div class="swiper-wrapper">

        <?php
        $pages = get_pages(array('sort_column' => 'menu_order'));
        foreach ($pages as &$page):
          $post = get_post($page->ID); 
          ?>
          <div class="swiper-slide">
            <?php echo $post->post_content;?>
          </div>

        <?php endforeach; ?>
      </div>
    </div>

  </main>
</div>
<?php get_footer(); ?> 