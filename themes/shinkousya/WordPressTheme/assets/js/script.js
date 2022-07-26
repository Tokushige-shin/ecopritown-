// ローディング判定
jQuery(function ($) {
	jQuery(window).on("load", function () {
		jQuery("body").attr("data-loading", "true");
	});

	jQuery(function () {
		// スクロール判定
		jQuery(window).on("scroll", function () {
			if (100 < jQuery(this).scrollTop()) {
				jQuery("body").attr("data-scroll", "true");
			} else {
				jQuery("body").attr("data-scroll", "false");
			}
		});

		/* ドロワー */
		jQuery(".js-drawer").on("click", function (e) {
			e.preventDefault();
			let targetClass = jQuery(this).attr("data-target");
			jQuery("." + targetClass).toggleClass("is-checked");
			return false;
		});

		/* スムーススクロール */
		jQuery('a[href^="#"]').click(function () {
			let header = jQuery(".js-header").height();
			let speed = 300;
			let id = jQuery(this).attr("href");
			let target = jQuery("#" == id ? "html" : id);
			let position = jQuery(target).offset().top - header;
			if ("fixed" !== jQuery("#header").css("position")) {
				position = jQuery(target).offset().top;
			}
			if (0 > position) {
				position = 0;
			}
			jQuery("html, body").animate({
					scrollTop: position
				},
				speed
			);
			return false;
		});

		/* 電話リンク */
		let ua = navigator.userAgent;
		if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
			jQuery('a[href^="tel:"]')
				.css("cursor", "default")
				.on("click", function (e) {
					e.preventDefault();
				});
		}

		// ハンバーガーメニュー
		$(function () {
			$('.js-p-hamburger__button').click(function () {
				$(this).toggleClass('active');

				if ($(this).hasClass('active')) {
					$('.js-p-hamburger__content').addClass('active');
					$('.js-p-hamburger__bg').addClass('active');
					$('html').addClass('scroll-prevent');
				} else {
					$('.js-p-hamburger__content').removeClass('active');
					$('.js-p-hamburger__bg').removeClass('active');
					$('html').removeClass('scroll-prevent');
				}
			});
		});

		// クリック時にハンバーガーメニュー閉じる

		$('#menu a[href]').on('click', function (event) {
			;
			$('.js-p-hamburger__button').trigger('click')
		});

		// ふわっと表示
		ScrollReveal().reveal('.js-fade', {
			delay: 30,
			duration: 2200, // アニメーションにかかる時間(単位：ms)
			reset: false, // リロードしなくても何回もフェードインする
			viewFactor: 0.3, // 要素が全体の ？？ % まで表示されたら実行(0〜1)
			origin: 'bottom', // 要素がどの方向からフェードインするか
			distance: '50px'
		});

		// ふわっと表示
		ScrollReveal().reveal('.js-fade01', {
			delay: 30,
			duration: 2200, // アニメーションにかかる時間(単位：ms)
			reset: false, // リロードしなくても何回もフェードインする
			viewFactor: 0.28, // 要素が全体の ？？ % まで表示されたら実行(0〜1)
			origin: 'bottom', // 要素がどの方向からフェードインするか
			distance: '50px'
		});

	});
});