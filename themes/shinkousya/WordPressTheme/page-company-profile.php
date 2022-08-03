<?php get_header(); ?>

<section class="p-company-profile">
    <div class="c-underTitle__box">
        <p class="c-underTitle__subText">環境に対応した</p>
        <h1 class="c-underTitle__title">特殊印刷・製品</h1>
        <h2 class="c-underTitle__heading c-underTitle__heading--leyout">会社案内</h2>
    </div>
    <div class="p-company-profile__inner l-inner-fixed">
        <div class="c-block c-block--leyout">
            <div class="c-blockText">
                <p class="c-blockText__text">
                    会社案内は、自社を紹介する重要な販促ツールです。近年社会では、企業にSDGsをはじめとする環境に対する取り組みが求められております。会社案内は、その取り組みをアピールする重要なツールとなります。環境への取り組みを記載するだけでなく、会社案内を環境配慮の印刷をすることで活動への説得力がアップいたします。
                </p>
            </div>

            <div class="c-block-contents">
                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-profile-picture01.jpg" alt="会社案内に環境ロゴマーク入れているファイルを写している画像">
                        </div>
                        <p class="c-blockPicture__text">
                            会社案内に環境ロゴマークを入れるだけでアピールになります。
                        </p>
                    </div>
                </div>

                <div class="c-block-content">
                    <div class="c-blockPicture">
                        <div class="c-blockPicture__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-profile-picture02.jpg" alt="会社案内のファイルに社会貢献ページをを写している画像">
                        </div>
                        <p class="c-blockPicture__text">
                            社会貢献ページを入れることで会社の取り組みをPRできます。
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