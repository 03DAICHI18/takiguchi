<!DOCTYPE html>
<!-- 言語宣言/OGP宣言 -->
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <!-- 共通 -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Windows用デスクトップ用タイル設定 -->
  <meta name="msapplication-TileImage" content="" />
  <meta name="ç" content="#afc9c9" />

  <!-- 外部ファイル読み込み -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/destyle.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?202103212150">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Noto+Serif+JP&display=swap" rel="stylesheet">
  <!-- wpのデフォルトで書いているjQueryを読み込まないようにする -->
  <?php wp_deregister_script('jquery'); ?>
  <?php wp_head(); ?>
</head>