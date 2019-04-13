<?php
/**
 * Created by PhpStorm.
 * User: CHARLY
 * Date: 07/04/2019
 * Time: 11:51 PM
 */


function setViewIndex($view,$args="",$ver = false){
    if ($ver){
        print_r($args);
    }
    extract($args);
    $_VIEW = $view;
    include_once '../vistas/layout_index.php';
}

function _setUrl($url){
    return URL_BASE.$url;
}

function encryptIt( $q ) {

    return base64_encode( $q );
}

function decryptIt( $q ) {
    return base64_decode( $q );
}


function autoUpdate($model, $name, $id , $controller,$value,$min,$max){
    $url = _setUrl($controller);
    return "data-model='$model' data-name='$name' data-id='$id' data-controller='$url' value='$value' data-min='$min' data-max='$max'";
}

function prEx($r){
    print_r($r);
    die("-----AQUI SALI -----");
}


include_once '../modelos/UtilModel.php';
$Util = new UtilModel();
$_ESTADOS = $Util->getEstados();




function getSelectEstados($a)
{
    global $_ESTADOS;
    $ret = "";
    foreach ($_ESTADOS as $estado) {
        $nombre = $estado['estado'];
        $se = $a==$nombre?"selected":"";
        $ret .= "<option value='$nombre' $se >$nombre</option>";
    }
    return $ret;
}


?>