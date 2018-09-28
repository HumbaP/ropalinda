<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	//MARK: - SetUp
	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
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
		$response = $this->login_model->try_login($email, $password);

		if($response == 'ok'){
			
		}
		else{
			//throws
		}

		//Login condition
        $this->load->view('registration');
	}	

}
	







?>