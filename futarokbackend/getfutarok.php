<?php
$sql = '';
if (count($KeresFutar) > 1) {
    if (is_int(intval($KeresFutar[1]))) {
        $sql = 'SELECT * FROM futar WHERE fazon=' . $KeresFutar[1]; 
    } else {
        http_response_code(404);
        echo 'Nem létező futar';
    }
} else {
    $sql = 'SELECT * FROM futar WHERE 1';
}
require_once '.databaseconnect.php';
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    $futarok = array();
    while ($row = $result->fetch_assoc()) {
        $futarok[] = $row;
    }
    http_response_code(200);
    echo json_encode($futarok);
} else {
    http_response_code(404);
    echo 'Nincs ilyen futár';
}
