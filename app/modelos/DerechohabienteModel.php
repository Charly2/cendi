<?php
/**
 * Created by PhpStorm.
 * User: CHARLY
 * Date: 08/04/2019
 * Time: 01:25 AM
 */
include_once '../modelos/Dao.php';
include_once '../modelos/PersonaModel.php';
include_once '../modelos/DirecionModel.php';
class DerechohabienteModel
{
    private static $db = null;
    private static $persona = null;
    private static $direcion = null;
    public function __construct()
    {
        $this->db = new Dao();
        $this->db->connect();
        $this->persona = new PersonaModel();
        $this->direcion = new DirecionModel();
    }

    public function crear($num){
        $persona = $this->db->insert("persona",["null"],"idPersona");
        $dere = $this->db->insert("derechohabiente",[$persona,$num],"persona,numtrabajador");
        $dir = $this->db->insert("direccion",["null"],"idDireccion");
        $d = $this->db->update('persona',[$dir],['direccion'],"idPersona = '$persona' ");

       
        //return ['persona'=> $persona,'derechohabiente'=> $dere,"dir"=>$dir];
        return $dere;
    }
    public function setuser($nombre,$ap,$num,$mail){
        $u= $this->db->insert("usuario",["null",$nombre,$ap.$num,1,$mail],"idUsuario,usuario,password,rol,email");
        $this->db->update('derechohabiente',[$u],["usuario"],"numtrabajador = '$num'");

        //return ['persona'=> $persona,'derechohabiente'=> $dere,"dir"=>$dir];
        return $u;
    }


    function exite($num){
        $r = $this->db->select('derechohabiente','*',"numtrabajador = $num",null);
        if ($this->db->getResult()){

            return $this->db->getResult()[0]['numtrabajador'];
        }else{
            return false;
        }
    }

    function getbyId($num){
        $r = $this->db->select('derechohabiente','*',"numtrabajador = $num",null);
        $derecho = $this->db->getResult()[0];
        if ($derecho){
            $persona = $this->persona->getbyid($derecho['persona']);
            $dir = $this->direcion->getbyid($persona['direccion']);

            return ["persona"=>$persona,"derecho"=>$derecho,"dir"=>$dir];
        }else{
            return false;
        }
    }


    public function update ($table,$values,$rows = null,$where){
        return $this->db->update($table,$values,$rows,$where);
    }

}