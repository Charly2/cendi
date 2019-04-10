<?php
/**
 * Created by PhpStorm.
 * User: CHARLY
 * Date: 08/04/2019
 * Time: 01:25 AM
 */
include_once '../modelos/Dao.php';
class DerechohabienteModel
{
    private static $db = null;
    public function __construct()
    {
        $this->db = new Dao();
        $this->db->connect();
    }

    public function crear($num){
        $persona = $this->db->insert("persona",["null"],"idPersona");
        $dere = $this->db->insert("derechohabiente",[$persona,$num],"persona,numtrabajador");
        return ['persona'=> $persona,'derechohabiente'=> $dere];
    }


    function exite($num){
        $r = $this->db->select('derechohabiente','*',"numtrabajador = $num",null);
        if ($this->db->getResult()){
            return true;
        }else{
            return false;
        }
    }

    function getbyId($num){
        $r = $this->db->select('derechohabiente','*',"numtrabajador = $num",null);
        if ($this->db->getResult()){
            return $this->db->getResult();
        }else{
            return false;
        }
    }



}