<?php
class App{
    protected $controller="Home";
    protected $action="Index";
    protected $params=[];

    function __construct(){
        // 
        $arr = $this->UrlProcess();
        $classController = $this->UrlToClass($arr[0]);
        // Xu li Controller
        if(file_exists("./mvc/controllers/".$classController.".php")){
            $this->controller = $classController;
             //unset($classController);
        }
        require_once "./mvc/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;
        // Xu li Action
        if(isset($arr[1])){
            $actionToClass = $this->UrlToClass($arr[1]);
            if( method_exists($this->controller, $actionToClass) ){
                $this->action = $actionToClass;
            }
        }

        // Xu li Params
        $this->params = $arr?array_values($arr):[];
        
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    function UrlProcess(){
        if(isset($_GET["url"])){
            return explode("/",filter_var(trim($_GET["url"],"/")));
        }
       
    }
    
    function UrlToClass($url) {
        $arr1 = explode("-",$url);
        return implode("",array_map('ucfirst', $arr1));
    }
}
?>