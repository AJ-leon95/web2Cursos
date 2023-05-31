<?php 
class Estudiantes extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Estudiante');
    }
    public function index(){
        $data['estudiantes']= $this->Estudiante->obtenerEstudiante();
        $this->load->view('header');
        $this->load->view('estudiantes/index',$data);
        $this->load->view('footer');
    }
    public function nuevo(){
        $this->load->view('header');
        $this->load->view('estudiantes/nuevo');
        $this->load->view('footer');
    }

    public function guardar_est(){

        $datosNuevoEstudiante = array(
            "pimer_apellido_est" => $this->input->post('pimer_apellido_est'),
            "segundo_apellido_est" => $this->input->post('segundo_apellido_est'),
            "nombres_est" => $this->input->post('nombres_est'),
            "ciclo_est" => $this->input->post('ciclo_est'),
            "edad_est" => $this->input->post('edad_est'),
            "correo_est" => $this->input->post('correo_est'),
            "telefono_est" => $this->input->post('telefono_est'),

        );
        //vamos hacer un if 
        if ($this->Estudiante->insertar_est($datosNuevoEstudiante)) {
            redirect('estudiantes/index');
        }else{
            echo "<h1> Error al insertar datos en la tabla estudantes</h1>";
        }

        
    }
    public function Eliminar($id_est){
        if ($this->Estudiante->borrar($id_est)) {
            redirect("Estudiantes/index");
        } else {
            echo "no se pudo borar";
        }
        

    }


}



?>