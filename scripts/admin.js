'use strict';

$('#accept').off('click').click(accepter);
$('#delete').off('click').click(supprimer);

function accepter() {
    let i = 3;
    ajaxRequest('PUT', 'php/ajax/unreport.php/photo/' + i, adminCallback);
}

function supprimer() {
    let i = 3;
    ajaxRequest('DELETE', 'php/ajax/unreport.php/photo/' + i, adminCallback);
}

function adminCallback(responseText) {
    console.log(responseText);
}