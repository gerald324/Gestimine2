<?php

class PlanMinero_Model extends CI_Model {
	public function getAll(){
		$result = $this->db->get ('tunel');
		$tuneles = $result->result_array();
		return $tuneles;
	}
}
?>
