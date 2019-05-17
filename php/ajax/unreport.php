<?php

require_once('../database/admin_stubs.php');

//Checks the request
$requestType = $_SERVER['REQUEST_METHOD'];
$request = substr($_SERVER['PATH_INFO'], 1);
$request = explode('/', $request);
$requestRessource = array_shift($request);
$id = array_shift($request);

if ($requestRessource === 'photo' || $requestRessource === 'comment') {
    switch ($requestType) {
        case 'PUT':
            $data = stubUnflagElement($requestRessource, $id);
            if ($data === false) {
                header('HTTP/1.1 503 Service Unavailable');
                exit;
            } else {
                header('HTTP/1.1 200 OK');
                echo $data;
                exit;
            }
            break;
        case 'DELETE':
            $data = stubDeleteElement($requestRessource, $id);
            if ($data === false) {
                header('HTTP/1.1 503 Service Unavailable');
                exit;
            } else {
                header('HTTP/1.1 200 OK');
                echo $data;
                exit;
            }
            break;
        default:
            header('HTTP/1.1 400 Bad Request');
            exit;
    }
    exit;
} else {
    header('HTTP/1.1 400 Bad Request');
    exit;
}

