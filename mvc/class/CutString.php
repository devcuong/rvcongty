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
    
    /*tìm kiếm chuỗi con trong chuỗi lớn*/
    function search_string($search, $string){
        $position = strpos($string, $search, 5);
        if (is_numeric($position)){
            return $position;
        }
        else{
            return -1;
        }
    } 
    
    /*xóa chuỗi .see-more__expand*/
    function remove_see_more($string){
        $from = $this->search_string(".see-more__expand", $string);
        if($from<0)
            return $string;
        else
            return substr($string,0,intval($from));
    }
    /*TẠO PHÂN TRANG TRANG CHỦ*/
    function get_nav_render_with_tab($current, $pages, $route, $tab){
        $nav = "";
        if ($pages > 0) {
            $nav .= "<ul class='pagination-list'>";
            if ($current == 1) {
                $nav = $nav."<li><a class='pagination-link' disabled>ĐẦU</a></li>";
            } else {
                $nav = $nav."<li ><a class='pagination-link' href='" . $route . "/?tab=".$tab."&page=1'>ĐẦU</a></li>";
            }
            $i = ($current > 5 ? $current - 4 : 1);
            if ($i != 1) {
                $nav = $nav."<li class='disabled'><a class='pagination-link'>...</a></li>";
            }
            for (; $i <= $current + 4 && $i <= $pages; $i++) {
                if ($i == $current) {
                    $nav = $nav."<li><a class='pagination-link is-current'>" . $i . "</a></li>";
                } else {
                    $nav = $nav."<li><a class='pagination-link' href='" . $route . "/?tab=".$tab."&page=" . $i . "'>" . $i . "</a></li>";
                }
                if ($i == $current + 4 && $i < $pages) {
                    $nav =$nav."<li><a class='pagination-link'>...</a></li>";
                }
            }
            if ($current != $pages) {
                $nav = $nav."<li><a class='pagination-link' href='?tab=".$tab."&page=".$pages."'>CUỐI</a></li>";
            } else {
                $nav = $nav."<li><a class='pagination-link' disabled>CUỐI</a></li>";
            }
            $nav = $nav."</ul>";
        }
        
        return $nav;
    }
    /*TẠO PHÂN TRANG TÌM KIẾM*/
    function get_nav_render_with_search($current, $pages, $route, $keySearch){
        $nav = "";
        if ($pages > 0) {
            $nav .= "<ul class='pagination-list'>";
            if ($current == 1) {
                $nav = $nav."<li><a class='pagination-link' disabled>ĐẦU</a></li>";
            } else {
                $nav = $nav."<li ><a class='pagination-link' href='" . $route . "/&keysearch=".$keySearch."&page=1'>ĐẦU</a></li>";
            }
            $i = ($current > 5 ? $current - 4 : 1);
            if ($i != 1) {
                $nav = $nav."<li class='disabled'><a class='pagination-link'>...</a></li>";
            }
            for (; $i <= $current + 4 && $i <= $pages; $i++) {
                if ($i == $current) {
                    $nav = $nav."<li><a class='pagination-link is-current'>" . $i . "</a></li>";
                } else {
                    $nav = $nav."<li><a class='pagination-link' href='" . $route . "/&keysearch=".$keySearch."&page=" . $i . "'>" . $i . "</a></li>";
                }
                if ($i == $current + 4 && $i < $pages) {
                    $nav =$nav."<li><a class='pagination-link'>...</a></li>";
                }
            }
            if ($current != $pages) {
                $nav = $nav."<li><a class='pagination-link' href='" . $route . "/&keysearch=".$keySearch."&page=".$pages."'>CUỐI</a></li>";
            } else {
                $nav = $nav."<li><a class='pagination-link' disabled>CUỐI</a></li>";
            }
            $nav = $nav."</ul>";
        }
        return $nav;
    }
    /*TẠO PHÂN TRANG VIDEOS*/
    function get_nav_render_videos($current, $pages, $route){
        $nav = "";
        if ($pages > 0) {
            $nav .= "<ul class='pagination-list'>";
            if ($current == 1) {
                $nav = $nav."<li><a class='pagination-link' disabled>ĐẦU</a></li>";
            } else {
                $nav = $nav."<li ><a class='pagination-link' href='" . $route . "&page=1'>ĐẦU</a></li>";
            }
            $i = ($current > 5 ? $current - 4 : 1);
            if ($i != 1) {
                $nav = $nav."<li class='disabled'><a class='pagination-link'>...</a></li>";
            }
            for (; $i <= $current + 4 && $i <= $pages; $i++) {
                if ($i == $current) {
                    $nav = $nav."<li><a class='pagination-link is-current'>" . $i . "</a></li>";
                } else {
                    $nav = $nav."<li><a class='pagination-link' href='" . $route . "&page=" . $i . "'>" . $i . "</a></li>";
                }
                if ($i == $current + 4 && $i < $pages) {
                    $nav =$nav."<li><a class='pagination-link'>...</a></li>";
                }
            }
            if ($current != $pages) {
                $nav = $nav."<li><a class='pagination-link' href='" . $route . "&page=".$pages."'>CUỐI</a></li>";
            } else {
                $nav = $nav."<li><a class='pagination-link' disabled>CUỐI</a></li>";
            }
            $nav = $nav."</ul>";
        }
        return $nav;
    }
}
?>