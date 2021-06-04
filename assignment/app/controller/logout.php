<?php

    Class logout extends Controller{

        function index(){
            $user = $this->loadmodel('user');
            $user->logout();
        }
    }
?>