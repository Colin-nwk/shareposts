<?php

class Pages extends Controller{
    public function __construct() {
       
    }
    
    public function index(){

        if(isLoggedIn()){
            redirect('posts');
        }
        
        $data = [
            'title' => 'SharePosts',
            'description' => 'simple social network built on the custom PHP mvc framework'
        ];

        $this->view('pages/index', $data);
    }
    public function about(){
        $data = [
            'title' => 'About us',
            'description' => 'App to share posts with other users'
        ];
        $this->view('pages/about', $data);
    }
}