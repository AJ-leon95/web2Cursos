<?php
class Instructor extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    // funcion para insertar un instructor
    function insertar($datos)
    {
        // active record -> codeigniter
        //sql inyeccion
        return $this->db->insert("instructor", $datos);//paametros nombre de la bbdd este parametro ya ezta establecido y el array le pasamos 
    }

    //funcion de consulta de datos de la base de datos 
    function obtenerTodos(){ //creamos una funcion 
        $listadoIstructores= $this->db->get("instructor"); //creamos un array asociativo 
        if ($listadoIstructores->num_rows()>0) {
            return $listadoIstructores->result();
        }
        return false;
     } //despues vamos al controlador  ala funcion index




}//cierre de la clase
