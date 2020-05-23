<?php get_header(); ?>

 <div class="card-body">
   <div class="big-card-space">
    <?php

     $indexArticles = new WP_Query(array(
       'posts_per_page' => 1,
       'post_type' => 'Article',
       'orderby' => 'menu_order',
       'order' => 'ASC'
     ));

     while($indexArticles->have_posts()) {
       $indexArticles->the_post();
       ?>

      <a href="<?php the_permalink(); ?>">
        <div class="big-card news-title-background">
          <div class="big-card-pic">
           <img src="<?php the_post_thumbnail_url('bigCardPicture'); ?>" class="news-pic">
          </div>
           <div class="big-card-title">
             <?php
             $linkTitle = get_field('article_link_title');

             if ($linkTitle) {
               echo $linkTitle;
             } else {
               the_title();
             }
              ?>
          </div>
        </div>
      </a>
     <?php
      }
      ?>

   </div>
   <div class="medium-cards-space">
     <?php
       $indexArticles = new WP_Query(array(
         'offset' => 1,
         'posts_per_page' => 2,
         'post_type' => 'Article',
         'orderby' => 'menu_order',
         'order' => 'ASC'
       ));

       while($indexArticles->have_posts()) {
        $indexArticles->the_post();
        ?>

        <a href="<?php the_permalink(); ?>">
          <div class="medium-card news-title-background">
           <div class="medium-card-pic">
             <img src="<?php the_post_thumbnail_url('mediumCardPicture'); ?>" class="news-pic">
           </div>
           <div class="medium-card-title">
             <?php
             $linkTitle = get_field('article_link_title');

             if ($linkTitle) {
               echo $linkTitle;
             } else {
               the_title();
             }
              ?>
           </div>
         </div>
        </a>
      <?php
       }
       ?>

   </div>
   <div class="small-cards-space">
     <?php
       $indexArticles = new WP_Query(array(
         'offset' => 3,
         'posts_per_page' => 4,
         'post_type' => 'Article',
         'orderby' => 'menu_order',
         'order' => 'ASC'
       ));

       while($indexArticles->have_posts()) {
        $indexArticles->the_post();
        ?>

          <a href="<?php the_permalink(); ?>">
            <div class="small-card news-title-background">
             <div class="small-card-pic">
               <img src="<?php the_post_thumbnail_url('smallCardPicture'); ?>" class="news-pic">
             </div>
             <div class="small-card-title">
               <?php
               $linkTitle = get_field('article_link_title');

               if ($linkTitle) {
                 echo $linkTitle;
               } else {
                 the_title();
               }
                ?>
             </div>
           </div>
          </a>
     <?php
      }
      ?>
   </div>
   <div class="small-cards-space">
     <?php
       $indexArticles = new WP_Query(array(
         'offset' => 7,
         'posts_per_page' => 4,
         'post_type' => 'Article',
         'orderby' => 'menu_order',
         'order' => 'ASC'
       ));

       while($indexArticles->have_posts()) {
        $indexArticles->the_post();
        ?>

          <a href="<?php the_permalink(); ?>">
            <div class="small-card news-title-background">
             <div class="small-card-pic">
               <img src="<?php the_post_thumbnail_url('smallCardPicture'); ?>" class="news-pic">
             </div>
             <div class="small-card-title">
               <?php
               $linkTitle = get_field('article_link_title');

               if ($linkTitle) {
                 echo $linkTitle;
               } else {
                 the_title();
               }
                ?>
             </div>
           </div>
          </a>
     <?php
      }
      ?>
   </div>
 </div>

 <div class="final-card-line">
   <a href="<?php echo get_post_type_archive_link('article'); ?>">Więcej >>></a>
 </div>


<?php
wp_reset_postdata();
get_footer(); ?>
