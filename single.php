<?php get_header();

while(have_posts()) {
  the_post();

  ?>


<div class="post-body">
  <div class="post-content">
    <div class="post-header">
      <div class="post-pic">
        <img src="https://s.bundesliga.com/assets/img/1170000/1163462_toptease_article_desktop_com.jpg" class="post-picture">
      </div>
      <div class="post-data">
         <p> <?php the_date('j-m-Y'); ?> <?php the_time('G:i'); ?>, <?php the_author_posts_link(); ?></p>
      </div>
      <div class="post-share">

      </div>
    </div>
    <div class="post-title">
      <p><?php echo the_title(); ?></p>
    </div>
    <div class="post-lead">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="post-text">
      <p><?php the_content(); ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
  <div class="posts-tab">

  </div>
</div>


  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <p><?php the_content(); ?> </p>

  <?php
}
 ?>


 Hello!


<?php get_footer(); ?>
