<?php
/*
Template Name: フォーム確認画面
*/
?>
<?php get_header("2"); ?>
    <main>
        <section class="l-spacer">
            <div class="c-subtitle -contact">
                <h2 class="c-title02 u-centerposition" title="Contact">お申し込み・ご相談</h2>
            </div>
        </section>
        <section class="l-form p-form">
            <div class="l-container -forSub">
                <div class="l-spacer">
                    <h2 class="c-heading" title="contact form">お申し込み・ご相談フォーム</h2>
                </div>
                <div class="l-spacer">
                    <?php if(have_posts()): 
                        while(have_posts()): the_post();
                        ?>
                            <?php the_content(); ?>
                        <?php endwhile; 
                        endif;
                        ?>
                </div>
            </div>
        </section>

    </main>
    <?php get_footer(); ?>