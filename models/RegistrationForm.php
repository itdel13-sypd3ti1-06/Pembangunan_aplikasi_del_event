<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class RegistrationForm extends CFormModel { 
// attributes 
// for bio 
public $first_name; 
public $last_name; 
public $address; 
public $email; 
public $date_of_birth; 
public $sex; 

// for credential 
public $username; 
public $password; 
public $repassword; 

// applied rules for validation 
public function rules() { 
    return array(
// safe attributes are assigned-able in all scenario types
            //first_name
            array('first_name', 'required'),
            array('first_name', 'length', 'min' => 1, 'max' => 16),
            //last_name
            array('last_name', 'length', 'min' => 1, 'max' => 16),
            //address
            array('address', 'length', 'min' => 1, 'max' => 64),
            //email
            array('email', 'required'),
            array('email', 'email'),
            //date
            array('date_of_birth', 'date', 'format' => 'yyyy-mm-dd'),
            //username
            array('username', 'required'),
            //password
            array('password', 'required'),
            //repassword
            array('repassword', 'required'),
            array('username', 'length', 'min' => 1, 'max' => 16),
            array('password', 'compare', 'compareAttribute' => 'repassword', 'on' => 'register')
        );
    } 

// sets attribute labels for view labeling 
public function attributeLabels() { 
    return array( 
        'first_name' => 'First name', 
        'last_name' => 'Last name', 
        'address' => 'Address', 
        'email' => 'Email', 
        'date_of_birth' => 'Date of birth (yyyy-mm-dd)', 
        'sex' => 'Sex (m/f)', 
        'username' => 'Username', 
        'password' => 'Password', 
        'repassword' => 'Retype password', 
    ); 
   } 
} 
?>