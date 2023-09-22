<?php get_header(); ?>

<div class="c-underTitle__box">
    <p class="c-underTitle__subText">環境・SDGsに対応した</p>
    <h1 class="c-underTitle__title">特殊印刷・加工の脱プラ製品</h1>
    <h2 class="c-underTitle__heading c-underTitle__heading--leyout">クリアファイルに代わる紙製ファイル</h2>
</div>

<div class="p-paper-file__inner l-inner-fixed">
    <div class="c-block c-block--leyout">
        <div class="c-blockText">
            <p class="c-blockText__text">
                PP製のクリアファイルに代わる紙製ファイル。書類まとめたり、資料を配布するときなどに便利なクリアファイルですが、プラスチック素材のため、環境に負荷をかけている側面もあります。そこで素材を紙に換えた紙製ファイルなら、環境への負荷を軽減することが可能です。また使用する紙も選べるので、環境を配慮した紙で作成することでより環境に配慮することが可能です。紙製ファイルなら機密情報や個人情報を入れても、そのままシュレッダーにかけることが可能です。
            </p>
        </div>

        <div class="c-block-contents">
            <div class="c-block-content">
                <div class="c-blockPicture">
                    <div class="c-blockPicture__picture">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper-file-picture01.jpg" alt="紙製ファイルを写している画像">
                    </div>
                    <p class="c-blockPicture__text">
                        紙製なのでクリアファイルとように透けず、通常の印刷と同じ発色が可能なファイルです。
                    </p>
                </div>
            </div>

            <div class="c-block-content">
                <div class="c-blockPicture">
                    <div class="c-blockPicture__picture">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper-file-picture02.jpg" alt="環境のロゴマーク入れている紙製ファイルを写している画像">
                    </div>
                    <p class="c-blockPicture__text">
                        紙製ファイルなら環境のロゴマーク入れることが可能なのでアピールにも最適です。
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="p-original">
    <div class="p-original__inner">
        <div class="p-original__container">
            <div class="p-original__content">
                <h2 class="p-original__title" style="margin-bottom: 15px">紙製ファイルの制作事例</h2>
                <div class="c-card__items c-card-list js-c-card-list01">
                    <div class="c-card-list__item c-card-item01">
                        <div class="c-card-item__img">
                            <a href="/ecopritown/takegami-file/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper_file_case01.png" alt="ラジオ日本竹紙ファイル画像"></a>
                        </div>
                        <div class="c-card-item__content">
                            <p class="c-card-item__text">
                             ラジオ日本「Happy Voice! from YOKOHAMA」の番組オリジナルノベルティの竹紙製の紙ファイル
                            </p>
                        </div>
                    </div>
                    <div class="c-card-list__item c-card-item01">
                        <div class="c-card-item__img">
                            <a href="/ecopritown/takegami-file/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper_file_case02.png" alt="立川市サギギカモ紙ファイル画像"></a>
                        </div>
                        <div class="c-card-item__content">
                            <p class="c-card-item__text">
                             立川市・立川警察署のSTOP特殊詐欺の防止の紙製ファイル。表面に疑似エンボス加工でインパクトUP!
                            </p>
                        </div>
                    </div>
                </div>
                <p class="p-original__subText">紙製ファイルは、クリファイルに変わる環境に配慮した製品です。上記、意外にも事例がありますので、ぜひお問い合わせください。</p>
            </div>
        </div>
    </div>
</section>
<?php $onestopBtn = 'template/onestop-parts/onestopBtn' ?>
<?php get_template_part($onestopBtn); ?>

<?php $contactTitle = 'template/contact-parts/contactTitle' ?>
<?php get_template_part($contactTitle); ?>

<?php get_footer('third'); ?>