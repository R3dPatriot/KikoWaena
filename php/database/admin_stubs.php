<?php

require_once('../classes/Photo.php');
require_once('../classes/Commentaire.php');

function stubDeleteElement($type, $id) {
    if ($type !== 'photo' && $type !== 'comment') {
        return false;
    } else {
        return $id;
    }
}

function stubUnflagElement($type, $id) {
    if ($type !== 'photo' && $type !== 'comment') {
        return false;
    } else {
        return $id;
    }
}

function stubRecupElementsSignales($type) {
    $photo1 = new Photo(1, 1, 'upgradePHP', 'Progmemer', 'Elouen');
    $photo2 = new Photo(2, 1, 'placesNantes', 'Progmemer', 'Elouen');
    $photo3 = new Photo(3, 2, 'Avengers', 'ISEN-MEMER', 'Alex-DEP');
    $reportedPhotos = array($photo1, $photo2, $photo3);

    if($type === 'photo') {
        return $reportedPhotos;
    } else {
        return false;
    }
}