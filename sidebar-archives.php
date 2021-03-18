<aside class="bl_archive">
  <h2 class="el_archive_ttl">archive</h2>
  <ul>
    <?php
    $args = array(
      'type' => 'monthly', //月別を指定
    );
    wp_get_archives($args);
    ?>
    </li>
  </ul>
</aside>