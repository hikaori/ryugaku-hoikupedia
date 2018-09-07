import 'jquery';
console.log('script.js読み込み');

$(function(){
  jQuery(console.log('jQuery読み込み'));
    // 固定ヘッダー分全体をずらす
    var headerHeight = $('#fixed_header').height();
    var headerHeightstr = headerHeight + "px";
    $("#main").css('padding-top',headerHeightstr);
    console.log("ヘッダー："+headerHeight);
    // ページ内リンク位置の調整
    var url = location.href;
      if( url.indexOf("#") >= 0 ){
          var target = $(location.hash);
          var position = target.offset().top - headerHeight;
          $('body,html').animate({scrollTop:position});
    }
    // ナビゲーションメニュースライダー
    $("#slide_button1").on("click", function() {
        $("#slide_menu1").slideToggle(); 
        $("#slide_menu1").toggleClass("active"); 
    });
    $("#slide_button2").on("click", function() {
        $("#slide_menu2").slideToggle(); 
        $("#slide_menu2").toggleClass("active"); 
    });
    $("#slide_button3").on("click", function() {
        $("#slide_menu3").slideToggle(); 
        $("#slide_menu3").toggleClass("active"); 
    });
    $("#slide_button4").on("click", function() {
        $("#slide_menu4").slideToggle(); 
        $("#slide_menu4").toggleClass("active"); 
    });

    $("#navToggle").on("click", function() {
        $(this).toggleClass('active');
        $('#menu').fadeToggle();
    });

    $("#fv-catchcopy").slideDown("slow");

    var ua = navigator.userAgent;
    var mobile = false;
    var tablet = false;
    if (ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 
  && ua.indexOf('Mobile') > 0) {
      mobile = true;
    } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
      tablet = true;
    } else {
          // PC用の処理
    }

    // メニューボタンの制御
    if(mobile||tablet){
      $('#menu').hide();
      $('#navToggle').show();
      $('#menu').addClass('flex-wrap');
      $('#slide_button1').addClass('w-full');
      $('#slide_button2').addClass('w-full');
      $('#slide_button3').addClass('w-full');
      $('#slide_button4').addClass('w-full');
    }


    // スライドイン方向の制御
    if(mobile){
      $(".box").removeClass('lg-leftbox');
      $(".box").removeClass('lg-rightbox');
      $(".box").addClass('sm-box');
    }
    $(window).scroll(function(){
      $(".box").each(function(){
        var targetPosition = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        var kyori= targetPosition - windowHeight　+ windowHeight/5;
        if(scroll < targetPosition - windowHeight　+ windowHeight/5 ){
          $(this).removeClass('show');
        }else{
          $(this).addClass('show');
        }
      })
    })

    // キャンペーンエリアmobileとタブレットの場合のみスライダー
    if(mobile||tablet){
      $('.slick').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        speed: 150,
        slidesToShow: 1,
        adaptiveHeight: true
      });
    }
});