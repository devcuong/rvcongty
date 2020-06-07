<?php
require_once 'mvc/class/Server.php';
require_once 'mvc/class/CutString.php';
require_once 'mvc/class/Schema.php';
class Videos extends Controller
{

    public $VideoModel;

    public $PlaylistModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->VideoModel = $this->model("VideoModel");
        $this->PlaylistModel = $this->model("PlaylistModel");
    }

    function Index($a, $b = NULL)
    {
        if ($b != NULL) {
            // Video id
             $url = explode("-", $b);
             $vidId = end($url);
            // Playlist id
            $playId = "";
            // Lấy video for show
            $video = $this->VideoModel->LayVideoById($vidId);
            // Lấy video for schema
            $video4Schema = $this->VideoModel->LayVideoById($vidId);
            // Tăng lượt view
            $this->VideoModel->CapNhatLuotView($vidId);
            // Lấy playId từ video
            $video4PlayId = $this->VideoModel->LayVideoById($vidId);
            
            while ($row = mysqli_fetch_array($video4PlayId)){
                $playId = $row["playlist"];
            }
            
            // Lấy video bằng playId
            $playList = $this->VideoModel->LayVideoByPlaylistId($playId);
            
            // Lấy playlist để lấy tiêu đề
            $playList4tieuDe = $this->PlaylistModel->LayPlaylistById($playId);
            
            // Tiêu đề
            $tieuDe="";
            while ($row2 = mysqli_fetch_array($playList4tieuDe)){
                $tieuDe= $row2["tenplaylist"];
            }
            
            // Schema
            $schema = new Schema();
            $StringSchema = $schema->generate_schema($video4Schema,"video-show");
            
            // Title
            $title = "Video ".$tieuDe." - CongTyTop";
            
            // Description
            $description = "Video ".$tieuDe;
            
            // Keyword
            $keyword = "Video ".$tieuDe;
            
            // View
            $this->view("main-template", [
                "Page" => "video-show",
                "Title" => $title,
                "Description" => $description,
                "Keyword" => $keyword,
                "Video" => $video,
                "ListVideo" => $playList,
                "VideoId" => $vidId,
                "StringSchema" => $StringSchema
            ]);
        } else {
            $trangVideosHienTai = 1;
            $soVideoMoiTrang = 15;
            if (isset($_GET["page"])) {
                $trangVideosHienTai = $_GET["page"];
            }
            $soVideoBoQua = ($trangVideosHienTai - 1) * $soVideoMoiTrang;
            
            // Tất cả video
            $tatCaVideo = $this->VideoModel->TatCaVideo();
            $soVideo = mysqli_num_rows($tatCaVideo);
            $soTrang = ceil($soVideo / $soVideoMoiTrang);
            $videoTrangHienTai = $this->VideoModel->LayVideoPhanTrang($soVideoBoQua, $soVideoMoiTrang);
            $tatCaPlaylist = $this->PlaylistModel->TatCaPlaylist();
            
            // Tạo navigate phân trang
            $server = new Server();
            $string = new CutString();
            $nav = $string->get_nav_render_videos($trangVideosHienTai, $soTrang, $server->servername . "/videos");
            
            
            
            // Title
            $title = "Video về quản trị nguồn nhân lực";
            
            // Description
            $description = "Review về mức lương, qui trình phỏng vấn, môi trường, tuyển dụng, sếp và công việc tại ";
            
            
            // View
            $this->view("main-template", [
                "Page" => "videos",
                "Title" => $title,
                "Description" => $description,
                "Videos" => $videoTrangHienTai,
                "Playlist" => $tatCaPlaylist,
                "Navigate" => $nav
            ]);
        }
    }
    
    /*PLAYLIST*/
    public function playlist($a, $b, $c=NULL) {
        if($c != NULL){
              // Video id
             $url = explode("-", $c);
             $playId = end($url);
             // Lấy playlist bằng playId
             $playList = $this->VideoModel->LayVideoByPlaylistId($playId);
             $playList2 = $this->VideoModel->LayVideoByPlaylistId($playId);
             $playList3 = $this->VideoModel->LayVideoByPlaylistId($playId);
             // Cập nhật lượt xem video bằng playId
             $this->VideoModel->CapNhatLuotViewBangPlaylist($playId);
             
             // Thông tin
             $tieuDeVideo = "";
             $index = 0;
             while ($row = mysqli_fetch_array($playList3)){
                 if($index == 0){
                    $tieuDeVideo = $row["tieudevideo"];
                 }
                 $index ++; 
             }
            
             
             // Title
             $title = "Video ".$tieuDeVideo;
             
             // Description
             $description = "Video ".$title;
             
             // Keyword
             $keyword = "Video ".$title;
             
             // View
             $this->view("main-template", [
                 "Page" => "playlist-show",
                 "Title" => $title,
                 "Description" => $description,
                 "Keyword" => $keyword,
                 "Playlist" => $playList,
                 "Playlist2" => $playList2
             ]);
        }
    }
}
