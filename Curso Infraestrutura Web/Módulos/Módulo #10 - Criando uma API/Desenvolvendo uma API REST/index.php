<?php
    // TOKEN - token de segurança para validar e saber que estamos chamando a API
    // AÇÃO - o que vamos fazer?
    // ID - id do cliente
    // VALOR - Nome do cliente ou atualização do cliente;


    define('TOKEN', 'jsvbxcnpsaciuygvkhjldwsv7uiwu87rg');

    if(isset($_GET['token'])){
        $token = $_GET['token'];

        if($token == TOKEN){
            // Podemos continuaar nosso acesso.
            if(isset($_GET['acao'])){
                $acao = $_GET['acao'];

                if($acao == 'novo_contato'){
                    die(json_encode(array('sucesso'=>true)));
                }else if($acao == 'deletar_contato'){

                }else if($acao == 'atualizar_contato'){

                }else if($acao == 'visualizar_contato'){

                }else{
                    die('A ação especificada não é válida em nosso sistema de API.');
                }
            }else{
                die('Você não pode conectar a essa API sem uma ação definida.');
            }
        }else{
            die('Não foi possível conectar a API... Seu token está errado.');
        }
    }else{
        die('Você precisa expecificar um token de segurança...');
    }

?>