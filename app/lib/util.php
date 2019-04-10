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