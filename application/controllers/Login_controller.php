<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller{

	//MARK: - SetUp
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('Login_view');
	}


	//MARK: - Actions
	public function try_login(){ 
		$email = $this->input->post('regButton'); 
		$password = $this->input->post('regButton');

		//Call the validator helper


		//Call model method
		$response = 'ok';
		$view_to_load = 'registration';

		if($response == 'ok'){
			$view_to_load = 'home_view';
		}
		else{
			$view_to_load = '';
		}

		//Login condition
        $this->load->view($view_to_load);
	}	

}
	







?>