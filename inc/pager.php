<!-- ページが1ページ以上あれば以下を表示 -->
<?php if (paginate_links()) : ?>
  <!-- pagenation -->
  <nav class="un_news_nav">
    <ol class="un_news_wrap">
      <?php echo paginate_links(
        array(
          'end_size' => 1,
          'mid_size' => 1,
          'prev_next' => true,
          'prev_text' => '<span></span>',
          'next_text' => '<span></span>',
        )
      ); ?>
    </ol>
  </nav>
<?php endif; ?>

<!-- 置き換え前新pagenation -->
<!-- <div class="pagenation">
  <a class="prev page-numbers" href="#"><span></span></a>
  <a class="page-numbers" href="#">1</a>
  <span class="page-numbers current">2</span>
  <p class="page-numbers dots" href="#">...</p>
  <a class="page-numbers" href="#">12</a>
  <a class="next page-numbers" href="#"><span></span></a>
</div> -->
<!-- /pagenation -->