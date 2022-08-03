<?php get_header(); ?>


<div class="c-underTitle__box">
    <p class="c-underTitle__subText">環境に対応した</p>
    <h1 class="c-underTitle__title">特殊印刷・製品</h1>
    <h2 class="c-underTitle__heading c-underTitle__heading--leyout">紙製ファイル</h2>
</div>

<div class="p-paper-file__inner l-inner-fixed">
    <div class="c-block c-block--leyout">
        <div class="c-blockText">
            <p class="c-blockText__text">
                PP製のクリアファイルに代わる紙製ファイル。書類まとめたり、資料を配布するときなどに便利なクリアファイルですが、プラスチック素材のため、環境に負荷をかけている側面もあります。そこで素材を紙に換えた紙製ファイルなら、環境への負荷を軽減することが可能です。また使用する紙も選べるので、環境を配慮した紙で作成することでより環境に配慮することが可能です。
            </p>
        </div>

        <div class="c-block-contents">
            <div class="c-block-content">
                <div class="c-blockPicture">
                    <div class="c-blockPicture__picture">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper-file-picture01.jpg" alt="紙製ファイルを写している画像">
                    </div>
                    <p class="c-blockPicture__text">
                        紙製なので通常の印刷と同じ表現が可能なファイル
                    </p>
                </div>
            </div>

            <div class="c-block-content">
                <div class="c-blockPicture">
                    <div class="c-blockPicture__picture">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper-file-picture02.jpg" alt="環境のロゴマーク入れている紙製ファイルを写している画像">
                    </div>
                    <p class="c-blockPicture__text">
                        環境のロゴマーク入れることが可能なのでアピールにも最適です。
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $onestopBtn = 'template/onestop-parts/onestopBtn' ?>
<?php get_template_part($onestopBtn); ?>

<?php $contactTitle = 'template/contact-parts/contactTitle' ?>
<?php get_template_part($contactTitle); ?>

<?php get_footer('third'); ?>