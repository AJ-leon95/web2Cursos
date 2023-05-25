<?php 
class Estudiante extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }
    function insertar_est($datos_est){
        
        return $this->db->insert("estudiantes", $datos_est);//paametros nombre de la bbdd este parametro ya ezta establecido y el array le pasamos 
        
    }


}






?>