$(function(){

    var iconMenu = $('.botao-menu-mobile');

    iconMenu.click(()=>{
        var listaMenu = $('nav.mobile ul');

        if(listaMenu.is(':hidden')){
            iconMenu.css('opacity', '0');
            iconMenu.removeClass('iconMenu1');
            setTimeout(()=>{
                iconMenu.css('opacity', '1');
                iconMenu.addClass('iconMenu2');
            });
            listaMenu.slideToggle();
        }else{
            iconMenu.css('opacity', '0');
            iconMenu.removeClass('iconMenu2');
            setTimeout(()=>{
                $('.botao-menu-mobile').css('opacity', '1');
                $('.botao-menu-mobile').addClass('iconMenu1');
            });
            listaMenu.slideToggle();
        }

    });

    if($('target').length > 0){
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html, body').animate({
            'scrollTop': divScroll
        }, 1000);
    }
    

    carregarDinamico();

    function carregarDinamico(){
        $('[realtime]').click(function(){
            var pagina = $(this).attr('realtime');

            $('.container-principal').hide();

            var url = include_path+'pages/'+pagina+'.php';
            $('.container-principal').load(url);
            
            setTimeout(()=>{
                initialize();
                addMarker(-3.099870,-60.062610, '', "Minha Casa", undefined, false);
            },1000);

            $('.container-principal').fadeIn(1000);
            window.history.pushState('', '', pagina);


            return false;
        });
    }

});