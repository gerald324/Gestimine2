<?php

class Planificador extends CI_Controller{

	public function index(){
		$this->load->model('Usuarios_Model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$content_data = array(
			'usuarios' => $datos['Usuarios']
		);
		$this->load->view('planificador_datos_mina.php');
	}

	public function plan_minero(){
		$this->load->model('PlanMinero_model','UM',true);
		$data['Tuneles']=$this->UM->getAll();

		$id = '1';
		$fecha = '2019';


			$datos['Tuneles']=$this->UM->getAvanceEnTunel($id, $fecha);
				$contenido_datos = array(
					'tunel_avance' => $datos['Tuneles']
				);

		$this->load->view('planificador_plan_minero.php',$contenido_datos);
	}

	public function carguio(){
		$this->load->model('PlanMinero_model','UM',true);
		$data['Tuneles']=$this->UM->getAll();

		$id = '1';
		$fecha = '2019';


		$datos['Tuneles']=$this->UM->getAvanceEnTunel($id, $fecha);
		$contenido_datos = array(
			'tunel_avance' => $datos['Tuneles']
		);

		$this->load->view('planificador_plan_carguio.php',$contenido_datos);
	}

	public function cronograma(){
		$this->load->model('Usuarios_model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$content_data = array(
			'usuarios' => $datos['Usuarios']
		);
		$this->load->view('planificador_plan_cronograma.php');
	}

	public function perforacion(){
		$this->load->model('PlanMinero_model','UM',true);
		$data['Tuneles']=$this->UM->getAll();

		$id = '1';
		$fecha = '2019';


		$datos['Tuneles']=$this->UM->getAvanceEnTunel($id, $fecha);
		$contenido_datos = array(
			'tunel_avance' => $datos['Tuneles']
		);

		$this->load->view('planificador_plan_perforacion.php',$contenido_datos);
	}

	public function transporte(){
		$this->load->model('PlanMinero_model','UM',true);
		$data['Tuneles']=$this->UM->getAll();

		$id = '1';
		$fecha = '2019';


		$datos['Tuneles']=$this->UM->getAvanceEnTunel($id, $fecha);
		$contenido_datos = array(
			'tunel_avance' => $datos['Tuneles']
		);

		$this->load->view('planificador_plan_transporte.php',$contenido_datos);
	}

	public function tronadura(){
		$this->load->model('PlanMinero_model','UM',true);
		$data['Tuneles']=$this->UM->getAll();

		$id = '1';
		$fecha = '2019';


		$datos['Tuneles']=$this->UM->getAvanceEnTunel($id, $fecha);
		$contenido_datos = array(
			'tunel_avance' => $datos['Tuneles']
		);

		$this->load->view('planificador_plan_tronadura.php',$contenido_datos);
	}

	public function datos_mina(){
		$this->load->model('Usuarios_model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$content_data = array(
			'usuarios' => $datos['Usuarios']
		);
		$this->load->view('planificador_datos_mina.php');
	}

	public function alertas(){
		$this->load->model('Usuarios_model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$content_data = array(
			'usuarios' => $datos['Usuarios']
		);
		$this->load->view('planificador_alerta.php');
	}

	public function editar(){
		//cambiar modelo por modelo del plan minero
		$this->load->model('Usuarios_model', 'UM', true);
		$datos['Usuarios']=$this->UM->getAll();
		$content_data = array(

		);
		$this->load->view('editar_plan.php');
	}
}
