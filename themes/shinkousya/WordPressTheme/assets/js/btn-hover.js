jQuery(function ($) {
    jQuery(window).on("load", function () {
        jQuery("body").attr("data-loading", "true");
    });

    jQuery(function () {

        const windowWidth = $(window).width();
        const windowSm = 750;
        if (windowWidth <= windowSm) {} else {
            const target = document.getElementById("tooltipButton");
            const popup = document.getElementById("toolTip");

            // ボタンにhoverした時
            target.addEventListener('mouseover', () => {
                popup.style.display = 'block';
            }, false);

            // ボタンから離れた時
            target.addEventListener('mouseleave', () => {
                popup.style.display = 'none';
            }, false);
        }
    });
});