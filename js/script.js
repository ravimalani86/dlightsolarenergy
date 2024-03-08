!function(e){"use strict";function a(){if(e(".main-header").length){var a=e(window).scrollTop(),n=e(".main-header"),t=e(".scroll-to-top");a>=e(".main-header").height()?(n.addClass("fixed-header"),t.fadeIn(300)):(n.removeClass("fixed-header"),t.fadeOut(300))}}if(e(".main-menu__menu-box .main-menu__navigation").length&&function(a){let n=window.location.href.split("/").reverse()[0];a.find("li").each((function(){let a=e(this).find("a");e(a).attr("href")==n&&e(this).addClass("current")})),a.children("li").each((function(){e(this).find(".current").length&&e(this).addClass("current")})),""==n&&a.find("li").eq(0).addClass("current")}(e(".main-menu__menu-box .main-menu__navigation")),a(),e(".main-header li.dropdown ul").length&&(e(".main-header li.dropdown").append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>'),e(".main-header li.dropdown .dropdown-btn").on("click",(function(){e(this).prev("ul").slideToggle(500)})),e(".fullscreen-menu .navigation li.dropdown > a").on("click",(function(){e(this).next("ul").slideToggle(500)})),e(".navigation li.dropdown > a").on("click",(function(e){e.preventDefault()})),e(".main-header .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a").on("click",(function(e){e.preventDefault()})),e(".main-header__cart-box .dropdown-menu").click((function(e){e.stopPropagation()}))),e(".mobile-menu").length){var n=e(".main-header .nav-outer .main-menu__navigation").html();e(".mobile-menu .mobile-menu__box .mobile-menu__outer").append(n),e(".sticky-header .main-menu__navigation").append(n),e(".mobile-menu li.dropdown .dropdown-btn").on("click",(function(){e(this).toggleClass("open"),e(this).prev("ul").slideToggle(500)})),e(".mobile-nav-toggler").on("click",(function(){e("body").addClass("mobile-menu-visible")})),e(".mobile-menu .menu-backdrop,.mobile-menu .close-btn").on("click",(function(){e("body").removeClass("mobile-menu-visible")}))}if(e(".progress-line").length&&e(".progress-line").appear((function(){var a=e(this),n=a.data("width");e(a).css("width",n+"%")}),{accY:0}),e(".header-search__box").length&&(e(".header-search__box").on("click",(function(){e("body").addClass("search-active")})),e(".close-search").on("click",(function(){e("body").removeClass("search-active")})),e(".search-popup .color-layer").on("click",(function(){e("body").removeClass("search-active")}))),e(".faq-one__accordion").length&&e(".faq-one__accordion").on("click",".faq-one__acc-btn",(function(){var a=e(this).parents(".faq-one__accordion"),n=e(this).parents(".faq-accordion__toggle");if(!0!==e(this).hasClass("active")&&e(a).find(".faq-accordion__toggle .faq-one__acc-btn").removeClass("active"),e(this).next(".faq-one-acc__content").is(":visible"))return!1;e(this).addClass("active"),e(a).children(".faq-accordion__toggle").removeClass("active-block"),e(a).find(".faq-accordion__toggle").children(".faq-one-acc__content").slideUp(300),n.addClass("active-block"),e(this).next(".faq-one-acc__content").slideDown(300)})),e(".service-detail__faq-accordion").length&&e(".service-detail__faq-accordion").on("click",".service-detail__acc-btn",(function(){var a=e(this).parents(".service-detail__faq-accordion"),n=e(this).parents(".service-detail__faq-toggle");if(!0!==e(this).hasClass("active")&&e(a).find(".service-detail__faq-toggle .service-detail__acc-btn").removeClass("active"),e(this).next(".service-detail__faq-content").is(":visible"))return!1;e(this).addClass("active"),e(a).children(".service-detail__faq-toggle").removeClass("active-block"),e(a).find(".service-detail__faq-toggle").children(".service-detail__faq-content").slideUp(300),n.addClass("active-block"),e(this).next(".service-detail__faq-content").slideDown(300)})),e(".count-box").length&&e(".count-box").appear((function(){var a=e(this),n=a.find(".count-text").attr("data-stop"),t=parseInt(a.find(".count-text").attr("data-speed"),10);a.hasClass("counted")||(a.addClass("counted"),e({countNum:a.find(".count-text").text()}).animate({countNum:n},{duration:t,easing:"linear",step:function(){a.find(".count-text").text(Math.floor(this.countNum))},complete:function(){a.find(".count-text").text(this.countNum)}}))}),{accY:0}),e(".paroller").length&&e(".paroller").paroller({factor:.2,factorLg:.4,type:"foreground",direction:"horizontal"}),e(".filter-list").length&&e(".filter-list").mixItUp({}),e(".parallax-scene-1").length){var t=e(".parallax-scene-1").get(0);new Parallax(t)}if(e(".parallax-scene-2").length)t=e(".parallax-scene-2").get(0),new Parallax(t);if(e(".parallax-scene-3").length)t=e(".parallax-scene-3").get(0),new Parallax(t);if(e(".parallax-scene-4").length)t=e(".parallax-scene-4").get(0),new Parallax(t);if(e(".parallax-scene-5").length)t=e(".parallax-scene-5").get(0),new Parallax(t);if(e(".parallax-scene-6").length)t=e(".parallax-scene-6").get(0),new Parallax(t);(e(".video-popup").length&&e(".video-popup").magnificPopup({type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:!0,fixedContentPos:!1}),e(".lightbox-image").length&&e(".lightbox-image").fancybox({openEffect:"fade",closeEffect:"fade",helpers:{media:{}}}),e(".custom-select-box").length&&e(".custom-select-box").selectmenu().selectmenu("menuWidget").addClass("overflow"),e("#contact-form").length&&e("#contact-form").validate({rules:{name:{required:!0},phone:{required:!0},subject:{required:!0},email:{required:!0,email:!0},message:{required:!0}}}),e(".scroll-to-target").length&&e(".scroll-to-target").on("click",(function(){var a=e(this).attr("data-target");e("html, body").animate({scrollTop:e(a).offset().top},1500)})),e(".wow").length)&&new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:!0,live:!0}).init();e(window).on("scroll",(function(){a()})),e(window).on("load",(function(){e(".preloader").length&&e(".preloader").delay(200).fadeOut(500),e(".thm-owl__carousel").length&&e(".thm-owl__carousel").each((function(){let a=e(this),n=a.data("owl-options");a.owlCarousel(n)})),e(".thm-owl__carousel--custom-nav").length&&e(".thm-owl__carousel--custom-nav").each((function(){let a=e(this),n=a.data("owl-nav-prev"),t=a.data("owl-nav-next");e(n).on("click",(function(e){a.trigger("prev.owl.carousel"),e.preventDefault()})),e(t).on("click",(function(e){a.trigger("next.owl.carousel"),e.preventDefault()}))})),e(".thm-swiper__slider").length&&e(".thm-swiper__slider").each((function(){let a=e(this),n=a.data("swiper-options");new Swiper(a,n)}))}))}(window.jQuery);