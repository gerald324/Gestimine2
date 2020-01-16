<?php
//$this->load->database();
class JefeTurno_Model extends CI_Model {
	public function getTunelesActuales(){
		$query = "SELECT t.id, t.nombre, t.seccion, t.area, ta.avance_req, ta.avance_real FROM tunel t 
					JOIN tunel_asignada ta ON ta.id_tunel = t.id
					WHERE t.estado = 'Trabajando' AND ta.id_turno = 1";
		$data = $this->db->query($query);
		$result = $data->result_array();

		return $result;
	}
}
?>
