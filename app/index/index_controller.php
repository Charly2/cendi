<?php


if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}



function prueba(){
    include_once '../modelos/UsuarioModel.php';
    $u = new UsuarioModel();
    print_r($u->login('oscar','123'));


}


function index (){
    setViewIndex('index');
}



function saves(){
  echo "Hola";
  print_r($_GET);
};















?>