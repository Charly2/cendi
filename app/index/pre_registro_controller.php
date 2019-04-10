<?php


if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}






function index (){
    setViewIndex('pre_registro');
}



function create (){
    $num = $_POST['numero'];
    if($num!=""){
        include_once '../modelos/DerechohabienteModel.php';
        $derechohabiente = new DerechohabienteModel();
        $r = $derechohabiente->exite($num);
        if ($r){

            setViewIndex('error_custom',["msj"=>"El derechohabiente ya esta registrado"]);
        }else{
            $_RES=$derechohabiente->crear($num);
            $_SESSION['paso1']= $_RES;
            setViewIndex('pre_registro_paso2',["data"=>$_RES],true);
        }
    }else{
        echo "FALTA INFO";
    }
}

function continuar(){
    global $_PATH;
    $num = $_PATH[2];
    include_once '../modelos/DerechohabienteModel.php';
    $derechohabiente = new DerechohabienteModel();
    $r = $derechohabiente->getbyId($num)[0];
    $_SESSION['paso1'] = ['persona'=>$r['idtrabajadora'],"derechohabiente"=> $r['idtrabajadora']];  //paso1
    setViewIndex('pre_registro_paso2',["data"=>$r],true);
    print_r($r);
}



function update(){
    print_r($_SESSION);
}

function init(){
    unset($_SESSION);
}
function initall(){
    session_destroy();
}



function existe(){
    include_once '../modelos/DerechohabienteModel.php';
    $derechohabiente = new DerechohabienteModel();
    $r = $derechohabiente->exite(2);
    if ($r){
        echo "existe";
    }else{
        echo "no existe";
    }

}











?>