<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$email = $_POST["email"];
$pass = $_POST["password"];
$usertype = $_GET["usertype"];

$query = "INSERT INTO users (email, password, `type`) VALUES ('$email','$pass','$usertype')";
mysqli_query($conn,$query);
echo "Your contact information has been saved in our database successfully, click here to login";
?>