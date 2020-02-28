<?php
class QuanTri extends Controller
{
    
    public function Index(){
        // View
        $this->view("admin-template", [
            "Page" => "quan-tri"
        ]);
    }
}
    ?>
