<?php
    Class Login extends Controller{
        function index(){
            $data['page_title'] = 'Login';
            return $this->view('login',$data);
        }
        function authenticate(){
            $user = $this->loadmodel('user');
            $user->login($_POST);
        }
    }
?>