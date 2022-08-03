<div class="c-ctnForm__list">
    <div class="c-ctnForm__listIcon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/airplane.png" alt="飛行機のアイコン">
    </div>
    <h3 class="c-ctnForm__listTitle">簡単お問い合わせフォーム</h3>
</div>

<?php remove_filter('the_content', 'wpautop'); ?>
<?php echo do_shortcode('[mwform_formkey key="15"]'); ?>

<div class="c-ctnForm__tellBox">
    <div class="c-ctnForm__list">
        <div class="c-ctnForm__listIcon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tell.png" alt="黒電話アイコン">
        </div>
        <h3 class="c-ctnForm__listTitle">電話でのお問い合わせはこちら</h3>
    </div>
    <div class="c-ctnForm__tellWrap">
        <p class="c-ctnForm__tell">TEL:03-3800-2881</p>
        <p class="c-ctnForm__reception">お電話での受付時間は<br class="u-hidden-pc">月〜金：9:00～18:00（祝日除く）</p>
    </div>
</div>
