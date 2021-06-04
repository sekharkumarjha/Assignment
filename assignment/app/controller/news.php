<?php 
    class News extends Controller{

        function index(){
            $DB = new Database();
            $data = $DB->read("select * from data_models where category = 'News'"); 
            $this->view('newsPage',$data);
         }
    }
?>