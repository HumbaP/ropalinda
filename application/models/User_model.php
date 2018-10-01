<?php


class User_model extends CI_Model {

    //Desde modelo también podemos acceder a la base de datos.
    public function create($user){
        
        $user_to_array = (array) $user;
        echo var_dump($user_to_array);

        $statement = $this->db->conn_id->prepare("INSERT INTO user VALUES(:uuid, :name, :last_name, :street, :second_street, :street_number, :zip_code, :phone_number, :email, :password, :status, :country)");

        $statement->execute($user_to_array);

        echo "<br><br><br>";
        print_r($statement->errorInfo());

    }



}

?>


