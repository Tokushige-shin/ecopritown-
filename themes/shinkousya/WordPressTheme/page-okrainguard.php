<?php get_header(); ?>

<section class="p-paper">
    <div class="c-underTitle__box">
        <p class="c-underTitle__subText">
            水に濡れる場所でも使用できるよう開発された印刷用撥水紙
        </p>
        <h1 class="c-underTitle__title">環境に配慮した水に強い素材</h1>
        <h2 class="c-underTitle__heading p-paper__titleHeading--leyout">ＯＫレインガード</h2>
    </div>
    <div class="p-paper__inner l-inner-fixed">
        <div class="c-block c-block--leyout">
            <div class="c-blockText">
                <p class="c-blockText__text">
                OKレインガードは、上質紙をベースに水に濡れる場所でも使用ができるように開発された印刷用の撥水紙です。湿し水を使用するオフセット印刷やレーザー印刷に対応するとともに、上品で高級感ののある風合いをもっています。さらに撥水紙であるにも関わらす、原料はパルプ100％で自然環境にやさしい素材でつくられています。
                </p>
            </div>
            <div class="c-block-contents">
                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/w_rainguard_01.jpg" alt="LIMEX">
                        </div>
                    </div>
                </div>
            </div>
        </div>
             <div class="p-original__content" style="margin-bottom:40px">
                <h2 class="p-original__title">OKレインガードの活用例</h2>
                <p class="p-original__subText">クリアファイル、メニュー、パンフレット、販促POP、名刺、パッケージ、商品タグ、マップ、マスクケース、ポスター</p>
                </div>
            </div>
    </div>
</section>

<?php $onestopBtn = 'template/onestop-parts/onestopBtn' ?>
<?php get_template_part($onestopBtn); ?>

<?php $contactTitle = 'template/contact-parts/contactTitle' ?>
<?php get_template_part($contactTitle); ?>


<?php get_footer('third'); ?>