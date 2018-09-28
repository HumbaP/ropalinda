<?php

class User_model extends CI_Model {

        private $user;

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




/*

Ejemplo con User
// Controlador - User_controller
// Modelo - User_model
// Vistas - user_view, nav_view, profile_view
// Variables - una_variable_con_under_score
// Funciones - una_funcion()
// POO - User (nombre con CamelCase)


*/

?>


