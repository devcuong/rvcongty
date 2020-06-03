<?php
require_once 'mvc/class/Server.php';
require_once 'mvc/class/CutString.php';
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
    
    function Index(){
        $trangVideosHienTai= 1;
        $soVideoMoiTrang = 15;
        if (isset($_GET["page"])) {
            $trangVideosHienTai= $_GET["page"];
        }
        $soVideoBoQua = ($trangVideosHienTai- 1) * $soVideoMoiTrang;
        
        // Tất cả video
        $tatCaVideo = $this->VideoModel->TatCaVideo();
        $soVideo = mysqli_num_rows($tatCaVideo);
        $soTrang = ceil($soVideo/ $soVideoMoiTrang);
        $videoTrangHienTai = $this->VideoModel->LayVideoPhanTrang($soVideoBoQua, $soVideoMoiTrang);
        $tatCaPlaylist = $this->PlaylistModel->TatCaPlaylist();
        
        // Tạo navigate phân trang
        $server = new Server();
        $string = new CutString();
        $nav = $string->get_nav_render_videos($trangVideosHienTai, $soTrang, $server->servername."/videos");
        
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
