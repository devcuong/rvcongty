<?php
Class Schema{
    function generate_schema(){
        $stringSchema = "{";
//         while ($r = mysqli_fetch_array($data)){
            
//         }
        $stringSchema = $stringSchema.'"@context":"https://schema.org/"';
        $stringSchema = $stringSchema."}";
        return $stringSchema;
    }
}
?>