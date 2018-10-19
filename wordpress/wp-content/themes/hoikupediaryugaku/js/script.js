import 'jquery';
window.$ = $;
$(function ()
{

  // デバイス判別
  var ua = navigator.userAgent;
  var mobile = false;
  var tablet = false;
  if (ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0
    && ua.indexOf('Mobile') > 0)
  {
    mobile = true;
  } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0)
  {
    tablet = true;
  } else
  {
    // PC用の処理
  }

  // PCナビゲーション
  $("#slide_button1").mouseenter(function ()
  {
    $("#slide_menu1").slideToggle();
  });
  $("#slide_button1").mouseleave(function ()
  {
    $("#slide_menu1").slideToggle();
  });

  $("#slide_button2").mouseenter(function ()
  {
    $("#slide_menu2").slideToggle();
  });
  $("#slide_button2").mouseleave(function ()
  {
    $("#slide_menu2").slideToggle();
  });

  $("#slide_button3").mouseenter(function ()
  {
    $("#slide_menu3").slideToggle();
  });
  $("#slide_button3").mouseleave(function ()
  {
    $("#slide_menu3").slideToggle();
  });

  $("#slide_button4").mouseenter(function ()
  {
    $("#slide_menu4").slideToggle();
  });
  $("#slide_button4").mouseleave(function ()
  {
    $("#slide_menu4").slideToggle();
  });

  $("#navToggle").on("click", function ()
  {
    $('.nav-items').toggle();
    $(this).toggleClass('active');
    $('#menu').fadeToggle();
    $('#contact-button').toggle();
    $('#logo').toggle();
    $('#nav-sns').toggle();
    $('#slide_button1, #slide_button2,#slide_button3, #slide_button4').addClass('mobile');
    $('#navToggle').toggleClass('clicked');
    $('#fixed_header').toggleClass('mobile-clicked');
    $("#slide_menu1").slideToggle();
    $("#slide_menu2").slideToggle();
    $("#slide_menu3").slideToggle();
    $("#slide_menu4").slideToggle();
  });

  $("#fv-catchcopy").slideDown("slow");


  // スライドイン方向の制御
  if (mobile)
  {
    $(".box").removeClass('lg-leftbox');
    $(".box").removeClass('lg-rightbox');
    $(".box").addClass('sm-box');
  }
  $(window).scroll(function ()
  {
    $(".box").each(function ()
    {
      var targetPosition = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      var kyori = targetPosition - windowHeight + windowHeight / 5;
      if (scroll < targetPosition - windowHeight + windowHeight / 5)
      {
        $(this).removeClass('boxshow');
      } else
      {
        $(this).addClass('boxshow');
      }
    })
  })

  // キャンペーンエリアmobileとタブレットの場合のみスライダー
  if (mobile || tablet)
  {
    $('.slick').slick({
      dots: true,
      infinite: true,
      autoplay: true,
      speed: 150,
      slidesToShow: 1,
      adaptiveHeight: true
    });
  }


  // ページ内リンク位置の調整
  var headerHeightNum = $('#fixed_header').outerHeight();
  var url = location.href;
  if (url.indexOf("#") >= 0)
  {
    var target = $(location.hash);
    var position = target.offset().top - headerHeightNum;
    console.log("aaa");
    $('body,html').animate({ scrollTop: position });
  }

});