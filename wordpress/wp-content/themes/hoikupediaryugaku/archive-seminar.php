<?php get_header(); ?>
    <div id="main">
        <div id="page-post">
            <div id="post-<?php the_ID();?>" class="flex justify-center">
                <div class="w-full px-2 lg:w-3/4">
                    <div class="">
                        <div class="py-2 breadcrumb">
                            <!-- <span>home</span> > <span>セミナー一覧</span> -->
                            <span><a href="<?php echo esc_url( home_url() ); ?>">Home</a></span> > <a href="<?php echo esc_url( home_url( '/seminar' ) ); ?>"><span>セミナー 一覧</span></a>
                        </div>
                        <h2 class="">セミナー 一覧</h1>
                        <?php
                            if (have_posts()): while (have_posts()): the_post(); ?>
                                <div id="seminar-box" class="md:flex">
                                    <div class="photo">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                            $image = get_field('seminar-img');
                                            if ($image) { ?>
                                                <img src="<?php echo $image['url']; ?>">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="detail-box">
                                        <h3><?php echo the_title(); ?></h3>
                                        <p><?php echo get_field('seminar-catchphrase')?></p>
                                        <dl>
                                            <div class="detail-item">
                                                <dt>日時</dt>
                                                <dd>
                                                    <?php 
                                                    $dayAndTime = get_field('seminar-day-and-time');
                                                    echo $dayAndTime
                                                    ?>
                                                </dd>
                                            </div>
                                            <div class="detail-item">
                                                <dt>開催地</dt>
                                                <dd>
                                                    <?php 
                                                    $dayAndTime = get_field('seminar-address');
                                                    echo $dayAndTime
                                                    ?>
                                                </dd>
                                            </div>
                                        </dl>
                                        <a href="<?php the_permalink(); ?>" class="block btn bg-primaly rounded-full text-white px-4 py-4 text-center border-2 border-white hover:bg-white hover:border-primaly hover:text-primaly">もっと詳しく</a>
                                    </div>
                                </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>

            <div class="contact-area flex justify-center">
                <div class="w-full px-2 lg:w-3/4 flex justify-center">
                    <div class="contact-button"><a href="//line.me/ti/p/%40zlf8066v" class="lg-btn-primaly bg-green hover:text-green hover:bg-white hover:border-green" onclick="gtag('event','send' ,{
                            'event_category': 'Page Line Button',
                            'event_action': 'click',
                            'event_label': location.href,
                            'transport_type': 'beacon'
                        })">
                        LINE相談 >>
                    </a></div>
                    <div class="contact-button"><a href="<?php echo esc_url( home_url( '/mail-contact' ) ); ?>" class="lg-btn-primaly bg-primaly hover:text-primaly hover:bg-white hover:border-primaly" onclick="gtag('event','send', {
                            'event_category': 'Page Mail Button',
                            'event_action': 'click',
                            'event_label': location.href,
                            'transport_type': 'beacon'
                        })">
                        メール相談 >>
                    </a></div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>

<style>
    #fixed_header{
        color: #4d5966;
    }
    
    #fixed_header{
        background-color: #fff;
        background-color: rgb(255, 255, 255);
        border-style: solid;
        border-bottom-width: 2px;
        border-color: rgb(253, 132, 172);
    }
    .mobile-clicked{
        background-color: #fd84ac !important;
    }
    #navToggle {
        color: #4d5966;
    }
    .fa-line{
        color: #1db24b;
    }
    .fa-envelope{
        color: #fd84ac;
    }
</style>

<style>
#seminar-box h3{
    padding:0;
}
#seminar-box {
    padding: 1rem 0;
    border-bottom: solid 1px #ddd;
}
.photo{
    width:40%;
}
.photo img{
    width:100%;
}
.detail-item dt{
    font-weight: bold;
}
.detail-box{
    padding-left: 1.5rem;
    width:60%;
}
.detail-box dl{
    padding: 1rem;
}
@media only screen and (max-width: 576px) {
    .detail-box{
        width:100%;
    }
    .photo{
        width:100%;
    }
    .detail-box{
        padding-left: 0rem;
    }
}

</style>

<script>
// 固定ヘッダー分全体をずらす
var headerHeight = $('#fixed_header').css("height");
$("#main").css('padding-top', headerHeight); //topページ
// ページ内リンク位置の調整
  var headerHeightNum = $('#fixed_header').outerHeight();
  $(function(){
      $('a[href^="#"]').click(function() {
        var target = $(this).attr("href");
        var position = $(target).offset().top - headerHeightNum;
        $('body,html').animate({ scrollTop: position });
      });
  });
</script>