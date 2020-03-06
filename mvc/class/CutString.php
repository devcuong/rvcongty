<?php
class CutString{
    
    // Properties
    public $inputstring;
    
    // Methods
    function set_inputstring($inputstring) {
        $this->inputstring = $inputstring;
    }
    function get_outputstring() {
        return $this->inputstring;
    }
    
    function get_first_num_of_words($string, $num_of_words)
    {
        $string = preg_replace('/\s+/', ' ', trim($string));
        $words = explode(" ", $string); // an array
        
        // if number of words you want to get is greater than number of words in the string
        if ($num_of_words > count($words)) {
            // then use number of words in the string
            $num_of_words = count($words);
        }
        
        $new_string = "";
        for ($i = 0; $i < $num_of_words; $i++) {
            $new_string .= $words[$i] . " ";
        }
        
        return trim($new_string);
    }
}
?>