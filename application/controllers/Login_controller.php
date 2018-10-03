<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller{

	//MARK: - SetUp
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('login_view');
	}


	//MARK: - Actions
	public function try_login(){ 
		$email = $this->input->post('email'); 
		$password = $this->input->post('password');
		$this->load->model('User_model');
		//Call the validator helper

		$user= $this->User_model->login($email,$password);
		//Call model method
		$view_to_load = 'registration';
		if($user!=null){
			$view_to_load = 'home_';
			$_SESSION['user']=$useviewr;
		}
		//$_SESSION['session']=;
		//Login condition
        $this->load->view($view_to_load);
	}	


}
	







?>