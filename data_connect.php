
<?php

$servername = "kitchen.gresslers.de";
$username = "d021279c";
$password = "5KhePaTg7ZTdewKV";
$dbname = "d021279c";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
