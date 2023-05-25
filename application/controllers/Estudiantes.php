<?php 
class Estudiantes extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Estudiante');
    }
    public function index(){
        $this->load->view('header');
        $this->load->view('estudiantes/index');
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
        $this->Estudiante->insertar_est($datosNuevoEstudiante);

        
    }


}



?>