<?php get_header(); ?>

<body>
  <div class="ly_container">
    <!-- ヘッダー -->
    <?php get_template_part('inc/header'); ?>

    <!-- ハンバーガーボタン -->
    <?php get_template_part('inc/hamburger'); ?>

    <!-- メインコンテンツ -->
    <main class="un_profile_inner">
      <h1 class="el_sec_ttl hp_textTransform">profile</h1>
      <p class="un_profile_name">滝口 三奈美</p>
      <div class="un_profile_block">
        <div class="un_profile_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/human/human02.jpg" alt=""></div>
        <div class="un_profile_txtBlock">
          <ul>
            <li class="un_profile_txt">出身地/長崎県</li>
            <li class="un_profile_txt">生年月日/1982.11.12</li>
            <li class="un_profile_txt">2001.3〜地元の長崎から福岡へ<br>大村美容専門学校に通う</li>
            <li class="un_profile_txt">2003.4〜福岡市天神「プルーヴ」に在籍<br>30歳から8年間店長を務める</li>
            <li class="un_profile_txt">2020.11〜〜福岡市天神シェアサロン「エマノン」にて独立</li>
          </ul>
          <a href="https://www.instagram.com/minamitakiguchi" target="_blank" rel="noopener noreferrer" class="el_btn el_btn_main un_instagram_btn">instagram</a>
        </div>
      </div>
    </main>
    <!-- フッター -->
    <?php get_template_part('inc/footer'); ?>
  </div>

  <?php get_footer(); ?>