<?php
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

    $KeresFutar = explode('/', $_SERVER['QUERY_STRING']);
    //var_dump($KeresPizza)
    if($KeresPizza[0] === "futarok"){
        require_once 'futarokbackend/index.php';
    }else{
        http_response_code(405);
        echo "Nincs ilyen API";
    }
?>