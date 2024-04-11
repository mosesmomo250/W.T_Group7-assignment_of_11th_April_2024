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

$sql = "SELECT * FROM comment";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>TABLE OF USERS </title>
    <link rel="stylesheet" href="style2.css">
</head>
<header>
<nav>
    <ul>
        <li>
            <img class="logo" src="log.JPG" alt="Logo" width="50" height="50">

        </li>
        <li>
            <a href="home.html">home</a></li>
            <li>
            <a href="about.html">about</a></li>
            <li>
            <a href="contract.html">contract</a></li>
            <li><a href="table.php">table</a></li>
            <li><a href="registration.html">form</a></li>
            <li><a href="list.html">list</a></li>
            <li><a href="article.html">Article</a></li>
            <li><a href="audio.html">Audio</a></li>
            <li><a href="video.html">video</a></li>
            <li><a href="images.html">Images</a></li>
            <li class="dropdown">
            <a href="#">settings</a>
            <div class="dropdown-contents">
                <a href="index.html">login</a>
                <a href="logout.php">logout</a>
                
            </div>
        </li>
    </ul>
</nav>

</header>
<body>
    <center>
    <h1>commment TABLE</h1>
    <table border="1" bgcolor="skyblue" style="border-collapse: collapse; width: 50%; margin-top: 50px;">
        <tr>
            <th style="padding: 10px;">userid</th>
            <th style="padding: 10px;">comment</th>
            <th style="padding: 10px;">like_status</th>
        </tr>
        <?php foreach ($data as $row): ?>
        <tr>
            <td style="padding: 10px;"><?php echo $row['userid']; ?></td>
            <td style="padding: 10px;"><?php echo $row['comment']; ?></td>
            <td style="padding: 10px;"><?php echo $row['like_status']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</center>
</body>
    <BR><BR><BR><BR><BR><BR><footer>
        <p>&copy;UR CBE BIT YEAR 2 @ GROUP seven(7)</p>
    </footer>
</html>
<!-- designed by gisa patrick 222008906 -->