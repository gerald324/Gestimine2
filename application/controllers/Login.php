<?php

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('auth/login_rules','mainmenu'));
		$this->load->model('Usuarios_Model','UM',true);
	}

	public function index(){
		$data['menu'] = getmainmenu();
		$this->load->view('page-login.php',$data);
	}

	public function validate(){
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
			$rut = $this->input->post('rut');
			$password = $this->input->post('password');
			$res = $this->UM->login($rut, $password);
			if(!$res){
				echo json_encode(array('msg' => 'Credenciales invalidas'));
				$this->output->set_status_header(401);
				exit;
			}
			$rol_usuario = array(
				'rol' => $res->rol
			);
			if($rol_usuario['rol'] == 'Jefe_Turno'){
				echo json_encode(array('url' => base_url('Jefe_Turno/trabajadores')));
				exit;
			}
			else if ($rol_usuario['rol'] == 'Perforador' or $rol_usuario['rol'] == 'Tronador'
				or $rol_usuario['rol'] == 'Transporte' or $rol_usuario['rol'] == 'Carguero'){
				//enviamos el parametro $rut al controlador Usuarios/tareas
				$segmentos_url = array('Usuarios','tareas',$rut);
				echo json_encode(array('url' => base_url($segmentos_url)));
				exit;
			}
			else if($rol_usuario['rol'] == 'Planificador'){
				echo json_encode(array('url' => base_url('Planificador/plan_minero')));
				exit;
			}
			echo json_encode(array('msg' => 'Ninguno'));
			$this->output->set_status_header(401);


		}
	}

	public function alertas(){
		$this->load->model('Usuarios_Model','UM',true);
		$this->load->view('usuario_alerta.php');
	}
}
?>
