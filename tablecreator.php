<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "wtproject";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE portraiture (
id INT(11) NULL AUTO_INCREMENT PRIMARY KEY,
img VARCHAR(200) NOT NULL)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " .mysqli_error($conn);
}

mysqli_close($conn)

?>
