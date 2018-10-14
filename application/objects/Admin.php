<?php


require_once(APPPATH.'libraries/Security.php');

class Admin{
    public $id;
    public $name;
    public $lastname;
    public $email;
    private $password;
    public $role;


    public static function CreateAdminFromBD($id,$name,$lastname,$email,$password, $role){
        $admin = new Admin();
        $admin->id = $id;
        $admin->name = $name;
        $admin->lastname = $lastname;
        $admin->email = $email;
        $admin->password = $password;
        $admin->role = $role;
        return $admin;
    }

    public static function CreateNewAdmin($name, $lastname, $email, $password){
        $admin = new Admin();
        $admin->name = $name;
        $admin->lastname = $lastname;
        $admin->email = $email;
        $admin->password = Security::encode_password($password);
        return $admin;
    }

    public function set_id($id){
        $this->id = $id;
    }
    public function get_id(){
        return $this->id;
    }
    public function set_role($role){
        $this->role = $role;
    }

    public function getDataAsArray(){
        return array(
            'name'=> $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'pw' => $this->password
        );
    }
}