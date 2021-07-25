<?php
$data = $_POST;

if (empty($data['username']) ||
    empty($data['password']) ||
    empty($data['email']) ||
    empty($data['password_confirm'])) {
    
    exit('Please fill all required fields!');
}

if ($data['password'] !== $data['password_confirm']) {
   exit('Password and Confirm password should match!');   
} exit('Registration complete');