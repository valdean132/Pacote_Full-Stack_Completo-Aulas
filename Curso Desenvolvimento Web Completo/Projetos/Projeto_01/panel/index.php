<?php 

    include('../config.php'); 

    

    if(Panel::logado() == false){
        include('login.php');
    }else{
        include('main.php');
    }
?>