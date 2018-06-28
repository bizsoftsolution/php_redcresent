(function($) {
    "use strict";

    //when dom is ready
    $(document).ready(function() {

         // Start Fixed Top Header
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 200) {
                $('#header').addClass('navbar-fixed-top');
                $('#back-to-top').addClass('reveal');
            } else {
                $('#header').removeClass('navbar-fixed-top');
                $('#back-to-top').removeClass('reveal');
            }
        });
        //End Fixed Top Header

        // revolution slider start
        $("#rev_slider_1").show().revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            dottedOverlay: "none",
            delay: 9000,
            spinner: "spinner4",
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    enable: true,
                    style: 'metis',
                    tmp: '',
                    rtl: false,
                    hide_onleave: true,
                    hide_onmobile: true,
                    hide_under: 0,
                    hide_over: 9999,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    left: {
                        container: 'slider',
                        h_align: 'left',
                        v_align: 'center',
                        h_offset: 20,
                        v_offset: 0
                    },
                    right: {
                        container: 'slider',
                        h_align: 'right',
                        v_align: 'center',
                        h_offset: 20,
                        v_offset: 0
                    }
                },
            },
            responsiveLevels: [1240, 1024, 767, 480],
            gridwidth: [1240, 1024, 767, 480],
            gridheight: [700, 700, 600, 500],
            lazyType: "none",
            shadow: 0,
            shuffle: "off",
            autoHeight: "off",
        });
        // revolution slider end


        //Animated Number start
        $('.animated-counter').appear(function() {
            $('.animated-number').countTo({
                speed: 4000,
                refreshInterval: 60,
                formatter: function(value, options) {
                    return value.toFixed(options.decimals);
                }
            });
        });
        //Animated Number end

        // Start Back to Top
        $('#back-to-top').on('click', function() {
            $("html, body").animate({scrollTop: 0}, 1000);
            return false;
        });
        
        // Start Testimonial Section
        $(".testimonial-carousel-2,.testimonial-carousel-1").owlCarousel({
            pagination: false,
            navigation: true,
            slideSpeed: 2500,
            stopOnHover: true,
            autoPlay: true,
            singleItem: true,
            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
        });

        $(".client-carousel").owlCarousel({
            pagination: false,
            navigation: false,
            items : 5,
            itemsDesktop : [1000,4],
            itemsDesktopSmall : [900,3],
            itemsTablet: [600,2],
            itemsMobile : false,
            slideSpeed: 2500,
            stopOnHover: true,
            autoPlay: true,
            singleItem: false,
            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
        });
        // end Testimonial Section

        //Progress Bar start
        $('.progress-bar').each(function(){
            var width = $(this).data('percentage');
            $(this).css({'transition': 'width 3s'});
            $(this).appear(function () {
                $(this).css('width', width + '%');
                $(this).find('.count').countTo({
                    from: 0,
                    to: width,
                    speed: 3000,
                    refreshInterval: 50,
                });
            });
        });
        //Progress Bar end

        // Date Picker start
        $("#timeline-date").datepicker({
            beforeShow: function(input, inst) {
                $("#ui-datepicker-div").removeClass(function() {
                    return $("input").get(0).id; 
                });
                $("#ui-datepicker-div").addClass(this.id);
            }
        });
        // Date Picker end


        // Start Easy Pie Chart
        $('.progress-chart-feature').appear(function() {
            $('.chart').easyPieChart({
                animate: 2000,
                barColor: '#32c5d2',
                trackColor: '#f6f6f6',
                scaleColor: '',
                lineCap: 'round',
                lineWidth: 8,
                size: 130
            });
        });
        // end Easy Pie Chart


        //video background start
        try {
            jQuery(".player").mb_YTPlayer();
        } catch (err) {}
        //video background end


        // Styles Switcher
        $('.open-switcher').click(function() {
            if ($(this).hasClass('show-switcher')) {
                $('.switcher-box').css({
                    'left': 0
                });
                $('.open-switcher').removeClass('show-switcher');
                $('.open-switcher').addClass('hide-switcher');
            } else if (jQuery(this).hasClass('hide-switcher')) {
                $('.switcher-box').css({
                    'left': '-212px'
                });
                $('.open-switcher').removeClass('hide-switcher');
                $('.open-switcher').addClass('show-switcher');
            }
        });
        

        //Layout Switcher
        $(".layout-style").change(function() {
            if ($(this).val() == 1) {
                $("body").removeClass("boxed-page"),
                    $(window).resize();
            } else {
                $("body").addClass("boxed-page"),
                    $(window).resize();
            }
        });

    });
    //dom ready end

    
    $(window).on('load', function() {
        var $container = $('.portfolio-box');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.filter a').on('click', function() {
            $('.filter .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $('.portfolio-box').isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    });

})(jQuery);