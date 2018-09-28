<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	// Constructor 
	public function __construct(){
		parent::__construct();
	}

	// Método default
	public function index(){
		//Esos datos los mostramos en la vista
		$this->load->view('Home_view');
	}

}
