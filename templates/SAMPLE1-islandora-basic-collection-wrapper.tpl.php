<?php

/**
 * @file
 * islandora-basic-collection-wrapper.tpl.php
 *
 * @TODO: needs documentation about file and variables
 */
?>
<!-- Demonstrate that this template is functioning. -->
<h1>Islandora Camp is overriding islandora-basic-collection-wrapper</h1>

<!-- Add the collection metadata. -->
<?php if (isset($collection_metadata)): ?>
  <div class="collection-level-metadata">
    <?php print $collection_metadata; ?>
  </div>
<?php endif; ?>

<div class="islandora-basic-collection-wrapper">

  <!-- Add the Solr simple search block. -->
  <?php if (isset($islandora_custom_simple_search)): ?>
    <?php print $islandora_custom_simple_search; ?>
  <?php endif; ?>

  <!-- Add a carousel. -->
  <?php if (isset($advanced_collection_view)): ?>
    <hr/>
    <?php if (isset($advanced_collection_view)): ?>
      <div class="collection-level-carousel">
        <?php print $advanced_collection_view; ?>
      </div>
      <hr/>
    <?php endif; ?>
  <?php endif; ?>

  <!-- From here on, the template is the same as the original basic-collection-wrapper. -->
  <?php if (!empty($dc_array['dc:description']['value'])): ?>
    <p><?php print nl2br($dc_array['dc:description']['value']); ?></p>
    <hr/>
  <?php endif; ?>
  <div class="islandora-basic-collection clearfix">
    <span class="islandora-basic-collection-display-switch">
      <ul class="links inline">
        <?php foreach ($view_links as $link): ?>
          <li>
            <a <?php print drupal_attributes($link['attributes']) ?>><?php print filter_xss($link['title']) ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    </span>
    <?php print $collection_pager; ?>
    <?php print $collection_content; ?>
    <?php print $collection_pager; ?>
  </div>
</div>
