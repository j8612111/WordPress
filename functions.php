<?php
//cssの取得
function twpp_enqueue_styles()
{
  wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
  wp_enqueue_style('main-style-sheet', get_template_directory_uri() . "/css/style.css");
  wp_enqueue_style('pc-style-sheet', get_template_directory_uri() . "/css/pc-style.css");
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

//アイキャッチ画像を有効にする
add_theme_support('post-thumbnails');
 ?>