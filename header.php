<!DOCTYPE html>
<!-- 言語宣言/OGP宣言 -->
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <!-- プラグインで設定 -->
  <!-- <title>滝口三奈美 official HP</title> -->

  <!-- 共通 -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- プラグインで設定 -->
  <!-- <meta name="description" content="福岡でフリーランスの美容師として活動する滝口三奈美のオフィシャルホームページです。ご予約や、メニュー料金のご確認はこちらから宜しくお願いします。" /> -->

  <!-- Windows用デスクトップ用タイル設定 -->
  <meta name="msapplication-TileImage" content="https://03daichi18.github.io/takiguchi/public/assets/img/human/human01.jpg" />
  <meta name="ç" content="#afc9c9" />

  <!-- SNS共通 -->
  <meta property="og:url" content="" /> <!-- ページURL -->
  <meta property="og:title" content="滝口三奈美 official HP" />
  <meta property="og:image" content="https://03daichi18.github.io/takiguchi/public/assets/img/human/human01.jpg" />
  <meta property="og:site_name" content="滝口三奈美 official HP" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="福岡でフリーランスの美容師として活動する滝口三奈美のオフィシャルホームページです。ご予約や、メニュー料金のご確認はこちらから宜しくお願いします。" />
  <meta property="og:locale" content="ja_JP" />

  <!-- Twitter OGPプラグインで設定 -->
  <!-- <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@h4iPIeXdSeyElke" /> -->

  <!-- ファビコン WordPress管理画面から設定 -->
  <!-- <link rel="icon" type="image/x-icon" href="/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png"> -->

  <!-- 外部ファイル読み込み -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/destyle.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Noto+Serif+JP&display=swap" rel="stylesheet">

  <!-- wpのデフォルトで書いているjQueryを読み込まないようにする -->
  <?php wp_deregister_script('jquery'); ?>
  <?php wp_head(); ?>
</head>