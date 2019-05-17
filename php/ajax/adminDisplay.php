<?php

require_once('../database/admin_stubs.php');

//Checks the request
$requestType = $_SERVER['REQUEST_METHOD'];

if($requestType === 'GET') {
    $reportedPhotos = stubRecupElementsSignales('photo');
    $data = array();
    foreach ($reportedPhotos as $reportedPhoto) {
        array_push($data, (array)$reportedPhoto);
    }
    $data = json_encode($data);
    header('HTTP/1.1 200 OK');
    echo $data;
    exit;
} else {
    header('HTTP/1.1 400 Bad Request');
    exit;
}