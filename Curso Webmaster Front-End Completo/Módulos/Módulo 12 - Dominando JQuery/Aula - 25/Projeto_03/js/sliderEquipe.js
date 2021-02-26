$(function(){
    
    var deley = 3000;
    var curIndex = 0;
    var amt;

    initSlider();
    autoPlay()

    function initSlider(){
        amt = $('.sobre-autor').length;
        var sizeContainer = 100 * amt;
        var sizeBoxSingle = 100 / amt;
        $('.sobre-autor').css('width', sizeBoxSingle+'%');
        $('.scroll-wraper').css('width',sizeContainer+'%');

        for(var i = 0; i < amt; i++){
            if(i == 0){
                $('.slider-bullets').append('<span style="background-color:  #835fa7;"></span>');
            }else{
                $('.slider-bullets').append('<span></span>');
            }
        }
    }

    function autoPlay(){
        setInterval(function(){
            curIndex++;
            if(curIndex == amt)
                curIndex = 0;
            goToSlider(curIndex);
        }, deley);
    }

    function goToSlider(curIndex){
        var offSetX = $('.sobre-autor').eq(curIndex).offset().left - $('.scroll-wraper').offset().left;
        $('.slider-bullets span').css('background-color', 'rgb(0, 0, 0)');
        $('.slider-bullets span').eq(curIndex).css('background-color', '#835fa7');
        $('.scrollEquipe').stop().animate({'scrollLeft':offSetX+'px'});
    }
    $(window).resize(function(){
        $('.scrollEquipe').stop().animate({'scrollLeft':0});
    });

});