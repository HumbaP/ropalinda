<?php
class User_model extends CI_Model {
	public $uuid;
	public $name;
	public $last_name;
	public $email;
	public $password;
	public $rol;

	public function get_users(){
		$query= $this->db->get('superuser');
		return $query->result();
	}
}