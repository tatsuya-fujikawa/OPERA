<?php get_header("2"); ?>
    <main>
        <section class="l-spacer -nobottom">
            <div class="c-subtitle -information">
                <h2 class="c-title02 -information u-centerposition" title="Information">インフォメーション</h2>
            </div>
        </section>
                <?php 
                if(have_posts()):
                    while(have_posts()) : the_post();
                ?>
        <article id="<?php the_ID(); ?>" class="l-single p-single">
            <div class="l-container -forNarrow">
                <div class="p-single__top">
                    <div class="p-single__top-flex">
                        <div class="p-single__time">
                            <time datetime="<?php the_time("Y-m-d");?>"><?php the_time("Y.m.d");?><time>
                        </div>
                        <div class="p-single__tag">
                            <p><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
                        </div>
                    </div>
                    <div class="p-single__titlewrap">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <hr class="p-single__border">
                <div class="p-single__body">
                    <div class="p-single__thumbnail">
                        <img src="./img/img_01.png" alt="">
                    </div>
                    <?php the_content(); ?>
                </div>
                <hr class="p-single__border">
            </div>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>