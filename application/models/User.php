<?php

class User extends CI_Model {

        private $uuid;
        private $password;
        private $status;
        private $name;
        private $lastname;
        private $street;
        private $second_street;
        private $street_number;
        private $zip_code;
        private $phone_number;
        private $email;
        private $country;

        //Función de prueba
        public function get_user_by_uuid(){
                return "FAKE UUID: 13r235334r43324";
        }

        //Retrieve data
        public function get_fullname(){
                return $name." ".$lastname;
        }

        //Desde modelo también podemos acceder a la base de datos.
        public function update_status_to($newStatus){
                
        }

}



?>