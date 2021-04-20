<?php

class Users extends Controller{
    public function __construct(){

    }

    public function register(){
        //check for posts
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        }else{
            //Init data
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirmPassword' =>'',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirmPassword_err' => ''
            ];

            // load view
            $this->view('users/register', $data);
        }
    }
    public function login(){
        //check for posts
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        }else{
            //Init data
            $data = [    
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''
            ];

            // load view
            $this->view('users/login', $data);
        }
    }
}