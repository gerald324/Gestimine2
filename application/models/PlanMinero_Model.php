<?php

class PlanMinero_Model extends CI_Model {
	public function getAll(){
		$result = $this->db->get ('tunel');
		$tuneles = $result->result_array();
		return $tuneles;
	}

	public function getAvanceEnTunel($id, $fecha){
		$query = "SELECT ta.id_tunel, t.nombre, t.seccion, t.area, t.largo_total, SUM(avance_real) AS suma_avance 
					FROM tunel_asignada ta 
					JOIN tunel t ON t.id = ta.id_tunel 
					GROUP BY ta.id_tunel";

		//La query funciona ahora que hay pocos datos, pero se necesita poblar la BD
		//Para poder corregir estos errores en la condicion
		$data = $this->db->query($query);
		$result = $data->result_array();

		return $result;
	}
}
?>
