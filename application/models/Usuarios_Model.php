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

	public function buscarTareasDeTrabajador($rut){
		$query = "SELECT ta.avance_req, ta.trans_req, t.nombre, u.rol FROM usuario u 
					JOIN turno_usuario tu ON u.id_usuario = tu.id_usuario
					JOIN tunel_asignada ta ON tu.id_tunel = ta.id_tunel AND tu.id_turno = ta.id_turno
					JOIN tunel t ON t.id = ta.id_tunel
					WHERE u.rut = '$rut'";

		//La query funciona ahora que hay pocos datos, pero se necesita poblar la BD
		//Para poder corregir estos errores en la condicion
		$data = $this->db->query($query);
		$result = $data->result_array();

		return $result;
	}
}
?>
