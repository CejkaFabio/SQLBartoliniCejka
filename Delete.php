<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sqlbartolinicejka";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Id=$_GET['identificator'];

$sql = "DELETE FROM registro WHERE Id=$Id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
header('Location: http://localhost:63342/SQLBartoliniCejka/index.php?');
$conn->close();