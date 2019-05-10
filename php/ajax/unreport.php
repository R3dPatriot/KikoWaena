<?php

require_once('../database/admin_stubs.php');

//Checks the request
$requestType = $_SERVER['REQUEST_METHOD'];
/*$request = substr($_SERVER['PATH_INFO'], 1);
$request = explode('/', $request);
$requestRessource = array_shift($request);*/

switch ($requestType) {
    case 'PUT':
        break;
    case 'DELETE':
        break;
    default:
        header('HTTP/1.1 400 Bad Request');
        exit;
}
exit;
