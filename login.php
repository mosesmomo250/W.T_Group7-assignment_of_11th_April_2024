<?php
session_start();
$servername = "localhost";
$username = "admin";
$password = "bityear2@2024";
$dbname = "bityeartwo2024";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

$uname = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT *FROM user WHERE username='$uname' AND password='$password'";
$result =$conn->query($sql);
if ($result->num_rows >0) {
  // echo "successfully loggedin!";
  header("Location: home.html");
      exit();
} else {
    echo "user not found";
}

$conn->close();
?>
<!-- designed by kwizera valentin 222007317 -->