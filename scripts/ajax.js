'use strict';

function ajaxRequest(type, request, callback, data = null) {
    //New Request
    let xhr = new XMLHttpRequest();
    xhr.open(type, request);

    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    //Onload function
    xhr.onload = function () {
        switch (xhr.status) {
            case 200:
            case 201:
                console.log(xhr.responseText);
                callback(xhr.responseText, 'success');
                break;
            default:
                console.log('HTTP error: ' + xhr.status);
                httpErrors(xhr.status);
        }
    };

    //Send request
    xhr.send(data);
}

function httpErrors(code) {
    $('#error').html("HTTP Error: " + code);
}