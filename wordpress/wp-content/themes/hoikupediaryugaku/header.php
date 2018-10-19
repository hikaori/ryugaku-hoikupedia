<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="description" content="留学ホイクペディアでは、毎年200名以上の保育士サポートを実施しています。圧倒的な実績力で海外カナダでの保育留学をサポートしています。">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include "ogp.php"; ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126356211-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-126356211-1');
  </script>

  <meta name="google-site-verification" content="Md3cAMZN-SZvsbTQrwFyxwXyyWA-leScVOdaGwxQQFk" />

  <script src="<?php echo get_template_directory_uri(); ?>/school-data.js"></script>
  <link rel="shortcut icon" href="https://hoikupedia.com/wp-content/themes/hoikupedia_02/img/favicon.ico">
  <?php wp_head() ?>

</head>
<body <?php body_class(); ?>>
    
<div class="wrap flex-wrap">
  <header>
    <nav id="fixed_header" class="z-10 fixed items-center justify-between flex p-2">
      <div id="logo" class="inline-block">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/logo_landscape_03.png" alt="ホイクペディアロゴ"></a>
      </div>

        <div class="inline-flex nav-items">
            <div id="menu" class="flex">

              <div id="slide_button1" class="nav-menu"><i class="mr-4 fas fa-home"></i>なぜホイクペディア留学？
                <ul id="slide_menu1">
                  <li><a class="text-black" href="<?php echo esc_url( home_url( '/benefit' ) ); ?>">ホイクペディアの強み</a></li>
                  <li><a class="text-black" href="<?php echo esc_url( home_url( '/ryugakuplan' ) ); ?>">留学プラン例</a></li>
                  <li><a class="text-black" href="<?php echo esc_url( home_url( '/#experience' ) ); ?>">海外で活躍中の保育士さん紹介</a></li>
                  <li><a class="text-black" href="<?php echo esc_url( home_url( '/about' ) ); ?>">運営会社概要</a></li>
                </ul>
              </div>

              <div id="slide_button2" class="nav-menu"><i class="mr-4 fas fa-hand-holding-heart"></i>サポート
                  <ul id="slide_menu2"  style="display: none;">
                      <li><a class="text-black" href="<?php echo esc_url( home_url( '/services' ) ); ?>">サポート内容</a></li>
                      <li><a class="text-black" href="<?php echo esc_url( home_url( '/volunteertour' ) ); ?>">保育ボランティア</a></li>
                      <li><a class="text-black" href="<?php echo esc_url( home_url( '/license_transfer' ) ); ?>">免許書き換え</a></li>
                      <li><a class="text-black" href="<?php echo esc_url( home_url( '/how-to-use-working-holiday' ) ); ?>">ワーホリ活用術</a></li>
                      <li><a class="text-black" href="<?php echo esc_url( home_url( '/visa-consultant' ) ); ?>">ビザコンサルティング</a></li>
                      <li><a class="text-black" href="<?php echo esc_url( home_url( '/support-job-search' ) ); ?>">就職斡旋</a></li>
                    </ul>
              </div>
              <div id="slide_button3" class="nav-menu"><i class="mr-4 fas fa-graduation-cap"></i>ホイクペディア提携学校
                  <ul id="slide_menu3"  style="display: none;">
                      <li><a class="text-black" href="<?php echo esc_url( home_url( '/special-school' ) ); ?>">専門学校留学</a></li>
                      <li><a class="text-black" href="<?php echo esc_url( home_url( '/language-school' ) ); ?>">語学学校留学</a></li>
                    </ul>
              </div>
              <div id="slide_button4" class="nav-menu"><i class="mr-4 fas fa-info-circle"></i>その他お役立ち情報
                  <ul id="slide_menu4"  style="display: none;">
                      <li><a class="text-black" href="<?php echo esc_url( home_url( '/visa-for-ece' ) ); ?>">幼児教育ができるビザ申請</a></li>
                      <li><a class="text-black" href="<?php echo esc_url( home_url( '/about-member' ) ); ?>">メンバーシップ</a></li>
                      <li><a class="text-black" href="<?php echo esc_url( home_url( '/seminar' ) ); ?>">セミナー 一覧</a></li>
                    </ul>
              </div>

            </div>
        </div>

        <div id="nav-sns" class="inline-flex nav-contact-button">
            <div class="sns-item">
              <a href="//line.me/ti/p/%40zlf8066v" class="inline-block" onclick="gtag('event','send' , {
                  'event_category': 'Header Line Button',
                  'event_action': 'click',
                  'event_label': location.href,
                  'transport_type': 'beacon'
              })"><i class="fab fa-line"></i></a>
            </div>
            <div class="sns-item">
              <a href="<?php echo esc_url( home_url( '/mail-contact' ) ); ?>"  class="inline-block" onclick="gtag('event','send' , {
                  'event_category': 'Header Mail Button',
                  'event_action': 'click',
                  'event_label': location.href,
                  'transport_type': 'beacon'
              })"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
        <div id="navToggle">
          <span class="border-blue navToggle-line"></span>
          <span class="border-blue navToggle-line"></span>
          <span class="border-blue navToggle-line"></span>
        </div><!--#navToggle END-->
    </nav>
  </header>
  