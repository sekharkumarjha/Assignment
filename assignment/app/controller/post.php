<?php
    class Post extends Controller{

        function index(){
           $DB = new Database();
           $data = $DB->read("select * from data_models where category = 'Updates'"); 
           $this->view('postPage',$data);
        }
        
    }
?>