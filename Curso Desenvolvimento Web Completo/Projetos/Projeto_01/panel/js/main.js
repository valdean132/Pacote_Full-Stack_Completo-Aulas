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
            $('.menu').css('left', '-'+targetSizeMenu+'px');
            $('div.menu-btn').css('opacity', '0');
            $('div.menu-btn').removeClass('menu-close');
            setTimeout(()=>{
                $('div.menu-btn').addClass('menu-open');
                $('div.menu-btn').css('opacity', '1');
            });
            $('.content, header').css('width', '100%').css('left', '0');
                open = false;
        }else{
            // O menu está fechado
            open = true;
            $('.menu').css('left', '0px');
            $('div.menu-btn').css('opacity', '0');
            $('div.menu-btn').removeClass('menu-open');
            setTimeout(()=>{
                $('div.menu-btn').addClass('menu-close');
                $('div.menu-btn').css('opacity', '1');
            });
            if(windowSize > 768){
                $('.content, header').css('width', 'calc(100% - '+targetSizeMenu+'px)').css('left', targetSizeMenu+'px');
            }else if(windowSize <= 768 && windowSize > 400){
                $('.content, header').css('width', '100%').css('left', targetSizeMenu+'px');
            }else if(windowSize <= 400){
                $('.content, header').css('width', '100%').css('left', '200px');   
            }
        }
    });
    $(window).resize(()=>{
        windowSize = $(window)[0].innerWidth;
        if(windowSize <= 768){
            $('.menu').css('left', '-'+targetSizeMenu+'px');
            $('.content, header').css('width', '100%').css('left', '0');
            $('div.menu-btn').css('opacity', '0');
            $('div.menu-btn').removeClass('menu-close');
            setTimeout(()=>{
                $('div.menu-btn').addClass('menu-open');
                $('div.menu-btn').css('opacity', '1');
            });
            open = false;
        }else{
            $('.menu').css('left', '0px');
            $('.content, header').css('width', 'calc(100% - '+targetSizeMenu+'px)').css('left', targetSizeMenu+'px');
            $('div.menu-btn').css('opacity', '0');
            $('div.menu-btn').removeClass('menu-open');
            setTimeout(()=>{
                $('div.menu-btn').addClass('menu-close');
                $('div.menu-btn').css('opacity', '1');
            });
            open = true;
        }
    });



    // Atualizar Online
    setInterval(()=>{
        Atual = $('.atualização').text();
        $('.atualização').val(Atual);
    }, 1000);

   $('[formato="data"]').mask('99/99/9999');

   
   $('[actionBtn="delete"]').click(function(){
        // var txt;

        var r = confirm("Deseja excluir o geristro?");
        if(r == true){
            return true;
        }else{
            return false;
        }
    });

});