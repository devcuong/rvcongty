<?php
require_once 'mvc/class/Server.php';

class Schema
{

    /* SCHEMA CHO TRANG CHỦ VÀ TRANG VIDEO */
    function generate_schema_for_vid_videos($data, $page)
    {
        $server = new Server();
        $serverName = $server->get_servername();
        $stringSchema = "{";
        if ($page == "main-home") {
            $dataSchema = array(
                "@context" => "https://schema.org/",
                "@type" => "Organization",
                "url" => "https:" . $serverName,
                "logo" => "https:" . $serverName . "/mvc/public/images/logo.png"
            );
            $stringSchema = json_encode($dataSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        }
        if ($page == "companies") {
            $tenCongTy = "";
            $slugCongTy = "";
            $idCongTy = "";
            $ratingCount = 0;
            $ratingValue = 0;
            while ($r = mysqli_fetch_array($data)) {
                $tenCongTy = $r["tencongty"];
                $slugCongTy = $r["slugcongty"];
                $idCongTy = $r["id"];
                $ratingCount = (float) $r["luotdanhgia"];
                $ratingValue = (float) $r["rate"];
            }
            $dataItemReviewed = array(
                "@type" => "Organization",
                "name" => $tenCongTy,
                "sameAs" => "https:" . $serverName . "/companies/" . $slugCongTy . "-" . $idCongTy
            );
            
            $dataSchema = array(
                "@context" => "https://schema.org/",
                "@type" => "EmployerAggregateRating",
                "itemReviewed" => $dataItemReviewed,
                "ratingCount" => $ratingCount,
                "ratingValue" => $ratingValue
            );
            $stringSchema = json_encode($dataSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        }
        if ($page == "videos") {
            $mainEntityOfPage = array(
                "@type" => "WebPage",
                "@id" => ""
            );
            $author = array(
                "@type" => "Person",
                "name" => "CongTyTop"
            );
            $logo = array(
                "@type" => "ImageObject",
                "url" => "https:" . $serverName . "/mvc/public/images/logo.png",
                "width" => 341,
                "height" => 341
            );
            $publisher = array(
                "@type" => "Organization",
                "name" => "CongTyTop - Trang đánh giá công ty, công việc và cung cấp thông tin việc làm đầy đủ nhất",
                "logo" => $logo
            );
            $thoiGian = "";
            while ($r = mysqli_fetch_array($data)) {
                $thoiGian = $r["thoigian"];
            }
            $image = array(
                "@type" => "ImageObject",
                "url" => "https:" . $serverName . "/mvc/public/images/banner.png",
                "width" => 1105,
                "height" => 341
            );
            $dataSchema = array(
                "@context" => "https://schema.org/",
                "@type" => "NewsArticle",
                "mainEntityOfPage" => $mainEntityOfPage,
                "headline" => "Tổng hợp video về việc làm, nhân sự, lao động, quản trị nguồn nhân lực - CongTyTop",
                "image" => $image,
                "datePublished" => $thoiGian,
                "dateModified" => $thoiGian,
                "author" => $author,
                "publisher" => $publisher,
                "description" => "Chuyên trang tổng hợp video về việc làm, nhân sự, lao động, đánh giá, xu hướng nguồn nhân lực tại Việt Nam - CongTyTop"
            );
            $stringSchema = json_encode($dataSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        }
        if ($page == "video-show") {
            $mainEntityOfPage = array(
                "@type" => "WebPage",
                "@id" => ""
            );
            $author = array(
                "@type" => "Person",
                "name" => "CongTyTop"
            );
            $logo = array(
                "@type" => "ImageObject",
                "url" => "https:" . $serverName . "/mvc/public/images/logo.png",
                "width" => 341,
                "height" => 341
            );
            $publisher = array(
                "@type" => "Organization",
                "name" => "CongTyTop - Trang đánh giá công ty, công việc và cung cấp thông tin việc làm đầy đủ nhất",
                "logo" => $logo
            );
            $tieuDeVideo = "";
            $thoiGian = "";
            $videoId = "";
            $description = "";
            while ($r = mysqli_fetch_array($data)) {
                $tieuDeVideo = $r["tieudevideo"];
                $thoiGian = $r["thoigian"];
                $videoId = $r["videoid"];
                $description = $r["tieudevideo"];
            }
            $image = array(
                "@type" => "ImageObject",
                "url" => "https://img.youtube.com/vi/" . $videoId . "/hqdefault.jpg",
                "width" => 480,
                "height" => 360
            );
            $dataSchema = array(
                "@context" => "https://schema.org/",
                "@type" => "NewsArticle",
                "mainEntityOfPage" => $mainEntityOfPage,
                "headline" => $tieuDeVideo,
                "image" => $image,
                "datePublished" => $thoiGian,
                "dateModified" => $thoiGian,
                "author" => $author,
                "publisher" => $publisher,
                "description" => $description
            );
            $stringSchema = json_encode($dataSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        }
        if ($page == "playlist-show") {
            $mainEntityOfPage = array(
                "@type" => "WebPage",
                "@id" => ""
            );
            $author = array(
                "@type" => "Person",
                "name" => "CongTyTop"
            );
            $logo = array(
                "@type" => "ImageObject",
                "url" => "https:" . $serverName . "/mvc/public/images/logo.png",
                "width" => 341,
                "height" => 341
            );
            $publisher = array(
                "@type" => "Organization",
                "name" => "CongTyTop - Trang đánh giá công ty, công việc và cung cấp thông tin việc làm đầy đủ nhất",
                "logo" => $logo
            );
            $tieuDePlaylist = "";
            $thoiGian = "";
            $videoId = "";
            $description = "";
            while ($r = mysqli_fetch_array($data)) {
                $tieuDePlaylist = $r["tenplaylist"];
                $thoiGian = $r["thoigian"];
                $videoId = $r["thumbnail"];
                $description = $r["tenplaylist"];
            }
            $image = array(
                "@type" => "ImageObject",
                "url" => "https://img.youtube.com/vi/" . $videoId . "/hqdefault.jpg",
                "width" => 480,
                "height" => 360
            );
            $dataSchema = array(
                "@context" => "https://schema.org/",
                "@type" => "NewsArticle",
                "mainEntityOfPage" => $mainEntityOfPage,
                "headline" => $tieuDePlaylist,
                "image" => $image,
                "datePublished" => $thoiGian,
                "dateModified" => $thoiGian,
                "author" => $author,
                "publisher" => $publisher,
                "description" => $description
            );
            $stringSchema = json_encode($dataSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        }
        return $stringSchema;
    }

    /* SCHEMA CHO TRANG NEWS */
    function generate_schema_for_news($tieuDe, $thoiGian,$thumbnai ,$page)
    {
        
        $server = new Server();
        $serverName = $server->get_servername();
        $stringSchema = "{";
        if ($page == "news-detail") {
            $mainEntityOfPage = array(
                "@type" => "WebPage",
                "@id" => ""
            );
            $author = array(
                "@type" => "Person",
                "name" => "CongTyTop"
            );
            $logo = array(
                "@type" => "ImageObject",
                "url" => "https:" . $serverName . "/mvc/public/images/logo.png",
                "width" => 341,
                "height" => 341
            );
            $publisher = array(
                "@type" => "Organization",
                "name" => "CongTyTop - Trang đánh giá công ty, công việc và cung cấp thông tin việc làm đầy đủ nhất",
                "logo" => $logo
            );
            $image = array(
                "@type" => "ImageObject",
                "url" => "https:" . $serverName . "/mvc/public/images/banner.png",
                "width" => 1105,
                "height" => 341
            );
            $dataSchema = array(
                "@context" => "https://schema.org/",
                "@type" => "NewsArticle",
                "mainEntityOfPage" => $mainEntityOfPage,
                "headline" => $tieuDe,
                "image" => $image,
                "datePublished" => $thoiGian,
                "dateModified" => $thoiGian,
                "author" => $author,
                "publisher" => $publisher,
                "description" => $tieuDe
            );
            $stringSchema = json_encode($dataSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        }
        return $stringSchema;
    }

    /* SCHEMA CHO REVIEW */
    function generate_schema_for_review($dataCongTy, $dataReview)
    {
        $server = new Server();
        $serverName = $server->get_servername();
        $arraySchemaReview = array();
        $tenCongTy = "";
        $hinhCongTy = "";
        $ratingValue = 0;
        while ($r = mysqli_fetch_array($dataCongTy)) {
            $tenCongTy = $r["tencongty"];
            $hinhCongTy = "https:" . $serverName . "/mvc/public/asset/companies/logo/" . $r["logo"];
            $ratingValue = (float) $r["rate"];
        }
        $itemReviewed = array(
            "@type" => "Organization",
            "image" => $hinhCongTy,
            "name" => $tenCongTy
        );
        $reviewRating = array(
            "@type" => "Rating",
            "ratingValue" => $ratingValue
        );
        $author = array(
            "@type" => "Person",
            "name" => "Anonymous"
        );
        $publisher = array(
            "@type" => "Organization",
            "name" => "Congtytop.com"
        );
        
        // each review schema
        $arraySchemaReview = array(
            "@context" => "https://schema.org/",
            "@type" => "Review",
            "itemReviewed" => $itemReviewed,
            "reviewRating" => $reviewRating,
            "name" => $tenCongTy,
            "author" => $author,
            "publisher" => $publisher
        );
        $returnArray = array();
        while ($row = mysqli_fetch_array($dataReview)) {
            $reviewBody = $row["review_noidung"];
            $arraySchemaReview["reviewBody"] = $reviewBody;
            $stringSchemaReview = json_encode($arraySchemaReview, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
            array_push($returnArray, $stringSchemaReview);
        }
        
        return $returnArray;
    }
}
?>