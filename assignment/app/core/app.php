<?php

Class App{

    protected $controller = "home";
    protected $method = "index";
    protected $params = [];
    public function __construct()
    {
        $url = $this->splitURL();
        if(file_exists("../app/controller/".strtolower($url[0]).".php")){
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }
        require "../app/controller/".$this->controller.".php";
        $this->controller = new $this->controller;
        if(isset($url[1])){
            if(method_exists($this->controller,strtolower($url[1]))){
                $this->method = strtolower($url[1]);
                unset($url[1]);
            }
        }
        $this->params = array_values($url);
        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    private function splitURL(){
        $url = isset($_GET['url'])?$_GET['url']:'home';
        return explode("/",filter_var(trim($url,"/")),FILTER_SANITIZE_URL);
        
    }
}
?>