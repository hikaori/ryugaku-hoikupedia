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
  set_post_thumbnail_size(320, 240, true);
  add_image_size( 'blog_thumbnail', 400, 300, true);

  //固定ページで抜粋の機能を有効化 
  add_post_type_support('page','excerpt');

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

  // サイト用CSSの読み込み
  wp_enqueue_style( 'hoikupediaryugaku-style', get_template_directory_uri().'/dist/styles.css', array(), '1' );

  // slick用cssの読み込み
  wp_enqueue_style( 'slick-style', get_template_directory_uri().'/slick/slick.css', array(), '1' );
  wp_enqueue_style( 'slick-theme-style', get_template_directory_uri().'/slick/slick-theme.css', array(), '1' );

  // サイト用JavaScriptの読み込み
  wp_enqueue_script( 'hoikuryugaku-script', get_template_directory_uri().'/dist/script.js', array(), '1', false );

}
add_action( 'wp_enqueue_scripts', 'hoikuryugaku_scripts' );

// 抜粋文が自動的に生成される場合に最後に付与される文字列を変更します。
function wp_excerpt_more() {
  return ' ...';
}
add_filter( 'excerpt_more', 'wp_excerpt_more' );

//カスタム投稿タイプを登録
function new_post_type() {
  register_post_type(
    'seminar',//投稿タイプ名（識別子）
    array(
      'label' => 'セミナー情報',
      'labels' => array(
        'add_new_item' => 'セミナー情報を追加',
        'edit_item' => 'セミナー情報を編集',
        'view_item' => 'セミナー情報を表示',
        'search_items' => 'セミナー情報を検索',
      ),
      'public' => true,// 管理画面に表示しサイト上にも表示する
      'hierarchicla' => false,//コンテンツを階層構造にするかどうか(投稿記事と同様に時系列に)
      'has_archive' => true,//trueにすると投稿した記事のアーカイブページを生成
      'supports' => array(//記事編集画面に表示する項目を配列で指定することができる
        'title',//タイトル
        'thumbnail',//アイキャッチ画像
        'custom-fields',
      ),
      'menu_position' => 5//「投稿」の下に追加
    )
  );
flush_rewrite_rules();
}
add_action('init', 'new_post_type');
