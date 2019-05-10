'use strict';

$('#signal_button').unbind('click').click(function ()
{
  ajaxRequest('POST', 'php/ajax/report.php/', signalerImage);
});

function signalerImage(id) {
    var data;
    var text = '';
    
    // Decode JSON response
    data = JSON.parse(id);
    console.log(data);
    
    for(var i = 0; i < data.length; i++) {
        text += '<p"' + data[i].id + '">Vous avez signalé la photo d\'id ' + data[i].id + '</p>';
        $('#report-message').html(text);
    }
     
}
