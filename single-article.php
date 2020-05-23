<?php get_header();

while(have_posts()) {
  the_post();

  ?>


<div class="post-body">
  <div class="post-content">
    <div class="post-header">
      <div class="post-pic">
        <img src="<?php the_post_thumbnail_url('articlePagePicture'); ?>" class="post-picture">
      </div>
      <div class="post-data">
         <p>
           <!-- <?php echo pvc_post_views( $post_id = 0, $echo = true );?> -->
           <?php the_date('j-m-Y'); ?> <?php the_time('G:i');?>,
           <?php the_author_posts_link(); ?></p>
      </div>
      <div class="post-share">
        <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
        <!-- <a href="#">
          <div class="post-share-fb-box">
            <div class="post-share-fb-box-logo">
              <i class="fab fa-facebook-f"></i>
            </div>
            <div class="post-share-fb-box-name">
              Facebook
            </div>
          </div>
        </a>
        <a href="#">
          <div class="post-share-tt-box">
            <div class="post-share-tt-box-logo">
              <i class="fab fa-twitter"></i>
            </div>
            <div class="post-share-tt-box-name">
              Twitter
            </div>
          </div>
        </a>
        <a href="#">
          <div class="post-share-wk-box">
            <div class="post-share-wk-box-logo">
              <img src="https://cdn6.aptoide.com/imgs/7/f/a/7fa2814ceda7544c73945e564b323c03_icon.png?w=25" alt="">
            </div>
            <div class="post-share-wk-box-name">
              Wykop
            </div>
          </div>
        </a>
        <a href="#">
          <div class="post-share-rd-box">
            <div class="post-share-rd-box-logo">
              <i class="fab fa-reddit-alien"></i>
            </div>
            <div class="post-share-rd-box-name">
              Reddit
            </div>
          </div>
        </a> -->

      </div>
    </div>
    <div class="post-title">
      <p><?php echo the_title(); ?></p>
    </div>
    <div class="post-lead">
      <?php the_field('article_lead'); ?>    </div>
    <div class="post-text">
      <p><?php the_content(); ?></p>
    </div>
    <?php comments_template('', true); ?>
  </div>
  <div class="posts-tab">
    <div class="most-read-posts-tab">
      <div class="most-read-posts-tab-header">
        <span>Najczęściej czytane</span>
      </div>

      <?php

        $mostRead = new WP_Query(array(
          'posts_per_page' => 5,
          'post_type' => 'Article',
          'orderby' => 'post_views',
          'order' => 'DESC',
        ));

        while($mostRead->have_posts()) {
          $mostRead->the_post();

       ?>

      <a href="<?php the_permalink(); ?>">
        <div class="most-read-posts-tab-item">
          <div class="most-read-posts-tab-item-pic">
            <img src="<?php the_post_thumbnail_url('articleTagPagePicture'); ?>" alt="">
          </div>
          <div class="most-read-posts-tab-item-title">
            <span><?php the_title(); ?></span>
          </div>
        </div>
      </a>
      <?php
        }
       ?>

    </div>
    <div class="most-read-posts-tab">
      <div class="most-read-posts-tab-header">
        <span>Najnowsze</span>
      </div>

      <?php

        $mostRead = new WP_Query(array(
          'posts_per_page' => 5,
          'post_type' => 'Article',
          'orderby' => 'date',
          'order' => 'DESC',
        ));

        while($mostRead->have_posts()) {
          $mostRead->the_post();

       ?>

      <a href="<?php the_permalink(); ?>">
        <div class="most-read-posts-tab-item">
          <div class="most-read-posts-tab-item-pic">
            <img src="<?php the_post_thumbnail_url('articleTagPagePicture'); ?>" alt="">
          </div>
          <div class="most-read-posts-tab-item-title">
            <span><?php the_title(); ?></span>
          </div>
        </div>
      </a>
      <?php
        }
       ?>

    </div>
  </div>

</div>

  <?php
}
 ?>

<?php get_footer(); ?>
