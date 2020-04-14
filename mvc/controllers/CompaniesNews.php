<?php
require 'mvc/class/Replyer.php';
require 'mvc/class/CutString.php';
require_once 'mvc/class/Schema.php';
class CompaniesNews extends Controller
{
    public $NewsModel;
    
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->NewsModel = $this->model("NewsModel");
    }
    
    function Index($a, $b=NULL){
        if ($b != NULL){
            $urlNews = explode("-", $b);
            $idNews = end($urlNews);
            $news = $this->NewsModel->LayTinTucById($idNews);
        }
    }
}
?>