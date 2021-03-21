<?php

/**
 * テーマのセットアップ
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

/**
 *  タイトルが長い場合に省略する
 *
 * 参考：https://qiita.com/seltzer/items/68d7e2f010021352eae1
 */

function the_short_title($length = 20)
{
  $ret = get_the_title($post->ID);
  if (mb_strlen($ret) > $length) {
    $ret = mb_substr($ret, 0, $length) . '...';
  }

  echo $ret;
}

add_action('after_setup_theme', 'my_setup');

/**
 * 抜粋が長い場合に省略する
 *
 * 参考：https://deco8.net/web/how-to-use-excerpt-content/
 */
function custom_excerpt_length($length)
{
  return 20;  //表示したい文字数
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function new_excerpt_more($more)
{
  return '…'; //変更後の内容
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 *  【出力カスタマイズ】 wp_get_archives の年表記を置き換える 
 * 
 * 参考：https://hirashimatakumi.com/blog/60.html
 * */
function my_archives_link($html)
{
  $html = str_replace('年', '.', $html);
  // $html = str_replace('月', '', $html);
  return $html;
}
add_filter('get_archives_link', 'my_archives_link');

// objectFit
function custom_print_scripts()
{
  wp_enqueue_script('ofi-js', '//cdnjs.cloudflare.com/ajax/libs/object-fit-images⁄3.2.4/ofi.min.js', '', '', true);
}
add_action('wp_print_scripts', 'custom_print_scripts');
// ブラウザ取得判定するのに小文字にする
$browser = strtolower($_SERVER['HTTP_USER_AGENT']);
// ブラウザ判定
if (strstr($browser, 'trident') || strstr($browser, 'msie')) {
?>
  <!-- ここにIEだけに読み込ませたいものを書きます｡ -->
<?php
}
?>