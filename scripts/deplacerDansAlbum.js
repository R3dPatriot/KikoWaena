'use strict';


function deplacerDansAlbum(idPhoto, album, createNew=false){
    
    var data = JSON.stringify({"idPhoto":idPhoto, "album":album, "createNew":createNew});
        
    var xhr = new XMLHttpRequest();
	xhr.open('POST', 'php/ajax/moveInAlbum.php');
	
	xhr.onload = function() {
 		switch (xhr.status) {
 			case 200:
 			case 201:
                console.log("OK");
                //$('#status').html("OK");
				break;
			default: 
                console.log('HTTP error:' + xhr.status);
                //$('#status').html("error");
        }
    }
	
	xhr.send(data);
}