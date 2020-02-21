<?php
class Faq extends Controller
{
    
    public function Index(){
        // View
        $this->view("main-template", [
            "Page" => "faq"
        ]);
    }
}
    ?>