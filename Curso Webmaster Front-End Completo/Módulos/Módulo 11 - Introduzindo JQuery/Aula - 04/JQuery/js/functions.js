$(function(){
    /*
	$(window).scroll((e) =>{
        // Evento para quando o scroll ocorre
    });
    */
    /* 
    $('a').click((e) => {
        // e.preventDefault();
        // return false;
    });
    */

    /*
    var time;
    $(window).resize(() =>{
        // Evento de quando redimencionamos a tela...
        // console.log('Minha tela está sendo redimencionada');

        clearTimeout(time);

        time = setTimeout(()=>{
            location.href = "https://google.com.br";
        },1000);
    });
    */

    $('.box').click((e)=>{
        e.stopPropagation();
    })

    $('body').click(()=>{
        $('.box').css('background-color', 'green');
    })
    
});