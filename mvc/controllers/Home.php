<?php
    class Home extends Controller{
        function Index(){
            //View
            $this->view("main-template", ["Page"=>"main-home"]);
        }
        
    }
?>