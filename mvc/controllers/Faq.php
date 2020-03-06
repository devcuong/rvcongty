<?php
class Faq extends Controller
{
    
    public function Index(){
        // Title
        $title = "Giải đáp thắc mắc" ;
        
        // Description
        $description = "Giải đáp thắc mắc";
        
        // View
        $this->view("main-template", [
            "Page" => "faq",
            "Title" => $title,
            "Description" => $description
        ]);
    }
}
    ?>