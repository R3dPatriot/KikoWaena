<?php

require_once("../classes/Photo.php");


$user_id = 420; //Get user ID here
$number = 69; //Get the number of the photo here
$destination = "../../users/".$user_id."/".$number;

$title = $_POST['imageName'];

if(isset($_POST['privacy'])) {
    $private = true;
} else {
    $private = false;
}

$photo = new Photo($number, $user_id, $title);
//here we can request the user from the database to add author name

if (isset($_FILES['uploadedFile'])) {
    move_uploaded_file($_FILES['uploadedFile'] ,$destination);
    //alert
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<div class="container" id="mainContainer">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Upload Form</h3>
        </div>
        <div class="panel-body">
            <form action="php/pages/imageUpload.php">
                <div class="form-group">
                    <label for="imageName">Image title</label>
                    <input type="text" class="form-control" id="imageName" placeholder="Type in ..." name="imageName">
                </div>
                <div class="form-group">
                    <label for="imageFile">File input</label>
                    <input type="file" id="imageFile" name="uploadedFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="privacy"> Photo privée
                    </label>
                </div>
                <div class="form-group">
                    <label for="imageDescription">Description</label>
                    <textarea class="form-control" rows="5" id="imageDescription" name="imageDescription"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script
</body>
</html>


