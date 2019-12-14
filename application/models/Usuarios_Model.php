<?php
//$this->load->database();
class Usuarios_Model extends CI_Model {

	public function getAll(){
		$result = $this->db->get ('usuario');
		$users = $result->result_array();
		return $users;
	}
}
?>
