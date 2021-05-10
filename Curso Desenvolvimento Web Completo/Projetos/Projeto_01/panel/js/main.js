$(function(){

    var open = true;
    var windowSize = $(window)[0].innerWidth;

    var target = (windowSize <= 400) ? 200 : 300; 

    if(windowSize <= 768){
        open = false

    }

    $(".menu-btn").click(()=>{
        if(open){
            // O menu está aberto,precisamos feixar e adaptar o conteudo geral do site;
            $('.menu').animate({'width': '0', 'padding': '0'}, ()=>{
                open = false;
            });
            $('.content, header').css('width', '100%');
            $('.content, header').animate({'left': '0'}, ()=>{
                open = false;
            });
        }else{
            // O menu está fechado
                $('.menu').css('display', 'block')
                $('.menu').animate({'width': target+'px', 'padding': '10px'}, ()=>{
                open = true;
            });
            // $('.content, header').css('width', 'calc(100% - 300px)');
            $('.content, header').animate({'left': target+'px'}, ()=>{
                open = true;
            });

        }

    })

});