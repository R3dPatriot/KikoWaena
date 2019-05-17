'use strict';


ajaxRequest('GET', 'php/ajax/adminDisplay.php', displayFlaggedElements);

let acceptButtons = document.getElementsByClassName('accept');
let deleteButtons = document.getElementsByClassName('delete');

for (let i=0 ; i < acceptButtons.length ; i++) {
    (function() {
        let a = i;
        acceptButtons[i].off('click').onclick = accepter(a);
        deleteButtons[i].off('click').onclick = supprimer(a);
    })();
}

function accepter(i) {
    ajaxRequest('PUT', 'php/ajax/unreport.php/photo/' + i, adminCallback);
}

function supprimer(i) {
    ajaxRequest('DELETE', 'php/ajax/unreport.php/photo/' + i, adminCallback);
}

function adminCallback(responseText) {
    console.log(responseText);
}

function displayFlaggedElements(responseText) {
    let response = JSON.parse(responseText);

    for(let i=0 ; i < response.length ; i++) {
        $('#main-panel').append('<div class="panel panel-default"><img id="" src="' + 'users/' + response[i].PhotoidAuteur + '/' + response[i].PhotoidImage +
            '" class="img-responsive col-xs-8" alt="Responsive image"/> <div class="btn-group" role="group" aria-label="Moderation buttons">' +
            '<button type="button" image-id="' + response[i].PhotoidImage +'" class="btn btn-success accept">Accepter</button>' +
            '<button type="button" image-id="' + response[i].PhotoidImage +'" class="btn btn-danger delete">Supprimer</button>' +
            '</div></div>');


    }


}