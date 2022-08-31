<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- SEO系 WordPressのプラグインで設定しております。（プラグイン名：all in one seo）-->
  <!-- <meta name="description" content="東京都北区にある特殊印刷・加工を得意とする新晃社がエコ印刷・製品をご紹介するエコプリンティングタウンです"> -->
  <meta name="keywords" content="株式会社新晃社、エコ印刷、特殊印刷、特殊加工、脱プラ、パッケージ、環境、印刷" />
  <!--  グーグルフォント読み込み  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Noto+Sans+JP&display=swap" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Q07DE44GB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6Q07DE44GB');
</script>
  <?php wp_head(); ?>
</head>

<?php
$home = esc_url(home_url('/'));
$original = esc_url(home_url('/original/'));
$contact = esc_url(home_url('/contact/'));
$onestop = esc_url(home_url('/onestop/'));
$paper = esc_url(home_url('/paper/'));
$takegami = esc_url(home_url('/takegami-file/'));
$original = esc_url(home_url('/original/'));
?>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="l-header__inner">
      <a href="<?php echo $home ?>" class="l-header__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="株式会社新晃社ロゴマーク">
      </a>
      <!-- ハンバーガーメニュー -->
      <div class="js-p-hamburger__button p-hamburger__button">
        <span class="p-gMenuBtn_bar p-gMenuBtn_bar-no1"></span>
        <span class="p-gMenuBtn_bar p-gMenuBtn_bar-no2"></span>
        <span class="p-gMenuBtn_bar p-gMenuBtn_bar-no3"></span>
      </div>
      <div class="js-p-hamburger__content p-hamburger__content">
        <nav>
          <ul id="menu" class="p-hamburger__items">
            <li class="p-hamburger__item-title">Category</li>
            <li class="p-hamburger__item"><a href="<?php echo $takegami; ?>">資源を有効活用する竹紙</a></li>
            <li class="p-hamburger__item"><a href="<?php echo $original; ?>">エコ対応のオリジナル製品</a></li>
            <li class="p-hamburger__item"><a href="<?php echo $paper; ?>">紙パッケージで脱プラへ</a></li>
            <li class="p-hamburger__item"><a href="<?php echo $home; ?>#sdgs">SDGsへのチャレンジ</a></li>
            <li class="p-hamburger__item"><a href="<?php echo $onestop; ?>">ワンストップですべてを</a></li>
            <li class="p-hamburger__item"><a href="<?php echo $contact; ?>">お問い合わせ</a></li>
            <li class="p-hamburger__item"><a href="<?php echo home_url(); ?>/topics">トピックス</a></li>
          </ul>
        </nav>
      </div><!-- /ハンバーガーメニュー -->
    </div>
    <div class="js-p-hamburger__bg p-hamburger__bg"></div>
  </header>