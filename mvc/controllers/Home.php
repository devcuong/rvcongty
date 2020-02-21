<?php
    class Home extends Controller{
        function Index(){
            $trangHienTai = 1;
            $congTyMoiTrang = 10;
            $tabCongTy="latest";
            if(isset($_GET["page"])){
                $trangHienTai = $_GET["page"];
            }
            if(isset($_GET["tab"])){
                $tabCongTy = $_GET["tab"];
            }
            $soCongTyBoQua = ($trangHienTai-1)*$congTyMoiTrang;
            // Model
            $congty = $this->model("CongTyModel");
            $review = $this->model("ReviewModel");
            // Tất cả công ty
            $tatCaCongTy = $congty->TatCaCongTy();
            $soCongTy = mysqli_num_rows($tatCaCongTy);
            $soTrang = ceil($soCongTy/$congTyMoiTrang);
            $congTyTrangHienTai="";
            if($tabCongTy == "latest"){
            $congTyTrangHienTai = $congty->LayCongTyPhanTrang($soCongTyBoQua, $congTyMoiTrang);
            }else if($tabCongTy == "best"){
                $congTyTrangHienTai=$congty->LayCongTyBestPhanTrang($soCongTyBoQua, $congTyMoiTrang);
            }else if($tabCongTy == "worst"){
                $congTyTrangHienTai=$congty->LayCongTyWorstPhanTrang($soCongTyBoQua, $congTyMoiTrang);
            }
            //View
            $this->view("main-template", ["Page"=>"main-home",
                "15ReviewMoiNhat" => $review->Lay15ReviewMoiNhat(),
                "SoTrang" => $soTrang,
                "TrangHienTai" => $trangHienTai,
                "CongTyTrangHienTai" => $congTyTrangHienTai,
                "TabCongTy" => $tabCongTy
            ]);
        }
        
    }
?>