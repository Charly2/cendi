<?php

include_once '../modelos/Dao.php';

if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}






function index (){
    setViewIndex('login');
}



function valida(){
    include_once '../modelos/UsuarioModel.php';
    $u = new UsuarioModel();

    $user = $_POST['user'];
    $password = $_POST['password'];

    if ( $user=="" and $password==""){
        header("Location: " . URL_BASE . "login");
    }

    $_RES = $u->login($user,$password);

    if ($_RES[0]){
        print_r($_RES[1]);
        echo "<h1>Bienvenidos</h1>";
    }else{
        setViewIndex('login',["_ERROR"=>$_RES[1]]);
    }




};















?>