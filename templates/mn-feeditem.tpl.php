<div class='feeditem clear-block'>

  <div class='feeditem-meta clear-block'>
    <?php print jake_views_render_field($fields['timestamp_1']) ?>
    <?php print jake_views_render_field($fields['title_1']) ?>
  </div>

  <h2 class='feeditem-title clear-block'>
    <?php print jake_views_render_field($fields['title']) ?>
  </h2>

  <div class='feeditem-content prose clear-block'>
    <?php print jake_views_render_field($fields['description']) ?>
  </div>

  <?php if ($labels = jake_views_render_field($fields['data_taxonomy_form'])): ?>
  <div class='feeditem-labels clear-block'>
    <?php print $labels ?>
  </div>
  <?php endif; ?>

  <div class='feeditem-links clear-block'>
    <?php print jake_views_render_field($fields['simpleshare_link']) ?>
  </div>

</div>