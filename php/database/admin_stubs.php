<?php

require_once('../classes/Photo.php');
require_once('../classes/Commentaire.php');

function stubDeleteElement($type, $id) {
    if ($type !== 'photo' || $type !== 'comment') {
        return false;
    } else {
        return true;
    }
}

function stubUnflagElement($type, $id) {
    if ($type !== 'photo' || $type !== 'comment') {
        return false;
    } else {
        return true;
    }
}

function recupElementSignales($type) {
    $reportedPhotos = array();

    if($type === 'photo') {
    }
}