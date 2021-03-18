    <!-- ハンバーガーボタン トップページでは白色を読み込む-->
    <?php if (is_front_page()) : ?>
      <button type="button" class="bl_hamburgerBtn js_hamburgerBtn">
        <span class="el_hamburgerBtn_line el_hamburgerBtn_lineTop js_hamburgerBtn_lineTop un_bg_white"></span>
        <span class="el_hamburgerBtn_line el_hamburgerBtn_lineMiddle js_hamburgerBtn_lineMiddle un_bg_white"></span>
        <span class="el_hamburgerBtn_line el_hamburgerBtn_lineBottom js_hamburgerBtn_lineBottom un_bg_white"></span>
      </button>
    <?php else : ?>
      <!-- ハンバーガーボタン その他のページでは黒色を読み込む-->
      <button type="button" class="bl_hamburgerBtn js_hamburgerBtn">
        <span class="el_hamburgerBtn_line el_hamburgerBtn_lineTop js_hamburgerBtn_lineTop"></span>
        <span class="el_hamburgerBtn_line el_hamburgerBtn_lineMiddle js_hamburgerBtn_lineMiddle"></span>
        <span class="el_hamburgerBtn_line el_hamburgerBtn_lineBottom js_hamburgerBtn_lineBottom"></span>
      </button>
    <?php endif; ?>