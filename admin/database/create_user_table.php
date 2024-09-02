<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookshop";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}else{
    echo "connected";
}

$sql = "CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    confirm_password VARCHAR(255) NOT NULL,
    mobile VARCHAR(20) NOT NULL,
    address TEXT,
   
    priyority INT(1) NOT NULL DEFAULT '2'
)";

if ($con->query($sql) === TRUE) {
    echo "table created successfully";
} else {
    echo "Error creating table: " . $con->error;
}

// Close connection
$con->close();
?>
