<?php
$servername = "localhost";
$username = "admin";
$password = "bityear2@2024";
$dbname = "bityeartwo2024";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs to prevent SQL injection
    $userid = $conn->real_escape_string($_POST['userid']);
    $comment = $conn->real_escape_string($_POST['Comment']);
    $like = isset($_POST['like']) ? 1 : 0; // Check if the like checkbox is checked

    // Construct SQL query
    $sql = "INSERT INTO comment (userid, comment, like_status) VALUES ('$userid', '$comment', '$like')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully<br>";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>

<!-- designed by gisa patrick 222008906 -->