<?php get_header(); ?>

<?php
$home = esc_url(home_url('/'));
$onestop = esc_url(home_url('/onestop/'));
$contact = esc_url(home_url('/contact/'));
$paper = esc_url(home_url('/paper/'));
$takegami = esc_url(home_url('/takegami-file/'));
$original = esc_url(home_url('/original/'));
?>

<section class="p-mvTop">
    <div class="p-mvTop__inner">
        <div class="p-mvTop__titleBox">
            <h2 class="p-mvTop__subTitle">世の中にサステナブルな印刷を</h2>
            <h1 class="p-mvTop__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mvTop-title.png" alt="エコプリタウン">
            </h1>
            <p class="p-mvTop__comment">
                環境に配慮した印刷、<br class="u-hidden-pc">エコプリンティングをテーマにした<br />
                エコプリタウンは新しい印刷の価値を<br class="u-hidden-pc">追求する、新晃社の特設サイト。<br />
                紙製パッケージや竹紙ファイルなどの<br class="u-hidden-pc">OEM製品を中心にご紹介します。
            </p>
            <div class="p-mvTop__balloon js-fade">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/balloon.png" alt="気球">
            </div>
        </div>

        <div class="p-mvTop__container">
            <div class="p-mvTop__block01 js-fade">
                <div class="p-mvTop__block-pictureBox">
                    <picture class="p-mvTop__block01-picture">
                        <source media="(min-width: 750px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mvTop01.png" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp-mvTop01.png" alt="第1の街" /><!-- それ以外の時に表示する画像 -->
                    </picture>
                    <a href="<?php echo $takegami; ?>" class="p-mvTop__signboard01 c-pin__signboard--animation">
                        <div class="p-mvTop__signboard-target01 c-target--center">
                            <img class="c-pin c-pin__01" src="<?php echo get_template_directory_uri(); ?>/assets/img/target01.svg" alt="ピンク色のターゲットマーク">
                        </div>
                        <div class="p-mvTop__signboard-picture01">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/signboard01.png" alt="資源を有効活用する竹紙">
                        </div>
                    </a>
                </div>
            </div>

            <a id="tooltipButton" href="<?php echo $original; ?>" class="p-mvTop__signboard02 c-pin__signboard--animation js-fade01">
                <div class="p-mvTop__signboard-target02 c-target--center">
                    <img class="c-pin c-pin__02" src="<?php echo get_template_directory_uri(); ?>/assets/img/target02.svg" alt="オレンジ色のターゲットマーク">
                </div>
                <div class="p-mvTop__signboard-picture02">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/signboard02.png" alt="エコ対応のオリジナル製品">
                </div>
                <div id="toolTip" class="p-mvTop__signboard-picture-update">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/signboard02-hover.png" alt="製品随時更新中！">
                </div>
            </a>

            <div id="sdgs" class="p-mvTop__block02 js-fade">
                <div class="p-mvTop__block-pictureBox">
                    <picture class="p-mvTop__block02-picture">
                        <source media="(min-width: 750px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mvTop02.png" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp-mvTop02.png" alt="第2の街" /><!-- それ以外の時に表示する画像 -->
                    </picture>
                    <div id="js-modalOpen" class="p-mvTop__signboard03 c-pin__signboard--animation">
                        <div class="p-mvTop__signboard-target03 c-target--center">
                            <img class="c-pin c-pin__03" src="<?php echo get_template_directory_uri(); ?>/assets/img/target03.svg" alt="黄緑色のターゲットマーク">
                        </div>
                        <div class="p-mvTop__signboard-picture03">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/signboard03.png" alt="SDGsへのチャレンジ">
                        </div>
                    </div>
                    <a href="<?php echo $paper; ?>" class="p-mvTop__signboard04 c-pin__signboard--animation">
                        <div class="p-mvTop__signboard-target04 c-target--center">
                            <img class="c-pin c-pin__04" src="<?php echo get_template_directory_uri(); ?>/assets/img/target04.svg" alt="濃いピンク色のターゲットマーク">
                        </div>
                        <div class="p-mvTop__signboard-picture04">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/signboard04.png" alt="紙パッケージで脱プラへ">
                        </div>
                    </a>
                </div>
            </div>

            <div class="p-mvTop__block03 js-fade">
                <div class="p-mvTop__block-pictureBox">
                    <picture class="p-mvTop__block03-picture">
                        <source media="(min-width: 750px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mvTop03.png" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp-mvTop03.png" alt="島" /><!-- それ以外の時に表示する画像 -->
                    </picture>
                    <a href="<?php echo $onestop; ?>" class="p-mvTop__signboard05 c-pin__signboard--animation">
                        <div class="p-mvTop__signboard-target05 c-target--center">
                            <img class="c-pin c-pin__05" src="<?php echo get_template_directory_uri(); ?>/assets/img/target05.svg" alt="水色のターゲットマーク">
                        </div>
                        <div class="p-mvTop__signboard-picture03">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/signboard05.png" alt="ワンストップですべてを">
                        </div>
                    </a>
                    <a href="<?php echo $contact; ?>" class="p-mvTop__signboard06 c-pin__signboard--animation">
                        <div class="p-mvTop__signboard-target06 c-target--center">
                            <img class="c-pin c-pin__06" src="<?php echo get_template_directory_uri(); ?>/assets/img/target06.svg" alt="オレンジ入りのターゲットマーク">
                        </div>
                        <div class="p-mvTop__signboard-picture04">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/signboard06.png" alt="お問い合わせ">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- モーダル表示 -->

<div id="js-easyModal" class="modal">
    <div class="c-modal__content">
        <div class="p-sdgs__inner">
            <div class="p-sdgs__scrollBox">
                <p class="p-sdgs__batsu js-modalClose">×</p>
                <p class="p-sdgs__scrollText">SCROLL ▼</p>
            </div>
            <div class="p-sdgs__container">
                <h1 class="p-sdgs__title">SDGsへのチャレンジ</h1>
                <p class="p-sdgs__subText">
                    新晃社では、環境の配慮だけでなく、持続可能な社会を実現するためSDGs（持続可能な開発目標）の取り組みも行っております。
                </p>
                <div class="p-sdgs__wrap">
                    <div class="p-sdgs__block">
                        <h2 class="p-sdgs__blockTitle">SDGsとは？</h2>
                        <div class="p-sdgs__blockLogo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd-logo.png" alt="SDGsロゴマーク">
                        </div>
                        <p class="p-sdgs__logoText">
                            持続可能な開発目標（SDGs：Sustainable Development Goals）とは、2015年9月の国連サミットで加盟国の全会一致で採択された「持続可能な開発のための2030アジェンダ」に記載された、2030年までに持続可能でよりよい世界を目指す国際目標です。17のゴール・169のターゲットから構成され、地球上の「誰一人取り残さない（leave no one behind）」ことを誓っています。SDGsは発展途上国のみならず、先進国自身が取り組むユニバーサル（普遍的）なものであり、日本としても積極的に取り組んでいます。
                        </p>
                    </div>

                    <div class="p-sdgs__block">
                        <h2 class="p-sdgs__blockTitle">環境に配慮した用紙の提案</h2>
                        <div class="p-sdgs__blockPicture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd01.jpg" alt="森林を写している様子">
                        </div>
                        <p class="p-sdgs__text">
                            新晃社では、2008年よりFSC®（Forest Stewardship Council®、森林管理協議会）認証を取得しており、FSC®認証用紙を取り扱えます。経済的に持続可能な森林や、環境・社会的なリスクの低い原材料等から作られた製品を消費者に届け、責任ある森林管理を支援することができます。 他にも、間伐材に寄与する紙（森の町内会）、バナナペーパー、竹紙などの環境に配慮した紙も取り扱っており、お客様に最適な紙をご提案しております。
                        </p>
                        <ul class="p-sdgs__iconBox">
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd-icon01.jpg" alt="つくる責任・つかう責任マーク">
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd-icon02.jpg" alt="陸の豊かさを守ろうマーク">
                            </li>
                        </ul>
                    </div>

                    <div class="p-sdgs__block">
                        <h2 class="p-sdgs__blockTitle">CTPの現像レス</h2>
                        <div class="p-sdgs__blockPicture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd02.jpg" alt="CTPの現像レス">
                        </div>
                        <p class="p-sdgs__text">
                            新晃社では、印刷工程の刷版で現像レスのCTPを採用しています。現像にかかわる薬品や水、電気代、現像液、ガム液などの廃液が年間で600ｔも不要となり、水質保全、CO2削減などに貢献しています。また富士フイルムのグリーン・グラフィック・プロジェクトに参加し、カーボンオフセット制度によるCO2排出量削減に取り組んでおり、開発発展途上国支援にも貢献しています。
                        </p>
                        <ul class="p-sdgs__iconBox">
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd-icon03.jpg" alt="安全な水とトイレを世界中にマーク">
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd-icon01.jpg" alt="つくる責任・つかう責任マーク">
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd-icon04.jpg" alt="気候変動に具体的な対策をマーク">
                            </li>
                        </ul>
                    </div>

                    <div class="p-sdgs__block">
                        <h2 class="p-sdgs__blockTitle">水と損紙の削減</h2>
                        <div class="p-sdgs__blockPicture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd03.jpg" alt="水と損紙の削減">
                        </div>
                        <p class="p-sdgs__text">
                            湿し水のろ過装置を導入し、水の交換頻度を年12回から2回に削減しています。さらにジャパンカラーをベースにカラーマネジメントを確立し、印刷１台にかかる調整の紙が少なくなったことで、導入前より損紙を20％削減しています。またお客様のご要望の合わせて、ベジタブルインキ（植物油を使用したインキ）、ボタニカルインキ（植物由来成分を積極的に使用したインキ）などの使用にも対応し、地球環境の保全に貢献しています。
                        </p>
                        <ul class="p-sdgs__iconBox">
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd-icon01.jpg" alt="つくる責任・つかう責任マーク">
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd-icon05.jpg" alt="海の豊かさを守ろうマーク">
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd-icon02.jpg" alt="陸の豊かさを守ろうマーク">
                            </li>
                        </ul>
                    </div>

                    <div class="p-sdgs__block">
                        <h2 class="p-sdgs__blockTitle">作業者の健康にも配慮</h2>
                        <div class="p-sdgs__blockPicture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd04.jpg" alt="作業者の健康にも配慮">
                        </div>
                        <p class="p-sdgs__text">
                            印刷現場では、VOC（揮発性有機化合物）が１％未満のVOCフリーインキとIPA（イソプロピルアルコール）を含まない湿し水を使用しすることで、現場の作業者の健康にも配慮しています。
                        </p>
                        <ul class="p-sdgs__iconBox">
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd-icon06.jpg" alt="全ての人に健康と福祉をマーク">
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd-icon01.jpg" alt="つくる責任・つかう責任マーク">
                            </li>
                        </ul>
                    </div>

                    <div class="p-sdgs__block">
                        <h2 class="p-sdgs__blockTitle">川口工場の取り組み</h2>
                        <div class="p-sdgs__blockPicture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd05.jpg" alt="川口工場の取り組み">
                        </div>
                        <p class="p-sdgs__text">
                            新晃社の川口工場では、場内の照明にLED照明を採用しており、従来の蛍光灯に比べ消費電力を抑え、CO2削減に取り組んでいます。さらに内製化を進めて車による移動を最小限にし、排ガスの排出を抑えています。また作業工程で発生する全ての損紙は、効率的にリサイクルできるように種類ごとに分別し、適切なリサイクル体制を確立しています。
                        </p>
                        <ul class="p-sdgs__iconBox">
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd-icon06.jpg" alt="全ての人に健康と福祉をマーク">
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd-icon01.jpg" alt="つくる責任・つかう責任マーク">
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sd-icon02.jpg" alt="陸の豊かさを守ろうマーク">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- モーダル表示した時のbackground reset.scssに記載 -->
<div id="overlay"></div>


<!-- モーダル表示終了 -->

<section class="p-topicsTop js-fade">
    <div class="p-topicsTop__inner">
        <h2 class="p-topicsTop__title c-topics__title">
            Topics
        </h2>
        <div class="p-topicsTop__continer">
            <?php
            $topics_cat = 'topics_category';
            $args =
                array(
                    'post_type' => 'topics',
                    'posts_per_page' => 5,
                );
            $my_query = new WP_Query($args); ?>

            <?php if ($my_query->have_posts()) : ?>
                <?php while ($my_query->have_posts()) : ?>
                    <?php $my_query->the_post(); ?>
                    <div class="p-topicsTop__wrap">
                        <a href="<?php the_permalink(); ?>">
                            <div class="p-topicsTop__content">
                                <p class="p-topicsTop__day"><?php the_time('Y.m.d'); ?></p>
                                <p class="p-topicsTop__tag">
                                    <?php
                                    if ($terms = get_the_terms($post->ID, $topics_cat)) {
                                        foreach ($terms as $term) {
                                            $cat_name = esc_html($term->name); //カテゴリー名取得
                                        }
                                    }
                                    ?>
                                    <?php echo $cat_name; ?>
                                </p>
                            </div>
                            <p class="p-topicsTop__contentsTitle"><?php the_title(); ?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Topicsはありません。</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <div class="p-topicsTop__btn">
                <a href="<?php echo home_url(); ?>/topics" class="p-topicsTop__archive c-opacity">MORE
                    <img class="p-topicsTop__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png" alt="矢印">
                </a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>