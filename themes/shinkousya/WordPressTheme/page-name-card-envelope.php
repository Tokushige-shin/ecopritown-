<?php get_header(); ?>

<section class="p-name-card-envelope">
    <div class="c-underTitle__box">
        <p class="c-underTitle__subText">環境・SDGsに対応した</p>
        <h1 class="c-underTitle__title">特殊印刷・加工製品</h1>
        <h2 class="c-underTitle__heading c-underTitle__heading--leyout">環境への配慮を印象付ける名刺/封筒印刷</h2>
    </div>

    <div class="p-name-card-envelope__inner l-inner-fixed">
        <div class="c-block c-block--leyout">
            <div class="c-blockText">
                <p class="c-blockText__text">
                    名刺や封筒は、最も身近でよく使われる印刷物です。環境への配慮は、よく使われるものにこそ必要なことです。また名刺は、多くの場合で最初に渡すことが多く、第一印象として環境へ配慮している会社と印象付けることができます。
                </p>
            </div>

            <div class="c-block-contents">
                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/name-card-envelope-picture01.jpg" alt="名刺や封筒にロゴマークを入れて写している画像">
                        </div>
                        <p class="c-blockPicture__text">
                            名刺や封筒にロゴマークを入れることで環境への取り組みをアピールできます。
                        </p>
                    </div>
                </div>

                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/name-card-envelope-picture02.jpg" alt="名刺をを写してる画像">
                        </div>
                        <p class="c-blockPicture__text">
                            一番よくつかわれる名刺で環境への取り組みをアピールすることは効果的です。
                        </p>
                    </div>
                </div>

                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/name-card-envelope-picture03.jpg" alt="封筒にロゴマークを入れて写している画像">
                        </div>
                        <p class="c-blockPicture__text">
                            通常何気なく使用している封筒でもロゴマークを入れるだけでアピールできます。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $onestopBtn = 'template/onestop-parts/onestopBtn' ?>
<?php get_template_part($onestopBtn); ?>

<?php $contactTitle = 'template/contact-parts/contactTitle' ?>
<?php get_template_part($contactTitle); ?>

<?php get_footer('third'); ?>