$(function(){

    $('body').on('submit', 'form', function(){
        var form = $(this);
        $.ajax({
            url: include_path+'ajax/formularios.php',
            method: 'POST',
            dataType: 'json',
            data: form.serialize()
        }).done(function(data){
            if(data.sucesso){
                // Tudo certo, vamos melhorar a intercafe
            }else{
                // Algo deu errado.
            }
        });
        
        return false;
    });
});