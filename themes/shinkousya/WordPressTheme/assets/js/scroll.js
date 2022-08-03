// ローディング判定
jQuery(function ($) {
    jQuery(window).on("load", function () {
        jQuery("body").attr("data-loading", "true");
    });

    jQuery(function () {

        // 製品一覧スクロール時に1つずつ表示アニメーション 【投稿機能にも対応】
        $(window).scroll(function () {
            var top = $(".js-c-card-list01").offset().top; // ターゲットの位置取得
            var position = top - $(window).height(); // 発火させたい位置
            if ($(window).scrollTop() > position) {
                // 要素が見えたときの動き 
                $('.c-card-item01').each(function (i) {
                    let delay = 300; // 0.3秒ずつ
                    $(this).delay(i * delay).queue(function (next) {
                        $(this).addClass('js-fadeーanima');
                        next();
                    });
                })
            }
        })

        $(window).scroll(function () {
            var top = $(".js-c-card-list02").offset().top; // ターゲットの位置取得
            var position = top - $(window).height(); // 発火させたい位置
            if ($(window).scrollTop() > position) {
                // 要素が見えたときの動き 
                $('.c-card-item02').each(function (i) {
                    let delay = 300; // 0.3秒ずつ
                    $(this).delay(i * delay).queue(function (next) {
                        $(this).addClass('js-fadeーanima');
                        next();
                    });
                })
            }
        })

        $(window).scroll(function () {
            var top = $(".js-c-card-list03").offset().top; // ターゲットの位置取得
            var position = top - $(window).height(); // 発火させたい位置
            if ($(window).scrollTop() > position) {
                // 要素が見えたときの動き 
                $('.c-card-item03').each(function (i) {
                    let delay = 400; // 0.4秒ずつ
                    $(this).delay(i * delay).queue(function (next) {
                        $(this).addClass('js-fadeーanima');
                        next();
                    });
                })
            }
        })
    });
});