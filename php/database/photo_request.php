<?php

define('DB_USER', 'cw_cir2');
define('DB_PASSWORD', '2ric_wc');
define('DB_NAME', 'cw_cir2');
define('DB_SERVER', 'localhost');

function dbConnect()
  {
    try
    {
      $db = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME.';charset=utf8',
        DB_USER, DB_PASSWORD);
    }
    catch (PDOException $exception)
    {
      error_log('Connection error: '.$exception->getMessage());
      return false;
    }
    return $db;
  }

function stubsSignalerImage($id, $report) {
    if($report !== 1) {
        return false;
    }
    
    
}

?>