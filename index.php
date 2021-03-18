<?php get_header(); ?>

<body>
  <div class="ly_container un_news">
    <!-- ヘッダー -->
    <?php get_template_part('inc/header'); ?>

    <!-- ハンバーガーボタン -->
    <?php get_template_part('inc/hamburger'); ?>

    <!-- メインコンテンツ -->
    <div class="un_news_wrapper">
      <h1 class="el_sec_ttl hp_textTransform">news</h1>
      <div class="un_news_container">
        <main>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

              <article class="un_media">
                <a href="<?php the_permalink(); ?>" class="un_media_link">
                  <p class="un_media_img">
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('large');
                    } else {
                      echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/store/store001.jpg" alt="">';
                    }
                    ?>
                  </p>
                  <div class="un_media_txtWrap">
                    <time datetime="<?php echo the_time('Y-m-d'); ?>"><?php echo the_time('Y-m-d'); ?></time>
                    <h2 class="un_media_ttl"><?php the_short_title(30); ?></h2>
                    <div class="un_media_txt"><?php echo the_excerpt(20); ?></div>
                  </div>
                </a>
              </article>

            <?php endwhile; ?>
          <?php endif; ?>

        </main>

        <!-- サイドバー -->
        <?php get_sidebar('archives'); ?>

      </div>
      <!-- ページネーション -->
      <?php get_template_part('inc/pager'); ?>

    </div>

    <!-- フッター -->
    <?php get_template_part('inc/footer'); ?>

  </div>

  <?php get_footer(); ?>