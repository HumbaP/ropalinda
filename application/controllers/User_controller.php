<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'libraries/User.php');

class User_controller extends CI_Controller {
	
	public function index(){
		$this->load->model('User_model');
		$user = $this->User_model->get_users()[0];
		echo $user->name;
	}

	

}
