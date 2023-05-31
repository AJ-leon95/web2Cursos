<?php 
class   Estudiante extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }
    function insertar_est($datos_est){
        
        return $this->db->insert("estudiantes", $datos_est);//paametros nombre de la bbdd este parametro ya ezta establecido y el array le pasamos 
        
    }
    //funcion de consulta 
    function obtenerEstudiante(){
        $listaEstudiantes= $this->db->get("estudiantes");
        if ($listaEstudiantes->num_rows()>0){
            return $listaEstudiantes->result();
        }else{
            return false;
        }
    }
    function borrar($id_est){
        $this->db->where("id_est",$id_est);///va el nombre de la tabla  en las "" y le pasamos le id
        //return $this->db->delete("instructor"); //esta linea hace lo mismo que el if  pero en una sola linea aqui le pasamos el nombre de la tabla
        if ($this->db->delete("estudiantes")){
            return true;
        } else {
            return false;
        }
        
     }


}






?>