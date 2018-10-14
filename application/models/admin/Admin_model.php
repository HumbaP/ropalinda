<?php

require_once(APPPATH.'fabric/GeneralFabric.php');
require_once(APPPATH.'objects/Admin.php');
class Admin_model extends CI_Model{

    private $generalFabric;

    public function __construct(){
        parent::__construct();
        $this->load->helper('session_helper');
        $this->generalFabric = new GeneralFabric();
    }


    public function login($input){
        $email=$input->post('email');
        $password=$input->post('password');
        $admin =$this->generalFabric->get_admin_by_email($email,$password);
        if($admin){
            create_user_session($admin);
            return $admin;
        }
        return false;
    }

    public function create_admin($input){
        $name = $input->post('name');
        $lastname = $input->post('lastname');
        $email = $input->post('email');
        $role_id = $input->post('role_id');
        $password = $input->post('password');
        $new_admin = Admin::CreateNewAdmin($name,$lastname,$email,$password);
        $this->generalFabric->create_admin($new_admin,$role_id);
        var_dump($new_admin);
    }

    public function get_admins(){
        $user_list = $this->generalFabric->get_admins();
        
        return $user_list;
    }
}