<?php
// Include the database configuration file
include 'db.php';
$statusMsg = '';

// File upload path
$targetDir = "img/recipe/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        $name =$_REQUEST['name'];
        $ingredient = $_REQUEST['ingredient'];
        $tutorial = $_REQUEST['tutorial'];
        $video = $_REQUEST['video'];
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $con->query("INSERT into recipes (name, image, ingredient, tutorial, video) VALUES ('$name', '$targetFilePath', '$ingredient', '$tutorial', '$video')");
            if($insert){
                $statusMsg = "New Record Inserted Successfully.</br></br><a href='admin-recipe-view.php'>View Inserted Record</a>";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>