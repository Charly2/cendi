<?php


if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}






function index (){
    setViewIndex('pre_registro');
}

function ok (){

    include_once '../modelos/DerechohabienteModel.php';
    $derechohabiente = new DerechohabienteModel();
    $r = $derechohabiente->getbyId($_SESSION['paso1']['derechohabiente']);
    if($r['derecho']['usuario']){
        setViewIndex('pre_registro_ok',[]);
        $e = $derechohabiente->setEstado('1',$_SESSION['paso1']['derechohabiente']);
        print_r($e);
    }else{
        $a = $derechohabiente->setuser($r['persona']['nombre'],$r['persona']['appaterno'],$_SESSION['paso1']['derechohabiente'],$r['persona']['email']);
        $e = $derechohabiente->setEstado('1',$_SESSION['paso1']['derechohabiente']);
        print_r($e);
        setViewIndex('pre_registro_ok',[]);
    }

}



function create (){
    $num = $_POST['numero'];
    if($num!=""){
        include_once '../modelos/DerechohabienteModel.php';
        $derechohabiente = new DerechohabienteModel();
        $r = $derechohabiente->exite($num);
        if ($r){
            printf($r);
            header("location: "._setUrl('pre_registro/continuar/'.$r));
        }else{
            $_RES=$derechohabiente->crear($num);

            print_r($_RES);
            $_SESSION['paso1']= $_RES;
            header("location: "._setUrl('pre_registro/continuar/'.$_RES));
        }
    }else{
        echo "FALTA INFO";
    }
}

function continuar(){
    global $_PATH;
    $num = $_PATH[2];
    include_once '../modelos/DerechohabienteModel.php';
    include_once '../modelos/DirecionModel.php';
    $derechohabiente = new DerechohabienteModel();
    $r = $derechohabiente->getbyId($num);





    $_SESSION['paso1'] = ['persona'=>$r['persona']['idPersona'],"derechohabiente"=> $r['derecho']['idtrabajadora']];  //paso1
    if ($derechohabiente->getEstado($num)==1){
        header("location: "._setUrl('pre_registro/ok/'));
    }


    setViewIndex('pre_registro_paso2',["data"=>$r],null);
}



function update(){
    print_r($_POST);
    include_once '../modelos/Dao.php';
    $dao = new Dao();
    $dao->connect();
    $pk = "";
    switch ($_POST['model']){
        case 'persona': $pk="idPersona";break;
        case 'direccion': $pk="idDireccion";break;
        case 'derechohabiente': $pk="idtrabajadora";break;
    }
    print_r($dao->update($_POST['model'],[$_POST['value']],[$_POST['name']],"$pk = '".decryptIt($_POST['id'])."'"));


}

function init(){
    unset($_SESSION);
}
function ver(){
    print_r($_SESSION);
}
function initall(){
    session_destroy();
}


function fileUpload(){
    global $_PATH;
    $tipo = $_PATH[2];


    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if ($imageFileType != "jpg" && $imageFileType != "pdf"){
        echo "--code--ERROR";die();
    }


    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        include_once '../modelos/Dao.php';
        $dao = new Dao();
        $dao->connect();
        print_r($dao->update('derechohabiente',[$_FILES["file"]["name"]],['evidencia_a'],"idtrabajadora = '".$_SESSION['paso1']['derechohabiente']."'"));
        echo "--code--OK";
    } else {
        echo "--code--ERROR";
    }



}

function filePhoto(){
    global $_PATH;
    $tipo = $_PATH[2];


    $target_dir = "../uploads/photos/";
    $target_file = $target_dir . basename("perfil_"+$_SESSION['paso1']['derechohabiente'].".".end(explode('.',$_FILES['file']['name'])));
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    if (explode('/',$_FILES["file"]["type"])[0] != "image" ){
        echo "aqui--code--ERROR";die();
    }


    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        include_once '../modelos/Dao.php';
        $dao = new Dao();
        $dao->connect();
        print_r($dao->update('derechohabiente',["1"],['evidencia_b'],"idtrabajadora = '".$_SESSION['paso1']['derechohabiente']."'"));
        echo "--code--OK";
    } else {
        echo "--code--ERROR";
    }



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