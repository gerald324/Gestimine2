<?php
//$this->load->database();
class Usuarios_Model extends CI_Model {

	public function getAll(){
		$result = $this->db->get ('usuario');
		$users = $result->result_array();
		return $users;
	}

	public function login($rut,$password){
		$data = $this->db->get_where('usuario', array('rut' => $rut, 'password' => $password),1);
		if (!$data->result()){
			return false;
		}
		return $data->row();
	}
}
?>
