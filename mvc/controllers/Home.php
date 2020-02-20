<?php
    class Home extends Controller{
        function Index(){
            $trangHienTai = 1;
            $congTyMoiTrang = 1;
            if(isset($_GET["page"])){
                $trangHienTai = $_GET["page"];
            }
            $soCongTyBoQua = ($trangHienTai-1)*$congTyMoiTrang;
            // Model
            $congty = $this->model("CongTyModel");
            $review = $this->model("ReviewModel");
            // Tất cả công ty
            $tatCaCongTy = $congty->TatCaCongTy();
            $soCongTy = mysqli_num_rows($tatCaCongTy);
            $soTrang = ceil($soCongTy/$congTyMoiTrang);
            $congTyTrangHienTai = $congty->LayCongTyPhanTrang($soCongTyBoQua, $congTyMoiTrang);
            //View
            $this->view("main-template", ["Page"=>"main-home",
                "15ReviewMoiNhat" => $review->Lay15ReviewMoiNhat(),
                "SoTrang" => $soTrang,
                "TrangHienTai" => $trangHienTai,
                "SoCongTyTrangHienTai" => $congTyTrangHienTai
            ]);

        }
        
    }
?>