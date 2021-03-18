<?php get_header(); ?>

<body>
  <div class="ly_container">
    <!-- ヘッダー -->
    <?php get_template_part('inc/header'); ?>

    <!-- ハンバーガーボタン -->
    <?php get_template_part('inc/hamburger'); ?>

    <!-- メインコンテンツ -->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <main class="single_wrapper">
          <h1 class="single_ttl"><?php echo the_title(); ?></h1>
          <div class="single_contaner">
            <div class="single_contentBlock">
              <div class="single_img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('full');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/store/store001.jpg" alt="お店写真">';
                }
                ?>
              </div>
              <?php echo the_content(); ?>
            </div>
            
            <!-- サイドバー -->
            <?php get_sidebar('archives'); ?>

          </div>
        </main>

      <?php endwhile; ?>
    <?php endif; ?>



    <!-- フッター -->
    <?php get_template_part('inc/footer'); ?>
  </div>

  <?php get_footer(); ?>