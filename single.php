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
                    <?php if(has_post_thumbnail()): ?>
                    <div class="p-single__thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>
                <div class="l-spacer">
                    <hr class="p-single__border">
                </div>
                <div class="l-spacer -notop">
                    <div class="p-single__flex">
                        <?php if(get_previous_post()): ?>
                            <div class="p-single__pagenation -left">
                                <?php previous_post_link('%link', '前の記事へ'); ?>
                            </div>
                        <?php else: ?>
                            <div class="p-single__pagenation p-single__hidden">
                                <span>記事はありません。</span>
                            </div>
                        <?php endif; ?>
                        <div class="p-single__pagenation -center">
                            <?php if($cat->cat_name === 'インフォメーション'): ?>
                                <a href="<?php echo esc_url( home_url("/information/")); ?>">一覧へ戻る</a>
                            <?php else: ?>
                                <a href="<?php echo esc_url( home_url("/column/")); ?>">一覧へ戻る</a>
                            <?php endif; ?>
                        </div>
                        <?php if(get_next_post()): ?>
                            <div class="p-single__pagenation -right">
                                <?php next_post_link('%link', '次の記事へ'); ?>
                            </div>
                            <?php else: ?>
                            <div class="p-single__pagenation p-single__hidden">
                                <span>記事はありません。</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>