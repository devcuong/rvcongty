<?php
    class Home extends Controller{
        function Index(){
            $congty = $this->model("CongTyModel");
            //echo $teo->GetSV();
            
            //View
            $this->view("main-template", ["Page"=>"main-home",
                "TatCaCongTy" => $congty->TatCaCongTy()]);

        }
        
    }
?>