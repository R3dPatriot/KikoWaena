'use strict';

function accepter() {
    ajaxRequest('PUT', 'php/ajax/unreport.php', adminCallback);
}

function supprimer() {
    ajaxRequest('DELETE', 'php/ajax/unreport.php', adminCallback);
}

function adminCallback(event) {

}