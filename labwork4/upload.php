<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: home.php');
    exit;
}

if(isset($_FILES['fileToUpload'])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);        
    // Check if image file is a actual image or fake image
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";

    } else {
        echo "Sorry, there was an error uploading your file.";        
    }
   }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Upload txt</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<style>
    table,
    th,
    td {
        border: 0.5px solid black;
    }
</style>

<body>
    <div>
        <h1>Upload</h1>
        <form action="" method="post" enctype="multipart/form-data">
            Select to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload" name="submit">
        </form>        
    </div>    
    <button type="button" onclick="location.href='filelist.php';">Click Me!</button>
    
</body>

</html>