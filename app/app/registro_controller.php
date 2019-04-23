<?php


if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}




function index(){


    include_once '../modelos/AlumnoModel.php';
    $persona = new AlumnoModel();

    $alumno = $persona->crear($_SESSION['derecho']['idtrabajadora']);

    print_r($alumno);

    setViewApp('registro_paso1');
}



function reg_conyuge(){
    setViewApp('registro_paso2');
}

function reg_persona_autorizada(){
    setViewApp('registro_paso3');
}
function reg_documentos(){
    setViewApp('registro_paso4');
}


?>