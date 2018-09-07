<?php get_header(); ?>

    <?php while( have_posts() ) : remove_filter ('the_content', 'wpautop'); the_post(); ?> 
    <!-- 固定ページ開始 -->
    <div id="post-<?php the_ID();?>" class="flex justify-center <?php post_class();?>" style="padding-top:10%">
        <div class="w-full px-2 lg:w-3/4">
            <div class="">
                <div class="py-2"><span>home</span>＞<span>サービス</span></div>
                <h2 class="font-semibold　text-2xl text-primaly pb-4"><?php the_title(); ?></h2>
            </div>
            <?php the_content();?>
        </div>
    </div><!-- end page -->
<?php endwhile; ?>

<?php get_footer(); ?>