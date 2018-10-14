<?php 
	
defined('BASEPATH') OR exit('No direct script access allowed');


function create_user_session($user){
    $CI =& get_instance();
    $CI->session->set_userdata(array('user'=> $user));
}

function delete_user_session(){
    $CI =& get_instance();
    $CI->session->unset_userdata();
}
