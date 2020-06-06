
$(function() {
    $('a[href^="#"]').click(function() {
        var speed = 500;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? "html" : href);
        var position = target.offset().top;
        position = position - $("header").outerHeight();
        var url = location.href;

        $("html, body").animate({ scrollTop: position }, speed, "swing");
        return false;
    });

    $('.header__humberger').on('click', function(){
        $(this).toggleClass('active')
        $('.header__nav').slideToggle();
    });

    // オブジェクトを変数に格納
    header = $('header')
    // スクロールしたときの、処理
    $(window).on('scroll', function(){
        // スクロールした量
        scroll = $(this).scrollTop()　

        // スクロールした量
        if (scroll > 300){
            if(!header.hasClass('fixed')){
                header.addClass('fixed')
            }
        } else {
            if(header.hasClass('fixed')){
                header.removeClass('fixed')
            }
        }
    });
});
