<?php get_header(); ?>

<section class="p-topics">
    <div class="c-underTitle__box">
        <p class="c-underTitle__subText">環境にやさしい取り組みを紹介</p>
        <h1 class="c-underTitle__title">トピックス</h1>
        <h2 class="c-underTitle__heading c-underTitle__heading--fontExtra c-underTitle__heading--leyout">Topics</h2>
    </div>
    <div class="p-topics__inner">
        <div class="p-topics__picture">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/topics-picture.png" alt="街を写している画像">
        </div>

        <div class="p-topics__continer">
            <?php
            if (wp_is_mobile()) {
                $num = 10; 
            } else {
                $num = 10;
            }
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $topics_cat = 'topics_category';
            $args =
                array(
                    'post_type' => 'topics',
                    'paged' => $paged, // ページネーションがある場合に必要
                    'posts_per_page' => $num, // 表示件数/page/2/
                );
            $the_query = new WP_Query($args);
            $pages = $the_query->max_num_pages;
            $wp_query->max_num_pages = $pages;
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                    <div class="p-topicsTop__wrap">
                        <a href="<?php the_permalink(); ?>">
                            <div class="p-topicsTop__content">
                                <p class="p-topicsTop__day"><?php the_time('Y.m.d'); ?></p>
                                <p class="p-topicsTop__tag">
                                    <?php
                                    if ($terms = get_the_terms($post->ID, $topics_cat)) {
                                        foreach ($terms as $term) {
                                            $cat_name = esc_html($term->name); //カテゴリー名取得
                                        }
                                    }
                                    ?>
                                    <?php echo $cat_name; ?>
                                </p>
                            </div>
                            <p class="p-topicsTop__contentsTitle"><?php the_title(); ?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Topicsはありません。</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    <!-- ページネーション -->
    <div class="c-pagenation__topics">
        <?php
        the_posts_pagination(array(
            'mid_size' => 1,
            'prev_text' => '<div class="c-arrow01"></div>PREV',
            'next_text' => 'NEXT<div class="c-arrow02"></div>',
        ));
        ?>
    </div>
</section>

<?php get_footer('second'); ?>