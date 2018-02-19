<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" typer ="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>

</head>
<body>
<table>
<h3 align="center">Tabella SQL Bartolini-Cejka</h3>
<div class="container">
    <form action='Aggiungi.php' method='get'><button class="button">Aggiungi Record</button></form>
    <div class="table table-hover" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Email</th>
            <th>Modifica</th>
            <th>Elimina</th>
        </tr>
        </thead>
</div>

<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="sqlbartolinicejka";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM registro";

$result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['Id']."</td>";
    echo "<td>".$row['Nome']."</td>";
    echo "<td>".$row['Cognome']."</td>";
    echo "<td>".$row['Email']."</td>";
    $riga = $row['Id'];
    echo "<td><form action='Update.php' method='get'><button type=\"submit\" class=\"btn btn-primary\"><input type='hidden' name='identificator' value='$riga'>Update</button></td></form>";
    echo "<td><form action='Delete.php' method='get'><button type=\"submit\" class=\"btn btn-danger\"><input type='hidden' name='identificator' value='$riga'>Delete</button></td></form>";
    echo "</tr>";
    }

echo "</table>";
echo"</div>";
echo"</body>";

$conn->close();
