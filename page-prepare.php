<?php
/*
Template Name: 準備中
*/
?>
<?php get_header("2"); ?>
    <main>
        <section class="l-spacer">
            <div class="c-subtitle -contact">
                <h2 class="c-title02 u-centerposition" title="Prepare">準備中</h2>
            </div>
        </section>
        <section class="l-thanks p-thanks">
          <div class="l-container">
                <div class="l-spacer">
                    <?php if(have_posts()): 
                        while(have_posts()): the_post();
                        ?>
                            <?php the_content(); ?>
                        <?php endwhile; 
                        endif;
                        ?>
                    <div class="u-centerposition l-spacer -maximum">
                        <a href="<?php echo esc_url( home_url()); ?>" class="c-button"><span class="u-uppercase">top</span>ページへ戻る</a>
                    </div>
                </div>
            </div>
          </div>
        </section>
    </main>
    <?php get_footer(); ?>