<?php

function pob_post_types() {
  register_post_type('article', array(
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-welcome-write-blog',
    'supports' => array(
      'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'
    ),
    // 'show_in_rest' => true,
    'labels' => array(
      'name' => 'Articles',
      'singular_name' => 'Article',
      'add_new_item' => 'Add new Article',
      'edit_item' => 'Edit Article',
      'new_item' => 'New Article',
      'view_item' => 'View Article',
      'view_items' => 'View Articles',
      'search_items' => 'Search Articles',
      'not_found' => 'No Articles found',
      'not_found_in_trash' => 'No Articles found in trash',
      'all_items' => 'All Articles',
      'archives' => 'Article Archives',
      'attributes' => 'Article Attributes',
      'insert_into_item' => 'Insert into Article',
      'uploaded_to_this_item' => 'Uploaded to this Article',
    )
  ));
}

add_action('init', 'pob_post_types');

 ?>
