<?php
/**
 * Template Name: s06 Internal slider
 *
 * @package WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field('gallery', $page->ID);
?>

<div class="internal-slider" style="width: 200px; height: 200px;">
  <h5 class="reason-title">
    <?php echo $child->post_title; ?>
  </h5>

  <div class="row">
    <div class="col-md-6">
      <img class="" src="<?php echo $gallery[0]['url']; ?>">
    </div>

    <?php $subchildren = get_pages(array('parent' => $child->ID, 'sort_column' => 'post_date')); ?>
    <?php if (!empty($subchildren)): ?>
      <div class="swiper-container swiper-subchild">
        <div class="swiper-wrapper">
          <?php foreach ($subchildren as $skey => &$subchild): ?>
            <div class="swiper-slide xxxxx">
              <?php include(locate_template(get_page_template_slug($subchild->ID))); ?>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="swiper-subchild-next"></div>
        <div class="swiper-subchild-prev"></div>
      </div>
    <?php endif; ?>


    <div class="col-md-6">
      <p>
        <?php echo $child->post_content; ?>
      </p>
    </div>
  </div>
</div>