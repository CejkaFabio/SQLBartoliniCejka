<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="Utenti";

// Create connection
$conn = new mysqli($servername);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "SELECT id, Nome, Cognome, Email FROM Credenziali";
if ($conn->query($sql) === TRUE) {
    while($row=$result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['Nome']."</td>";
    echo "<td>".$row['Cognome']."</td>";
    echo "<td><button type=\"button\" class=\"btn btn-primary\">Update</button></td>";
    echo "<td><button type=\"button\" class=\"btn btn-danger\">Update</button></td>";
    echo "</tr>";
    }
}

$conn->close();
