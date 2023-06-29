<?php get_header(); ?>

<section class="p-paper">
    <div class="c-underTitle__box">
        <p class="c-underTitle__subText">
            紙を超える耐久性を持ち、環境にやさしい高機能合成紙
        </p>
        <h1 class="c-underTitle__title">環境に配慮した水に強い素材</h1>
        <h2 class="c-underTitle__heading p-paper__titleHeading--leyout">ユポグリーン&reg;シリーズ</h2>
    </div>
    <div class="p-paper__inner l-inner-fixed">
        <div class="c-block c-block--leyout">
            <div class="c-blockText">
                <p class="c-blockText__text">
                ユポは合成紙の一種で、耐水性・耐久性に優れ、プリントやパッケージングに広く使われます。さまざまなタイプや厚さがあります。<br>
                従来品の主原料である化石燃料由来樹脂の一部を、植物由来のバイオマス樹脂に代替することで、CO2の排出量を削減しています。

                </p>
            </div>
            <div class="c-block-contents">
                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/w_yupo_01.jpg" alt="LIMEX">
                        </div>
                    </div>
                </div>
            </div>
        </div>
             <div class="p-original__content" style="margin-bottom:40px">
                <h2 class="p-original__title">ユポの活用例</h2>
                <p class="p-original__subText">メニュー、瓶ラベル、タペストリー、販促POP、名刺、商品タグ、マップ、屋外ポスター</p>
                </div>
            </div>
    </div>
</section>

<?php $onestopBtn = 'template/onestop-parts/onestopBtn' ?>
<?php get_template_part($onestopBtn); ?>

<?php $contactTitle = 'template/contact-parts/contactTitle' ?>
<?php get_template_part($contactTitle); ?>


<?php get_footer('third'); ?>