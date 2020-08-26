$(document).ready(function() {
    $('.open-menu-icon, .backgroud-transparent').click(function() {
        $('body').toggleClass('open-menu');
    });

    $('#book-schedule').click(function(event) {
        event.preventDefault();
        $('body').addClass('open-repair').removeClass('open-menu');
    });

    $('#segment-order').click(function(event) {
        event.preventDefault();
        $('body').addClass('open-segment').removeClass('open-menu');
    });

    $('.open-search-icon').click(function() {
        $('body').toggleClass('open-search');
    });

    $('.menu-link').click(function() {
        $(this).parent().addClass('active').siblings().removeClass('active');
    });



    $('.frowitem, .grid-item').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
    });
    $('.grid-ic-list').click(function() {
        $('.list-products').addClass('list-layout');
    });
    $('.grid-ic-layout').click(function() {
        $('.list-products').removeClass('list-layout');
    });

    $('.login-button').click(function() {
        $('body').toggleClass('show-login');
    });

    $('.close-popup, .btn-cancel').click(function() {
        $('body').removeClass('open-segment open-repair show-login');
    });

    $('.products-tab-item').click(function() {
        var currentValue = $(this).attr('data-href');
        $(this).addClass('active').siblings().removeClass('active');
        $(currentValue).addClass('active').siblings().removeClass('active');
    });

    $('.profile-tab-item').click(function() {
        var currentValue = $(this).attr('data-value');
        $(this).addClass('active').siblings().removeClass('active');
        $(currentValue).addClass('active').siblings().removeClass('active');
    });


    if (screen.width < 960) {
        // mobile
        $('.dropdown-link').click(function(e) {
            $(this).next().slideToggle();
            e.preventDefault();
        });
        $('#top-category').click(function(e) {
            e.preventDefault();
            $('.list-category').slideToggle();
        });
    }
    else {
        // desktop
    }



    $('.feature-news-list').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        centerPadding: '10px',
        autoplay: !1,
        dots: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 1
                }
            }
        ]
    });



});
