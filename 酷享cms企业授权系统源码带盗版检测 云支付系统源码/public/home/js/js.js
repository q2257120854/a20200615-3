$(function () {
    // setTimeout(function(){
    //     $('.customerService').fadeIn().addClass('bounceInLeft');
    // },1000);
    $('.customerService .iconfont').on('click',function (event) {
        $('.customerService').addClass('bounceOutLeft').removeClass('bounceInLeft');
        $('.customerClose').show();
        event.stopPropagation(); 
    });
    $('.customerClose').on('click',function () {
        $('.customerService').fadeIn().addClass('bounceInLeft').removeClass('bounceOutLeft');
        $('.customerClose').hide();
    });
    $('.floatWindow .return').click(function(){
        $('html , body').animate({scrollTop: 0},'slow');
    });
    $('.floatWindow .item').hover(function(){
        $(this).find('.itemCon').show();
    },function(){
        $(this).find('.itemCon').hide();
    });
    $('.demoCenter').hover(function () {
        $(this).find('.demoCon').show();
    },function(){
        $(this).find('.demoCon').hide();
    });
    $('.pull-right .item').on('mouseenter',function () {
        $('.demoCenter .demoCon').hide();
    });
    $('#nav .pull-right .item').on('mouseenter',function () {
        $(this).find('.list').addClass('on');
    });
    $('#nav .pull-right .item').on('mouseleave',function () {
        $(this).find('.list').removeClass('on');
    });
});