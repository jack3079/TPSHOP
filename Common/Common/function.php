<?php
function TrimAll($str){
    if(is_array($str)){
        foreach ($str as $key=>$val){
            $str[$key] = addslashes($val);
            $str[$key] = trim($val);
            $str[$key] = str_replace(" ", "", $val);
            $str[$key] = str_replace("&nbsp", "", $val);
        }
    }else{
        $str = addslashes($str);
        $str = trim($str);
        $str = str_replace(" ", "", $str);
        $str = str_replace("&nbsp", "", $str);
        $str = str_replace("<img ", "<img ", $str);
    }
    return $str;
    
}
