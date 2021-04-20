<?php

class Users extends Controller{
    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function register(){
        //check for posts
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form

            //sanitize Post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            
            //Init data
        $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' =>trim($_POST['confirmPassword']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirmPassword_err' => ''
            ];

            //validate email
            if(empty($data['email'])){
                $data['email_err'] = 'Please enter email';
            }else{
                // check email
                if($this->userModel->findUserByEmail($data['email'])){
                     $data['email_err'] = 'Email is already taken';
                }
            }
            //validate name
            if(empty($data['name'])){
                $data['name_err'] = 'Please enter name';
            }
            //validate password
            if(empty($data['password'])){
                $data['password_err'] = 'Please enter password';
            } elseif(strlen($data['password'])< 6){  
                $data['password_err'] = 'Password must be at least 6 characters';
            }
            //validate confirm password
            if(empty($data['confirmPassword'])){
                $data['confirmPassword_err'] = 'Please enter confirm Password';
            }else{
                if($data['password'] !== $data['confirmPassword']){
                     $data['confirmPassword_err'] = 'passwords do not match';
                }
            }
            // Make sure errors are empty
            if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirmPassword_err'])){

                //validated
               
                //hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // register User
                if($this->userModel->register($data)){
                    flash('register_success', 'You are registered and can log in');
                   redirect('users/login');
                }else {  
                    die('Something went wrong');
                }
            }else{
                //load view with errors
                $this->view('users/register', $data);
            }
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

         //sanitize Post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            
            //Init data
        $data = [
                
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                
                'email_err' => '',
                'password_err' => '',
            ];

            //validate email
            if(empty($data['email'])){
                $data['email_err'] = 'Please enter email';
            }
            //validate password
            if(empty($data['password'])){
                $data['password_err'] = 'Please enter password';
            }
            // Make sure errors are empty
            if(empty($data['email_err']) && empty($data['password_err'])){

                //validated
                die('SUCCESS');
            }else{
                //load view with errors
                $this->view('users/login', $data);
            }
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