<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head() ?>

</head>
<body <?php body_class(); ?>>
    
<div class="wrap flex-wrap">
  <header>
    <nav id="fixed_header" class="z-10 fixed bg-white reflex items-center justify-between flex-wrap p-2">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/logo_landscape_03.png" class="w-2/5 lg:w-1/5" alt="ホイクペディアロゴ">
        <div id="navToggle"  style="display:none">
          <span class="border-blue navToggle-line"></span>
          <span class="border-blue navToggle-line"></span>
          <span class="border-blue navToggle-line"></span>
        </div><!--#navToggle END-->
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto pr-2">
            <div id="menu" class="flex lg:justify-end lg:flex-grow">
                <div id="slide_button1" class="block mt-4 lg:inline-block lg:mt-0 hover:text-primaly mr-4">ホイクペディア留学サービスについて
                <ul id="slide_menu1"  style="display: none;">
                  <li><a href="#">ホイクペディアの強み</a></li>
                  <li><a href="#">サービス内容</a></li>
                  <li><a href="#">留学プラン例</a></li>
                  <li><a href="#">留学体験談</a></li>
                  <li><a href="#">会社概要</a></li>
                </ul>
              </div>
              <div id="slide_button2" class="block mt-4 lg:inline-block lg:mt-0 hover:text-primaly mr-4">ホイクペディア留学だけのサービス
                  <ul id="slide_menu2"  style="display: none;">
                      <li><a href="#">保育ボランティア</a></li>
                      <li><a href="#">免許書き換え</a></li>
                      <li><a href="#">ワーホリ活用術</a></li>
                      <li><a href="#">ビザコサルティング</a></li>
                      <li><a href="#">就職斡旋</a></li>
                    </ul>
              </div>
              <div id="slide_button3" class="block mt-4 lg:inline-block lg:mt-0 hover:text-primaly mr-4">学校一覧
                  <ul id="slide_menu3"  style="display: none;">
                      <li><a href="#">専門学校留学</a></li>
                      <li><a href="#">語学学校留学</a></li>
                    </ul>
              </div>
              <div id="slide_button4" class="block mt-4 lg:inline-block lg:mt-0 hover:text-primaly mr-4">その他
                  <ul id="slide_menu4"  style="display: none;">
                      <li><a href="#">幼児教育ができるビザ申請</a></li>
                      <li><a href="#">ナニーファミリーマッチング</a></li>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">FB</a></li>
                      <li><a href="#">twitter</a></li>
                    </ul>
              </div>
            </div>
          <div class="flex justify-center">
            <div class="px-2">
              <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-primaly border-primaly hover:border-transparent hover:text-white hover:bg-primaly mt-4 lg:mt-0">LINE相談</a>
            </div>
            <div class="px-2">
              <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-primaly border-primaly hover:border-transparent hover:text-white hover:bg-primaly mt-4 lg:mt-0">メール相談</a>
            </div>
          </div>
        </div>
      </nav>
  </header>
  