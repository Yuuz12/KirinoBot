<?php

class module_Load{
    public function get_Plugins_List(){
        $dir = dirname(__FILE__);
        $file = scandir($dir);
        $file_arr = array();
        if(is_dir($dir)){
            if($dh = @opendir($dir)){
                while(($file = readdir($dh)) !== false){
                    if($file != '.' && $file != '..'){
                        if(is_dir($dir . "/" . $file)){
                            $file_arr[] = $file;
                        }
                    }
                }
                closedir($dh);
            }
        }
    }
}

function geturl($url){
    $headerArray =array("Content-type:application/json;","Accept:application/json");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);
    $output = curl_exec($ch);
    curl_close($ch);
    $output = json_decode($output,true);
    return $output;
}