<?php get_header("2"); ?>
    <main>
        <section class="l-spacer -nobottom">
            <div class="c-subtitle -information">
                <h2 class="c-title02 -information u-centerposition" title="Information">インフォメーション</h2>
            </div>
        </section>
        <section id="<?php the_ID(); ?>" class="l-archive p-archive">
            <div class="l-container -forSub">
                <div class="l-spacer">
                    <div class="p-archive__tab">
                        <nav>
                            <ul class="p-archive__list">
                                <li class="p-archive__list-item"><a href="<?php echo esc_url( home_url("/all/")); ?>">すべて</a></li>
                                <li class="p-archive__list-item <?php if(is_category('information')){echo '-current';}; ?>"><a href="<?php echo esc_url( home_url("/information/")); ?>">お知らせ</a></li> 
                                <li class="p-archive__list-item <?php if(is_category('column')){ echo '-current';}; ?>"><a href="<?php echo esc_url( home_url("/column/")); ?>">コラム</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <hr class="p-single__border">
                <?php 
                    $paged = get_query_var('paged')? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'category_name' => 'column',
                        'posts_per_page' => 5,
                        'order' => 'DESC',
                    );
                    $the_query = new WP_Query($args);
                    if($the_query->have_posts()):
                ?>
                <?php  while($the_query->have_posts()): $the_query->the_post(); ?>
                <article class="p-archive__wrap">
                    <a href="<?php the_permalink(); ?>">
                        <div class="p-archive__flex">
                            <?php if(has_post_thumbnail()): ?>
                            <div class="p-archive__left">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                            <?php endif; ?>
                            <div class="p-archive__right">
                                <div class="p-archive__top">
                                    <div class="p-archive__date">
                                        <time datetime="<?php the_time("Y-m-d");?>"><?php the_time("Y.m.d");?><time>
                                    </div>
                                    <div class="p-archive__title">
                                        <h2>
                                        <?php 
                                        if(mb_strlen($post->post_title, 'UTF-8') > 35) {
                                            $title = mb_substr($post->post_title, 0, 35, 'UTF-8');
                                            echo $title.'...';
                                        } else {
                                            echo $post->post_title;
                                        }
                                        ?>
                                        </h2>
                                    </div>
                                </div>
                                <div class="p-archive__body">
                                    <div class="p-archive__slug">
                                        <p><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
                                    </div>
                                    <div class="p-archive__text">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="p-single__border">
                    </a>
                </article>
                <?php endwhile; ?>
                <?php endif; ?>
                    <div class="l-spacer">
                        <div class="p-pagenavi">
                            <?php
                                if( function_exists('wp_pagenavi') ) {
                                    wp_pagenavi(array('query' => $the_query));
                                }
                                ?>
                        </div>
                    </div>
                <?php wp_reset_postdata(); ?>
                <?php wp_reset_query( ); ?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>