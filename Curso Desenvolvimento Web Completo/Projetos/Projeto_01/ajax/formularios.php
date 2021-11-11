<?php

    include('../config.php');

    $data = [];
    $assunto = 'Nova mensagem do site!';
    $corpo = '';
    foreach($_POST as $key => $value){
        if($key != 'indentificador' && $key != 'acao'){
            if($key != 'telefone'){
                $corpo.=ucFirst($key).": $value";
                $corpo.='<hr/>';
            }else{
                $corpo.=ucFirst($key).": <a href='web.whatsapp.com/send?phone=55$value'>$value</a>";
                $corpo.='<hr/>';
            }
        }
    }
    $info = array(
        'assunto' => $assunto,
        'corpo' => $corpo
    );
    $mail = new Email(
        'smtp.titan.email', 
        'teste@valdeansouza.com', 
        '1598753', 
        'Valdean'
    );
    $mail->addAdress('contato@valdeansouza.com', 'valdean');
    $mail->formatarEmail($info);
    if($mail->enviarEmail()){
        $data['sucesso'] = true;
    }else{
        $data['error'] = true;
    }
    
    die(json_encode($data));

?>