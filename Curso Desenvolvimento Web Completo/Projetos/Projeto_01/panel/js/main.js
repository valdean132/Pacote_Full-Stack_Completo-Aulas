$(function(){

    var open = true;
    var windowSize = $(window)[0].innerWidth;

    var targetSizeMenu = (windowSize <= 400) ? 200 : 300; 

    if(windowSize <= 768){
        open = false

    }

    $(".menu-btn").click(()=>{
        if(open){
            // O menu está aberto,precisamos feixar e adaptar o conteudo geral do site;
            $('.menu').css('left', '-300px');
            $('.content, header').css('width', '100%').css('left', '0');
                open = false;
        }else{
            // O menu está fechado
            open = true;
            $('.menu').css('left', '-300px');
            if(windowSize > 768){
                $('.content, header').css('width', 'calc(100% - '+targetSizeMenu+'px)').css('left', targetSizeMenu+'px');
            }else{
                $('.content, header').css('width', 'calc(100%').css('left', targetSizeMenu+'px');   
            }
        }
    });
    $(window).resize(()=>{
        windowSize = $(window)[0].innerWidth;
        if(windowSize <= 768){
            $('.menu').css('left', '-300px');
            $('.content, header').css('width', '100%').css('left', '0');
            open = false;
        }else{
            $('.menu').animate({'left': '0px'});
            $('.content, header').css('width', 'calc(100% - '+targetSizeMenu+'px)').css('left', targetSizeMenu+'px');
            open = true;
        }
    });

});