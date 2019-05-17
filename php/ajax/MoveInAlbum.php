<?php
//include ...

session_start();

$requestType = $_SERVER['REQUEST_METHOD'];


$data = json_decode(file_get_contents('php://input'));
//var_dump($data);

    if($requestType == "POST"){

        if(isset($data->idPhoto) and isset($data->album)){

            $idPhoto = $data->idPhoto;
            $album = $data->album;

            if($data->createNew){
                $newAlbum = createAlbum($_SESSION['utilisateur']->getId(), $album);
                addPhotoToAlbum($newAlbum->getId(), $idPhoto);
            }
            else{
                if($album > 0){
                    addPhotoToAlbum($album, $idPhoto);
                }
                elseif ($album < 0){
                    removePhotoFromAlbum($album, $idPhoto);
                }
            }
            header('HTTP/1.1 200 OK');

        }
        else{
            header('HTTP/1.1 400 Bad Request');
            exit;
        }
    }
    else{
        header('HTTP/1.1 400 Bad Request');
        exit;
    }