<?php

class Usuarios extends CI_Controller{
	public function index(){
		$this->load->model('Usuarios_Model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$this->load->view('usuario_inicio.php',$datos);
	}

	public function tareas($rut){
		$this->load->model('Usuarios_Model','UM',true);
		//revisar si se necesita otro modelo
		$datos['Usuarios']=$this->UM->buscarTareasDeTrabajador($rut);
		// el metodo buscarTareasDeTrabajador retorna un arreglo con los parametros
		// avance requerido por turno, transporte requerido por turno
		// nombre del tunel y rol del trabajador (avance_req, trans_req, nombre, rol)
		$content_data = array(
			'tareas_turno' => $datos['Usuarios']
		);

		$this->load->view('usuario_tareas.php',$content_data);
	}

	public function alertas(){
		$this->load->model('Usuarios_Model','UM',true);
		$this->load->view('usuario_alerta.php');
	}
}
?>
