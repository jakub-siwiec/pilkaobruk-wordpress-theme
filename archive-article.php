<?php
  get_header();
?>

<div class="archive-post-body">
  <div class="archive-post-body-card">

  <?php
    while(have_posts()) {
      the_post();

  ?>

    <div class="archive-post-tab">
      <a href="<?php the_permalink(); ?>">
        <div class="archive-post-pic">
            <img src="<?php the_post_thumbnail_url('archivePagePicture'); ?>" class="news-pic resize-archive-pic" alt="">
        </div>
        <div class="archive-post-text-area">
          <span class="archive-post-title"><?php the_title(); ?></span>
          <span class="archive-post-data"><?php echo get_the_date('j-m-Y'); ?> <?php the_time('G:i'); ?></span>
        </div>
      </a>
    </div>


  <?php
    }
    ?>
  </div>

  <div class="archive-post-body-pagination current">
    <?php
      echo paginate_links();
     ?>
  </div>

</div>

  <?php

  wp_reset_postdata();
  get_footer();
?>
