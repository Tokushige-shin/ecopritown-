<?php get_header(); ?>


<section class="p-contact">
    <div class="c-underTitle__box">
        <p class="c-underTitle__subText">まずはお気軽にご相談</p>
        <h1 class="c-underTitle__title">お問い合わせ</h1>
        <h2 class="c-underTitle__heading c-underTitle__heading--fontExtra c-underTitle__heading--leyout">Contact Us</h2>
    </div>
    <div class="p-contact__inner l-underInner">
        <p class="p-contact__text">
            ご不明な点はお気軽にお問い合わせください。詳しくお打ち合わせご希望の方は営業担当が伺わせていただきます。
        </p>
    </div>
</section>
<div class="c-ctnForm c-ctnForm--sub">
    <div class="c-ctnForm__inner">
        <?php $contact = 'template/contact-parts/contact' ?>
        <?php get_template_part($contact); ?>
    </div>
</div>

<?php get_footer('second'); ?>