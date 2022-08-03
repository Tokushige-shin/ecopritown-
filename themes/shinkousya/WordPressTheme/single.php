<?php get_header(); ?>


<section class="l-single">
    <div class="c-underTitle__box">
        <p class="c-underTitle__subText">環境にやさしい取り組みを紹介</p>
        <h1 class="c-underTitle__title">トピックス</h1>
        <h2 class="c-underTitle__heading c-underTitle__heading--leyout">Topics</h2>
    </div>

    <div class="l-single__inner">
        <div class="l-single__container">
            <p class="p-topicsTop__day p-topicsTop__day--leyput"><?php the_time('Y.m.d'); ?></p>
            <p class="l-topicsTop__tag">
                <?php // タグ表示
                $cp_slug = esc_html(get_post_type_object(get_post_type())->name);
                if ($cp_slug == "topics") :
                ?>
            </p>
            <div>
                <?php
                    if ($terms = get_the_terms($post->ID, "topics_category")) { //タクソノミー名
                        foreach ($terms as $term) {
                            echo "<p class=p-topicsTop__tag>" . $term->name . "</p>";
                        }
                    }
                ?>
            </div>
        <?php endif; ?>
        </div>
        <div class="l-single__wrap">
            <h1 class="l-single__title"><?php the_title(); ?></h1>
            <div class="l-single__content">
                <?php remove_filter('the_content', 'wpautop'); ?>
                <?php the_content(); ?>
            </div>
        </div>

        <div class="l-single__pageBox">
            <!-- <div class="l-single__previous l-single__pageBox--leyput">
                <?php previous_post_link('%link', '＜ 前の記事へ'); ?>
            </div> -->
            <a class="l-single__list l-single__pageBox--leyput c-btn__btn c-anima-1" href="<?php echo home_url(); ?>/topics">
                トピックス一覧へ
            </a>
            <!-- <div class="l-single__next">
                <?php next_post_link('%link', '次の記事へ ＞'); ?>
            </div> -->
        </div>
    </div>
</section>

<?php get_footer(); ?>