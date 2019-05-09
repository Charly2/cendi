<?php


if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}


function index(){
    include_once '../modelos/Dao.php';
    $model = new Dao();
    $model->connect();
    $n = $_SESSION['derecho']['idtrabajadora'];
    $model->query("SELECT * FROM estudiante e INNER JOIN persona p ON p.idPersona=e.persona WHERE madre = '$n'");
    $alumnos=$model->getResult();

    /*echo "<pre>";
    print_r($alumnos);
    echo "</pre>";*/

    setViewApp('listar_alumnos',['data'=>$alumnos]);
}

function crear(){


    include_once '../modelos/AlumnoModel.php';
    $persona = new AlumnoModel();

    $alumno = $persona->crear($_SESSION['derecho']['idtrabajadora']);

    $_SESSION['alumno'] = $alumno;

    print_r($alumno);

    //setViewApp('registro_paso1');

    header("location: "._setUrl('app/alumno/edit_alumno/'.$alumno['alumno']));
}




function reg_alumno(){

    setViewApp('registro_paso2');
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


function edit_alumno(){
    global $_PATH;

    include_once '../modelos/AlumnoModel.php';
    $persona = new AlumnoModel();

    $p = $persona->getbyId($_PATH[2]);


    setViewApp('registro_paso1',["data"=>$p]);
}

function reg_conyuge(){
    global $_PATH;

    include_once '../modelos/AlumnoModel.php';
    include_once '../modelos/PersonaAutorizadaModel.php';
    $persona = new AlumnoModel();
    $personaAutorizada = new PersonaAutorizadaModel();

    $p = $persona->getbyId($_PATH[2]);


    if (!$p['estudiante']['personaautorizada']){
        $personaAutorizada->crear($p['estudiante']['idestudiante']);
    }


    $perat = $personaAutorizada->getbyid($p['estudiante']['personaautorizada']);



    print_r($perat);




    die();


    setViewApp('registro_paso2');
}

function reg_persona_autorizada(){
    setViewApp('registro_paso3');
}
function reg_documentos(){
    setViewApp('registro_paso4');
}


?>