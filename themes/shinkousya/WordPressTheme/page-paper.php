<?php get_header(); ?>

<section class="p-paper">
    <div class="c-underTitle__box">
        <p class="c-underTitle__subText">
            箱からプラスチックごみを軽減
        </p>
        <h1 class="c-underTitle__title">紙パッケージ<span class="c-underTitle__title--green">で</span>脱プラへ</h1>
        <div class="p-paper__titlePicture">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper-picture.png" alt="プラスチック類のイラスト画像">
        </div>
        <h2 class="c-underTitle__heading p-paper__titleHeading--leyout">紙製パッケージ</h2>
    </div>
    <div class="p-paper__inner l-inner-fixed">
        <div class="c-block c-block--leyout">
            <div class="c-blockText">
                <p class="c-blockText__text">
                商品パッケージの多くは、購入後ごみとして廃棄されてしまいます。しかし、商品を販売するうえで欠かせないのも事実です。そのパッケージでプラスチックの部分を少しでも紙に置き換えることで、プラスチックごみを減らし、環境への負荷を軽減できます。紙製パッケージは、印刷しやすい、再利用しやすいなどメリットもあり、形状や紙の種類など工夫することで紙としてのデメリットを補うことも可能です。
                </p>
            </div>

            <div class="c-block-contents">
                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper-picture01.jpg" alt="ユニバーサルフックにも対応した紙製パッケージを写してる画像">
                        </div>
                        <p class="c-blockPicture__text">
                            ユニバーサルフックにも対応した紙製パッケージ
                        </p>
                    </div>
                </div>

                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper-picture02.jpg" alt="中身が見える箱型ケースを写してる画像">
                        </div>
                        <p class="c-blockPicture__text">
                            中身が見える箱型ケース
                        </p>
                    </div>
                </div>

                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper-picture03.jpg" alt="強度のしっかりとした紙箱を写している画像">
                        </div>
                        <p class="c-blockPicture__text">
                            強度のしっかりとした紙箱
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