<?php

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('auth/login_rules','mainmenu'));
	}

	public function index(){
		$data['menu'] = getmainmenu();
		$this->load->view('page-login.php',$data);
	}

	public function validate(){
		$this->load->model('Usuarios_Model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$this->form_validation->set_error_delimiters('','');
		$rules = getLoginRules();
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() === FALSE){
			$errors = array(
				'rut' => form_error('rut'),
				'password' => form_error('password'));
				echo json_encode($errors);
				$this->output->set_status_header(400);
			/*$data['menu'] = getmainmenu();
			$this->load->view('page-login.php',$data);*/
		}else{
			echo json_encode(array('url' => base_url('Jefe_Turno/trabajadores')));
			//if(rol === 'PLANIFICADOR'){

			//}elseif (rol === 'JEFETURNO') {
				# code...
			//}else{

			//}

		}
	}

	public function alertas(){
		$this->load->model('Usuarios_Model','UM',true);
		$this->load->view('usuario_alerta.php');
	}
}
?>
