<?php
function nagatarock_script()
{
  wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap', array());
  wp_enqueue_style('style-name', esc_url(get_template_directory_uri()) . '/css/style.css', array());
  wp_enqueue_style('style', esc_url(get_template_directory_uri()) . '/style.css', array(), '1.0.0');
  wp_enqueue_style('style', esc_url(get_template_directory_uri()) . '/css/animsition.min.css', array(), '1.0.0');
  wp_enqueue_script('script-name', esc_url(get_template_directory_uri()) . '/js/jquery-3.5.1.min.js', array('jquery'), '1.0.0', true);
  // wp_enqueue_script('script-animation' , esc_url(get_template_directory_uri()). '/js/animsition.min.js',array('jquery'),'1.0.0',true);    
  wp_enqueue_script('script-hamburger', esc_url(get_template_directory_uri()) . '/js/hamburger.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('script-link', esc_url(get_template_directory_uri()) . '/js/link.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'nagatarock_script');

//管理バーの非表示
add_filter('show_admin_bar', '__return_false');

function custom_theme_setup()
{
  //head内にフィードリンクを出力
  add_theme_support('automatic-feed-links');
  //タイトルタグを動的に出力
  add_theme_support('title-tag');
  //ブロックエディタ用のcssを有効化
  add_theme_support('wp-block-styles');
  //埋め込みコンテンツをレスポンシブ対応に
  add_theme_support('responsive-embeds');
  //アイキャッチ画像を有効化
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(231, 177, false);
}
add_action('after_setup_theme', 'custom_theme_setup');

//投稿一覧ページの本文（抜粋）の文字数調整
function my_excerpt_length($length)
{
  return 80;
}
add_filter('excerpt_length', 'my_excerpt_length');

//ウィジェット
function my_theme_widgets_init()
{
  register_sidebar(array(
    'name' => 'この記事を書いた人',
    'id' => 'main-sidebar',
  ));
  register_sidebar(array(
    'name' => '記事カテゴリー',
    'id' => 'category-sidebar',
  ));
  register_sidebar(array(
    'name' => 'アーカイブカテゴリー',
    'id' => 'archive-sidebar',
  ));
}
add_action('widgets_init', 'my_theme_widgets_init');

function load_script()
{
  wp_enqueue_script('jquery');
}
add_action('init', 'load_script');
