<?php
class Instructores extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        //carga el modelo
        $this->load->model('Instructor'); //aqui cargamos todos los modelos que necesitemos 
    }
    /* fincion que renderisa la vista index */
    public function index()
    {   
        $data['instructores']= $this->Instructor->obtenerTodos(); //en indes vamos a crear una variable que sera igual al lo q retorne el modelo Instructor en la funcion obtener todos que esta en el modelo 
        //data es un nombre comun es un array asociativo 100pre hay q pasarle asi con el mapeo se puerde $data y solo llega instructores             
        // print_r($instructores);
        $this->load->view('header');
        $this->load->view('instructores/index',$data);
        $this->load->view('footer');

    }
    /* funcion que renderisa la vista nuevo */
    public function nuevo()
    {

        $this->load->view('header');
        $this->load->view('instructores/nuevo');
        $this->load->view('footer');
    }
    //funcion guardar datos 
    public function guardar()
    {
        $datosNuevoInstructor = array(
            // en este array vamos a poner como codigo el nombre del atibuto de la base de datos  y en los paentesisis vamos a poner el name de fomulario
            "cedula_ins" => $this->input->post('cedula_ins'),
            "primer_apellido_ins" => $this->input->post('primer_apellido_ins'),
            "segundo_apellido_ins" => $this->input->post('segundo_apellido_ins'),
            "nombres_ins" => $this->input->post('nombres_ins'),
            "titulo_ins" => $this->input->post('titulo_ins'),
            "telefono_ins" => $this->input->post('telefono_ins'),
            "direccion" => $this->input->post('direccion'),
        );
        //hacemos un if donde vemos si la funcion insertar que viene desde el modelo este debe estar referenciado desde el controlados de este constructor
        if ($this->Instructor->insertar($datosNuevoInstructor)) {
            redirect('instructores/index');//sta funcion nos redirecciona a donde le indiquemos debemos llamar al mismo controlador y a la funcion index 
        }else{
            echo "<h1>Error al insertar</h1>"; //caso contrario me mostrara este mensaje 
        }
    }
    public function Eliminar($id_ins){
        if ($this->Instructor->borrar($id_ins)) {
            redirect("Instructores/index");
        } else {
            echo "no se pudo borar";
        }
        

    }
    


}//cierre de la clase