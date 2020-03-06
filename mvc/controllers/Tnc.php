<?php
class Tnc extends Controller
{
    
    public function Index(){
        // Title
        $title = "Điều khoản sử dụng - Miễn trừ trách nhiệm" ;
        
        // Description
        $description = "Điều khoản sử dụng - Miễn trừ trách nhiệm";
        // View
        $this->view("main-template", [
            "Page" => "tnc",
            "Title" => $title,
            "Description" => $description
        ]);
    }
}
?>
