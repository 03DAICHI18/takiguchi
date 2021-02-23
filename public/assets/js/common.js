jQuery(document).ready(function ($) {
  // *********************
  // Topスライドショー
  // *********************
  var slideCurrent = 0;
  var lastCurrent = $('.js_slide_list').length - 1;
  $('.js_slide_list').css('display', 'none');
  $('.js_slide_list').eq(slideCurrent).css('display', 'block');

  function changeslide() {
    $('.js_slide_list').fadeOut(1000); // 現在のスライドをフェードアウトさせる
    $('.js_slide_list').eq(slideCurrent).fadeIn(2000); // 次のスライドを表示させる
  };
  var Timer;
  function startTimer() {
    Timer = setInterval(function () {
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


});