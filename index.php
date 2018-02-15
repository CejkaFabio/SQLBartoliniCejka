<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="Utenti";

$conn = new mysqli($servername);

if ($conn->connect_error) {
    die("Connessione Fallita: " . $conn->connect_error);
}

$sql = "SELECT id, Nome, Cognome, Email FROM Registro";
if ($conn->query($sql) === TRUE) {
    while($row=$result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['Nome']."</td>";
    echo "<td>".$row['Cognome']."</td>";
    echo "<td>".$row['Email']."</td>";
    echo "<td><button type=\"button\" class=\"btn btn-primary\">Update</button></td>";
    echo "<td><button type=\"button\" class=\"btn btn-danger\">Update</button></td>";
    echo "</tr>";
    }
}
$conn->close();
