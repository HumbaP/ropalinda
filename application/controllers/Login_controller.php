<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller{

	//MARK: - SetUp
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		if(isset($_SESSION['user'])){
			session_write_close();
			redirect('/');
		}else{
			session_write_close();
			$this->load->view('public/login_view');
		}
	}


	//MARK: - Actions
	public function try_login(){ 
		session_start();
		if(isset($_SESSION['user'])){
			session_write_close();
			redirect('/');
		}
		session_write_close();
		$email = $this->input->post('email'); 
		$password = $this->input->post('password');
		$this->load->model('User_model');
		//Call the validator helper
		$loged_in= $this->User_model->login($email,$password);
		//Call model method
		if($loged_in){
			redirect('/');
		}
		$this->load->view('public/registration_view');
		
	}	

	public function logout(){
		//Change this to model & change session table
		session_start();
		session_destroy();
		redirect('/');
	}


}
	







?>