<?php

class Permission_controller extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('admin/Admin_model','admin');

    }

    public function index(){
        $admin=$this->admin->login($this->input);
        if($admin){
            var_dump($admin);
        }
        else echo "AH?";
    }

    public function create(){
        $input = $this->input;

        $new_admin = $this->admin->create_admin($input);

    }

    public function update(){

    }
    
    public function delete(){

    }
}