<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): remove_filter ('the_content', 'wpautop'); the_post(); ?>

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
                        <!-- <span>home</span> > <span>セミナー 一覧</span> > <span>ページ</span> -->
                        <span><a href="<?php echo esc_url( home_url() ); ?>">Home</a></span> > <a href="<?php echo esc_url( home_url( '/seminar' ) ); ?>"><span>セミナー 一覧</span></a> > <?php the_title(); ?></span>
                    </div>
                    <h2 class="font-semibold text-primaly pb-4"><?php the_title(); ?></h2>
                </div>
                <!-- 各セミナー 内容-->
                <div class="seminar-img">
                    <?php 
                    $image = get_field('seminar-img');
                    if ($image) { ?>
                        <img src="<?php echo $image['url']; ?>">
                    <?php } ?>
                </div>
                <?php 
                $desccription = get_field('seminar-desccription');
                echo $desccription
                ?>
                <h3>内容</h3>
                <ul class="topic">
                    <?php 
                    $topic =  get_field('seminar-topics');
                    echo $topic?>
                </ul>
                <dl class="content-border-pink">
                    <div class="detail-item">
                        <dt>日時</dt>
                        <dd>
                            <?php 
                            $dayAndTime = get_field('seminar-day-and-time');
                            echo $dayAndTime
                            ?>
                        </dd>
                        <?php 
                        $additionalDay = get_field('seminar-additional-day-and-time');
                        if($additionalDay){ echo $additionalDay; }?>
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
                    <div class="detail-item">
                        <dt>形式</dt>
                            <?php 
                            $typeHtml;
                            $seminarType = get_field('seminar-type');
                            foreach($seminarType as $type){
                                $typeHtml .= "<dd>" .$type ."</dd>";
                            }
                            echo $typeHtml ?>
                    </div>
                    <div class="detail-item">
                        <dt>料金</dt>
                        <dd>
                            <?php 
                            $price = get_field('seminar-price');
                            echo $price
                            ?>
                        </dd>
                    </div>
                </dl>
                <h3 class="text-center">お申し込みフォーム</h3>
                <div class="form_wrap">
                <?php 
                $contactformID = get_field('seminar-contactform')[0];
                $contactformTitle = get_the_title($contactformID);
                $contactformShortcode = '[contact-form-7 id="'.$contactformID.'" title="'.$contactformTitle.'"]';
                echo do_shortcode($contactformShortcode); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; endif; ?>

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
    /* セミナーコンテンツcss */
    .topic li::before {margin-right: 15px; font-family: 'icomoon'; content: "■"; color: #fd84ac;}
    .topic li:nth-child(3n+2)::before {color: #59c9f6;}
    .topic li:nth-child(3n)::before {color: #ffb94d;}
    .content-border-pink {
        padding: 16px;
        margin: 2em auto;
        border-radius: 8px;
        border: 4px solid #fd84ac;
    }
    .detail-item{
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    .detail-item dt{
        font-weight: bold;
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