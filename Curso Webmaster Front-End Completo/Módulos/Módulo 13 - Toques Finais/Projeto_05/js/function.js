$(function(){

    /* Sistema de pesquisa */
    
    var currentValue = 0;
    var isDrag = false;
    var preco_maximo = 70000;
    var preco_atual = 0;

    $('.pointer-barra').mousedown(function(){
        isDrag = true;
        
    });

    $(document).mouseup(function() {
        isDrag = false;
        enableTexSelection() 
    });

    $('.barra-preco').mousemove(function(e){
        if(isDrag){
            disebleTexSelection();
            var elBase = $(this);
            var mouseX = e.pageX - elBase.offset().left;
            if(mouseX < 0)
                mouseX = 0;
            if(mouseX > elBase.width())
                mouseX = elBase.width();

            $('.pointer-barra').css('left', (mouseX-13)+'px');
            currentValue = (mouseX / elBase.width()) * 100;
            $('.barra-preco-fill').css('width', currentValue+'%');

            // Todo: Ajustar formato do preço!
            preco_atual = (currentValue/100) * preco_maximo;
            preco_atual = formatarPreco(preco_atual);
            $('.preco_pesquisa').html('R$ '+preco_atual);
        }
    });

    function formatarPreco(preco_atual){
        preco_atual = preco_atual.toFixed(2);
        preco_arr = preco_atual.split('.');

        var novo_preco = formatarTotal(preco_arr);
        return novo_preco;
    }

    function formatarTotal(preco_arr){
        if(preco_arr[0] < 1000){
            return preco_arr[0]+','+preco_arr[1];
        }else if(preco_arr[0] < 10000){
            return preco_arr[0][0]+'.'+preco_arr[0].substr(1,preco_arr[0].length)+','+preco_arr[1];
        }else{
            return preco_arr[0][0]+preco_arr[0][1]+'.'+preco_arr[0].substr(2,preco_arr[0].length)+','+preco_arr[1];
        }
    }


    function disebleTexSelection(){
        $('body').css('-webkit-user-select', 'none');
        $('body').css('-moz-user-select', 'none');
        $('body').css('-ms-user-select', 'none');
        $('body').css('-o-user-select', 'none');
        $('body').css('user-select', 'none');
    }

    function enableTexSelection(){
        $('body').css('-webkit-user-select', 'auto');
        $('body').css('-moz-user-select', 'auto');
        $('body').css('-ms-user-select', 'auto');
        $('body').css('-o-user-select', 'auto');
        $('body').css('user-select', 'auto');
    }


    /* Sistema de Slide da página individual de cada carro... */
 
    // var imgShow = 3;
    // var minIndex = imgShow - 1;
    var maxIndex = Math.ceil($('.mini-img-wraper').length/1) - 3;
    var curIndex = 0;

    initSlider();
    navigateSlider();
    clickSlider();
    
    // Funções de eventos
    function initSlider(){
        var amt = $('.mini-img-wraper').length * 33.3;
        var elScroll = $('.nav-galeria-wraper');
        var elSingle = $('.mini-img-wraper');

        elScroll.css('width', amt+'%');
        elSingle.css('width', 33.3*(100/amt)+'%');
    }

    function navigateSlider(){
        $('.arrow-right-nav').click(function(){
            curIndex++;
            if(curIndex >= maxIndex)
                curIndex = 0;
            var elOff = $('.mini-img-wraper').eq(curIndex*1).offset().left - $('.nav-galeria-wraper').offset().left;
            $('.nav-galeria').animate({
                'scrollLeft': elOff+'px'
            });
        });

        $('.arrow-left-nav').click(function(){
            curIndex--;
            if(curIndex < 0)
                curIndex = maxIndex;
            var elOff = $('.mini-img-wraper').eq(curIndex*1).offset().left - $('.nav-galeria-wraper').offset().left;
            $('.nav-galeria').animate({
                'scrollLeft': elOff+'px'
            });
        });
    }

    function clickSlider(){
        $('.mini-img-wraper').click(function(){
            $('.mini-img-wraper').css('background-color', 'transparent');
            $(this).css('background-color', '#f36565');
            var img = $(this).children().css('background-image');
            $('.foto-destaque').css('background-image', img);
        });

        $('.mini-img-wraper').eq(0).click();
    }


    /* Clicar ir para a div de contato com base no atributo com base no goto */

    // var directory = '/Pacote_Full-Stack_Completo-Aulas/Curso%20Webmaster%20Front-End%20Completo/Módulos/Módulo%2013%20-%20Toques%20Finais/Projeto_05/';
    var directory = '/Projeto_05/';

    $('[goto=contato]').click(()=>{
        location.href=directory+'?contato';
        
        return false;
    });
    
    checkUrl();

    function checkUrl(){
        var url = location.href.split('/');
        var curPage = url[url.length-1].split('?');
        console.log(curPage);

        if(curPage[1] != 'underfined' && curPage[1] == 'contato'){
            $('header nav.menu-desktop ul a').css('color', 'black');
            $('footer nav.menu-desktop ul a').css('color', 'white');
            $('[goto=contato]').css('color', '#eb2d2d');

            $('nav.menu-mobile ul li.select').css('background-color', 'white');
            $('#cont').css('color', '');
            $('[goto2=contato]').css('background-color', '#eb2d2d');
    
            $('html, body').animate({'scrollTop':$('#contato').offset().top});
        }
    }

    /*Menu responsivo*/

    $('.menu-mobile').click(()=>{
        $(this).find('ul').slideToggle();
    });

    /* Sistea de navegação nos depoimentos da index.html */

    var amtDepoimento = $(".depoimento-single p").length;
    var curDep = 0;

    iniciarDepoimentos();
    navegarDepoimentos();

    function iniciarDepoimentos(){
        $('.depoimento-single p').hide();
        $('.depoimento-single p').eq(0).show();
    }

    function navegarDepoimentos() {
        $('[next]').click(()=>{
            curDep++;
            if(curDep >= amtDepoimento)
                curDep = 0;
            $('.depoimento-single p').hide();
            $('.depoimento-single p').eq(curDep).show();
            
        });

        $('[prev]').click(()=>{
            curDep--;
            if(curDep < 0)
                curDep = amtDepoimento-1;
            $('.depoimento-single p').hide();
            $('.depoimento-single p').eq(curDep).show();
        });
    }
});