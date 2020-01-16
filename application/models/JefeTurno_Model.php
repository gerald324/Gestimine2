<?php
//$this->load->database();
class JefeTurno_Model extends CI_Model {
	public function getTunelesActuales(){
		$query = "SELECT t.id, t.nombre, t.seccion, t.area, t.estado FROM tunel t WHERE estado = 'Trabajando'";
		$data = $this->db->query($query);
		$result = $data->result_array();

		return $result;
	}
}
?>
