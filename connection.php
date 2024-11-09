<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "cafe";

// create connection
$conn = mysqli_connect($servername,$username,$password,$database);

if (isset($_POST['review-button'])) {
  header("Location: login.php");
  exit();
}
?>