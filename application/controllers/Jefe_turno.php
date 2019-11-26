<?php

class Jefe_turno extends CI_Controller{

	public function inicio(){
		$this->load->view('jefe_turno_inicio.php');
	}

	public function trabajadores(){
		$this->load->view('jefe_turno_trabajadores.php');
	}
}
?>
