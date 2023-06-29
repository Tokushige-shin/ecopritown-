<?php get_header(); ?>

<section class="p-paper">
    <div class="c-underTitle__box">
        <p class="c-underTitle__subText">
            石灰石を主原料とするプラスチックや紙の代替となる新素材
        </p>
        <h1 class="c-underTitle__title">環境に配慮した水に強い素材</h1>
        <h2 class="c-underTitle__heading p-paper__titleHeading--leyout">LIMEX Sheet（ライメックスシート）</h2>
    </div>
    <div class="p-paper__inner l-inner-fixed">
        <div class="c-block c-block--leyout">
            <div class="c-blockText">
                <p class="c-blockText__text">
                石灰石を主原料とするLIMEX Sheet（ライメックスシート）は、プラスチックや紙の代替として使用することが可能な素材です。石油由来プラスチックで成形されたシートと比較し、石油由来プラスチック使用量を削減することができます。また、紙に比べて、製造時に水をほぼ使用せず、耐久性と耐水性に優れており、屋内外での利用が可能です。<br>
                LIMEX Sheetでは、LCA算出により従来素材との環境負荷の差を数値でしますことが可能です。
                </p>
            </div>
            <div class="c-block-contents">
                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/w_limex_01.jpg" alt="LIMEX">
                        </div>
                    </div>
                </div>
            </div>
        </div>
             <div class="p-original__content" style="margin-bottom:40px">
                <h2 class="p-original__title">LIMEX Sheetの活用例</h2>
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