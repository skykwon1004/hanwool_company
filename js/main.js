$(function () {


    $('.main_slide').on('init', function () {
        $('.m_link li').eq(0).addClass('on');
    });

    $('.main_slide').on('beforeChange', function (e, s, c, n) {
        $('.m_link li').removeClass('on')
        $('.m_link li').eq(n).addClass('on');
    });

    $('.main_slide').slick({
        //arrows: false,
        // autoplay: true,
        // //pauseOnHover: false,
        // //pauseOnFocus: false,
        // autoplaySpeed: 5000,
    });

    $('.m_link li a').on('click', function (e) {
        e.preventDefault();
        var idx = $(this).parent().index();
        $('.main_slide').slick('slickGoTo', idx);
        $('.m_link li').removeClass('on');
        $(this).parent().addClass('on');
    });

    $(window).on('scroll', function () {
        var sct = $(window).scrollTop();
        console.log(sct);

        if (sct > 500) {
            //$('.toTop').fadeIn();
            $('.toTop').addClass('on')
        } else {
            $('.toTop').removeClass('on')
        }
    });

    $('.toTop').on('click', function () {
        $('html, body').animate({ scrollTop: 0 })
    });






})