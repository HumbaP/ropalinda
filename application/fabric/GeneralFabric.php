<?php

require_once(APPPATH.'objects/Role.php');
require_once(APPPATH.'objects/Admin.php');
require_once(APPPATH.'libraries/Security.php');

class GeneralFabric {

    private $CI;

    public function __construct(){
        $this->CI=& get_instance();
    }

    public function save_permission($permission){
        
    }

    public function get_role_perm($role_id){
        $role = new Role();
        $statement =$this->CI->db->conn_id->prepare("select p.description as perm_desc from role_perm rp
        join permission p on rp.perm_id=p.id
        where rp.role_id=:role_id");
        $statement->execute(array(':role_id'=> $role_id));
        $permissions=[];
        while($row = $statement->fetch(PDO::FETCH_ASSOC)){
            $key = $row['perm_desc'];
            $permissions[$key] = true;
        }
        $role->set_permissions($permissions);
        return $role;
    }

    public function get_admins(){
        //check this shit
        $query = $this->CI->db->get('admin_user');
        return $query->result();
    }
    
    public function create_admin($admin,$role_id){
        $admin_statement = $this->CI->db->insert("admin_user ",$admin->getDataAsArray());
        //$admin_statement->execute($admin->getDataAsArray());
        //var_dump($admin);
        $admin->set_id($this->CI->db->insert_id());
        
        $role_admin = $this->CI->db->conn_id->prepare("insert into admin_role values(:admin_id,:role_id)");
        $role_admin->execute(array('admin_id'=> $admin->get_id(), 'role_id'=>$role_id));
        
        $role = $this->get_role_perm($role_id);
        $admin->set_role($role);

        return $admin;
    }

    public function get_role_admin_perm($user_id){
        $role = new Role();
        $statement =$this->CI->db->conn_id->prepare("select p.description as perm_desc from role_perm rp
        join permission p on rp.perm_id=p.id
        join admin_role ar on ar.admin_id =:user_id
        where rp.role_id=ar.role_id");
        $statement->execute(array('user_id'=>$user_id));
        $permissions=[];
        while($row = $statement->fetch(PDO::FETCH_ASSOC)){
            $key = $row['perm_desc'];
            $permissions[$key] = true;
        }
        $role->set_permissions($permissions);
        return $role;
    }

    public function get_admin_by_email($email, $password){
        $statement = $this->CI->db->conn_id->prepare("select * from admin_user where email=:email");
        $statement->execute(array(':email'=>$email));

        $result=$statement->fetchAll();
        
        if(!empty($result)){
            $hashed_password = $result[0]['pw'];
            if(Security::verify_password($password, $hashed_password)){
                $role = $this->get_role_admin_perm($result[0]['id']);
                var_dump($role);
                $admin = Admin::CreateAdminFromBD($result[0]['id'],$result[0]['name'],$result[0]['lastname'],$result[0]['email'],$result[0]['pw'],$role);
                return $admin;
            }
        }
        return false;
    }

    public function save_user($user){

    }

    public function create_session($user){
        $new_session = new Session($user);
        $session_statement = $this->CI->db->conn_id->prepare("INSERT INTO session VALUES(:uuid, :secret_key, :login_date)");

        $session_statement->execute($new_session->getDataAsArray());

        return $new_session;
    }


}