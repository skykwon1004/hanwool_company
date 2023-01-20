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


    $('.mopen').on('click', function () {
        $('.header').toggleClass('on')
    });


    $('.header .gnb>ul>li>a').on('click', function (e) {
        if ($('.header').hasClass('on')) {
            // header에 on이 붙었을때만 이벤트 정지하라
            e.preventDefault();
        };
        // return false;     a 이벤트 막는법 두번째
        console.log(e, e.currentTarget, $(this));
        $('.header .gnb>ul>li .submenu').removeClass('on');
        $(this).next().addClass('on');
        // 내가 클릭한 this 의 next에(자식) on을 붙여라
    });


    // 모바일 메뉴열었을때 뒤에 스크롤 안되게하는
    $('.header').on('scroll wheel touchmove', function (e) {
        if ($('.header').hasClass('on')) {
            // header에 on이 붙었을때만 이벤트 정지하라
            e.preventDefault();
        };
    });



})