<?php

class Admin_controller extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('admin/Admin_model','admin');
    }

    public function index(){    
        $this->load->view('admin_registration_home_view');
    }

    public function create(){
        $input = $this->input;
        $new_admin = $this->admin->create_admin($input);
    }

    public function update(){

    }
    
    public function delete(){

    }
    
    public function admin_list(){
        $admin_list = $this->admin->get_admins();
        echo json_encode($admin_list);
    }

    public function login(){
        $admin=$this->admin->login($this->input);
        if($admin){
            echo json_encode($admin);
        }
        else echo "AH?";
    }
}