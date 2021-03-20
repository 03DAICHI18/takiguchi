<?php get_header(); ?>

<body>
  <div class="ly_container un_holiday">
    <!-- ヘッダー -->
    <?php get_template_part('inc/header'); ?>

    <!-- ハンバーガーボタン -->
    <?php get_template_part('inc/hamburger'); ?>

    <!-- メインコンテンツ -->
    <main class="un_access_wrapper">
      <h1 class="el_sec_ttl hp_textTransform">holiday</h1>

      <div class="un_menu_btnWrap">
        <a href="https://stekina.com/reserve/MPWZ-2VSV/menu" target="_blank" rel="noopener noreferrer" class="el_btn el_btn_main un_menu_btn">reserve</a>
      </div>
    </main>

    <!-- フッター -->
    <?php get_template_part('inc/footer'); ?>

  </div>

  <?php get_footer(); ?>