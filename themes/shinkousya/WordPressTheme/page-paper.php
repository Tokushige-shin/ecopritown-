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
                商品パッケージの多くは、購入後ごみとして廃棄されてしまいます。しかし、商品を販売するうえで欠かせないのも事実です。そのパッケージでプラスチックの部分を少しでも紙に置き換えることで、プラスチックごみを減らし、環境への負荷を軽減し、SDGs活動にも貢献できます。紙製パッケージは、印刷しやすい、再利用しやすいなどメリットもあり、形状や紙の種類など工夫することで紙としてのデメリットを補うことも可能です。また紙製パッケージは、特殊印刷・特殊加工をすることで、オリジナリティあふれるパッケージデザインを作ることも可能です。
                </p>
            </div>
            <div class="c-block-contents">
                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper-picture01.jpg" alt="ユニバーサルフックにも対応した紙製パッケージを写してる画像">
                        </div>
                        <p class="c-blockPicture__text">
                            ユニバーサルフックにも対応した紙製パッケージ：フックに引っ掛ける形式での商品陳列で誰もが目にしたことがあるのが、鉛筆やボールペンなどの文房具でしょう。豊富な種類の文具類を引っ掛けて陳列することで、店舗ディスプレイとしても目を引くことができ、お客様も自分にあった商品を選びやすくなります。（フックは切り取り可能で、プレゼント包装も対応）
                        </p>
                    </div>
                </div>
                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper-picture02.jpg" alt="中身が見える箱型ケースを写してる画像">
                        </div>
                        <p class="c-blockPicture__text">
                            商品が見える箱型パッケージ：菓子類やコーヒー・紅茶、タオル類などのパッケージとしてよく使われています。中身が見えるため、商品のアピールと目につくデザインを両立できるのが、この箱の強みと言えます。そのままディスプレイすることで、店舗を華やかにもしてくれます。
                        </p>
                    </div>
                </div>
                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper-picture03.jpg" alt="強度のしっかりとした紙箱を写している画像">
                        </div>
                        <p class="c-blockPicture__text">
                            強度のしっかりとした紙箱：頑丈で壊れにくく、高級感を演出できる点から、アクセサリーや腕時計といった高級品、ギフト用のお菓子類、贈答品などで活用できます。質の高い商品を包装するのにうってつけの質感を出せるのが、強度のしっかりした紙製パッケージの強みです。
                        </p>
                    </div>
                </div>
            </div>
        </div>
             <div class="p-original__content" style="margin-bottom:40px">
                <h2 class="p-original__title">採用実績</h2>
                <p class="p-original__subText">筆記具の紙パッケージ、缶詰の外箱、食品の箱パッケージ、DVDボックスの箱、化粧品パッケージ、パッケージ台紙等、その他実績多数</p>
                </div>
            </div>
    </div>
</section>

<?php $onestopBtn = 'template/onestop-parts/onestopBtn' ?>
<?php get_template_part($onestopBtn); ?>

<?php $contactTitle = 'template/contact-parts/contactTitle' ?>
<?php get_template_part($contactTitle); ?>


<?php get_footer('third'); ?>