<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	

	public function index()
	{
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
