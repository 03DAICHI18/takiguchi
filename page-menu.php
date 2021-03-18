<?php get_header(); ?>

<body>
  <div class="ly_container un_menu">
    <!-- ヘッダー -->
    <?php get_template_part('inc/header'); ?>

    <!-- ハンバーガーボタン -->
    <?php get_template_part('inc/hamburger'); ?>

    <!-- メインコンテンツ -->
    <main class="un_menu_wrapper">
      <h1 class="el_sec_ttl hp_textTransform">menu</h1>
      <p class="un_description_txt">※メニュー・金額は一例です。<br class="hp_spBr">詳細は予約サイトをご確認ください</p>
      <div class="un_menu_container">

        <div class="un_menu_flexBox">
          <dl class="un_menu_block">
            <dt class="un_team">cut</dt>
            <dd class="un_description">
              <span class="un_description_name">カット</span>
              <span class="un_description_price un_tilde">4,800円〜</span>
            </dd>
            <dd class="un_description">
              <span class="un_description_name">カット（22歳以下）</span>
              <span class="un_description_price">4,200円</span>
            </dd>
          </dl>
          <dl class="un_menu_block">
            <dt class="un_team">perm</dt>
            <dd class="un_description">
              <span class="un_description_name">パーマ</span>
              <span class="un_description_price un_tilde">5,800円〜</span>
            </dd>
            <dd class="un_description">
              <span class="un_description_name">デジタルパーマ</span>
              <span class="un_description_price un_tilde">9,500円〜</span>
            </dd>
            <dd class="un_description">
              <span class="un_description_name">ストカール</span>
              <span class="un_description_price">13,500円</span>
            </dd>
            <dd class="un_description">
              <span class="un_description_name">ストレートナチュラル</span>
              <span class="un_description_price un_tilde">5,800円〜</span>
            </dd>
            <dd class="un_description">
              <span class="un_description_name">ストレートメント</span>
              <span class="un_description_price un_tilde">9,800円〜</span>
            </dd>
            <dd class="un_description">
              <span class="un_description_name">縮毛矯正</span>
              <span class="un_description_price">11,500円</span>
            </dd>
          </dl>
        </div>

        <div class="un_menu_flexBox">
          <dl class="un_menu_block">
            <dt class="un_team">color</dt>
            <dd class="un_description">
              <span class="un_description_name">カラーベーシック</span>
              <span class="un_description_price un_tilde">5,800円〜</span>
            </dd>
            <dd class="un_description">
              <span class="un_description_name">グレイカラー</span>
              <span class="un_description_price">6,200円</span>
            </dd>
            <dd class="un_description">
              <span class="un_description_name">イルミナカラー</span>
              <span class="un_description_price un_tilde">6,500円〜</span>
            </dd>
            <dd class="un_description">
              <span class="un_description_name">ダブルカラー</span>
              <span class="un_description_price un_tilde">10,000円〜</span>
            </dd>
          </dl>
          <dl class="un_menu_block">
            <dt class="un_team">other</dt>
            <dd class="un_description">
              <span class="un_description_name">ヘアセット</span>
              <span class="un_description_price">4,000円</span>
            </dd>
            <dd class="un_description">
              <span class="un_description_name">フルメイク</span>
              <span class="un_description_price">4,000円</span>
            </dd>
            <dd class="un_description">
              <span class="un_description_name">前髪カット</span>
              <span class="un_description_price">1,000円</span>
            </dd>
          </dl>
        </div>
      </div>
      <div class="un_menu_btnWrap">
        <a href="https://stekina.com/reserve/MPWZ-2VSV/menu" target="_blank" rel="noopener noreferrer" class="el_btn el_btn_main un_menu_btn">reserve</a>
      </div>
    </main>
    <!-- フッター -->
    <?php get_template_part('inc/footer'); ?>
  </div>

  <?php get_footer(); ?>