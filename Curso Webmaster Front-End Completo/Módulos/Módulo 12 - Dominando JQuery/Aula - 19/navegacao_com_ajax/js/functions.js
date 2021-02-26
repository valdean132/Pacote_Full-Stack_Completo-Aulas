$(function(){

    verificarCliqueMenu();

	function verificarCliqueMenu(){
        $('a').click(function(){

            var href = $(this).attr('href');

            $.ajax({
                'beforeSend': function(){
                    console.log('Estamos chamando o beforeSend');
                },
                'timeout': 10000,
                'url':href,
                'error': function(jqXHR, textStatus, errorThrown){
                    if(jqXHR.statusText == 'Not Found'){
                        $('#container').html('Página Não encontrada');
                    }
                },
                'success':data=>{
                    $('#container').html(data);
                    $(data).appendTo('#container').fadeIn(500);
                }
            });
            

            return false;
        });
    }

});