<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'objects/User.php');

class User_controller extends CI_Controller {
	
	public function index(){
		$this->load->view('public/shopping_basket_view');
		//$this->load->model('User_model');
		//$user = $this->User_model->get_users()[0];
	}

	public function login(){
		$this->load->model('User_model');
		$this->User_model->login("fernando@gmail.com","1234");
	}

	

}
