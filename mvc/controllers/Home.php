<?php
    class Home extends Controller{
        function Index(){
            $congty = $this->model("CongTyModel");
            $review = $this->model("ReviewModel");
            //echo $teo->GetSV();
            
            //View
            $this->view("main-template", ["Page"=>"main-home",
                "TatCaCongTy" => $congty->TatCaCongTy(),
                "15ReviewMoiNhat" => $review->Lay15ReviewMoiNhat()
            ]);

        }
        
    }
?>