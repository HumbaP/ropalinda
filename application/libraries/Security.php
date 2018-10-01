<?php


class Security{

	//Regresa un uuid 
    public static function gen_uuid() {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

            // 16 bits for "time_mid"
            mt_rand( 0, 0xffff ),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand( 0, 0x0fff ) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand( 0, 0x3fff ) | 0x8000,

            // 48 bits for "node"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }

    //Regresa una contraseña cifrada
    public static function encode_password($p){
        return password_hash($p, PASSWORD_DEFAULT);
    }

    //Regresa un booleano que indica si la contraseña es correcta
    public static function verify_password($p, $hashed_password){
        if(password_verify($p, $hashed_password)) {
         	return true;
        }
        return false;
    }

    //Regresa una llave para la sesión del usuario
    public static function key_generator(){
        return password_hash(uniqid(), PASSWORD_DEFAULT);
    }

}

?>