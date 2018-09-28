<?php

class User{
	public $uuid;
    public $password;
    public $status;
    public $name;
    public $lastname;
    public $street;
    public $second_street;
    public $street_number;
    public $zip_code;
    public $phone_number;
    public $email;
    public $country;

    function __construct($data){
        $this->name= $data['name'];
/*
    	$this->uuid= $data['uuid'];
        $this->password = $data['password'];
        $this->status = $data['status'];
        $this->lastname = $data['lastname'];
        $this->street = $data['street'];
        $this->second_street = $data['second_street'];
        $this->zip_code = $data['zip_code'];
        $this->phone_number = $data['phone_number'];
        $this->email = $data['email'];
        $this->country = $data['country'];
  */}

}



?>