<?php
require_once 'mvc/class/Server.php';
class Schema
{

    function generate_schema($data, $page)
    {
        $server = new Server();
        $serverName = $server->get_servername();
        $stringSchema = "{";
        if ($page == "main-home") {
            $dataSchema = array(
                "@context"=>"https://schema.org/",
                "@type"=>"Organization",
                "url"=>"https:".$serverName,
                "logo"=>"https:".$serverName."/mvc/public/images/logo.png"
            );
            $stringSchema = json_encode($dataSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        }
        if($page == "companies"){
            $tenCongTy = "";
            $slugCongTy = "";
            $idCongTy = "";
            $ratingCount = 0;
            $ratingValue = 0;
            while ($r = mysqli_fetch_array($data)){
                $tenCongTy = $r["tencongty"];
                $slugCongTy = $r["slugcongty"];
                $idCongTy = $r["id"];
                $ratingCount = (float)$r["luotdanhgia"];
                $ratingValue = (float)$r["rate"];
            }
            $dataItemReviewed = array(
                "@type"=>"Organization",
                "name"=>$tenCongTy,
                "sameAs"=>"https:".$serverName."/companies/".$slugCongTy."-".$idCongTy
            );
            
            $dataSchema = array(
                "@context"=>"https://schema.org/",
                "@type"=>"EmployerAggregateRating",
                "itemReviewed"=>$dataItemReviewed,
                "ratingCount"=>$ratingCount,
                "ratingValue"=>$ratingValue
            );
            $stringSchema = json_encode($dataSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        }
        if($page == "video-show"){
            $mainEntityOfPage = array(
                "@type"=>"WebPage",
                "@id"=>""
            );
            $author = array(
                "@type"=>"Person",
                "name"=>"CongTyTop"
            );
            $logo = array(
                "@type"=>"ImageObject",
                "url"=>"https:".$serverName."/mvc/public/images/logo.png",
                "width"=>341,
                "height"=>341
            );
            $publisher = array(
                "@type"=>"Organization",
                "name"=>"CongTyTop - Trang đánh giá công ty, thông tin việc làm đầy đủ nhất",
                "logo"=>$logo
            );
            $tieuDeVideo = "";
            $thoiGian = "";
            $videoId = "";
            while ($r = mysqli_fetch_array($data)){
                $tieuDeVideo = $r["tieudevideo"];
                $thoiGian= $r["thoigian"];
                $videoId = $r["videoid"];
            }
            $dataSchema = array(
                "@context"=>"https://schema.org/",
                "@type"=>"NewsArticle",
                "datePublished"=>$thoiGian,
                "dateModified"=>$thoiGian,
                "mainEntityOfPage"=>$mainEntityOfPage,
                "author"=>$author,
                "publisher"=>$publisher
            );
         
        }
        return $stringSchema;
    }
    
    function generate_schema_for_review($dataCongTy, $dataReview){
        $server = new Server();
        $serverName = $server->get_servername();
        $arraySchemaReview = array();
        $tenCongTy = "";
        $hinhCongTy = "";
        $ratingValue= 0;
        while ($r = mysqli_fetch_array($dataCongTy)){
            $tenCongTy = $r["tencongty"];
            $hinhCongTy = "https:".$serverName."/mvc/public/asset/companies/logo/".$r["logo"];
            $ratingValue = (float)$r["rate"];
        }
        $itemReviewed = array(
            "@type"=>"Organization",
            "image" => $hinhCongTy,
            "name" => $tenCongTy
        );
        $reviewRating = array(
            "@type"=>"Rating",
            "ratingValue"=>$ratingValue
        );
        $author = array(
            "@type"=>"Person",
            "name"=>"Anonymous"
        );
        $publisher = array(
            "@type"=>"Organization",
            "name"=>"Congtytop.com"
        );
        
        //each review schema
        $arraySchemaReview= array(
            "@context"=>"https://schema.org/",
            "@type"=>"Review",
            "itemReviewed"=>$itemReviewed,
            "reviewRating"=>$reviewRating,
            "name"=>$tenCongTy,
            "author"=>$author,
            "publisher"=>$publisher
        );
        $returnArray = array();
        while ($row = mysqli_fetch_array($dataReview)){
            $reviewBody = $row["review_noidung"];
            $arraySchemaReview["reviewBody"]=$reviewBody;
            $stringSchemaReview = json_encode($arraySchemaReview, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
            array_push($returnArray, $stringSchemaReview);
        }
        
        return $returnArray;
    }
}
?>