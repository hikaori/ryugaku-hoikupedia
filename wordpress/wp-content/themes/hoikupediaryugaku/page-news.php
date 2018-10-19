<?php get_header(); ?>

    <?php while( have_posts() ) : remove_filter ('the_content', 'wpautop'); the_post(); ?> 
    <!-- 固定ページ開始 -->
    <div id="main">
        <div id="page-post">
            <div class="contact-area flex justify-center">
                <div class="contact-button"><a href="//line.me/ti/p/%40zlf8066v" class="lg-btn-primaly bg-green hover:text-green hover:bg-white hover:border-green">
                    LINE相談 >>
                </a></div>
                <div class="contact-button"><a href="<?php echo esc_url( home_url( '/mail-contact' ) ); ?>" class="lg-btn-primaly bg-primaly hover:text-primaly hover:bg-white hover:border-primaly">
                    メール相談 >>
                </a></div>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>