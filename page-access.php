<?php get_header(); ?>

<body>
  <div class="ly_container un_access">
    <!-- ヘッダー -->
    <?php get_template_part('inc/header'); ?>

    <!-- ハンバーガーボタン -->
    <?php get_template_part('inc/hamburger'); ?>

    <!-- メインコンテンツ -->
    <main class="un_access_wrapper">
      <h1 class="el_sec_ttl hp_textTransform">access</h1>
      <div class="un_access_schedule">
        <p>平日/土 10:00-20:00</p>
        <p>日/祝 10:00-19:00</p>
      </div>
      <address class="un_access_address">
        <p>〒810-0001</p>
        <p>福岡市中央区天神2-3-2<br>
          天神アイエスビル2F<br>
          EMANON</p>
      </address>
      <div class="un_access_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d830.9257962928658!2d130.39826442922572!3d33.58705499879595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541918512c2c95b%3A0x7782b7bdea4ce773!2z44CSODEwLTAwMDEg56aP5bKh55yM56aP5bKh5biC5Lit5aSu5Yy65aSp56We77yS5LiB55uu77yT4oiS77ySIOWkqeelnuOCouOCpOOCqOOCueODk-ODqyAyRg!5e0!3m2!1sja!2sjp!4v1614692350814!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="un_access_imgWrap">
        <div class="un_access_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/store/store007.jpg" alt=""></div>
        <div class="un_access_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/human/human03.jpg" alt=""></div>
        <div class="un_access_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/store/store001.jpg" alt=""></div>
      </div>
      <div class="un_menu_btnWrap">
        <a href="https://stekina.com/reserve/MPWZ-2VSV/menu" target="_blank" rel="noopener noreferrer" class="el_btn el_btn_main un_menu_btn">reserve</a>
      </div>
    </main>

    <!-- フッター -->
    <?php get_template_part('inc/footer'); ?>

  </div>

  <?php get_footer(); ?>