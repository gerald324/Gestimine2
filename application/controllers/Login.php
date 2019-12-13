<?php

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('auth/login_rules'));
	}

	public function index(){
		$this->load->view('page-login.php');
	}

	public function validate(){
		$this->load->model('Usuarios_Model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$rules = getLoginRules();
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() === FALSE){
			$this->load->view('page-login.php');
		}else{
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
