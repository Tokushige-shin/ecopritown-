<?php get_header(); ?>

<section class="pocket">
    <div class="c-underTitle__box">
        <p class="c-underTitle__subText">環境・SDGsに対応した</p>
        <h1 class="c-underTitle__title">特殊印刷・加工製品</h1>
        <h2 class="c-underTitle__heading c-underTitle__heading--leyout">資料配布に最適！紙製ポケットフォルダ</h2>
    </div>

    <div class="p-pocket__inner l-inner-fixed">
        <div class="c-block c-block--leyout">
            <div class="c-blockText">
                <p class="c-blockText__text">
                    会社案内や事業紹介などを収めるポケットフォルダは企業の顔としての役割を果たします。箔押しやエンボスなどの特殊加工をあしらうなど独自性の高いデザインによって、企業やブランドを効果的に印象づけることができます。長年ポケットフォルダの制作に携わってきた新晃社では豊富な50種類の型をご用意しています。
                </p>
            </div>

            <div class="c-block-contents">
                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pocket-picture01.jpg" alt="家の形を再現したポケットフォルダを写している画像">
                        </div>
                        <p class="c-blockPicture__text">
                            家の形を再現したポケットフォルダ
                        </p>
                    </div>
                </div>

                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pocket-picture02.jpg" alt="表面に疑似エンボスを施したポケットフォルダを写している画像">
                        </div>
                        <p class="c-blockPicture__text">
                            表面に疑似エンボスを施したポケットフォルダ
                        </p>
                    </div>
                </div>

                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pocket-picture03.jpg" alt="果物の輪郭を綺麗に再現した型抜きの3つ折りポケットフォルダを写している画像">
                        </div>
                        <p class="c-blockPicture__text">
                            果物の輪郭を綺麗に再現した型抜きの3つ折りポケットフォルダ
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