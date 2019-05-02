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

    $_RES = $u->login($user,md5($password));

    $_SESSION['login'] = $_RES[1][0];
    $_SESSION['derecho'] = $u->getInfo($_RES[1][0]['idUsuario']);


    if ($_RES[0]){
        header("Location: ".URL_BASE."/app/dashboard");

    }else{
        setViewIndex('login',["_ERROR"=>$_RES[1]]);
    }




};















?>