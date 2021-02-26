$(function(){

    var atual = -1;
    var maximo = $('.box-especialidade').length -1;
    var time;
    var animacaoDeley = 1;

    executarAnimacao();

    function executarAnimacao(){
        $('.box-especialidade').hide();
        time = setInterval(logicaAnimacao, animacaoDeley * 1000);

        function logicaAnimacao(){
            atual++;
            if(atual > maximo){
                clearInterval(time);
                return false;
            }

            $('.box-especialidade').eq(atual).fadeIn();
        }
    }

});