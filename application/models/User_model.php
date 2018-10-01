<?php

require_once(APPPATH.'libraries/Session.php');

class User_model extends CI_Model {


    //Esta función crea un usuario, en caso de éxito regresa 1, de lo contrario 0.
    public function create($user){
        $user_to_array = (array) $user;
        $reg_statement = $this->db->conn_id->prepare("INSERT INTO user VALUES(:uuid, :name, :last_name, :street, :second_street, :street_number, :zip_code, :phone_number, :email, :password, :status, :country)");
        $reg_statement->execute($user_to_array);

        if($reg_statement->rowCount() == 1){
            $this->build_session($user);
            return true;
        }
        return false;

    }

    public function login($email, $password){
        
    }

    public function build_session($user){
        $new_session = new Session($user);
        $session_statement = $this->db->conn_id->prepare("INSERT INTO session VALUES(:uuid, :secret_key, :login_date)");

        $session_statement->execute($new_session->getDataAsArray());
    }

    public function validate_session(){
        
    }


}   

?>


