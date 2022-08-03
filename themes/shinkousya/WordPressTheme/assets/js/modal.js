jQuery(function ($) {
    jQuery(window).on("load", function () {
        jQuery("body").attr("data-loading", "true");
    });

    jQuery(function () {

        $(function () {
            $('#js-modalOpen').click(function () {
                $('#js-easyModal, #overlay').fadeIn();
                scrollPosition = $(window).scrollTop();
                $('body').addClass('fixed').css({
                    'top': -scrollPosition
                });
            })

            $('#overlay , .js-modalClose').click(function () {
                $('#js-easyModal, #overlay').fadeOut();
                $('body').removeClass('fixed').css({
                    'top': 0
                });
                window.scrollTo(0, scrollPosition);
            })
        });
    });
});