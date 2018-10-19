<?php get_header(); ?>

    <?php while( have_posts() ) : remove_filter ('the_content', 'wpautop'); the_post(); ?> 
    <!-- 投稿ページ開始 -->
    <div id="main">
        <div id="page-post">
            <div id="post-<?php the_ID();?>" class="flex justify-center">
                <div class="w-full px-2 lg:w-3/4">
                    <div class="">
                        <div class="py-2 breadcrumb">
                            <?php 
                                $categories = get_the_category( $post_id );
                                // print_r($categories);
                                
                                if( $categories[0] ){
                                    $categoryId = $categories[0]->term_id;
                                    $categoryName = $categories[0]->name;
                                    $categoryUrl = get_category_link($categoryId);
                                    $category_html = '<span><a href="'.$categoryUrl.'">'.$categoryName.'</a></span> > ';
                                }
                            ?>
                            <!-- <span>home</span> > <span>カテゴリ</span> > <span>ページ</span> -->
                            <span><a href="<?php echo esc_url( home_url() ); ?>">Home</a></span> > <?php echo ($category_html) ?><span><?php the_title(); ?></span>
                        </div>
                        <h2 class="font-semibold text-primaly pb-4"><?php the_title(); ?></h2>
                    </div>
                    <?php the_content();?>
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
<?php endwhile; ?>

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