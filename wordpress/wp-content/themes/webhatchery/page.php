<?php
/**
 * Template for displaying pages
 * 
 * @package webhatchery
 */
get_header();
?> 

<div class="swiper-container swiper-main">
  <div class="swiper-wrapper">

    <?php
    $pages = get_pages(array('sort_column' => 'menu_order', 'parent' => 0));

    foreach ($pages as &$page):
      $post = get_post($page->ID);
      ?>
      <div class="swiper-slide">
        <?php $children = get_pages(array('parent' => $post->ID, 'sort_column' => 'post_date')); ?>
        <div class="swiper-container swiper-child">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <?php get_template_part(preg_replace('/\.php/', '', get_page_template_slug($page->ID))); ?>
            </div>
            <?php foreach ($children as &$child): ?>
              <div class="swiper-slide">
                <?php get_template_part(preg_replace('/\.php/', '', get_page_template_slug($child->ID))); ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>

    <?php endforeach; ?>
  </div>
</div>

<div class="container page-container">
  <?php do_action('before'); ?> 
  <header role="banner">
    <div class="row main-navigation">
      <div class="col-md-12">
        <nav class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
              <span class="sr-only"><?php _e('Toggle navigation', 'webhatchery'); ?></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div class="collapse navbar-collapse navbar-primary-collapse">
            <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new webhatcheryMyWalkerNavMenu())); ?> 
            <?php dynamic_sidebar('navbar-right'); ?> 
          </div><!--.navbar-collapse-->
        </nav>
      </div>
    </div><!--.main-navigation-->
  </header>


  <div id="content" class="row row-with-vspace site-content">



  </div><!--.site-content-->
</div><!--.container page-container-->
<?php get_footer(); ?> 	