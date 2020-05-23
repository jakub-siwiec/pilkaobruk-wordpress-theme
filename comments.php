<div class="comments-section">
  <span class="comments-header">Komentarze</span>
  <?php if(have_comments()) { ?>
    <ul class="comments-list">
      <?php wp_list_comments(array(
        'short_ping' => true,
      ));
      ?>
    </ul>
  <?php }

  comment_form();
  ?>
</div>
