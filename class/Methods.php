<?php

class Yuuz12Methods{
    
    public $url = 'https://api.telegram.org/bot1265200190:AAFRY7vegSMe5OLD8JdEL41Kw4x5rxXLSp8/';
    
    // 单个关键词并且获取后面单个的参数
    public function sendInfoSingleKey($string, $find, $submb){
        $text = str_replace(" ","",$string);
        $pos1 = strpos($text, $find);
        if($pos1 === 0){
            return mb_substr($text, $submb);
        }else{
            return FALSE;
        }
    }
    
    public function sendMessage($chat_text, $chat_id){
        geturl($this->url . "sendMessage?text=" . $chat_text . "&chat_id=" . $chat_id);
    }
    
    public function sendMessageHTML($chat_text, $chat_id){
        geturl($this->url . "sendMessage?text=" . $chat_text . "&chat_id=" . $chat_id . "&parse_mode=html");
    }
    
    public function sendMessageMarkdowm($chat_text, $chat_id){
        geturl($this->url . "sendMessage?text=" . $chat_text . "&chat_id=" . $chat_id . "&parse_mode=MarkdownV2");
    }
    
    public function sendPhoto($photo_url, $chat_id){
        geturl($this->url . "sendPhoto?photo=" . $photo_url . "&chat_id=" . $chat_id);
    }
    
    public function sendPhotoCaption($photo_url, $chat_id, $photo_caption){
        geturl($this->url . "sendPhoto?photo=" . $photo_url . "&chat_id=" . $chat_id . "&caption=" . $photo_caption);
    }
    
}