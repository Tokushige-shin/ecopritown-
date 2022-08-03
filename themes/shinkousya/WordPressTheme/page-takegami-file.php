<?php get_header(); ?>

<section class="takegami">
    <div class="c-underTitle__box">
        <p class="c-underTitle__subText">
            日本の竹を100％使用
        </p>
        <h1 class="c-underTitle__title">資源<span class="c-underTitle__title--green">を</span>有効活用<span class="c-underTitle__title--green">する</span>竹紙</h1>
        <div class="p-takegami__titlePicture">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/takegami-picture.png" alt="竹上のイラスト画像">
        </div>
        <p class="p-takegamiTitle__subText">
            古来から日本の暮らしに欠かせない資源だった竹。<br />
            しかしプラスチックなどの<br class="u-hidden-pc">普及により利用が激減したため、<br />
            多くの竹林が放置され「竹害」として<br class="u-hidden-pc">問題になっています。<br />
            この日本の竹を100％使用したのが「竹紙」。<br />
            針葉樹パルプと広葉樹パルプの中間的な<br class="u-hidden-pc">性質をもつ竹パルプは、<br />
            印刷用紙から産業用紙まで幅広く活用できます。<br />
            紙色は、竹の風合いを感じる<br class="u-hidden-pc">「竹紙100ナチュラル」と<br />
            柔らかな質感の「竹紙100ホワイト」<br class="u-hidden-pc">の2色があります。
        </p>
    </div>
    <div class="p-takegami__inner">
        <div class="p-takegami__wrap">
            <h2 class="p-takegami__title">脱プラの新提案「竹紙ファイル」</h2>
            <p class="p-takegami__sub-text">
                プラスチックごみによる海洋汚染などの問題を<br class="u-hidden-pc">軽減するべく、<br class="u-hidden-sp">
                クリアファイルの代替品として<br class="u-hidden-pc">紙製ファイルを開発しました。<br class="u-hidden-sp">
                中身が透けないので<br class="u-hidden-pc">一部が見えるように形を工夫し、<br class="u-hidden-sp">
                ナンバリングで<br class="u-hidden-pc">整理がしやすいデザインになっています。
            </p>
            <div class="p-takegami__pictureBox">
                <div class="p-takegami__picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/takegami-picture01.jpg" alt="竹上のファイルを写している様子1枚目">
                </div>

                <div class="p-takegami__picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/takegami-picture02.jpg" alt="竹上のファイルを写している様子2枚目">
                </div>

                <div class="p-takegami__picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/takegami-picture03.jpg" alt="竹上のファイルを写している様子3枚目">
                </div>

                <div class="p-takegami__picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/takegami-picture04.jpg" alt="竹上のファイルを写している様子4枚目">
                </div>
            </div>
        </div>

        <div class="p-takegami-processing">
            <h3 class="p-takegami-processing-title">印刷・加工内容</h3>
            <ul class="c-tagBlock-items">
                <li class="c-tagBlock-item">
                    <div class="c-tagBlock-textBox p-takegami-processing__textBox">
                        <p class="c-tagBlock-tag p-takegami-processing__tag--leyout">用紙</p>
                        <p class="c-tagBlock-text">竹紙100ホワイト 菊判62.5kg</p>
                    </div>
                </li>

                <li class="c-tagBlock-item">
                    <div class="c-tagBlock-textBox p-takegami-processing__textBox">
                        <p class="c-tagBlock-tag p-takegami-processing__tag--leyout">特殊加工・特殊印刷</p>
                        <p class="c-tagBlock-text"><span><a class="c-opacity" href="https://www.shinkohsha.co.jp/processing/extrusion/" target="_blank">型抜き加工</a></span>　製袋</p>
                    </div>
                </li>
            </ul>
        </div>

        <div class="p-takegami__development">
            <h3 class="p-takegami__development-title">開発背景</h3>
            <p class="p-takegami__development-text">
                森林や里山の環境や生物体要請を脅かす、<br class="u-hidden-pc">日本各地で放置されている「竹林」の問題。<br />
                海洋汚染をはじめとしたプラスチックごみ問題。<br />
                これらの問題解決に寄与する製品として<br class="u-hidden-pc">竹紙ファイルは生まれました。<br />
                環境に対する配慮だけでなく、<br class="u-hidden-pc">地域活動にも貢献しながらも、<br />
                「社会問題に対するきっかけ作りをする」<br class="u-hidden-pc">という思いで作られています。
            </p>
        </div>
    </div>
</section>


<?php $onestopBtn = 'template/onestop-parts/onestopBtn' ?>
<?php get_template_part($onestopBtn); ?>

<?php $contactTitle = 'template/contact-parts/contactTitle' ?>
<?php get_template_part($contactTitle); ?>

<?php get_footer('third'); ?>