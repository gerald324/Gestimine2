<?php

/*
 * Estoy trabajando en este controller, los cabros de la consultora me han ayudado
 * un poco pero les agradecería si alguno revisa documentación y mete mano,
 * total si queda la escoba se puede volver a alguna versión funcional con github
 * */
class Jefe_turno extends CI_Controller{

	/*
	 * Esta es la función predeterminada que se carga al entrar en jefe de turno en el navegador
	 * */
	public function index(){
		$this->load->model('JefeTurno_Model','UM',true);

		$datos['Tareas']=$this->UM->getTunelesActuales();

		$content_data = array(
			'tareas_jefeturno' => $datos['Tareas']
		);

		$this->load->view('jefe_turno_inicio.php',$content_data);
	}

	/*
	 * Si en la barra de navegación agregas el nombre de otra función de este controller,
	 * por ejemplo trabajadores, se carga la función con ese nombre
	 *
	 * */
	public function trabajadores(){
		$this->load->model('Usuarios_Model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		//set content data
		/*
		 * content_data es un arreglo que puede llenarse con los datos que hagan falta,
		 * el arreglo puede llevar de todo, luego se le pone un alias al dato, con el cual se referiran a los
		 * datos en la vista, luego se le pasa por parámetro a la vista cuando esta se carga (linea 46)
		 * */
		$content_data = array(
			'usuarios' => $datos['Usuarios']
		);
		$this->load->view('jefe_turno_trabajadores.php',$content_data);
	}

	public function alertas(){
		$this->load->view('jefe_turno_alerta.php');
	}
	public function update(){
		$this->load->model('JefeTurno_model','UM',true);
		for($i=0;$i<2;$i++){
			$avance_real = $_POST['avance_real'][$i];
			$id = $_POST['id'][$i];

			$datos = array(
				'avance_real' => $avance_real,
			);
			$this->UM->updateAvance($i + 1, $id, $datos);
		}
		$this->index();
	}
}
?>
