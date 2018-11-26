<?php

require_once(APPPATH.'libraries/Security.php');

class User{
    //To do
	public $uuid;
    public $name;
    public $last_name;
    public $street;
    public $second_street;
    public $street_number;
    public $zip_code;
    public $phone_number;
    public $email;
    public $password;
    public $status;
    public $country;

    function __construct($data){
        //General information
        $this->name = $data['name'];
        $this->last_name = $data['last_name'];
        $this->street = $data['street'];
        $this->second_street = $data['second_street'];
        $this->street_number = $data['street_number'];
        $this->zip_code = $data['zip_code'];
        $this->phone_number = $data['phone_number'];
        $this->email = $data['email'];
        $this->country = $data['country'];

        //Generate UUID
        $this->uuid = Security::gen_uuid();

        //Encode password
        $this->password = Security::encode_password($data['password']);

        //Set status to pending approval.
        // A = Acepted. NA = Not Accepted. PA = Pending approval
        $this->status = 'PA';

    }

    //MARK: - Public
    public static function offline_data(){
        $data['name'] = "Fernando";
        $data['last_name'] = "Rivera";
        $data['street'] = "Río de las flores";
        $data['second_street'] = "Col. Santa de las Lomas";
        $data['street_number'] = "410";
        $data['zip_code'] = "80120";
        $data['phone_number'] = "6671040412";
        $data['email'] = "fernando@gmail.com";
        $data['password'] = "1234";
        $data['country'] = "MXN";
        return $data;
    }

}



?>