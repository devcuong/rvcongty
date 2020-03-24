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
        return $stringSchema;
    }
}
?>