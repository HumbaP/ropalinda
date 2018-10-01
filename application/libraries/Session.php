<?php

require_once(APPPATH.'libraries/Security.php');
date_default_timezone_set('America/Mazatlan');

class Session{

	private $secret_key;
	private $login_date;
	private $user;

	function __construct($user){
		$this->secret_key = Security::key_generator();
		$this->login_date = date("Y-m-d H:i:s");
		$this->user = $user;
	}

	public function getDataAsArray(){
		$data = array('uuid' 	   => $this->user->uuid,
					  'secret_key' => $this->secret_key,
					  'login_date' => $this->login_date);
		return $data;
	}

}
	


?>