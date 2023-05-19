<?php get_header(); ?>


<section class="p-catalog-pamphlet">

    <div class="c-underTitle__box">
        <p class="c-underTitle__subText">環境・SDGsに対応した</p>
        <h1 class="c-underTitle__title">特殊印刷・加工製品</h1>
        <h2 class="c-underTitle__heading c-underTitle__heading--leyout">環境に配慮したカタログ/パンフレット</h2>
    </div>

    <div class="p-catalog-pamphlet__inner l-inner-fixed">
        <div class="c-block c-block--leyout">
            <div class="c-blockText">
                <p class="c-blockText__text">
                    カタログ・パンフレットは、人の目によくふれる販促ツールです。しかし、製品、サービスなどがメインのため、会社情報は多くは載せることがないものがほとんどです。その少ない情報の中に環境対応のロゴを入れることで、会社としての活動をさりげなくアピールすることができます。環境への配慮の意識が高まってきている中で、さりげないアピールで製品選定の一つの選択肢になります。
                </p>
            </div>

            <div class="c-block-content">
                <div class="c-blockPicture">
                    <div class="c-blockPicture__picture">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/catalog-pamphlet-picture01.jpg" alt="カタログを写している画像">
                    </div>
                    <p class="c-blockPicture__text">
                        環境のロゴマークを入れることで、さりげなく会社としての信頼感がアピールできます。
                    </p>
                </div>
            </div>

            <div class="c-block-content">
                <div class="c-blockPicture">
                    <div class="c-blockPicture__picture">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/catalog-pamphlet-picture02.jpg" alt="パンフレットを写している画像">
                    </div>
                    <p class="c-blockPicture__text">
                        環境のロゴマークは、どれもシンプルなものが多くデザインにもなじみます。
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