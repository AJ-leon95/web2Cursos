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

     function borrar($id_ins){
        $this->db->where("id_ins",$id_ins);///va el nombre de la tabla  en las "" y le pasamos le id
        //return $this->db->delete("instructor"); //esta linea hace lo mismo que el if  pero en una sola linea aqui le pasamos el nombre de la tabla
        if ($this->db->delete("instructor")){
            return true;
        } else {
            return false;
        }
        
     }
   

}//cierre de la clase

