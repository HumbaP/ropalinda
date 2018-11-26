<?php


function checkUserRegister($input){
    $data['name']= $input->post('name');
    $data['last_name']= $input->post('lastname');
    $data['street']= $input->post('street');
    $data['second_street']=$input->post('second_street');
    $data['street_number']= $input->post('street_number');
    $data['zip_code']= $input->post('zip_code');
    $data['phone_number'] = $input->post('phone_number');
    $data['email']= $input->post('email');
    $data['password'] = $input->post('password');
    $data['country'] = $input->post('country');

    return $data;
}