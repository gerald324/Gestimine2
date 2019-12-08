<?php

class Usuarios extends CI_Controller{
	public function index(){
		$this->load->model('Usuarios_Model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$this->load->view('usuario_inicio.php',$datos);
	}

	public function tareas(){
		$this->load->model('Usuarios_Model','UM',true);
		//revisar si se necesita otro modelo
		$datos['Usuarios']=$this->UM->getAll();
		$this->load->view('usuario_tareas.php',$datos);
	}

	public function alertas(){
		$this->load->model('Usuarios_Model','UM',true);
		$this->load->view('usuario_alerta.php');
	}
}
?>
