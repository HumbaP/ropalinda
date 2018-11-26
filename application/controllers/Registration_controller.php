<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'objects/User.php');

class Registration_controller extends CI_Controller {

	//MARK: - SetUp 
	public function __construct(){
		parent::__construct();
		if(isset($_SESSION['user'])){
			session_write_close();
			redirect('/');
		}else{
			session_write_close();
		}

	}

	public function index(){
		//Esos datos los mostramos en la vista
		$this->load->view('public/registration_view');
	}

	//MARK: - Actions
	public function register(){
		$this->load->helper('Input_helper');	
		$data= checkUserRegister($this->input);
		var_dump($data);
		
		$new_user = new User($data); //new User(User::offline_data());
		$this->load->model('user_model');
		//$input = $this->input;
		//$this->user_model->try($input);
		
		$user_created= $this->user_model->create($new_user);
		if($user_created){
			
		}
		//Validation
		// redirect('/');
	}

}
