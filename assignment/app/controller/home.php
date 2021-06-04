<?php
    class Home extends Controller{

        function index(){
            $user = $this->loadmodel('user');
            if(!$result = $user->check_logged_in()){
                header("Location:". ROOT . "login");
				die;
            }
            $DB = new Database();
            $benifits = $DB->read("select * from data_models where category = 'Benifits'");
            $updates = $DB->read("select * from data_models where category = 'Updates' limit 3");
            $services = $DB->read("select * from data_models where category = 'Services'");
            $news = $DB->read("select * from data_models where category = 'News' limit 3");
            $data['benifits'] =$benifits;
            $data['updates'] =$updates;
            $data['services']= $services;
            $data['news']= $news;
            $this->view('home',$data);
        }
       
    }
?>