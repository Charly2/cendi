<?php
/**
 * Created by PhpStorm.
 * User: CHARLY
 * Date: 08/04/2019
 * Time: 01:25 AM
 */
include_once '../modelos/Dao.php';
class PersonaModel
{
    private static $db = null;
    public function __construct()
    {
        $this->db = new Dao();
        $this->db->connect();
    }

    public function crear($num,$tipo){

        $result = $this->db->insert("persona",["null"],"idPersona");
        return $result;
    }




}