jQuery(document).ready(function ($) {
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
  var scrollValue;
  var userAgent = window.navigator.userAgent.toLowerCase();
  var ios = userAgent.indexOf('iphone') > -1 || userAgent.indexOf('ipad') > -1 || userAgent.indexOf('macintosh') > -1 && 'ontouchend' in document;

  function sclollRock() {
    scrollValue = $(window).scrollTop();
    if (ios) {
      $('body').css('position', 'fixed');
      $('body').css('top', '0');
    } else {
      $('body').addClass('is_scrollRock');
    }
  }
  function sclollUnrock() {
    if (ios) {
      $('body').css('position', '');
      $('body').css('top', '-' + scrollValue + 'px');
      $(window).scrollTop(scrollValue);
    } else {
      $('body').removeClass('is_scrollRock');
    }
  }

  var btn = $('.js_hamburgerBtn_lineTop , .js_hamburgerBtn_lineMiddle  , .js_hamburgerBtn_lineBottom');
  var menu = $('.ly_header');

  $('.js_hamburgerBtn').on('click', function () {
    btn.toggleClass('is_open');
    menu.toggleClass('is_open');

    if (btn.hasClass('is_open')) {
      sclollRock()
      // $('body').css('padding-right', '17px');
    } else {
      sclollUnrock()
      // $('body').css('padding-right', '0');
    }
  })

});