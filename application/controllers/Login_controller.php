<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller{

	//MARK: - SetUp
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		session_start();
		if(isset($_SESSION['user'])){
			session_write_close();
			redirect('/');
		}else{
			session_write_close();
			$this->load->view('login_view');
		}
	}


	//MARK: - Actions
	public function try_login(){ 
		session_start();
		if(isset($_SESSION['user'])){
			session_write_close();
			redirect('/');
		}
		$email = $this->input->post('email'); 
		$password = $this->input->post('password');
		$this->load->model('User_model');
		//Call the validator helper
		$user= $this->User_model->login($email,$password);
		//Call model method
		$view_to_load = 'registration_view';
		if($user!=null){
			$_SESSION['user']=$user;
			redirect('/');
		}
		//$_SESSION['session']=;
		//Login condition
		session_write_close();
        $this->load->view($view_to_load);
	}	

	public function logout(){
		session_start();
		session_destroy();
		redirect('/');
	}


}
	







?>