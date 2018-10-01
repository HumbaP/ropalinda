<?php

class User{

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
        $this->name= $data['name'];
        $this->last_name = $data['last_name'];
        $this->street = $data['street'];
        $this->second_street = $data['second_street'];
        $this->street_number = $data['street_number'];
        $this->zip_code = $data['zip_code'];
        $this->phone_number = $data['phone_number'];
        $this->email = $data['email'];
        $this->country = $data['country'];

        //Generate UUID
        $this->uuid= $this->gen_uuid();

        //Encode password
        $this->password = $this->encode_password($data['password']);

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

    //MARK: - Private
    private function gen_uuid() {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

            // 16 bits for "time_mid"
            mt_rand( 0, 0xffff ),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand( 0, 0x0fff ) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand( 0, 0x3fff ) | 0x8000,

            // 48 bits for "node"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }

    private function encode_password($p){
        return password_hash($p, PASSWORD_DEFAULT);
    }

    private function verify_password(){
        /*if(password_verify($password, $hashed_password)) {
            // If the password inputs matched the hashed password in the database
            // Do something, you know... log them in.
        }*/
    }

}



?>