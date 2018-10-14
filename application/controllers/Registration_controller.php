<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'objects/User.php');

class Registration_controller extends CI_Controller {

	//MARK: - SetUp 
	public function __construct(){
		parent::__construct();
		session_start();
		if(isset($_SESSION['user'])){
			session_write_close();
			redirect('/');
		}else{
			session_write_close();
		}

	}

	public function index(){
		//Esos datos los mostramos en la vista
		$this->load->view('registration_view');
	}

	//MARK: - Actions
	public function register(){
		$data['name']= $this->input->post('name');
		$data['last_name']= $this->input->post('lastname');
		$data['street']= $this->input->post('street');
		$data['second_street']=$this->input->post('second_street');
		$data['street_number']= $this->input->post('street_number');
		$data['zip_code']= $this->input->post('zip_code');
		$data['phone_number'] = $this->input->post('phone_number');
		$data['email']= $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['country'] = $this->input->post('country');

		
		$new_user =new User($data); //new User(User::offline_data());
		$this->load->model('user_model');
		//$input = $this->input;
		//$this->user_model->try($input);
		
		$user_created= $this->user_model->create($new_user);
		if($user_created){
			
		}
		//Validation
		redirect('/');
	}

}
