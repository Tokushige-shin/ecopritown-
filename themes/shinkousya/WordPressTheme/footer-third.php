<?php
$original = esc_url(home_url('/original/'));
?>

<footer class="l-footer">
    <div class="l-footer__inner l-footer__inner--second l-inner">
        <div class="c-btn__Box">
            <a href="<?php echo $original; ?>" class="c-btn__btn c-anima-1">一覧へ</a>
        </div>
        <?php $footerParts = 'template/footer-parts/footerParts' ?>
        <?php get_template_part($footerParts); ?>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll.js"></script>
</body>

</html>