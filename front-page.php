<?php get_header(); ?>

<body>
  <div class="un_top_bg hp_100vh">
    <!-- Topロゴ -->
    <div class="un_logo_container js_logo_container">
      <h1 class="un_logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo/top.png" alt="takiguchiminami hairstylist"></h1>
    </div>
    <!-- ヘッダー -->
    <header class="ly_header hp_textTransform hp_topHeader_bg">
      <ul class="bl_header_inner">
        <li class="el_header_list"><a class="el_header_link" href="<?php echo esc_url(home_url()); ?>">top</a></li>
        <li class="el_header_list"><a class="el_header_link" href="<?php echo esc_url(home_url('/principle/')); ?>">principle</a></li>
        <li class="el_header_list"><a class="el_header_link" href="<?php echo esc_url(home_url('/profile/')); ?>">profile</a></li>
        <li class="el_header_list"><a class="el_header_link" href="<?php echo esc_url(home_url('/news/')); ?>">news</a></li>
        <li class="el_header_list"><a class="el_header_link" href="<?php echo esc_url(home_url('/menu/')); ?>">menu</a></li>
        <li class="el_header_list"><a class="el_header_link" href="<?php echo esc_url(home_url('/access/')); ?>">access</a></li>
        <li class="el_header_list">
          <a href="https://stekina.com/reserve/MPWZ-2VSV/menu" target="_blank" rel="noopener noreferrer" class="el_btn">reserve</a>
        </li>
      </ul>
    </header>

    <!-- ハンバーガーボタン -->
    <?php get_template_part('inc/hamburger'); ?>

    <!-- スライダー用 -->
    <ul class="bl_slide_container hp_100vh">
      <li class="el_slide_list js_slide_list"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/store/store005.jpg" alt=""></li>
      <li class="el_slide_list js_slide_list"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/store/store003.jpg" alt=""></li>
      <li class="el_slide_list js_slide_list"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/store/store004.jpg" alt=""></li>
      <li class="el_slide_list js_slide_list"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/store/store006.jpg" alt=""></li>
    </ul>
  </div>

  <?php get_footer(); ?>