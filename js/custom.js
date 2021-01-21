(function ($) {

    $(window).on('load', function () {
        "use strict";

        /*=========================================================================
            Preloader
        =========================================================================*/
        $("#preloader").delay(350).fadeOut('slow');
        // Because only Chrome supports offset-path, feGaussianBlur for now
        var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);

        if (!isChrome) {
            document.getElementsByClassName('infinityChrome')[0].style.display = "none";
            document.getElementsByClassName('infinity')[0].style.display = "block";
        }

        /*=========================================================================
         Wow Initialize
         =========================================================================*/
        // Here will be the WoW Js implementation.
        setTimeout(function () {
            new WOW().init();
        }, 0);

        var dynamicDelay = [
            200,
            400,
            600,
            800,
            1000,
            1200,
            1400,
            1600,
            1800,
            2000
        ];
        var fallbackValue = "200ms";

        $(".blog-item.wow").each(function (index) {
            $(this).attr("data-wow-delay", typeof dynamicDelay[index] === 'undefined' ? fallbackValue : dynamicDelay[index] + "ms");
        });

        /*=========================================================================
         Isotope
         =========================================================================*/

        var $skill_container = $('.skill-wrapper');

        $('.skill-filter').on('click', 'li', function () {
            var filterValue = $(this).attr('data-filter');
            let skillClass = $('.skill-wrapper .grid-item');
            // $('.skill-wrapper').each(function () {
            //     if( !$(this).find(filterValue).length){
            //         $(this).html('<p>Not Found</p>')
            //     }
            // });
            $skill_container.isotope({filter: filterValue});
        });

        $('.skill-filter').each(function (i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);
            $buttonGroup.on('click', 'li', function () {
                $buttonGroup.find('.current').removeClass('current');
                $(this).addClass('current');
            });
        });

        $(document).ready(function () {
            $skill_container.isotope({filter: '.' + active_skill.slug});
        });

        $('.portfolio-filter').on('click', 'li', function () {
            var filterValue = $(this).attr('data-filter');
            $container.isotope({filter: filterValue});
        });

        // change is-checked class on buttons
        $('.portfolio-filter').each(function (i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);
            $buttonGroup.on('click', 'li', function () {
                $buttonGroup.find('.current').removeClass('current');
                $(this).addClass('current');
            });
        });

        // $(document).ready(function () {
        //     $container.isotope({filter: '.creative'});
        // });

        var $container = $('.portfolio-wrapper');
        $container.imagesLoaded(function () {
            $('.portfolio-wrapper').isotope({
                // options
                itemSelector: '[class*="col-"]',
                percentPosition: true,
                masonry: {
                    // use element for option
                    columnWidth: '[class*="col-"]'
                }
            });
        });


        var mahmudulPopup = function () {
            /*=========================================================================
                    Magnific Popup
            =========================================================================*/
            $('.work-image').magnificPopup({
                type: 'image',
                closeBtnInside: false,
                mainClass: 'my-mfp-zoom-in',
            });

            $('.work-content').magnificPopup({
                type: 'inline',
                fixedContentPos: true,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: false,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.work-video').magnificPopup({
                type: 'iframe',
                closeBtnInside: false,
                iframe: {
                    markup: '<div class="mfp-iframe-scaler">' +
                        '<div class="mfp-close"></div>' +
                        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                        '</div>',

                    patterns: {
                        youtube: {
                            index: 'youtube.com/',

                            id: 'v=',

                            src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                        },
                        vimeo: {
                            index: 'vimeo.com/',
                            id: '/',
                            src: '//player.vimeo.com/video/%id%?autoplay=1'
                        },
                        gmaps: {
                            index: '//maps.google.',
                            src: '%id%&output=embed'
                        }

                    },

                    srcAction: 'iframe_src',
                }
            });

            $('.gallery-link').on('click', function () {
                $(this).next().magnificPopup('open');
            });

            $('.gallery').each(function () {
                $(this).magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    closeBtnInside: false,
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true
                    },
                    fixedContentPos: false,
                    mainClass: 'my-mfp-zoom-in',
                });
            });
        }

        mahmudulPopup();

        /*=========================================================================
         Portfolio Load More
         =========================================================================*/

        $('.load-more .btn').on('click', function (e) {
            e.preventDefault();

            //Portfolio filter list
            var portfolio_filter_list = [];
            $('ul.portfolio-filter li').each(function () {
                let catName = $(this).text();
                portfolio_filter_list.push(catName.toLowerCase());
            });
            portfolio_filter_list.shift()


            $('.load-more .btn i').css('display', 'inline-block');
            $('.load-more .btn i').addClass('fa-spin');
            setTimeout(function () {
                //hide spin icon
                $('.load-more .btn i').hide();
            }, 500);

            var current_offset = $('.portfolio-wrapper').data('portfolios');
            var ni = $('.portfolio-wrapper').data('ni');
            var nonce = $('#loadmorep').val();
            $.post(portfolio.ajaxurl, {
                action: 'loadmorep',
                nonce: nonce,
                offset: current_offset,
            }, function (data) {
                $('.portfolio-wrapper').data('portfolios', (parseInt(current_offset) + parseInt(ni)))
                let items = $(data).find('.grid-item');

                //Portfolio Categories/ Filter list from ajax load
                let portfolio_categories = [];
                items.each(function (index) {
                    let portpolio_cat_items = items[index].getAttribute('data-categories');
                    if (!portfolio_categories.includes(portpolio_cat_items)) {
                        if (portpolio_cat_items.match(' ')) {
                            let items = portpolio_cat_items.split(' ');
                            items.map(function (item) {
                                if (!portfolio_categories.includes(item)) {
                                    portfolio_categories.push(item);
                                }
                            });
                        } else {
                            portfolio_categories.push(portpolio_cat_items);
                        }

                    }
                });

                //check ajax load categories exist in loaded categories or not
                let finarl_portfolio_filter_list = [];

                portfolio_categories.forEach(function (item) {
                    if (!portfolio_filter_list.includes(item)) {
                        finarl_portfolio_filter_list.push(item);
                    }
                });


                //appending desktop portfolio filter items to front page
                let portfolio_filter_desktop = '';
                finarl_portfolio_filter_list.forEach(function (item) {
                    //Making Capital of first word
                    let itemTitle = item.toLowerCase().replace(/\b[a-z]/g, function (letter) {
                        return letter.toUpperCase();
                    });

                    portfolio_filter_desktop += `
                    <li class="list-inline-item"
                        data-filter=".${item}">${itemTitle}</li>
                    `;
                });
                $('.portfolio-filter').append(portfolio_filter_desktop);

                //appending mobile portfolio filter items to front page
                let portfolio_filter_mobile = '';
                finarl_portfolio_filter_list.forEach(function (item) {
                    //Making Capital of first word
                    let itemTitle = item.toLowerCase().replace(/\b[a-z]/g, function (letter) {
                        return letter.toUpperCase();
                    });

                    portfolio_filter_mobile += `
                    <option value=".${item}">${itemTitle}</option>
                    `;
                });
                $('.portfolio-filter-mobile').append(portfolio_filter_mobile);


                //appending portfolio item to front page
                $container.append(items).isotope('appended', items);
                mahmudulPopup();
                if (items.length === 0) {
                    $('.load-more').remove();
                    $('.portfolio-wrapper').after('<p class="text-center mt-4">No more here 🙂 Check my <a href="https://github.com/ProMahmudul" target="_blank" title="Github">Github</a> </p>').animate(500);
                }
            });

        })

        /* ======= Mobile Filter ======= */

        // bind filter on select change
        $('.portfolio-filter-mobile').on('change', function () {
            // get filter value from option value
            var filterValue = this.value;
            // use filterFn if matches value
            filterValue = filterFns[filterValue] || filterValue;
            $container.isotope({filter: filterValue});
        });

        // bind skill filter on select change
        $('.skill-filter-mobile').on('change', function () {
            // get filter value from option value
            var filterValue = this.value;
            // use filterFn if matches value
            filterValue = filterFns[filterValue] || filterValue;
            $skill_container.isotope({filter: filterValue});
        });

        var filterFns = {
            // show if number is greater than 50
            numberGreaterThan50: function () {
                var number = $(this).find('.number').text();
                return parseInt(number, 10) > 50;
            },
            // show if name ends with -ium
            ium: function () {
                var name = $(this).find('.name').text();
                return name.match(/ium$/);
            }
        };
    });

    $(document).on('ready', function () {
        "use strict";

        /*=========================================================================
                    Slick Slider
        =========================================================================*/
        $('.testimonials-wrapper').slick({
            dots: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000
        });

    });

    $(function () {
        "use strict";

        /*=========================================================================
                Mobile Menu Toggle
        =========================================================================*/
        $('.menu-icon button').on('click', function () {
            $('header.desktop-header-1, main.content, header.mobile-header-1').toggleClass('open');
        });

        $('main.content').on('click', function () {
            $('header.desktop-header-1, main.content, header.mobile-header-1').removeClass('open');
        });

        $('.vertical-menu li a').on('click', function () {
            $('header.desktop-header-1, main.content, header.mobile-header-1').removeClass('open');
        });

        $('.menu-icon button').on('click', function () {
            $('header.desktop-header-2, main.content-2, header.mobile-header-2').toggleClass('open');
        });

        $('main.content-2').on('click', function () {
            $('header.desktop-header-2, main.content-2, header.mobile-header-2').removeClass('open');
        });

        $('.vertical-menu li a').on('click', function () {
            $('header.desktop-header-2, main.content-2, header.mobile-header-2').removeClass('open');
        });

        /*=========================================================================
         One Page Scroll with jQuery
         =========================================================================*/
        $('a[href^="#"]:not([href="#"]').on('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 800, 'easeInOutQuad');
            event.preventDefault();
        });

        /*=========================================================================
         Parallax layers
         =========================================================================*/
        if ($('.parallax').length > 0) {
            var scene = $('.parallax').get(0);
            var parallax = new Parallax(scene, {
                relativeInput: true,
            });
        }

        /*=========================================================================
        Text Rotating
        =========================================================================*/
        $(".text-rotating").Morphext({
            // The [in] animation type. Refer to Animate.css for a list of available animations.
            animation: "bounceIn",
            // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
            separator: ",",
            // The delay between the changing of each phrase in milliseconds.
            speed: 4000,
            complete: function () {
                // Called after the entrance animation is executed.
            }
        });

        /*=========================================================================
         Add (nav-link) class to main menu.
         =========================================================================*/
        $('.vertical-menu li a').addClass('nav-link');

        /*=========================================================================
         Bootstrap Scrollspy
         =========================================================================*/
        $("body").scrollspy({target: ".scrollspy"});

        /*=========================================================================
         Counterup JS for facts
         =========================================================================*/
        $('.count').counterUp({
            delay: 10,
            time: 2000
        });

        /*=========================================================================
         Progress bar animation with Waypoint JS
         =========================================================================*/
        if ($('.skill-item').length > 0) {
            var waypoint = new Waypoint({
                element: document.getElementsByClassName('skill-item'),
                handler: function (direction) {

                    $('.progress-bar').each(function () {
                        var bar_value = $(this).attr('aria-valuenow') + '%';
                        $(this).animate({width: bar_value}, {easing: 'linear'});
                    });

                    this.destroy()
                },
                offset: '50%'
            });
        }

        /*=========================================================================
         Spacer with Data Attribute
         =========================================================================*/
        var list = document.getElementsByClassName('spacer');

        for (var i = 0; i < list.length; i++) {
            var size = list[i].getAttribute('data-height');
            list[i].style.height = "" + size + "px";
        }

        /*=========================================================================
         Background Color with Data Attribute
         =========================================================================*/
        var list = document.getElementsByClassName('data-background');

        for (var i = 0; i < list.length; i++) {
            var color = list[i].getAttribute('data-color');
            list[i].style.backgroundColor = "" + color + "";
        }

        /*=========================================================================
                Main Menu
        =========================================================================*/
        $(".submenu").before('<i class="ion-md-add switch"></i>');

        $(".vertical-menu li i.switch").on('click', function () {
            var $submenu = $(this).next(".submenu");
            $submenu.slideToggle(300);
            $submenu.parent().toggleClass("openmenu");
        });

    });

})(jQuery);