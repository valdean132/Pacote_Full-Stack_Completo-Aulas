$(function(){
    $('body').on('submit', 'form', function(){
        var form = $(this);
        var formCamp = $("form");
        var formSubmit = formCamp.find('input[type=submit]').val();
        $.ajax({
            beforeSend: function(){
                $(".overlay-loading").fadeIn();
                formCamp.find('input[type=submit]').attr('disabled', 'true');
                formCamp.find('input[type=submit]').attr('value', 'Enviando...');
            },
            url: include_path+'ajax/formularios.php',
            method: 'POST',
            dataType: 'json',
            data: form.serialize()
        }).done(function(data){
            if(data.sucesso){
                // Tudo certo, vamos melhorar a intercafe
                $(".overlay-loading").fadeOut();
                $('.sucesso').fadeIn();
                formCamp.find('input[type=submit]').removeAttr('disabled');
                if(formSubmit == 'Cadastrar!'){
                    formCamp.find('input[type=submit]').attr('value', 'Cadastrar!');
                }else{
                    formCamp.find('input[type=submit]').attr('value', 'Enviar');
                }
                formCamp[0].reset();
                setTimeout(function(){
                    $('.sucesso').fadeOut();
                }, 3000);
            }else{
                // Algo deu errado.
                $(".overlay-loading").fadeOut();
                $('.erro').fadeIn();
                formCamp.find('input[type=submit]').removeAttr('disabled');
                if(formSubmit == 'Cadastrar!'){
                    formCamp.find('input[type=submit]').attr('value', 'Cadastrar!');
                }else{
                    formCamp.find('input[type=submit]').attr('value', 'Enviar');
                }
                setTimeout(function(){
                    $('.erro').fadeOut();
                }, 3000);
            }
        });
        
        return false;
    });
});