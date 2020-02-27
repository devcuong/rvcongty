<?php
class Tnc extends Controller
{
    
    public function Index(){
        // View
        $this->view("main-template", [
            "Page" => "tnc"
        ]);
    }
}
?>
