<?php

class Registro extends CI_Controller{

	public function __construct(){
		parent::__construct();
		//$this->load->library('form_validation');
		$this->load->helper(array('mainmenu'));
	}

	public function index(){
		$data['menu'] = getmainmenu();
		$this->load->view('page-register.php',$data);
	}
}
?>
