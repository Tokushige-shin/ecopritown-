<?php
$home = esc_url(home_url('/'));
?>

<footer class="l-footer">
    <div class="l-footer__inner l-footer__inner--second l-inner">
        <div class="c-btn__Box">
            <a href="<?php echo $home; ?>" class="c-btn__btn c-anima-1">TOPへ</a>
        </div>
        <?php $footerParts = 'template/footer-parts/footerParts' ?>
        <?php get_template_part($footerParts); ?>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="https://unpkg.com/scrollreveal"></script>
</body>

</html>