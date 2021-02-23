jQuery(document).ready(function ($) {
  // *********************
  // ヘッダーにbodyの高さを持たせる
  // *********************
  var containerHeight = $('.ly_main_container').height();
  if (containerHeight > "100vh") {
  } else {
    $('.ly_header').css('height', containerHeight);
  }


  // *********************
  // Topスライドショー
  // *********************
  var slideCurrent = 0;
  var lastCurrent = $('.js_slide_list').length - 1;
  $('.js_slide_list').css('display', 'none');
  $('.js_slide_list').eq(slideCurrent).css('display', 'block');

  function changeslide() {
    $('.js_slide_list').fadeOut(1000);
    $('.js_slide_list').eq(slideCurrent).fadeIn(1000);
  };

  function startTimer() {
    setInterval(function () {
      if (slideCurrent === lastCurrent) {
        slideCurrent = 0;
        changeslide();
      } else {
        slideCurrent++;
        changeslide();
      };
    }, 3000);
  }
  startTimer();


  // *********************
  // ハンバーガーメニュー
  // *********************
  var btn = $('.js_hamburgerBtn_lineTop , .js_hamburgerBtn_lineMiddle  , .js_hamburgerBtn_lineBottom');
  var menu = $('.ly_header');
  $('.js_hamburgerBtn').on('click', function () {
    btn.toggleClass('is_open');
    menu.toggleClass('is_open');
  })


});