<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'libraries/User.php');

class User_controller extends CI_Controller {
	
	public function index(){
		$this->load->model('User_model');
		$user = $this->User_model->get_users()[0];
		echo $user->name;
	}

	public function register($name){
		$data['name']= $name;//$this->input->post('name');
		/*$data['last_name']= $this->input->post('lastname');
		$data['street']= $this->input->post('street');
		$data['second_street']=$this->input->post('second_street');
		$data['street_number']= $this->input->post('street_number');
		$data['zip_code']= $this->input->post('zip_code');
		$data['phone_number'] = $this->input->post('phone_number');
		$data['email']= $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['country'] = $this->input->post('country');
*/
		$user = new User($data);
		echo $user->name;
	}

	
}
