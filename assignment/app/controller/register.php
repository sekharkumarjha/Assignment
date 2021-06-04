<?php
    Class Register extends Controller{
        function index(){
            $data['page_title'] = 'Sign Up';
            return $this->view('register',$data);
        }

        function saveUser(){
            $user = $this->loadmodel('user');
            $user->signup($_POST);
        }

    }
?>