<?php

function pob_files() {
  wp_enqueue_style('pob_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'pob_files');

function pob_scripts() {
  wp_enqueue_script('pob_navbar_script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'pob_scripts' );

function pob_features() {
  add_theme_support('post-thumbnails');
  add_image_size('bigCardPicture', 1140, 380, array('center', 'top'));
  add_image_size('mediumCardPicture', 528, 180, array('center', 'top'));
  add_image_size('smallCardPicture', 222, 140, true);
  add_image_size('articlePagePicture', 800, 500, true);
  add_image_size('articleTagPagePicture', 70, 70, true);
  add_image_size('archivePagePicture', 160, 160, true);
}

add_action('after_setup_theme', 'pob_features');

function pob_adjust_queries($query) {
  if (!is_admin() AND is_post_type_archive('article') AND $query->is_main_query()) {
    $query->set('post_per_page', 10);
    $query->set('orderby', 'date');
    $query->set('order', 'DESC');
  }
}

add_action('pre_get_posts', 'pob_adjust_queries');

function custom_comment_form_defaults( $defaults ) {

  $defaults = [
      'comment_notes_before' => '',
      'title_reply' => __('Dodaj komentarz!'),
      'title_reply_to' => __('Odpowiedz %s!'),
      'cancel_reply_link' => __('Anuluj'),
      'label_submit' => __('Skomentuj'),
      'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( '', 'noun', 'textdomain' ) . '</label> <textarea class="comment-textarea" id="comment" name="comment" cols="60" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p>',
      'fields' => array(
        'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Autor', 'textdomain'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
      			        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' /></p>',
      ),
  ];

  return $defaults;
}
add_filter( 'comment_form_defaults', 'custom_comment_form_defaults', 10, 1 );

function custom_comment_reply_links ($args) {
  $args = [
    'reply_text' => __('Odpowiedz'),
  ];

  return $args;
}

add_filter('comment_reply_link_args', 'custom_comment_reply_links', 10, 1);
