<?php  
$update = json_decode(file_get_contents('php://input'), true);
$txt = json_encode($update);
//file_put_contents("file.txt", $txt, FILE_APPEND);//Debug，写入收到的post信息
?>