<?php

require_once(APPPATH.'libraries/Session.php');
require_once(APPPATH.'libraries/Security.php');
require_once(APPPATH.'libraries/User.php');

class User_model extends CI_Model {


    //Esta función crea un usuario, en caso de éxito regresa true, de lo contrario false.
    public function create($user){
        $user_to_array = (array) $user;
        $reg_statement = $this->db->conn_id->prepare("INSERT INTO user VALUES(:uuid, :name, :last_name, :street, :second_street, :street_number, :zip_code, :phone_number, :email, :password, :status, :country)");
        $reg_statement->execute($user_to_array);

        if($reg_statement->rowCount() == 1){
            $this->build_session($user);
            session_start();
            $user->password = "";//Hide password
            $user->uuid = ""; //Hide the UUID
            $_SESSION['user']=$user;
            session_write_close();
            return true;
        }
        return false;

    }

    //Regresa true si la combinación email password es correcta.
    public function login($email, $password){
        $data["email"] = $email;

        $reg_statement = $this->db->conn_id->prepare("SELECT * FROM user WHERE email=:email");
        $reg_statement->execute($data);

        $results = $reg_statement->fetch(PDO::FETCH_ASSOC);
        $hashed_password = $results["password"];

        if(Security::verify_password($password, $hashed_password)){

            $new_user = new stdClass();
            foreach ($results as $key => $value){
                $new_user->$key = $value;
            }   
            $new_user->password = "";//Hide password
            $this->build_session($new_user);
            $new_user->uuid = ""; //Hide the UUID

            //USE COOKIES TO SAVE THE USER DATA
            session_start();
            $_SESSION['user']=$new_user;
            session_write_close();
            return true;

        }
        else {
            return null;
        }
    }

    private function build_session($user){
        $new_session = new Session($user);
        $session_statement = $this->db->conn_id->prepare("INSERT INTO session VALUES(:uuid, :secret_key, :login_date)");

        $session_statement->execute($new_session->getDataAsArray());

        //USE COOKIES TO SAVE SESSION
        session_start();
        $_SESSION['key']=$new_session->getDataAsArray();
        session_write_close();
    }

    public function validate_session(){
        
    }


}   

?>


