<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {
	
	public function index(){
		$this->load->model('User_model');
		$user = $this->User_model->get_users()[0];
		echo $user->name;
	}

	public function register(){
		$name= $this->input->post('name');
		$last_name= $this->input->post('lastname');
		$street= $this->input->post('street');
		$second_street=$this->input->post('second_street');
		$street_number= $this->input->post('street_number');
		$zip_code= $this->input->post('zip_code');
		$phone_number = $this->input->post('phone_number');
		$email= $this->input->post('email');
		$password = $this->input->post('password');
		$country = $this->input->post('country');
	}

	
}
