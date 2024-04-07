<?php
$sql = '';
if(count($KeresFutar) > 1){
    if(is_int(intval($KeresFutar[1]))){
        $sql = 'DELETE FROM futar WHERE fazon=' . $KeresFutar[1];
    }else{
        http_response_code(404);
        echo 'Nem, létező futár.';    
    }
}
require_once '.databaseconnect.php';
$result = $connection->query($sql);
if($result = $connection->query($sql)){   
    http_response_code(200);
    echo 'Sikeres törlés.';
}else{
    http_response_code(404);
    echo 'Sikertelen törlés';
}