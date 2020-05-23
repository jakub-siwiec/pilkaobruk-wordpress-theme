<?php
  get_header();

  while(have_posts()) {
    the_post();
?>

<div class="page-body">
  <div class="page-title">
    <?php the_title(); ?>
  </div>
  <div class="page-content">
    <?php the_content(); ?>
  </div>
</div>

<?php
  }
  get_footer();
?>
