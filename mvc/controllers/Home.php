<?php

class Home extends Controller
{

    function Index($a = NULL)
    {
        if ($a == NULL) {
            $trangHienTai = 1;
            $congTyMoiTrang = 15;
            $tabCongTy = "latest";
            if (isset($_GET["page"])) {
                $trangHienTai = $_GET["page"];
            }
            if (isset($_GET["tab"])) {
                $tabCongTy = $_GET["tab"];
            }
            $soCongTyBoQua = ($trangHienTai - 1) * $congTyMoiTrang;
            // Model
            $congty = $this->model("CongTyModel");
            $review = $this->model("ReviewModel");
            // Tất cả công ty
            $tatCaCongTy = $congty->TatCaCongTy();
            $soCongTy = mysqli_num_rows($tatCaCongTy);
            $soTrang = ceil($soCongTy / $congTyMoiTrang);
            $congTyTrangHienTai = "";
            if ($tabCongTy == "latest") {
                $congTyTrangHienTai = $congty->LayCongTyPhanTrang($soCongTyBoQua, $congTyMoiTrang);
            } else 
                if ($tabCongTy == "best") {
                    $congTyTrangHienTai = $congty->LayCongTyBestPhanTrang($soCongTyBoQua, $congTyMoiTrang);
                } else 
                    if ($tabCongTy == "worst") {
                        $congTyTrangHienTai = $congty->LayCongTyWorstPhanTrang($soCongTyBoQua, $congTyMoiTrang);
                    }
            
            // Title
            $title = "Review lương bổng, đãi ngộ, tuyển dụng, sếp của các công ty - CongTyTop";
            
            // Description
            $description = "Trang Review đầy đủ nhất về lương bổng, đãi ngộ, tuyển dụng, sếp của các công ty IT và liên quan IT - CongTyTop";
            
            $keyword = "review công ty, review cong ty, công ty review, cong ty review, review công việc, review cong viec, review mức lương, review muc luong, review sếp, review sep";
            // View
            $this->view("main-template", [
                "Page" => "main-home",
                "15ReviewMoiNhat" => $review->Lay15ReviewMoiNhat(),
                "SoTrang" => $soTrang,
                "TrangHienTai" => $trangHienTai,
                "CongTyTrangHienTai" => $congTyTrangHienTai,
                "TabCongTy" => $tabCongTy,
                "Title" => $title,
                "Description" => $description,
                "Keyword" => $keyword
            ]);
        }
        else if ($a == "sitemap.xml")
        {
            $server = new Server();
            $baseUrl = $server->get_servername();
            header("Content-type: application/xml; charset=utf-8");
            echo '<?xml version="1.0" encoding="UTF-8">'.PHP_EOL;
        }
    }
}
?>