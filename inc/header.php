<header class="ly_header hp_textTransform">
  <ul class="bl_header_inner">
    <li class="el_header_list">
      <a class="el_header_link" href="<?php echo esc_url(home_url()); ?>">top</a>
    </li>
    <li class="el_header_list">
      <a class="el_header_link <?php if (is_page('principle')) echo 'el_current'; ?>" href="<?php echo esc_url(home_url('/principle/')); ?>">principle</a>
    </li>
    <li class="el_header_list">
      <a class="el_header_link <?php if (is_page('profile')) echo 'el_current'; ?>" href="<?php echo esc_url(home_url('/profile/')); ?>">profile</a>
    </li>
    <li class="el_header_list">
      <a class="el_header_link <?php if (is_page('news')) echo 'el_current'; ?>" href="<?php echo esc_url(home_url('/news/')); ?>">news</a>
    </li>
    <li class="el_header_list">
      <a class="el_header_link <?php if (is_page('menu')) echo 'el_current'; ?>" href="<?php echo esc_url(home_url('/menu/')); ?>">menu</a>
    </li>
    <li class="el_header_list">
      <a class="el_header_link <?php if (is_page('access')) echo 'el_current'; ?>" href="<?php echo esc_url(home_url('/access/')); ?>">access</a>
    </li>
    <li class="el_header_list el_header_img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo/scissors.svg" alt="">
    </li>
    <li class="el_header_list">
      <a href="https://stekina.com/reserve/MPWZ-2VSV/menu" target="_blank" rel="noopener noreferrer" class="el_btn el_headerBtn">reserve</a>
    </li>
  </ul>
</header>