<?php

// // コンテンツの最大幅を設定します。
// if ( ! isset( $content_width ) ) {
//   $content_width = 790;
// }

function hoikupediaryugaku_setup() {

  // タイトルタグを自動生成します。
  add_theme_support( 'title-tag' );

  // ヘッダーにfeedのlinkを生成します。
  add_theme_support( 'automatic-feed-links' );

  // アイキャッチ画像を利用できるようにします。
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 790, 300, true );

  // サムネイル用画像サイズ設定
  add_image_size( 'large-thumbnail', 1090, 330, true );

  // 出力されるマークアップをHTML5にします。
  add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
  ) );

  // エディタ用CSSを有効にします。
  // add_editor_style( array( 'css/editor-style.css' ) );
}
add_action( 'after_setup_theme', 'hoikupediaryugaku_setup' );

// ウィジェット機能を追加します。
function maverickcoffee_widgets_init() {
  register_sidebar( array(
    'name' => 'サイドバーウィジェットエリア',
    'id' => 'subcol-widget-area',
    'description' => 'サイドバーのウィジェットエリア',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h2 class="widget__title font-serif">',
    'after_title' => '</h2>',
  ) );
}
add_action( 'widgets_init', 'maverickcoffee_widgets_init' );

// 読み込むCSSとJavaScriptを設定します。
function hoikuryugaku_scripts() {

  // fontawesomeCSSの読み込み
  // wp_enqueue_style( 'fontawesome-style', get_template_directory_uri().'/css/bootstrap-custom.css', array(), '1' );

  // サイト用CSSの読み込み
  wp_enqueue_style( 'hoikupediaryugaku-style', get_template_directory_uri().'/dist/styles.css', array(), '1' );

  // slick用cssの読み込み
  wp_enqueue_style( 'slick-style', get_template_directory_uri().'/slick/slick.css', array(), '1' );
  wp_enqueue_style( 'slick-theme-style', get_template_directory_uri().'/slick/slick-theme.css', array(), '1' );

  // サイト用JavaScriptの読み込み
  wp_enqueue_script( 'hoikuryugaku-script', get_template_directory_uri().'/dist/script.js', array(), '1', true );

}
add_action( 'wp_enqueue_scripts', 'hoikuryugaku_scripts' );

// 抜粋文が自動的に生成される場合に最後に付与される文字列を変更します。
function wp_excerpt_more() {
  return ' ...';
}
add_filter( 'excerpt_more', 'wp_excerpt_more' );
